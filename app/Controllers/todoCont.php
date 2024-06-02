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
        return view('todoView');
    }

    public function logout()
    {
        return view('login');
    }

    public function createUser()
    {
        return view('createUser');
    }

    public function login()
    {
        $username = $this->request->getPost();
        $password = $this->request->getPost();
        $todoModel = model('todoModel');
        $userModel = model('userModel');

        $data = [
            'daftarkegiatan' => $model->where([
                'user' =>$username,
                'status' => 'aktif'
            ])->findAll()
        ];

        $dataId = [
            'password' => $userModel->where('user', $username)->findAll()
        ];

        foreach ($dataId as $data);
            if(password_verify($password, $data->password)) {
                return redirect()->to('/');
            }

    }

    public function index(): string
    {
        $model = model('todoModel');
        $data = [
            'daftarkegiatan' => $model->where('status', 'aktif')->findAll()
        ];

        return view('todoView', $data);
    }

    public function simpanKegiatan(): string
    {
        helper('form');
        $model = model('todoModel');

        $dataform = $this->request->getPost(['kegiatan']);
        $dataform['status'] = 'aktif';
        $model->save($dataform);

        return $this->coba();
    }

    public function selesaiKegiatan(): string
    {
        $uri = $this->request->getUri();
        $idkegiatan = $uri->getSegment(3);
        //var_dump($idkegiatan);
        //exit;

        $model = model('todoModel');

        $data= [
            "status" => "selesai"
        ];

        $model ->update($idkegiatan, $data);

        return $this->coba();
    }

    public function hapusKegiatan(): string
    {
        $uri = $this->request->getUri();
        $idkegiatan = $uri->getSegment(3);

        $model = model('todoModel');
        $model->delete($idkegiatan);

        return $this->coba();
    }

    public function editKegiatan():string
    {
        $uri = $this->request->getUri();
        $idKegiatan = $uri->getSegment(3);
        var_dump($idKegiatan);
        exit;
    }
}
