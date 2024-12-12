<?php

namespace App\Models;

use CodeIgniter\Model;
use Codeigniter\HTTP\RequestInterface;

class ModelSurvey1 extends Model
{

    protected $db;
    protected $request;

    public function __construct()
    {   
        $this->db = \Config\Database::connect(); 
        $this->request = \Config\Services::request();
    }

    protected $table      = 'hasil1';
    protected $primaryKey = 'id';
    protected $returnType = 'object';
    protected $allowedFields = ['id','id_user', 'satu', 'dua', 'tiga','empat','lima','enam','status'];


    public function gethasil()
    {
        return $this->get();
    }



    public function insert_survey($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function getById($id)
    {
        return $this->where(['id_user' => $id])->get();
    }

    public function getLastRowByIdUser($id_user)
{
    return $this->where('id_user', $id_user)
                ->orderBy('id', 'DESC') // Mengurutkan berdasarkan ID secara descending
                ->get()
                ->getFirstRow(); // Mengambil row pertama dari hasil query
}






}