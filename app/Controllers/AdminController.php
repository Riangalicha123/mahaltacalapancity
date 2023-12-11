<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RoomModel;
use App\Models\ReservationModel;

class AdminController extends BaseController
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
    public function dashboard()
    {
        return view('Admin\index');
    }
    public function reservation()
    {
        $data = [
            'hotelrevs' => $this->reservation
            ->select('reservations.ReservationID, rooms.RoomID, rooms.RoomType, reservations.CheckInDate, reservations.CheckOutDate, reservations.NumberOfGuests, reservations.TotalAmount, reservations.Status, users.UserID,  users.FirstName,  users.LastName, reservations.UserID ')
            ->join ('rooms', 'reservations.RoomID = rooms.RoomID')
            ->join ('users', 'reservations.UserID = users.UserID')
            ->findAll()
        ]; 
        return view('Admin\Hotel\reservation', $data);
    }
        public function updateStatus($status, $reservationID)
    {
        // Get the ReservationID from the request, assuming it's sent via POST
        $allowedStatuses = ['Confirm', 'Pending', 'Cancel'];
        if (!in_array($status, $allowedStatuses)) {
            // Handle invalid status (you may redirect or show an error message)
            return redirect()->back('/admin-dashboard')->with('error', 'Invalid status');
        }

        // Update the reservation status in the database
        $updateData = ['Status' => $status];
        $this->reservation->update($reservationID, $updateData);

        // Redirect to the reservation page or wherever appropriate
        return redirect()->to('/admin/hotel/reservation')->with('success', 'Reservation status updated successfully');
    }

}
