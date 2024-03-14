<?php

namespace App\Http\Controllers\Api\V1;

use App\Filters\V1\GuestFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\GuestRequest;
use App\Http\Resources\V1\GuestCollection;
use App\Http\Resources\V1\GuestResource;
use Illuminate\Http\Request;
use App\Models\Guest;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new GuestFilter();
        $filterItems = $filter->transform($request); //['column','operator',value']


        
        if(count($filterItems) == 0) {
            return new GuestCollection(Guest::paginate());
        }else{
            //return new ParticipantCollection(Participant::where($queryItems)->paginate());
            $Guest = Guest::where($filterItems)->paginate();

            return new GuestCollection($Guest->appends($request->query()));
        }
        
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
    public function store(GuestRequest $guest)
    {
        Guest::create($guest->validated());

        if($guest)
        {
            return response()->json([
                "status"=> "success",
                "message"=> "Guest created successfully"
            ]);
        }else{
            return response()->json([
                "status"=> "error",
                "message"=> "Guest creation failed"
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Guest $guest)
    {
        return new GuestResource($guest);
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
