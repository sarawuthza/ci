<?php

/**
 * Created by PhpStorm.
 * User: lab
 * Date: 27/11/2559
 * Time: 11:07
 */
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Category_model');
    }

    public function index()
    {
        $this->load->view('admin/layout/admin_header_view');
        $this->load->view('admin/layout/admin_sidebar_view');
        $this->load->view('admin/admin_view');
        $this->load->view('admin/layout/admin_footer_view');
    }

    public function category()
    {
        $data = array(
            'categories' => $this->Category_model->getCategory()
        );


        $this->load->view('admin/layout/admin_header_view');
        $this->load->view('admin/layout/admin_sidebar_view');
        $this->load->view('admin/category_view', $data);
        $this->load->view('admin/layout/admin_footer_view');
    }

    public function add_category()
    {
        $this->load->view('admin/layout/admin_header_view');
        $this->load->view('admin/layout/admin_sidebar_view');
        $this->load->view('admin/add_category_view');
        $this->load->view('admin/layout/admin_footer_view');
    }
    public function create_category()
    {

        $name = $this->input->post('name');
        $this->Category_model->insertCategory($name);
        redirect(base_url('admin/category'));
    }

    public function edit_category($category_id)
    {
        $category =  $this->Category_model->getCategoryByID($category_id);
        $data = array(
            'category' => $category->row()
        );
        $this->load->view('admin/layout/admin_header_view');
        $this->load->view('admin/layout/admin_sidebar_view');
        $this->load->view('admin/edit_category_view', $data);
        $this->load->view('admin/layout/admin_footer_view');
    }

    public function update_category($category_id)
   {
       $name = $this->input->post('name');
       $this->Category_model->updateCategory($category_id, $name);
       redirect('admin/category');
   }
    public function delete_category($category_id)
    {
      $this->Category_model->deleteCategory($category_id);
      redirect('admin/category');
    }

    public function news()
    {
        $this->load->view('admin/layout/admin_header_view');
        $this->load->view('admin/layout/admin_sidebar_view');
        $this->load->view('admin/news_view');
        $this->load->view('admin/layout/admin_footer_view');
    }

    public function comments()
    {
        $this->load->view('admin/layout/admin_header_view');
        $this->load->view('admin/layout/admin_sidebar_view');
        $this->load->view('admin/comments_view');
        $this->load->view('admin/layout/admin_footer_view');
    }

    public function user()
    {
        $this->load->view('admin/layout/admin_header_view');
        $this->load->view('admin/layout/admin_sidebar_view');
        $this->load->view('admin/user_view');
        $this->load->view('admin/layout/admin_footer_view');
    }
}
