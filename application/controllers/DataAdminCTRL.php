<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataAdminCTRL extends Admins {

    public function getData() {
        $data   = $this->public_data;
        $data['title']='Data Admin';
        $data['currentPage']='dataadmin';
        $data['allData']=$this->M__db->get_all_order('users__','user_id','Desc');
        $data['content']='Admin/AllData.php';
        $this->load->view('LanderApp/Template', $data);
    }

    
    public function updateStatus(){
        $this->db->trans_begin();
        $where = array(
            'user_id' => $this->uri->segment(3)
            );
        $data = array(
            'is_active' => $this->uri->segment(4),
            );
        
        $this->M__db->update('users__',$where,$data);
        if($this->uri->segment(4)==1){ $ms='aktifkan';}else{ $ms='nonaktifkan';}
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            $this->session->set_flashdata('error','Status Keaktifan gagal di'.$ms.'!'); 
        }else{
            $this->db->trans_commit();
            $this->session->set_flashdata('success','Status Keaktifan berhasil di'.$ms.'!');    
        }
        redirect('Admin/admin');

    }

    public function loadData(){
        $action =$this->input->post('action');
        $where = array(
            'user_id' => $this->input->post('id')
            );
        $data['row'] = $this->M__db->cek('users__','*',$where)->row_array();
        if($action=='detail'){
            $this->load->view('LanderApp/Admin/Detail', $data);
        }
    }
}
