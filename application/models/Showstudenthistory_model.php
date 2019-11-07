<?php
    defined('BASEPATH') OR exit('No direct script access allowed');



    class Activities_history_model extends CI_Model{

        private $tbl_name = "checkname";

        function get_all($keyword){
            $this->db->select("checkname.classID, activities.activity_name, activities_history.event_date");
            $this->db->from($this->tbl_name);
            $this->db->join('activities', 'activities_history.activity_id = activities.activity_id');

            $this->db->like('activities.activity_name', $keyword);
            $result = $this->db->get();
            return $result->result();   //result คือ อาเรย์ of object
        }

    }
?>