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

    function getByTd($id)
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

    function numPage()
    {
        $sql = "SELECT COUNT(id) AS numCake FROM CAKES";
        $result = $this->db->query($sql);

        if ($result->num_rows > 0) {
            // while ($result->fetch_row()) {
            //     $row = mysqli_num_rows($result);
            // }

            $numCake = mysqli_fetch_assoc($result);
            // $numCake = $result[0]['numCake'];
            // $row = mysqli_num_rows($result);
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
}
