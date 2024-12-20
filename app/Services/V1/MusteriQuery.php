<?php

namespace App\Services\V1;

use Illuminate\Http\Request;

class MusteriQuery{
    protected $safeParms = [
        'isim'=>['eq']
    ];

    protected $columnMap = [
        'isim'=>'isim'
    ];

    protected $operatorMap = [
        'eq'=>'='
    ];

    public function transform(Request $request){
        $eloQuery = [];

        foreach($this->safeParms as $parm=>$operators){
            $query = $request->query($parm);

            if(!isset($query)){
                continue;
            }

            $column = $this->columnMap[$parm] ?? $parm;

            foreach($operators as $operator){
                if(isset($query[$operator])){
                    $eloQuery[] = [$column, $this->operatorMap[$operator], $query[$operator]];
                }
            }
        }

        return $eloQuery;
    } 
}