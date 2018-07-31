<?php

class Article extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('article_model');
	}
	
	
	public function index()
	{
		$query = $this->article_model->select_all_data();
		
		$this->load->view('article_index',['query' => $query]);
		return true;
	}
	
	public function create()
	{
		$this->load->view('article_create');
		return true;
	}
}
