<?php
    function addItemToCatalog($title, $author, $pubyear, $price){
        $sql = 'INSERT INTO catalog (title, author, pubyear, price) VALUES (?, ?, ?, ?)';

        if (!$stmt = mysqli_prepare($link, $sql)){
            return false;
        }

        $stmt->bind_param("ssii", $title, $author, $pubyear, $price);
        $stmt->execute();
        $stmt->close();
        return true;
    }