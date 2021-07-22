<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gcash extends CI_Controller {

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

    //  API KEY

	public function index(){
        $this->load->view('users/gcash');
	}

    public function create_source(){

        $amount = $this->input->post('amount');
        $line1 = $this->input->post('line1');
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');

        
        $curl = curl_init();

        curl_setopt_array($curl, [
        CURLOPT_URL => "https://api.paymongo.com/v1/sources",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "
            {
                \"data\":{
                    \"attributes\":{
                        \"amount\":".$amount."
                            ,\"redirect\":{
                                \"success\":\"http://localhost/brs-web/users/payment/gcash\"
                                ,\"failed\":\"http://localhost/brs-web/users/payment/gcash\"
                            }
                            ,\"billing\":{
                                \"address\":{
                                    \"line1\":\"".$line1."\"
                                    ,\"state\":\"Bicol\"
                                    ,\"postal_code\":\"1110\"
                                    ,\"city\":\"Quezon City\"
                                }
                                ,\"name\":\"".$name."\"
                                ,\"email\":\"".$email."\"
                                ,\"phone\":\"".$phone."\"
                            }
                            ,\"currency\":\"PHP\"
                            ,\"type\":\"gcash\"
                    }
                }
            }",
        CURLOPT_HTTPHEADER => [
            "Accept: application/json",
            "Authorization: Basic cGtfdGVzdF9TSlpiWVdTRVFZVzJFaEhmbm5EQzl1Vnc6NzEwYWRmNGU4MjM0ZjVkNzc4NWY5NTlmOWRjZTY0NWVkNTVhY2VjMWFlMjU1ZjkxMDYxYzQzMWRhMDA2Y2YwMWZiZmU1NWM4NWEwMDk5NzJlZWM0YWYwNmM2YmFiZGZhMDUyNjUwOGM0OWE4ZmFmZDQ3YjM3YjI5ZGJhNmUwMjY=",
            "Content-Type: application/json"
        ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
        echo "cURL Error #:" . $err;
        } else {
        echo $response;
        }
    }

    public function retrieve_source($id){

        
        $curl = curl_init();

        curl_setopt_array($curl, [
        CURLOPT_URL => "https://api.paymongo.com/v1/sources/".$id,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [
            "Accept: application/json",
            "Authorization: Basic cGtfdGVzdF9TSlpiWVdTRVFZVzJFaEhmbm5EQzl1Vnc6NzEwYWRmNGU4MjM0ZjVkNzc4NWY5NTlmOWRjZTY0NWVkNTVhY2VjMWFlMjU1ZjkxMDYxYzQzMWRhMDA2Y2YwMWZiZmU1NWM4NWEwMDk5NzJlZWM0YWYwNmM2YmFiZGZhMDUyNjUwOGM0OWE4ZmFmZDQ3YjM3YjI5ZGJhNmUwMjY="
        ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
        echo "cURL Error #:" . $err;
        } else {
        echo $response;
        }

    }

    public function pay_source($id){

        $curl = curl_init();

        curl_setopt_array($curl, [
        CURLOPT_URL => "https://api.paymongo.com/v1/payments",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "{\"data\":{\"attributes\":{\"amount\":10000,\"source\":{\"id\":\"".$id."\",\"type\":\"source\"},\"currency\":\"PHP\"}}}",
        CURLOPT_HTTPHEADER => [
            "Accept: application/json",
            "Authorization: Basic c2tfdGVzdF9hVGhXTkY1b0x4QUZEQkJxMm1aZlk0WkE6NzEwYWRmNGU4MjM0ZjVkNzc4NWY5NTlmOWRjZTY0NWVkNTVhY2VjMWFlMjU1ZjkxMDYxYzQzMWRhMDA2Y2YwMWZiZmU1NWM4NWEwMDk5NzJlZWM0YWYwNmM2YmFiZGZhMDUyNjUwOGM0OWE4ZmFmZDQ3YjM3YjI5ZGJhNmUwMjY=",
            "Content-Type: application/json"
        ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
        echo "cURL Error #:" . $err;
        } else {
        echo $response;
        }


    }

    public function create_webhook(){
        $curl = curl_init();

        curl_setopt_array($curl, [
        CURLOPT_URL => "https://api.paymongo.com/v1/webhooks",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "{\"data\":{\"attributes\":{\"events\":[\"source.chargeable\"],\"url\":\"https://localhost/brs-web/users/payment/gcash/webhook/\"}}}",
        CURLOPT_HTTPHEADER => [
            "Accept: application/json",
            "Authorization: Basic c2tfdGVzdF9hVGhXTkY1b0x4QUZEQkJxMm1aZlk0WkE6NzEwYWRmNGU4MjM0ZjVkNzc4NWY5NTlmOWRjZTY0NWVkNTVhY2VjMWFlMjU1ZjkxMDYxYzQzMWRhMDA2Y2YwMWZiZmU1NWM4NWEwMDk5NzJlZWM0YWYwNmM2YmFiZGZhMDUyNjUwOGM0OWE4ZmFmZDQ3YjM3YjI5ZGJhNmUwMjY=",
            "Content-Type: application/json"
        ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
        echo "cURL Error #:" . $err;
        } else {
        echo $response;
        }
    }

    public function webhook(){
       
    }

}
