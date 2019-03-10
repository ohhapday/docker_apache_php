<?php
/**
 * Created by PhpStorm.
 * User: seojeongseog
 * Date: 2019-03-09
 * Time: 17:43
 */

class Users_m extends CI_Model
{

    function __construct()
    {
        parent::__construct();

        $this->load->database();
    }

    public function get_user(int $start, int $limit)
    {
        $query = "
            SELECT * FROM tb_users
            LIMIT ?, ?
        ";

        $query = $this->db->query($query, array($start, $limit));

        if($query->num_rows() > 0) {
            $return = (object)$query->result();
        } else {
            $return = (object) array(
                '처리결과' => '에러발생'
            );
        }

        return (object)$return;
    }
}