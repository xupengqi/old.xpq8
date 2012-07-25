<?php

class Admin_model extends CI_Model {
	function __construct()
   {
      //$this->load->database();
   }

   public function verify_user($email, $password)
   {
      if ($email == 'xupengqi@gmail.com' && sha1($password) == 'a5c7d200f6ba63039603b90217304a4f37392dbf')
         return true;
      return false;
      /*
      $q = $this
            ->db
            ->where('email_address', $email)
            ->where('password', sha1($password))
            ->limit(1)
            ->get('users');

      if ( $q->num_rows > 0 ) {
         // person has account with us
         return $q->row();
      }
      return false;
      */
   }
}