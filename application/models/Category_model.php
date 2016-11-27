<?php

/**
 * Created by PhpStorm.
 * User: lab
 * Date: 27/11/2559
 * Time: 10:44
 */
class Category_model extends CI_Model
{
    public function getCategory()
    {
        return $this->db->get('categories');
    }
    public function insertCategory($name)
    {
        $data = array(
            'name' => $name
        );
        $this->db->insert('categories', $data);
    }

    public function getCategoryByID($category_id)
    {
        $this->db->where('category_id', $category_id);
        return $this->db->get('categories');
    }
}