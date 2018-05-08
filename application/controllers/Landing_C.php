<?php
class Landing_C extends CI_Controller{
    public function __construct(){
        parent::__construct();
            $this->load->model('Barang_M');
            $this->load->helper('url');
            $this->load->library('javascript');
            $this->load->library('javascript/jquery');
    }    
    public function index(){
        $data = array(
            'barang' => $this->Barang_M->get_data()
        );

        $this->load->view('landingpage',$data);
    }
}

/*
    class Landing_C extends CI_Controller{
    
        public function __construct(){
            parent::__construct();
                $this->load->model('Barang_M');
                $this->load->helper('url);
                $this->load->library('javascript');
                $this->load->library('javascript/jquery');
        }
        
        public function index(){
            $data = array(
                'barang => $this->Barang_M->get_data();
            )
            $this->load-view('landingpage',$data);
        }
        
        public function __construct(){
            parent::__construct();
                $this->load->model('Barang_M');
                $this->load->helper('url');
                $this->load->library('javascript');
                $this->load->library('javascript/jquery');
        }
        
        public function index(){
            $data = array(
                'barang' => $this->Barang_M->get_data()
            );
            
            $this->load->view('landingpage',$data);
        
        }
    }
*/

?>