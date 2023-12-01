<?php

namespace App\Http\Controllers;

use App\Http\Requests\UniqueNameRequest;
use App\Models\Fennelucky;
use Illuminate\Http\JsonResponse;

class FenneluckyController extends Controller
{
    public function store(UniqueNameRequest $request): JsonResponse
    {
        $fennelucky = Fennelucky::fromRequestInput([
            'name' => $request->name,
            'user_id' => $request->user()->id,
        ]);

        return response()->json($fennelucky, 201);
    }
}
