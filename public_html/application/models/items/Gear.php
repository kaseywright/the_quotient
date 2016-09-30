<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Gear extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getGearItemCategories()
    {
        $this->db->where('type_id', 2);
        $subTypesQuery = $this->db->get('item_sub_types');
        $subTypes = $subTypesQuery->result_array();

        return $subTypes;
    }
}
