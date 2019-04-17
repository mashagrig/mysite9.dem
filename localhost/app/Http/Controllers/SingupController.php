<?php

namespace App\Http\Controllers;

use App\Guest;
use App\Singup;
use App\Trainingshedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SingupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $check_shedule_id = array();
        $max_date_select = array();
        $each_check_shedule_info = array();


        return view('privacy', [
            'check_shedule_id' => $check_shedule_id,
            'max_date_select' => $max_date_select,
            'each_check_shedule_info' => $each_check_shedule_info,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $check_shedule_id = array();
        $max_date_select = array();
        $each_check_shedule_info = array();

        $current_user = Auth::user()->getAuthIdentifier();

        $current_guest = Guest::select('guests.id')
            ->join('users', function ($join) {
                $join->on('users.id', '=', 'guests.user_id');
            })
            ->where('users.id', '=', "{$current_user}")
            ->get('id')[0]->id;



        if (isset($request->check_shedule_id) && (!empty($request->check_shedule_id))) {
            $check_shedule_id = $request->check_shedule_id;

            foreach ($check_shedule_id as $k => $id) {

                //запись в базу запрошенных тренировок на пользователя
                $insert_in_singups = Singup::create([
                    'guest_id' => $current_guest,
                    'trainingshedule_id' => $id
                ]);





                //вывод запрашиваемых запией на тренировки
                //вывод сохраненных??? запией на тренировки
                array_push($each_check_shedule_info,
                    Trainingshedule::select(
                        'trainingshedules.id as shedule_id',
                        'trainingshedules.date_training as date_training',
                        'trainingtimes.start_training as start_training',
                        'trainingtimes.stop_training as stop_training',
                        'trainingshedules.user_id as trainer_id',
                        'personalinfos.name as trainer_name',
                        'trainingshedules.section_id as section_id',
                        'sections.title as section_title',
                        'trainingshedules.gym_id as gym_id'//,
                     //   'singups.guest_id as guest_id',
                     //   'singups.id as singup_id'
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
//                        ->join('guests', function ($join) {
//                            $join->on('guests.user_id', '=', 'users.id');
//                        })

                        ->join('trainingtimes', function ($join) {
                            $join->on('trainingtimes.id', '=', 'trainingshedules.trainingtime_id');
                        })
                        ->join('sections', function ($join) {
                            $join->on("sections.id", '=', 'trainingshedules.section_id');
                        })
                        ->join('gyms', function ($join) {
                            $join->on('gyms.id', '=', 'trainingshedules.gym_id');
                        })
//                        ->join('singups', function ($join) {
//                            $join->on('singups.trainingshedule_id', '=', 'trainingshedules.id');
//                        })

                        ->where('trainingshedules.id', '=', "{$id}")
                     //   ->where('singups.guest_id', '=', "{$current_user}")
                     //   ->where('users.id', '=', "{$current_user}")
                        ->oldest('date_training')
                        ->oldest('start_training')
                        ->get()
                );

            }
        }
                foreach ($each_check_shedule_info as $kk => $singup) {

                    foreach ($singup as $k => $v) {

                        array_push(
                            $max_date_select,
                            $singup[$k]['date_training']);
                    }
                }
        $max_date_select = array_unique($max_date_select);

//        array_push(
//            $max_date_select,
//            array_unique( array_column($each_check_shedule_info, 'date_training')) )  ;


        return view('privacy', [
            'check_shedule_id' => $check_shedule_id,
            'max_date_select' => $max_date_select,
            'each_check_shedule_info' => $each_check_shedule_info,
        ]);
//       return redirect()->action('shedule\SheduleController@index', [
//           'check_shedule_id'=>$check_shedule_id
//       ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
