<?php
class Cread extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('mpost');
    }

    function index(){
        $data['posting']='';
        $data['posting_row']=$this->mpost->read_data_posting_readmore();


        $data['title']= "Selamat Datang Di SMA NEGERI ABUNG TINGGI";
        $this->load->view('frontend/element/vheader',$data);
        $this->load->view('frontend/readmore/vread',$data);
        $this->load->view('frontend/element/vfooter');

    }
}
?>