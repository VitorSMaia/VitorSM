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
        $dataLocation = \Stevebauman\Location\Facades\Location::get($this->getIp());

        $data['ip'] = $dataLocation->ip;
        $data['countryName'] = $dataLocation->countryName;
        $data['countryCode'] = $dataLocation->countryCode;
        $data['regionCode'] = $dataLocation->regionCode;
        $data['regionName'] = $dataLocation->regionName;
        $data['cityName'] = $dataLocation->cityName;
        $data['latitude'] = $dataLocation->latitude;
        $data['longitude'] = $dataLocation->longitude;

        GetIpAddress::query()->updateOrCreate([
            'ip' => $data['ip']
        ],$data);
        return $next($request);
    }

    public function getIp(){
        foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key){
            if (array_key_exists($key, $_SERVER) === true){
                foreach (explode(',', $_SERVER[$key]) as $ip){
                    $ip = trim($ip); // just to be safe
                    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false){
                        return $ip;
                    }
                }
            }
        }
        return request()->ip(); // it will return the server IP if the client IP is not found using this method.
    }
}
