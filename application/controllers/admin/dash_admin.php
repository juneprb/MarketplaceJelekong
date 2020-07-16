<?php
class Dash_admin extends CI_Controller
{
    public function index()
    {
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/dashboard_adminlala');
        $this->load->view('template_admin/footer');
    }
}
