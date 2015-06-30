<?php if (!defined('APPLICATION')) exit();
/*	Copyright 2015 Zachary Doll
*	This program is free software; you can redistribute it and/or
*   modify it under the terms of the GNU General Public License
*   as published by the Free Software Foundation; either version 2
*   of the License, or (at your option) any later version.
*   
*   This program is distributed in the hope that it will be useful,
*   but WITHOUT ANY WARRANTY; without even the implied warranty of
*   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*   GNU General Public License for more details.
*   
*   You should have received a copy of the GNU General Public License
*   along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/
$PluginInfo['PrintLink'] = array(
	'Name' => 'Print Link',
	'Description' => 'Adds a link to print a discussion with a CSS file designed for printing.',
	'Version' => '0.1',
	'RequiredApplications' => array('Vanilla' => '2.1.11'),
	'Author' => 'Zachary Doll',
	'AuthorEmail' => 'hgtonight@daklutz.com',
	'AuthorUrl' => 'http://www.daklutz.com',
	'License' => 'GPLv2'
);

class PrintLink extends Gdn_Plugin {

    public function discussionController_render_before($sender) {
        $sender->AddJsFile($this->GetResource('js/printlink.js', false, false));
        $sender->AddCssFile($this->GetResource('design/printlink.css', false, false));
    }

    public function Setup() {}
}
