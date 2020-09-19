<?php
defined('BASEPATH') or EXIT ('No direct script access allowed');

class M_blog extends CI_Model{

	public function get()
	{
		return $this->db->get('tbl_postingan')->result_array();
	}

	public function getBySlug($slug)
	{
		return $this->db->get_where('tbl_postingan', ['slug' => $slug])->row_array();
	}

	public function getCategory($id)
	{
		return $this->db->get_where('tbl_kategori', ['id' => $id])->row_array();
	}

	public function getAllCategory()
	{
		return $this->db->get('tbl_kategori')->result_array();
	}

	public function getCategoryByName($category_name)
	{
		return $this->db->get_where('tbl_kategori', ['nama_kategori' => $category_name])->row_array();
	}

	public function getBlogByCategory($id_category)
	{
		return $this->db->get_where('tbl_postingan', ['id_kategori' => $id_category])->result_array();
	}

}