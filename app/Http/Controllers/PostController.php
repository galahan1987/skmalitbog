<?php

namespace App\Http\Controllers;

use TCG\Voyager\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getFile($filename){
        $file=Storage::disk('public')->get($filename);
        return (new Response($file, 200))
              ->header('Content-Type', 'image/jpeg');
    }
}
