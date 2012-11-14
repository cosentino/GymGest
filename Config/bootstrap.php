<?php
/**
 * This file is loaded automatically by the app/webroot/index.php file after core.php
 *
 * This file should load/create any application wide configuration settings, such as
 * Caching, Logging, loading additional configuration files.
 *
 * You should also use this file to include any files that provide global functions/constants
 * that your application uses.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.10.8.2117
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

// Setup a 'default' cache configuration for use in the application.
Cache::config('default', array('engine' => 'File'));

/**
 * The settings below can be used to set additional paths to models, views and controllers.
 *
 * App::build(array(
 *     'Model'                     => array('/path/to/models', '/next/path/to/models'),
 *     'Model/Behavior'            => array('/path/to/behaviors', '/next/path/to/behaviors'),
 *     'Model/Datasource'          => array('/path/to/datasources', '/next/path/to/datasources'),
 *     'Model/Datasource/Database' => array('/path/to/databases', '/next/path/to/database'),
 *     'Model/Datasource/Session'  => array('/path/to/sessions', '/next/path/to/sessions'),
 *     'Controller'                => array('/path/to/controllers', '/next/path/to/controllers'),
 *     'Controller/Component'      => array('/path/to/components', '/next/path/to/components'),
 *     'Controller/Component/Auth' => array('/path/to/auths', '/next/path/to/auths'),
 *     'Controller/Component/Acl'  => array('/path/to/acls', '/next/path/to/acls'),
 *     'View'                      => array('/path/to/views', '/next/path/to/views'),
 *     'View/Helper'               => array('/path/to/helpers', '/next/path/to/helpers'),
 *     'Console'                   => array('/path/to/consoles', '/next/path/to/consoles'),
 *     'Console/Command'           => array('/path/to/commands', '/next/path/to/commands'),
 *     'Console/Command/Task'      => array('/path/to/tasks', '/next/path/to/tasks'),
 *     'Lib'                       => array('/path/to/libs', '/next/path/to/libs'),
 *     'Locale'                    => array('/path/to/locales', '/next/path/to/locales'),
 *     'Vendor'                    => array('/path/to/vendors', '/next/path/to/vendors'),
 *     'Plugin'                    => array('/path/to/plugins', '/next/path/to/plugins'),
 * ));
 *
 */

/**
 * Custom Inflector rules, can be set to correctly pluralize or singularize table, model, controller names or whatever other
 * string is passed to the inflection functions
 *
 * Inflector::rules('singular', array('rules' => array(), 'irregular' => array(), 'uninflected' => array()));
 * Inflector::rules('plural', array('rules' => array(), 'irregular' => array(), 'uninflected' => array()));
 *
 */


//30/10/2012
/*
Inflector::reset();

Inflector::rules('singular', array(
	'irregular' => array(
		'utenti' => 'utente',
		'presenze' => 'presenza',
		'tipi' => 'tipo',
		'abbonamenti' => 'abbonamento',
		'tesseramenti' => 'tesseramento',
		'corsi' => 'corso',
		'corsi_utenti' => 'corso_utente',
		'tipi_abbonamenti' => 'tipo_abbonamento',
		'tipi_abbonamenti_tipi_tesseramenti' => 'tipo_abbonamento_tipo_tesseramento',
		'tipi_corsi' => 'tipo_corso',
		'tipi_corsi_tipi_tesseramenti' => 'tipo_corso_tipo_tesseramento',
		'tipi_presenze' => 'tipo_presenza',
		'tipi_presenze_tipi_tesseramenti' => 'tipo_presenza_tipo_tesseramento',
		'tipi_tesseramenti' => 'tipo_tesseramento',
		'CorsiUtenti' => 'CorsoUtente',
		'TipiAbbonamenti' => 'TipoAbbonamento',
		'TipiAbbonamentiTipiTesseramenti' => 'TipoAbbonamentoTipoTesseramento',
		'TipiCorsi' => 'TipoCorso',
		'TipiCorsiTipiTesseramenti' => 'TipoCorsoTipoTesseramento',
		'TipiPresenze' => 'TipoPresenza',
		'TipiPresenzeTipiTesseramenti' => 'TipoPresenzaTipoTesseramento',
		'TipiTesseramenti' => 'TipoTesseramento',
	)
));

Inflector::rules('plural', array(
	'irregular' => array(
		'utente' => 'utenti',
		'presenza' => 'presenze',
		'tipo' => 'tipi',
		'abbonamento' => 'abbonamenti',
		'tesseramento' => 'tesseramenti',
		'corso' => 'corsi',
		'corso_utente' => 'corsi_utenti',
		'tipo_abbonamento' => 'tipi_abbonamenti',
		'tipo_abbonamento_tipo_tesseramento' => 'tipi_abbonamenti_tipi_tesseramenti',
		'tipo_corso' => 'tipi_corsi',
		'tipo_corso_tipo_tesseramento' => 'tipi_corsi_tipi_tesseramenti',
		'tipo_presenza' => 'tipi_presenze',
		'tipo_presenza_tipo_tesseramento' => 'tipi_presenze_tipi_tesseramenti',
		'tipo_tesseramento' => 'tipi_tesseramenti',
		'CorsoUtente' => 'CorsiUtenti',
		'TipoAbbonamento' => 'TipiAbbonamenti',
		'TipoAbbonamentoTipoTesseramento' => 'TipiAbbonamentiTipiTesseramenti',
		'TipoCorso' => 'TipiCorsi',
		'TipoCorsoTipoTesseramento' => 'TipiCorsiTipiTesseramenti',
		'TipoPresenza' => 'TipiPresenze',
		'TipoPresenzaTipoTesseramento' => 'TipiPresenzeTipiTesseramenti',
		'TipoTesseramento' => 'TipiTesseramenti',
	)
));
*/

//29/10/2012
 /*
Inflector::rules('singular', array(
	'rules' => array(
		'/(utent)i$/i' => '\1e',
		'/(presenz)e$/i' => '\1a',		
		'/(tip|abbonament|tesserament|cors)i$/i' => '\1o',	
		'/(cors)i(_?)(utent)i$/i' => '\1o\2\3e',
	)
));

Inflector::rules('plural', array(
	'rules' => array(
		'/(utent)e/i' => '\1i',
		'/(presenz)a$/i' => '\1e',
		'/(tip|abbonament|tesserament|cors)o$/i' => '\1i',
		'/(cors)o(_?)(utent)e$/i' => '\1i\2\3i',
	)
));
*/

/* 

//28/10/2012
 
Inflector::rules('singular', array(
	'rules' => array(
		'/^(utent)i$/i' => '\1e',
		'/^(presenz)e$/i' => '\1a',		
		'/^(tip|abbonament|tesserament|cors)i$/i' => '\1o',
		'/^(tip)i(_?)(abbonament|tesserament|cors)i$/i' => '\1o\2\3o',
		'/^(tip)i(_?)(presenz)e$/i' => '\1o\2\3a',
		'/^(tip)i(_?)(abbonament|cors)i(_?)(tip)i(_?)(tesserament)i$/i' => '\1o\2\3o\4\5o\6\7o',
		'/^(tip)i(_?)(presenz)e(_?)(tip)i(_?)(tesserament)i$/i' => '\1o\2\3a\4\5o\6\7o',		
		'/^(cors)i(_?)(utent)i$/i' => '\1o\2\3e',
	)
));

Inflector::rules('plural', array(
	'rules' => array(
		'/^(utent)e$/i' => '\1i',
		'/^(presenz)a$/i' => '\1e',
		'/^(tip|abbonament|tesserament|cors)o$/i' => '\1i',
		'/^(tip)o(_?)(abbonament|tesserament|cors)o$/i' => '\1i\2\3i',
		'/^(tip)o(_?)(presenz)a$/i' => '\1i\2\3e',
		'/^(tip)o(_?)(abbonament|cors)o(_?)(tip)o(_?)(tesserament)o$/i' => '\1i\2\3i\4\5i\6\7i',
		'/^(tip)o(_?)(presenz)a(_?)(tip)o(_?)(tesserament)o$/i' => '\1i\2\3e\4\5i\6\7i',		
		'/^(cors)o(_?)(utent)e$/i' => '\1i\2\3i',
	)
));

*/ 

/**
 * Plugins need to be loaded manually, you can either load them one by one or all of them in a single call
 * Uncomment one of the lines below, as you need. make sure you read the documentation on CakePlugin to use more
 * advanced ways of loading plugins
 *
 * CakePlugin::loadAll(); // Loads all plugins at once
 * CakePlugin::load('DebugKit'); //Loads a single plugin named DebugKit
 *
 */
//CakePlugin::load('Search');
CakePlugin::loadAll(); 
 
/**
 * You can attach event listeners to the request lifecyle as Dispatcher Filter . By Default CakePHP bundles two filters:
 *
 * - AssetDispatcher filter will serve your asset files (css, images, js, etc) from your themes and plugins
 * - CacheDispatcher filter will read the Cache.check configure variable and try to serve cached content generated from controllers
 *
 * Feel free to remove or add filters as you see fit for your application. A few examples:
 *
 * Configure::write('Dispatcher.filters', array(
 *		'MyCacheFilter', //  will use MyCacheFilter class from the Routing/Filter package in your app.
 *		'MyPlugin.MyFilter', // will use MyFilter class from the Routing/Filter package in MyPlugin plugin.
 * 		array('callbale' => $aFunction, 'on' => 'before', 'priority' => 9), // A valid PHP callback type to be called on beforeDispatch
 *		array('callbale' => $anotherMethod, 'on' => 'after'), // A valid PHP callback type to be called on afterDispatch
 *
 * ));
 */
Configure::write('Dispatcher.filters', array(
	'AssetDispatcher',
	'CacheDispatcher'
));

/**
 * Configures default file logging options
 */
App::uses('CakeLog', 'Log');
CakeLog::config('debug', array(
	'engine' => 'FileLog',
	'scopes' => array('notice', 'info', 'debug'),
	'file' => 'debug',
));
CakeLog::config('error', array(
	'engine' => 'FileLog',
	'scopes' => array('warning', 'error', 'critical', 'alert', 'emergency'),
	'file' => 'error',
));
