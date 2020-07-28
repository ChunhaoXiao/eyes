<?php 
namespace App\Services;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;

class SearchService {
    const FIELDS = [
        'age',
        'consumerange', 
        'consumetype', 
        'producttype', 
        'corneal', 
        'jingjia', 
        'jingpian', 
        'disease',
    ];

    public $query;


    public function __construct($condition)
    {
        $this->query = $this->makeQuery($condition);
    }

    public function getCustomerList($perpage) {
        return $this->query->paginate($perpage);
        // $arr = array_flip(SELF::FIELDS);
        // $searchFields = array_filter(array_intersect_key($data, $arr));
        // $query = Customer::search($data);

        // if(!empty($searchFields)) {
        //     foreach($searchFields as $k => $v) {
        //         $query->$k($v);
        //     }
        // }
        // foreach(['godate', 'modified', 'callback'] as $v) {
        //     $query->$v($data);
        // }

        // if(!empty($data['excel'])) {
        
        //     $q = $query->with(['schoolobj:name', 'total_consumes', 'lastcall:content', 'src:name', 'card_cure:name', 'last_optician_data.jjbrand:name', 'shop:title'])->withCount([
        //         'consumes as tt' => function($query) {
        //         $query->select(DB::raw('SUM(price)'));
        //     }]);
        //     return $q;
        // }
        // else 
        // {
        //     return $query->with(['schoolobj', 'total_consumes'])->withCount([
        //         'consumes as tt' => function($query) {
        //         $query->select(DB::raw('SUM(price)'));
        //     }])->when(!empty($data['order']), function($query) use($data){
        //         $sort = explode('_', $data['order']);
        //         $query->orderBy($sort[0], $sort[1]);
        //     })->paginate(20);
        // }

        
    }

    public function getTotalConsume() {
        // return $this->query->withCount([
        //     'consumes as total' => function($query) {
        //     $query->select(DB::raw('SUM(price)'));
        // }])->first();
        return $this->query->select(DB::raw('sum(ya_consume.price) as totalconsume'))->join("ya_consume", "ya_customer.id", "=", "ya_consume.userid")->first();
        // dump($q);

       // $uids = $this->query->pluck('id');
        //dump($uids);
       // return DB::table('ya_consume')->whereIn('userid', $uids)->sum("price");
       //$this->query->join("ya_consume", "");
    }

    public function excel() {
       // ini_set("max_execution_time", "120");
        //ini_set('memory_limit','1024M');
        // $q = $this->search($datas);
        foreach($this->query->cursor() as $v) {
            

            yield $v->getData();
            
            // yield [
            //     'id' => $v->id,

            //     '姓名' => $v->name,
            //     '性别' => $v->gender,
            //     '店铺' => $v->shop->title??'',
            //     '回访记录' => $v->lastcall->content??'',
            // ];
        }
    }

    protected function makeQuery($data) {
        $arr = array_flip(SELF::FIELDS);
        $query = Customer::search($data);
        $searchFields = array_filter(array_intersect_key($data, $arr));
        

        if(!empty($searchFields)) {
            foreach($searchFields as $k => $v) {
                $query->$k($v);
            }
        }
        foreach(['godate', 'modified', 'callback'] as $v) {
            $query->$v($data);
        }

        return $query->with(['schoolobj', 'total_consumes', 'lastcall', 'src', 'card_cure', 'last_optician_data.jjbrand', 'shop'])->withCount([
            'consumes as tt' => function($query) {
            $query->select(DB::raw('SUM(price)'));
        }])->when(!empty($data['order']), function($query) use($data){
            $sort = explode('_', $data['order']);
            $query->orderBy($sort[0], $sort[1]);
        });

        //return $query;


        // if(!empty($data['excel'])) {
        
        //     $q = $query->with(['schoolobj:name', 'total_consumes', 'lastcall:content', 'src:name', 'card_cure:name', 'last_optician_data.jjbrand:name', 'shop:title'])->withCount([
        //         'consumes as tt' => function($query) {
        //         $query->select(DB::raw('SUM(price)'));
        //     }]);
        //     return $q;
        // }
        // else 
        // {
        //     return $query->with(['schoolobj', 'total_consumes'])->withCount([
        //         'consumes as tt' => function($query) {
        //         $query->select(DB::raw('SUM(price)'));
        //     }])->when(!empty($data['order']), function($query) use($data){
        //         $sort = explode('_', $data['order']);
        //         $query->orderBy($sort[0], $sort[1]);
        //     })->paginate(20);
        // }
    }
}