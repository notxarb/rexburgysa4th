<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Batch extends CI_Controller {

  public function index()
  {
    $this->load->view('ward/index');
  }

}

?>