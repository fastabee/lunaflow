<?php

namespace App\Models;

use CodeIgniter\Model;
use Codeigniter\HTTP\RequestInterface;

class ModelEdukasi extends Model
{

    protected $db;
    protected $request;

    public function __construct()
    {   
        $this->db = \Config\Database::connect(); 
        $this->request = \Config\Services::request();
    }

    protected $table      = 'edukasi';
    protected $primaryKey = 'id';
    protected $returnType = 'object';
    protected $allowedFields = ['id', 'judul', 'deskripsi', 'foto'];


    public function getEdukasi()
    {
        return $this->get();
    }

    


    public function insert_edukasi($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function getById($id)
    {
        return $this->where(['id' => $id])->get();
    }





}