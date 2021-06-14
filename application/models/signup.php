<?php
    class Signup extends CI_model {
        public function insert_data($data)
        {
            $this ->db->insert("users",$data);
        }
    }
?>