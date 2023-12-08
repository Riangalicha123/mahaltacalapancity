<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RoomModel;
class GuestController extends BaseController
{
    private $rooms;

    function __construct(){
        $this->rooms = new RoomModel();
    }
    public function index()
    {
        //
    }
    
    public function home()
    {
        $data = [
            'rooms' => $this->rooms->findAll(),
        ]; 
        return view('Hotel\home', $data);
    }
    public function about()
    {
        return view('Hotel\about');
    }
    public function room()
    {
        $data = [
            'rooms' => $this->rooms->findAll(),
        ]; 
        return view('Hotel\room', $data);
    }
    public function gallery()
    {
        return view('Hotel\gallery');
    }
    
    public function blog()
    {
        return view('Hotel\blog');
    }
    public function contact()
    {
        return view('Hotel\contact');
    }
}
