<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Excel_export extends CI_Controller {

	

	// function index()

	// {

	// 	$this->load->model("excel_export_model");

	// 	$data["employee_data"] = $this->excel_export_model->fetch_data();

	// 	$this->load->view("excel_export_view", $data);

	// }



	function action()

	{

		$this->load->model("excel_export_model");

		$this->load->library("excel");

		$object = new PHPExcel();



		$object->setActiveSheetIndex(0);



		$table_columns = array("Account No", "First Name", "Last Name", "City", "Date Registered");



		$column = 0;



		foreach($table_columns as $field)

		{

			$object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);

			$column++;

		}



		$employee_data = $this->excel_export_model->fetch_data();



		$excel_row = 2;



		foreach($employee_data as $row)

		{

			$object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->accountno);

			$object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->firstname);

			$object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->lastname);

			$object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->city);

			$object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->date_registered);

			$excel_row++;

		}



		$object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');

		header('Content-Type: application/vnd.ms-excel');

		header('Content-Disposition: attachment;filename="Employee Data.xls"');

		$object_writer->save('php://output');

	}

	function action_charges()

	{

		$this->load->model("excel_export_model");

		$this->load->library("excel");

		$object = new PHPExcel();



		$object->setActiveSheetIndex(0);



		$table_columns = array("Account No", "Registration Fee", "Recital Fee", "Dance Shoes", "Tuitions", "Costume", "Date");



		$column = 0;



		foreach($table_columns as $field)

		{

			$object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);

			$column++;

		}



		$employee_data = $this->excel_export_model->fetch_data_charges();



		$excel_row = 2;



		foreach($employee_data as $row)

		{

			$object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->accountno);

			$object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->registration_fee);

			$object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->recital_fee);

			$object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->dance_shoes);

			$object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->monthly_tuitions);

			$object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->costume);

			$object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->payment_date);

			$excel_row++;

		}



		$object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');

		header('Content-Type: application/vnd.ms-excel');

		header('Content-Disposition: attachment;filename="Employee Data.xls"');

		$object_writer->save('php://output');

	}



	function action_students()

	{

		$this->load->model("excel_export_model");

		$this->load->library("excel");

		$object = new PHPExcel();



		$object->setActiveSheetIndex(0);



		$table_columns = array("Account No", "First Name", "Last Name", "City", "Date Registered");



		$column = 0;



		foreach($table_columns as $field)

		{

			$object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);

			$column++;

		}



		$employee_data = $this->excel_export_model->fetch_students_data();



		$excel_row = 2;



		foreach($employee_data as $row)

		{

			$object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->accountno);

			$object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->firstname);

			$object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->lastname);

			$object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->city);

			$object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->date_registered);

			$excel_row++;

		}



		$object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');

		header('Content-Type: application/vnd.ms-excel');

		header('Content-Disposition: attachment;filename="Students Data.xls"');

		$object_writer->save('php://output');

	}

	function action_staff()

	{

		$this->load->model("excel_export_model");

		$this->load->library("excel");

		$object = new PHPExcel();



		$object->setActiveSheetIndex(0);



		$table_columns = array("Account No", "First Name", "Last Name", "City", "Date Registered");



		$column = 0;



		foreach($table_columns as $field)

		{

			$object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);

			$column++;

		}



		$employee_data = $this->excel_export_model->fetch_staff_data();



		$excel_row = 2;



		foreach($employee_data as $row)

		{

			$object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->accountno);

			$object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->firstname);

			$object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->lastname);

			$object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->city);

			$object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->dateregistered);

			$excel_row++;

		}



		$object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');

		header('Content-Type: application/vnd.ms-excel');

		header('Content-Disposition: attachment;filename="Staff Data.xls"');

		$object_writer->save('php://output');

	}

    function action_vendors()

	{

		$this->load->model("excel_export_model");

		$this->load->library("excel");

		$object = new PHPExcel();



		$object->setActiveSheetIndex(0);



		$table_columns = array("Account No", "First Name", "Last Name", "City", "Date Registered");



		$column = 0;



		foreach($table_columns as $field)

		{

			$object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);

			$column++;

		}



		$employee_data = $this->excel_export_model->fetch_vendors_data();



		$excel_row = 2;



		foreach($employee_data as $row)

		{

			$object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->accountno);

			$object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->firstname);

			$object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->lastname);

			$object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->city);

			$object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->dateregistered);

			$excel_row++;

		}



		$object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');

		header('Content-Type: application/vnd.ms-excel');

		header('Content-Disposition: attachment;filename="Vendors Data.xls"');

		$object_writer->save('php://output');

	}

    function action_classes()

	{

		$this->load->model("excel_export_model");

		$this->load->library("excel");

		$object = new PHPExcel();



		$object->setActiveSheetIndex(0);



		$table_columns = array("Account No", "First Name", "Last Name", "City", "Date Registered");



		$column = 0;



		foreach($table_columns as $field)

		{

			$object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);

			$column++;

		}



		$employee_data = $this->excel_export_model->fetch_classes_data();



		$excel_row = 2;



		foreach($employee_data as $row)

		{

			$object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->accountno);

			$object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->firstname);

			$object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->lastname);

			$object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->city);

			$object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->dateregistered);

			$excel_row++;

		}



		$object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');

		header('Content-Type: application/vnd.ms-excel');

		header('Content-Disposition: attachment;filename="Classes Data.xls"');

		$object_writer->save('php://output');

	}



	

}



































































































	