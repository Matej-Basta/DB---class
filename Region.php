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

    public function update()
    {
        if (empty($this->id)) {
            return false;
        } else {
            $query = "
                UPDATE `regions`
                SET `name` = '{$this->name}',
                    `slug`= '{$this->slug}'
                WHERE `id` = '{$this->id}'
            ";

            update($query);
        }
    }

    public function save()
    {
        if (empty($this->id)) {
            $this->insert();
        } else {
            $this->update();
        }
    }

    public function delete()
    {

        if (empty($this->id)) {
            return false;
        } else {
            $query = "
                DELETE
                FROM `regions`
                WHERE `id` = '{$this->id}'
            ";

            delete($query);
        }
    }
}