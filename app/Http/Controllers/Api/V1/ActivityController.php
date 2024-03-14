<?php

namespace App\Http\Controllers\Api\V1;

use App\Filters\V1\ActivityFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\ActivityRequest;
use App\Http\Resources\V1\ActivityCollection;
use Illuminate\Http\Request;
use App\Models\Activity;
use App\Http\Resources\V1\ActivityResource;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new ActivityFilter();
        $filterItems = $filter->transform($request); //['column','operator',value']


        
        if(count($filterItems) == 0) {
            return new ActivityCollection(Activity::paginate());
        }else{
            //return new ParticipantCollection(Participant::where($queryItems)->paginate());
            $Activities = Activity::where($filterItems)->paginate();

            return new ActivityCollection($Activities->appends($request->query()));
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
    public function store(ActivityRequest $activity)
    {
        Activity::create($activity->validated());
        if(!$activity){
            return response()->json([
                "status"=> "error",
                "message"=> "Empty content cannot be send",
            ]);
        }else{
            return response()->json([
                "status"=> "success",
                "message"=> "Activity created successfully"
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Activity $activity)
    {
        return new ActivityResource($activity);
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
