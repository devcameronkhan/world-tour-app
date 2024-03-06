<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use App\Models\Flight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function index()
    {
        if (isset($_GET['from_airport'])) {
            $query = Flight::query();

            if ($_GET['tour_type'] == 'one_way') {

                $query->where('departure_airport_id', $_GET['from_airport']);
                $query->where('arrival_airport_id', $_GET['to_airport']);
                $query->whereRaw("DATE_FORMAT(departure_time, '%m-%d-%Y') = ?", [$_GET['depart_date']]);
            } else {
                $query->where(function ($q) {
                    $q->where('departure_airport_id', $_GET['from_airport']);
                    $q->where('arrival_airport_id', $_GET['to_airport']);
                    $q->whereRaw("DATE_FORMAT(departure_time, '%m-%d-%Y') = ?", [$_GET['depart_date']]);
                })
                    ->orWhere(function ($q1) {
                        $q1->where('departure_airport_id', $_GET['to_airport']);
                        $q1->where('arrival_airport_id', $_GET['from_airport']);
                        $q1->whereRaw("DATE_FORMAT(departure_time, '%m-%d-%Y') = ?", [$_GET['return_date']]);
                    });
                // $query->from('flights as outbound')
                //     ->join('flights as inbound', function ($join) use ($query) {
                //         $join->on('outbound.airline_id', '=', 'inbound.airline_id')
                //             ->whereRaw("DATE_FORMAT(outbound.departure_time, '%m-%d-%Y') = ?", [$_GET['depart_date']])
                //             ->whereRaw("DATE_FORMAT(inbound.departure_time, '%m-%d-%Y') = ?", [$_GET['return_date']])
                //             ->where('outbound.departure_airport_id', $_GET['from_airport'])
                //             ->where('outbound.arrival_airport_id', $_GET['to_airport'])
                //             ->where('inbound.departure_airport_id', $_GET['to_airport'])
                //             ->where('inbound.arrival_airport_id', $_GET['from_airport']);
                //     })
                //     ->select(
                //         'outbound.id as outbound_id',
                //         'outbound.price as outbound_price',
                //         $query->raw('CAST(outbound.departure_time AS DATETIME) as outbound_departure_time'),
                //         $query->raw('CAST(outbound.arrival_time AS DATETIME) as outbound_arrival_time'),
                //         'outbound.departure_airport_id as outbound_departure_airport_id',
                //         'outbound.arrival_airport_id as outbound_arrival_airport_id',

                //         'inbound.id as inbound_id',
                //         'inbound.price as inbound_price',
                //         $query->raw('CAST(inbound.departure_time AS DATETIME) as inbound_departure_time'),
                //         $query->raw('CAST(inbound.arrival_time AS DATETIME) as inbound_arrival_time'),
                //         'inbound.departure_airport_id as inbound_departure_airport_id',
                //         'inbound.arrival_airport_id as inbound_arrival_airport_id'
                //     );
            }

            $flights = $query->get();
            return view('welcome', [
                'airports' => Airport::get(),
                'flights' => $flights
            ]);
        } else {
            return view('welcome', [
                'airports' => Airport::get(),
            ]);
        }
    }
}
