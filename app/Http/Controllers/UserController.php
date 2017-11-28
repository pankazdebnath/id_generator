<?php

namespace App\Http\Controllers;
use App\User;
use Session;
use Illuminate\Http\Request;
use\App\file;
use Illuminate\Support\Facades\Input;
use PDF;

class UserController extends Controller
{

	public function insert(Request $request){
        $this->validate($request,[
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
                'image'=> 'required',
                'b_group'=> 'required',
                'cell'=> 'required',
                'bday'=> 'required',
                'gender'=> 'required'
            ]);

        $user= new User();
        $user->name = Input::get('name');
        $user->email = Input::get('email');
        $user->b_group = Input::get('b_group');
        $user->password = Input::get('password');
        $user->cell = Input::get('cell');
        $user->bday = Input::get('bday');
        $user->gender = Input::get('gender');

		$errors= array();
		$file_name = time().$_FILES['image']['name'];
		$file_tmp =$_FILES['image']['tmp_name'];

		if(empty($errors)==true){
		 move_uploaded_file($file_tmp,base_path()."/public/img/".$file_name);
		}

		$user->image = $file_name;
		$user->save();

       /* $userData = $request->all();
        User::create($userData);*/
        Session::flash('success', 'New User added');
        return redirect()->route('index');


    }


	public function index()
    {
    	$user = User::orderBy('id', 'asc')->get();
        return view('index',['user'=>$user]);
    }

    public function add()
    {
        return view('add');
    }

    public function details($id)
    {
    	$user = User::findOrFail($id);
        return view('details', ['user'=>$user]);

        $user = file::all();
        return view('show');
    }

    public function edit($id)
    {
    	$user = User::findOrFail($id);
        return view('edit', ['user'=>$user]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'image'=> 'required',
            'b_group'=> 'required',
            'cell'=> 'required',
            'bday'=> 'required',
            'gender'=> 'required'

        ]);
        $userData = $request->all();
        User::findOrFail($id)->update($userData);
        Session::flash('success', 'User info updated!');
        return redirect()->route('index');
    }

    public function delete($id)
    {

        User::findOrFail($id)->delete(); 
        Session::flash('success', 'User Deleted!');
        return redirect()->route('index');  
    }

    public function pdf()
    {
    	$user = User::all();
    	$pdf = PDF::loadView('userpdf', ['user'=> $user]);
    	return $pdf->download('User_List.pdf');
    }

    public function u_id($id)
    {
    	$user = User::find($id);
    	$pdf = PDF::loadView('u_id', ['user'=> $user]);
    	return $pdf->download('id_card.pdf');
    }
}
