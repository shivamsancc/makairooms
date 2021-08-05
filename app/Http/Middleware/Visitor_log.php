<?php namespace App\Http\Middleware;

use App\Models\visitor;
use App\Models\visitorLog;
use Closure;
use DB;
use Str;

class Visitor_log{

	public function __construct() {}

	public function handle($request, Closure $next) {
		if(!isset($_COOKIE['ConnectoID'])){
            $user_cookie= Str::random(32) . '-' . rand(0, 10000);
            $user_cookie =setCookie("ConnectoID", $user_cookie,time() + (20 * 365 * 24 * 60 * 60));     
        }else{
            $user_cookie=$_COOKIE['ConnectoID'];
        }
        $start = microtime(true);
        $log = Visitor::firstOrNew(['cookie' => $user_cookie]);
        $log->ip = $request->ip();
        $log->method = $request->method();
        $log->path = $request->path();
        $log->user_agent = $request->userAgent();
        $log->save();

        $newlog = new \App\Models\Visitor_log;
        $newlog->ip = $request->ip();
        $newlog->userAgent = $request->userAgent();
        $newlog->method = $request->method();
        $newlog->path = $request->path();
        $newlog->cookie_id = $log->id;
        $newlog->parameters = json_encode($request->all());
        $response = $next($request);
        $end = microtime(true);
        $newlog->response_code = $response->getStatusCode();
        $newlog->response_after = $end - $start;
        $newlog->save();
        return $response;

    
	}
	
}
