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
        // Form Validation 처리 생략
        $obj = $_POST;
        echo json_encode($this->user_m->post_user($obj));
    }

    public function put()
    {
        $data = file_get_contents("php://input");
        $data = json_decode($data);

        if (!empty($data)) {
            foreach ($data as $key => $value) {
                $obj[$key] = $value;
            }
        }

        echo json_encode($this->user_m->put_user($obj));

    }

    public function delete()
    {
        $data = file_get_contents("php://input");
        $data = json_decode($data);

        if (!empty($data)) {
            foreach ($data as $key => $value) {
                $obj[$key] = $value;
            }
        }

        echo json_encode($this->user_m->delete_user($obj));
    }
}
