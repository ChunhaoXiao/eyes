<?php 
namespace App\Services;
class FormDataService {
   
    public function getModelData($name) {
        
        $datas = [];
        switch($name) {
            case 'school':
                $datas =   \App\Models\School::pluck('name', 'id');
                break;
            case 'shop':
                $datas = \App\Models\Shop::pluck('title', 'id');
                break;
            case 'src':
            case 'card1':
            case 'card2':
            case 'prod':
            case 'consumption':
            case 'disease':     
             
                $datas = \App\Models\Category::filter($name)->pluck('name', 'id');
                break;
            case 'gbrand':
            case 'glass':
            case 'corneal':
            case 'jingpian':
            $datas = \App\Models\Brand::filter($name)->pluck('name', 'id');
            break;   
            case 'role':
                $datas = \App\Models\Role::pluck('title', 'id');
            break; 
            case 'region':
                $datas = \App\Models\ShopArea::pluck('title', 'id');
            break;
        }
        return $datas;
    }
}