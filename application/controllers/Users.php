<?php
/*
    Users
    Controller for Management Users
    @author Supak Pukdam
    @Create Date 2564-06-13
*/
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
    /*setup for Users
	* @name __construct
	* @input   -
	* @output  Model , Helper , config and etc.
	* @author Supak Pukdam
	* @Create Date 2564-06-13
	*/
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Global_model');
        $this->load->helper('ajax_helper');
        $this->load->library('bcrypt');
        setup_ajax();
    }

    /*get users data
	* @name get_user
	* @input   -
	* @output  json users data  
	* @author Supak Pukdam
	* @Create Date 2564-06-13
	*/
    public function get_user()
    {
        echo json_encode([
            "data" => [
                "result" => $this->Global_model->select('users')->result()
            ]
        ]);
    }

    /*add users data
	* @name add_user
	* @input   insert $data
	* @output  users insert query  
	* @author Supak Pukdam
	* @Create Date 2564-06-13
	*/
    public function add_user()
    {
        $data = $this->input->post();
        $data['user_password'] = $this->bcrypt->hash_password($data['user_password']);
        echo json_encode([
            "data" => [
                "result" => $this->Global_model->insert('users', $data),
            ]
        ]);
    }

    /*add auth data
	* @name auth_user
	* @input   auth $data
	* @output  auth user query  
	* @author Supak Pukdam
	* @Create Date 2564-06-13
	*/
    public function auth_user()
    {
 
    }
}
/* End of file Users.php */
