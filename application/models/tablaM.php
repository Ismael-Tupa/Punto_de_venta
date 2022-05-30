<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class tablaM extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	public function gettabla()
	{
		return $this->db->query("SELECT * from tabla")->result();
	}

}