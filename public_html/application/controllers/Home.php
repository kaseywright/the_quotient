<?php defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = array();

        $this->load->model('Notes');
        $data['latestNote'] = $this->Notes->getLatestNoteHeader();

        $this->load->model('items/Item');
        $data['recentItems'] = $this->Item->getRecentItems();

        $this->load->view('templates/header', $data);
        $this->load->view('home');
        $this->getBingNews();
        $this->load->view('templates/footer');
    }

    public function getBingNews()
    {
        $data = array();
        $this->load->model('News');
        $data['news'] = $this->News->getBingNews();
        $this->load->view('news', $data);
    }
}
