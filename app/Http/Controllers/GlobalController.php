<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offer;
use App\User;

class GlobalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function showoffer()
    {


        return view('owner.offers');

    }
    public function index()
    {
        //
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
    // public function store(Request $request)
    // {
    //     //
    //     dd($p_id);  
    //     $user_id=auth()->user()->id;
    //     $data = request()->validate([ 
    //         'offerprice' => ['required',],
    //         'offertime' => ['required',],
    //     ]);
    //     $newoffer = Offer::create([
    //         'oprice' => $data['offerprice'],
    //         'datatime' => $data['offertime'],
    //         'user_id'=> $user_id,
    //         'project_id'=>$p_id,
    //     ]);
    //     if($newoffer)
    //     {
    //         dd($newoffer);
    //         return redirect()->route('owner.offers',compact('singleproject'));
    //     }
    // }

    public function storeme(Request $request, $p_id)
    {
        // 
        
        $user_id=auth()->user()->id;
        $data = request()->validate([ 
            'offerprice' => ['required',],
            'offertime' => ['required',],
        ]);
        $newoffer = Offer::create([
            'oprice' => $data['offerprice'],
            'datatime' => $data['offertime'],
            'user_id'=> $user_id,
            'project_id'=>$p_id,
        ]);
        if($newoffer)
        {
            
            return redirect()->back();
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
        //
        $user_id=auth()->user()->id;
        $user=User::findOrFail($user_id);
        // $singleuser = $user->singleuser;
        dd($user);
        return view('programmer.showprogrammer',compact('user'));
    }
    public function showprofile()
    {
        //
        $user_id=auth()->user()->id;
        $user=User::findOrFail($user_id);
        // $singleuser = $user->singleuser;
        // dd($user->email);
        return view('programmer.show',compact('user'));
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
