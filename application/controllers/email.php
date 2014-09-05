<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Email extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function rh()
	{
        $this->load->library('email');

        $this->email->from($this->input->post('email'));
        $this->email->to('recursoshumanos@omnivox.com.mx'); 

        $this->email->subject($this->input->post('nombre'));
        $this->email->message($this->input->post('mensaje'));	

        $this->email->send();
        
        redirect('/site/rh/');

	}
    
    public function ventas()
	{
        $this->load->library('email');
        
        $this->email->from($this->input->post('email'));
        $this->email->to('gerentedeventas@omnivox.com.mx'); 

        $this->email->subject($this->input->post('nombre'));
        $this->email->message($this->input->post('mensaje'));	

        $this->email->send();
        
        redirect('/site/ventas/');

	}
    
    public function facturacion()
	{
        $this->load->library('email');

        $this->email->from($this->input->post('email'));
        $this->email->to('sistemas@omnivox.com.mx'); 

        $this->email->subject($this->input->post('nombre'));
        $this->email->message($this->input->post('mensaje'));	

        $this->email->send();
        
        redirect('/site/facturacion/');

	}
    
    public function garantias()
	{
        $this->load->library('email');
        
        

        $this->email->from($this->input->post('email'));
        $this->email->to('auditor@omnivox.com.mx'); 

        $this->email->subject($this->input->post('nombre'));
        $this->email->message($this->input->post('mensaje'));	

        $this->email->send();
        
        redirect('/site/garantias/');

	}
    
    public function mayoreo()
	{
        $this->load->library('email');
        
        

        $this->email->from($this->input->post('email'));
        $this->email->to('mayoreo@omnivox.com.mx'); 

        $this->email->subject($this->input->post('nombre'));
        $this->email->message($this->input->post('mensaje'));	

        $this->email->send();
        
        redirect('/site/mayoreo/');

	}
    
    public function sugerencias()
	{
        $this->load->library('email');
        
        

        $this->email->from($this->input->post('email'));
        $this->email->to('gerenteoperativo@omnivox.com.mx'); 

        $this->email->subject($this->input->post('nombre'));
        $this->email->message($this->input->post('mensaje'));	

        $this->email->send();
        
        redirect('/site/sugerencias/');

	}
}

