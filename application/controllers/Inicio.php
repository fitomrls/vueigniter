<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function index()
	{
        $this->load->model('visitas_model');
        $ip = $this->input->ip_address();
        if(!$this->visitas_model->existe_ip($ip)){
            $info = array(
                'ip' => $ip
            );
            $this->visitas_model->add_visitas($info);
        }

		$this->load->view('front/header');
		$this->load->view('index');
		$this->load->view('front/footer');
	}

    public function send(){
        $this->form_validation->set_rules('email', 'Email', 'trim|required');

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
            $contenido =   '<p>"Nueva Subscripcion al sitio CÚRCUMA"
							Email:
							<br>
                            <strong>'.$this->input->post('email').' </strong>
                            <small>'.date("Y-m-d H:i:s").'</small> 
                            <br>
                            <br>
                            El equipo The Romero Corp - Bolivia'.date('Y') .'</p> ';

            $asunto = '[Cúrcuma] Nueva Subscripcion: '.$this->input->post('email');
            $var = $this->send_email('curcuma@theromerocorp.com',$this->input->post('email'), $contenido, $asunto);

            $res = array(
                'status' => '200',
                'success' => true,
                'message' => 'Mensaje enviado con exito!'
            );
            header('Content-Type: application/json');
            echo json_encode( $res);
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
