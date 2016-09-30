<?php defined('BASEPATH') or exit('No direct script access allowed');

class Items extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function gear()
    {
        $data = array(
            'title' => 'Items - Gear'
        );
        $data['page_header'] = 'Gear';

        $this->load->model('items/Gear');
        $data['categories'] = $this->Gear->getGearItemCategories();

        $this->load->view('templates/header', $data);
        $this->load->view('items/category');
        $this->load->view('templates/footer');
    }

    public function appearance()
    {
        $data = array(
            'title' => 'Items - Appearance'
        );
        $data['page_header'] = 'Appearance Items';

        $this->load->model('items/Appearance');
        $data['categories'] = $this->Appearance->getAppearanceItemCategories();

        $this->load->view('templates/header', $data);
        $this->load->view('items/category');
        $this->load->view('templates/footer');
    }

    public function itemList($subTypeId = 0)
    {
        $data = array();

        $this->load->model('items/Item');
        $data['items'] = $this->Item->getSubTypeItems($subTypeId);
        $data['category'] = $this->Item->getSubTypeName($subTypeId);

        $data['title'] = 'Items - ' . $data['category'];

        $this->load->view('templates/header', $data);
        $this->load->view('items/list');
        $this->load->view('templates/footer');
    }

    public function details($itemId = 0)
    {
        $this->load->helper('url');
        $data = array();

        $this->load->model('items/Item');
        $data['item'] = $this->Item->getDetails($itemId);
        $data['item']['images'] = $this->Item->getImages($itemId);
        $data['disqusIdentifier'] = $data['item']['id'];

        $data['title'] = 'Item Details - ' . $data['item']['name'];

        $this->load->view('templates/header', $data);
        $this->load->view('items/details');
        $this->load->view('templates/disqus');
        $this->load->view('templates/footer');
    }

    public function agentOriginsGearSets()
    {
        $data = array();
        $this->load->view('templates/header', $data);
        $this->load->view('items/agent_origins_gear_redemption');
        $this->load->view('templates/footer');
    }
}
