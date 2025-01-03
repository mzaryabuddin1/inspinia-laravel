<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Welcome extends CI_Controller {

	private $data;

	public function __construct(){
		parent::__construct();
		
		$this->data['email'] = "info@liveasoft.com";
		$this->data['phone'] = "+(92) 319 332 9628";
		$this->data['phone_format'] = "+923193329628";
		$this->data['address'] = "Suit # 06, 2nd Floor, Arkay Square, Shahra-e-liaquat, Karachi, Pakistan.";
	}

	public function index()
	{
		$this->data['title'] = 'Home';
		$this->data['pagetab'] = 'home';
		$this->load->view('welcome_message', $this->data);
	}

	public function contact_us()
	{
		$this->data['title'] = 'Contact Us';
		$this->data['pagetab'] = 'contact';
		$this->load->view('contact_us', $this->data);
	}


	public function contact_us_submit() {
        if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        }

        $this->form_validation->set_rules('Name', 'Your Name', 'required|min_length[1]|max_length[100]');
        $this->form_validation->set_rules('Email', 'Email Address', 'required|valid_email');
        $this->form_validation->set_rules('Subject', 'Subject', 'required|min_length[1]|max_length[100]');
        $this->form_validation->set_rules('Message', 'Message', 'required|min_length[1]|max_length[5000]');
        $this->form_validation->set_rules('option', 'Option', 'in_list[SayHello,NewProject,Feedback,Other]');

        if ($this->form_validation->run() == FALSE) {
            $errors = array('error' => validation_errors());
            echo json_encode($errors);
            exit;
        }

		$information = $this->security->xss_clean($this->input->post());

        $name = $information['Name'];
        $email = $information['Email'];
        $subject = $information['Subject'];
        $message = $information['Message'];
        $option = isset($information['option']) ? $information['option'] : '';
        $recaptcha_token = $information['recaptcha_token'];

        // Verify reCAPTCHA token with Google API
        $secret_key = '6LfZSKAqAAAAAKo9dyeSNEdIHK9i-BotFZkKBZ8J'; // Replace with your actual secret key
        $response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response=' . $recaptcha_token);
        $response_keys = json_decode($response, true);

        if (intval($response_keys["success"]) !== 1) {
            $errors = array('error' => 'CAPTCHA verification failed. Please try again.');
            echo json_encode($errors);
            exit;
        }

        // Load PHPMailer
        require_once FCPATH . 'vendor/autoload.php';

        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host = 'mail.liveasoft.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'info@liveasoft.com'; // Your email
            $mail->Password = 'Ry7b9g{V56(l'; // Your password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Use SSL encryption
            $mail->Port = 465;

            // Recipients
            $mail->setFrom('info@liveasoft.com', 'Liveasoft Contact Form'); // Your from email
            $mail->addAddress('mzaryabuddin@gmail.com'); // Recipient email
            $mail->addCC('safee.hussainy@yahoo.com'); // Recipient email
            $mail->addCC('malik.zaryab@liveasoft.com'); // Recipient email
            $mail->addCC('safeeullah.hussainy@liveasoft.com'); // Recipient email
            $mail->addCC('jawaid@liveasoft.com'); // Recipient email
            $mail->addCC('mohammadismail0622494@gmail.com'); // Recipient email

            // $mail->addReplyTo($email, $name);

            // Content
            $mail->isHTML(true);
            $mail->Subject = $option ? $subject . " - " . $option : $subject ;
            $mail->Body = nl2br($message . " <br><br>Email from: <b>" . $email  .'</b>');

            $mail->send();

            $msg = array('success' => TRUE, 'msg' => 'We will get back to you shortly.');
            echo json_encode($msg);
        } catch (Exception $e) {
            $msg = array('error' => FALSE, 'msg' => 'Mail could not be sent. Error: ' . $mail->ErrorInfo);
            echo json_encode($msg);
        }
    }

	
	public function find_us()
	{
		$this->data['title'] = 'Find Us';	
		$this->data['pagetab'] = 'contact';
		$this->load->view('find_us', $this->data);
	}

	public function about_us()
	{
		$this->data['title'] = 'About Us';	
		$this->data['pagetab'] = 'about';
		$this->load->view('about_us', $this->data);
	}

	public function about_team()
	{
		$this->data['title'] = 'About Team';	
		$this->data['pagetab'] = 'about';
		$this->load->view('about_team', $this->data);
	}
}
