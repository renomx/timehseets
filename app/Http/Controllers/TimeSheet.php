<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimeSheet extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome', ['weeks' => $this->weeks()]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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


    private function weeks()
    {
        $nextWeek = strtotime('+1 week');
        /* change the upper bound of the loop using `date('W')` */
        for( $i=0; $i < date('W'); $i++ ) 
        {
            $date   = date('Y-m-d', strtotime('-'.$i.' week'));
            $nbDay  = date('N', strtotime($date));

            $monday = new \DateTime($date);
            $sunday = new \DateTime($date);

            $monday->modify('-'.($nbDay-1).' days');
            $sunday->modify('+'.(7-$nbDay).' days');

            if($nextWeek > strtotime($sunday->format('Y-m-d'))) {
                $weeks[$monday->format('W')] = $monday->format('j M Y') . ' - ' . $sunday->format('j M Y');
            }
        }

        return $weeks;
    }
}
