<?php

declare(strict_types=1);
/**
 * Tdmdownloads
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright   Gregory Mage (Aka Mage)
 * @license     GNU GPL 2 (https://www.gnu.org/licenses/old-licenses/gpl-2.0.html)
 * @author      Gregory Mage (Aka Mage)
 */

// Nom du module
define('_MI_TDMDOWNLOADS_NAME', 'Tdmdownloads');
define('_MI_TDMDOWNLOADS_DIRNAME', basename(dirname(__DIR__, 2)));
define('_MI_TDMDOWNLOADS_HELP_HEADER', __DIR__ . '/help/helpheader.tpl');
// Description du module
define('_MI_TDMDOWNLOADS_DESC', 'Creates a downloads section where users can download/submit/rate various files.');
// Bloc
define('_MI_TDMDOWNLOADS_BNAME1', 'Recent Downloads');
define('_MI_TDMDOWNLOADS_BNAMEDSC1', 'Display Recent Downloads');
define('_MI_TDMDOWNLOADS_BNAME2', 'Top Download');
define('_MI_TDMDOWNLOADS_BNAMEDSC2', 'Display Top Downloads');
define('_MI_TDMDOWNLOADS_BNAME3', 'Top Rated Download');
define('_MI_TDMDOWNLOADS_BNAMEDSC3', 'Display Top Rated Downloads');
define('_MI_TDMDOWNLOADS_BNAME4', 'Random Downloads');
define('_MI_TDMDOWNLOADS_BNAMEDSC4', 'Display downloaded files randomly');
define('_MI_TDMDOWNLOADS_BNAME5', 'Search Downloads');
define('_MI_TDMDOWNLOADS_BNAMEDSC5', 'Search form Download');
// Sous menu
define('_MI_TDMDOWNLOADS_SMNAME1', 'Suggest');
define('_MI_TDMDOWNLOADS_SMNAME2', 'Files List');
// Menu administration
define('_MI_TDMDOWNLOADS_ADMENU1', 'Index');
define('_MI_TDMDOWNLOADS_ADMENU2', 'Categories');
define('_MI_TDMDOWNLOADS_ADMENU3', 'Downloads');
define('_MI_TDMDOWNLOADS_ADMENU4', 'Broken');
define('_MI_TDMDOWNLOADS_ADMENU5', 'Modified');
define('_MI_TDMDOWNLOADS_ADMENU6', 'Extra Fields');
define('_MI_TDMDOWNLOADS_ADMENU7', 'Import');
define('_MI_TDMDOWNLOADS_ADMENU8', 'Permissions');
define('_MI_TDMDOWNLOADS_ADMENU9', 'About');
// Préférences
//define('_MI_TDMDOWNLOADS_PREFERENCE_BREAK_GENERAL', 'General');
define('_MI_TDMDOWNLOADS_POPULAR', 'Number of hits for downloadable items to be marked as popular');
define('_MI_TDMDOWNLOADS_AUTO_SUMMARY', 'Automatic Summary?');
define('_MI_TDMDOWNLOADS_SHOW_UPDATED', "Show the 'updated' and 'new' picture?");
define('_MI_TDMDOWNLOADS_USESHOTS', 'Use logo?');
define('_MI_TDMDOWNLOADS_IMGFLOAT', 'Image float');
define('_MI_TDMDOWNLOADS_IMGFLOAT_LEFT', 'Left');
define('_MI_TDMDOWNLOADS_IMGFLOAT_RIGHT', 'Right');
define('_MI_TDMDOWNLOADS_SHOTWIDTH', 'Logo height');
define('_MI_TDMDOWNLOADS_PLATEFORM', 'Platforms');
define('_MI_TDMDOWNLOADS_PLATEFORM_DSC', 'Enter the authorized platforms separated by a |');
define('_MI_TDMDOWNLOADS_USETELLAFRIEND', 'Use Tellafriend module with the link tell a friend?');
define('_MI_TDMDOWNLOADS_USETELLAFRIENDDSC', 'You have to install Tellafriend module in order to use this option');
define('_MI_TDMDOWNLOADS_USETAG', 'Use TAG module to generate tags');
define('_MI_TDMDOWNLOADS_USETAGDSC', 'You have to install TAG module in order to use this option');
define('_MI_TDMDOWNLOADS_FORM_OPTIONS', 'Editor');
//define('_MI_TDMDOWNLOADS_PREFERENCE_BREAK_USER', 'User');
define('_MI_TDMDOWNLOADS_PERPAGE', 'Number of items per page');
define('_MI_TDMDOWNLOADS_NBDOWCOL', 'This option allows you to choose the number of columns of downloads');
define('_MI_TDMDOWNLOADS_NEWDLS', 'Number of new files in the Home Page');
define('_MI_TDMDOWNLOADS_TOPORDER', 'How to display items on the index page?');
define('_MI_TDMDOWNLOADS_TOPORDER1', 'Date (DESC)');
define('_MI_TDMDOWNLOADS_TOPORDER2', 'Date (ASC)');
define('_MI_TDMDOWNLOADS_TOPORDER3', 'Hits (DESC)');
define('_MI_TDMDOWNLOADS_TOPORDER4', 'Hits (ASC)');
define('_MI_TDMDOWNLOADS_TOPORDER5', 'Votes (DESC)');
define('_MI_TDMDOWNLOADS_TOPORDER6', 'Votes (ASC)');
define('_MI_TDMDOWNLOADS_TOPORDER7', 'Title (DESC)');
define('_MI_TDMDOWNLOADS_TOPORDER8', 'Title (ASC)');
define('_MI_TDMDOWNLOADS_PERPAGELISTE', 'Downloads displayed on the files list');
define('_MI_TDMDOWNLOADS_SEARCHORDER', 'How to display items on the files list?');
define('_MI_TDMDOWNLOADS_SUBCATPARENT', 'Number of Sub-Categories to display in the main Category');
define('_MI_TDMDOWNLOADS_NBCATCOL', 'This option allows you to choose the number of columns of categories');
define('_MI_TDMDOWNLOADS_BLDATE', 'Display recent downloads in home page and categories (Summary)?');
define('_MI_TDMDOWNLOADS_BLPOP', 'Display popular downloads in home page and categories (Summary)?');
define('_MI_TDMDOWNLOADS_BLRATING', 'Display top rated downloads in home page and categories (Summary)?');
define('_MI_TDMDOWNLOADS_NBBL', 'Number of download to display in summary?');
define('_MI_TDMDOWNLOADS_LONGBL', 'Title length in Summary');
define('_MI_TDMDOWNLOADS_BOOKMARK', 'Bookmark');
define('_MI_TDMDOWNLOADS_BOOKMARK_DSC', 'Show/hide bookmark Icons');
define('_MI_TDMDOWNLOADS_SOCIAL', 'Social Networks');
define('_MI_TDMDOWNLOADS_SOCIAL_DSC', 'Show/hide social network Icons');
define('_MI_TDMDOWNLOADS_DOWNLOADFLOAT', 'Download page float');
define('_MI_TDMDOWNLOADS_DOWNLOADFLOAT_DSC', '<ul><li>Left to Right: Show download description in left side and info column in right side</li><li>Right to Left: Show download description in right side and info column in left side</li></ul>');
define('_MI_TDMDOWNLOADS_DOWNLOADFLOAT_LTR', 'Left to Right');
define('_MI_TDMDOWNLOADS_DOWNLOADFLOAT_RTL', 'Right to Left');
//define('_MI_TDMDOWNLOADS_PREFERENCE_BREAK_ADMIN', 'Administration');
define('_MI_TDMDOWNLOADS_PERPAGEADMIN', 'Number of items per page in the administration');
//define('_MI_TDMDOWNLOADS_PREFERENCE_BREAK_DOWNLOADS', 'Downloads');
define('_MI_TDMDOWNLOADS_PERMISSIONDOWNLOAD', "Select the type of permission for 'Download Permission'");
define('_MI_TDMDOWNLOADS_PERMISSIONDOWNLOAD1', 'Permission by category');
define('_MI_TDMDOWNLOADS_PERMISSIONDOWNLOAD2', 'Permission by file');
define('_MI_TDMDOWNLOADS_DOWNLOAD_NAME', 'Rename files uploaded?');
define('_MI_TDMDOWNLOADS_DOWNLOAD_NAMEDSC', 'If the option is no; and you uploaded a file with a name that already exists on the server, it will be overwritten');
define('_MI_TDMDOWNLOADS_DOWNLOAD_PREFIX', 'Prefix of files uploaded');
define('_MI_TDMDOWNLOADS_DOWNLOAD_PREFIXDSC', 'Only valid if the option to rename the uploaded files is yes');
define('_MI_TDMDOWNLOADS_MAXUPLOAD_SIZE', 'Max uploaded files size');
define('_MI_TDMDOWNLOADS_MAXUPLOAD_SIZE_DESC', "The select is limited to the values of 'post_max_size' and 'upload_max_filesize' in your setting in php.ini<br>If you want to increase you have to increase these settings in php.ini first. Then you have to update the module.");
define('_MI_TDMDOWNLOADS_MAXUPLOAD_SIZE_MB', 'MB');
define('_MI_TDMDOWNLOADS_MIMETYPE', 'Authorized mime types ');
define('_MI_TDMDOWNLOADS_MIMETYPE_DSC', 'Enter the authorized mime types');
define('_MI_TDMDOWNLOADS_CHECKHOST', 'Disallow direct download linking (leeching)?');
define('_MI_TDMDOWNLOADS_REFERERS', 'These sites can link directly to your files. Separate each one with |');
define('_MI_TDMDOWNLOADS_DOWNLIMIT', 'Download limit');
define('_MI_TDMDOWNLOADS_DOWNLIMITDSC', 'Use download limit option');
define('_MI_TDMDOWNLOADS_LIMITGLOBAL', 'Number of downloads in 24 hours');
define('_MI_TDMDOWNLOADS_LIMITGLOBALDSC', 'Number of download for each user in 24 hours. Select 0 for unlimited.');
define('_MI_TDMDOWNLOADS_LIMITLID', 'Number of downloads for each file in 24 hours');
define('_MI_TDMDOWNLOADS_LIMITLIDDSC', 'Number of downloads for each file in 24 hours by each user. Select 0 for unlimited.');
//define('_MI_TDMDOWNLOADS_PREFERENCE_BREAK_PAYPAL', 'Paypal');
define('_MI_TDMDOWNLOADS_USEPAYPAL', "Use button 'Donate' of Paypal ");
define('_MI_TDMDOWNLOADS_CURRENCYPAYPAL', 'Currency of Donation');
define('_MI_TDMDOWNLOADS_IMAGEPAYPAL', "Image for the button 'Make a Donation'");
define('_MI_TDMDOWNLOADS_IMAGEPAYPALDSC', 'Please enter the address of the image');
//define('_MI_TDMDOWNLOADS_PREFERENCE_BREAK_RSS', 'RSS');
define('_MI_TDMDOWNLOADS_PERPAGERSS', 'RSS number of downloads');
define('_MI_TDMDOWNLOADS_PERPAGERSSDSCC', 'Number of downloads displayed on RSS pages');
define('_MI_TDMDOWNLOADS_TIMECACHERSS', 'RSS cache time');
define('_MI_TDMDOWNLOADS_TIMECACHERSSDSC', 'Cache time for RSS pages in minutes');
define('_MI_TDMDOWNLOADS_LOGORSS', 'Site logo for RSS pages');
//define('_MI_TDMDOWNLOADS_PREFERENCE_BREAK_COMNOTI', 'Comments and notifications');
// Notifications
define('_MI_TDMDOWNLOADS_GLOBAL_NOTIFY', 'Global');
define('_MI_TDMDOWNLOADS_GLOBAL_NOTIFYDSC', 'Global downloads notification options.');
define('_MI_TDMDOWNLOADS_CATEGORY_NOTIFY', 'Category');
define('_MI_TDMDOWNLOADS_CATEGORY_NOTIFYDSC', 'Notification options that apply to the current file category.');
define('_MI_TDMDOWNLOADS_FILE_NOTIFY', 'File');
define('_MI_TDMDOWNLOADS_FILE_NOTIFYDSC', 'Notification options that apply to the current file.');
define('_MI_TDMDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFY', 'New Category');
define('_MI_TDMDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFYCAP', 'Notify me when a new file category is created.');
define('_MI_TDMDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFYDSC', 'Receive notification when a new file category is created');
define('_MI_TDMDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify: New file category');
define('_MI_TDMDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFY', 'Modify File Requested');
define('_MI_TDMDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFYCAP', 'Notify me of a file modification request.');
define('_MI_TDMDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFYDSC', 'Receive notification when a file modification request is submitted.');
define('_MI_TDMDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify: File Modification Requested');
define('_MI_TDMDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFY', 'Broken File Submitted');
define('_MI_TDMDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFYCAP', 'Notify me of a broken file report.');
define('_MI_TDMDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFYDSC', 'Receive notification when a broken file report is submitted.');
define('_MI_TDMDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify: Broken File Reported');
define('_MI_TDMDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFY', 'File Submitted');
define('_MI_TDMDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFYCAP', 'Notify me when a new file is submitted (awaiting approval).');
define('_MI_TDMDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFYDSC', 'Receive notification when a new file is submitted (awaiting approval).');
define('_MI_TDMDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify: New file submitted');
define('_MI_TDMDOWNLOADS_GLOBAL_NEWFILE_NOTIFY', 'New File');
define('_MI_TDMDOWNLOADS_GLOBAL_NEWFILE_NOTIFYCAP', 'Notify me when a new file is posted.');
define('_MI_TDMDOWNLOADS_GLOBAL_NEWFILE_NOTIFYDSC', 'Receive notification when a new file is posted.');
define('_MI_TDMDOWNLOADS_GLOBAL_NEWFILE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify: New file');
define('_MI_TDMDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFY', 'File Submitted');
define('_MI_TDMDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFYCAP', 'Notify me when a new file is submitted (awaiting approval) to the current category.');
define('_MI_TDMDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFYDSC', 'Receive notification when a new file is submitted (awaiting approval) to the current category.');
define('_MI_TDMDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify: New file submitted in category');
define('_MI_TDMDOWNLOADS_CATEGORY_NEWFILE_NOTIFY', 'New File');
define('_MI_TDMDOWNLOADS_CATEGORY_NEWFILE_NOTIFYCAP', 'Notify me when a new file is posted to the current category.');
define('_MI_TDMDOWNLOADS_CATEGORY_NEWFILE_NOTIFYDSC', 'Receive notification when a new file is posted to the current category.');
define('_MI_TDMDOWNLOADS_CATEGORY_NEWFILE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} New file in category');
define('_MI_TDMDOWNLOADS_FILE_APPROVE_NOTIFY', 'File Approved');
define('_MI_TDMDOWNLOADS_FILE_APPROVE_NOTIFYCAP', 'Notify me when this file is approved.');
define('_MI_TDMDOWNLOADS_FILE_APPROVE_NOTIFYDSC', 'Receive notification when this file is approved.');
define('_MI_TDMDOWNLOADS_FILE_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify: File Approved');
//1.62
define('_MI_TDMDOWNLOADS_SHOW_LATEST_FILES', 'Show Latest Files');
define('_MI_TDMDOWNLOADS_SHOW_LATEST_FILES_DSC', 'This will show latest files on the user side');
//2.00
//Help
//define('_MI_TDMDOWNLOADS_DIRNAME', basename(dirname(dirname(__DIR__))));
//define('_MI_TDMDOWNLOADS_HELP_HEADER', __DIR__.'/help/helpheader.tpl');
define('_MI_TDMDOWNLOADS_BACK_2_ADMIN', 'Back to Administration of ');
define('_MI_TDMDOWNLOADS_OVERVIEW', 'Overview');
//define('_MI_TDMDOWNLOADS_HELP_DIR', __DIR__);
//help multi-page
define('_MI_TDMDOWNLOADS_DISCLAIMER', 'Disclaimer');
define('_MI_TDMDOWNLOADS_LICENSE', 'License');
define('_MI_TDMDOWNLOADS_SUPPORT', 'Support');
define('_MI_TDMDOWNLOADS_ADMENU_MIGRATE', 'Migrate');
define('_MI_TDMDOWNLOADS_SHOW_DEV_TOOLS', 'Show Development Tools Button?');
define('_MI_TDMDOWNLOADS_SHOW_DEV_TOOLS_DESC', 'If yes, the "Migrate" Tab and other Development tools will be visible to the Admin.');
define('_MI_TDMDOWNLOADS_BLOCKS_ADMIN', 'Blocks');
define('_MI_TDMDOWNLOADS_SHOW_SAMPLE_BUTTON', 'Show Sample Button?');
define('_MI_TDMDOWNLOADS_SHOW_SAMPLE_BUTTON_DESC', 'If yes, the "Add Sample Data" button will be visible to the Admin. It is Yes as a default for first installation.');
define('_MI_TDMDOWNLOADS_MENU_HISTORY', 'History');


//Preferences Group Styling
define('_MI_TDMDOWNLOADS_CONFIG_STYLING_START', '<span style="color: #FF0000; font-size: Small;  font-weight: bold;">:: ');
define('_MI_TDMDOWNLOADS_CONFIG_STYLING_END', ' ::</span> ');
define('_MI_TDMDOWNLOADS_CONFIG_STYLING_DESC_START', '<span style="color: #FF0000; font-size: Small;">');
define('_MI_TDMDOWNLOADS_CONFIG_STYLING_DESC_END', '</span> ');

//Categories:
define('_MI_TDMDOWNLOADS_GENERAL', 'General');
define('_MI_TDMDOWNLOADS_USER', 'User');
define('_MI_TDMDOWNLOADS_ADMIN', 'Administration');
define('_MI_TDMDOWNLOADS_DOWNLOADS', 'Downloads');
define('_MI_TDMDOWNLOADS_PAYPAL', 'Paypal');
define('_MI_TDMDOWNLOADS_RSS', 'RSS');
define('_MI_TDMDOWNLOADS_COMNOTI', 'Comments and notifications');
define('_MI_TDMDOWNLOADS_OTHERS', 'Others');

//Categories Styled
define('_MI_TDMDOWNLOADS_PREFERENCE_BREAK_GENERAL', _MI_TDMDOWNLOADS_CONFIG_STYLING_START . _MI_TDMDOWNLOADS_GENERAL . _MI_TDMDOWNLOADS_CONFIG_STYLING_END);
define('_MI_TDMDOWNLOADS_PREFERENCE_BREAK_USER', _MI_TDMDOWNLOADS_CONFIG_STYLING_START . _MI_TDMDOWNLOADS_USER . _MI_TDMDOWNLOADS_CONFIG_STYLING_END);
define('_MI_TDMDOWNLOADS_PREFERENCE_BREAK_ADMIN', _MI_TDMDOWNLOADS_CONFIG_STYLING_START . _MI_TDMDOWNLOADS_ADMIN . _MI_TDMDOWNLOADS_CONFIG_STYLING_END);
define('_MI_TDMDOWNLOADS_PREFERENCE_BREAK_DOWNLOADS', _MI_TDMDOWNLOADS_CONFIG_STYLING_START . _MI_TDMDOWNLOADS_DOWNLOADS . _MI_TDMDOWNLOADS_CONFIG_STYLING_END);
define('_MI_TDMDOWNLOADS_PREFERENCE_BREAK_PAYPAL', _MI_TDMDOWNLOADS_CONFIG_STYLING_START . _MI_TDMDOWNLOADS_PAYPAL . _MI_TDMDOWNLOADS_CONFIG_STYLING_END);
define('_MI_TDMDOWNLOADS_PREFERENCE_BREAK_RSS', _MI_TDMDOWNLOADS_CONFIG_STYLING_START . _MI_TDMDOWNLOADS_RSS . _MI_TDMDOWNLOADS_CONFIG_STYLING_END);
define('_MI_TDMDOWNLOADS_PREFERENCE_BREAK_COMNOTI', _MI_TDMDOWNLOADS_CONFIG_STYLING_START . _MI_TDMDOWNLOADS_COMNOTI . _MI_TDMDOWNLOADS_CONFIG_STYLING_END);
define('_MI_TDMDOWNLOADS_CONFCAT_OTHERS', _MI_TDMDOWNLOADS_CONFIG_STYLING_START . _MI_TDMDOWNLOADS_OTHERS . _MI_TDMDOWNLOADS_CONFIG_STYLING_END);


//define('_MI_TDMDOWNLOADS_PREFERENCE_BREAK_GENERAL', '<span style="color: #FF0000; font-size: Small;  font-weight: bold;">--- General ---</span> ');
//define('_MI_TDMDOWNLOADS_PREFERENCE_BREAK_USER', '<span style="color: #FF0000; font-size: Small;  font-weight: bold;">--- User ---</span> ');
//define('_MI_TDMDOWNLOADS_PREFERENCE_BREAK_ADMIN', '<span style="color: #FF0000; font-size: Small;  font-weight: bold;">--- Administration ---</span> ');
//define('_MI_TDMDOWNLOADS_PREFERENCE_BREAK_DOWNLOADS', '<span style="color: #FF0000; font-size: Small;  font-weight: bold;">--- Downloads ---</span> ');
//define('_MI_TDMDOWNLOADS_PREFERENCE_BREAK_PAYPAL', '<span style="color: #FF0000; font-size: Small;  font-weight: bold;">--- Paypal ---</span> ');
//define('_MI_TDMDOWNLOADS_PREFERENCE_BREAK_RSS', '<span style="color: #FF0000; font-size: Small;  font-weight: bold;">--- RSS ---</span> ');
//define('_MI_TDMDOWNLOADS_PREFERENCE_BREAK_COMNOTI', '<span style="color: #FF0000; font-size: Small;  font-weight: bold;">--- Comments and notifications ---</span> ');

define('_MI_TDMDOWNLOADS_CONFCAT_SEO_DSC', '<span style="color: #FF0000; font-size: Small;  font-weight: bold;">---Preferences for rewriting methods, meta data, etc ---</span> ');
define('_MI_TDMDOWNLOADS_CONFCAT_INDEXCAT', '<span style="color: #FF0000; font-size: Small;  font-weight: bold;">---Index and category pages ---</span> ');
define('_MI_TDMDOWNLOADS_CONFCAT_INDEXCAT_DSC', '<span style="color: #FF0000; font-size: Small;  font-weight: bold;">--- ---</span> ');
define('_MI_TDMDOWNLOADS_CONFCAT_CATEGORY', '<span style="color: #FF0000; font-size: Small;  font-weight: bold;">---Category page ---</span> ');
define('_MI_TDMDOWNLOADS_CONFCAT_CATEGORY_DSC', '<span style="color: #FF0000; font-size: Small;  font-weight: bold;">--- ---</span> ');
define('_MI_TDMDOWNLOADS_CONFCAT_ITEM', '<span style="color: #FF0000; font-size: Small;  font-weight: bold;">---Article page ---</span> ');
define('_MI_TDMDOWNLOADS_CONFCAT_ITEM_DSC', '<span style="color: #FF0000; font-size: Small;  font-weight: bold;">--- ---</span> ');
define('_MI_TDMDOWNLOADS_CONFCAT_FORMAT', '<span style="color: #FF0000; font-size: Small;  font-weight: bold;">---Format ---</span> ');
define('_MI_TDMDOWNLOADS_CONFCAT_FORMAT_DSC', '<span style="color: #FF0000; font-size: Small;  font-weight: bold;">--- ---</span> ');
define('_MI_TDMDOWNLOADS_CONFCAT_PRINT', '<span style="color: #FF0000; font-size: Small;  font-weight: bold;">---Print page ---</span> ');
define('_MI_TDMDOWNLOADS_CONFCAT_PRINT_DSC', '<span style="color: #FF0000; font-size: Small;  font-weight: bold;">--- ---</span> ');
//define('_MI_TDMDOWNLOADS_CONFCAT_OTHERS', '<span style="color: #FF0000; font-size: Small;  font-weight: bold;">---Others ---</span> ');
define('_MI_TDMDOWNLOADS_CONFCAT_OTHERS_DSC', '<span style="color: #FF0000; font-size: Small;  font-weight: bold;">--- ---</span> ');
define('_MI_TDMDOWNLOADS_CONFCAT_PERMISSIONS', '<span style="color: #FF0000; font-size: Small;  font-weight: bold;">---Permissions ---</span> ');
define('_MI_TDMDOWNLOADS_CONFCAT_PERMISSIONS_DSC', '<span style="color: #FF0000; font-size: Small;  font-weight: bold;">--- ---</span> ');
define('_MI_TDMDOWNLOADS_CONFCAT_INDEX', '<span style="color: #FF0000; font-size: Small;  font-weight: bold;">---Index page ---</span> ');
define('_MI_TDMDOWNLOADS_CONFCAT_INDEX_DSC', '<span style="color: #FF0000; font-size: Small;  font-weight: bold;">--- ---</span> ');
define('_MI_TDMDOWNLOADS_CONFCAT_SUBMIT', '<span style="color: #FF0000; font-size: Small;  font-weight: bold;">---Submit article ---</span> ');
define('_MI_TDMDOWNLOADS_CONFCAT_SUBMIT_DSC', '<span style="color: #FF0000; font-size: Small;  font-weight: bold;">---Submit article layout and form default values ---</span> ');
define('_MI_TDMDOWNLOADS_CONFCAT_SEARCH', '<span style="color: #FF0000; font-size: Small;  font-weight: bold;">---Search page ---</span> ');
define('_MI_TDMDOWNLOADS_CONFCAT_SEARCH_DSC', '<span style="color: #FF0000; font-size: Small;  font-weight: bold;">--- ---</span> ');

//define('_MI_TDMDOWNLOADS_ADMENU5', 'Blocks Admin');
//Clone
define('_MI_TDMDOWNLOADS_MENU_CLONE', 'Clone');

