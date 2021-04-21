<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Redirect;
// use Whoops\Run;

class UserGet extends Controller
{
  public function Upload(Request $request)
  {
     if ($request->has('pic')) {
       User::upLoadadImage($request->pic);
      //  session()->flash("message", "image uploaded");
       return Redirect()->back()->with("message", "image uploaded");
      //  $file_name = $request->pic->getClientOriginalName();
      //  $request->pic->storeAs('images', $file_name, 'public');
      //  $this->DeleteOldImage();
      //   // User::find(1)->update(['picture'=> $file_name]);
      //   /** auth()->user()-> to update the authenticated user in the DB */
      //   auth()->user()->update(['picture'=> $file_name]);
     }
    //  session()->flash("error", "image not uploaded");
      return Redirect()->back()->with("error", "image not uploaded");
      
  }

  protected function DeleteOldImage()
  {
    Storage::delete("public/images/". auth()->user()->picture);
  }
  public function index()
  {
    /**inserting */
      // DB::insert("insert into users(name, email, password) values(?, ?, ?)",
      //   ['jack ryan', 'ryan@gmail.com', 'spaceage']);
     
          // $data = [
          //   'name'=>'joker',
          //   'email'=>'joker@gmail.com',
          //   'password'=>'dogman',
          // ];
          // User::create($data);
    // $user = new User();
    // $user->name = 'stephen';
    // $user->email = 'stephen@gmail.com';
    // $user->password = bcrypt('stephen');
    // $user->save();
    /**inserting */
    /**update */
    // User::where('id', 3)->update(['name'=>'brue']);
    // DB::update('update users set name=? where id=?', ['john', 3]);
        /**update */
          /**select */
        // $user = DB::select("select * from users where id=?", [1]);
        // return $user;
      // $user =  User::all();
      // return $user;
         /**select */
          /**delete */
        // User::where('id', 3)->delete();
        /**delete */

        // $data = [
        //  'name' =>'john',
        //  'email'=>'john@gmail.com',
        //  'password'=>'sunburn123',
        // ];
        // User::create($data);

    //  $user = User::all();
    //  return $user;
    return view('one');
  }
}
