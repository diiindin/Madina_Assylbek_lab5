<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "OK!";
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
    public function show($id,$i,$d)
    {
        $students = $this->get_students();
        $date_of_birth = $this->get_date();
        $age = $this->get_age();
    return view("info", ["name"=>$students[$id],"birthday"=>$date_of_birth[$i],"age"=>$age[$d]]);
    }

    public function get_students() {
        static $students = array(0 => "Madina", 1 => "Anel", 2 => "Aikerim");
        return $students;
    }
    
    public function get_date() {
        static $date_of_birth = array(0 => "29.05", 1 => "04.09", 2 => "01.11");
        return $date_of_birth;
    }
    public function get_age() {
        static $age = array(0 => "19", 1=> "18", 2 => "19");
        return $age;
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
