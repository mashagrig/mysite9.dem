<?php

namespace App\Providers;

use App\Http\Controllers\trainers\TrainersController;
use App\Personalinfo;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share([
//            'titleMain' => 'Фитнес-клуб "СПОРТ"',
//            'titleGym' => ' - Тренажерные залы"',
//            'titleEquipment' => ' - Оборудование"',
           // 'trainers_info' => action('trainers\TrainersController@index'),
            // 'contr' => action('GymController@index'),
            //"gyms_all" => Gym::all(),
            //   "equipment" => Equipment::all(),
            //   "gym" => Gym::all()

            view()->share('trainers_info',
                $trainers_info = Personalinfo::select(
                'roles.title as roles_title',
                'users.email as users_email',
                'users.id as users_id',
                'users.name as users_name',//login
                'personalinfos.name as personalinfos_name',
                'binaryfiles.file_src as binaryfiles_file_src',
                'personalinfos.info as personalinfos_info'
            )
                ->join('users', 'users.personalinfo_id', '=', 'personalinfos.id', 'inner')
                ->join('roles', 'roles.id', '=', 'users.role_id', 'inner')
                ->join('contents', 'contents.user_id', '=', 'users.id', 'inner')
                ->join('binaryfiles', 'binaryfiles.id', '=', 'contents.binaryfile_id', 'inner')
                ->where('roles.title','like', '%trainer%')
                //->orderBy("personalinfos.id")
                ->get()),
                 ]);

//        View::composers('*', function ($view){
//            $trainers_info = Personalinfo::select(
//                'roles.title',
//                'users.email',
//                'users.id as id',
//                'personalinfos.name as person',
//                'users.name as user',
//                'binaryfiles.file_src as file_src',
//                'personalinfos.info'
//            )
//                ->join('users', 'users.personalinfo_id', '=', 'personalinfos.id', 'inner')
//                ->join('roles', 'roles.id', '=', 'users.role_id', 'inner')
//                ->join('contents', 'contents.user_id', '=', 'users.id', 'inner')
//                ->join('binaryfiles', 'binaryfiles.id', '=', 'contents.binaryfile_id', 'inner')
//                ->where('roles.title','like', '%trainer%')
//                //->orderBy("personalinfos.id")
//                ->get();
////            view('trainers.page_trainers', [
////                'trainers_info'=> $trainers_info,
////            ]);
//           return $view->with('trainers_info', $trainers_info);
//
//
//        });


    }
}
