<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * Publications Controller
 *
 * @package     Controller
 * @author      Syed Abidur Rahman <aabid048@gmail.com>
 */
include_once APPPATH . "controllers/BaseController.php";
class PublicationsController extends BaseController
{
    public function index()
    {
        $this->load->model('page_item');
        $this->load->model('image');

        $this->data['pageItem'] = $this->page_item->getDetail(array('page_id' => 4, 'title' => 'Publications'));
        $this->data['pageItemImage'] = $this->image->getImageByType('publication');
        $this->data['rightBarItem'] = $this->page_item->getDetail(array('page_id' => 4, 'title' => 'Aust Ranking'));

        $this->layout->view('publications/index', $this->data);
    }

    public function annualReport()
    {
        $this->load->model('page_item');
        $this->load->model('image');

        $this->data['pageItems'] = $this->page_item->getAllWithFiles(5);
        $this->data['pageItemImage'] = $this->image->getImageByType('publication');
        $this->data['rightBarItem'] = $this->page_item->getDetail(array('page_id' => 4, 'title' => 'Aust Ranking'));

        $this->layout->view('publications/annual-report', $this->data);
    }
}