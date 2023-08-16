<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items;
use App\Models\SignUp;
use App\Models\Admin;
use App\Models\Category;

class sweets_namkeen extends Controller
{
   //userver level
   public function indexFun()
   {
      return view('index');
   }

   //gallary
   public function galleryFun()
   {
      $records = Items::all();

      return view('Gallery', compact('records'));
   }

   //sinup
   public function signupFun()
   {
      return view('signup');
   }
   //signin
   public function signinFun()
   {
      return view('signin');
   }
   public function login(Request $request)
   {
      $request->validate([
         'emailid' => 'required',
         'pwd' => 'required'
      ]);

      $userfound = SignUp::where('emailid', '=', $request->emailid)->first();
      $adminfound = Admin::where('emailid', '=', $request->emailid)->first();
      // var_dump($userfound);
      // die;
      if ($userfound) {
         if ($userfound->pwd == md5($request->pwd)) {
            $request->session()->put('emailid', $userfound->emailid);
            return redirect('/index')->with('login', 'your proccess is complite succsessfully');
         } else {
            //$uname = $request->emailid;
            return redirect('signin');
         }
      } elseif ($adminfound) {
         if ($adminfound->password == $request->pwd) {
            $request->session()->put('admin', $adminfound->emailid);
            return redirect('/admin')->with('login', 'your proccess is complite succsessfully');
         } else {
            //$uname = $request->emailid;
            return redirect('signin');
         }
      } else {
         return redirect('/signin')->with('notfound', 'user is not found');
      }
      //return redirect()->route('index')->with('login', 'your proccess is complite succsessfully');
   }

   //logout



   //items
   public function menuFun()
   {
      return view('menu');
   }

   public function storeUser(Request $request)
   {
      $this->validate($request, [
         'emailid' => 'required',
         'pwd' => 'required'
      ]);
      $signup = new SignUp();
      $signup->uname = $request->uname;
      $signup->emailid = $request->emailid;
      $signup->pwd = md5($request->pwd);
      $signup->save();
      return redirect()->route('signin')->with('signup', 'registretion succsessfully');
   }
   //admin level
   public function items()
   {
      $categories = Category::all();
      $a = 1;
      $b = 3;

      $sweets = Items::where('cid', '=', $a)->get();
      $namkeen = Items::where('cid', '=', $b)->get();
      $records = Items::whereIn('cid', [$a, $b])->get();

      return view('menu', compact('records', 'sweets', 'namkeen', 'categories'));
   }
}
