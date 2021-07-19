<?php
// error_reporting(0);
class Model_Login extends CI_model
{
    public function getuserbyusername($username){
        $this->db->join("skb_akun","skb_akun.akun_id=user.akun_id",'left');
        return $this->db->get_where("user",array("username"=>$username))->row_array();
    }

    public function getakunbyid($akun_id){
        return $this->db->get_where("skb_akun",array("akun_id"=>$akun_id))->row_array();
    }
    
    public function ubah_password($password_new){
        $this->db->set("password",$password_new);
        $this->db->where("akun_id",$_SESSION["user_id"]);
        $this->db->update("user");
    }

    public function update_aktif($user_id){
        $this->db->set("status_aktif","Aktif");
        $this->db->where("user_id",$user_id);
        $this->db->update("user");
    }
    public function update_tidak_aktif($user_id){
        $this->db->set("status_aktif","Tidak Aktif");
        $this->db->where("user_id",$user_id);
        $this->db->update("user");
    }
}