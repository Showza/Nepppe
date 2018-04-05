<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller {

	public function enviar_email(){

        $config['smtp_host'] = "email-ssl.com.br";
        $config['smtp_user'] = "no-reply.rdg@gorceix.org.br";
        $config['smtp_pass'] = "G0rc31x2017";
        $config['smtp_port'] = "587";
        $config['protocol'] = "smtp";

        $config['mailtype'] = 'text';
        $config['newline'] = '\r\n';
        $config['wordwrap'] = TRUE;
        $config['crlf']     = '\r\n';
        $config['charset']  = 'UTF-8';

        $this->load->library('email', $config);
//        $this->email->initialize($config);

        $this->email->from('david@gorceix.org.br', 'Remetente'); // Remetente
        $this->email->to('thiagodutragui@gmail.com'); // Destinatário

        $this->email->subject('Testando o envio de email');
        $this->email->message('Deu certo');
        error_reporting(E_ALL);

        if($this->email->send()){
            echo 'email enviado com sucesso';
        } else {
            print $this->email->print_debugger();
            echo 'Ouve um erro ao enviar o email';
        }
    }
}
