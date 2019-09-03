<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request, DB, AuthorizesRequests, DispatchesJobs, ValidatesRequests;
use App\users;
class DataController extends Controller
{

    public function getData() 
    {
        
        $users = DB::table('users')->get();
        return view('InsertData', ['users' => $users]);

    }

    public function insert(Request $req)
    {
        
        $validatedData = $req->validate([
            'name' => 'required|max:100',
            'email' => 'unique:users',
            'password' => 'required',
            'user_type' => 'required',
        ]);
            
        $name = $req->input('name');
        $email = $req->input('email');
        $password = $req->input('password');
        $user_type = $req->input('user_type');

        $data = array('name'=>$name, "email"=>$email, "password"=>$password, "user_type"=>$user_type);

            
        DB::table('users')->insert($validatedData);

        return response()->json('Form is successfully validated and data has been saved');
    }

    public function showData($id) 
    {
        $user = DB::table('users')->where('id', $id)->get();
        return view('editDB')->withUser($user);
    }

    public function editEmail($id) 
    {
       /* DB::table('users')
            ->where('id', $id)
            ->update(['email' => 'newnew@email.co']);
        */
            return view('editEmail')->withId($id);
    }

    
    public function userProvidedEmail($id) 
    {
        DB::table('users')
          ->where('id', $id)
          ->update(['email' => 'testnew@email.com']);
           
          return response()->json('Email Edited');
    }
    






    
      public function updateData($id){
      /*  DB::table('users')
            ->where('id', $id)
            ->update(['email' => 'teeeee@j333.com']); */
            return view('editDB')->withId($id);
            //return response()->json('something');
  }

    public function edit($id)
    {
        DB::table('users')
            ->where('id', $id)
            ->update(['email' => 'tee@hee.co']);
        
  /* Working Delete Code:      
        DB::table('users')
        ->where('id', $id)
        ->delete();
  */


         return response()->json('Edit Functionality Still Under Construction. Please Check Back Soon!'.$id);
       // return view('editDB', compact('record','id'));
    }
    public function update(Request $request, $id) {

        $this->validate($request, [
            'name' => 'required|max:100',
            'email' => 'unique:users',
            'password' => 'required',
        ]);

        $record = DB::table('users')->where('id', $id)->get()->first();
        $record->name = $request->get('name');
        $record->save();

        return response()->json('Finished');
    }

    public function delete($id)
    {
        DB::table('users')
        ->where('id', $id)
        ->delete();

        return response()->json('Item Deleted');
    }
    


}

    
