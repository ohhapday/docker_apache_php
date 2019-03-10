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

    /**
     * INSERT DUPLICATE 함수
     * @param string $table
     * @param array $data
     * @return bool|int
     */
    private function updateOnDuplicate(string $table, array $data)
    {
        if (empty($table) || empty($data)) return false;
        $duplicate_data = array();
        foreach ($data AS $key => $value) {
            if ($value === null) continue;
            $duplicate_data[] = sprintf("%s='%s'", $key, addslashes($value));
        }

        $sql = sprintf("%s ON DUPLICATE KEY UPDATE %s", $this->db->insert_string($table, $data), implode(',', $duplicate_data));
        $this->db->query($sql);

        return (int)$this->db->insert_id();
    }

    public function get_user(int $id)
    {
        $query = "
            SELECT * FROM tb_users
            WHERE
              id = ?
        ";

        $query = $this->db->query($query, array($id));

        if($query->num_rows() === 1) {
            $return = (object)$query->row();
        } else {
            $return = (object) array(
                '처리결과' => '에러발생'
            );
        }

        return (object)$return;
    }

    public function post_user(array $obj)
    {
        $this->db->insert('tb_users', $obj);
        $id = $this->db->insert_id();

        $return = $this->get_user($id);                         // 입력후 해당 유저정보 반환
        return (object)$return;
    }

    public function put_user(array $obj)
    {
        $this->updateOnDuplicate('tb_users', $obj);

        $return = $this->get_user($obj['id']);                  // 변경후 해당 유저정보 반환
        return (object)$return;
    }

    public function delete_user(array $obj)
    {
        $obj['is_deleted'] = 1;                                 // is_deleted 필드로 임시 삭제 처리
        $this->updateOnDuplicate('tb_users', $obj);

        $return = $this->get_user($obj['id']);                  // 삭제후 해당 유저정보 반환
        return (object)$return;
    }
}