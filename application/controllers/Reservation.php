<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservation extends CI_Controller {

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
		
		$this->load->view('reservation');
                
            
	}

	public function show_avail_bus()
	{
		$date = $this->input->post('date');
		$TypeId = $this->input->post('TypeId');
		$routeId = $this->input->post('routeId');
		$userId =  $this->input->post('userId');

		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => 'http://localhost:3600/api/v1/bus_schedule/schedule/'.$date.'/'.$TypeId.'/'.$routeId.'/',
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'GET',
		));

		$response = curl_exec($curl);

		curl_close($curl);
		echo ($response);
		
	}

	public function show_reservations()
	{

		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => 'http://localhost:3600/api/v1/reservation',
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

	public function find_one_reservation()
	{
		$id = $this->input->post('id');

		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => 'http://localhost:3600/api/v1/reservation/' . $id ,
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
	
	public function add_reservation()
	{
		$reserveName = $this->input->post('reserveName');
		$reserveBilling = $this->input->post('reserveBilling');
		$reserveSchedule = $this->input->post('reserveSchedule');
		$totalDistanceKm = $this->input->post('reserveLandmark');
		$referenceNumber = $this->input->post('referenceNumber');
		$totalPrice = $this->input->post('totalPrice');
		// $totalDiscount = $this->input->post('totalDiscount');
		$currentStatus = $this->input->post('currentStatus');
		$promoId = $this->input->post('promoId');
		$reserveDate = $this->input->post('reserveDate');
		$scheduleName = $this->input->post('scheduleName');
		$userId =  $this->input->post('userId');

		if($promoId == ""){
			$data = array("name" => $reserveName
						, "billingAddress" => $reserveBilling
						, "scheduleId" => $reserveSchedule
						, "referenceNumber" => $referenceNumber
						, "totalAmount" => $totalPrice
						, "scheduleName" => $scheduleName
						// , "totalDiscount" => $totalDiscount
						, "currentStatus" => $currentStatus
						, "totalDistanceKm" => $totalDistanceKm
						, "reservationDate" => $reserveDate
						, "created_by" => $userId
			);
		}
		else{
			$data = array("name" => $reserveName
						, "billingAddress" => $reserveBilling
						, "scheduleId" => $reserveSchedule
						, "referenceNumber" => $referenceNumber
						, "totalAmount" => $totalPrice
						, "scheduleName" => $scheduleName
						// , "totalDiscount" => $totalDiscount
						, "currentStatus" => $currentStatus
						, "promoId" => $promoId
						, "totalDistanceKm" => $totalDistanceKm
						, "reservationDate" => $reserveDate
			);
		}

		// print_r($data);

		$postdata = json_encode($data);
	
		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => 'http://localhost:3600/api/v1/reservation/',
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'POST',
		CURLOPT_POSTFIELDS => $postdata,
		CURLOPT_HTTPHEADER => array(
			'Content-Type: application/json'
		),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		echo $response;
	}

	public function update_status(){
	
		$id = $this->input->post('id');

		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => 'http://localhost:3600/api/v1/reservation/'.$id,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'PUT',
		CURLOPT_POSTFIELDS =>'{
			"currentStatus": "Paid"
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

	public function add_reservation_line(){
		$reservationLineData = $this->input->post('reservationLineData');
		$reservationId = $this->input->post('reservationId');
		$reservationPostData = [];


		for($i=0; $i < count($reservationLineData["seatId"]); $i++){
			array_push($reservationPostData, array(
				"passengerName" => $reservationLineData["passengerName"][$i],
				"seatId" => $reservationLineData["seatId"][$i],
				"route" => $reservationLineData["landmark"][$i],
				"amount" => $reservationLineData["passengerAmount"][$i],
				"reservationId" => $reservationId,
				"created_by" => $reservationLineData["userId"],
			));
				$curl = curl_init();

				curl_setopt_array($curl, array(
				CURLOPT_URL => 'http://localhost:3600/api/v1/bus_seat/'.$reservationLineData["seatId"][$i],
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => '',
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 0,
				CURLOPT_FOLLOWLOCATION => true,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => 'PUT',
				CURLOPT_POSTFIELDS =>'{
					"currentStatus": "Reserved"
				}',
				CURLOPT_HTTPHEADER => array(
					'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6Ijk2MGY4YTZmLWU0MjEtNDI5OS1iNzQxLTYwZjAwNjQxMTY1MSIsImVtYWlsIjoianJnbG9tYXIwMTZAZ21haWwuY29tIiwiaWF0IjoxNjIxMDQ2MjA0LCJleHAiOjE2MjEwNTM0MDR9.Mgy75XVlGCk84xviMqVa7bKUAe60fJOGqVqrvdtQU0Q',
					'Content-Type: application/json'
				),
			));

			$response = curl_exec($curl);
			curl_close($curl);
		}

		$postdata = json_encode($reservationPostData);

		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => 'http://localhost:3600/api/v1/reservation_line/bulkCreate',
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
	}	


	public function get_reservation_line(){
		$reservationId = $this->input->post('reservationId');

		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => 'http://localhost:3600/api/v1/reservation_line/findAll/'.$reservationId,
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

	public function delete_reservation(){
		$reservationId = $this->input->post('reservationId');

		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => 'http://localhost:3600/api/v1/reservation/'.$reservationId,
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

	public function delete_reservation_lines(){
		$reservationId = $this->input->post('reservationId');
				
		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => 'http://localhost:3600/api/v1/reservation_line/delete_reservation_lines/'.$reservationId,
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

	public function activate_bus_seats(){

		$seatId = $this->input->post('seatId');

		foreach($seatId as $id){
			$curl = curl_init();

			curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://localhost:3600/api/v1/bus_seat/'.$id,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'PUT',
			CURLOPT_POSTFIELDS =>'{
				"currentStatus": "Available"
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


}
