<?php

namespace App\Models;

use CodeIgniter\Model;
use Codeigniter\HTTP\RequestInterface;

class ModelBooking extends Model
{

    protected $db;
    protected $request;

    public function __construct()
    {   
        $this->db = \Config\Database::connect(); 
        $this->request = \Config\Services::request();
    }

    protected $table      = 'booking';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ['id', 'tanggal','jam', 'service','kecamatan','alamat','akomodasi','status','custome_id','nama_treatment','created_at','updated_at'];

    // public function getStok()
    // {
    //     return $this->get();
    // }
    
    
//       public function getStok2()
// {
//     // Fetch data using a query
//     $query = $this->db->query('SELECT * FROM stok_buku');
    
//     // Check if query executed successfully
//     if ($query) {
//         // Return results as array of objects
//         return $query->getResult();
//     } else {
//         // Return empty array if query failed
//         return [];
//     }
// }
    
  
    public function insert_booking($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    // public function getById($id)
    // {
    //     return $this->where(['id' => $id])->get();
    // }

    // public function getriwayat(){
    // $query = $this->db->query('SELECT * FROM booking');
    
    // // Check if query executed successfully
    // if ($query) {
    //     // Return results as array of objects
    //     return $query->getResult();
    // }

    public function getRiwayat($customer_id)
{
    return $this->where('customer_id', $customer_id)->get()->getResult();
}

public function checkExistingBooking($tanggal, $jam)
{
    // Lakukan query ke database untuk memeriksa apakah ada data dengan tanggal dan jam yang sama
    $query = $this->db->table('booking')->where(['tanggal' => $tanggal, 'jam' => $jam])->get();

    // Mengembalikan hasil query
    return $query->getRow();
}



}



