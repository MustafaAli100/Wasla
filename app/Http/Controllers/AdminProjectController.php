<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Offer;

class AdminProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::latest()->with('user')->paginate(5);
        return view('admin.allprojects' ,compact('projects'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function is_approved($id)
    {

        $project = Project::findOrFail($id);

        if ($project->is_approved == 0) {
            $project->is_approved = 1;
            $project->save();
        } else {
            $project->is_approved = 0;
            $project->save();
        }
        return back()->with('success', 'Save changes successfully.');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
       return view('owner.add_offer', compact('id'));  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , $id)
    {
             
             $user_id=auth()->user()->id;
            
             $data = request()->validate([ 
                 'oprice' => ['required', 'string', 'max:255'],
                 'datatime' => ['required', 'string'],
                
             ]);
             $newproject = Offer::create([
                 'oprice' => $data['oprice'],
                 'datatime' => $data['datatime'],
                 'user_id'=> $user_id,
                 'project_id'=> $id,
     
             ]);

              return back()->with('success', 'offer has been  added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::where('id', $id)->with(['user'])->firstOrFail();
        return view('admin.project_show' , compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $projects = Project::latest()->with('user')->findOrFail($id);
        return view('owner.add_offer' ,compact('projects' ,'id')); 
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
        $project = Project::findOrFail($id);
        $project->delete();
        return back()->with('success', 'project has been  deleted');
    }
}
