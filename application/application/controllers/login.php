<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		$this->load->view('users/user');
    }
	
	public function userLogin()
	{


		$loginEmail = $this->input->post('loginEmail');
		$loginPass = $this->input->post('loginPass');

		$data = array("email" => $loginEmail
                        , "password" => $loginPass);
		
		$postdata = json_encode($data);
		
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://localhost:3600/api/v1/login/',
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
		
		$resDecoded=json_decode($response, true);


		if ($resDecoded != FALSE) {
			$session_data = array(
				'email' => $resDecoded['data']['email'],
				'firstName' => $resDecoded['data']['firstName'],
				'userId' => $resDecoded['data']['id'],
				'userType' => $resDecoded['data']['userType'],
			);}
		
			foreach($session_data as $result) {
				echo $result, '<br>';
			}

		$this->set_userdata('logged_in', $session_data);

					if($session_data[0]->userType == ""){
						$data['result'] = 'Success';
						$data['userType'] = 'User';
						echo json_encode($data);
					}
					else{
						$data['result'] = 'Success';
						$data['userType'] = 'Admin';
						echo json_encode($data);
					}
	
}
}