<?php
/*
  Plugin Name: MobileLinkGeneratorPlugin
  Plugin URI: https://github.com/roboweaver/MobileLinkGeneratorPlugin
  Description:
  Version: 1.0.0
  Author: robweaver
  Author URI:
  License: GPLv2
 */

/*
  Copyright (C) 2016 robweaver

  This program is free software; you can redistribute it and/or
  modify it under the terms of the GNU General Public License
  as published by the Free Software Foundation; either version 2
  of the License, or (at your option) any later version.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */

require_once('MobileLinkGeneratorSettings.php');

$mobile_link_settings = new MobileLinkGeneratorSettings();

/**
 * Adds the icons to the page ...
 */
function addTheIcons() {
    global $mobile_link_settings;
    echo $mobile_link_settings->getIconHTML();
    echo $mobile_link_settings->getAppleTouchIconHTML();
    echo $mobile_link_settings->getAppleTouchIconBySizeHTML("57x57");
    echo $mobile_link_settings->getAppleTouchIconBySizeHTML("72x72");
    echo $mobile_link_settings->getAppleTouchIconBySizeHTML("76x76");
    echo $mobile_link_settings->getAppleTouchIconBySizeHTML("114x114");
    echo $mobile_link_settings->getAppleTouchIconBySizeHTML("120x120");
    echo $mobile_link_settings->getAppleTouchIconBySizeHTML("144x144");
    echo $mobile_link_settings->getAppleTouchIconBySizeHTML("152x152");
    echo $mobile_link_settings->getAppleTouchIconBySizeHTML("180x180");
}


// This adds the action to the page head
add_action('wp_head', 'addTheIcons');
