<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Item extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getSubTypeItems($subTypeId = 0)
    {
        $this->db->where('sub_type_id', $subTypeId);
        $itemsQuery = $this->db->get('items');
        $items = $itemsQuery->result_array();

        return $items;
    }

    public function getDetails($itemId = 0)
    {
        $this->db->where('id', $itemId);
        $itemQuery = $this->db->get('items');
        $item = $itemQuery->row_array();

        return $item;
    }

    public function getImages($itemId = 0)
    {
        $this->db->where('item_id', $itemId);
        $itemImagesQuery = $this->db->get('item_images');
        $itemImages = $itemImagesQuery->result_array();

        return $itemImages;
    }

    public function getSubTypeName($subTypeId = 0)
    {
        $this->db->select('sub_type');
        $this->db->where('id', $subTypeId);
        $subTypeNameQuery = $this->db->get('item_sub_types');
        $subTypeName = $subTypeNameQuery->row_array();

        return $subTypeName['sub_type'];
    }

    public function getRecentItems()
    {
        $this->db->select('items.id, items.name, item_images.file_name');
        $this->db->where('sub_type_id != 6');
        $this->db->where('sub_type_id != 1');
        $this->db->where('sub_type_id != 11');
        $this->db->where('sub_type_id != 10');
        $this->db->where('sub_type_id != 5');
        $this->db->order_by('RAND()');
        $this->db->limit(3);
        $this->db->join('item_images', 'items.id = item_images.item_id');
        $recentItemsQuery = $this->db->get('items');
        $recentItems = $recentItemsQuery->result_array();

        return $recentItems;
    }
}
