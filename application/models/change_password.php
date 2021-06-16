<?php
class Change_password extends CI_Model {
    public function reset_password($newPassword,$id){
        $new_password = password_hash($newPassword,PASSWORD_DEFAULT);
        $this -> db -> query("UPDATE users SET password = '$new_password' WHERE id = $id");
    }
}
?>