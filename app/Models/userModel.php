<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class userModel extends Models 
    {
        protected $table = "pengguna";
        protected $allowedFields = ['userid', 'nama', 'password'];
        protected $primaryKey = 'userid'; 
    }
?>