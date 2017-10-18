<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Customer;
use App\Room;
use App\Transaction;

class BookingController extends Controller
{
    
    function BookingProcess (Request $req)
    {
        DB::beginTransaction();
        try
        {
            $this->validate($req,[
                'customer_id'=>'required',
                'room_id'=>'required',
                'check_in'=>'required',
                'check_out'=>'required',
                'payment'=>'required'
            ]);

            $roomId =$req->input('room_id');
        
            $book = new Transaction;
            $book->customer_id = $req->input('customer_id');
            $book->room_id = $roomId;
            $book->check_in = $req->input('check_in');
            $book->check_out = $req->input('check_out');
            $book->payment = $req->input('payment');
            $book->save();

            DB::commit();

            return response()->json(['message' => 'Booking Success!'], 200); 
        }

        catch(\Exception $e)
        {
            DB::rollback();
            return response()->json(['message' => 'Booking Failed!, exception:' + $e], 500); 
        }
    }
}
        




