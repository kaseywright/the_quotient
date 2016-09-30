<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Notes extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getAllNoteHeaders()
    {
        $this->db->select('id, version, date, summary');
        $this->db->order_by('date', 'desc');
        $notesQuery = $this->db->get('patch_notes');
        $notes = $notesQuery->result_array();

        return $notes;
    }

    public function getNoteBody($noteId = 0)
    {
        $this->db->where('id', $noteId);
        $notesQuery = $this->db->get('patch_notes');
        $note = $notesQuery->row_array();

        return $note;
    }

    public function getLatestNoteHeader()
    {
        $this->db->select('id, version, date, summary');
        $this->db->order_by('date', 'desc');
        $this->db->limit(1);
        $notesQuery = $this->db->get('patch_notes');
        $latestNote = $notesQuery->row_array();

        return $latestNote;
    }
}
