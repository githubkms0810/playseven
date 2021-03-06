<?php 
namespace contact;
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends \Base_Controller {

    public function __construct()
    {
        parent::__construct();
   
    }
    public function add()
    {
        $this->contact_m->setRulesWhenAdd();
        if($this->form_validation->run() === false){
            $data["content_view"] = "base/addUpdate";
            $this->template->render($data);
        }
        else{
            $this->db->trans_start();
            $insert_id=$this->contact_m->addByPostData();
            $this->db->trans_complete();
            
            if($this->db->trans_status() === false){
                alert("추가 실패.ERRORCODE :".transectionError);
                my_redirect($this->referer);
            }
            
            
            else{
                
                $this->load->library("email");
                
                $this->email->from = "admin";
                
                $this->email->send_email("sbin910@gmail.com","플레이세븐", "제휴신청페이지확인바람");
                
                
                alert("Your application is complete. I will contact you. \\rGo to the main page.");
                my_redirect("/");
            }
        }
    }



}

/* End of file Admin.php */

?>