<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items;
use Illuminate\Contracts\Session\Session;
use App\Models\Order;
use App\Models\SignUp;
use App\Models\Category;
use Illuminate\Support\Facades\DB;


class adminController extends Controller
{
    //
    //admin home page
    public function indexFun()
    {
        if (session()->has('admin'))//session::has it called with (only one time show) |Session()->has()it called with (long time)
         {
             return view('/A_index');
        }
        else
        {
        return view('/signin');
        }
    }
    //
    //admin home order manage page
    public function orderFun()
    {
        $records = Order::all();
        return view('manage_order', compact('records'));
    }
    //

    //admin item manage page
    public function item_manageFun()
    {
        $items = DB::table('items')
            ->join('category', 'category.id', '=', 'items.cid')
            ->select('items.id','items.image','items.item_name', 'items.price', 'items.description', 'items.discount', 'category.category')
            ->get();

       
        return view('manage_item',['items'=>$items]);
    }

    public function itemFun()
    {
        $category=Category::all();
        return view('item',compact('category'));
    }

    //isertrecord
    public function storeproduct(Request $request)
    {

        $category=Category::where('category','=', $request->category)->first();
        // echo "<pre>";
        // print_r($category->id);
        // die;
        $request->validate([
            'image' => 'required|image|max:24000|mimes:jpg,gif,png,jpeg,tiff,'
        ]);
        //create the filename with new name
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $newFile = time() . '.' . $extension;
        $file->move('assets/img/gallery/', $newFile);

        //Stpre the data in the database able
        $f = new Items();
        $f->item_name = $request->item_name;
        $f->image = 'assets/img/gallery/' . $newFile;
        $f->cid = $category->id;
        $f->description = $request->description;
        $f->price = $request->price;
        $f->discount = $request->discount;
        $f->save();
        //reditect to index pagge
        return redirect('item_manage')->with('succsess','new recoered inseted');
    }

    //update
    public function update_to($id)//id to get all the detail of items
    {
        $uitem = Items::find($id);
        return view('update_item', compact('uitem'));
    }

    public function update_from(Request $request, $id)
    { //updates



        /*    $f = Items::find($id); 
        
       
       
 */
        if ($request->image) {
            $request->validate([
                'image' => 'required|image|max:1024|mimes:jpg,gif,png,jpeg,tiff,',
                'item_name' => 'required',
                'price' => 'required'
            ]);

            $f = Items::find($id);
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $newFile = time() . '.' . $extension;
            $f->image = 'assets/img/gallery/' . $newFile;
            $file->move('assets/img/gallery/', $newFile);
            $f->item_name = $request->item_name;
            $f->description = $request->description;
            $f->price = $request->price;
            $f->discount = $request->discount;
            $f->update();
        } else {
            $request->validate([
                // 'image'=>'required|image|max:1024|mimes:jpg,gif,png,jpeg,tiff,',
                'item_name' => 'required',
                'price' => 'required'
            ]);
            $f = Items::find($id);
            $f->item_name = $request->item_name;           
            $f->description = $request->description;
            $f->price = $request->price;
            $f->discount = $request->discount;
            $f->update();
        }

        return redirect('/item_manage')->with('succsess', 'record is updated');
    }

    //delete
    public function delete_itemFun($id)
    {
        $emp = Items::find($id);
        $emp->delete();
        return redirect('/item_manage')->with('status', 'the record is deleted');
    }

    //
    //admin side user manage page
    public function userFun()
    {
        $user = SignUp::all();
        return view('manage_user', compact('user'));
        
    }

    public function logoutFun()
    {
       if (session()->has('emailid')) //session::has it called with (only one time show) |Session()->has()it called with (long time)
       {
          session()->forget('emailid');
          return view('/index');
       }
       else {
          session()->forget('admin');
          return redirect('/admin');
       }
    }
}
