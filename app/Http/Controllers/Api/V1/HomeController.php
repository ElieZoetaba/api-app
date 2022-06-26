<?php
namespace App\Http\Controllers\Api\V1;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __invoke():array
    {
        return [
            'success'=>true,
            'message'=> ('message.welcome'),
            'data'=>[
                'service'=> 'ADMIN API',
                'version'=> '1.0',
                'language'=>app()->getLocale(),
                'support'=> 'contact@admin.wip'
            ]
        ];
    }
}
