<?php

class DB_model
{
    private $table = "tb_dummy";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllDatas()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . " WHERE id=:id");

        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function delById($id)
    {
        $this->db->query('DELETE FROM ' . $this->table . " WHERE id=:id");

        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function insertData($data)
    {
        $query = "INSERT INTO tb_dummy VALUES ('', :name, :class, :phone)";

        $this->db->query($query);

        $this->db->bind('name', $data['name']);
        $this->db->bind('class', $data['class']);
        $this->db->bind('phone', $data['phone']);

        if ($data['name'] != '' && $data['class'] != '' && $data['phone'] != '') {
            $this->db->execute();

            return $this->db->rowCount();
        } else {
            return 0;
        }

    }

    public function updateData($id, $data)
    {
        $query = 'UPDATE `tb_dummy` SET `name` = :name,`class` = :class,`phone`= :phone WHERE `id` = :id';

        $this->db->query($query);

        $this->db->bind('id', $id);
        $this->db->bind('name', $data['name']);
        $this->db->bind('class', $data['class']);
        $this->db->bind('phone', $data['phone']);

        if ($data['name'] != '' && $data['class'] != '' && $data['phone'] != '') {
            $this->db->execute();

            return $this->db->rowCount();
        } else {
            return 0;
        }
    }

    public function searchData()
    {
        $keyword = $_POST['keyword'];

        $this->db->query("SELECT * FROM tb_dummy WHERE name like :keyword");

        $this->db->bind('keyword', "%$keyword%");

        return $this->db->resultSet();
    }

}