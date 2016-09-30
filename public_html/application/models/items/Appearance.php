<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Appearance extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getAppearanceItemCategories()
    {
        $this->db->where('type_id', 1);
        $subTypesQuery = $this->db->get('item_sub_types');
        $subTypes = $subTypesQuery->result_array();

        return $subTypes;
    }
}
