<?php

namespace App\Http\Controllers\Api\V1;

use App\Filters\V1\MemberFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\MemberRequest;
use App\Http\Resources\V1\MemberCollection;
use Illuminate\Http\Request;
use App\Models\Member;
use App\Http\Resources\V1\MemberResource;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new MemberFilter();
        $filterItems = $filter->transform($request); //['column','operator',value']

        $includeCommissions = $request->query('includeCommissions'); 
        
        $Members = Member::where($filterItems);
        
        if($includeCommissions){
            $Members = $Members->with('commission');
        }
        

            return new MemberCollection($Members->paginate()->appends($request->query()));



        /* if(count($filterItems) == 0) {
            return new MemberCollection(Member::paginate());
        }else{
            $Members = Member::where($filterItems)->paginate();

            return new MemberCollection($Members->appends($request->query()));
        } */

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
    public function store(MemberRequest $member)
    {
        Member::create($member->validated());

        if(!$member){
            return response()->json([
                "status"=> "error",
                "message"=> "Empty content cannot be send",
            ]);
        }else{
            return response()->json([
                "status"=> "success",
                "message"=> "Member created successfully"
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
