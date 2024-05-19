<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Accomodation extends Controller
{
    public function test(){
        return response()->json([
            'status'=> true,
            'message' => 'api working file'
        ]);

    }

    public function accomodations(){
        return response()->json([
            'message' => 'Get all accomodation'
        ]);
    }

    public function accomodation($id){
        return response()->json([
            'message' => 'Get accomodation with id' . $id,
        ]);
    }

    public function createAccomodation(){
        return response()->json([
            'message' => 'New accomodations created'
        ]);
    }

    public function updateAccomodation($id){
        return response()->json([
            'message' => 'Update accomodations' . $id
        ]); 
    }

    public function deleteAccomodation($id){
        return response()->json([
            'messaje' => 'Delete accomodation' . $id
        ]);
    }
}
