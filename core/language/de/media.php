<?php
/**
* media.php [German [De]]
* @package Ext Common Core
* @version v1.0.1 05/02/2019
*
* @copyright (c) 2019 CaniDev
* @license https://opensource.org/licenses/gpl-license.php GNU Public License
*/

// @ignore
if(!defined('IN_PHPBB'))
{
	exit;
}

if(empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'COPY_TO_LIST'			=> 'Zu aktueller Liste kopieren',
	'CREATE_SERVER_COPY'	=> 'Kopie auf diesem Server erstellen',
	'DELETE_ICON'			=> 'Lösche Icon',
	'DELETE_IMAGE'			=> 'Lösche Bild',
	'ICON_PREVIEW'			=> 'Icon Vorschau',
	'IMAGE_DESCRIPTION'		=> 'Beschreibung',
	'IMAGE_DETAILS'			=> 'Bilddetails',
	'IMAGE_DIMENSIONS'		=> '<%width%> × <%height%> Pixel',
	'IMAGE_SAVE_ERROR'		=> 'Bild konnte nicht gespeichert werden',
	'IMAGE_TITLE'			=> 'Titel',
	'IMAGE_URL'				=> 'URL',
	'INSERT_ON_ENTRY'		=> 'Insert on text',
	'FILES_DELETED'			=> 'Datien gelöscht',
	'FILES_DRAG'			=> 'Zum Hochladen Dateien per Drag and Drop ablegen',
	'FILES_DROP'			=> 'Zum Hochladen Dateien hier ablegen',
	'FILES_REMOVE_CONFIRM'	=> 'Die Dateien werden unwiderruflich gelöscht<br />Weitermachen?',
	'FORMAT_INVALID'		=> 'Ungültiges Format',
	'MAX_FILESIZE'			=> 'Maximale Dateigröße: %s.',
	'MEDIA_UPDATED'			=> 'Änderungen gespeichert',
	'NO_ELEMENTS'			=> 'Keine Elemente',
	'PROCCESS'				=> 'Prozess',
	'SELECT_ICON'			=> 'Neues Icon auswählen',
	'SELECT_IMAGE'			=> 'Neues Bild auswählen',
	'SELECT_FILE'			=> 'Datei auswählen',
	'SELECT_FILES'			=> 'Dateien auswählen',
	'SELECTED_COUNT'		=> '<span class="value">0</span> ausgewählt',
	'SET_ICON'				=> 'Icon setzen',
	'SET_IMAGE'				=> 'Bild setzen',
	'UPDATE'				=> 'Aktualisierung',
	'UPLOADING_FILES'		=> 'Dateien hochladen...',

	'CURRENT_LIST'		=> 'Aktuelle Liste',
	'GALLERY'			=> 'Gallerie',
	'ICONS'				=> 'Icons',
	'INSERT_URL'		=> 'Von URL einfügen',
	'UPLOAD_IMAGE'		=> 'Bild hochladen',

	'ICON_ACCESSIBILITY'	=> 'Zugang',
	'ICON_BRAND'			=> 'Marke',
	'ICON_CHART'			=> 'Diagramm',
	'ICON_DIRECTIONAL'		=> 'Gerichtet',
	'ICON_FILE_TYPE'		=> 'Dateityp',
	'ICON_FORM_CONTROL'		=> 'Formularsteuerung',
	'ICON_GENDER'			=> 'Geschlecht',
	'ICON_HAND'				=> 'Hand',
	'ICON_MEDICAL'			=> 'Medizin',
	'ICON_PAYMENT'			=> 'Zahlung und Währung',
	'ICON_SPINNER'			=> 'Kreisel',
	'ICON_TEXT_EDITOR'		=> 'Texteditor',
	'ICON_TRANSPORTATION'	=> 'Transport',
	'ICON_VIDEO_PLAYER'		=> 'Videoplayer',
	'ICON_WEB_APPLICATION'	=> 'Web Applikation',
));
