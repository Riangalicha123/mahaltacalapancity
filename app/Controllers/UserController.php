<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class UserController extends BaseController
{   
    private $users;

    function __construct(){
        helper(['form']);
        $this->users = new UserModel();
    }
    public function index()
    {
        //
    }

    public function loginregister(){
        helper(['form']);
        return view('Signin_up');
    }
    public function register(){
        helper(['form']);
        $rules = [
            'Email' => 'required|min_length[4]|max_length[100]|valid_email|is_unique[users.Email]',
            'Password' => 'required|min_length[4]|max_length[50]',
            'confirmPassword' => 'matches[Password]'
        ];

        if ($this->validate($rules)){
            $data = [
                'Username' => $this->request->getVar('Username'),
                'Email' => $this->request->getVar('Email'),
                'Password' => password_hash($this->request->getVar('Password'),PASSWORD_DEFAULT),
                'Users_Role' => 'Guest'
            ];
            $this->users->insert($data);
            return redirect()->to('/login');
        }else{
            $data['validation'] = $this->validator;
            echo view('Signin_up',$data);
        }
    }
    public function LoginAuth(){
        $session = session();
        $email = $this->request->getVar('Email');
        $password = $this->request->getVar('Password');

        $data = $this->users->where('Email',$email)
                            ->first();
        if($data){
            $pass = $data['Password'];
            $authenticatedPassword = password_verify($password,$pass);

            if($authenticatedPassword){
                $ses_data = [
                    'id' => $data['MahaltaId'],
                    'username' => $data['Email'],
                    'isLoggedIn' => TRUE,
                    'userRole' => $data['Users_Role'],
                ];
                $session->set($ses_data);

                if ($data['Users_Role'] === 'Admin') {
                return view('Admin/index'/* ,['products'=>$this->products->findAll()] */);
                } else if ($data['Users_Role'] === 'Staff') {
                    return view('Staff/index'/* ,['products'=>$this->products->findAll()] */);
                } else if ($data['Users_Role'] === 'Guest') {
                    return redirect()->to('/');
                }
            }else{
                $session->setFlashdata('msg','Password is incorrect');
                return redirect()->to('/login');
            }
        }else{
            $session->setFlashdata('msg','Email does not exist');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy(); // Destroy the user's session
        return redirect()->to('/'); // Redirect the user to the login page or any other page after logout
    }
}
