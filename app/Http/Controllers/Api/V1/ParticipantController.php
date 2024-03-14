<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\ParticipantRequest;
use App\Http\Resources\V1\ParticipantCollection;
use App\Http\Resources\V1\ParticipantResource;
use App\Models\Participant;
use App\Filters\V1\ParticipantFilter;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    $Participants = Participant::query();

foreach ($filterItems as $filterItem) {
    $column = $filterItem[0];
    $operator = $filterItem[1];
    $value = $filterItem[2];

    $Participants->where($column, $operator, $value);
}

$Participants = $Participants->paginate();

return new ParticipantCollection($Participants->appends($request->query()));


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
    public function store(ParticipantRequest $participant)
    {
        Participant::create($participant->validated());
        if(!$participant){
            return response()->json([
                "status"=> "error",
                "message"=> "Empty content cannot be send",
            ]);
        }else{
            return response()->json([
                "status"=> "success",
                "message"=> "Participant created successfully"
            ]);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
