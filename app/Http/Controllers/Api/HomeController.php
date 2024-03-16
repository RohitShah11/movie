<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function data()
    {
        $client = new \GuzzleHttp\Client();
        $TMDB_TOKEN = 'eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI5NjNhODkxZGI5MjFmYTMyYjMyNmU5OGVhNWI0ODYxZiIsInN1YiI6IjY1MjM3ODA3YzUwYWQyMDE0ZGQyZTdjYSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.I5xS12QiYRA_7qGDa1fCBBELyiHrpz4DuYYmpDUkSms';

        $response = $client->request('GET', 'https://api.themoviedb.org/3/account/20548834/lists', [
        'headers' => [
            'accept' => 'application/json',
            'Authorization'=> 'Bearer '. $TMDB_TOKEN,
        ],
        ]);

        echo $response->getBody();
    }
}
// {
//     avatar: {
//     gravatar: {
//     hash: "9ed17a429f13c882ba7b05be1914eecf"
//     },
//     tmdb: {
//     avatar_path: null
//     }
//     },
//     id: 20548834,
//     iso_639_1: "en",
//     iso_3166_1: "IN",
//     name: "",
//     include_adult: false,
//     username: "rohitarya220"
//     }