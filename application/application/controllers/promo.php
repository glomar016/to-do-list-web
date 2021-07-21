<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promo extends CI_Controller {

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
		$this->load->view('promo');
	}

    public function add_promo()
    {
        $codeInput = $this->input->post('codeInput');
        $busTypeInput = $this->input->post('busTypeInput');
        $fixedDiscountInput = $this->input->post('fixedDiscountInput');
        $percentageDiscountInput = $this->input->post('percentageDiscountInput');
        $minimumAmountInput = $this->input->post('minimumAmountInput');
        $minimumSeatReservationInput = $this->input->post('minimumSeatReservationInput');
        $bookingDateToInput = $this->input->post('bookingDateToInput');
        $bookingDateFromInput = $this->input->post('bookingDateFromInput');
        $travelDateToInput = $this->input->post('travelDateToInput');
        $travelDateFromInput = $this->input->post('travelDateFromInput');
        $effectivityDateInput = $this->input->post('effectivityDateInput');
        $deactivationDateInput = $this->input->post('deactivationDateInput');

        $data = array("code" => $codeInput
						, "busTypeId" => $busTypeInput
						, "fixedDiscount" => $fixedDiscountInput
                        , "percentageDiscount" => $percentageDiscountInput
                        , "minimumAmount" => $minimumAmountInput
                        , "minimumSeatReservation" => $minimumSeatReservationInput
                        , "bookingDateTo" => $bookingDateToInput
                        , "bookingDateFrom" => $bookingDateFromInput
                        , "tavelDateTo" => $travelDateToInput
                        , "travelDateFrom" => $travelDateFromInput
                        , "effectivityDate" => $effectivityDateInput
						, "deactivationDate" => $deactivationDateInput);

		$postdata = json_encode($data);

		$curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:3600/api/v1/promo/',
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

	public function show_promo(){
		$curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:3600/api/v1/promo/',
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

	public function get_one_promo(){

		$id = $this->input->post('id');
			
		$curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:3600/api/v1/promo/'.$id,
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

    public function get_one_specific_promo(){

		$promoId = $this->input->post('promoId');
			
		$curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:3600/api/v1/promo/reservation/'.$promoId,
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

	public function edit_promo(){
		$codeEdit = $this->input->post('codeEdit');
        $busTypeEdit = $this->input->post('busTypeEdit');
        $fixedDiscountEdit = $this->input->post('fixedDiscountEdit');
        $percentageDiscountEdit = $this->input->post('percentageDiscountEdit');
        $minimumAmountEdit = $this->input->post('minimumAmountEdit');
        $minimumSeatReservationEdit = $this->input->post('minimumSeatReservationEdit');
        $bookingDateToEdit = $this->input->post('bookingDateToEdit');
        $bookingDateFromEdit = $this->input->post('bookingDateFromEdit');
        $travelDateToEdit = $this->input->post('travelDateToEdit');
        $travelDateFromEdit = $this->input->post('travelDateFromEdit');
        $effectivityDateEdit = $this->input->post('effectivityDateEdit');
        $deactivationDateEdit = $this->input->post('deactivationDateEdit');
        $id = $this->input->post('promoIdEdit');

        $data = array("code" => $codeEdit
						, "busTypeId" => $busTypeEdit
						, "fixedDiscount" => $fixedDiscountEdit
                        , "percentageDiscount" => $percentageDiscountEdit
                        , "minimumAmount" => $minimumAmountEdit
                        , "minimumSeatReservation" => $minimumSeatReservationEdit
                        , "bookingDateTo" => $bookingDateToEdit
                        , "bookingDateFrom" => $bookingDateFromEdit
                        , "tavelDateTo" => $travelDateToEdit
                        , "travelDateFrom" => $travelDateFromEdit
                        , "effectivityDate" => $effectivityDateEdit
						, "deactivationDate" => $deactivationDateEdit);

		$postdata = json_encode($data);

		$curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:3600/api/v1/promo/'.$id,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'PUT',
        CURLOPT_POSTFIELDS => $postdata,
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;

	}

	public function delete_promo(){
        $id = $this->input->post('deletePromoId');

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:3600/api/v1/promo/'.$id,
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

}
