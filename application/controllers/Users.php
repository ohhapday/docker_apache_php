<?php
/**
 * Created by PhpStorm.
 * User: seojeongseog
 * Date: 2019-03-09
 * Time: 16:56
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {


    function __construct()
    {
        parent::__construct();
        $this->load->model('users_m');
    }

    public function _remap($method)
    {
        /* if (method_exists($this, $method)) {
            $this->{"{$method}"}();
        }*/


        // HTTP Method 로 분기
        var_dump($this->uri->segment(1));

        switch ($this->input->method(true)) {
            case 'GET' :
                $this->get_user();
                break;
            case 'POST' :
                $this->post_user();
                break;
            case 'PUT' :
                $this->put_user();
                break;
            case 'DELETE' :
                $this->delete_user();
                break;
            default:
                $this->{"{$method}"}();
        }
    }

	public function index()
	{
		$this->load->view('welcome_message');
	}

    public function get_users()
    {
        echo json_encode($this->user_m->get_users());
    }

    public function post_users()
    {
        var_dump('post');
    }

    public function put_users()
    {
        var_dump('put');
    }

    public function delete_users()
    {
        var_dump('delete11');
    }
}
