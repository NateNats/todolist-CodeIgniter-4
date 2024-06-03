<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class userModel extends Model
    {
        protected $table = "pengguna";
        protected $allowedFields = ['userid', 'nama', 'password'];
        protected $primaryKey = 'userid';       
    }
?>