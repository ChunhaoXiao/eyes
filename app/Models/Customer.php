<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

class Customer extends Model
{
    const CREATED_AT = 'create_time';
    const UPDATED_AT = 'update_time';
    protected $dateFormat = 'U';
    const NAV = [
        'baseinfo' => '基本信息',
        'history' => '眼科病史',
        'check' => '眼科检查',
        'handle' => '诊断处置',
        'optician' => '验光配镜',
        'aplastic' => '角膜接触',
        'dryeye' => '干眼症',
        'myopias' => '近视治疗',
        'layzyeyes' => '斜弱视康',
        'records' => '复查记录',
        'comments' => '医生备注',
    ];
    protected $guarded = [];
    protected $table = 'ya_customer';

    protected $attributes = [
        'qgd_l' => '',
        'yw_r' => '',
        'yw_l' => '',
        'sj_r' => '',
        'sj_l' => '',
        'lxd_r' => '',
        'lxd_l' => '',
    ];

    const AGERANGE = [
        //"" => '请选择',
        "1-3" => '1-3岁',
        '3-6' => '3-6岁',
        '6-9' => '6-9岁',
        '9-15' => '9-15岁',
        '15-20' => "15-20岁",
        '20-30' => '20-30岁',
        '30-50' =>'30-50岁' 
    ];

    const CONSUMERANGE = [
        '0-200' => '0-200元',
        '200-500' => '200-500元',
        '500-1000' => '500-1000元',
        '1000-2000' => '1000-2000元',
        '2000-5000' => '2000-5000元',
        '5000-10000' => '5000-10000元',
        '10000-20000' => '10000-20000元',
        '20000-100000' => '20000-100000元',
    ];

    const CONSUMETYPE = [

    ];

    protected $dates = [
        //'birth_day'
    ];

    public function callbacks() {
        return $this->hasMany(Callback::class, 'user_id');
    }

    public function lastcall() {
        return $this->hasOne(Callback::class, 'user_id')->latest();
    }

    public function consumes() {
        return $this->hasMany(Consume::class, 'userid');
    }

    public function getBirthDayAttribute($v) {
        return date('Y-m-d', strtotime($v));
    }

    public function getAgeAttribute() {
        if($this->birth_day == '1970-01-01'){
            return '';
        }
        return now()->diffInYears($this->birth_day) + 1;
    }

    public function history() {
        return $this->hasOne(History::class, 'user_id');
    }

    public  function check() {
        return $this->hasOne(Check::class, 'user_id');
    }

    public function handle() {
        return $this->hasOne(Handle::class, 'user_id');
    }

    public function optician() {
        return $this->hasOne(Optician::class, 'user_id');
    }

    public function optician_datas() {
        return $this->hasMany(OpticianData::class, 'user_id');
    
    }

    public function last_optician_data() {
        return $this->hasOne(OpticianData::class, 'user_id')->latest();
    }

    public function aplastic() {
        return $this->hasOne(Aplastic::class, 'user_id');
    }

    public function aplastic_datas() {
        return $this->hasMany(AplasticData::class, 'user_id');
    }

    public function dryeye() {
        return $this->hasOne(Dryeye::class, 'user_id');
    }

    public function myopias() {
        return $this->hasMany(Myopia::class, 'user_id');
    }

    public function layzyeyes() {
        return $this->hasMany(Layzyeye::class, 'user_id');
    }

    public function records() {
        return $this->hasMany(Record::class, 'user_id');
    }

    public function comments() {
        return $this->hasMany(Comment::class, 'user_id');
    }

    public function schoolobj() {
        return $this->belongsTo(School::class, 'school')->withDefault();
    }

    public function src() {
        return $this->belongsTo(Category::class, 'data_src');
    }

    public function card_cure() {
        return $this->belongsTo(Category::class, 'card_t')->withDefault();
    }

    public function card_dryeye() {
        return $this->belongsTo(Category::class, 'card_d')->withDefault();
    }

    public function shop() {
        return $this->belongsTo(Shop::class, 'shopid')->withDefault();
    }

    public function getTotalConsumeAttribute() {
        return $this->consumes->sum('price');
    }

    public function total_consumes() {

        return $this->hasOne('App\Models\Consume','userid')
                    ->select('userid', DB::raw('sum(price) as total_consumes'))
                    ->groupBy('userid');
    }

    //==============================搜索条件==================================================

    public function scopeSearch($query, $data) {
        if(empty($data)) {
            return $query;
        }
        $fields = [
            'phone', 'name', 'school', 'card_t', 'card_d', 'shopid', 'level', 'data_src', 'following'
        ];
        foreach($data as $k => $v) {
            if(in_array($k, $fields)) {
                if(!empty($v)) {
                    if($k == 'name') {
                        $query->where('name', 'like', '%'.$v.'%');
                    }
                    elseif($k =='following') {
                        if($v == 1) {
                            $query->where('following', 1);
                        }
                        else {
                            $query->where('following', 0);
                        }
                    }
                    else {
                        $query->where($k, $v);
                    }
                }
            }
        }
        return $query;
    }
    
    //按年龄
    public function scopeAge($query, $age) {
        $age = explode('-', $age);
        $start = now()->subYear($age[0]);
        $end = now()->subYear($age[1]);
        return $query->whereNotNull('birth_day')->whereBetween('birth_day', [$end, $start]);
    }

    //按镜片品牌
    public function scopeJingpian($query, $jingpian) {
        return $query->whereHas('optician_datas', function($q) use($jingpian){
            $q->where('jingpian_brand', $jingpian);
        });
    }

    //按镜架品牌
    public function scopeJingjia($query, $jingjia) {
        return $query->whereHas('optician_datas', function($q) use($jingjia){
            $q->where('jingjia_brand', $jingjia);
        });
    }

    //按消费类型
    public function scopeConsumetype($query, $type) {
        return $query->whereHas('consumes', function($query) use($type) {
            $query->where('comsumption_type_id', $type);
        });
    }

    //按消费的商品类型
    public function scopeProducttype($query, $type) {
        return $query->whereHas('consumes', function($query) use($type) {
            $query->where('product_type_id', $type);
        });
    }

    //按诊断
    public function scopeDisease($query, $data) {
        return $query->whereHas('handle', function($query) use($data){
            $query->where("all_types", 'like', '%'.$data.'%');
           // $query->whereRaw("', '+ all_types like %,$data,%");
        });
    }

    //消费区间查询
    public function scopeConsumerange($query, $range) {
        $range = explode('-', $range);
        return $query->whereHas('consumes', function($query) use($range){
            $query->select('userid', DB::raw('sum(price) as total_consumes'))
        ->groupBy('userid')->having('total_consumes', '<', $range[1])->having('total_consumes', '>', $range[0]);
        });
    }

    //按角塑品牌
    public function scopeCorneal($query, $brand_id) {
        return $query->whereHas('aplastic_datas', function($query) use($brand_id){
            $query->where('brand_id', $brand_id);
        });
    }

    //按照录入时间
    public function scopeGodate($query, $data) {
        if(empty($data['added_start_date'])) {
            return $query;
        }
        $start = $data['added_start_date'];
        $end = $data['added_end_date']?? date('Y-m-d');
        return $query->whereBetween('go_date', [$start, $end]);
    }

    //按照修改时间查询
    public function scopeModified($query, $data) {
        if(empty($data['modified_start_date'])) {
            return $query;
        }
        $start = $data['modified_start_date'];
        $end = $data['modified_end_date']?? date('Y-m-d');
        return $query->whereBetween('modified_date', [$start, $end]);
    }

    //按照回访时间
    public function scopeCallback($query, $data) {
        
        if(empty($data['callback_start_date'])) {
            return $query;
        }
        $start = $data['callback_start_date'];
        $end = $data['callback_end_date']?? date('Y-m-d'); 
        $between = [strtotime($start), strtotime($end)];
        return $query->whereHas('callbacks', function($query) use($between) {
            $query->whereBetween('create_time', $between);
        });
    }
}
