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
 * Table tl_travel_attribute
 */
$GLOBALS['TL_DCA']['tl_travel_attribute'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'               => 'Table',
		'enableVersioning'            => true,
		'sql' => array
		(
			'keys' => array
			(
				'id' => 'primary'
			)
		)
	),

	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'                    => 1,
			'fields'                  => array('type','name'),
			'flag'                    => 11,
            'panelLayout'             => 'filter,limit'
        ),
		'label' => array
		(
			'fields'                  => array('name', 'description'),
			'format'                  => '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp %s <span style="color:#b3b3b3;padding-left:3px;">[%s]</span>'
		),
		'global_operations' => array
		(
			'all' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['MSC']['all'],
				'href'                => 'act=select',
				'class'               => 'header_edit_all',
				'attributes'          => 'onclick="Backend.getScrollOffset();" accesskey="e"'
			)
		),
		'operations' => array
		(
			'edit' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_travel_attribute']['edit'],
				'href'                => 'act=edit',
				'icon'                => 'edit.gif'
			),
			'copy' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_travel_attribute']['copy'],
				'href'                => 'act=copy',
				'icon'                => 'copy.gif'
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_travel_attribute']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"'
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_travel_attribute']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.gif'
			)
		)
	),

	// Edit
	'edit' => array
	(
		'buttons_callback' => array()
	),

	// Palettes
	'palettes' => array
	(
		'__selector__'                => array(''),
		'default'                     => '{name_legend},name,type,description;'
	),

	// Subpalettes
	'subpalettes' => array
	(
		''                            => ''
	),

	// Fields
	'fields' => array
	(
		'id' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL auto_increment"
		),
		'tstamp' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'type' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_travel_attribute']['type'],
			'exclude'                 => true,
			'filter'                  => true,
			'search'                  => false,
			'inputType'               => 'select',
            'options'                 => array('transport', 'guide', 'insurance', 'tickets', 'food', 'equipment', 'bringwith', 'condition'),
            'reference'               => $GLOBALS['TL_LANG']['tl_travel_attribute']['type_names'],
			'eval'                    => array('mandatory'=>true, 'tl_class'=>'w50 clr', 'includeBlankOption'=>true),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'name' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_travel_attribute']['name'],
			'exclude'                 => true,
			'filter'                  => false,
			'search'                  => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'tl_class'=>'w50 clr'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'description' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_travel_attribute']['description'],
			'exclude'                 => true,
			'filter'                  => false,
			'search'                  => false,
			'inputType'               => 'textarea',
			'eval'                    => array('mandatory'=>false, 'tl_class'=>'clr', 'style'=>'height:65px;width:310px'),
			'sql'                     => "text NOT NULL"
		)
	)
);




class tl_travel_attribute extends \Backend {
	/*
	 * List attributes
	 * @param array
	 * @return string
	 */
	public function listRecords($arrRow) {
		return '<div><p><strong>'.$arrRow['name'].'</strong></br>'.$arrRow['description'].'</p></div>';
	}
	
}