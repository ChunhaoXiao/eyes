<?php 
namespace App\Services;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;

class SearchService {
    const FIELDS = [
        'age', 'consumerange', 'consumetype', 'producttype', 'corneal', 'jingjia', 'jingpian'
    ];

    public function search($data, $oderby="") {
        $arr = array_flip(SELF::FIELDS);
        $searchFields = array_filter(array_intersect_key($data, $arr));
        $query = Customer::search($data);

        if(!empty($searchFields)) {
            foreach($searchFields as $k => $v) {
                $query->$k($v);
            }
        }
        foreach(['godate', 'modified', 'callback'] as $v) {
            $query->$v($data);
        }

        if(!empty($data['excel'])) {
        
            $res =  $query->with(['schoolobj:name', 'total_consumes', 'lastcall:content', 'src:name', 'card_cure:name', 'last_optician_data.jjbrand:name', 'shop:title'])->withCount([
                'consumes as tt' => function($query) {
                $query->select(DB::raw('SUM(price)'));
            }]);
            return $res;
        }
        else {
            return $query->with(['schoolobj', 'total_consumes'])->withCount([
                'consumes as tt' => function($query) {
                $query->select(DB::raw('SUM(price)'));
            }])->when(!empty($data['order']), function($query) use($data){
                $sort = explode('_', $data['order']);
                $query->orderBy($sort[0], $sort[1]);
            })->paginate(20);
        }

        
    }
}