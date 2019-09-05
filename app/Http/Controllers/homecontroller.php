<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class homecontroller extends Controller
{
    //
    

    // public function getAll(){
    // 	$student_info=[
    // 		["name"=>"nasrin","age"=>20],
    // 	  ["name"=>"fariya","age"=>20],
    // 	  ["name"=>"taslima","age"=>25]

    // ];
    //  return view("greetings",["students"=>$student_info]);

    // }

    // public function process(){
    // 	$num1=$_REQUEST['num1'];
    // 	$num2=$_REQUEST['num2'];
    // 	$sum=$num1+$num2;
    // 	$info=["num1"=>$num1,"num2"=>$num2,"total"=>$sum];
    // 	 return view("greeting",$info);
    // }

//   
public function form(){
        return view("form");
    }

     public function process(){
        extract($_REQUEST);
        $result=DB::table('priya')->insert(
    ["name" => "$name", "mobile" =>"$mobile", "address"=>"$address"]
);
        if($result){
            echo "Insert Success";
        }
        else{
            echo "Insert Fail";
        }
    }

    public function getTable(){
        $fetchData=DB::select('SELECT * FROM priya');
        $students=['data=>$fetchdata'];
        return view("getTable",$students);
    }

    }