<?php

namespace App;

use PDO;

class Item
{

    public static function list()
    {
        global $conn;

        try {
            $sql = "SELECT c.category_name, i.item_name, i.item_desc 
            FROM category AS c 
            LEFT JOIN items as i 
            ON (i.category_id=c.category_id) 
            ORDER BY c.category_name;
            ";

            $statement = $conn->prepare($sql);
            $statement->execute();
            $records = [];

            while ($rows = $statement->fetch()) {
                array_push($records, $rows);
            }
            return $records;
        } catch (PDOException $e) {
            error_log($e->getMessage());
        }

        return null;
    }
}