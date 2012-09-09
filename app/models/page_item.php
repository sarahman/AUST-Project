<?php

/**
 * Description of Page Items
 *
 * @package     Model
 * @author      Syed Abidur Rahman <aabid048@gmail.com>
 */
class Page_Item extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->loadTable('page_items', 'item_id');
    }

    public function getAll($options)
    {
        return $this->findAll($options);
    }

    public function getDetail($options = array('item_id' => 1))
    {
        return $this->find($options);
    }

    public function getAllWithFiles($pageId = 1)
    {
        $sql = "SELECT `{$this->tableName}`.`title`, `{$this->tableName}`.`detail`, `images`.`name` AS `image_name`,
                  `files`.`name` AS `file_name`
                FROM `{$this->tableName}`, `images`, `files`
                WHERE `{$this->tableName}`.`page_id` = '{$pageId}'
                AND `{$this->tableName}`.`title` = `images`.`type`
                AND `{$this->tableName}`.`title` = `files`.`type`";

        return $this->executeQuery($sql);
    }

    public function save(array $data)
    {
        return $this->insert($data);
    }

    public function modify($data, $id)
    {
        if (empty($data) OR empty($id)) {
            return false;
        }

        return $this->update($data, $id);
    }

    public function delete($id)
    {
        if (empty($id)) {
            return false;
        }

        return $this->remove($id);
    }
}