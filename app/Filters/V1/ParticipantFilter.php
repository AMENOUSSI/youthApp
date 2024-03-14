<?php
namespace App\Filters\V1;
use illuminate\Http\Request;

use App\Filters\ApiFilter;


class ParticipantFilter extends ApiFilter{
    protected $safeParams = [
        "firstName"=> ['eq'],
        "lastName"=> ['eq'],
        "email"=> ['eq'],
        "phone"=> ['eq'],
        "cellule"=> ['eq'],
        "totalAmount"=> ['eq','gt','lt'],
        "paidAmount"=> ['eq','gt','lt'],
        "leavingDate"=> ['eq','gt','lt'],
    ];
    protected $columnMap = [
        'firstName'=> 'first_name',
        'lastName'=> 'last_name',
        'totalAmount'=> 'total_amount',
        'paidAmount'=> 'paid_amount',
        'leavingDate'=> 'leaving_date',
    ];
    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
    ];

}