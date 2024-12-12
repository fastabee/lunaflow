<?php

namespace App\Models;

use CodeIgniter\Model;
use Codeigniter\HTTP\RequestInterface;

class ModelMenu extends Model
{

    protected $db;
    protected $request;

    public function __construct()
    {   
        $this->db = \Config\Database::connect(); 
        $this->request = \Config\Services::request();
    }

    protected $table      = 'menu';
    protected $primaryKey = 'id';
    protected $returnType = 'object';
    protected $allowedFields = ['id','nama_treatment','harga', 'deskripsi', 'image'];


    public function getMenu()
    {
        $menu = $this->db->query('SELECT * FROM menu');
        return $menu->getResult();
    }


    public function getById($id)
    {
        
        return $this->where(['id' => $id])->get();
    }





}