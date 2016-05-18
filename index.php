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
$PAGE->set_title ( get_string ( 'title', 'local_teachersconnection' ) );
$PAGE->set_heading ( get_string ( 'title', 'local_teachersconnection' ) );
$PAGE->navbar->add ( get_string ( 'title', 'local_teachersconnection' ) );
// $PAGE->navbar->add('index','reservar.php');
echo $OUTPUT->header (); // shows header
                         // <link rel="stylesheet" href="css/style.css">
echo $OUTPUT->heading ( get_string ( 'title', 'local_teachersconnection' ) );
echo $USER->firstname . " " . $USER->lastname . "  -  " . $USER->email;
echo "<br>";
// test
/*
 * $user = $DB->get_record('user', array('id'=>'2'));
 * foreach($user as $data){
 * echo $data . "<br>";
 * }
 */
// $table = 'local_fitness';
$email = $USER->email;

$form_buscar = new buscar_proyecto ( null );
echo $form_buscar->display ();

echo $OUTPUT->footer (); //shows footer 