<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Global_model extends CI_Model
{

    public function select($table_name)
    {
        return $this->db->get($table_name);
    }

    public function insert($table_name, $data)
    {
        return $this->db->insert($table_name, $data);
    }
}

/* End of file Global_model.php */
