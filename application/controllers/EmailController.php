<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EmailController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('email', array('mailtype' => 'html'));
        $this->load->library('form_validation');
    }

    function contactus()
    {
        // echo '<pre>';
        // print_r($_POST);
        // die;
        $config = array(
            array(
                'field'   => 'name',
                'label'   => 'Name',
                'rules'   => 'required'
            ),
            array(
                'field'   => 'email',
                'label'   => 'Email',
                'rules'   => 'required'
            ),
            array(
                'field'   => 'subject',
                'label'   => 'Subject',
                'rules'   => 'required'
            ),
            array(
                'field'   => 'message',
                'label'   => 'Message',
                'rules'   => 'required'
            )
        );

        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'success' => false,
                'error' => array(
                    'name_error' => form_error('name'),
                    'email_error' => form_error('email'),
                    'subject_error' => form_error('subject'),
                    'message_error' => form_error('message'),
                )
            );
        } else {
            if ($this->send_mail()) {
                $data = array(
                    'success' => true,
                    'icon' => 'success',
                    'title' => 'Successfully Submitted!',
                    'msg' => 'We\'ll contact you soon!'
                );
            } else {
                $data = array(
                    'success' => false,
                    'icon' => 'error',
                    'title' => 'Error',
                    'msg' => 'Something went wrong!'
                );
            }
        }
        echo json_encode($data);
    }

    public function send_mail()
    {
        $html = '<table border="1" style="background-color:#FFFFCC;border-collapse:collapse;border:1px solid #FFCC00;color:#000000;width:100%" cellpadding="3" cellspacing="3">
            <tr>
                <td>Name</td>
                <td>Email</td>
                <td>Subject</td>
                <td>Message</td>
            </tr>
            <tr>
                <td>' . $_POST['name'] . '</td>
                <td>' . $_POST['email'] . '</td>
                <td>' . $_POST['subject'] . '</td>
                <td>' . $_POST['message'] . '</td>
            </tr>
        </table>';

        $from_email = "sales@ship2bharat.com";
        $to_email = "sales@ship2bharat.com";

        $this->email->from($from_email, 'Ship2Bharat.com');
        $this->email->to($to_email);
        $this->email->subject($this->input->post('subject'));
        $this->email->message($html);
        //Send mail
        if (!$this->email->send())
            return false;
        else
            return true;
    }
}
