<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_archive
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;
use Joomla\Module\ArticlesArchive\Site\Helper\ArticlesArchiveHelper;

$params->def('count', 10);
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'), ENT_COMPAT, 'UTF-8');
$list            = ArticlesArchiveHelper::getList($params);

require ModuleHelper::getLayoutPath('mod_articles_archive', $params->get('layout', 'default'));
