<?php namespace App\Http\Middleware;

use App\Models\Visitor;
use App\Models\VisitorLog;
use Closure;
use DB;
use Str;

class Visitor_log{

	public function __construct() {}

	public function handle($request, Closure $next) {
		if (!isset($_COOKIE['ConnectoID'])){
            $cookie_id = Str::random(32).'-'.rand(0,10000);
			$request= Request();
            if (setCookie("ConnectoID",$cookie_id,time() + (20 * 365 * 24 * 60 * 60))) {  
				$start = microtime(true);
                $log = new \App\Models\Visitor;
                $log->ip = $request->ip();
                $log->user_agent = $request->userAgent();
                $log->method = $request->method();
                $log->path = $request->path();
                $log->cookie = $cookie_id;
				$response = $next($request);
				$end = microtime(true);
				$log->response_code = $response->getStatusCode();
				$log->response_after = $end-$start;
				$log->save();
				return $response;
            }
        } else{
				$start = microtime(true);
                $old_cookie= $_COOKIE['ConnectoID'];
            	$cookie_id  =Visitor::where('cookie',$old_cookie)->first();
                $newlog = new \App\Models\visitor_log;
                $newlog->ip = $request->ip();
                $newlog->userAgent = $request->userAgent();
                $newlog->method = $request->method();
                $newlog->path = $request->path();
                $newlog->cookie_id = $cookie_id->id;
                $newlog->parameters = json_encode($request->all());
				$response = $next($request);
				$end = microtime(true);
				$newlog->response_code = $response->getStatusCode();
				$newlog->response_after = $end-$start;
				$newlog->save();
				return $response;

            }
	}
	
}
