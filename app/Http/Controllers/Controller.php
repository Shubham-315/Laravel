<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use DB;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function insert(Request $req)
    {
    	$name=$req->input('name');
    	$address=$req->input('address');
    	$phone=$req->input('phone');
    	$email=$req->input('email');
    	$pname=$req->input('pname');
    	$school=$req->input('school');
    	$class=$req->input('class');

    	$data =  array('name' => $name, 'address'=>$address, 'phone'=>$phone, 'email'=>$email, 'pname'=>$pname, 'school'=>$school, 'class'=>$class);

    	DB::table('student')->insert($data);
    	echo("Your data is successfully added");
    	$this->getData();
    }

    function getData()
    {
    	$data['data']=DB::table('student')->get();

    	if(count($data)>0)
    	{
    		return view('addStudent',$data);
    	}
    	else
    	{
    		return view('addStudent');
    	}
    }
}
