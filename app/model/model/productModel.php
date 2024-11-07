<?php
class ProductModel
{
    private $db;

    function __construct()
    {
        $this->db = new Database();
    }

    function getAllPro()
    {
        $sql = "SELECT * FROM Book";
        return $this->db->getAll($sql);
    }

    function getIdPro($idpro)
    {
        if ($idpro > 0) {
            $sql = "SELECT * FROM Book WHERE BookID = ?";
            return $this->db->getOne($sql, [$idpro]);
        } else {
            return null;
        }
    }

    function getIDCate($idpro)
    {
        $sql = "SELECT Genre FROM Book WHERE BookID = ?";
        return $this->db->getOne($sql, [$idpro]);
    }

    function getCatePro($genre, $idpro)
    {
        $sql = "SELECT * FROM Book WHERE Genre = ? AND BookID <> ?";
        return $this->db->getAll($sql, [$genre, $idpro]);
    }

    function insertPro($data)
    {
        $sql = "INSERT INTO Book (Title, Genre, ReviewCount, SalesCount, ReleaseDate, AuthorID) VALUES (?, ?, ?, ?, ?, ?)";
        $param = [$data['Title'], $data['Genre'], $data['ReviewCount'], $data['SalesCount'], $data['ReleaseDate'], $data['AuthorID']];
        return $this->db->insert($sql, $param);
    }

    function deletePro($id)
    {
        $sql = "DELETE FROM Book WHERE BookID = ?";
        return $this->db->delete($sql, [$id]);
    }

    function updatePro($data)
    {
        $sql = "UPDATE Book SET Title = ?, Genre = ?, ReviewCount = ?, SalesCount = ?, ReleaseDate = ?, AuthorID = ? WHERE BookID = ?";
        $param = [$data['Title'], $data['Genre'], $data['ReviewCount'], $data['SalesCount'], $data['ReleaseDate'], $data['AuthorID'], $data['BookID']];
        return $this->db->update($sql, $param);
    }

    function getproducts()
    {
        $sql = "SELECT * FROM Book";
        return $this->db->getAll($sql);
    }

    function gethomeProducts()
    {
        $sql = "SELECT * FROM Book ORDER BY ViewCount DESC LIMIT 3";
        return $this->db->getAll($sql);
    }

    function top5sach()
    {
        $sql = "SELECT * FROM Book ORDER BY ReleaseDate DESC LIMIT 5";
        return $this->db->getAll($sql);
    }
}
