<?php
class CategoryModel
{
    private $db;

    function __construct()
    {
        $this->db = new Database();
    }

    function getCate()
    {
        $sql = "SELECT DISTINCT Genre FROM Book";
        return $this->db->getAll($sql);
    }

    function insertCate($data) {}

    function updateCate($data)
    {
        $sql = "UPDATE Book SET Genre = ? WHERE Genre = ?";
        $param = [$data['new_genre'], $data['old_genre']];

        var_dump($sql, $param);

        return $this->db->update($sql, $param);
    }

    function deleteCate($genre)
    {
        $sql = "DELETE FROM Book WHERE Genre = ?";
        return $this->db->delete($sql, [$genre]);
    }

    function getIdCate($genre)
    {
        $sql = "SELECT * FROM Book WHERE Genre = ?";
        return $this->db->getOne($sql, [$genre]);
    }
}
