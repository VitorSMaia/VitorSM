<?php

namespace App\Http\Middleware;

use App\Models\GetIpAddress;
use Closure;
use Illuminate\Http\Request;
use Stevebauman\Location\Location;
use Symfony\Component\HttpFoundation\Response;

class GetIpAddressWeb
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $dataLocation = \Stevebauman\Location\Facades\Location::get('187.122.61.86');

        $data['ip'] = $dataLocation->ip;
        $data['countryName'] = $dataLocation->countryName;
        $data['countryCode'] = $dataLocation->countryCode;
        $data['regionCode'] = $dataLocation->regionCode;
        $data['regionName'] = $dataLocation->regionName;
        $data['cityName'] = $dataLocation->cityName;
        $data['latitude'] = $dataLocation->latitude;
        $data['longitude'] = $dataLocation->longitude;

        GetIpAddress::query()->create($data);
        return $next($request);
    }
}
