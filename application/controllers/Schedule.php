<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule extends CI_Controller {

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
		
		$this->load->view('schedule');
                
            
	}

	public function addSchedule()
	{
		$routeInput = $this->input->post('routeInput');
		$busTypeInput = $this->input->post('busTypeInput');
		$estimatedTimeTravelInput = $this->input->post('estimatedTimeTravelInput');
		$hourFromInput = date("Y-m-d H:i",strtotime($this->input->post('hourFromInput')));
		$hourToInput = date("Y-m-d H:i",strtotime($this->input->post('hourToInput')));
		$willArriveNextDayInput = $this->input->post('willArriveNextDayInput');
		$mondayInput = $this->input->post('mondayInput');
		$tuesdayInput = $this->input->post('tuesdayInput');
		$wednesdayInput = $this->input->post('wednesdayInput');
		$thursdayInput = $this->input->post('thursdayInput');
		$fridayInput = $this->input->post('fridayInput');
		$saturdayInput = $this->input->post('saturdayInput');
		$sundayInput = $this->input->post('sundayInput');

		$data = array("routeId" => $routeInput
						,"busTypeId" => $busTypeInput
						,"estimatedTimeTravel" => $estimatedTimeTravelInput
						,"hourFrom" => $hourFromInput
						,"hourTo" => $hourToInput
						,"willArriveTheNextDay" => $willArriveNextDayInput
						,"monday" => $mondayInput
						,"tuesday" => $tuesdayInput
						,"wednesday" => $wednesdayInput
						,"thursday" => $thursdayInput
						,"friday" => $fridayInput
						,"saturday" => $saturdayInput
						,"sunday" => $sundayInput
						);
		$postdata = json_encode($data);

		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => 'http://localhost:3600/api/v1/schedule/',
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'POST',
		CURLOPT_POSTFIELDS =>$postdata,
		CURLOPT_HTTPHEADER => array(
			'Content-Type: application/json'
		),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		echo $response;
	}


	public function showSchedule(){
		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => 'http://localhost:3600/api/v1/schedule/',
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
		echo $response;
	}

	public function viewSchedule(){

		$id = $this->input->post('id');

		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => 'http://localhost:3600/api/v1/schedule/'.$id,
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
		echo $response;

	}

	public function editSchedule()
	{
		$id = $this->input->post('scheduleIdEdit');
		
		$routeEdit = $this->input->post('routeEdit');
		$busTypeEdit = $this->input->post('busTypeEdit');
		$estimatedTimeTravelEdit = $this->input->post('estimatedTimeTravelEdit');
		$hourFromEdit = date("Y-m-d H:i",strtotime($this->input->post('hourFromEdit')));
		$hourToEdit = date("Y-m-d H:i",strtotime($this->input->post('hourToEdit')));
		$willArriveNextDayEdit = $this->input->post('willArriveNextDayEdit');
		$mondayEdit = $this->input->post('mondayEdit');
		$tuesdayEdit = $this->input->post('tuesdayEdit');
		$wednesdayEdit = $this->input->post('wednesdayEdit');
		$thursdayEdit = $this->input->post('thursdayEdit');
		$fridayEdit = $this->input->post('fridayEdit');
		$saturdayEdit = $this->input->post('saturdayEdit');
		$sundayEdit = $this->input->post('sundayEdit');

		$data = array("routeId" => $routeEdit
						,"busTypeId" => $busTypeEdit
						,"estimatedTimeTravel" => $estimatedTimeTravelEdit
						,"hourFrom" => $hourFromEdit
						,"hourTo" => $hourToEdit
						,"willArriveTheNextDay" => $willArriveNextDayEdit
						,"monday" => $mondayEdit
						,"tuesday" => $tuesdayEdit
						,"wednesday" => $wednesdayEdit
						,"thursday" => $thursdayEdit
						,"friday" => $fridayEdit
						,"saturday" => $saturdayEdit
						,"sunday" => $sundayEdit
						);
		$postdata = json_encode($data);

		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => 'http://localhost:3600/api/v1/schedule/'.$id,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'PUT',
		CURLOPT_POSTFIELDS =>$postdata,
		CURLOPT_HTTPHEADER => array(
			'Content-Type: application/json'
		),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		echo $response;
	}
	
	public function deleteSchedule(){
		
		$deleteScheduleId = $this->input->post('deleteScheduleId');

		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => 'http://localhost:3600/api/v1/schedule/'.$deleteScheduleId,
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

	public function getBusType(){
		$curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:3600/api/v1/bus_type/',
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
        echo $response;
	}

    public function getRoute(){
		
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:3600/api/v1/route/',
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
        echo $response;
	}
}
