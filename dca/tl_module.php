<?php

/**
 * pageimage Extension for Contao Open Source CMS
 *
 * @copyright  Copyright (c) 2009-2014, terminal42 gmbh
 * @author     terminal42 gmbh <info@terminal42.ch>
 * @license    http://opensource.org/licenses/lgpl-3.0.html LGPL
 * @link       http://github.com/terminal42/contao-pageimage
 */


/**
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['pageImage'] = '{title_legend},name,headline,type;{config_legend},imgSize,inheritPageImage,levelOffset;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';
$GLOBALS['TL_DCA']['tl_module']['palettes']['backgroundSlider'] = '{title_legend},name,headline,type;{config_legend},imgSize,inheritPageImage;levelOffset,showLevel,slider_transition,slider_autostart,slider_randomOrder,slider_interval,slider_animationDuration;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';


/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['inheritPageImage'] = array
(
    'label'         => &$GLOBALS['TL_LANG']['tl_module']['inheritPageImage'],
    'exclude'       => true,
    'inputType'     => 'checkbox',
    'eval'          => array('tl_class'=>'w50 m12'),
    'sql'           => "char(1) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_module']['fields']['slider_autostart'] = array
(
    'label'         => &$GLOBALS['TL_LANG']['tl_module']['slider_autostart'],
    'exclude'       => true,
    'default'       => '1',
    'inputType'     => 'checkbox',
    'eval'          => array('tl_class'=>'w50 m12'),
    'sql'           => "char(1) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_module']['fields']['slider_randomOrder'] = array
(
    'label'         => &$GLOBALS['TL_LANG']['tl_module']['slider_randomOrder'],
    'exclude'       => true,
    'inputType'     => 'checkbox',
    'eval'          => array('tl_class'=>'w50 m12'),
    'sql'           => "char(1) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_module']['fields']['slider_interval'] = array
(
    'label'         => &$GLOBALS['TL_LANG']['tl_module']['slider_interval'],
    'exclude'       => true,
    'default'       => '5000',
    'inputType'     => 'text',
    'eval'          => array('rgxp'=>'digit', 'mandatory'=>true, 'maxlength'=>6, 'tl_class'=>'w50'),
    'sql'           => "int(6) unsigned NOT NULL default '0'",
);

$GLOBALS['TL_DCA']['tl_module']['fields']['slider_animationDuration'] = array
(
    'label'         => &$GLOBALS['TL_LANG']['tl_module']['slider_animationDuration'],
    'exclude'       => true,
    'inputType'     => 'text',
    'default'       => 600,
    'eval'          => array('rgxp'=>'digit', 'mandatory'=>true, 'maxlength'=>6, 'tl_class'=>'w50'),
    'sql'           => "int(6) unsigned NOT NULL default '0'",
);

$GLOBALS['TL_DCA']['tl_module']['fields']['slider_transition'] = array
(
    'label'         => &$GLOBALS['TL_LANG']['tl_module']['slider_transition'],
    'exclude'       => true,
    'inputType'     => 'select',
    'options'       => array(0, 1),
    'reference'     => array(
        0   => 'none',
        1   => 'fade',
        2   => 'slide down',
        3   => 'slide left',
        4   => 'slide top',
        5   => 'slide right',
        6   => 'blind horizontal',
        7   => 'blind vertical',
        90  => 'slide right/left',
        91  => 'slide top/down'
    ),
    'default'       => 1,
    'eval'          => array('mandatory'=>true, 'maxlength'=>6, 'tl_class'=>'w50'),
    'sql'           => "int(2) unsigned NOT NULL default '0'",
);
