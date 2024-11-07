<?php
class UserModel
{
    private $db;

    function __construct()
    {
        $this->db = new Database();
    }

    public function getUser($username, $pass)
    {
        $sql = "SELECT * FROM user WHERE user = ? AND password = ?";
        return $this->db->getOne($sql, [$username, $pass]);
    }

    public function getUserByName($username)
    {
        $sql = "SELECT * FROM user WHERE user = ?";
        return $this->db->getOne($sql, [$username]);
    }

    public function getAllUser()
    {
        $sql = "SELECT * FROM user";
        return $this->db->getAll($sql);
    }

    function getIdUser($iduser)
    {
        if ($iduser > 0) {
            $sql = "SELECT * FROM user WHERE id = ?";
            return $this->db->getOne($sql, [$iduser]);
        } else {
            return null;
        }
    }

    function insertUserForUser($data)
    {
        $sql = "INSERT INTO user (name, address, user, password, role) VALUES (?, ?, ?, ?, ?)";
        $param = [$data['name'], $data['address'], $data['user'], $data['password'], $data['role']];
        return $this->db->insert($sql, $param);
    }

    function insertUser($data)
    {
        $sql = "INSERT INTO user (name, address, user, password, role) VALUES (?, ?, ?, ?, ?)";
        $param = [$data['name'], $data['address'], $data['user'], $data['password'], $data['role']];
        return $this->db->insert($sql, $param);
    }

    function deleteUser($id)
    {
        $sql = "DELETE FROM user WHERE id = ?";
        return $this->db->delete($sql, [$id]);
    }

    function updateUser($data)
    {
        $sql = "UPDATE user SET name = ?, address = ?, user = ?, password = ?, role = ? WHERE id = ?";
        $param = [$data['name'], $data['address'], $data['user'], $data['password'], $data['role'], $data['id']];
        return $this->db->update($sql, $param);
    }
}
