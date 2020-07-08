<?php

class Htmltopdf_model extends CI_Model

{

	function fetch_accounts_pdf(){

		$data = $this->db->get('table_accounts');

		$output = '<table width="100%" cellspacing="5" cellpadding="5">';

		foreach($data->result() as $row)

		{

			$output .= '

			<tr>

				    <td>'.$row->id.'</td>

				    <td>'.$row->accountno.'</td>

				    <td>'.$row->firstname.'</td>

				    <td>'.$row->lastname.'</td>

				    <td>'.$row->city.'</td>

				    <td>'.$row->date_registered.'</td>

				</tr>

			';

		}

		$output .= '

		<tr >

			<td ><a href="'.base_url().'table_accounts" class="btn btn-primary" style="text-align:center;">Back</a></td>

		</tr>

		';

		$output .= '</table>';

		return $output;

	}

	function fetch_charges_pdf(){

		$data = $this->db->get('accounts_charges');

		$output = '<table width="100%" cellspacing="5" cellpadding="5">';

		foreach($data->result() as $row)

		{

			$output .= '

			<tr>

				    <td>'.$row->id.'</td>

				    <td>'.$row->accountno.'</td>

				    <td>'.$row->registration_fee.'</td>

				    <td>'.$row->recital_fee.'</td>

					<td>'.$row->dance_shoes.'</td>

					<td>'.$row->monthly_tuitions.'</td>

					<td>'.$row->costume.'</td>

				    <td>'.$row->payment_date.'</td>

				</tr>

			';

		}

		$output .= '

		<tr >

			<td ><a href="'.base_url().'accounts_charges" class="btn btn-primary" style="text-align:center;">Back</a></td>

		</tr>

		';

		$output .= '</table>';

		return $output;

	}

	function fetch_students_pdf(){

		$data = $this->db->get('table_students');

		$output = '<table width="100%" cellspacing="5" cellpadding="5">';

		foreach($data->result() as $row)

		{

			$output .= '

			<tr>

				    <td>'.$row->id.'</td>

				    <td>'.$row->accountno.'</td>

				    <td>'.$row->firstname.'</td>

				    <td>'.$row->lastname.'</td>

				    <td>'.$row->city.'</td>

				    <td>'.$row->date_registered.'</td>

				</tr>

			';

		}

		$output .= '

		<tr >

			<td ><a href="'.base_url().'table_students" class="btn btn-primary" style="text-align:center;">Back</a></td>

		</tr>

		';

		$output .= '</table>';

		return $output;

	}

	function fetch_classes_pdf(){

		$data = $this->db->get('table_classes');

		$output = '<table width="100%" cellspacing="5" cellpadding="5">';

		foreach($data->result() as $row)

		{

			$output .= '

			<tr>

				    <td>'.$row->id.'</td>

				    <td>'.$row->accountno.'</td>

				    <td>'.$row->firstname.'</td>

				    <td>'.$row->lastname.'</td>

				    <td>'.$row->city.'</td>

				    <td>'.$row->dateregistered.'</td>

				</tr>

			';

		}

		$output .= '

		<tr >

			<td ><a href="'.base_url().'table_classes" class="btn btn-primary" style="text-align:center;">Back</a></td>

		</tr>

		';

		$output .= '</table>';

		return $output;

	}

	function fetch_vendors_pdf(){

		$data = $this->db->get('table_vendors');

		$output = '<table width="100%" cellspacing="5" cellpadding="5">';

		foreach($data->result() as $row)

		{

			$output .= '

			<tr>

				    <td>'.$row->id.'</td>

				    <td>'.$row->accountno.'</td>

				    <td>'.$row->firstname.'</td>

				    <td>'.$row->lastname.'</td>

				    <td>'.$row->city.'</td>

				    <td>'.$row->dateregistered.'</td>

				</tr>

			';

		}

		$output .= '

		<tr >

			<td ><a href="'.base_url().'table_vendors" class="btn btn-primary" style="text-align:center;">Back</a></td>

		</tr>

		';

		$output .= '</table>';

		return $output;

	}

	function fetch_staff_pdf(){

		$data = $this->db->get('table_staff');

		$output = '<table width="100%" cellspacing="5" cellpadding="5">';

		foreach($data->result() as $row)

		{

			$output .= '

			<tr>

				    <td>'.$row->id.'</td>

				    <td>'.$row->accountno.'</td>

				    <td>'.$row->firstname.'</td>

				    <td>'.$row->lastname.'</td>

				    <td>'.$row->city.'</td>

				    <td>'.$row->dateregistered.'</td>

				</tr>

			';

		}

		$output .= '

		<tr >

			<td ><a href="'.base_url().'table_staff" class="btn btn-primary" style="text-align:center;">Back</a></td>

		</tr>

		';

		$output .= '</table>';

		return $output;

	}



	function fetch_reports_accounts_pdf(){

		$data = $this->db->get('table_accounts');

		$output = '<table width="100%" cellspacing="5" cellpadding="5">';

		foreach($data->result() as $row)

		{

			$output .= '

			<tr>

				    <td>'.$row->id.'</td>

				    <td>'.$row->accountno.'</td>

				    <td>'.$row->firstname.'</td>

				    <td>'.$row->lastname.'</td>

				    <td>'.$row->city.'</td>

				    <td>'.$row->date_registered.'</td>

				</tr>

			';

		}

		$output .= '

		<tr >

			<td ><a href="'.base_url().'table_accounts" class="btn btn-primary" style="text-align:center;">Back</a></td>

		</tr>

		';

		$output .= '</table>';

		return $output;

	}

	function fetch_reports_students_pdf(){

		$data = $this->db->get('table_students');

		$output = '<table width="100%" cellspacing="5" cellpadding="5">';

		foreach($data->result() as $row)

		{

			$output .= '

			<tr>

				    <td>'.$row->id.'</td>

				    <td>'.$row->accountno.'</td>

				    <td>'.$row->firstname.'</td>

				    <td>'.$row->lastname.'</td>

				    <td>'.$row->city.'</td>

				    <td>'.$row->date_registered.'</td>

				</tr>

			';

		}

		$output .= '

		<tr >

			<td ><a href="'.base_url().'table_students" class="btn btn-primary" style="text-align:center;">Back</a></td>

		</tr>

		';

		$output .= '</table>';

		return $output;

	}

	function fetch_reports_classes_pdf(){

		$data = $this->db->get('table_classes');

		$output = '<table width="100%" cellspacing="5" cellpadding="5">';

		foreach($data->result() as $row)

		{

			$output .= '

			<tr>

				    <td>'.$row->id.'</td>

				    <td>'.$row->accountno.'</td>

				    <td>'.$row->firstname.'</td>

				    <td>'.$row->lastname.'</td>

				    <td>'.$row->city.'</td>

				    <td>'.$row->dateregistered.'</td>

				</tr>

			';

		}

		$output .= '

		<tr >

			<td ><a href="'.base_url().'table_classes" class="btn btn-primary" style="text-align:center;">Back</a></td>

		</tr>

		';

		$output .= '</table>';

		return $output;

	}



}



?>