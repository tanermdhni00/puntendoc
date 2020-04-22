  <?php
  defined('BASEPATH') OR exit('No direct script access allowed');
 
  class User extends CI_Model{

       function signup($data)
       {
            $this->db->insert('tbl_users',$data);
       }
  }