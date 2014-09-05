<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{   
        $this->template->set_template('site');
		$this->template->write('title', 'Omnivox');
        $this->template->write_view('content', 'site/home/intro');
        $this->template->render();
        
	}
    
    public function yucatan()
    {
        $this->template->set_template('site');
		$this->template->write('title', 'Omnivox-Sucursales');
        $this->template->write_view('content', 'site/sucursales/yucatan');
        $this->template->render();
        
    }
    
    public function campeche()
    {
        $this->template->set_template('site');
		$this->template->write('title', 'Omnivox-Sucursales');
        $this->template->write_view('content', 'site/sucursales/campeche');
        $this->template->render();
        
    }
    public function quintana_roo()
    {
        $this->template->set_template('site');
		$this->template->write('title', 'Omnivox-Sucursales');
        $this->template->write_view('content', 'site/sucursales/quintana-roo');
        $this->template->render();
        
    } 
    public function meses_sin_intereses()
    {
        $this->template->set_template('site');
		$this->template->write('title', 'Omnivox-Promociones');
        $this->template->write_view('content', 'site/promos/meses-sin-intereses');
        $this->template->render();
        
    }
    
    public function historia()
    {
        $this->template->set_template('site');
		$this->template->write('title', 'Omnivox-Nosotros');
        $this->template->write_view('content', 'site/nosotros/historia');
        $this->template->render();
        
    }
    public function mision()
    {
        $this->template->set_template('site');
		$this->template->write('title', 'Omnivox-Nosotros');
        $this->template->write_view('content', 'site/nosotros/mision');
        $this->template->render();
        
    }
    public function valores()
    {
        $this->template->set_template('site');
		$this->template->write('title', 'Omnivox-Nosotros');
        $this->template->write_view('content', 'site/nosotros/valores');
        $this->template->render();
        
    }
    
    public function rh()
    {
        $this->template->set_template('site');
		$this->template->write('title', 'Omnivox-Contacto');
        $this->template->write_view('content', 'site/contacto/rh');
        $this->template->render();
        
    }
    public function ventas()
    {
        $this->template->set_template('site');
		$this->template->write('title', 'Omnivox-Contacto');
        $this->template->write_view('content', 'site/contacto/ventas');
        $this->template->render();
        
    }
    public function facturacion()
    {
        $this->template->set_template('site');
		$this->template->write('title', 'Omnivox-Contacto');
        $this->template->write_view('content', 'site/contacto/facturacion');
        $this->template->render();
        
    }
    public function garantias()
    {
        $this->template->set_template('site');
		$this->template->write('title', 'Omnivox-Contacto');
        $this->template->write_view('content', 'site/contacto/garantias');
        $this->template->render();
        
    }
    public function mayoreo()
    {
        $this->template->set_template('site');
		$this->template->write('title', 'Omnivox-Contacto');
        $this->template->write_view('content', 'site/contacto/mayoreo');
        $this->template->render();
        
    }
    public function sugerencias()
    {
        $this->template->set_template('site');
		$this->template->write('title', 'Omnivox-Contacto');
        $this->template->write_view('content', 'site/contacto/sugerencias');
        $this->template->render();
        
    }
    
        public function kits()
    {
        $this->template->set_template('site');
		$this->template->write('title', 'Omnivox-ventas');
        $this->template->write_view('content', 'site/ventas/kits');
        $this->template->render();
        
    }
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */