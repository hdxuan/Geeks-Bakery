<?php

use App\Core\Database;

class CakeModel extends Database
{

    function all()
    {
        $sql = "SELECT * FROM cakes";
        $result = $this->db->query($sql);

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return false;
        }
    }

    function getById($id)
    {
        $sttm = $this->db->prepare("SELECT * FROM cakes WHERE id = ?");
        $sttm->bind_param("i", $id);

        $sttm->execute();
        $result = $sttm->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return false;
        }
    }

    function getByKeyword($keyword)
    {
        $keyword = '%' . $keyword . '%';
        $stmt = $this->db->prepare("SELECT * FROM CAKES WHERE name like ?");
        $stmt->bind_param("s", $keyword);

        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return false;
        }
    }

    function numCake()
    {
        $sql = "SELECT COUNT(*) AS numCake FROM CAKES";
        $result = $this->db->query($sql);

        if ($result->num_rows > 0) {
            $numCake = mysqli_fetch_assoc($result);
        }

        return $numCake['numCake'];
    }

    function paging($limit, $num)
    {
        $sql = "SELECT * FROM CAKES LIMIT $limit, $num";
        $result = $this->db->query($sql);

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return false;
        }
    }

    function detailCake($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM CAKES WHERE id = ?");
        $stmt->bind_param("i", $id);

        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return false;
        }
    }
    function store($data)
    {
    }

    function update($data)
    {
    }
    function delete($data)
    {
    }
}
