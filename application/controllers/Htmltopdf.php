<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class HtmltoPDF extends CI_Controller {



	public function __construct()

	{

		parent::__construct();

		$this->load->model('htmltopdf_model');

		$this->load->library('pdf');

	}

	public function account_pdf()

	{

		$this->load->model('htmltopdf_model');

		$this->load->library('pdf');





			$html_content = '<h3 align="center">Accounts Table</h3><br /><br />

      <table width="100%" cellspacing="5" cellpadding="5" >

           <tr>

                <th width="4%">ID</th>

                <th width="12%">Acct No</th>

                <th width="10%">First Name</th>

                <th width="12%">Last Name</th>

                <th width="15%">City</th>

                <th width="15%">Date Registered</th>

            </tr>

       </table>     ';

			$html_content .= $this->htmltopdf_model->fetch_accounts_pdf();

			$this->pdf->loadHtml($html_content);

			$this->pdf->render();

			$this->pdf->stream("myname.pdf", array("Attachment"=>0));



      // $content .= fetch_data();

      // $content .= '</table>';

      // $obj_pdf->writeHTML($content);

      // $obj_pdf->Output('sample.pdf', 'I');

  }
  
  public function charges_pdf()

	{

		$this->load->model('htmltopdf_model');

		$this->load->library('pdf');





			$html_content = '<h3 align="center">Charges Table</h3><br /><br />

      <table width="100%" cellspacing="5" cellpadding="5" >

           <tr>

                <th width="4%">ID</th>

                <th width="12%">Acct No</th>

                <th width="10%">First Name</th>

                <th width="12%">Last Name</th>

                <th width="15%">City</th>

                <th width="15%">Date Registered</th>

            </tr>

       </table>     ';

			$html_content .= $this->htmltopdf_model->fetch_charges_pdf();

			$this->pdf->loadHtml($html_content);

			$this->pdf->render();

			$this->pdf->stream("myname.pdf", array("Attachment"=>0));



      // $content .= fetch_data();

      // $content .= '</table>';

      // $obj_pdf->writeHTML($content);

      // $obj_pdf->Output('sample.pdf', 'I');

	}

	public function students_pdf()

	{

		$this->load->model('htmltopdf_model');

		$this->load->library('pdf');





			$html_content = '<h3 align="center">Students Table</h3><br /><br />

      <table width="100%" cellspacing="5" cellpadding="5" >

           <tr>

                <th width="4%">ID</th>

                <th width="12%">Account.No</th>

                <th width="11%">First Name</th>

                <th width="15%">Last Name</th>

                <th width="10%">City</th>

                <th width="15%">Registered Date</th>

            </tr>

       </table>     ';

			$html_content .= $this->htmltopdf_model->fetch_students_pdf();

			$this->pdf->loadHtml($html_content);

			$this->pdf->render();

			$this->pdf->stream("myname.pdf", array("Attachment"=>0));



      // $content .= fetch_data();

      // $content .= '</table>';

      // $obj_pdf->writeHTML($content);

      // $obj_pdf->Output('sample.pdf', 'I');

	}

	public function classes_pdf()

	{

		$this->load->model('htmltopdf_model');

		$this->load->library('pdf');





			$html_content = '<h3 align="center">Data of Classes</h3><br /><br />

      <table width="100%" cellspacing="5" cellpadding="5" >

           <tr>

                <th width="4%">ID</th>

                <th width="12%">Account.No</th>

                <th width="11%">First Name</th>

                <th width="15%">Last Name</th>

                <th width="10%">City</th>

                <th width="15%">Registered Date</th>

            </tr>

       </table>     ';

			$html_content .= $this->htmltopdf_model->fetch_classes_pdf();

			$this->pdf->loadHtml($html_content);

			$this->pdf->render();

			$this->pdf->stream("myname.pdf", array("Attachment"=>0));



      // $content .= fetch_data();

      // $content .= '</table>';

      // $obj_pdf->writeHTML($content);

      // $obj_pdf->Output('sample.pdf', 'I');

	}

	public function vendors_pdf()

	{

		$this->load->model('htmltopdf_model');

		$this->load->library('pdf');



		

			$html_content = '<h3 align="center">Data of Vendors</h3><br /><br />

      <table width="100%" cellspacing="5" cellpadding="5" >

           <tr>

                <th width="4%">ID</th>

                <th width="12%">Account.No</th>

                <th width="11%">First Name</th>

                <th width="15%">Last Name</th>

                <th width="10%">City</th>

                <th width="15%">Registered Date</th>

            </tr>

       </table>     ';

			$html_content .= $this->htmltopdf_model->fetch_vendors_pdf();

			$this->pdf->loadHtml($html_content);

			$this->pdf->render();

			$this->pdf->stream("myname.pdf", array("Attachment"=>0));

		

      // $content .= fetch_data();

      // $content .= '</table>';

      // $obj_pdf->writeHTML($content);

      // $obj_pdf->Output('sample.pdf', 'I');

	}

	public function staff_pdf()

	{

		$this->load->model('htmltopdf_model');

		$this->load->library('pdf');

		

		

			$html_content = '<h3 align="center">Data of Staff</h3><br /><br />

      <table width="100%" cellspacing="5" cellpadding="5" >

           <tr>

                <th width="4%">ID</th>

                <th width="12%">Account.No</th>

                <th width="11%">First Name</th>

                <th width="15%">Last Name</th>

                <th width="10%">City</th>

                <th width="15%">Registered Date</th>

            </tr>

       </table>     ';

			$html_content .= $this->htmltopdf_model->fetch_staff_pdf();

			$this->pdf->loadHtml($html_content);

			$this->pdf->render();

			$this->pdf->stream("myname.pdf", array("Attachment"=>0));

		

      // $content .= fetch_data();

      // $content .= '</table>';

      // $obj_pdf->writeHTML($content);

      // $obj_pdf->Output('sample.pdf', 'I');

	}

    public function reports_account_pdf()

	{

		$this->load->model('htmltopdf_model');

		$this->load->library('pdf');

		

		

			$html_content = '<h3 align="center">Data of Accounts</h3><br /><br />

      <table width="100%" cellspacing="5" cellpadding="5" >

           <tr>

                <th width="4%">ID</th>

                <th width="12%">Account.No</th>

                <th width="11%">First Name</th>

                <th width="15%">Last Name</th>

                <th width="10%">City</th>

                <th width="15%">Registered Date</th>

            </tr>

       </table>     ';

			$html_content .= $this->htmltopdf_model->fetch_reports_accounts_pdf();

			$this->pdf->loadHtml($html_content);

			$this->pdf->render();

			$this->pdf->stream("myname.pdf", array("Attachment"=>0));

		

      // $content .= fetch_data();

      // $content .= '</table>';

      // $obj_pdf->writeHTML($content);

      // $obj_pdf->Output('sample.pdf', 'I');

	}

	public function reports_students_pdf()

	{

		$this->load->model('htmltopdf_model');

		$this->load->library('pdf');

		

		

			$html_content = '<h3 align="center">Data of Students</h3><br /><br />

      <table width="100%" cellspacing="5" cellpadding="5" >

           <tr>

                <th width="4%">ID</th>

                <th width="12%">Account.No</th>

                <th width="11%">First Name</th>

                <th width="15%">Last Name</th>

                <th width="10%">City</th>

                <th width="15%">Registered Date</th>

            </tr>

       </table>     ';

			$html_content .= $this->htmltopdf_model->fetch_reports_students_pdf();

			$this->pdf->loadHtml($html_content);

			$this->pdf->render();

			$this->pdf->stream("myname.pdf", array("Attachment"=>0));

		

      // $content .= fetch_data();

      // $content .= '</table>';

      // $obj_pdf->writeHTML($content);

      // $obj_pdf->Output('sample.pdf', 'I');

	}

	public function reports_classes_pdf()

	{

		$this->load->model('htmltopdf_model');

		$this->load->library('pdf');

		

		

			$html_content = '<h3 align="center">Data of Classes</h3><br /><br />

      <table width="100%" cellspacing="5" cellpadding="5" >

           <tr>

                <th width="4%">ID</th>

                <th width="12%">Account.No</th>

                <th width="11%">First Name</th>

                <th width="15%">Last Name</th>

                <th width="10%">City</th>

                <th width="15%">Registered Date</th>

            </tr>

       </table>     ';

			$html_content .= $this->htmltopdf_model->fetch_reports_classes_pdf();

			$this->pdf->loadHtml($html_content);

			$this->pdf->render();

			$this->pdf->stream("myname.pdf", array("Attachment"=>0));

		

      // $content .= fetch_data();

      // $content .= '</table>';

      // $obj_pdf->writeHTML($content);

      // $obj_pdf->Output('sample.pdf', 'I');

	}



}



?>

