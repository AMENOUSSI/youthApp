<?php
namespace App\Filters\V1;
use illuminate\Http\Request;

use App\Filters\ApiFilter;


class CommissionFilter extends ApiFilter{
    protected $safeParams = [
        "Name"=> ['eq'],
        "memberId"=> ['eq','gt','lt','gte','lte']
        
        
    ];
    protected $columnMap = [
        'Name'=> 'name',
        'memberId'=> 'member_id',
        
    ];
    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
    ];

    
}