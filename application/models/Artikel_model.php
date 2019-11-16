<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel_model extends CI_Model {
	/**
	 * __construct function.
	 *
	 * @access public
	 * @return void
	 */
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	/**
	 * create_user function.
	 *
	 * @access public
	 * @param mixed $username
	 * @param mixed $email
	 * @param mixed $password
	 * @return bool true on success, false on failure
	 */
	public function create_artikel($params) {
		return $this->db->insert('artikel', $params);
	}

	public function totalArtikel() {
		$this->db->where('deleted_at', '');
		$this->db->from("artikel");
		return floor($this->db->count_all_results()/5)+1;
	}

	public function totalAllArtikel() {
		$this->db->where('deleted_at', '');
		$this->db->from("artikel");
		return $this->db->count_all_results();
	}

	public function getAll(){
		$this->db->where('deleted_at', '');
    $this->db->order_by('judul_artikel', 'asc');
		$query = $this->db->get('artikel');
		$this->db->order_by('tgl_artikel', 'asc');
		return $query->result();
	}

  public function get($page = null){

    if($page!=null){
      $this->db->limit('5', $page);
    } else {
      if($this->totalArtikel()>1){
          $this->db->limit('5');
      }
    };
		$this->db->order_by('judul_artikel', 'asc');
		$this->db->where('deleted_at', '');
		$query = $this->db->get('artikel');
		return $query->result();
  }

	public function getDetail($id){
		$this->db->where('id_artikel', $id);
		$this->db->select('*');
    $this->db->from('artik');
		return $this->db->get()->row();
  }

}
