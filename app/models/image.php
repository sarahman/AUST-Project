<?php

/**
 * Description of Images
 *
 * @package     Model
 * @author      Syed Abidur Rahman <aabid048@gmail.com>
 */
class Image extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->loadTable('images', 'image_id');
    }

    public function getAll($options = array())
    {
        return $this->findAll($options, "{$this->primaryKey}, name, caption", "{$this->primaryKey} DESC");
    }

    public function getSliderImages()
    {
        return $this->findAll(array('type' => 'home'), "{$this->primaryKey}, name, caption", "{$this->primaryKey} DESC");
    }

    public function getImagesByType($type)
    {
        return $this->findAllBy('type', $type);
    }

    public function getImageByType($type)
    {
        return $this->findBy('type', $type);
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