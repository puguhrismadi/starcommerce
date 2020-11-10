<?php

namespace App\Http\Middleware;
//custom voyager by me
use Illuminate\Support\Str;
use TCG\Voyager\Events\Routing;
use TCG\Voyager\Events\RoutingAdmin;
use TCG\Voyager\Events\RoutingAdminAfter;
use TCG\Voyager\Events\RoutingAfter;
use TCG\Voyager\Facades\Voyager;
//end custom evoyager
use App\Brand;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    var $brand,$brand1,$brand2;
    public function __construct()
    {
       
        $this->brand1 = Brand::all();
        $this->brand2 = Brand::all();
        $this->brand = Brand::all();
    }
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login')->with(['brand'=>$this->brand,'brand1'=>$this->brand1]);
        }
    }
}
