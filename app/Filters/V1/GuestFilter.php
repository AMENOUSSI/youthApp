<?php
namespace App\Filters\V1;
use Illuminate\Http\Request;

use App\Filters\ApiFilter;

class GuestFilter extends ApiFilter{
    protected $safeParams = [
        'fullName' => ['eq'],
        'phoneNumber' => ['eq','lt','gt'],
        'comingDate' => ['eq','lt','gt'],
    ];

    protected $columnMap = [
        'fullName' => 'full_name',
        'phoneNumber' => 'phone_number',
        'comingDate' => 'coming_date',

    ];

    protected $operatorMap = [
        'eq'=> '=',
        'lt'=> '<',
        'lte'=> '<=',
        'gt'=> '>',
        'gte'=> '>=',
        
    ];
    


}