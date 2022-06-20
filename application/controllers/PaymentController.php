<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PaymentController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function prepare_data()
    {
        // print_r($_POST);
        // die;
        $amount = round($_POST['amount'], 2);
        if (strpos($amount, '.')) {
            $amount = str_replace('.', '', $amount);
        } else {
            $amount = $amount . '00';
        }

        $data['amount'] = (int)$amount;
        $data['currency'] = 'INR';
        $data['accept_partial'] = false;
        $data['expire_by'] = 1691097057;
        $data['reference_id'] = "TS1988" . time();
        $data['reminder_enable'] = true;
        $data['description'] = $_POST['description'];
        $data['callback_url'] = base_url();
        $data['callback_method'] = 'get';

        $data['customer']['name'] =  $_POST['name'];
        $data['customer']['contact'] =  $_POST['contact'];
        $data['customer']['email'] =  $_POST['email'];

        $data['notify']['sms'] = true;
        $data['notify']['email'] = true;

        $data['notes']['policy_name'] = '';
        return json_encode($data);
    }

    function index()
    {

        $data = $this->prepare_data();
        // print_r($data);
        // die;
        $url = "https://api.razorpay.com/v1/payment_links/";

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        // Testing mode Secret code
        // $secret = base64_encode('rzp_test_818AB41GgGVZi6:PcYh4FaHwi0AnwC16b35vOSQ');
        // Live mode Secret code
        $secret = base64_encode('rzp_live_Lg1URyDRMrFlNz:SAn0Rl9cqQB2tBItbpA9b9kQ');

        $headers = array(
            "Content-type: application/json",
            "Authorization: Basic " . $secret,
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

        //for debug only!
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $resp = curl_exec($curl);
        curl_close($curl);
        // var_dump($resp);
        echo json_encode(array('success' => true, 'data' => json_decode($resp)));
    }
}
