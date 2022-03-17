<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;
// use Jenssegers\Mongodb\Student;



class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student=Student::all();

        return $student;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "test1";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request;

        $student=new Student();
        $student->name=$request->name;
        $student->title=$request->title;
        //$student->save();
        if($student->save()){
            return response()->json('success');
        }
        else{
            return response()->json('error');
        }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student=Student::where('id',$id)->first();
        return $student;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student=Student::where('id',$id)->first();
        return $student;
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
        //return "test5";
        //$retailer = Retailer::findOrFail($retailer->id);

        $student=Student::findOrFail($id);
        // $student=Student::where('id',$id)->first();

        $student->name=$request->name;
        $student->title=$request->title;

        if($student->save()){
            return response()->json('success');
        }
        else{
            return response()->json('error');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student=Student::findOrFail($id);
        $student->delete();
    }
}
