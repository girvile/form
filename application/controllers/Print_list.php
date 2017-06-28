

<?php

class Print_list extends CI_Controller {

function __construct() {
parent::__construct();
$this->load->model('List_model');
}

function index() {
//Including validation library
//Setting values for tabel columns
//Transfering data to Model
$data['students'] = $this->List_model->get_list();
$this->load->view('print_list', $data);
}

}

?>
