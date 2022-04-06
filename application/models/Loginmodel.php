<?php
class Usermodel extends CI_Model
{

    function __construct()
    {
        $this->load->database();
    }

    function get_user()
    {
        $query = $this->db->query("SELECT * FROM perpus");
        return $query->result_array();
    }

    function get_user2()
    {
        return $this->db->get('login')->result_array();
    }
}
