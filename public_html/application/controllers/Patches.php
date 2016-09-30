<?php defined('BASEPATH') or exit('No direct script access allowed');

class Patches extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = array(
            'title' => 'Patch Notes'
        );
        $this->load->model('Notes');
        $data['patches'] = $this->Notes->getAllNoteHeaders();

        $this->load->view('templates/header', $data);
        $this->load->view('patches/list');
        $this->load->view('templates/footer');
    }

    public function note($noteId = 0)
    {
        $this->load->helper('url');
        $data = array();

        $this->load->model('Notes');
        $data['note'] = $this->Notes->getNoteBody($noteId);
        $data['disqusIdentifier'] = $data['note']['id'];

        $data['title'] = 'Patch Note - ' . $data['note']['version'];

        $this->load->view('templates/header', $data);
        $this->load->view('patches/notes');
        $this->load->view('templates/disqus');
        $this->load->view('templates/footer');
    }
}
