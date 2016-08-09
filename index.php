<?php
/**
 * Export grades to CSV file
 *
 * Main landing page. Nothing to do here so simply redirect to front page.
 *
 * @package    local_utpgradeexport
 * @author     Priya Ramakrishnan <priya@pukunui.com>, Pukunui
 * @copyright  2016 onwards, Pukunui
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
require('../../config.php');

redirect($CFG->wwwroot);
