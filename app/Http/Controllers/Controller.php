<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Guzzle\Http\Exception\ClientErrorResponseException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\RequestOptions;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function fetch_hotels(){
        $client = new Client();
        $r = $client->get('http://rest.resvoyage.com/api/v1/hotel/search',
        [ 'headers' =>
        [
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1bmlxdWVfbmFtZSI6IlRyYXZlbCBFeHBsb3JlciBMaW1pdGVkIiwiQ2xpZW50SWQiOiIzNTU5Iiwicm9sZSI6IkIyQyIsIlRyYXZlbEdyb3VwSWQiOiIzNzI0IiwiaXNzIjoiaHR0cDovL3Jlc3ZveWFnZS5jb20iLCJhdWQiOiJyZXN2b3lhZ2UiLCJleHAiOjE2NTE1MTM2MjMsIm5iZiI6MTY1MTQ5NTYyM30.f5E6U17OzLekglzOqlmvkGM63rdTxdKoP8p2yqxhPVY'

        ],

            'query' => [
            'clientname' => 'Travel Explorer Limited'

             ]
             ]
    );

        $response = $r->getBody()->getContents();
      // dd($response);
        $hotels = json_decode($response);
        //  dd($hotels);
        return view('hotels', ['hotels' => $hotels]);
    }

    public function fetch_air(Request $request){

        $client = new Client();
        $r = $client->get('http://rest.resvoyage.com/api/v1/air/search',
        [ 'headers' =>
        [
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1bmlxdWVfbmFtZSI6IlRyYXZlbCBFeHBsb3JlciBMaW1pdGVkIiwiQ2xpZW50SWQiOiIzNTU5Iiwicm9sZSI6IkIyQyIsIlRyYXZlbEdyb3VwSWQiOiIzNzI0IiwiaXNzIjoiaHR0cDovL3Jlc3ZveWFnZS5jb20iLCJhdWQiOiJyZXN2b3lhZ2UiLCJleHAiOjE2NTE1MTM2MjMsIm5iZiI6MTY1MTQ5NTYyM30.f5E6U17OzLekglzOqlmvkGM63rdTxdKoP8p2yqxhPVY'

        ],

            'query' => [
            'from1' => $request->from1,
            'to1' => $request->to1,
            'DepartureDate1' => $request->DepartureDate1,
            'Adults' => $request->adults
             ]
             ]
    );

        $response = $r->getBody()->getContents();
        // dd($response);
        $flights = json_decode($response);
        dd($flights->PricedItineraries);
        return view('flights', ['flights' => $flights]);
    }
    public function hotel_details(){
    //     $client = new Client();
    //     $r = $client->get('http://rest.resvoyage.com/api/v1/hotel/details',
    //     [ 'headers' =>
    //     [
    //         'Content-Type' => 'application/json',
    //         'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1bmlxdWVfbmFtZSI6IlRyYXZlbCBFeHBsb3JlciBMaW1pdGVkIiwiQ2xpZW50SWQiOiIzNTU5Iiwicm9sZSI6IkIyQyIsIlRyYXZlbEdyb3VwSWQiOiIzNzI0IiwiaXNzIjoiaHR0cDovL3Jlc3ZveWFnZS5jb20iLCJhdWQiOiJyZXN2b3lhZ2UiLCJleHAiOjE2NTE1MTM2MjMsIm5iZiI6MTY1MTQ5NTYyM30.f5E6U17OzLekglzOqlmvkGM63rdTxdKoP8p2yqxhPVY'

    //     ],

    //         'query' => [
    //         'HotelId' => '4fcd24f9-4456-4830-afb3-4d022d5889b1',
    //         'SessionId' => 'a438ba5c-b103-4246-8534-cca10b06c026'

    //          ]
    //          ]
    // );

    //     $response = $r->getBody()->getContents();
    // //    dd($response);
    //     $hotel = json_decode($response);
       //  dd($flights->PricedItineraries);
        return view('hotel_details');
    }

}
