<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	private $data;

	public function index()
	{
		$this->data['title'] = 'Home';
		$this->load->view('welcome_message', $this->data);
	}

	public function contact_us()
	{
		$this->data['title'] = 'Contact Us';	
		$this->load->view('contact_us', $this->data);
	}

	public function contact_us_submit()
	{
		if (!$this->input->is_ajax_request()) {
			exit('No direct script access allowed');
		}
		
		$this->form_validation->set_rules('Name', 'Your Name', 'required');
		$this->form_validation->set_rules('Email', 'Email Address', 'required|valid_email');
		$this->form_validation->set_rules('Subject', 'Subject', 'required');
		$this->form_validation->set_rules('Message', 'Message', 'required');

		// If form validation fails
		if ($this->form_validation->run() == FALSE) {
            $errors = array('error' => validation_errors());
            print_r(json_encode($errors));
            exit;
        }
			
			$name = $this->input->post('Name');
			$email = $this->input->post('Email');
			$subject = $this->input->post('Subject');
			$message = $this->input->post('Message');
			$recaptcha_token = $this->input->post('recaptcha_token');

			// Verify reCAPTCHA token with Google API
			$secret_key = '6LfZSKAqAAAAAKo9dyeSNEdIHK9i-BotFZkKBZ8J'; // Replace with your actual secret key
			$response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response=' . $recaptcha_token);
			$response_keys = json_decode($response, true);

			if (intval($response_keys["success"]) !== 1) {
				$errors = array('error' => 'CAPTCHA verification failed. Please try again.');
				print_r(json_encode($errors));
				exit;
			}

			// Set up email configuration
			$config = array(
				'protocol'  => 'smtp',
				'smtp_host' => 'mail.liveasoft.com', // Your SMTP server
				'smtp_port' => 465, // SMTP port (you may use 465 or 25 depending on your email provider)
				'smtp_user' => 'info@liveasoft.com', // Your email address
				'smtp_pass' => 'Ry7b9g{V56(l', // Your email password
				'mailtype'  => 'html', // Email format (html/plain)
				'charset'   => 'utf-8',
				'wordwrap'  => TRUE
			);

			// Initialize email configuration
			$this->email->initialize($config);

			// Set email parameters
			$this->email->from($email, $name); // From email and name
			$this->email->to('mzaryabuddin@gmail.com'); // Receiver's email address
			$this->email->subject($subject); // Subject
			$this->email->message($message); // Email message

			// Send the email
			if ($this->email->send()) {
				$msg = array('success' => TRUE, 'msg' => 'We will get back to you shortly.');
				print_r(json_encode($msg));
				exit;
			} else {
				// Failure message
				$msg = array('success' => FALSE, 'msg' => 'We will get back to you soon.');
				print_r(json_encode($msg));
				exit;
			}
	}
}
