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
}