<?php
/*
  # ***** BEGIN LICENSE BLOCK *****
  # Copyright (C) 2012 Tamara Temple Web Development
  # 
  # This program is free software: you can redistribute it and/or modify
  # it under the terms of the GNU General Public License as published by
  # the Free Software Foundation, either version 3 of the License, or
  # (at your option) any later version.
  # 
  # This program is distributed in the hope that it will be useful,
  # but WITHOUT ANY WARRANTY; without even the implied warranty of
  # MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  # GNU General Public License for more details.
  # 
  # You should have received a copy of the GNU General Public License
  # along with this program.  If not, see <http://www.gnu.org/licenses/>.
  # 
  # ***** END LICENSE BLOCK ***** */

/**
 * config.inc - configuration settings for simplegallery
 *
 * @author Tamara Temple tamara@tamaratemple.com
 * @version 2012-02-21
 * @copyright 2012 Tamara Temple Web Development
 * @license GPLv3
 * @package simplegallery
 *
 *
 **/


define('APP_ROOT', dirname(__FILE__).DIRECTORY_SEPARATOR);

define('APP_URL',
	'http://' . 
	$_SERVER['SERVER_NAME'] .
	((isset($_SERVER['SERVER_PORT']))?':'.$_SERVER['SERVER_PORT']:'') .
	'/' .
	((isset($_SERVER['SCRIPT_NAME'])) ? dirname($_SERVER['SCRIPT_NAME']) . '/' : '')
	);



