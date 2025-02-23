<?php

declare(strict_types=1);
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */
/**
 * Wfdownloads module
 *
 * @copyright       XOOPS Project (https://xoops.org)
 * @license         GNU GPL 2 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package         wfdownload
 * @since           3.23
 * @author          Xoops Development Team
 */
$moduleDirName      = basename(dirname(__DIR__, 2));
$moduleDirNameUpper = \mb_strtoupper($moduleDirName);
define('CO_' . $moduleDirNameUpper . '_GDLIBSTATUS', 'GD library support: ');
define('CO_' . $moduleDirNameUpper . '_GDLIBVERSION', 'GD Library version: ');
define('CO_' . $moduleDirNameUpper . '_GDOFF', "<span style='font-weight: bold;'>Deaktivieren</span> (Keine Vorschaubilder verfügbar)");
define('CO_' . $moduleDirNameUpper . '_GDON', "<span style='font-weight: bold;'>Aktivieren</span> (Vorschaubilder verfügbar)");
define('CO_' . $moduleDirNameUpper . '_IMAGEINFO', 'Server-Status');
define('CO_' . $moduleDirNameUpper . '_MAXPOSTSIZE', 'Maximal erlaubte Größe für Senden (Einstellung post_max_size in php.ini): ');
define('CO_' . $moduleDirNameUpper . '_MAXUPLOADSIZE', 'Maximal erlaubte Größe Dateiupload (Einstellung upload_max_filesize in php.ini): ');
define('CO_' . $moduleDirNameUpper . '_MEMORYLIMIT', 'Speicherlimit (Einstellung memory_limit in php.ini): ');
define('CO_' . $moduleDirNameUpper . '_METAVERSION', "<span style='font-weight: bold;'>Downloads meta version:</span> ");
define('CO_' . $moduleDirNameUpper . '_OFF', "<span style='font-weight: bold;'>AUS</span>");
define('CO_' . $moduleDirNameUpper . '_ON', "<span style='font-weight: bold;'>AN</span>");
define('CO_' . $moduleDirNameUpper . '_SERVERPATH', 'Serverpfad zu XOOPS-Root: ');
define('CO_' . $moduleDirNameUpper . '_SERVERUPLOADSTATUS', 'Status Serveruploads: ');
define('CO_' . $moduleDirNameUpper . '_SPHPINI', "<span style='font-weight: bold;'>Aus der Datei PHP-ini ermittelte Information:</span>");
define('CO_' . $moduleDirNameUpper . '_UPLOADPATHDSC', 'Beachte. Der Pfad für das Hochladen *MUSS* den vollständigen Serverpfad zu Ihrem Upload-Verzeichnis enthalten.');
define('CO_' . $moduleDirNameUpper . '_PRINT', "<span style='font-weight: bold;'>Drucken</span>");
define('CO_' . $moduleDirNameUpper . '_PDF', "<span style='font-weight: bold;'>Erstelle PDF</span>");
define('CO_' . $moduleDirNameUpper . '_UPGRADEFAILED0', "Aktualiserung fehlgeschlagen - Umbenennung Feld '%s' nicht möglich");
define('CO_' . $moduleDirNameUpper . '_UPGRADEFAILED1', "Aktualiserung fehlgeschlagen - Hinzufügen Feld '%s' nicht möglich");
define('CO_' . $moduleDirNameUpper . '_UPGRADEFAILED2', "Aktualiserung fehlgeschlagen - Umbenennung Tabelle '%s' nicht möglich");
define('CO_' . $moduleDirNameUpper . '_ERROR_COLUMN', 'Erstellen Spalte in Datenbank nicht möglich: %s');
define('CO_' . $moduleDirNameUpper . '_ERROR_BAD_XOOPS', 'Dieses Modul benötigt XOOPS %s+ (%s installiert)');
define('CO_' . $moduleDirNameUpper . '_ERROR_BAD_PHP', 'Dieses Modul benötigt PHP Version %s+ (%s installiert)');
define('CO_' . $moduleDirNameUpper . '_ERROR_TAG_REMOVAL', 'Konnte Tags vom Tag-Modul nicht entfernen');
define('CO_' . $moduleDirNameUpper . '_FOLDERS_DELETED_OK', 'Upload-Verzeichnisse wurden gelöscht');
\define('CO_' . $moduleDirNameUpper . '_ERROR_TAG_REMOVAL', 'Could not remove tags from Tag Module');
\define('CO_' . $moduleDirNameUpper . '_FOLDERS_DELETED_OK', 'Upload Folders have been deleted');
// Error Msgs
define('CO_' . $moduleDirNameUpper . '_ERROR_BAD_DEL_PATH', 'Konnte Verzeichnis %s nicht löschen');
define('CO_' . $moduleDirNameUpper . '_ERROR_BAD_REMOVE', 'Konnte %s nicht löschen');
define('CO_' . $moduleDirNameUpper . '_ERROR_NO_PLUGIN', 'Konnte Plugin nicht laden');
//Help
define('CO_' . $moduleDirNameUpper . '_DIRNAME', basename(dirname(__DIR__, 2)));
define('CO_' . $moduleDirNameUpper . '_HELP_HEADER', __DIR__ . '/help/helpheader.tpl');
define('CO_' . $moduleDirNameUpper . '_BACK_2_ADMIN', 'Zurück zur Administration von ');
define('CO_' . $moduleDirNameUpper . '_OVERVIEW', 'Übersicht');
//\define('CO_' . $moduleDirNameUpper . '_HELP_DIR', __DIR__);
//help multi-page
define('CO_' . $moduleDirNameUpper . '_DISCLAIMER', 'Disclaimer');
define('CO_' . $moduleDirNameUpper . '_LICENSE', 'Lizenz');
define('CO_' . $moduleDirNameUpper . '_SUPPORT', 'Support');
//Sample Data
define('CO_' . $moduleDirNameUpper . '_ADD_SAMPLEDATA', 'Testdaten importieren (ALLE vorhandenen Daten werden gelöscht)');
define('CO_' . $moduleDirNameUpper . '_SAMPLEDATA_SUCCESS', 'Testdaten erfolgreich importiert');
define('CO_' . $moduleDirNameUpper . '_SAVE_SAMPLEDATA', 'Exportiere Tabellen zu YAML');
define('CO_' . $moduleDirNameUpper . '_SHOW_SAMPLE_BUTTON', 'Schaltfläche Testdaten anzeigen?');
define('CO_' . $moduleDirNameUpper . '_SHOW_SAMPLE_BUTTON_DESC', 'Wenn ja, dann wird im Admin-Bereich die Schaltfläche "Testdaten" angezeigt. Nach der Installation ist diese standardmäßig aktiviert.');
define('CO_' . $moduleDirNameUpper . '_EXPORT_SCHEMA', 'Export DB Schema für YAML');
define('CO_' . $moduleDirNameUpper . '_EXPORT_SCHEMA_SUCCESS', 'Export DB Schema zu YAML erfolgreich');
define('CO_' . $moduleDirNameUpper . '_EXPORT_SCHEMA_ERROR', 'ERROR: Export des DB Schema zu YAML fehlgeschlagen');
\define('CO_' . $moduleDirNameUpper . '_' . 'EXPORT_SCHEMA', 'Export DB Schema to YAML');
\define('CO_' . $moduleDirNameUpper . '_' . 'EXPORT_SCHEMA_SUCCESS', 'Export DB Schema to YAML was a success');
\define('CO_' . $moduleDirNameUpper . '_' . 'EXPORT_SCHEMA_ERROR', 'ERROR: Export of DB Schema to YAML failed');
\define('CO_' . $moduleDirNameUpper . '_' . 'SHOW_SAMPLE_BUTTON', 'Show Sample Button?');
\define('CO_' . $moduleDirNameUpper . '_' . 'SHOW_SAMPLE_BUTTON_DESC', 'If yes, the "Add Sample Data" button will be visible to the Admin. It is Yes as a default for first installation.');
\define('CO_' . $moduleDirNameUpper . '_' . 'HIDE_SAMPLEDATA_BUTTONS', 'Hide the Import buttons)');
\define('CO_' . $moduleDirNameUpper . '_' . 'SHOW_SAMPLEDATA_BUTTONS', 'Show the Import buttons)');
\define('CO_' . $moduleDirNameUpper . '_' . 'CONFIRM', 'Confirm');
//letter choice
define('CO_' . $moduleDirNameUpper . '_BROWSETOTOPIC', "<span style='font-weight: bold;'>Einträge alphabetisch anzeigen</span>");
define('CO_' . $moduleDirNameUpper . '_OTHER', 'Andere');
define('CO_' . $moduleDirNameUpper . '_ALL', 'Alle');
// block defines
define('CO_' . $moduleDirNameUpper . '_ACCESSRIGHTS', 'Zugriffsberechtigungen');
define('CO_' . $moduleDirNameUpper . '_ACTION', 'Aktion');
define('CO_' . $moduleDirNameUpper . '_ACTIVERIGHTS', 'Verwaltungsrechte');
define('CO_' . $moduleDirNameUpper . '_BADMIN', 'Blockverwaltung');
define('CO_' . $moduleDirNameUpper . '_BLKDESC', 'Beschreibung');
define('CO_' . $moduleDirNameUpper . '_CBCENTER', 'Mitte Mitte Middle');
define('CO_' . $moduleDirNameUpper . '_CBLEFT', 'Mitte Links');
define('CO_' . $moduleDirNameUpper . '_CBRIGHT', 'Mitte Rechts');
define('CO_' . $moduleDirNameUpper . '_SBLEFT', 'Links');
define('CO_' . $moduleDirNameUpper . '_SBRIGHT', 'Rechts');
define('CO_' . $moduleDirNameUpper . '_SIDE', 'Anordnung');
define('CO_' . $moduleDirNameUpper . '_TITLE', 'Titel');
define('CO_' . $moduleDirNameUpper . '_VISIBLE', 'Visible');
define('CO_' . $moduleDirNameUpper . '_VISIBLEIN', 'Visible In');
define('CO_' . $moduleDirNameUpper . '_WEIGHT', 'Weight');
define('CO_' . $moduleDirNameUpper . '_PERMISSIONS', 'Permissions');
define('CO_' . $moduleDirNameUpper . '_BLOCKS', 'Blocks Admin');
define('CO_' . $moduleDirNameUpper . '_BLOCKS_DESC', 'Blocks/Group Admin');
define('CO_' . $moduleDirNameUpper . '_BLOCKS_MANAGMENT', 'Manage');
define('CO_' . $moduleDirNameUpper . '_BLOCKS_ADDBLOCK', 'Add a new block');
define('CO_' . $moduleDirNameUpper . '_BLOCKS_EDITBLOCK', 'Edit a block');
define('CO_' . $moduleDirNameUpper . '_BLOCKS_CLONEBLOCK', 'Clone a block');
\define('CO_' . $moduleDirNameUpper . '_' . 'BLOCKS_EDITBLOCK', 'Edit a block');
\define('CO_' . $moduleDirNameUpper . '_' . 'BLOCKS_CLONEBLOCK', 'Clone a block');
//myblocksadmin
define('CO_' . $moduleDirNameUpper . '_' . 'AGDS', 'Admin Groups');
define('CO_' . $moduleDirNameUpper . '_' . 'BCACHETIME', 'Cache Time');
\define('CO_' . $moduleDirNameUpper . '_' . 'BLOCKS_ADMIN', 'Blocks Admin');
\define('CO_' . $moduleDirNameUpper . '_' . 'UPDATE_SUCCESS', 'Update successful');
//Template Admin
define('CO_' . $moduleDirNameUpper . '_' . 'TPLSETS', 'Template Management');
define('CO_' . $moduleDirNameUpper . '_' . 'GENERATE', 'Generate');
define('CO_' . $moduleDirNameUpper . '_' . 'FILENAME', 'File Name');
//Menu
\define('CO_' . $moduleDirNameUpper . '_' . 'ADMENU_MIGRATE', 'Migrate');
\define('CO_' . $moduleDirNameUpper . '_' . 'FOLDER_YES', 'Folder "%s" exist');
\define('CO_' . $moduleDirNameUpper . '_' . 'FOLDER_NO', 'Folder "%s" does not exist. Create the specified folder with CHMOD 777.');
\define('CO_' . $moduleDirNameUpper . '_' . 'SHOW_DEV_TOOLS', 'Show Development Tools Button?');
\define('CO_' . $moduleDirNameUpper . '_' . 'SHOW_DEV_TOOLS_DESC', 'If yes, the "Migrate" Tab and other Development tools will be visible to the Admin.');
\define('CO_' . $moduleDirNameUpper . '_' . 'ADMENU_FEEDBACK', 'Feedback');
\define('CO_' . $moduleDirNameUpper . '_' . 'MIGRATE_OK', 'Database migrated to current schema.');
\define('CO_' . $moduleDirNameUpper . '_' . 'MIGRATE_WARNING', 'Warning! This is intended for developers only. Confirm write schema file from current database.');
\define('CO_' . $moduleDirNameUpper . '_' . 'MIGRATE_SCHEMA_OK', 'Current schema file written');
//Latest Version Check
define('CO_' . $moduleDirNameUpper . '_' . 'NEW_VERSION', 'New Version: ');
//DirectoryChecker
\define('CO_' . $moduleDirNameUpper . '_' . 'AVAILABLE', "<span style='color: green;'>Available</span>");
\define('CO_' . $moduleDirNameUpper . '_' . 'NOTAVAILABLE', "<span style='color: red;'>Not available</span>");
\define('CO_' . $moduleDirNameUpper . '_' . 'NOTWRITABLE', "<span style='color: red;'>Should have permission ( %d ), but it has ( %d )</span>");
\define('CO_' . $moduleDirNameUpper . '_' . 'CREATETHEDIR', 'Create it');
\define('CO_' . $moduleDirNameUpper . '_' . 'SETMPERM', 'Set the permission');
\define('CO_' . $moduleDirNameUpper . '_' . 'DIRCREATED', 'The directory has been created');
\define('CO_' . $moduleDirNameUpper . '_' . 'DIRNOTCREATED', 'The directory cannot be created');
\define('CO_' . $moduleDirNameUpper . '_' . 'PERMSET', 'The permission has been set');
\define('CO_' . $moduleDirNameUpper . '_' . 'PERMNOTSET', 'The permission cannot be set');
//FileChecker
\define('CO_' . $moduleDirNameUpper . '_' . 'COPYTHEFILE', 'Copy it');
\define('CO_' . $moduleDirNameUpper . '_' . 'FILECOPIED', 'The file has been copied');
\define('CO_' . $moduleDirNameUpper . '_' . 'FILENOTCOPIED', 'The file cannot be copied');
//Uploader
define('CO_' . $moduleDirNameUpper . '_' . 'IMAGES_UPLOAD', 'Upload Files');
// ---------------- Errors ----------------
define('CO_' . $moduleDirNameUpper . '_' . 'FAILSAVEIMG_THUMBS', 'Error when creating thumb image: %s');
define('CO_' . $moduleDirNameUpper . '_' . 'FAILSAVEIMG_MEDIUM', 'Error when creating medium image: %s');
define('CO_' . $moduleDirNameUpper . '_' . 'FAILSAVEWM_MEDIUM', 'Error when adding watermark to medium image: %s (reason: %g)');
define('CO_' . $moduleDirNameUpper . '_' . 'FAILSAVEWM_LARGE', 'Error when adding watermark to large image: %s (reason: %g)');
// Album buttons
define('CO_' . $moduleDirNameUpper . '_' . 'ALBUM_ADD', 'Add Category');
define('CO_' . $moduleDirNameUpper . '_' . 'ALBUM_EDIT', 'Edit Category');
//Uploader
define('CO_' . $moduleDirNameUpper . '_' . 'FIELD_ADD', 'Edit Field');
define('CO_' . $moduleDirNameUpper . '_' . 'FIELD_EDIT', 'Add Field');
define('CO_' . $moduleDirNameUpper . '_' . 'FIELD_TITLE', 'Title');
define('CO_' . $moduleDirNameUpper . '_' . 'FIELD_FID', 'ID');
define('CO_' . $moduleDirNameUpper . '_' . 'FORMIMAGE_PATH', 'File Path');
define('CO_' . $moduleDirNameUpper . '_' . 'FIELD_IMG', 'File  Field');
define('CO_' . $moduleDirNameUpper . '_' . 'FORMUPLOAD', 'Upload');
define('CO_' . $moduleDirNameUpper . '_' . 'FIELD_WEIGHT', 'Weight');
define('CO_' . $moduleDirNameUpper . '_' . 'FIELD_STATUS', 'Status');
define('CO_' . $moduleDirNameUpper . '_' . 'FIELD_SEARCH', 'Search');
define('CO_' . $moduleDirNameUpper . '_' . 'FIELD_STATUS_DEF', 'Status Defi');
// fine uploader
define('CO_' . $moduleDirNameUpper . '_' . 'FU_SUBMIT', 'Submitting file: ');
define('CO_' . $moduleDirNameUpper . '_' . 'FU_SUBMITTED', 'File successfully checked, please upload');
define('CO_' . $moduleDirNameUpper . '_' . 'FU_UPLOAD', 'Upload file: ');
define('CO_' . $moduleDirNameUpper . '_' . 'FU_FAILED', 'Errors occurred during uploading the file');
define('CO_' . $moduleDirNameUpper . '_' . 'FU_SUCCEEDED', 'Successfully uploaded all files');
define('CO_' . $moduleDirNameUpper . '_' . 'SELECT', 'Select Category');
define('CO_' . $moduleDirNameUpper . '_' . 'ERROR_CATPID', 'Error: parent category not found');
//image config
define('CO_' . $moduleDirNameUpper . '_' . 'IMAGE_WIDTH', 'Image Display Width');
define('CO_' . $moduleDirNameUpper . '_' . 'IMAGE_WIDTH_DSC', 'Display width for image');
define('CO_' . $moduleDirNameUpper . '_' . 'IMAGE_HEIGHT', 'Image Display Height');
define('CO_' . $moduleDirNameUpper . '_' . 'IMAGE_HEIGHT_DSC', 'Display height for image');
define('CO_' . $moduleDirNameUpper . '_' . 'IMAGE_CONFIG', '<span style="color: #FF0000; font-size: Small;  font-weight: bold;">--- EXTERNAL Image configuration ---</span> ');
define('CO_' . $moduleDirNameUpper . '_' . 'IMAGE_CONFIG_DSC', '');
define('CO_' . $moduleDirNameUpper . '_' . 'IMAGE_UPLOAD_PATH', 'Image Upload path');
define('CO_' . $moduleDirNameUpper . '_' . 'IMAGE_UPLOAD_PATH_DSC', 'Path for uploading images');
\define('CO_' . $moduleDirNameUpper . '_' . 'IMAGE_FILE_SIZE', 'Image File Size (in Bytes)');
\define('CO_' . $moduleDirNameUpper . '_' . 'IMAGE_FILE_SIZE_DSC', 'The maximum file size of the image file (in Bytes)');
//Preferences
\define('CO_' . $moduleDirNameUpper . '_' . 'TRUNCATE_LENGTH', 'Number of Characters to truncate to the long text field');
\define('CO_' . $moduleDirNameUpper . '_' . 'TRUNCATE_LENGTH_DESC', 'Set the maximum number of characters to truncate the long text fields');
//Module Stats
\define('CO_' . $moduleDirNameUpper . '_' . 'STATS_SUMMARY', 'Module Statistics');
\define('CO_' . $moduleDirNameUpper . '_' . 'TOTAL_CATEGORIES', 'Categories:');
\define('CO_' . $moduleDirNameUpper . '_' . 'TOTAL_ITEMS', 'Items');
\define('CO_' . $moduleDirNameUpper . '_' . 'TOTAL_OFFLINE', 'Offline');
\define('CO_' . $moduleDirNameUpper . '_' . 'TOTAL_PUBLISHED', 'Published');
\define('CO_' . $moduleDirNameUpper . '_' . 'TOTAL_REJECTED', 'Rejected');
\define('CO_' . $moduleDirNameUpper . '_' . 'TOTAL_SUBMITTED', 'Submitted');
