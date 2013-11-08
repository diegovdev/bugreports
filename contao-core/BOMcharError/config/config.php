<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2013 Leo Feyer
 *
 * @package   TravelPackages
 * @author    Diego Carvallo
 * @license   LGPL
 * @copyright Rococo Labs 2013+
 */


/**
 * BACK END MODULES
 *
 * Back end modules are stored in a global array called "BE_MOD". You can add
 * your own modules by adding them to the array.
 */
 array_insert($GLOBALS['BE_MOD'], 1, array('travel'=>array()));
 
 $GLOBALS['BE_MOD']['travel']['tl_travel_attribute'] = array
 (
    'tables'       => array('tl_travel_attribute'),
    'icon'         => 'system/modules/travelpackages/assets/table_gear.png',
	'stylesheet'   => 'system/modules/travelpackages/assets/be_styles.css',
 );
 
