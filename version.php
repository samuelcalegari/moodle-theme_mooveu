<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Moove UPVD.
 *
 * @package    theme_mooveu
 * @copyright  2023 Samuel Calegari - UPVD
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// This line protects the file from being accessed by a URL directly.
defined('MOODLE_INTERNAL') || die();

// This is the component name of the plugin - it always starts with 'theme_'
// for themes and should be the same as the name of the folder.
$plugin->component = 'theme_mooveu';

// This is the version of the plugin.
$plugin->version = 2023020300;

// This is the named version.
$plugin->release = '1.0';

// This is a stable release.
$plugin->maturity = MATURITY_STABLE;

// This is the version of Moodle this plugin requires.
$plugin->requires = 2022112800;

// This is a list of plugins, this plugin depends on (and their versions).
$plugin->dependencies = [
    'theme_moove' => 2022112801,
    'theme_boost' => 2022041900
];
