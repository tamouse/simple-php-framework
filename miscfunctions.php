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
 * miscfunctions - miscellaneous functions that don't really go anywhere else
 *
 * @author Tamara Temple tamara@tamaratemple.com
 * @version \$Id\$
 * @copyright 2012 Tamara Temple Web Development
 * @package default
 **/


/**
 * gather up the necessary info, pass it to smarty and then call smarty to display the template
 *
 * @return void
 * @param string $template - name of template to display
 * @global object $smarty
 * @author Tamara Temple
 **/
function display($template)
{
	global $smarty,$Messages,$Errors;

	$smarty->configLoad(SMARTYCONFIGFILE,ucfirst($template));
	$smarty->assign('messages',(isset($Messages))?$Messages:array());
	$smarty->assign('errors',(isset($Errors))?$Errors:array());
	$smarty->display($template.".tpl");
}