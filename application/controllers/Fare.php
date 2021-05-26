<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fare extends CI_Controller {

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
		$this->load->view('fare'); 
	}

    public function add_fare()
    {
        $initialKm = $this->input->post('initialKm');
        $initialPrice = $this->input->post('initialPrice');
        $additionalKm = $this->input->post('additionalKm');
        $discountPercentage = $this->input->post('discountPercentage');
        $busTypeId = $this->input->post('busTypeId');

        $data = array("initialKm" => $initialKm
						, "initialPrice" => $initialPrice
						, "additionalKm" => $additionalKm
						, "discountPercentage" => $discountPercentage
                    );


		$postdata = json_encode($data);

        print_r($postdata);

		$curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:3600/api/v1/fare',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => $postdata,
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6Ijk2MGY4YTZmLWU0MjEtNDI5OS1iNzQxLTYwZjAwNjQxMTY1MSIsImVtYWlsIjoianJnbG9tYXIwMTZAZ21haWwuY29tIiwiaWF0IjoxNjIxMDQ2MjA0LCJleHAiOjE2MjEwNTM0MDR9.Mgy75XVlGCk84xviMqVa7bKUAe60fJOGqVqrvdtQU0Q',
            'Content-Type: application/json'
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
		
    }

	public function show_fare(){
		$curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:3600/api/v1/fare',
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


	public function get_one_fare(){

		$id = $this->input->post('id');
			
		$curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:3600/api/v1/fare/'.$id,
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

	public function edit_fare(){
		$id = $this->input->post('fareIdEdit');
		$initialKm = $this->input->post('initialKmEdit');
        $initialPrice = $this->input->post('initialPriceEdit');
        $additionalKm = $this->input->post('additionalKmEdit');
        $discountPercentage = $this->input->post('discountPercentageEdit');
        $effectivityDate = $this->input->post('effectivityDateEdit');
        $busTypeId = $this->input->post('busTypeId');

        $data = array("initialKm" => $initialKm
						, "initialPrice" => $initialPrice
						, "additionalKm" => $additionalKm
						, "discountPercentage" => $discountPercentage
						, "effectivityDate" => $effectivityDate
                    );
		$postdata = json_encode($data);

		$curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:3600/api/v1/fare/'.$id,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'PUT',
        CURLOPT_POSTFIELDS => $postdata,
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6Ijk2MGY4YTZmLWU0MjEtNDI5OS1iNzQxLTYwZjAwNjQxMTY1MSIsImVtYWlsIjoianJnbG9tYXIwMTZAZ21haWwuY29tIiwiaWF0IjoxNjIxMDQ2MjA0LCJleHAiOjE2MjEwNTM0MDR9.Mgy75XVlGCk84xviMqVa7bKUAe60fJOGqVqrvdtQU0Q',
            'Content-Type: application/json'
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;


	}
	
	public function delete_fare(){

		$id = $this->input->post('id');

		$curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:3600/api/v1/fare/'.$id,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'PUT',
        CURLOPT_POSTFIELDS =>'{
            "status": "Inactive"
        }',
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6Ijk2MGY4YTZmLWU0MjEtNDI5OS1iNzQxLTYwZjAwNjQxMTY1MSIsImVtYWlsIjoianJnbG9tYXIwMTZAZ21haWwuY29tIiwiaWF0IjoxNjIxMDQ2MjA0LCJleHAiOjE2MjEwNTM0MDR9.Mgy75XVlGCk84xviMqVa7bKUAe60fJOGqVqrvdtQU0Q',
            'Content-Type: application/json'
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;


	}
}
