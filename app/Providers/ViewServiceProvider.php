<?php

namespace App\Providers;

use App\Models\CustomerItem;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Route;
use App\Models\Banner;
use App\Models\Navzh;
use App\Models\Doctor;
use App\Models\Shop;
use App\Models\Navdi;
use App\Models\Consume;
use App\Models\Customer;
use App\Models\Nav;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $components = [
            'components/history/*',
            'components/aplastic/*',
            'components/check/*',
            'components/customer/*',
            'components/optician/*',
            'components/myopia/*',
            'components/comments/*',
            'components/dryeye/*',
            'components/record/*',
            'components/handle/*',

        ];
        //dump(Route::currentRouteName());
        //dump(request()->path());
        
        View::composer($components, function($view) {
            $section = request()->section;
            if(!empty($section)) {
                $datas = CustomerItem::where('identity', $section)->with('items.items')->first();
                if($datas) {
                    $group = [];
                    $datas->items->map(function($item) use(&$group){
                        $group[$item->identity] = $item->name;
                        if($item->items) {
                            $item->items->map(function($data) use(&$group){
                                $group[$data->identity] = $data->name;
                            });
                        }
                    });
                    $view->with('text', $group);
                }
            }
            unset($group);
        });

        View::composer('components/home/swiper', function($view) {
            $datas = Banner::orderBy('orderid')->where('status', 1)->get();
            $view->with('banners', $datas);
        });

        View::composer('components/home/track', function($view) {
            $datas = Navzh::where('status', 1)->oldest()->get();
            $view->with('datas', $datas);
        });

        View::composer('components/home/doctors', function($view) {
            $datas = Doctor::index()->get();
            $view->with('doctors', $datas);
        });

        View::composer('components/home/shop', function($view) {
            $datas = Shop::index()->get();
            $view->with('shops', $datas);
        });

        View::composer('components/home/footer', function($view){
            $datas = Navdi::index()->get();
            $view->with('navdi', $datas);
        });


        View::composer('components/analystics/shopranking',function($view) {
            $shops = Shop::withCount('customers')->orderBy('customers_count', 'desc')->get();
           
            $total = $shops->sum('customers_count');
            $datas = $shops->map(function($item) use($total){
                return [
                    'label' => $item->title,
                    'y' => round($item->customers_count/$total, 3) * 100,
                    'legendText' => $item->title,
                ];
            });
           
            $view->with('shops', $shops);
            $view->with('customer_pie', $datas);
            
            $consume =  Consume::groupBy('shopid')
            ->selectRaw('shopid, sum(price) as sum')->with('shop')
            ->orderBy('sum', 'desc')
            ->get();
            
            $view->with('consume', $consume);
            $totalConsume = intval($consume->sum('sum'));
            $consume_pie = $consume->map(function($item) use($totalConsume){
                return [
                    'label' => $item->shop->title,
                    'y' => round($item->sum / $totalConsume, 3) * 100,
                    'legendText' => $item->shop->title,
                ];
            });
            $view->with('pie_consume', $consume_pie);
            
        });

        View::composer('components/analystics/source', function($view){
            $datas = Customer::where('data_src', '<>', '')->groupBy('data_src')->selectRaw('data_src, count(id) as total')
            ->with('src')
            ->orderBy('total', 'desc')
            ->limit(8)
            ->get();
            $view->with('src', $datas);
            $total_numbers = $datas->sum(function($item){
                return $item->total;
            });
            $src_pie = $datas->map(function($item) use($total_numbers){
                return [
                    'label' => $item->src->name??$item->data_src,
                    'y' => round($item->total/$total_numbers,3) * 100,
                    'legendText' => $item->src->name??$item->data_src,
                ];
            });
            $view->with('src_pie', $src_pie);
        });

        View::composer('components/analystics/summery', function($view){
            $total_customers = Customer::count();
            $total_consume = Consume::sum('price');
            $total_consumers = Customer::has('consumes')->count();
            $view->with('total_customers', $total_customers);
            $view->with('total_consume', $total_consume);
            $view->with('total_consumers', $total_consumers);
        });

        View::composer('admin.nav.create', function($view) {
           // dump(Nav::top()->pluck('title', 'id'));
            $view->with('topnavs', Nav::all()->pluck('title', 'id')->toArray());
        });
        
    }
}
