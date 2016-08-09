<?php
/**
 * Export grades to CSV file
 *
 * Administration settings
 *
 * @package    local_utpgradeexport
 * @author     Priya Ramakrishnan <priya@pukunui.com>, Pukunui
 * @copyright  2016 onwards, Pukunui
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if (has_capability('local/utpgradeexport:config', context_system::instance())) {

    $settings = new admin_settingpage('local_utpgradeexport_settings',
                                      new lang_string('pluginname', 'local_utpgradeexport'),
                                      'local/utpgradeexport:config');

    $settings->add(new admin_setting_configdirectory(
                'local_utpgradeexport/csvlocation',
                new lang_string('csvlocation', 'local_utpgradeexport'),
                new lang_string('csvlocationdesc', 'local_utpgradeexport'),
                $CFG->dataroot.'/utpgradeexport',
                PARAM_RAW,
                80
                ));

    $settings->add(new admin_setting_configtext(
                'local_utpgradeexport/csvprefix',
                new lang_string('csvprefix', 'local_utpgradeexport'),
                new lang_string('csvprefixdesc', 'local_utpgradeexport'),
                'utpgradeexport_',
                PARAM_RAW,
                80
                ));

    $settings->add(new admin_setting_configcheckbox(
                'local_utpgradeexport/ismanual',
                new lang_string('ismanual', 'local_utpgradeexport'),
                new lang_string('ismanualdesc', 'local_utpgradeexport'),
                'Automatic grade export (not checked)'
                ));

    $ADMIN->add('root', new admin_category('local_utpgradeexport', get_string('pluginname', 'local_utpgradeexport')));

    $ADMIN->add('local_utpgradeexport', new admin_externalpage('manualexport', get_string('manualexport', 'local_utpgradeexport'),
                new moodle_url('/local/utpgradeexport/manual.php'),
                'local/utpgradeexport:config'));

    $ADMIN->add('localplugins', $settings);
}
