<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2013 Leo Feyer
 *
 * @package   customarticle
 * @author    Christian Romeni  <christian@romeni.eu>
 * @link      https://romeni.eu
 * @license   GNU
 * @copyright Romeni WebDesign
 */

/**
 * Add palettes to tl_layout
 */
$GLOBALS['TL_DCA']['tl_layout']['palettes']['default'] = str_replace('cols;','cols;{Grid},activateCArticles,gridXS,gridSM,gridMD,gridLG,widthXS,widthSM,widthMD,widthLG;', $GLOBALS['TL_DCA']['tl_layout']['palettes']['default']);

$GLOBALS['TL_DCA']['tl_layout']['fields']['activateCArticles'] = array (
'label'     => &$GLOBALS['TL_LANG']['tl_layout']['activateCArticles'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50 m12'),
    'sql'                     => "char(1) NOT NULL default ''"
);

/**
 * Add fields to tl_layout
 */
$GLOBALS['TL_DCA']['tl_layout']['fields']['gridXS'] = array (
    'label'     => &$GLOBALS['TL_LANG']['tl_layout']['gridXS'],
    'inputType' => 'inputUnit',
    'options'   => $GLOBALS['TL_CSS_UNITS'],
    'eval'      => array('includeBlankOption'=>true, 'rgxp'=>'digit_auto_inherit', 'maxlength' => 20, 'tl_class'=>'w25 clr'),
    'sql'       => "varchar(64) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_layout']['fields']['gridSM'] = array (
    'label'     => &$GLOBALS['TL_LANG']['tl_layout']['gridSM'],
    'inputType' => 'inputUnit',
    'options'   => $GLOBALS['TL_CSS_UNITS'],
    'eval'      => array('includeBlankOption'=>true, 'rgxp'=>'digit_auto_inherit', 'maxlength' => 20, 'tl_class'=>'w25'),
    'sql'       => "varchar(64) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_layout']['fields']['gridMD'] = array (
    'label'     => &$GLOBALS['TL_LANG']['tl_layout']['gridMD'],
    'inputType' => 'inputUnit',
    'options'   => $GLOBALS['TL_CSS_UNITS'],
    'eval'      => array('includeBlankOption'=>true, 'rgxp'=>'digit_auto_inherit', 'maxlength' => 20, 'tl_class'=>'w25'),
    'sql'       => "varchar(64) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_layout']['fields']['gridLG'] = array (
    'label'     => &$GLOBALS['TL_LANG']['tl_layout']['gridLG'],
    'inputType' => 'inputUnit',
    'options'   => $GLOBALS['TL_CSS_UNITS'],
    'eval'      => array('includeBlankOption'=>true, 'rgxp'=>'digit_auto_inherit', 'maxlength' => 20, 'tl_class'=>'w25'),
    'sql'       => "varchar(64) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_layout']['fields']['widthXS'] = array (
    'label'     => &$GLOBALS['TL_LANG']['tl_layout']['widthXS'],
    'inputType' => 'inputUnit',
    'options'   => $GLOBALS['TL_CSS_UNITS'],
    'eval'      => array('includeBlankOption'=>true, 'rgxp'=>'digit_auto_inherit', 'maxlength' => 20, 'tl_class'=>'w25'),
    'sql'       => "varchar(64) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_layout']['fields']['widthSM'] = array (
    'label'     => &$GLOBALS['TL_LANG']['tl_layout']['widthSM'],
    'inputType' => 'inputUnit',
    'options'   => $GLOBALS['TL_CSS_UNITS'],
    'eval'      => array('includeBlankOption'=>true, 'rgxp'=>'digit_auto_inherit', 'maxlength' => 20, 'tl_class'=>'w25'),
    'sql'       => "varchar(64) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_layout']['fields']['widthMD'] = array (
    'label'     => &$GLOBALS['TL_LANG']['tl_layout']['widthMD'],
    'inputType' => 'inputUnit',
    'options'   => $GLOBALS['TL_CSS_UNITS'],
    'eval'      => array('includeBlankOption'=>true, 'rgxp'=>'digit_auto_inherit', 'maxlength' => 20, 'tl_class'=>'w25'),
    'sql'       => "varchar(64) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_layout']['fields']['widthLG'] = array (
    'label'     => &$GLOBALS['TL_LANG']['tl_layout']['widthLG'],
    'inputType' => 'inputUnit',
    'options'   => $GLOBALS['TL_CSS_UNITS'],
    'eval'      => array('includeBlankOption'=>true, 'rgxp'=>'digit_auto_inherit', 'maxlength' => 20, 'tl_class'=>'w25'),
    'sql'       => "varchar(64) NOT NULL default ''"
);