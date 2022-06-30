<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

use App\Models\Feedback;

class AdminController extends Controller
{

//all users list..
public function allusers(){
  
 $allusers= DB::select('select * from users');
 return view('dashboard', ['allusers'=>$allusers]);

}

//users feedback..
public function index() {
    $feedbacks = DB::select('select * from feedbacks');
    return view('users-feedback', ['feedbacks'=>$feedbacks] );
 }

 public function show($id) {
   $users = DB::select('select * from feedbacks where id = ?',[$id]);
   $select =DB::select('select * from drop_names');
   return view('updatefeedback',['users'=>$users, 'select'=>$select]);
}

public function edit(Request $request,$id) {
   $drop_names = $request->input('drop_names');
   $message = $request->input('message');
   DB::update('update feedbacks set drop_names = ? , message = ? where id = ?',[$drop_names, $message, $id]);
   echo "<script>alert('update success');
   window.location = '/users-feedback'; </script>";
   
}

 public function delete($id){
    DB::delete('delete from feedbacks where id = ?',[$id]);
    echo "<script>alert('deleted!');
    window.location = '/users-feedback'; </script>";
 }



//add names...
public function insert(Request $request){
   $name = $request->input('names');
   DB::insert('insert into drop_names (names) values(?)',[$name]);
   echo "<script>alert('Name Addded');
   window.location = '/add-names'; </script>";

}

public function selectnames(){
     $users = DB::select('select * from drop_names');
     return view('add-names', ['users'=>$users]);  
   }
   
   public function showselectname($id){   
      $select= DB::select('select * from drop_names where id= ? ', [$id]);
      return view('updatenames', ['select'=>$select]);
      
      }
      
public function selectnameupdate(Request $request, $id){
   $names= $request->input('names');
   
   DB::update('update drop_names set names= ? where id = ?',[$names, $id]);
   echo "<script>alert('update success');
   window.location = '/add-names'; </script>";
}

public function selectnamedelete($id){
   DB::delete('delete from drop_names where id= ?',[$id]);
    echo "<script>alert('deleted!');
    window.location = '/add-names'; </script>";
 }


/**logout* */
public function logout(){

   if(Auth::check()){

       Auth::logout();
       return Redirect('home');

   }
}

}
