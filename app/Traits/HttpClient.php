<?php

namespace App\Traits;
use Illuminate\Support\Facades\Http;

trait HttpClient
{
    public function httpGet($link, $param = [])
    {
        $response = Http::withOptions(["verify"=>false])
            ->get($link,$param);
        return $response;
    }

    public function httpGetWithToken($token, $link , $param = [])
    {
        $response = Http::withOptions(["verify"=>false])
            ->withToken($token)
            ->get($link, $param);
        return $response->body();
    }

    public function httpPost($link, $param = [])
    {
        $response = Http::withOptions(["verify"=>false])
            ->post($link,$param);
        return $response->body();
    }

    public function httpPut($link, $param = [])
    {
        $response = Http::withOptions(["verify"=>false])
            ->put($link,$param);
        return $response->body();
    }

    public function httpDelete($link, $param = [])
    {
        $response = Http::withOptions(["verify"=>false])
            ->delete($link,$param);
        return $response->body();
    }
}
