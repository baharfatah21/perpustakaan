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
        return $this->db->get('user')->result_array();
    }

    function auth($email, $pwd)
    {
        return $this->db->get('user')->result_array();
        $this->db->where('email', $email);
        $this->db->where('password', $pwd);
        if ($this->db->get('user')->num_rows() == 1) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function get_detail($email)
    {
        $this->db->where('email', $email);
        return $this->db->get('user')->row_array();
    }

    function get_detail_by_cookie($cookie)
    {
        $this->db->where('cookie', $cookie);
        return $this->db->get('user')->row_array();
    }

    function update_cookie($cookie, $id)
    {
        $data = [
            'cookie' => $cookie
        ];
        $this->db->where('id_username', $id);
        return $this->db->update('user', $data);
    }
}
