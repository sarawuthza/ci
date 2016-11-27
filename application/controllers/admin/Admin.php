<?php

/**
 * Created by PhpStorm.
 * User: lab
 * Date: 27/11/2559
 * Time: 11:07
 */
class Admin extends CI_Controller
{
    public function index()
    {
        $this->load->view('admin/layout/admin_header_view');
        $this->load->view('admin/layout/admin_sidebar_view');
        $this->load->view('admin/admin_view');
        $this->load->view('admin/layout/admin_footer_view');
    }
}