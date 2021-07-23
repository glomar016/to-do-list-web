<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
		$this->load->view('user');
	}

    public function add_user()
    {
        $firstName = $this->input->post('firstName');
        $lastName = $this->input->post('lastName');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
		$userType = $this->input->post('userType');

        $data = array("firstName" => $firstName
						, "lastName" => $lastName
						, "email" => $email
						, "password" => $password
						, "userType" => $userType);

		$postdata = json_encode($data);

		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => 'http://localhost:3600/api/v1/user/',
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'POST',
		CURLOPT_POSTFIELDS => $postdata,
		CURLOPT_HTTPHEADER => array(
			'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6Ijk2MGY4YTZmLWU0MjEtNDI5OS1iNzQxLTYwZjAwNjQxMTY1MSIsImVtYWlsIjoianJnbG9tYXIwMTZAZ21haWwuY29tIiwiaWF0IjoxNjIwNzM1NzI2LCJleHAiOjE2MjA3NDI5MjZ9.Zo-9CV0godm7IUv_CGh0A5QLfKAYnvLO9AbjeAeCA5U',
			'Content-Type: application/json'
		),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		echo $response;
    }

	public function show_user(){
		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => 'http://localhost:3600/api/v1/user',
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'GET',
		CURLOPT_HTTPHEADER => array(
			'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6Ijk2MGY4YTZmLWU0MjEtNDI5OS1iNzQxLTYwZjAwNjQxMTY1MSIsImVtYWlsIjoianJnbG9tYXIwMTZAZ21haWwuY29tIiwiaWF0IjoxNjIwNzM1NzI2LCJleHAiOjE2MjA3NDI5MjZ9.Zo-9CV0godm7IUv_CGh0A5QLfKAYnvLO9AbjeAeCA5U',
		),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		echo $response;

	}

	public function get_one_user(){

		$id = $this->input->post('id');
			
		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => 'http://localhost:3600/api/v1/user/'.$id,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'GET',
		CURLOPT_HTTPHEADER => array(
			'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6Ijk2MGY4YTZmLWU0MjEtNDI5OS1iNzQxLTYwZjAwNjQxMTY1MSIsImVtYWlsIjoianJnbG9tYXIwMTZAZ21haWwuY29tIiwiaWF0IjoxNjIwNzM1NzI2LCJleHAiOjE2MjA3NDI5MjZ9.Zo-9CV0godm7IUv_CGh0A5QLfKAYnvLO9AbjeAeCA5U'
		),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		echo $response;
	}

	public function edit_user(){
		$firstName = $this->input->post('editFirstName');
        $lastName = $this->input->post('editLastName');
        $email = $this->input->post('editEmail');
		$userType = $this->input->post('editUserType');
		$id = $this->input->post('editUserId');

        $data = array("firstName" => $firstName
						, "lastName" => $lastName
						, "userType" => $userType
						, "email" => $email);

		$postdata = json_encode($data);

		$curl = curl_init();		

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://localhost:3600/api/v1/user/'.$id,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'PUT',
			CURLOPT_POSTFIELDS => $postdata,
			CURLOPT_HTTPHEADER => array(
			'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6Ijk2MGY4YTZmLWU0MjEtNDI5OS1iNzQxLTYwZjAwNjQxMTY1MSIsImVtYWlsIjoianJnbG9tYXIwMTZAZ21haWwuY29tIiwiaWF0IjoxNjIwNzM1NzI2LCJleHAiOjE2MjA3NDI5MjZ9.Zo-9CV0godm7IUv_CGh0A5QLfKAYnvLO9AbjeAeCA5U',
			'Content-Type: application/json'
			),
		));
		
		$response = curl_exec($curl);
		
		curl_close($curl);
		echo $response;

	}

	public function delete_user(){
        $deleteUserId = $this->input->post('deleteUserId');

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:3600/api/v1/user/'.$deleteUserId,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'DELETE',
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjkxZGFkMDMwLTE5YmQtNDczZi04OGZhLTA0OTZhODZhYTVhNiIsImVtYWlsIjoibmlra29jZXJhbHNvQGdtYWlsLmNvbSIsImlhdCI6MTYyMTA1MDA5OSwiZXhwIjoxNjIxMDU3Mjk5fQ.hblcGTwPCl25SsL0ZGGn2xka2aCIcu-uII-r4yXe7C8'
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }

}
