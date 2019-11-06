    <?php

    defined('BASEPATH') or exit('No direct script access allowed');

    class Menu_model extends CI_Model
    {
        public function getMenu()
        {
            return $this->db->get_where('menu', array('id_parent' => '', 'id_posisi' => 4))->result_array();
        }

        public function getSubmenu()
        {
            return $this->db->get('menu')->result_array();
        }
    }
