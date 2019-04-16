<?php

namespace App\Providers;

use App\Comment;
use App\Guest;
use App\Http\Controllers\trainers\TrainersController;
use App\Personalinfo;
use App\Trainingshedule;
use App\User;
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
//        View::share([
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
                ->where('roles.title', 'like', '%trainer%')
                //->orderBy("personalinfos.id")
                ->get());

        view()->share('guests',
            $guests = User::select(
                'users.email as users_email',
                'users.id as users_id',
                'users.name as users_name',//login
                'guests.id as guests_id',
                'contents.id as contents_id',
                'personalinfos.name as personalinfos_name',
                'binaryfiles.title as binaryfiles_title',
                'binaryfiles.file_src as binaryfiles_file_src',
                'personalinfos.info as personalinfos_info',
                'comments.id as comments_id',
                'comments.text as comments_text',
                'comments.updated_at as comments_updated_at'
            )
                ->join('personalinfos', 'personalinfos.id', '=', 'users.personalinfo_id', 'inner')
                ->join('roles', 'roles.id', '=', 'users.role_id', 'inner')
                ->join('guests', function ($join) {
                    $join->on('users.id', '=', 'guests.user_id');
                    //  ->where('guests.user_id', '>', 5);
                })
                ->join('comments', 'guest_id', '=', 'guests.id', 'inner')
                ->join('contents', function ($join) {
                    $join->on('users.id', '=', 'contents.user_id');
                })
                ->join('binaryfiles', function ($join) {
                    $join->on('binaryfiles.id', '=', 'contents.binaryfile_id');
                })
//                  пока нет ничего в базе
//                    ->join('singups', function ($join) {
//                        $join->on('singups.guest_id', '=', 'guests.id');
//                    })

//                    не работает так
//                         ->join('contents', 'contents.user_id', '=', 'users.id', 'inner')
//                         ->join('binaryfiles', 'binaryfiles.id', '=', 'contents.binaryfile_id', 'inner')
//                            ->join('singups', 'guest_id', '=', 'guests.id', 'inner')

                ->join('subscriptions', 'subscriptions.id', '=', 'guests.subscription_id', 'inner')
                ->where('roles.title', 'like', '%guest%')
                ->get());



         view()->share('shedule_all',
            $shedule_all = Trainingshedule::select(
                'trainingshedules.date_training as date_training',
                'trainingtimes.start_training as start_training',
                'trainingtimes.stop_training as stop_training',
                'trainingshedules.id as users_id',
                'personalinfos.name as personalinfos_name',
                'trainingshedules.section_id as section_id',
                'trainingshedules.gym_id as gym_id'
            )
                ->join('users', function ($join) {
                    $join->on('users.id', '=', 'trainingshedules.user_id');
                })
                ->join('personalinfos', function ($join) {
                    $join->on('personalinfos.id', '=', 'users.personalinfo_id');
                })
                ->join('roles', function ($join) {
                    $join->on('roles.id', '=', 'users.role_id');
                })
                ->join('trainingtimes', function ($join) {
                    $join->on('trainingtimes.id', '=', 'trainingshedules.trainingtime_id');
                })
                ->join('sections', function ($join) {
                    $join->on('sections.id', '=', 'trainingshedules.section_id');
                })
                ->join('gyms', function ($join) {
                    $join->on('gyms.id', '=', 'trainingshedules.gym_id');
                })

                ->where('roles.title', 'like', '%trainer%')
                ->get());



         view()->share('shedule_dates',
            $shedule_dates = Trainingshedule::select(
                'trainingshedules.date_training as date_training'
            )
                ->join('users', function ($join) {
                    $join->on('users.id', '=', 'trainingshedules.user_id');
                })
                ->join('roles', function ($join) {
                    $join->on('roles.id', '=', 'users.role_id');
                })
                ->join('trainingtimes', function ($join) {
                    $join->on('trainingtimes.id', '=', 'trainingshedules.trainingtime_id');
                })
                ->join('sections', function ($join) {
                    $join->on('sections.id', '=', 'trainingshedules.section_id');
                })
                ->join('gyms', function ($join) {
                    $join->on('gyms.id', '=', 'trainingshedules.gym_id');
                })

                ->where('roles.title', 'like', '%trainer%')
                ->groupby('trainingshedules.date_training')
                ->distinct()
                ->get()

         );


//        view()->share('shedule_for_date',
//            $shedule_for_date = Trainingshedule::select(
//                'trainingshedules.date_training as date_training'
//            )
//                ->join('users', function ($join) {
//                    $join->on('users.id', '=', 'trainingshedules.user_id');
//                })
//                ->join('roles', function ($join) {
//                    $join->on('roles.id', '=', 'users.role_id');
//                })
//                ->join('trainingtimes', function ($join) {
//                    $join->on('trainingtimes.id', '=', 'trainingshedules.trainingtime_id');
//                })
//                ->join('sections', function ($join) {
//                    $join->on('sections.id', '=', 'trainingshedules.section_id');
//                })
//                ->join('gyms', function ($join) {
//                    $join->on('gyms.id', '=', 'trainingshedules.gym_id');
//                })
//
//                ->where('roles.title', 'like', '%trainer%')
//                ->groupby('trainingshedules.date_training')
//                ->distinct()
//                ->where('trainingshedules.date_training', 'like', '%trainer%')
//                ->get()
//        );



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
