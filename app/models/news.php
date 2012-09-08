<?php

/**
 * Description of News
 *
 * @package     Model
 * @author      Syed Abidur Rahman <aabid048@gmail.com>
 */
class News extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->loadTable('news', 'news_id');
    }

    public function getAll()
    {
        return $this->findAll(array('type' => '1'), "{$this->primaryKey}, title, date, time",
            "{$this->primaryKey} DESC", 0, 4);
    }
}