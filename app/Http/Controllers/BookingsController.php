<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingsController extends Controller
{
    //protected $data;
    
    public function index(){
        $bookings = Booking::paginate(2);
        return view('pages/index')->with("bookings", $bookings);
    }

    public function create(){
        return view('pages/create');
    }
    
    public function store(Request $request){

        $input = $request->all();
        Booking::create($input);
            return redirect('booking')->with('flash_message', 'Contact Addedd!'); 
            
    }

    public function show($id){
            $booking = Booking::find($id);
            return view('pages/show')->with("booking", $booking);
    }

    public function edit($id){
            $booking = Booking::find($id);

            return view('pages/edit')->with("booking", $booking);

    }

    public function update(Request $request, $id){
        $booking = Booking::find($id);
        $input = $request->all();
        $booking->update($input);
        return redirect('booking')->with('flash_message', 'Contact Updated!');  
    }

    public function destroy($id){
        $booking = Booking::find($id);
        $booking->delete();
        echo "Successfully Deleted";

    }
}
