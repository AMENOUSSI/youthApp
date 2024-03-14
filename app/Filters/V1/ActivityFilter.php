<?php
namespace App\Filters\V1;
use illuminate\Http\Request;

use App\Filters\ApiFilter;


class ActivityFilter extends ApiFilter{
    protected $safeParams = [
        "Name"=> ['eq'],
        "Place"=> ['eq'],
        'commissionId'=> ['eq','gt'],
        
        
    ];
    protected $columnMap = [
        'Name'=> 'name',
        'Place'=> 'place',
        
    ];
    protected $operatorMap = [
        'eq' => '=',
        
    ];

    
}