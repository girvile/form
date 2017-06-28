

<?php

class Insert_ctrl extends CI_Controller {

function __construct() {
parent::__construct();
$this->load->model('insert_model');
}

function click(){

}

function index() {
//Including validation library
$this->load->library('form_validation');
$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

//Validating Name Field
$this->form_validation->set_rules('dname', 'Username', 'required|min_length[5]|max_length[15]');

//Validating Email Field
$this->form_validation->set_rules('demail', 'Email', 'required|valid_email');

//Validating Mobile no. Field
$this->form_validation->set_rules('dmobile', 'Mobile No.', 'required|regex_match[/^[0-9]{10}$/]');

//Validating Address Field
$this->form_validation->set_rules('daddress', 'Address', 'required|min_length[10]|max_length[50]');

if ($this->form_validation->run() == FALSE) {
$this->load->view('insert_view');
} else {
//Setting values for tabel columns
$data = array(
'Student_Name' => $this->input->post('dname'),
'Student_Email' => $this->input->post('demail'),
'Student_Mobile' => $this->input->post('dmobile'),
'Student_Address' => $this->input->post('daddress')
);
//Transfering data to Model
$config['protocol'] = 'smtp';
$config['smtp_host'] = 'ssl://smtp.gmail.com'; //change this
$config['smtp_port'] = '465'; //change this
$config['smtp_user'] = 'Email'; //change this
$config['smtp_pass'] = 'Password'; //change this
$config['mailtype'] = 'html';
$config['charset'] = 'iso-8859-1';
$config['wordwrap'] = TRUE;
$config['newline'] = "\r\n"; //use double quotes to comply with RFC 822 standard
$this->email->initialize($config);
$this->insert_model->form_insert($data);
$data['message'] = 'Data Inserted Successfully';
$this->email->from('girvile1@gmail.com', 'Virgile');
$this->email->to($data['Student_Email']);
$this->email->subject('Vous êtes inscrit !');
$this->email->message('Bonjour,<br /> Vous êtes bien inscrit sur la bdd de pion.virgile.ovh');
if ($this->email->send()){
  echo "Mail sent !";
  $this->load->view('insert_view');
}
else {
show_error($this->email->print_debugger());
}
//Loading View
//  $this->load->view('print_list', $data);
}
}

}

?>
