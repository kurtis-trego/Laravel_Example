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
        ]);
            
        $name = $req->input('name');
        $email = $req->input('email');
        $password = $req->input('password');
            
        $data = array('name'=>$name, "email"=>$email, "password"=>$password);
            
        DB::table('users')->insert($validatedData);

        return response()->json('Form is successfully validated and data has been saved');

     

    }
    /*
      public static function updateData($id,$data){
    DB::table('users')
      ->where('id', $id)
      ->update($data);
  }
*/
    public function edit(Request $request, $id)
    {
      /*  DB::table('users')
        ->where('id', $id)
        ->update($data);
        echo "Editing";
        //return back()->withInput();*/

        $record = DB::table('users')->where('id', $id)->get()->first();

        return view('editDB', compact('record','id'));
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

        return "Finished";
        /*
                $student = Student::find($id);
        $student->first_name = $request->get('first_name');
        $student->last_name = $request->get('last_name');
        $student->save();
        return redirect()->route('student.index')->with('success', 'Data Updated'
        */

        


    }

    public function delete($id)
    {
        DB::table('users')
        ->where('id', $id)
        ->delete();

        return response()->json('Item Deleted');
    }
    


}

    
