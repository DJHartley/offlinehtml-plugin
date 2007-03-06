<?php
/**
 * Deutsche Sprachdatei für das offlinehtml plugin
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Jan Wessely <info@jawe.net>
 */
 
// settings must be present and set appropriately for the language
$lang['encoding']   = 'utf-8';
$lang['direction']  = 'ltr';
 
// for admin plugins, the menu prompt to be displayed in the admin menu
// if set here, the plugin doesn't need to override the getMenuText() method
$lang['menu'] = 'Offline-HTML eportieren'; 
 
$lang['btn_export'] = 'Exportieren';
 
$lang['description'] = 'Offline-HTML Plugin: Speichert HTML Dateien für alle Seiten eines oder mehrerer Namensräume';
$lang['confsection'] = 'Offline-HTML plugin';
$lang['path'] = 'In folgenden Dateipfad exportieren (Angabe benötigt). Vorsicht: Alle vorhandenen Dateien in diesem Verzeichis werden gelöscht!';
$lang['ns'] = 'Ein oder mehrere Namensräume (optional)';
$lang['ext'] = 'Dateierweiterung (optional, standardmässig ".html")';
$lang['verbose'] = 'Ausführliche Ausgabe';
$lang['nopages'] = 'Keine Seiten zu exportieren';
$lang['export_count'] = '%d Wiki Seiten exportiert';
$lang['static_count'] = '%d statische Dateien kopiert';
$lang['exported'] = '%s exportiert';
$lang['error_exporting'] = 'Fehler beim exportieren von %s';
$lang['no_such_page'] = 'Keine Wiki Seite mit Namen %s';
$lang['error_copying'] = 'Fehler beim kopieren von %s';
$lang['finished'] = 'Export abgeschlossen nach %.2f Sekunden';
?>