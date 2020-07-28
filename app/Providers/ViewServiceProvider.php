<?php

namespace App\Providers;

use App\Models\CustomerItem;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        View::composer($components, function($view) {
            $section = request()->section;
            if(!empty($section)) {
                $datas = CustomerItem::where('identity', $section)->with('items.items')->first();
                $group = [];
                if(!empty($datas->items)) {
                    $datas->items->map(function($item) use(&$group){
                    $group[$item->identity] = $item->name;
                    if($item->items) {
                        $item->items->map(function($data) use(&$group){
                            $group[$data->identity] = $data->name;
                        });
                    }
                });
                }
                
                $view->with('text', $group);
            }
            unset($group);
        });
    }
}
