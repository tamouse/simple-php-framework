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
 * _layout - base layout template
 *
 * @author Tamara Temple tamara@tamaratemple.com
 * @version 2012-02-21
 * @copyright 2012 Tamara Temple Web Development
 * @license GPLv3
 * @package simplegallery
 *
**}{*
	Set up the basic page layout for the application
*}<!DOCTYPE HTML>
<html>
<head>{include "_htmlhead.tpl"}</head>
<body>{include "_pageheader.tpl"}{include "_messages.tpl"}{include "_navigation.tpl"}{block name="pagecontent"}{/block}{include "_pagefooter.tpl"}</body>
</html>
