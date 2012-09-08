<?php

/**
 * Description of Pages
 *
 * @package     Model
 * @author      Syed Abidur Rahman <aabid048@gmail.com>
 */
class Page extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->loadTable('pages', 'page_id');
    }

    public function getDetail($page = 1)
    {
        $this->db->select();
        $this->db->from($this->tableName);
        $this->db->join('page_items', "{$this->tableName}.{$this->primaryKey}=page_items.{$this->primaryKey}");
        $this->db->where(array("{$this->tableName}.{$this->primaryKey}" => $page));

        $result = $this->db->get()->row_array();
        return empty($result) ? '' : $result['detail'];
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

        return parent::update($data, $id);
    }

    public function delete($id)
    {
        if (empty($id)) {
            return false;
        }

        return $this->remove($id);
    }
}