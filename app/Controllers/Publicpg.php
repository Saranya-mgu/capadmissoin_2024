<?php

namespace App\Controllers;
use App\Models\Publicmodel;
use App\Models\Collegemodel;

class Publicpg extends BaseController
{
    public function index()
    {
        $data['span1'] = "";
		
		$data['span3'] = "";
		
       $data['span2']=  view('login');
       
        return view('template3', $data);
    }
    public function login()
    {



        $data['siteKey'] = '6Lcj_QkpAAAAABHxpncKLYVNVULpDeIDoBGn0DX6';

        if ($this->request->getPost()) {
            $secretKey = '6Lcj_QkpAAAAAIuL20DK36kBG3GEWnKkrgPYHL6u';

            $credential = array(
                'secret' => $secretKey,
                'response' => $this->request->getPost('g-recaptcha-response')
            );

            $verify = curl_init();
            curl_setopt($verify, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
            curl_setopt($verify, CURLOPT_POST, true);
            curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($credential));
            curl_setopt($verify, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($verify);

            $status = json_decode($response, true);
           // print_r($status);exit;

            if ($status['success']) {
              //  echo "inif";exit;
                $validation = \Config\Services::validation();

                // Set validation rules
                $rules = [
                    'user_id' => 'required',
                    'pass' => 'required'
                ];

                if (!$this->validate($rules)) {
                   // echo "in";exit;
                    return redirect()->to(base_url());
                    
                } else {
                    $username = $this->request->getPost('user_id');
                    $password = $this->request->getPost('pass');

                    // Access the request service
                    $request_ip = service('request');

                    // Get the client's IP address
                    $clientIP = $request_ip->getIPAddress();
                    $login = new Publicmodel();

                    $user = $login->where('User_Id', $username)
                    ->where('Password', $password)
                    ->where('Status', 'Y')
                    ->first();
                   // print_r($user);exit;
                    if ($user) {
                        
                        $college = new Collegemodel();
                        $collegeDetails = $college->find($user['college_id']);
                        //print_r($collegeDetails);exit;
                        $session =session();
                        $session->set('college_id', $user['college_id']);
                        $session->set('college_name', $collegeDetails['college_name']);
                        $session->set('user_type', $user['User_Type']);
                        $session->set('ug', $collegeDetails['ug']);
                        $session->set('pg', $collegeDetails['pg']);
                        $session->set('ip', $collegeDetails['ip']);
                        $session->set('bed', $collegeDetails['bed']);
                        $session->set('med', $collegeDetails['med']);

                        return redirect()->to('Collegeprince');
                    } else {
                        // Invalid credentials, redirect back to login with error message
                        $session =session();
                        $session->setFlashdata('error', 'Invalid username or password.');
                        return redirect()->to('/')->withInput()->with('error', 'Invalid Username or Password');
                    }

                }
            } else {
               // echo "inelse";exit;
                // reCAPTCHA verification failed
                $errors = $status['error-codes'][0];
               // print_r($errors);exit;
               // echo "reCAPTCHA verification failed: " .  $errors;exit;
                return redirect()->to('/')->withInput()->with('error', $errors);
            }
        }

        return view('login', $data);
    }
}
