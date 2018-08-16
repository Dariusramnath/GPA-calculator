<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //

        return "This is working number ". $id;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function getgpa(){
        //dd($req['number_courses']);
        return view('gpa');
    }

    public function calcGpa(Request $req){

        $GPA_course_array = [];
        $GPA_course_array = $req->all();

        
        unset($GPA_course_array['_token']);
        
        $GPArray = [];
        foreach($GPA_course_array as $gca){
            array_push($GPArray, $gca);
        }

        $GPA = [];
        $Credits = [];
        
        for($x = 0; $x < sizeof($GPArray); $x++){
            if(($x%2) != 0){
                array_push($Credits, $GPArray[$x]);
            }else{
                array_push($GPA, $GPArray[$x]);
            }
            
        }
        $totalCredits = 0;
        for($i=0; $i < sizeof($Credits); $i++){
            $totalCredits = $Credits[$i] + $totalCredits;
        }
        $gpa = 0;

        for($i=0; $i < sizeof($GPA); $i++){
            $gpa = ($GPA[$i]*$Credits[$i])/$totalCredits+$gpa;
        }

        return view('result', ['gpa' => $gpa]);
    }

    public function enterCourses(){
        return View('number-courses');
    }

    public function calcCourses(Request $req){
        $num_courses = $req['number_courses'];
        return view('gpa', ['num_courses' => $num_courses]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
