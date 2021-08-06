<?php

use App\Core\Database;

class CartModel extends Database
{
    function addToCart($data)
    {
        $idcake = $data['idcake'];
        $iduser = $data['iduser'];
        $amount = isset($data['amount']) ? $data['amount'] : 1;

        $isSuccess = true;
        $isInCart = $this->checkCakeInCart($idcake, $iduser);
        if ($isInCart > 0) {
            $amount += $isInCart;

            $sttm = $this->db->prepare("UPDATE CART SET amount = ? WHERE id_cake = ? AND id_user = ?");
            $sttm->bind_param("iii", $amount, $idcake, $iduser);

            $sttm->execute();

            if ($sttm->error) {
                $isSuccess = false;
            }
        } else {
            $sttm = $this->db->prepare("INSERT INTO CART (id_cake, id_user, amount)  VALUES (?, ?, ?)");
            $sttm->bind_param("iii", $idcake, $iduser, $amount);

            $sttm->execute();

            $amount = $this->amountInCart($iduser);
            if ($sttm->error) {
                return  $isSuccess;
            } else {
                return [
                    "isSuccess" =>  $isSuccess,
                    "numOfCart" => $amount
                ];
            }
        }
    }

    function amountInCart($iduser)
    {

        $stmt = $this->db->prepare("SELECT count(*)  FROM cart WHERE id_user =  ?");
        $stmt->bind_param("i", $iduser);

        $stmt->execute();
        $result = $stmt->get_result();


        return $result->fetch_row()[0];
    }

    function checkCakeInCart($idcake, $iduser)
    {

        $sttm = $this->db->prepare("SELECT amount FROM cart WHERE id_cake = ? AND id_user = ?");
        $sttm->bind_param("ii", $idcake, $iduser);

        $sttm->execute();

        $result =  $sttm->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_assoc()['amount'];
        } else {
            return false;
        }
    }

    function deleteCart($iduser, $idcake)
    {
        $sttm = $this->db->prepare("DELETE FROM cart WHERE id_cake = ? AND id_user = ?");
        $sttm->bind_param("ii", $idcake, $iduser);

        $sttm->execute();

        $result =  $sttm->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_assoc()['amount'];
        } else {
            return false;
        }
    }
}
