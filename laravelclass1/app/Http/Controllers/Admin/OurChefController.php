<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OurChefModel;
use Illuminate\Http\Request;

class OurChefController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Admin.ourchefs');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'chef_name' => 'required',
                'designation' => 'required',
                'chefImg' => 'required | mimes:png,jpg,jpeg,gif |max:1000',
                'instaurl' => 'required',
                'facebookurl' => 'required',
                'twitterurl' => 'required',

            ]
        );
        // $imagename = "chef_upload_" . time() . "." . $request->file('chefImg')->extension();
        // // echo "<pre>";
        // // print_r($imagename);
        // $folderPath = 'Admin/images';
        // $imagePath = $folderPath . '/' . $imagename;
        // // echo "$imagePath";
        // $request->chefImg->move(public_path($folderPath), $imagename);

        // $chef = new AdminOurChefModel();
        // $chef->name = $request->chef_name;
        // $chef->designation= $request->designation;
        // $chef->imgpath = $imagePath;
        // $chef->instaurl= $request->instaurl;
        // $chef->facebookurl= $request->facebookurl;
        // $chef->twitterurl= $request->twitterurl;
        // $chef->save();
        // return back()->withSuccess('Thanks for Submitting!');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(OurChefModel $ourChefModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OurChefModel $ourChefModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OurChefModel $ourChefModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OurChefModel $ourChefModel)
    {
        //
    }
}
