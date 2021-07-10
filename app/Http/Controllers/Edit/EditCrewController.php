<?php

namespace App\Http\Controllers\Edit;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// use > models
use App\Models\Trainer;
use App\Models\Image;


class EditCrewController extends Controller
{
    public function index( $crew_id ) { 

        // return > view
        return view('admin.edit.crew', ['crew_id' => $crew_id]); 

    }

    public function update( $crew_id ) { 
        
        // create > new instance of Models
        $member = Trainer::findOrFail($crew_id);
        $image  = Image::findOrFail($member->photo_id);
        
        // get > data
        $member->first_name   = request('first_name');      
        $member->second_name  = request('second_name');         
        $member->age          = request('age');        
        $member->description  = request('description'); 
        $image->caption       = $member->first_name . ' ' . $member->second_name; 
                

        // save > data to DB
        $member->save();
        $image->save();

        // redirect > back to edit crew & show success message
        return redirect('/admin')->with('edit-status', 'Edited successfully');    

    }

    public function destroy( $crew_id ) { 

        // create > new instance of Models
        $member = Trainer::findOrFail($crew_id);
        $image  = Image::findOrFail($member->photo_id);

        // delete > data from DB
        $member->delete();

        // return > view
        return redirect('/admin')->with('edit-status', 'Deleted successfully');

    }

    public function show() {
        // return > view
        return view('admin.add.crew'); 
    }

    public function add() {

        $crew  = new Trainer();
        $image = new Image();

        $crew->first_name  = request('first_name');
        $crew->second_name = request('second_name');
        $crew->age         = request('age');
        $crew->description = request('description');
        $crew->photo_id    = '10';

        $image->photo_id   = $crew->photo_id;
        $image->category   = 'Crew';
        $image->url        = '/img/' . $image->category . '/' . $crew->photo_id . '.png';   //FIX: set ext
        $image->caption    = $crew->first_name . ' ' . $crew->second_name;

        $crew->save();
        $image->save();

        // return > view
        return redirect('/admin')->with('edit-status', 'Added successfully');
    }
}
