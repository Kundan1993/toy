<?php
class Login_model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }
  
  function CheckLogin($data1)
  { 
    // echo "<pre>"; print_r($data1); 
    // echo "dd=>".md5($data1['pwd']); die;
    $this->db->select("*");
    $this->db->where('username', $data1['email']);
    // $this->db->or_where('email', $data1['email']);
    $this->db->where('password', md5($data1['pwd']));
    $this->db->where('status', '1');
    $query = $this->db->get('admin');
    // echo "<pre>";  print_r($query); die;
    $respo = $query->result();
    // echo "kundan".count($respo);
    // echo "<pre>"; print_r($respo); die;
    //  print_r($this->db->last_query()); die; 
    if(count($respo) > 0){
      $this->session->set_userdata('loginUser', $data1['email']); 
    }
    return $respo;
  }

}
