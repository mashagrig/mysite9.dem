<?php

namespace App\Http\Controllers\shedule;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('shedule.page_shedule');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        if(isset($_POST['period']))
        {
            $max_date_select = '';
            switch ( $_POST['period']) {
                case "today":
                    $max_date_select = date("Y-m-d");
                    break;
                case "tomorrow":
                    $max_date_select = date('Y-m-d', time() + 86400);
                    break;
                case "week":
                    $max_date_select = date('Y-m-d', time() + 86400*7);
                    break;
            }



            if(isset($_POST['programs']))
            {
                $program_select = '';
                switch ( $_POST['programs']) {
                    case "morning_programs":
                        $program_select = "morning_programs";
                        break;
                    case "body_building":
                        $program_select = "body_building";
                        break;
                    case "stretching":
                        $program_select = "stretching";
                        break;
                    case "fitness":
                        $program_select = "fitness";
                        break;
                    case "yoga":
                        $program_select = "yoga";
                        break;
                    case "child_programs":
                        $program_select = "child_programs";
                        break;
                }


                if(isset($_POST['trainers']))
                {
                    $trainers_select = '';
//                    switch ( $_POST['trainers']) {
//                        case "morning_programs":
//                            $program_select = "morning_programs";
//                            break;
//
//                    }
                }
            }
        }


        return redirect()->action('shedule\SheduleController@index', [
            'max_date_select' => $max_date_select,
            'program_select' => $program_select,
            'trainers_select' => $trainers_select,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


        if(isset($_POST['period']))
        {
           $max_date_select = '';
            switch ( $_POST['period']) {
                case "today":
                    $max_date_select = date("Y-m-d");
                    break;
                case "tomorrow":
                    $max_date_select = date('Y-m-d', time() + 86400);
                    break;
                case "week":
                    $max_date_select = date('Y-m-d', time() + 86400*7);
                    break;
            }



            if(isset($_POST['programs']))
            {
                $program_select = '';
                switch ( $_POST['programs']) {
                    case "morning_programs":
                        $program_select = "morning_programs";
                        break;
                    case "body_building":
                        $program_select = "body_building";
                        break;
                    case "stretching":
                        $program_select = "stretching";
                        break;
                    case "fitness":
                        $program_select = "fitness";
                        break;
                    case "yoga":
                        $program_select = "yoga";
                        break;
                    case "child_programs":
                        $program_select = "child_programs";
                        break;
                }


                if(isset($_POST['trainers']))
                {
                    $trainers_select = '';
//                    switch ( $_POST['trainers']) {
//                        case "morning_programs":
//                            $program_select = "morning_programs";
//                            break;
//
//                    }
                }
            }
        }


        return redirect()->action('shedule\SheduleController@index', [
            'max_date_select' => $max_date_select,
            'program_select' => $program_select,
            'trainers_select' => $trainers_select,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
