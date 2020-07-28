<?php
namespace App\Exports\Sheets;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithTitle;
use App\Services\SearchService;


class PerfivekSheets implements FromQuery, WithTitle {

    public function __construct($data)
    {
        // $this->month = $month;
        // $this->year  = $year;
        $this->data = $data;
        dd($data);
    }

    public function query()
    {
        $service = new SearchService;
        return $service->search($this->data);
    }

    /**
     * @return string
     */
    public function title(): string
    {
        return 'sheet';
    }

}