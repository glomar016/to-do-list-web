<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bus_template extends CI_Controller {

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
        $this->load->view('bus_template');
    }

    public function add_bus_template(){

        $name = $this->input->post('templateName');
        $seat = $this->input->post('seatNumber');
        $busTypeId = $this->input->post('busTypeName');
        $passengersNumber = $this->input->post('passengersNumber');
        $templateRows = $this->input->post('templateRows');
        $templateColumns = $this->input->post('templateColumns');

        $data = array("name" => $name
                        , "seat" => $seat
                        , "column" => $templateColumns
                        , "row" => $templateRows
                        , "typeId" => $busTypeId);

        $postdata = json_encode($data);

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:3600/api/v1/bus_template/',
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

    public function show_bus_template(){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:3600/api/v1/bus_template/',
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

    public function show_bus_seats(){
        $id = $this->input->post('id');
        
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:3600/api/v1/bus_seat/'.$id,
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

    public function find_one_bus_template(){
        $id = $this->input->post('id');
        
                
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:3600/api/v1/bus_template/'.$id,
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

    public function add_bus_seat(){
        
        $templateRows = intval($this->input->post('templateRows'));
        $templateColumns = intval($this->input->post('templateColumns'));
        $templateId = $this->input->post('templateId');
    
        $seatPostData = [];

        $seatNumber = 1;
        $sortNumber = 1;

        for($col=1; $col <= $templateColumns; $col++){
            for($row=1; $row <= $templateRows; $row++){
                if($col == 1){
                    if($row == 1){

                        array_push($seatPostData, array("code" => "ENTRANCE"
                            , "currentStatus" => 'Unavailable'
                            , "type" => 'Entrance'
                            , "templateId" => $templateId
                            , "sortNumber" => $sortNumber
                        ));

                        $sortNumber++;
                    }
                    else if($row == $templateRows){
                        array_push($seatPostData, array("code" => "DRIVER"
                            , "currentStatus" => 'Unavailable'
                            , "type" => 'Driver'
                            , "templateId" => $templateId
                            , "sortNumber" => $sortNumber
                        ));
                        $sortNumber++;
                    }
                    else{
                        array_push($seatPostData, array("code" => "SPACE"
                            , "currentStatus" => 'Unavailable'
                            , "type" => 'Space'
                            , "templateId" => $templateId
                            , "sortNumber" => $sortNumber
                        ));
                        $sortNumber++;
                    }
                }
                else if($row == 3){
                    if($col == $templateColumns){

                        array_push($seatPostData, array("code" => "SEAT-".sprintf("%'02d", $seatNumber)
                            , "currentStatus" => 'Available'
                            , "type" => 'Passenger'
                            , "templateId" => $templateId
                            , "sortNumber" => $sortNumber
                        ));
                        $seatNumber ++;
                        $sortNumber++;
                        
                    }
                    else{
                        array_push($seatPostData, array("code" => "SPACE"
                            , "currentStatus" => 'Unavailable'
                            , "type" => 'Space'
                            , "templateId" => $templateId
                            , "sortNumber" => $sortNumber
                            
                        ));
                        $sortNumber++;
                    }
                }
                else{
                    array_push($seatPostData, array("code" => "SEAT-".sprintf("%'02d", $seatNumber)
                            , "currentStatus" => 'Available'
                            , "type" => 'Passenger'
                            , "templateId" => $templateId
                            , "sortNumber" => $sortNumber
                            
                    ));
                    $seatNumber ++;
                    $sortNumber++;
                }
            }
        }

        $seatdata = json_encode($seatPostData);
        print_r($seatdata);
        
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:3600/api/v1/bus_template/createBusSeats',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => $seatdata,
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6Ijk2MGY4YTZmLWU0MjEtNDI5OS1iNzQxLTYwZjAwNjQxMTY1MSIsImVtYWlsIjoianJnbG9tYXIwMTZAZ21haWwuY29tIiwiaWF0IjoxNjIxMDQ2MjA0LCJleHAiOjE2MjEwNTM0MDR9.Mgy75XVlGCk84xviMqVa7bKUAe60fJOGqVqrvdtQU0Q',
            'Content-Type: application/json'
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }

    public function delete_bus_template(){
        $id = $this->input->post('id');

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:3600/api/v1/bus_template/'.$id,
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

    public function delete_seats(){

        $id = $this->input->post('id');

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:3600/api/v1/bus_seat/'.$id,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'DELETE',
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
