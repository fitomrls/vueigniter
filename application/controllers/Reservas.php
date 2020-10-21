<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservas extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('form_validation'));
    }

	public function index()
	{
		$this->load->view('front/header');
		$this->load->view('reservas');
		$this->load->view('front/footer');
	}

    public function send(){
        $this->form_validation->set_rules('nombres', 'Nombre', 'trim|required');
        $this->form_validation->set_rules('apellidos', 'Apellidos', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('celular', 'Telefono', 'trim|required');
        $this->form_validation->set_rules('mensaje', 'Mensaje', 'trim|required');
        $this->form_validation->set_rules('g-recaptcha-response', 'recaptcha validation', 'required|callback_validate_captcha');
        $this->form_validation->set_message('validate_captcha', 'Verifica tu llave recaptcha');

        if ($this->form_validation->run() == FALSE) {   //validation fails
            $res = array(
                'status' => '422',
                'success' => false,
                'message' => validation_errors()
            );
            
            header('Content-Type: application/json');
            echo json_encode( $res);
        }
        else {
            $contenido =   '<p>"Nueva Reserva del sitio CÚRCUMA"
                            Enviado por: '.$this->input->post('nombres').' '.$this->input->post('apellidos'). ' ['.$this->input->post('email').']
                            <br>
                            Teléfono: '.$this->input->post('celular').'
                            <br>   
                            <blockquote>'.$this->input->post('mensaje').' </blockquote>
                            <small>'.date("Y-m-d H:i:s").'</small> 
                            <br>
                            <br>
                            El equipo The Romero Corp - Bolivia'.date('Y') .'</p> ';

            $asunto = '[Cúrcuma] Nueva Reserva de: '.$this->input->post('nombres').' '.$this->input->post('apellidos');
            $var = $this->send_email('curcuma@theromerocorp.com',$this->input->post('nombres'), $contenido, $asunto);

            $res = array(
                'status' => '200',
                'success' => true,
                'message' => 'Mensaje enviado con exito!'
            );
            header('Content-Type: application/json');
            echo json_encode( $res);
        }
    }

    function validate_captcha() {
        $captcha = $this->input->post('g-recaptcha-response');
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Le2MfMUAAAAANsb4FXKCcvF1b7k383YugFNil6c&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']);
        if ($response . 'success' == false) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function send_email($para,$nombre,$contenido,$asunto){
        $config = Array(
            'mailtype'  => 'html',
            'charset'   => 'UTF-8'
        );

        $this->load->library('email', $config);

        $this->email->from('no-reply@theromerocorp.com', $nombre);
        $this->email->to($para);
        $this->email->subject($asunto);
        $this->email->message($contenido);
        $this->email->set_newline("\r\n");

        return $this->email->send();

    }

}
