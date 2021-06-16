<?php
class paginatedModel extends CI_Model
{
    function count_all()
    {
        $query = $this->db->get("users");
        return $query->num_rows();
    }

    function fetch_details($limit, $start)
    {
        $output = '';
        $this->db->select("*");
        $this->db->from("users");
        $this->db->order_by("firstName", "ASC");
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        $output .= '
  <table class="table table-striped">
   <tr>
    <th>firstname</th>
    <th>lastname</th>
    <th>username</th>
    <th>email</th>
   </tr>
  ';
        foreach ($query->result() as $row) {
            $output .= '
   <tr>
    <td>' . $row->firstName. '</td>
    <td>' . $row->lastName. '</td>
    <td>' . $row->username . '</td>
    <td>' . $row->email . '</td>
   </tr>
   ';
        }
        $output .= '</table>';
        return $output;
    }
}