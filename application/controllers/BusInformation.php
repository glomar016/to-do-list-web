<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BusInformation extends CI_Controller {

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
		
		$this->load->view('busInformation');
                
            
	}

	public function addBusInformation()
	{
		$busNumberInput = $this->input->post('busNumberInput');
		$busTypeInput =  $this->input->post('busTypeInput');
		$busTemplateInput =  $this->input->post('busTemplateInput');
		$ownerInput =  $this->input->post('ownerInput');
		$contactInput =  $this->input->post('contactInpu;t');
		$plateInput =  $this->input->post('plateInput');
		$engineInput =  $this->input->post('engineInput');
		$chasisInput =  $this->input->post('chasisInput');
		$fileNumberInput =  $this->input->post('fileNumberInput');
		$denominationInput =  $this->input->post('denominationInput');
		$pistonInput =  $this->input->post('pistonInput');
		$cylindersInput =  $this->input->post('cylindersInput');
		$fuelInput =  $this->input->post('fuelInput');
		$makeInput =  $this->input->post('makeInput');
		$seriesInput =  $this->input->post('seriesInput');
		$bodyInput =  $this->input->post('bodyInput');
		$bodyNumberInput =  $this->input->post('bodyNumberInput');
		$yearInput =  $this->input->post('yearInput');
		$grossWeightInput =  $this->input->post('grossWeightInput');
		$netWeightInput =  $this->input->post('netWeightInput');
		$shipWeightInput =  $this->input->post('shipWeightInput');
		$withTelevision =  $this->input->post('withTelevision');
		$withAircon =  $this->input->post('withAircon');
		$withWifi =  $this->input->post('withWifi');

		$data = array("number" => $busNumberInput
						, "owner" => $ownerInput
						, "contactNumber" => $contactInput
						, "fileNumber" => $fileNumberInput
						, "plateNumber" => $plateInput
						, "engineNumber" => $engineInput
						, "chasisNumber" => $chasisInput
						, "denomination" => $denominationInput
						, "pistonPlacement" => $ownerInput
						, "fuel" => $fuelInput
						, "make" => $makeInput
						, "series" => $seriesInput
						, "bodyType" => $bodyInput
						, "bodyNumber" => $bodyNumberInput
						, "yearModel" => $yearInput
						, "grossWeight" => $grossWeightInput
						, "netWeight" => $netWeightInput
						, "shippingWeight" => $shipWeightInput
						, "netCapacity" => $ownerInput
						, "hasWifi" => $withWifi
						, "hasAircon" => $withAircon
						, "hasTelevision" => $withTelevision
						);
		$postdata = json_encode($data);

		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => 'http://localhost:3600/api/v1/bus_information/',
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
}
