<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProjectPhases extends CI_Controller
{
    public function index()
    {
        $data['header'] = $this->load->view('templates/header', null, true);
        $data['footer'] = $this->load->view('templates/footer', null, true);
        $this->load->view('project_phases', $data);
    }
}
