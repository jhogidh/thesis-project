<?php

namespace App\Controllers;

use App\Models\TbSoal;
use App\Models\TbSiswa;
use App\Models\TBUser;
use App\Models\TbMateri;
use CodeIgniter\Session\Session;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }
    public function praktik()
    {
        return view('praktik');
    }
    public function materiguru()
    {
        $db = db_connect();
        $query = $db->query('SELECT * FROM tb_materi');
        $data['materi'] = $query->getResult();

        return view('materiguru', $data);
    }
    public function bantuan()
    {
        return view('bantuan');
    }
    public function tentangkjd()
    {
        return view('TentangKJD');
    }
    public function materi()
    {
        return view('materi');
    }
    public function login()
    {
        return view('login');
    }
    public function createadmin()
    {
        return view('createadmin');
    }


    public function tambahadmin()
    {
        $adminModel = new TbUser();
    
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $nama = $this->request->getPost('nama');
    
        $existingUser = $adminModel->where('username', $username)->first();
    
        if ($existingUser) {
            return redirect()->to(base_url('createadmin'))->with('error', 'Username sudah digunakan.');
        }

        $data = [
            'username' => $username,
            'password' => $password,
            'nama_user' => $nama, 
        ];
    
        $adminModel->insert($data);
    
        // Redirect ke halaman tujuan
        return redirect()->to(base_url('createadmin'))->with('success', 'Admin berhasil ditambahkan.');
    }

    // HomeController.php
    public function delete_materi($id)
    {
        // Ambil informasi file dari database
        $materiModel = new TbMateri();
        $file = $materiModel->find($id);

        if (!$file) {
            // File tidak ditemukan
            return redirect()->to(base_url('admin-materitambahan'))->with('error', 'File tidak ditemukan.');
        }

        // Hapus file dari sistem file
        if (file_exists(FCPATH . 'uploads/' . $file['nama_materi'])) {
            unlink(FCPATH . 'uploads/' . $file['nama_materi']);
        }

        // Hapus file dari database
        $materiModel->delete($id);

        // Redirect kembali dengan pesan sukses
        return redirect()->to(base_url('admin-materitambahan'))->with('success', 'File berhasil dihapus.');
    }

    public function upload()
    {
        $file = $this->request->getFile('materi');

        // Validasi ukuran file
        if ($file->isValid() && $file->getClientMimeType() === 'application/pdf' && $file->getSize() < 10 * 1024 * 1024) {
            $fileName = $file->getName(); // Dapatkan nama file asli
            $file->move(ROOTPATH . 'public/uploads', $fileName);

                // Simpan nama file ke database
                $materiModel = new TbMateri();
                $materiModel->save([
                    'nama_materi' => $fileName,
                ]);
        
                return redirect()->to(base_url('admin-materitambahan'));
            } else {
                // File tidak valid, berikan pesan error kepada pengguna
                $errorMessage = 'Ukuran file harus kurang dari 10MB dan berformat PDF.';
                if ($file->getSize() >= 10 * 1024 * 1024) {
                    $errorMessage = 'Ukuran file melebihi batas maksimum (10MB).';
                }
                session()->setFlashdata('error', $errorMessage);
                return redirect()->to(base_url('admin-materitambahan'));
            }
        }
        public function ambil_data_siswa($id)
        {
            $model = new TbSiswa();
            $siswa = $model->find($id);

            // Mengembalikan data siswa dalam format JSON
            return $this->response->setJSON($siswa);
            
        }
        public function delete_data_siswa($id)
        {
            try {
                $siswaModel = new TbSiswa();
                $siswaModel->delete($id);

                // Redirect ke halaman lain atau tampilkan pesan sukses jika diperlukan
                return redirect()->to(base_url('admin-datasiswa'))->with('success', 'Data siswa berhasil dihapus.');
            } catch (\Exception $e) {
                // Tangani kesalahan yang terjadi
                $errorMessage = $e->getMessage();
                // Tampilkan pesan kesalahan atau lakukan tindakan yang sesuai, seperti logging
                return redirect()->to(base_url('admin-datasiswa'))->with('error', 'Gagal menghapus data siswa. Error: ' . $errorMessage);
            }
        }

    public function update_data_siswa()
    {
        // Tampilkan data yang diterima dari form
        $id = $this->request->getPost('id');
        $nama = $this->request->getPost('nama');
        $tes1 = $this->request->getPost('tes1');
        $tes2 = $this->request->getPost('tes2');
        var_dump($id, $nama, $tes1, $tes2);

        try {
            // Proses pembaruan data siswa di database
            $data = [
                'nama_siswa' => $nama,
                'tes1' => $tes1,
                'tes2' => $tes2
            ];

            $siswaModel = new TbSiswa();
            $siswaModel->update($id, $data);

            // Redirect ke halaman lain atau tampilkan pesan sukses jika diperlukan
            return redirect()->to(base_url('admin-datasiswa'));
        } catch (\Exception $e) {
            // Tangani kesalahan yang terjadi
            $errorMessage = $e->getMessage();
            // Tampilkan pesan kesalahan atau lakukan tindakan yang sesuai, seperti logging
            return redirect()->to(base_url('admin-datasiswa'))->with('error', 'Gagal memperbarui data siswa. Error: ' . $errorMessage);
        }
    }
    public function admin()
    {
        if(! session()->get('logged_in')){
            // maka redirct ke halaman login
            return redirect()->to(base_url('login'));
        }else{
            
            return view('admin');
        }
    }
    public function admin_datasiswa()
    {

        if(! session()->get('logged_in')){
            // maka redirct ke halaman login
            return redirect()->to(base_url('login'));
        }else{
            
            $db = db_connect();
            $query = $db->query('SELECT * FROM tb_siswa');
            $data['siswa'] = $query->getResult();

            return view('datasiswa', $data);
        }
    }
    public function admin_materitambahan()
    {
        if(! session()->get('logged_in')){
            // maka redirct ke halaman login
            return redirect()->to(base_url('login'));
        }else{
            
            $db = db_connect();
            $query = $db->query('SELECT * FROM tb_materi');
            $data['materi'] = $query->getResult();

            return view('materitambahan', $data);
    }
        }
        
    public function tes1()
    {
        $db = db_connect();
        $query = $db->query('SELECT * FROM tb_soal');
        $data['soal'] = $query->getResult();

        return view('tes1', $data);
    }

    public function tes2()
    {
        $db = db_connect();
        $query = $db->query('SELECT * FROM tb_soal');
        $data['soal'] = $query->getResult();

        return view('tes2', $data);
    }

    public function nilai()
    {
        $db = db_connect();
        $query = $db->query('SELECT *, (tes1 + tes2) AS rata_rata FROM tb_siswa ORDER BY rata_rata DESC LIMIT 3');
        $data['nilai'] = $query->getResult();

        return view('nilai', $data);
    }

    public function tambahsiswa()
    {
        
        $dataModel = new TbSiswa();
        $soalModel = new TBSoal();

        $nilai = 0;

            for($i=1;$i<21;$i++){
                if($this->request->getPost('pil_soal'.$i) == $soalModel->getJawabanBenarById($i)){
                    $nilai += 5;
                }
            }
                    

        $data = [
            'id_siswa' => $this->request->getPost('id_siswa'),
            'nama_siswa' => $this->request->getPost('nama_siswa'),
            'tes1' => $nilai,
        ];

        $dataModel->insert($data);

        // Redirect ke halaman tujuan
        return redirect()->to(base_url(''));
    }

    public function editsiswa()
    {
        
        $dataModel = new TbSiswa();
        $soalModel = new TBSoal();

        $nilai = 0;

        for ($i = 1; $i < 21; $i++) {
            if ($this->request->getPost('pil_soal' . $i) == $soalModel->getJawabanBenarById($i)) {
                $nilai += 5;
            }
        }

        $idSiswa = $this->request->getPost('id_siswa');

        $data = [
            'nama_siswa' => $this->request->getPost('nama_siswa'),
            'tes2' => $nilai,
        ];

        $dataModel->update($idSiswa, $data);

        // Redirect ke halaman tujuan
        return redirect()->to(base_url(''));
    }

    public function petunjuk()
    {
        return view('petunjuk');
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/login'));
    }


    public function loginsubmit()
    {
        
        $session = session();
        $model = new TBUser();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $data = $model->where('username', $username)->first();
        if($data){
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if($password == $pass){
                $ses_data = [
                    'id_user'      => $data['id_user'],
                    'username'     => $data['username'],
                    'nama_user'    => $data['nama_user'],
                    'logged_in'    => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to(base_url('/admin'));
            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to(base_url('/login'));
            }
        }else{
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to(base_url('/login'));
        }
    }

    public function mulaipraktik()
    {
        return view('mulaipraktik');
    }
    public function k3lh()
    {
        return view('materi/k3lh');
    }
    public function bios()
    {
        return view('materi/bios');
    }
    public function instalasios()
    {
        return view('materi/instalasios');
    }
    public function instalasidriver()
    {
        return view('materi/instalasidriver');
    }
    public function instalasisoftware()
    {
        return view('materi/instalasisoftware');
    }
    public function perakitankomputer()
    {
        return view('materi/perakitankomputer');
    }
    public function perawatanhardware()
    {
        return view('materi/perawatanhardware');
    }
    public function analisissoftware()
    {
        return view('materi/analisissoftware');
    }
    public function analisishardware()
    {
        return view('materi/analisishardware');
    }
}
