<?php

namespace App\Http\Controllers;

use App\Models\jobDataCollection;
use Illuminate\Http\Request;

use function Laravel\Prompts\alert;

class JobDataCollectionController extends Controller
{
     public function data_store(Request $request){

       $validated = $request->validate([
        'date' => 'required|date',
        'countryName' => 'required',
        'work' => 'required',
        'age' => 'required|integer',
        'companyName' => 'required',
        'salary' => 'required|numeric',
        'facility' => 'nullable',
        'raf' => 'nullable',
    ]);

    $job= new jobDataCollection();

     $job->date = $request->date;
     $job->countryName = $request->countryName;
     $job->work = $request->work;
     $job->age = $request->age;
     $job->companyName = $request->companyName;
     $job->salary = $request->salary;
     $job->facility = $request->facility;
     $job->raf = $request->raf;
     $job->save();

     return back()->with('success', 'Saved successfully');
     


    }

    public function edit( $id){
        $job= jobDataCollection::find($id);
         return view('edit',compact('job'));
    }


      public function update(Request $request,$id){

       $validated = $request->validate([
        'date' => 'required|date',
        'countryName' => 'required',
        'work' => 'required',
        'age' => 'required|integer',
        'companyName' => 'required',
        'salary' => 'required|numeric',
        'facility' => 'nullable',
        'raf' => 'nullable',
    ]);

    $job=  jobDataCollection::find($id);

     $job->date = $request->date;
     $job->countryName = $request->countryName;
     $job->work = $request->work;
     $job->age = $request->age;
     $job->companyName = $request->companyName;
     $job->salary = $request->salary;
     $job->facility = $request->facility;
     $job->raf = $request->raf;
     $job->save();

     return redirect()->route('mainPage')->with('success','data update successfully');
     


    }

    public function close(){
        return redirect()->route('mainPage');
    }

    // Delete start from here
    public function delete($id){
   
        $job= jobDataCollection::find($id);
        $job->delete();
        return redirect()->back();
     
    }
}
