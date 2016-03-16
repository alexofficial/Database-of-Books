<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	function index()
	{
		$this->load->view('html_header_1/home_page_header');
                $this->load->view('body_content_2/home_page_content');
	}
        
        function add_new_book_view(){ 
               $this->load->view('html_header_1/home_page_header');
               $this->load->view('body_content_2/book_add_home_page_content');
              
        }
}
