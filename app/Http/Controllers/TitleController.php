<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\TitleResource;
use App\Models\Title;

class TitleController extends Controller
{
    public function index()
    {
        return  TitleResource::collection(Title::paginate(10));
    }

}