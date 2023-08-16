<?php

namespace App\Http\Controllers;

use App\Models\Items;
use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\SignUp;

class OrderController extends Controller
{
   
    public function order_user($id)
    {
        $records = Items::find($id);
        return view('order', compact('records'));
        
    }
    public function storeorder(Request $request)
    {
        $request->validate([
            
        ]);    
        $uorder= new Order();
        $uorder->eid = $request->eid;
        $uorder->pid = $request->pid;
        $uorder->pname = $request->pname;
        $uorder->price = $request->price;
        $uorder->qty = $request->qty;
        $uorder->tot_amt = $request->tot_amt;
        $uorder->address = $request->address;
        $uorder->save();
        //reditect to index pagge
        
        return redirect('delivery')->with('succsess', 'file is uplodeds');
    }
    public function deliver(){
        return view('delivery');
    }

     

}
