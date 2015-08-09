<?php
/**
 * WebsiteBaker Community Edition (WBCE)
 * More Baking. Less Struggling.
 * Visit http://wbce.org to learn more and to join the community.
 *
 * @copyright Ryan Djurovich (2004-2009)
 * @copyright WebsiteBaker Org. e.V. (2009-2015)
 * @copyright WBCE Project (2015-)
 * @license GNU GPL2 (or any later version)
 */

if(!defined('WB_URL')) {
	header('Location: ../index.php');
	exit(0);
}

// set WBCE version and release tag
if(!defined('WBCE_VERSION')) define('WBCE_VERSION', '1.0.0');
if(!defined('WBCE_TAG')) define('WBCE_TAG', 'WBCE1Beta2');

// Legacy: WB-classic
if(!defined('VERSION')) define('VERSION', '2.8.3');
if(!defined('REVISION')) define('REVISION', '1641');
if(!defined('SP')) define('SP', 'SP4');


