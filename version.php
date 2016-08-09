<?php
/**
 * Export grades to CSV file
 *
 * Version information
 *
 * @package    local_utpgradeexport
 * @author     Priya Ramakrishnan <priya@pukunui.com>, Pukunui
 * @copyright  2016 onwards, Pukunui
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version   = 2016080500;
$plugin->requires  = 2015072100;
$plugin->component = 'local_utpgradeexport';
$plugin->cron      = 60;
$plugin->maturity  = MATURITY_STABLE;
