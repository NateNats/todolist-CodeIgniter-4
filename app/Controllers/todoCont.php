<?php

namespace App\Controllers;
use App\Models\todoModel;
use App\Models\userModel;

class todoCont extends BaseController
{

    protected $session;

    public function __construct()
    {
        //this->session = \Config\Services::session();
    }

    public function user2DB()
    {
        $username = $this->gePost('');
    }

    public function todolist()
    {   
        $todoModel = model('todoModel');
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/');
        }

        $userid = $session->get('userid');
        $daftarKegiatan = $todoModel->where([
            'userid' => $userid,
            'status' => 'aktif'
        ])->findAll();
        $data = [
            'username' => $session->get('nama'),
            'daftarkegiatan' => $daftarKegiatan
        ];

        return view('todoView', $data);
    }

    public function logout()
    {   
        $session = session();
        if(!$session->get('logged_in')) {
            $msg = 'session not found';
            return view('error', $msg);
            
        } else {
            $session->destroy();
            return redirect()->to('/');
        }
    }

    public function createUser()
    {
        return view('createUser');
    }

    public function index()
    {
        return view('login');
    }

    public function authenticate()
    {
        $session = session();
        $username = $this->request->getPost('nama');
        $password = $this->request->getPost('password');
        $todoModel = model('todoModel');
        $userModel = model('userModel');
        $user = $userModel->where('nama', $username)->first();
        
        if ($user) {
            if ($password == $user['password']) {
                $session->set([
                    'userid' => $user['userid'],
                    'username' => $user['nama'],
                    'logged_in' => TRUE
                ]);
                return redirect()->to('/todolist/home');
            } else {
                $msg = 'invalid password';
                return view('error', $msg);
            }
        } else {
                $msg = 'username not found';
                return view('error', $msg);
        }

    }

    public function simpanKegiatan(): string
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/');
        }
        helper('form');
        $model = model('todoModel');

        $dataform = $this->request->getPost(['kegiatan']);
        $dataform['status'] = 'aktif';
        $dataform['userid'] = $session['userid'];
        $model->save($dataform);

        return $this->todolist();
    }

    public function selesaiKegiatan(): string
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/');
        }
        $uri = $this->request->getUri();
        $idkegiatan = $uri->getSegment(3);

        $model = model('todoModel');

        $data= [
            "status" => "selesai"
        ];

        $model ->update($idkegiatan, $data);

        return $this->todolist();
    }

    public function hapusKegiatan(): string
    {
        if (!$session->get('logged_in')) {
            return redirect()->to('/');
        }
        $uri = $this->request->getUri();
        $idkegiatan = $uri->getSegment(3);

        $model = model('todoModel');
        $model->delete($idkegiatan);

        return $this->todolist();
    }

    public function editKegiatan():string
    {
        if (!$session->get('logged_in')) {
            return redirect()->to('/');
        }
        $uri = $this->request->getUri();
        $idKegiatan = $uri->getSegment(3);
        var_dump($idKegiatan);
        exit;
    }
}
