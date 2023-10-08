<?php

namespace App\Http\Controllers;

use App\Models\Fennelucky;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class FenneluckyController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'name' => 'required|unique:fenneluckies,name,NULL,id,user_id,'.auth()->id(),
        ]);

        $fennelucky = Fennelucky::create([
            'name' => $request->name,
            'user_id' => auth()->id(),
        ]);

        return response()->json($fennelucky, 201);
    }
}
