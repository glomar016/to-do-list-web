<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_online_payment extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
		$this->load->view('view_online_payment');
            
	}

	public function show_online_payment()
	{
		$curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:3600/api/v1/payment/online_payment/',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6Ijk2MGY4YTZmLWU0MjEtNDI5OS1iNzQxLTYwZjAwNjQxMTY1MSIsImVtYWlsIjoianJnbG9tYXIwMTZAZ21haWwuY29tIiwiaWF0IjoxNjIxMDQ2MjA0LCJleHAiOjE2MjEwNTM0MDR9.Mgy75XVlGCk84xviMqVa7bKUAe60fJOGqVqrvdtQU0Q'
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;

	}


}
