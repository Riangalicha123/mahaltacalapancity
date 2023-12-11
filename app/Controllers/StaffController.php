<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RoomModel;
use App\Models\ReservationModel;

class StaffController extends BaseController
{
    private $rooms;
    private $reservation;

    function __construct(){
        helper(['form']);
        $this->rooms = new RoomModel();
        $this->reservation = new ReservationModel();
    }
    public function index()
    {
        //
    }
    public function home()
    {
        
        return view('HotelStaff\index');
    }
    public function reservation()
    {
        $data = [
            'hotelrevs' => $this->reservation
            ->select('reservations.ReservationID, rooms.RoomID, rooms.RoomType, reservations.CheckInDate, reservations.CheckOutDate, reservations.NumberOfGuests, reservations.TotalAmount, reservations.Status')
            ->join ('rooms', 'reservations.RoomID = rooms.RoomID')
            ->findAll()
        ]; 
        return view('HotelStaff\reservation', $data);
    }
    public function addReservation(){
        helper(['form']);
        $validationRules = [
            'CheckInDate' => 'required',
            'CheckOutDate' => 'required',
            'NumberOfGuests' => 'required',
            'RoomType' => 'required',
        ];

        if (!$this->validate($validationRules)) {
            // Validation failed, return with validation errors
            $validationErrors = $this->validator->getErrors();
            return view('/room', ['validationErrors' => $validationErrors]);
        }
        $newReservationData = [
            'CheckInDate' => $this->request->getPost('CheckInDate'),
            'CheckOutDate' => $this->request->getPost('CheckOutDate'),
            'NumberOfGuests' => $this->request->getPost('NumberOfGuests'),
        ];

        $inputRoomType = $this->request->getPost('RoomType');


        $roomData = $this->rooms->where('RoomType', $inputRoomType)->first(); 


        if ($roomData) {

            $newReservationData['RoomID'] = $roomData['RoomID'];

            $inserted = $this->reservation->insert($newReservationData);

            if ($inserted) {

                return redirect()->to(base_url('/room'))->with('success', 'Reservation added successfully.');
            } else {

                return redirect()->to(base_url('/room'))->with('error', 'Failed to add reservation. Please try again.');
            }
        } else {

            return redirect()->to(base_url('/'))->with('error', 'Invalid Username or room_type. Please check your input.');
        }
    }
    public function room()
    {
        $data = [
            'rooms' => $this->rooms->findAll(),
        ]; 
        return view('HotelStaff\room', $data);
    }
    public function addRoom(){
        $file = $this->request->getFile('Image');
    
        // Check if a file is uploaded
        if ($file) {
            $newFileName = $file->getRandomName();
    
            $data = [
                'RoomNumber' => $this->request->getVar('RoomNumber'),
                'RoomType' => $this->request->getVar('RoomType'),
                'Description' => $this->request->getVar('Description'),
                'PricePerNight' => $this->request->getVar('PricePerNight'),
                'AvailabilityStatus' => $this->request->getVar('AvailabilityStatus'),
                'Image'                => $newFileName
            ];
    
            $rules = [
                'Image' => [
                    'uploaded[Image]',
                    'max_size[Image,10240]', // Maximum file size in kilobytes (adjust as needed)
                    'ext_in[Image,png,jpg,gif]' // Allow only files with the specified extensions
                ]
            ];
    
            // Validate the file and other form data
            if ($this->validate($rules)) {
                // Check if the file is valid and has not been moved
                if ($file->isValid() && !$file->hasMoved()) {
                    // Move the file to the 'uploads' directory
                    if ($file->move(FCPATH . 'uploads/', $newFileName)) {
                        // Save product data to the database
                        $this->rooms->save($data);
                    } else {
                        // Handle file move error
                        echo $file->getErrorString() . ' ' . $file->getError();
                    }
                }
            } else {
                // Handle validation errors
                $data['validation'] = $this->validator;
            }
        } else {
            echo('error');
        }
    
        return redirect()->to('/staff-hotelroom');
    }
    

    public function deleteRoom($RoomID = null){
        $this->rooms->delete($RoomID);
        return redirect()->to('/staff-hotelroom');
    }


    public function updateRoom(){

        $file = $this->request->getFile('Image');
    
        // Check if a file is uploaded
        if ($file) {
            $newFileName = $file->getRandomName();
    
            $data = [
                'RoomID' => $this->request->getVar('RoomID'),
                'RoomNumber' => $this->request->getVar('RoomNumber'),
                'RoomType' => $this->request->getVar('RoomType'),
                'Description' => $this->request->getVar('Description'),
                'PricePerNight' => $this->request->getVar('PricePerNight'),
                'AvailabilityStatus' => $this->request->getVar('AvailabilityStatus'),
                'Image'                => $newFileName
            ];
    
            $rules = [
                'Image' => [
                    'uploaded[Image]',
                    'max_size[Image,10240]', // Maximum file size in kilobytes (adjust as needed)
                    'ext_in[Image,png,jpg,gif]' // Allow only files with the specified extensions
                ]
            ];
    
            // Validate the file and other form data
            if ($this->validate($rules)) {
                // Check if the file is valid and has not been moved
                if ($file->isValid() && !$file->hasMoved()) {
                    // Move the file to the 'uploads' directory
                    if ($file->move(FCPATH . 'uploads/', $newFileName)) {
                        // Save product data to the database
                        $this->rooms->save($data);
                        
                    } else {
                        // Handle file move error
                        echo $file->getErrorString() . ' ' . $file->getError();
                    }
                }
            } else {
                // Handle validation errors
                $data['validation'] = $this->validator;
            }
        } else {
            echo('error');
        }
        return redirect()->to('/staff-hotelroom');
    }
}

