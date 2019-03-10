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

    public function get()
    {
        $start = $_GET['start'];
        $limit = $_GET['limit'];
        echo json_encode($this->users_m->get_user($start, $limit));
    }

    public function post()
    {
        // 관리자 페이지용 일괄 입력
    }

    public function put()
    {
        // 관리자 페이지용 일괄 변경
    }

    public function delete()
    {
        // 관리자 페이지용 일괄 삭제
    }
}
