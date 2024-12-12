<?php

namespace App\Controllers;

use App\Models\ModelUser;
use App\Models\ModelSurvey;
use App\Models\ModelSurvey1;
use App\Models\ModelSurvey2;
use App\Models\ModelEdukasi;

class Home extends BaseController
{

    protected $UserModel;
    protected $session;
    protected $SurveyModel;
    protected $SurveyModel1;
    protected $SurveyModel2;
    protected $EdukasiModel;

    public function __construct()
    {
        $this->EdukasiModel = new ModelEdukasi();
        $this->UserModel = new ModelUser();
        $this->SurveyModel = new ModelSurvey();
        $this->SurveyModel1 = new ModelSurvey1();
        $this->SurveyModel2 = new ModelSurvey2();
        $this->session = \Config\Services::session();
    }

    //dashboard
    public function index()
    {
        if (session()->has('id')) {
            $data = array(

                'data' => $this->UserModel->getById(session('id'))->getRow()
            );
            return view('welcome_message', $data);
        } else {
            return redirect()->to(base_url() . 'login');
        }
    }








    //pilih_mood
    public function mood()
    {
        
        if (session()->has('id')) {
            $data = array(

                'data' => $this->UserModel->getById(session('id'))->getRow()
            );
            return view('pilih_mood', $data);
        } else {
            return redirect()->to(base_url() . 'login');
        }
    }


    //insert mood
    public function insert_mood(){

        if (session()->has('id')) {
        $id = $this->request->getPost('id');    
          $data = array(
            'mood' => $this->request->getPost('mood'),
            'takaran' => $this->request->getPost('takaran')

          );  


       $result = $this->UserModel->update($id, $data);
       if ($result) {
        session()->setFlashdata('mood', 'Berhasil Update data');
        return redirect()->to(base_url() . '/');
    } else {
        return redirect()->to(base_url() . 'user/edit/' . $id)->with('error', 'Data Updated Failed');
    }

        } else {
            return redirect()->to(base_url() . 'login');
        }
        
    }

    //edukasi
    public function edukasi()
    {
        $data = array(
            'data' => $this->EdukasiModel->getEdukasi()
        ); 
        return view('edukasi', $data);
    }

    //survey
    public function survey()
    {   
        $data = array(
           'data' => $this->UserModel->getById(session('id'))->getRow()
        );
        return view('survey', $data);
    }

     //survey
     public function survey1()
     {   
         $data = array(
            'data' => $this->UserModel->getById(session('id'))->getRow()
         );
         return view('survey1', $data);
     }

      //survey
    public function survey2()
    {   
        $data = array(
           'data' => $this->UserModel->getById(session('id'))->getRow()
        );
        return view('survey2', $data);
    }

    //insert survey

    public function insert_survey(){

        $satu = $this->request->getPost('1');
            $dua = $this->request->getPost('2');
            $tiga = $this->request->getPost('3');
            $empat = $this->request->getPost('4');
            $lima = $this->request->getPost('5');
            $enam = $this->request->getPost('6');
            $tuju = $this->request->getPost('7');
            $delapan = $this->request->getPost('8');
            $semibilan = $this->request->getPost('9');
            $sepuluh = $this->request->getPost('10');
            $sebelas = $this->request->getPost('11');
            $duabelas = $this->request->getPost('12');
            $anemia = $satu + $dua + $tiga + $empat + $lima + $enam;
            $dysmenorrhea = $tuju + $delapan + $semibilan + $sepuluh + $sebelas + $duabelas; 
             

        $data = array(
            'id_user' => $this->request->getPost('id'),
            'satu' => $satu,
            'dua' => $dua,
            'tiga' => $tiga,
            'empat' => $empat,
            'lima' => $lima,
            'enam' => $enam,
            'tuju' => $tuju,
            'delapan' => $delapan,
            'sembilan' => $semibilan,
            'sepuluh' => $sepuluh,
            'sebelas' => $sebelas,
            'duabelas' => $duabelas,
            'anemia' => $anemia,
            'dysmenorrhea' => $dysmenorrhea,
        );

        if ($this->SurveyModel->insert_survey($data)) {

            session()->setFlashdata('success', 'Berhasil Menambahkan Data');

            return redirect()->to(base_url() . 'hasil');
        } else {
            session()->setFlashdata('error', 'Gagal Menambahkan Data');
            return redirect()->to(base_url() . 'survey');
        }
        

    }

     //insert survey

     public function insert_survey1(){

        $satu = $this->request->getPost('1');
            $dua = $this->request->getPost('2');
            $tiga = $this->request->getPost('3');
            $empat = $this->request->getPost('4');
            $lima = $this->request->getPost('5');
            $enam = $this->request->getPost('6');
           
            $status = $satu + $dua + $tiga + $empat + $lima + $enam;
            
            
        $data = array(
            'id_user' => $this->request->getPost('id'),
            'satu' => $satu,
            'dua' => $dua,
            'tiga' => $tiga,
            'empat' => $empat,
            'lima' => $lima,
            'enam' => $enam,
            
            'status' => $status,
            
        );

        if ($this->SurveyModel1->insert_survey($data)) {

            session()->setFlashdata('success', 'Berhasil Menambahkan Data');

            return redirect()->to(base_url() . 'hasil1');
        } else {
            session()->setFlashdata('error', 'Gagal Menambahkan Data');
            return redirect()->to(base_url() . 'survey');
        }
        

    }

     //insert survey2

     public function insert_survey2(){

        $satu = $this->request->getPost('1');
            $dua = $this->request->getPost('2');
            $tiga = $this->request->getPost('3');
            $empat = $this->request->getPost('4');
            $lima = $this->request->getPost('5');
            $enam = $this->request->getPost('6');
            $status = $satu + $dua + $tiga + $empat + $lima + $enam;
           
             

        $data = array(
            'id_user' => $this->request->getPost('id'),
            'satu' => $satu,
            'dua' => $dua,
            'tiga' => $tiga,
            'empat' => $empat,
            'lima' => $lima,
            'enam' => $enam,
            'status' => $status
        );

        if ($this->SurveyModel2->insert_survey($data)) {

            session()->setFlashdata('success', 'Berhasil Menambahkan Data');

            return redirect()->to(base_url() . 'hasil2');
        } else {
            session()->setFlashdata('error', 'Gagal Menambahkan Data');
            return redirect()->to(base_url() . 'survey');
        }
        

    }

    //hasil
    public function hasil()
    {
        $data = array(
            'data' => $this->UserModel->getById(session('id'))->getRow(),
            'hasil' => $this->SurveyModel->getLastRowByIdUser(session('id'))
            
        );
        return view('hasil', $data);
    }

      //hasil
      public function hasil1()
      {
          $data = array(
              'data' => $this->UserModel->getById(session('id'))->getRow(),
              'hasil' => $this->SurveyModel1->getLastRowByIdUser(session('id'))
              
          );
          return view('hasil1', $data);
      }

        //hasil
    public function hasil2()
    {
        $data = array(
            'data' => $this->UserModel->getById(session('id'))->getRow(),
            'hasil' => $this->SurveyModel2->getLastRowByIdUser(session('id'))
            
        );
        return view('hasil2', $data);
    }

    //login
    public function login()
    {

        return view('login');
    }


    //login
    public function login_user()
    {
        $nomor = $this->request->getPost('nomor');
        $password = $this->request->getPost('password');
        $cek_login = $this->UserModel->ceknomor($nomor);
        if ($cek_login->getNumRows() > 0) {
            $user = $cek_login->getRowArray();
            $pw_valid = $user['password'];
            if ($password == $pw_valid) {
                $newSession = [
                    'id' => $user['id'],
                    'nama' => $user['nama'],
                    'email' => $user['email'],
                    'username' => $user['username'],
                    'password' => $user['password'],
                    'nomor' => $user['nomor'],
                    'foto' => $user['foto'],
                    'mood' => $user ['mood'],
                    'meter' => $user['meter'],
                    'takaran' => $user['takaran']
                ];
                session()->set($newSession);
                session()->setFlashdata('success', 'Selamat Anda Berhasil Login');
                return redirect()->to(base_url('/'));
            } else {
                session()->setFlashdata('error', 'Username atau Password salah');
                return redirect()->to(base_url('login/'));
            }
        } else {
            session()->setFlashdata('error', 'Username atau Password salah');
            return redirect()->to(base_url('login/'));
        }
    }

    public function logout()
    {
        // Hapus semua data sesi dan redirect ke halaman login
        $this->session->destroy();
        return redirect()->to(base_url('login/'));
    }


    //registrasi
    public function registrasi()
    {
        return view('registrasi');
    }

    //registrasi proses

    public function insert_register()
    {



        $nama = $this->request->getPost('nama');
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $nomor = $this->request->getPost('nomor');
        $email = $this->request->getPost('email');
        $data = array(

            'nama' => $nama,
            'username' => $username,
            'password' => $password,
            'nomor' => $nomor,
            'email' => $email,
        );


        if ($this->UserModel->insert_user($data)) {


            $user = $this->UserModel->ceknomor($nomor)->getRowArray();


            $newSession = [
                'id' => $user['id'],
                'nama' => $user['nama'],
                'email' => $user['email'],
                'username' => $user['username'],
                'password' => $user['password'],
                'nomor' => $user['nomor'],
                'foto' => $user['foto'],
                'mood' => $user ['mood'],
                'meter' => $user['meter'],
                'takaran' => $user['takaran']
            ];
            session()->set($newSession);


            session()->setFlashdata('success', 'Berhasil Menambahkan Data');

            return redirect()->to(base_url() . '/');
        } else {
            session()->setFlashdata('error', 'Gagal Menambahkan Data');
            return redirect()->to(base_url() . 'register/user');
        }
    }

    public function profil(){
        
        $data = array (
            'data' => $this->UserModel->getById(session('id'))->getRow()
        );

        return view('profil', $data);

        
    }


    //edit progil
    public function editprofil(){
        $data = array(
            'data' => $this->UserModel->getById(session('id'))->getRow()
        );
        return view('editprofil', $data);
    }

        //insert mood
        public function updateprofil(){

            if (session()->has('id')) {
                

            $id = $this->request->getPost('id');

            $data = $this->request->getPost();
            
            $data['meter'] = $this->request->getPost('meter');
                
            $id = $this->request->getPost('id');

            $foto = $this->request->getFile('foto');
    
            $data2 = $this->UserModel->getById($id);
            $newName = '';
            if ($foto->isValid() && !$foto->hasMoved()) {
                $newName = $foto->getName();
                $foto->move(ROOTPATH . 'public/foto_profil/');
    
    
            } else {
                $newName = @$data2->foto;
    
            }
    
    
            $data['foto'] = $newName;
              
    
    
           $result = $this->UserModel->update($id, $data);

           if ($result) {
            session()->setFlashdata('mood', 'Berhasil Update data');
            return redirect()->to(base_url() . '/profil');
        } else {
            return redirect()->to(base_url() . 'editprofil')->with('error', 'Data Updated Failed');
        }
    
            } else {
                return redirect()->to(base_url() . 'login');
            }
            
        }


        public function anemia(){

            return view('anemia');
        }

        public function dhd(){
            return view('dhd');
        }


        public function detailedu($id){

            $data = array(
                'data' => $this->EdukasiModel->getById($id)->getRow()
            );

            return view('detail_edu', $data);

        }




        // website
        public function edukasilist(){

            $data = array(
                'data' => $this->EdukasiModel->getEdukasi()
            );
            return view ('edukasi/list', $data);
        }

        public function edukasiinput(){
            return view('edukasi/input');
        }

        public function edukasiedit($id){
            $data = array(
                'data' => $this->EdukasiModel->getById($id)->getRow()
            );
            return view('edukasi/edit', $data);
        }

        public function delete($id)
        {
            $this->EdukasiModel->delete($id);
            return redirect()->to(base_url() . 'edukasilist')->with('success', 'Data Deleted Successfully');
        }



        public function insertedukasiweb(){

            $judul = $this->request->getPost('judul');
            $deskripsi = $this->request->getPost('deskripsi');
            $foto = $this->request->getFile('foto');
            
         
            $newName = '';
            if ($foto->isValid() && !$foto->hasMoved()) {
                $newName = $foto->getName();
                $foto->move(ROOTPATH . 'public/edukasi/');
            }

            $data = array(
                'judul' =>$judul,
                'deskripsi' => $deskripsi,
                'foto' => $newName
            );

           $result = $this->EdukasiModel->insert_edukasi($data);

           if ($result) {
            session()->setFlashdata('mood', 'Berhasil Update data');
            return redirect()->to(base_url() . 'edukasilist');
        } else {
            return redirect()->to(base_url() . 'edukasiinput')->with('error', 'Data Updated Failed');
        }
    
            
            

        }

        public function updateedukasiweb($id){

            $judul = $this->request->getPost('judul');
            $deskripsi = $this->request->getPost('deskripsi');
            $foto = $this->request->getFile('foto');
            
         
            $newName = '';
            if ($foto->isValid() && !$foto->hasMoved()) {
                $newName = $foto->getName();
                $foto->move(ROOTPATH . 'public/edukasi/');
            }

            $data = array(
                'judul' =>$judul,
                'deskripsi' => $deskripsi,
                'foto' => $newName
            );

           $result = $this->EdukasiModel->update($id,$data);

           if ($result) {
            session()->setFlashdata('mood', 'Berhasil Update data');
            return redirect()->to(base_url() . 'edukasilist');
        } else {
            return redirect()->to(base_url() . 'edukasiinput')->with('error', 'Data Updated Failed');
        }
    
        }
    

}
