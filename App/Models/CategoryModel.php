<?php

use App\Core\Database;

class CategoryModel extends Database
{
    function all()
    {
        $sql = 'SELECT * FROM CAKE_TYPE';
        $result = $this->db->query($sql);

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return false;
        }
    }

    function showCategory($id)
    {

        $sttm = $this->db->prepare("SELECT *  FROM CAKE_TYPE WHERE id = ?");
        $sttm->bind_param("i", $id);

        $sttm->execute();

        $result =  $sttm->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return false;
        }
    }

    function eachTypeCategory($id)
    {

        $sttm = $this->db->prepare("SELECT * FROM CAKES WHERE id_cake_type = ?");
        $sttm->bind_param("i", $id);

        $sttm->execute();

        $result =  $sttm->get_result();

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
