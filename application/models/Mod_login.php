<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mod_login extends CI_Model
{
    function Aplikasi()
    {
        return $this->db->get('aplikasi');
    }

    function Auth($username, $password)
    {

        //menggunakan active record . untuk menghindari sql injection
        $this->db->where("username", $username);
        $this->db->where("password", $password);
        $this->db->where("is_active", 'Y');
        return $this->db->get("tbl_user");
    }

    function check_db($username)
    {
        return $this->db->get_where('tbl_user', array('username' => $username));
    }
    function check_db_siswa($no_tlp)
    {
        return $this->db->get_where('tbl_user', array('no_tlp' => $no_tlp));
    }
}