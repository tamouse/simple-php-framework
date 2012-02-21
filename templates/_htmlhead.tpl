{*
 * Copyright (C) 2012 Tamara Temple Web Development
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *}{**   
 * _htmlhead - standard HTML header stuff for this application
 *
 * @author Tamara Temple tamara@tamaratemple.com
 * @version isoD
 * @copyright 2012 Tamara Temple Web Development
 * @license license
 * @package default
 *
**}{config_load file="simplegallery.conf"}
<title>{#app_name#} - {#page_title#}</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="generator" content="TextMate">
<meta name="author" content="{#app_author_name#} <{#app_author_email#}>">
<meta name="copyright" content="Copyright &copy; {#app_copyright_startyear#} by {#app_copyright_owner#}">
<meta name="license" content="{#app_license_type#} {#app_license_url#}">
<meta name="keywords" content="{#keywords#}">
<meta name="description" content="{#description#}">
{include file="_styles.tpl"}
{include file="_scripts.tpl"}
