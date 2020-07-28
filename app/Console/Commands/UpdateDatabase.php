<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use App\Models\History;
use App\Models\Optician;
use App\Models\Check;
use App\Models\Customer;
use App\Models\Aplastic;
use App\Models\Myopia;
use App\Models\Comment;
use App\Models\AplasticData;
use App\Models\Handle;
class UpdateDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'database:change';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // DB::table('ya_history')->chunkById(100, function($items) {
        //     foreach($items as $item) {
        //         $data = History::find($item->id);
        //         if(!empty($item->jws)) {
        //             //$data = History::find($item->id);
        //             if(strpos($item->jws, ']') === false) {
        //                 $jws = explode(',', $item->jws);
        //                 $data->update(['jws' => $jws]);
    
        //             }
        //         }
        //         if(!empty($item->eating_menu)) {
        //             if(strpos($item->eating_menu, ']') === false) {
        //                 $menu = explode(',', $item->eating_menu);
        //                 $data->update(['eating_menu' => $menu]);
    
        //             }
        //         }
        //     }
        // });
        // $fiels = [
        //     'jc_sygn_nra',
        //     'jc_sygn_pra',
        //     'jc_sygn_bcc',
        //     'jc_sygn_amp_r',
        //     'jc_sygn_amp_l',
        //     'jc_sygn_amp_c',
        //     'jc_sygn_ac_a',
        //     'jc_sygn_af',
        //     'jc_result',
        //     'user_id',
        // ];
        // Optician::select($fiels)->chunk(200, function($items) {
        //     foreach($items as $item) {
        //         $data = $item->toArray();
        //         Check::where('user_id', $item->user_id)->update($data);
        //     }
        // });

        // $datas = Customer::whereNotNull('modified_date')->chunk(100, function($items) {
        //     foreach($items as $v) {
        //         if($v->modified_date == '0000-00-00') {
        //             //echo $v->modified_date;
        //             $v->update(['modified_date' => '1970-01-01']);
        //         }
        //     }
        // });

        // DB::table('ya_customer')->orderBy('id','desc')->chunk(200, function($datas) {
        //     foreach($datas as $v) {
                
        //             $str = str_replace(['/', '-', '.'], '-', $v->birth_day);
        //             echo($str."\r\n");
                
        //             if($this->isValidDate($str)) {
        //                 $date = date('Y-m-d', strtotime($str));
        //                 DB::table('ya_customer')->where('id', $v->id)->update(['birth_day' => $date]);
        //             }
        //             else {
        //                 DB::table('ya_customer')->where('id', $v->id)->update(['birth_day' => NULL]);
        //             }
                
        //     }
        // });

        // Aplastic::orderBy('id')->chunk(200, function($datas) {
        //     $bmzk = [
        //         'jmfc_bmzk_zc' => '1', 
        //         'jmfc_bmzk_hh' => '2', 
        //         'jmfc_bmzk_wr' => '3',
        //         'jmfc_bmzk_ps' => '4'
        //     ];

        //     $byzk = [
        //         'jmfc_byzk_zc' => '1',
        //         'jmfc_byzk_qk' => '2',
        //     ];

        //     $chuzhi = [
        //         'jmfc_cz_zc' => '1',
        //         'jmfc_cz_dm' => '2',
        //         'jmfc_cz_cw' => '3',
        //         'jmfc_cz_hp' => '4',
        //         'jmfc_cz_tp' => '5'
        //     ];

        //     $zhusu = [
        //         'yhzs_zc' => '1',
        //         'yhzs_cy' => '2',
        //         'yhzs_ywg' => '3',
        //         'yhzs_slbd' => '4',
        //         'yhzs_jpnz' => '5',
        //         'yhzs_xy' => '6',
        //         'yhzs_yh' => '7',
        //         'yhzs_yt' => '8',
        //         'yhzs_fmwzd' => '9',
        //         'yhzs_slbj' => '10',
        //     ];

        //     foreach($datas as $v) {
        //         $bmzk_r = $bmzk_l = $chuzhi_r = $chuzhi_l = $byzk_r = $byzk_l = $zs = [];
        //         foreach($bmzk as $k => $v1) {
        //             if(!empty($v->{$k.'_r'}))
        //             {
        //                 $bmzk_r[] = $v1;
        //             }
        //             if(!empty($v->{$k.'_l'})) {
        //                 $bmzk_l[] = $v1;
        //             }
        //         }
        //         foreach($zhusu as $k => $v1) {
        //             if(!empty($v->{$k})) {
        //                 $zs[] = $v1;
        //             }
        //         }
        //         foreach($chuzhi as $k => $v1) {
        //             if(!empty($v->{$k.'_r'})) {
        //                 $chuzhi_r[] = $v1;
        //             }
        //             if(!empty($v->{$k.'_l'})) {
        //                 $chuzhi_l[] = $v1;
        //             }
        //         }
        //         foreach($byzk as $k => $v1) {
        //             if(!empty($v->{$k.'_r'})) {
        //                 $byzk_r[] = $v1;
        //             }
        //             if(!empty($v->{$k.'_l'})) {
        //                 $byzk_l[] = $v1;
        //             }
        //         }
        //         $v->update([

        //             'bmzk_l' => $bmzk_l,
        //             'bmzk_r' => $bmzk_r,
        //             'chuzhi_l' => $chuzhi_l,
        //             'chuzhi_r' => $chuzhi_r,
        //             'byzk_r' => $byzk_r,
        //             'byzk_l' => $byzk_l,
        //             'zhusu' => $zs
        //         ]);
        //     }
        // });

            // Myopia::chunk(200, function($datas) {
                
            //     foreach($datas as $v) {
            //         // if($v->kx_date_end) {
            //         //     if(!$this->isValidDate($v->kx_date_end)) {
            //         //         echo 'invalid date';
                            
            //         //     }
            //         // }
            //         if($v->kx_date_end=='0000-00-00') {
            //             //echo $v->kx_date_end."\r\n";
            //             $v->update(['kx_date_end' => NUll]);
            //         }

            //         if($v->kx_date_start == '0000-00-00') {
            //             $v->update(['kx_date_start' => NULL]);
            //         }
            //     }
            // });

            // Comment::chunk(200, function($datas) {
            //     foreach($datas as $v) {
            //         if($v->c_date == '0000-00-00') {
            //             $v->update(['c_date' => NULL]);
            //         }
            //     }
            // });

           
            // DB::table("ya_aplastic_data")->orderBy('id')->chunk(200, function($datas){
            //     foreach($datas as $v) {
            //         if($v->add_date == '0000-00-00') {
            //             DB::table('ya_aplastic_data')->where('id', $v->id)->update(['add_date' => NULL]);
            //         }
                    
            //     }
            // });

            Handle::orderBy('id')->chunk(100, function($datas) {
                foreach($datas as $v) {
                    $l = $v->left_eye;
                    if(is_array($l) && count($l) == 1 && strpos($l[0],',')) {
                        $datal = explode(',', $l[0]);
                        $v->update(['left_eye' => $datal]);
                    }

                    $r = $v->right_eye;
                    if(is_array($r) && count($r) == 1 && strpos($r[0],',')) {
                        $datar = explode(',', $r[0]);
                        $v->update(['right_eye' => $datar]);
                    }

                }
            });
        
    }

    private function isValidDate($str) {
        return (bool)strtotime($str);
    }
}
