<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * Home Controller
 *
 * @package     Controller
 * @author      Syed Abidur Rahman <aabid048@gmail.com>
 */
include_once APPPATH . "controllers/BaseController.php";
class HomeController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->model('page');
        $this->load->model('page_item');
        $this->load->model('image');
        $this->load->model('news');
        $this->load->model('event');

        $this->data['pageDetail'] = $this->page->getDetail();
        $this->data['sliderImages'] = $this->image->getSliderImages();
        $this->data['pageItems'] = $this->page_item->getAll(array('title' => 'Aust Leadership'));
        $this->data['leadershipImages'] = $this->image->getImagesByType('home_leadership');
        $this->data['latestNews'] = $this->news->getAll();
        $this->data['latestEvents'] = $this->event->getAll();

        $this->layout->view('home/index', $this->data);
    }

    public function about()
    {
        $this->load->model('page_item');
        $this->load->model('image');

        $this->data['pageItems'] = $this->page_item->getAll(array('page_id' => 2, 'title !=' => 'founder'));
        $this->data['rightBarItem'] = $this->page_item->getDetail(array('page_id' => 2, 'title' => 'founder'));
        $this->data['pageItemImage'] = $this->image->getImageByType('about');

        $this->layout->view('home/about', $this->data);
    }

    public function accreditation()
    {
        $this->load->model('page_item');
        $this->load->model('image');

        $this->data['pageItem'] = $this->page_item->getDetail(array('page_id' => 3, 'title' => 'Accreditation'));
        $this->data['pageItemImage'] = $this->image->getImageByType('accreditation');
        $this->data['rightBarItem'] = $this->page_item->getDetail(array('page_id' => 3, 'title' => 'Aust Ranking'));

        $this->layout->view('home/accreditation', $this->data);
    }
}