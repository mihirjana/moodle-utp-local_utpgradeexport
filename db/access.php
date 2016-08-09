<?php
/**
 * Export grades to CSV file
 *
 * Capabilities definition
 *
 * @package    local_utpgradeexport
 * @author     Priya Ramakrishnan<priya@pukunui.com>, Pukunui
 * @copyright  2016 onwards, Pukunui
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$capabilities = array (
    'local/utpgradeexport:config' => array (
        'riskbitmask'  => RISK_CONFIG & RISK_PERSONAL,
        'captype'      => 'write',
        'contextlevel' => CONTEXT_SYSTEM,
        'archetypes'   => array (
            'manager' => CAP_ALLOW
        )
    ),
);
