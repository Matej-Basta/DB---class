<?php

class Region
{
    public $id = null;
    public $name = null;
    public $slug = null;

    public function insert()
    {

        $query = "
            INSERT
            INTO `regions`
            (`name`, `slug`)
            VALUES
            (?, ?)
        ";
        insert($query, ["{$this->name}", "{$this->slug}"]);

        $query2 = "
            SELECT `id`
            FROM `regions`
            WHERE `name` = ?
            ORDER BY `id` DESC
            LIMIT 1
        ";

        $result = select($query2, ["{$this->name}"]);

        $this->id = $result[0]->id;
    }
}