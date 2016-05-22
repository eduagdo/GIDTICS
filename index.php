<?php
require_once (dirname ( __FILE__ ) . '/../../config.php');
require_once($CFG->dirroot.'/local/teachersconnection/forms.php');
global $DB, $USER, $CFG, $OUTPUT;
require_login ();
$baseurl = new moodle_url ( '/local/teachersconnection/index.php' ); // clase pagina
$context = context_system::instance ();
$PAGE->set_context ( $context );
$PAGE->set_url ( $baseurl );
$PAGE->set_pagelayout ( 'standard' );
$PAGE->set_title ( get_string ( 'pluginname', 'local_teachersconnection' ) );
$PAGE->set_heading ( get_string ( 'title', 'local_teachersconnection' ) );
$PAGE->navbar->add ( get_string ( 'title', 'local_teachersconnection' ) );
echo $OUTPUT->header ();
echo $OUTPUT->heading ( get_string ( 'searcher', 'local_teachersconnection' ) );
echo $USER->firstname . " " . $USER->lastname . "  -  " . $USER->email;
echo "<br>";

$email = $USER->email;

//Display search form
$form_search = new proyect_search ( null );
echo $form_search->display ();

echo $OUTPUT->footer (); //shows footer 