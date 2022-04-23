<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;
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
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1bmlxdWVfbmFtZSI6IlRyYXZlbCBFeHBsb3JlciBMaW1pdGVkIiwiQ2xpZW50SWQiOiIzNTU5Iiwicm9sZSI6IkIyQyIsIlRyYXZlbEdyb3VwSWQiOiIzNzI0IiwiaXNzIjoiaHR0cDovL3Jlc3ZveWFnZS5jb20iLCJhdWQiOiJyZXN2b3lhZ2UiLCJleHAiOjE2NTA3MDM0NDksIm5iZiI6MTY1MDY4NTQ0OX0.bQgFhrcTbrNYoi8M4J5H1XgJ1w0cEf4slce3RBR-VYA'

        ],

            'query' => [
            'clientname' => 'Travel Explorer Limited',
            'CheckInDate' => '2022-06-29',
            'CheckOutDate' => '2022-06-30',
            'RoomCount' => '1',
            'PlaceId' => 'ChIJEcHIDqKw2YgRZU-t3XHylv8',
            'Adults' => '3'
             ]
             ]
    );

        $response = $r->getBody()->getContents();
      // dd($response);
        $hotels = json_decode($response);
        //  dd($hotels);
        return view('hotels', ['hotels' => $hotels]);
    }

    public function fetch_air(){
        $client = new Client();
        $r = $client->get('http://rest.resvoyage.com/api/v1/air/search',
        [ 'headers' =>
        [
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1bmlxdWVfbmFtZSI6IlRyYXZlbCBFeHBsb3JlciBMaW1pdGVkIiwiQ2xpZW50SWQiOiIzNTU5Iiwicm9sZSI6IkIyQyIsIlRyYXZlbEdyb3VwSWQiOiIzNzI0IiwiaXNzIjoiaHR0cDovL3Jlc3ZveWFnZS5jb20iLCJhdWQiOiJyZXN2b3lhZ2UiLCJleHAiOjE2NTA3MDM0NDksIm5iZiI6MTY1MDY4NTQ0OX0.bQgFhrcTbrNYoi8M4J5H1XgJ1w0cEf4slce3RBR-VYA'

        ],

            'query' => [
            'from1' => 'LOS',
            'to1' => 'LON',
            'DepartureDate1' => '2022-04-22',
            'Adults' => '1'
             ]
             ]
    );

        $response = $r->getBody()->getContents();
    //    dd($response);
        $flights = json_decode($response);
       //  dd($flights->PricedItineraries);
        return view('flights', ['flights' => $flights]);
    }
    public function hotel_details(){
    //     $client = new Client();
    //     $r = $client->get('http://rest.resvoyage.com/api/v1/hotel/details',
    //     [ 'headers' =>
    //     [
    //         'Content-Type' => 'application/json',
    //         'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1bmlxdWVfbmFtZSI6IlRyYXZlbCBFeHBsb3JlciBMaW1pdGVkIiwiQ2xpZW50SWQiOiIzNTU5Iiwicm9sZSI6IkIyQyIsIlRyYXZlbEdyb3VwSWQiOiIzNzI0IiwiaXNzIjoiaHR0cDovL3Jlc3ZveWFnZS5jb20iLCJhdWQiOiJyZXN2b3lhZ2UiLCJleHAiOjE2NTA3MDM0NDksIm5iZiI6MTY1MDY4NTQ0OX0.bQgFhrcTbrNYoi8M4J5H1XgJ1w0cEf4slce3RBR-VYA'

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
