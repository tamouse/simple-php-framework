{*
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
 # ***** END LICENSE BLOCK ***** *}{**   
 * messages - sub-template to display messages and errors from the application
 *
 * @author Tamara Temple tamara@tamaratemple.com
 * @version isoD
 * @copyright 2012 Tamara Temple Web Development
 * @license license
 * @package default
 *
**}

<div class="errors">
	<ul>{foreach from=$errors item=error name=errorloop}
		<li>{$error}</li>
{/foreach}</ul>
</div>
<div class="messages">
	<ul>{foreach from=$messages item=message name=messageloop}
		<li>{$message}</li>
{/foreach}</ul>
</div>

