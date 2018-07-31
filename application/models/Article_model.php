<?php

class Article_model extends CI_Model {
	protected $table = 'articles';
	protected $primaryKey = 'id';
	
	function __construct() {
		parent::__construct();
	}
	
	public function select_all_data()
	{
		$query = $this->db->get( $this->table );
		return $query->result();
	}
	
	public function select_data($id)
	{
		$query = $this->db->get_where( $this->table,[
			$this->primaryKey=>$id] );
		return $query->row();
		
	}
	
	public function insert_data($data)
	{
		$this->db->insert( $this->table,$data);
		return $this->db->insert_id();
		
	}
	
	public function update_data($data)
	{
		$this->db->where([
			$this->primaryKey => $data['id']
		]);
		$this->db->update($this->table, $data);
		return $this->db->affected_rows();
	}
	
	public function delete_data($id)
	{
			$this->db->delete($table, [
				$this->primaryKey=>$id
			]);
			return  $this->db->affected_rows();
	}
}
