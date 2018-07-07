<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ContactCTRL extends Admins {

   
    public function getData()
    {
        $data   = $this->public_data;
        $data['title']='Contact Person'; //wajib
        $data['currentPage']='contact'; // wajib
        $data['content']='Contact/contact.php';// view wajib

        $this->load->view('LanderApp/Template', $data); // wajib
    }

    public function getAllContact()
    {
        // $this->load->model('PegawaiModel');
        $result = $this->M__db->get_all('contact__')->result(); 
        header("Content-Type: application/json");
        echo json_encode($result);
    }

    public function addContact(){
        $data= $this->input->post();
        $this->M__db->simpan('contact__',$data);
    }

    public function updateContact(){
        $id= $this->input->post('id');
        $data= $this->input->post();
        $this->db->where('id', $id);
        $this->db->update('contact__',$data);
    }

    public function deleteContact(){
        $id = $this->input->post('id'); 
        $this->db->where('id', $id);
        $this->db->delete('contact__');
    
    }
}

/* End of file Home.php */

?>