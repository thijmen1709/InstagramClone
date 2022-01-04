<?php

namespace App\Http\Controllers\api;
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class EncryptionController extends Controller
{
    public function encryptText (Request $request){
        $cyphertext = $request->text;
        echo $cyphertext;
        return ($cyphertext);
    }
}
