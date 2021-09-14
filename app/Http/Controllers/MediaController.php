<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function uploadmedia(Request $request)
    {
          $file = $request->file('media');
          $exte = $file->extension();
          $path = $file->storeAs('public',"file".".".$exte);
          return response()->json(['path' => $path]);
    }

}
