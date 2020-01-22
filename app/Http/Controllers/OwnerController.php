<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Project;
use App\User;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user_id=auth()->user()->id;
        $user=User::findOrFail($user_id);
        $projects=$user->projects; //get all Owenr projects 
        return view('owner.Ohome',compact('projects'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('owner.addproject');
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
        $user_id=auth()->user()->id;
        $data = request()->validate([ 
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'skills' => ['required', 'string', ],
            'budget' => ['required'],
            'duration' => ['required',],
        ]);
        $newproject = Project::create([
            'Pname' => $data['title'],
            'price' => $data['budget'],
            'time' => $data['duration'],
            'skills'=> $data['skills'],
            'description'=> $data['description'],
            'user_id'=> $user_id,

        ]);
        if($newproject){
            return redirect()->route('Ownerhome');
        }
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function showProject($id)
    // {
    //     //
    //     $singleproject = Project::findOrfail($id);
    //     return view('owner.show_project',compact('singleproject'));
    // }
    public function showProject($id)
    {
        //
        $singleproject = Project::findOrfail($id);
        return view('owner.show_project',compact('singleproject'));
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
