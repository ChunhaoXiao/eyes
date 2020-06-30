<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\Customer;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Services\SearchService;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Exports\Sheets\PerfivekSheets;

class CustomerExport implements WithMapping, WithHeadings, FromCollection
{
    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     return Customer::latest()->take(5000)->get();
    // }

    public $data;
    public $service;

    public function __construct($data)
    {
       // dd($data);
        //$this->data = [];
        $this->data = $data;
        $this->service = new SearchService($data);
        //$this->service = new SearchService($data);
    }

    public function collection()
    {
        //return Customer::latest()->take(5000)->get();
        return $this->service->query->get();
        
    }

    // public function query() {
    //     $service = new SearchService($this->data);
    //     return $service->query->limit(1000);
    // }

    


    // public function query()
    // {
    //     //$service = new SearchService;
    //     //return Customer::query();
    //     //return $service->search($this->data);
    //     return Customer::latest()->take(1000);
    // }

    public function map($customer):array
    {
        $data = [
            $customer->id,
            $customer->name??'',
            $customer->sex == 1?'男':'女',
            $customer->birth_day??'',
            $customer->schoolobj->name??$customer->school,
            $customer->jie??'',
            $customer->grade??'',
            $customer->phone??'',
            $customer->level == 1 ? '一般会员' : '特殊会员',
            $customer->contenct??'',
            $customer->lastcall->content??'',
            $customer->go_date??'',
            $customer->src->name??$customer->data_src??'',
            $customer->card_cure->name??'',

            $customer->last_optician_data->zhujing_l??'',
            $customer->last_optician_data->qiujing_l??'',
            $customer->last_optician_data->guangzhou_l??'',
            $customer->last_optician_data->zhujing_r??'',
            $customer->last_optician_data->qiujing_r??'',
            $customer->last_optician_data->guangzhou_r??'',
            $customer->last_optician_data->add_date??'',
            $customer->last_optician_data->jjbrand->name??'',
            $customer->last_optician_data->total_price??'',

            $customer->shop->title??'',
        ];

        return  $data;
    }

    public function headings(): array
    {
        return [
            '#',
            '名字',
            '性别',
            '出生日期',
            '学校',
            '届',
            '班',
            '手机号',
            '会员级别',
            '备注',
            '回访记录',
            '初诊日期',
            '信息来源',
            '卡类型',
            '左眼柱镜',
            '左眼球镜',
            '左眼眼轴',
            '右眼柱镜',
            '右眼球镜',
            '右眼眼轴',
            '配镜日期',
            '镜框品牌',
            
            '金额',
            '所属分店'
        ];
    }

    // public function sheets(): array
    // {
    //     $sheets = [];

    //     for ($month = 1; $month <= 3; $month++) {
    //         $sheets[] = new PerfivekSheets($this->data);
    //     }

        

    //     return $sheets;
    // }


}
