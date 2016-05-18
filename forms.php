<?php

require_once(dirname(__FILE__) . '/../../config.php');
require_once($CFG->libdir.'/formslib.php');
require_once($CFG->dirroot.'/local/teachersconnection/tablas.php');

//utilizado en indexp.php

class buscar_proyecto extends moodleform{
	function definition(){
		global $CFG, $DB;
		
		$mform =& $this->_form;
		$instance = $this->_customdata;
		
		//busca los ramos existentes
		$ramoarray = array();
		$ramos = $DB->get_records('gid_ramo');
		foreach ($ramos as $ramo){
			//$nramos = $ramo -> id;
			//$check = $nramos;
			
			$ramoarray[$ramo -> id] = $ramo -> nombre;
		}
		
		//busca profesores existentes, **falta agregar if para profesores
		$profesorarray = array();
		$profesores = $DB->get_records('user');
		foreach ($profesores as $profesor){
			//$nramos = $ramo -> id;
			//$check = $nramos;
				
			$profesorarray[$profesor -> id] = $profesor -> firstname.' '.$profesor -> lastname;
		}
		
		
		$selectramos= $mform->addElement('select', 'ramos', get_string('choose_subject', 'local_teachersconnection'), $ramoarray);
		$selectprofesores= $mform->addElement('select', 'profesores', get_string('choose_teacher', 'local_teachersconnection'), $profesorarray);
		//$mform->addGroup($select, 'ramo', get_string('choose_subject', 'local_teachersconnection'));
		$this->add_action_buttons(true, get_string('search', 'local_teachersconnection'));
	}
}