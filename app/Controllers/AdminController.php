<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController
{
    public function dashboard()
    {
        return view('Admin/index');
    }
    public function index()
    {
        return view('feedback_form');
        return view('contact_form');
    }

    public function submitFeedback()
    {
       
        $feedback = $this->request->getPost('feedback');

        
        echo 'Feedback submitted: ' . $feedback;
    }
    public function submitForm()
    {
       
        $response = [
            'status' => 'success',
            'message' => 'Form submitted successfully',
        ];

        return json_encode($response);
    }
}
