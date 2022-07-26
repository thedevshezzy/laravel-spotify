<?php

namespace App\Http\Controllers;

use Error;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Throwable;

class SpotifyController extends Controller
{

    private $SPOTIFY_BASE_URL =  'https://api.spotify.com/v1/';
    
    private $HEADERS = [
        'Accept' => 'application/json',
        'Host' => 'api.spotify.com'
    ]; 

    public function getArtist(Request $request)
    {

        try{
            
            $response = $this->makeRequest('artists/4YRxDV8wJFPHPTeXepOstw');

            return $response->json();

        }catch(Throwable $e){

            dd("CATCH", $e);
            
        }

    }

    public function getArtistAlbums()
    {
        
        try{
            
            $response = $this->makeRequest('artists/4YRxDV8wJFPHPTeXepOstw/top-tracks?market=in');

            return $response->json();

        }catch(Throwable $e){

            dd("CATCH", $e);
            
        }

    }

    
    public function getAlbumTracks()
    {

        try{
            
            $response = $this->makeRequest('albums/1HeX4SmCFW4EPHQDvHgrVS?market=in');

            return $response->json();

        }catch(Throwable $e){

            dd("CATCH", $e);
            
        }


    }


    public function makeRequest($url)
    {
        $this->HEADERS['Authorization'] = 'Bearer '.env('SPOTIFY_TOKEN');
        
        return Http::withHeaders($this->HEADERS)->get($this->SPOTIFY_BASE_URL.$url);
    }
}