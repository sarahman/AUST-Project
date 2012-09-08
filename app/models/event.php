<?php

/**
 * Description of Event
 *
 * @package     Model
 * @author      Syed Abidur Rahman <aabid048@gmail.com>
 */
class Event extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->loadTable('events', 'event_id');
    }

    public function getAll()
    {
        return $this->findAll(array('event_type' => '1'), "{$this->primaryKey}, event_title",
            "{$this->primaryKey} DESC", 0, 5);
    }
}