<?php
/**
*
* knowledgebase [French]
*
* @package phpBB Extension - Knowledge base
* @copyright (c) 2017 Sheer <https://phpbbguru.net>
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'KNOWLEDGEBASE'			=> 'Base de connaissances',
	'ACL_A_MANAGE_KB'		=> 'Peut gérer la base de connaissances.',
));
