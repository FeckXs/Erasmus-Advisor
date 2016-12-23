<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Main extends CI_Controller {
 
function __construct()
{
        parent::__construct();
 
/* Standard Libraries of codeigniter are required */
$this->load->database();
$this->load->helper('url');
/* ------------------ */ 
 
$this->load->library('grocery_CRUD');
 
}
 
public function index()
{
echo "<h1>Welcome to the world of Codeigniter</h1>";//Just an example to ensure that we get into the function
die();
}

public function user()
{

$crud = new grocery_CRUD();

$crud->set_theme('datatables');
 
$crud->set_subject('Utilisateur');
$crud->set_table('user');
$output = $crud->render();
 
$this->_example_output($output);           
}

public function universite()
{

$crud = new grocery_CRUD();

$crud->set_theme('datatables');
 
$crud->set_subject('Université');
$crud->set_table('université');
$output = $crud->render();
 
$this->_example_output2($output);        
}

public function ville()
{

$crud = new grocery_CRUD();

$crud->set_theme('datatables');
 
$crud->set_subject('Ville');
$crud->set_table('ville');
$output = $crud->render();
 
$this->_example_output3($output);        
}

public function pays()
{

$crud = new grocery_CRUD();

$crud->set_theme('datatables');
 
$crud->set_subject('Pays');
$crud->set_table('pays');
$output = $crud->render();
 
$this->_example_output4($output);        
}

public function region()
{

$crud = new grocery_CRUD();

$crud->set_theme('datatables');
 
$crud->set_subject('Région');
$crud->set_table('région');
$output = $crud->render();
 
$this->_example_output5($output);        
}

public function langue()
{

$crud = new grocery_CRUD();

$crud->set_theme('datatables');
 
$crud->set_subject('Langue');
$crud->set_table('langue');
$output = $crud->render();
 
$this->_example_output6($output);        

}

public function association()
{

$crud = new grocery_CRUD();

$crud->set_theme('datatables');
 
$crud->set_subject('Association');
$crud->set_table('association');
$output = $crud->render();
 
$this->_example_output7($output);        

}

public function cours()
{

$crud = new grocery_CRUD();

$crud->set_theme('datatables');
 
$crud->set_subject('Cours');
$crud->set_table('cours');
$output = $crud->render();
 
$this->_example_output8($output);        

}

public function domaine_etude()
{

$crud = new grocery_CRUD();

$crud->set_theme('datatables');
 
$crud->set_subject('Domaine d_études');
$crud->set_table('domaine_etude');
$output = $crud->render();
 
$this->_example_output9($output);        

}

public function etudiant_commente_spécialisation()
{

$crud = new grocery_CRUD();

$crud->set_theme('datatables');
 
$crud->set_subject('Étudiant commente spécialisation');
$crud->set_table('etudiant_commente_spécialisation');
$output = $crud->render();
 
$this->_example_output10($output);        

}

public function evènement()
{

$crud = new grocery_CRUD();

$crud->set_theme('datatables');
 
$crud->set_subject('Évènement');
$crud->set_table('evènement');
$output = $crud->render();
 
$this->_example_output11($output);        

}

public function langue_has_association()
{

$crud = new grocery_CRUD();

$crud->set_theme('datatables');
 
$crud->set_subject('langue_has_association');
$crud->set_table('langue_has_association');
$output = $crud->render();
 
$this->_example_output12($output);        

}

public function langue_has_cours()
{

$crud = new grocery_CRUD();

$crud->set_theme('datatables');
 
$crud->set_subject('langue_has_cours');
$crud->set_table('langue_has_cours');
$output = $crud->render();
 
$this->_example_output13($output);        

}

public function langue_has_domaine_etude()
{

$crud = new grocery_CRUD();

$crud->set_theme('datatables');
 
$crud->set_subject('langue_has_domaine_etude');
$crud->set_table('langue_has_domaine_etude');
$output = $crud->render();
 
$this->_example_output14($output);        

}

public function langue_has_evènement()
{

$crud = new grocery_CRUD();

$crud->set_theme('datatables');
 
$crud->set_subject('langue_has_evènement');
$crud->set_table('langue_has_evènement');
$output = $crud->render();
 
$this->_example_output15($output);        

}

public function langue_has_logement()
{

$crud = new grocery_CRUD();

$crud->set_theme('datatables');
 
$crud->set_subject('langue_has_logement');
$crud->set_table('langue_has_logement');
$output = $crud->render();
 
$this->_example_output16($output);        

}

public function langue_has_spécialité()
{

$crud = new grocery_CRUD();

$crud->set_theme('datatables');
 
$crud->set_subject('langue_has_spécialité');
$crud->set_table('langue_has_spécialité');
$output = $crud->render();
 
$this->_example_output17($output);        

}

public function langue_has_université()
{

$crud = new grocery_CRUD();

$crud->set_theme('datatables');
 
$crud->set_subject('langue_has_université');
$crud->set_table('langue_has_université');
$output = $crud->render();
 
$this->_example_output18($output);        

}

public function photo_université()
{

$crud = new grocery_CRUD();

$crud->set_theme('datatables');
 
$crud->set_subject('photo_université');
$crud->set_table('photo_université');
$output = $crud->render();
 
$this->_example_output19($output);        

}

public function photo_ville()
{

$crud = new grocery_CRUD();

$crud->set_theme('datatables');
 
$crud->set_subject('photo_ville');
$crud->set_table('photo_ville');
$output = $crud->render();
 
$this->_example_output20($output);        

}

public function réseaux_sociaux()
{

$crud = new grocery_CRUD();

$crud->set_theme('datatables');
 
$crud->set_subject('réseaux_sociaux');
$crud->set_table('réseaux_sociaux');
$output = $crud->render();
 
$this->_example_output21($output);        

}

public function spécialité()
{

$crud = new grocery_CRUD();

$crud->set_theme('datatables');
 
$crud->set_subject('spécialité');
$crud->set_table('spécialité');
$output = $crud->render();
 
$this->_example_output22($output);        

}

public function spécialité_has_cours()
{

$crud = new grocery_CRUD();

$crud->set_theme('datatables');
 
$crud->set_subject('spécialité_has_cours');
$crud->set_table('spécialité_has_cours');
$output = $crud->render();
 
$this->_example_output23($output);        

}

public function student_parler_avec_autre_student()
{

$crud = new grocery_CRUD();

$crud->set_theme('datatables');
 
$crud->set_subject('student_parler_avec_autre_student');
$crud->set_table('student_parler_avec_autre_student');
$output = $crud->render();
 
$this->_example_output24($output);        

}

public function université_has_evènement()
{

$crud = new grocery_CRUD();

$crud->set_theme('datatables');
 
$crud->set_subject('université_has_evènement');
$crud->set_table('université_has_evènement');
$output = $crud->render();
 
$this->_example_output25($output);        

}

public function université_has_réseaux_sociaux()
{

$crud = new grocery_CRUD();

$crud->set_theme('datatables');
 
$crud->set_subject('université_has_réseaux_sociaux');
$crud->set_table('université_has_réseaux_sociaux');
$output = $crud->render();
 
$this->_example_output26($output);        

}

public function université_proposer_domaine_etude()
{

$crud = new grocery_CRUD();

$crud->set_theme('datatables');
 
$crud->set_subject('université_proposer_domaine_etude');
$crud->set_table('université_proposer_domaine_etude');
$output = $crud->render();
 
$this->_example_output27($output);        

}

public function logement()
{

$crud = new grocery_CRUD();

$crud->set_theme('datatables');
 
$crud->set_subject('logement');
$crud->set_table('logement');
$output = $crud->render();
 
$this->_example_output28($output);        

}

// OUTPUTS !!!

function _example_output($output = null)
 
{
$this->load->view('our_template.php',$output);    
}

function _example_output2($output = null)
 
{
$this->load->view('our_template2.php',$output);    
}

function _example_output3($output = null)
 
{
$this->load->view('our_template3.php',$output);    
}

function _example_output4($output = null)
 
{
$this->load->view('our_template4.php',$output);    
}

function _example_output5($output = null)
 
{
$this->load->view('our_template5.php',$output);    
}

function _example_output6($output = null)
 
{
$this->load->view('our_template6.php',$output);    
}

function _example_output7($output = null)
 
{
$this->load->view('our_template7.php',$output);    
}

function _example_output8($output = null)
 
{
$this->load->view('our_template8.php',$output);    
}

function _example_output9($output = null)
 
{
$this->load->view('our_template9.php',$output);    
}

function _example_output10($output = null)
 
{
$this->load->view('our_template10.php',$output);    
}

function _example_output11($output = null)
 
{
$this->load->view('our_template11.php',$output);    
}

function _example_output12($output = null)
 
{
$this->load->view('our_template12.php',$output);    
}

function _example_output13($output = null)
 
{
$this->load->view('our_template13.php',$output);    
}

function _example_output14($output = null)
 
{
$this->load->view('our_template14.php',$output);    
}

function _example_output15($output = null)
 
{
$this->load->view('our_template15.php',$output);    
}

function _example_output16($output = null)
 
{
$this->load->view('our_template16.php',$output);    
}

function _example_output17($output = null)
 
{
$this->load->view('our_template17.php',$output);    
}

function _example_output18($output = null)
 
{
$this->load->view('our_template18.php',$output);    
}

function _example_output19($output = null)
 
{
$this->load->view('our_template19.php',$output);    
}

function _example_output20($output = null)
 
{
$this->load->view('our_template20.php',$output);    
}

function _example_output21($output = null)
 
{
$this->load->view('our_template21.php',$output);    
}

function _example_output22($output = null)
 
{
$this->load->view('our_template22.php',$output);    
}

function _example_output23($output = null)
 
{
$this->load->view('our_template23.php',$output);    
}

function _example_output24($output = null)
 
{
$this->load->view('our_template24.php',$output);    
}

function _example_output25($output = null)
 
{
$this->load->view('our_template25.php',$output);    
}

function _example_output26($output = null)
 
{
$this->load->view('our_template26.php',$output);    
}

function _example_output27($output = null)
 
{
$this->load->view('our_template27.php',$output);    
}

function _example_output28($output = null)
 
{
$this->load->view('our_template28.php',$output);    
}

}
 
/* End of file Main.php */
/* Location: ./application/controllers/Main.php */