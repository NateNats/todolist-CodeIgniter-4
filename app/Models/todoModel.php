<?php 
    namespace App\Models;
    use CodeIgniter\Model;

    class todoModel extends Model
    {
        protected $table = 'todolist';
        protected $allowedFields = ['idkegiatan', 'kegiatan', 'status'];
        protected $primaryKey = 'idkegiatan';
    }
?>