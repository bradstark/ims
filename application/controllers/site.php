<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

    public function __construct() {
        parent::__construct();

        if (!$this->is_logged_in()) {
            redirect('login');
        }
    }
    
    public function page_loader(){
        if ($this->session->userdata('role') == 'staff' && $this->session->userdata('location') == 'UK') {
            $this->load->view('staffhomepage_uk');
        }
        else if ($this->session->userdata('role') == 'staff' && $this->session->userdata('location') == 'US'){
            $this->load->view('staffhomepage');
        }

        else if ($this->session->userdata('role') == 'admin' && $this->session->userdata('location') == 'UK') {
            $this->load->view('mainhomepage_uk');
        }
        else {
            $this->load->view('staffhomepage');
        }
        
    }
    
    public function index() {
        if(isset($_POST['home'])){
 $wid = $this->input->post('wokid');
 $sid=$this->input->post('sid');
 $coid=$this->input->post('coid');
 $eqid=$this->input->post('eqid');
    $data=array('workorderid'=>$wid,
        'slotnumber'=>$sid,
        'containersize'=>$coid,
        'equipmentid'=>$eqid,
        );
      if ($this->session->userdata('role') == 'staff' && $this->session->userdata('location') == 'UK') {
          $this->load->view('staffhomepage_uk');
        }
        else if ($this->session->userdata('role') == 'staff' && $this->session->userdata('location') == 'US'){
            $this->load->view('staffhomepage');
        }

        else if ($this->session->userdata('role') == 'admin' && $this->session->userdata('location') == 'UK') {
            $this->load->view('mainhomepage_uk');
        }
        else{
            $this->load->view('mainhomepage',$data);
        }
     
        }
     else if(isset($_POST['close'])){
 $wid1 = $this->input->post('cwokid');
 $datec=$this->input->post('checkout');
 $slotnum=$this->input->post('csid');
    $this->work_model->updatestatuswkflow2($wid1,$datec);
    
    $eqid='0';$status='0';$wkid ='0';$size='0';$man='0';
    $this->work_model->assignslotandwk($slotnum,$eqid,$wkid,$status,$size,$man);
      $this->page_loader();
  
     }
      else if(isset($_POST['OnRepair'])){
 
 $wid = $this->input->post('wkid');
 $eid=$this->input->post('eid');
 $snum=$this->input->post('slid');
 $size=$this->input->post('conid');
 $man=$this->input->post('man');
 $data=array('workorderid'=>$wid,
        'equipmentid'=>$eid,
     'containersize'=>$size,
     'manufacturer'=>$man,
        );
 $this->work_model->updatestatuswkflow($wid);
     $this->work_model->assignonrepair($data);
    $eqid='0';$status='0';$wkid ='0';$sz='0';$maen='0';
    $this->work_model->assignslotandwk($snum,$eqid,$wkid,$status,$sz,$maen);
    
       $this->page_loader();
          
  
     }
     else{
        $this->page_loader();
    }}

    private function is_logged_in() {
        return $this->session->userdata('is_logged_in');
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('site');
    }

}
/* End of file main.php */