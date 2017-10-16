<?php
/**
*
* @package phpBB Extension - Knowledge base
* @copyright (c) 2013 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
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
	'ADD_ARTICLE'							=> 'Add article',
	'APPROVE'								=> 'Approve',
	'ARTICLE'								=> 'Article',
	'ARTICLES'								=> 'Articles',
	'ARTICLE_APPROVED_SUCESS'				=> 'The article has been approved.',
	'ARTICLE_AUTHOR'						=> 'Author',
	'ARTICLE_BODY'							=> 'Article text',
	'ARTICLE_BODY_EXPLAIN'					=> 'Enter text of article',
	'ARTICLE_DATE'							=> 'Date',
	'ARTICLE_DELETED'						=> 'The article has been deleted successfully.',
	'ARTICLE_DESCRIPTION'					=> 'Description',
	'ARTICLE_DISAPPROVED_SUCESS'			=> 'The article has been rejected.',
	'ARTICLE_EDITED'						=> 'Article successfully edited.',
	'ARTICLE_MANAGE'						=> 'Manage articles',
	'ARTICLE_MOVED'							=> 'Article successfully moved.',
	'ARTICLE_NEED_APPROVE'					=> 'The article has been added successfully, but require prior approval.',
	'ARTICLE_NO_EXISTS'						=> 'This article does not exist',
	'ARTICLE_SUBMITTED'						=> 'The article has been added successfully.',
	'ARTICLE_TITLE'							=> 'Article name',
	'CATEGORIES'							=> 'Categories',
	'CATEGORIES_LIST'						=> 'Categories list',
	'CATEGORY'								=> 'Category',
	'CAT_NO_EXISTS'							=> 'This category does not exist',
	'COMMENTS'								=> 'Comments',
	'CONFIRM_DELETE_ARTICLE'				=> 'Are you sure delete this article?',
	'COULDNT_GET_CAT_DATA'					=> 'Unable to receive data',
	'COULDNT_UPDATE_ORDER'					=> 'Unable change order of categories',
	'DELETE_ARTICLE'						=> 'Delete article',
	'DELETE_ARTICLE_WARN'					=> 'Deleted article can not be recovered',
	'DESCR'									=> 'Article description',
	'DISAPPROVE'							=> 'Reject',
	'EDIT'									=> 'Edit',
	'EDIT_ARTICLE'							=> 'Edit article',
	'EMPTY_QUERY'							=> 'You have not entered any search query',
	'FOUND_KB_SEARCH_MATCH'					=> '%d match found',
	'FOUND_KB_SEARCH_MATCHES'				=> 'Matches found %d',
	'KB_PERMISSIONS'						=> 'Permissions',
	'LEAVE_COMMENTS'						=> 'Leave a comment',
	'LIBRARY'								=> 'Knowledge base',
	'LINK_TO_ARTICLE'						=> 'Link to article',
	'LOGIN_EXPLAIN_APPROVE'					=> 'To perform this action you have to be registered and logged in.',
	'MAX_NUM_ATTACHMENTS'					=> 'The limit of attachment files permitted has been reached: %d ',
	'MISSING_INLINE_ATTACHMENT'				=> 'The attachment file <strong>%s</strong> doesn�t available',
	'NEED_APPROOVE'							=> 'The article requires approval.',
	'NOTIFICATION_ARTICLE_APPROVE'			=> '<b>Moderator</b> %1$s approved your article:',
	'NOTIFICATION_ARTICLE_DISAPPROVE'		=> '<b>Moderator</b> %1$s has rejected your article:',
	'NOTIFICATION_NEED_APPROVAL'			=> '<b>Article awaiting approval</b> from %1$s:',
	'NOTIFICATION_TYPE_ARTICLE_APPROVE'		=> 'The article was approved',
	'NOTIFICATION_TYPE_ARTICLE_DISAPPROVE'	=> 'The article was rejected',
	'NOTIFICATION_TYPE_NEED_APPROVAL'		=> 'Article awaiting approval',
	'NO_ARTICLES'							=> 'There are no articles in this category',
	'NO_CAT_YET'							=> 'Knowledge base yet has no one category.',
	'NO_DESCR'								=> 'You have not entered a description of the article',
	'NO_ID_SPECIFIED'						=> 'Not set article number',
	'NO_NEED_APPROVE'						=> 'This article does not require approval.',
	'NO_TEXT'								=> 'You have not entered the article text',
	'NO_TITLE'								=> 'You did not specify article title',
	'PRINT'									=> 'Print',
	'READ_FULL'								=> 'Read full article',
	'RETURN_ARTICLE'						=> '%sBack to article%s',
	'RETURN_CAT'							=> '%sBack to category%s',
	'RETURN_LIBRARY'						=> '%sReturn to Knowledge Base%s',
	'RETURN_NEW_CAT'						=> '%sJump in new category%s',
	'RETURN_TO_KB_SEARCH_ADV'				=> 'Return to advanced search',
	'RULES_KB_ADD_CAN'						=> 'You <b>can</b> add articles',
	'RULES_KB_ADD_CANNOT'					=> 'You <b>can not</b> add articles',
	'RULES_KB_ADD_NOAPPROVE'				=> 'You <b>can</b> add articles without prior approval',
	'RULES_KB_ADD_NOAPPROVE_CANNOT'			=> 'You <b>can not</b> add articles without prior approval',
	'RULES_KB_APPROVE_MOD_CAN'				=> 'You <b>can </b> approve articles',
	'RULES_KB_APPROVE_MOD_CANNOT'			=> 'You <b>can not </b> approve articles',
	'RULES_KB_DELETE_CAN'					=> 'You <b>can</b> delete your own articles',
	'RULES_KB_DELETE_CANNOT'				=> 'You <b>can not</b> delete your own articles',
	'RULES_KB_DELETE_MOD_CAN'				=> 'You <b>can </b> delete articles',
	'RULES_KB_EDIT_CAN'						=> 'You <b>can</b> edit your own articles',
	'RULES_KB_EDIT_CANNOT'					=> 'You <b>can not</b> edit your own articles',
	'RULES_KB_EDIT_MOD_CAN'					=> 'You <b>can </b> edit articles',
	'RULES_KB_MOD_DELETE_CANNOT'			=> 'You <b>can not </b> delete articles',
	'RULES_KB_MOD_EDIT_CANNOT'				=> 'You <b>can not </b> edit articles',
	'SEARCH_ARTICLES_ONLY'					=> 'Only in the text of articles',
	'SEARCH_ARTICLES_TITLE_ONLY'			=> 'Only in the title',
	'SEARCH_CAT'							=> 'Search in categories',
	'SEARCH_CAT_EXPLAIN'					=> 'Select the category or categories in which will be found. If nothing is selected, the search will be carried out in all categories.',
	'SEARCH_DISABLED'						=> 'Search in Knowledge base is disabled by the administrator',
	'SEARCH_IN_CAT'							=> 'Search in category ...',
	'SEARCH_KB'								=> 'Search',
	'SORT_ARTICLE_TITLE'					=> 'Article title',
	'TOTAL_ITEMS'							=> 'Articles: <strong>%d</strong>',
	'WARNING_DEFAULT_CONFIG'				=> 'The configuration settings Knowledge base are installed by default, it can lead to incorrect operation of the module. <br />Please go to <b>Configuration</b> and specify the required values.',
));
