<?php
class Updatepro
{
    private $db;

    function __construct()
    {
        $this->db = new Database();
    }

    function updatePro($data)
    {
        $sql = "UPDATE products SET idcate = ?, title = ?, price = ?, image = ? WHERE id = ?";
        $params = [$data['idcate'], $data['title'], $data['price'], $data['image'], $data['id']];
        return $this->db->update($sql, $params);
    }
}
