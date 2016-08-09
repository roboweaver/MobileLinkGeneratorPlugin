<?php
/*
  Plugin Name: omnis_link_rel
  Plugin URI:
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

function addTheIcons() {
	?>
	<link rel="shortcut icon" href="<?php echo plugins_url(); ?>/images/favicon.ico" type="image/x-icon" />
	<link rel="icon" sizes="192x192" href="<?php echo plugins_url(); ?>/images/apple-touch-icon-192x192.png" type="image/png" />
	<link rel="apple-touch-icon" href="<?php echo plugins_url(); ?>/images/apple-touch-icon.png" type="image/png" />
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo plugins_url(); ?>/images/apple-touch-icon-57x57.png}" type="image/png" />
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo plugins_url(); ?>/images/apple-touch-icon-72x72.png" type="image/png" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo plugins_url(); ?>/images/apple-touch-icon-76x76.png" type="image/png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo plugins_url(); ?>/images/apple-touch-icon-114x114.png" type="image/png" />
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo plugins_url(); ?>/images/apple-touch-icon-120x120.png" type="image/png" />
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo plugins_url(); ?>/images/apple-touch-icon-144x144.png" type="image/png" />
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo plugins_url(); ?>/images/apple-touch-icon-152x152.png" type="image/png" />
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo plugins_url(); ?>/images/apple-touch-icon-180x180.png" type="image/png" />
	<?php
}

add_action('wp_head', 'addTheIcons');
