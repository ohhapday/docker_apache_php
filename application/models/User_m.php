<?php
/**
 * Created by PhpStorm.
 * User: seojeongseog
 * Date: 2019-03-09
 * Time: 17:43
 */

class User_m extends CI_Model
{

    function __construct()
    {
        parent::__construct();

        $this->load->database();
    }

    public function get_user($id)
    {
        $query = "
            SELECT * FROM tb_users
            WHERE
              id = ?
        ";

        $query = $this->db->query($query, array($id));

        if($query->num_rows() === 1) {
            return (object)$query->row();
        } else {
            return (object) array(
                '처리결과' => '에러발생'
            );
        }
    }

    public function get_users()
    {

    }


    public function post_user()
    {

    }

    public function put_user()
    {

    }

    public function delete_user()
    {

    }
}