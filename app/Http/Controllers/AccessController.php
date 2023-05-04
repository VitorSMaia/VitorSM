<?php

namespace App\Http\Controllers;

use App\Http\Middleware\GetIpAddressWeb;
use App\Models\GetIpAddress;
use Illuminate\Http\Request;

class AccessController extends Controller
{
    public function index()
    {
        $getIpAddressWebDB = new GetIpAddress();
        $getIpAddressWebDB = $getIpAddressWebDB->query()
            ->select('ip','countryName', 'regionName', 'cityName', 'latitude', 'longitude', 'created_at')
            ->get()->toArray();

        return [
            'status' => 'success',
            'code' => 200,
            'data' => $getIpAddressWebDB
        ];
    }
}
