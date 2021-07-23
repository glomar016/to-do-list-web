<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

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
        $this->load->helper('form');
		$this->load->view('users/register'); 
	}

    public function register_user()
    {
        $photo = $this->input->post('photo');
        $firstName = $this->input->post('firstName');
        $middleName = $this->input->post('middleName');
        $lastName = $this->input->post('lastName');
        $birthday = $this->input->post('birthday');
        $gender = $this->input->post('gender');
        $email = $this->input->post('email');
        $municipality = $this->input->post('municipality');
        $mobileNumber = $this->input->post('mobileNumber');
        $address = $this->input->post('address');
        $province = $this->input->post('province');
        $country = $this->input->post('country');
        $zipCode = $this->input->post('zipCode');
        $securityQuestion = $this->input->post('securityQuestion');
        $answer = $this->input->post('answer');
        $password = $this->input->post('password');

        // $config['upload_path'] = './resources/assets/img';
        // $config['allowed_types'] = 'gif|jpg|png';
        // $config['max_size'] = '100';
        // $config['max_width']  = '1024';
        // $config['max_height']  = '768';

        // $this->load->library('upload', $config);  # Load upload library
        // $this->upload->initialize($config);   # Initialize 
        // if ( ! $this->upload->do_upload('photo')) 
        // {
        //     $error = array('error' => $this->upload->display_errors());
        //     var_dump($error);
        // }
        // else
        // {
        //     $data = array('photo' => $this->upload->data());
        // }

        $data = array("firstName" => $firstName
                        , "middleName" => $middleName
                        , "lastName" => $lastName
                        , "birthday" => $birthday
                        , "gender" => $gender
                        , "email" => $email
                        , "municipality" => $municipality
                        , "mobileNumber" => $mobileNumber
                        , "address" => $address
                        , "province" => $province
                        , "country" => $country
                        , "zipCode" => $zipCode
                        , "securityQuestion" => $securityQuestion
                        , "answer" => $answer
                        , "password" => $password
                        , "userType" => "Passenger");

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
}
