<?php

namespace App\Http\Controllers\Api\V1;

use App\Filters\V1\CommissionFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\CommissionRequest;
use App\Http\Resources\V1\CommissionCollection;
use App\Http\Resources\V1\CommissionResource;
use App\Models\Commission;
use Illuminate\Http\Request;


class CommissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new CommissionFilter();
        $filterItems = $filter->transform($request); //['column','operator',value']


        
        if(count($filterItems) == 0) {
            return new CommissionCollection(Commission::paginate());
        }else{
            //return new ParticipantCollection(Participant::where($queryItems)->paginate());
            $Commissions = Commission::where($filterItems)->paginate();

            return new CommissionCollection($Commissions->appends($request->query()));
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
    public function store(CommissionRequest $commission)
    {
       /*  $request->validate([
            'name'=>'required','string'
            ]); */
        //Commission::create($request->all());
        Commission::create($commission->validated());
        if(!$commission){
            return response()->json([
                "status"=> "error",
                "message"=> "Empty content cannot be send",
            ]);
        }else{
            return response()->json([
                "status"=> "success",
                "message"=> "Commission created successfully"
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
