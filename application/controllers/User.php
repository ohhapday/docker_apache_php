<?php
/**
 * Created by PhpStorm.
 * User: seojeongseog
 * Date: 2019-03-09
 * Time: 16:56
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {


    function __construct()
    {
        parent::__construct();
        $this->load->model('user_m');
    }

    public function _remap($method)
    {
        /* if (method_exists($this, $method)) {
            $this->{"{$method}"}();
        }*/


        // HTTP Method 로 분기
        switch ($this->input->method(true)) {
            case 'GET' :
                $this->get();
                break;
            case 'POST' :
                $this->post();
                break;
            case 'PUT' :
                $this->put();
                break;
            case 'DELETE' :
                $this->delete();
                break;
            default:
                $this->{"{$method}"}();
        }
    }

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function get()
    {
        $id = $_GET['id'];
        echo json_encode($this->user_m->get_user($id));
    }


    public function post()
    {
        var_dump($_POST['email']);
    }

    public function put()
    {
        var_dump('put');
    }

    public function delete()
    {
        var_dump('delete11');
    }
}
