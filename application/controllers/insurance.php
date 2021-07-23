<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insurance extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -
     *      http://example.com/index.php/welcome/index
     *  - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->view('insurance');
    }

    public function add_insurance()
    {
        $code = $this->input->post('insuranceCode');
        $name = $this->input->post('insuranceName');
        $effectivityDate = $this->input->post('effectivityDate');
        $amount = $this->input->post('insuranceAmount');
        $details = $this->input->post('insuranceDetails');
        $document = $this->input->post('insuranceDocument');
        $userId =  $this->input->post('userId');

        $data = array("code" => $code,
                      "name" => $name,
                      "effectivityDate" => $effectivityDate,
                      "amount" => $amount,
                      "details" => $details,
                      "document" => $document,
                      "created_by" => $userId
                    );

        $postdata = json_encode($data);

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:3600/api/v1/insurance/',
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

    public function show_insurance(){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:3600/api/v1/insurance/',
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


    public function get_one_insurance(){

        $id = $this->input->post('id');
            
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:3600/api/v1/insurance/'.$id,
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

     public function edit_insurance(){
         $name = $this->input->post('editinsuranceName');
         $id = $this->input->post('editinsuranceId');
         $userId = $this->input->post('editUserId');

         $data = array("name" => $name
                        ,"updated_by" => $userId
                      );

         $postdata = json_encode($data);

         $curl = curl_init();

         curl_setopt_array($curl, array(
         CURLOPT_URL => 'http://localhost:3600/api/v1/insurance/'.$id,
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

     public function delete_insurance(){
         $id = $this->input->post('deleteinsuranceId');

    	  $data = array("status" => "Inactive");

         $postdata = json_encode($data);

         $curl = curl_init();

         curl_setopt_array($curl, array(
         CURLOPT_URL => 'http://localhost:3600/api/v1/insurance/'.$id,
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
}

