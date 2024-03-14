<?php
namespace App\Filters\V1;
use illuminate\Http\Request;

use App\Filters\ApiFilter;


class MemberFilter extends ApiFilter{
    protected $safeParams = [
        "firstName"=> ['eq'],
        "lastName"=> ['eq'],
        "email"=> ['eq'],
        "phone"=> ['eq','gt','lt'],
        
        
    ];
    protected $columnMap = [
        'firstName'=> 'first_name',
        'lastName'=> 'last_name',
        
    ];
    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
    ];

    
}