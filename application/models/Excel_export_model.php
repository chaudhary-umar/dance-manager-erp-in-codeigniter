<?php

class Excel_export_model extends CI_Model

{

	function fetch_data()

	{

		$this->db->order_by("id", "ASC");

		$query = $this->db->get("table_accounts");

		return $query->result();

	}
	function fetch_data_charges()

	{

		$this->db->order_by("id", "ASC");

		$query = $this->db->get("accounts_charges");

		return $query->result();

	}

    function fetch_students_data()

	{

		$this->db->order_by("id", "ASC");

		$query = $this->db->get("table_students");

		return $query->result();

	}

    function fetch_classes_data()

	{

		$this->db->order_by("id", "ASC");

		$query = $this->db->get("table_classes");

		return $query->result();

	}

	function fetch_vendors_data()

	{

		$this->db->order_by("id", "ASC");

		$query = $this->db->get("table_vendors");

		return $query->result();

	}

	function fetch_staff_data()

	{

		$this->db->order_by("id", "ASC");

		$query = $this->db->get("table_staff");

		return $query->result();

	}

	

}

