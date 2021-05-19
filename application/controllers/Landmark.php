<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landmark extends CI_Controller {

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
		$this->load->view('Landmark');
	}

	public function add_landmark()
    {
        $name = $this->input->post('name');
        $kmFromOrigin = $this->input->post('kmFromOrigin');
        $effectivityDate = $this->input->post('effectivityDate');


        $data = array("name" => $name
						, "kmFromOrigin" => $kmFromOrigin
						, "effectivityDate" => $effectivityDate);


		$postdata = json_encode($data);

		print_r($postdata);

		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => 'http://localhost:3600/api/v1/landmark',
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'POST',
		CURLOPT_POSTFIELDS =>$postdata,
		CURLOPT_HTTPHEADER => array(
			'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6ImQyNGRkYzZmLTk2NmQtNDFiNS1hMDJiLTJiYjg3MzdkNjViNCIsImVtYWlsIjoia2ltdGFleWVvbkBnbWFpbC5jb20iLCJpYXQiOjE2MjEyMzU2MDYsImV4cCI6MTYyMTI0MjgwNn0.I0K6E7fCcu_EEUlDOlj4sAURW8Z62TggcJDOMMDd2e8
			',
			'Content-Type: application/json'
		),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		echo $response;


		
    }

	public function show_landmark(){
		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => 'http://localhost:3600/api/v1/landmark',
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'GET',
		CURLOPT_HTTPHEADER => array(
			'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6ImQyNGRkYzZmLTk2NmQtNDFiNS1hMDJiLTJiYjg3MzdkNjViNCIsImVtYWlsIjoia2ltdGFleWVvbkBnbWFpbC5jb20iLCJpYXQiOjE2MjEyMzU2MDYsImV4cCI6MTYyMTI0MjgwNn0.I0K6E7fCcu_EEUlDOlj4sAURW8Z62TggcJDOMMDd2e8
			'
		),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		echo $response;
	}


	public function get_one_landmark(){

		$id = $this->input->post('id');
			
		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => 'http://localhost:3600/api/v1/landmark/'.$id,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'GET',
		CURLOPT_HTTPHEADER => array(
			'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6ImQyNGRkYzZmLTk2NmQtNDFiNS1hMDJiLTJiYjg3MzdkNjViNCIsImVtYWlsIjoia2ltdGFleWVvbkBnbWFpbC5jb20iLCJpYXQiOjE2MjEyMzU2MDYsImV4cCI6MTYyMTI0MjgwNn0.I0K6E7fCcu_EEUlDOlj4sAURW8Z62TggcJDOMMDd2e8
			'
		),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		echo $response;
	}

	public function edit_landmark(){
		$name = $this->input->post('editName');
        $kmFromOrigin = $this->input->post('editkmFromOrigin');
        $effectivityDate = $this->input->post('editeffectivityDate');
		$id = $this->input->post('editLandmarkId');


        $data = array("name" => $name
						, "kmFromOrigin" => $kmFromOrigin
						, "effectivityDate" => $effectivityDate);

		$postdata = json_encode($data);

		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => 'http://localhost:3600/api/v1/landmark/'.$id,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'PUT',
		CURLOPT_POSTFIELDS =>$postdata,
		CURLOPT_HTTPHEADER => array(
			'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6ImQyNGRkYzZmLTk2NmQtNDFiNS1hMDJiLTJiYjg3MzdkNjViNCIsImVtYWlsIjoia2ltdGFleWVvbkBnbWFpbC5jb20iLCJpYXQiOjE2MjEyMzU2MDYsImV4cCI6MTYyMTI0MjgwNn0.I0K6E7fCcu_EEUlDOlj4sAURW8Z62TggcJDOMMDd2e8
			',
			'Content-Type: application/json'
		),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		echo $response;
	}
}
public function deleteLandmark(){
	
	$deleteLandmarkId = $this->input->post('deleteLandmarkId');

	$curl = curl_init(); 

		curl_setopt_array($curl, array(
		CURLOPT_URL => 'http://localhost:3600/api/v1/landmark/'.$deleteLandmarkId,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'DELETE',
		));

		$response = curl_exec($curl);

		curl_close($curl);
		echo $response;

}