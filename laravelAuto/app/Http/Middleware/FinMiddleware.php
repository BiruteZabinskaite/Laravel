<?php

namespace App\Http\Middleware;

use Closure;

class FinMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    //kodas vykdomas kai jau uzkrautas psl
    //short code
    //galima pvz [ADDRESS] isideti visuose html ar DB ir pakeis $html=str_rep('[ADDRESS]','***',$html);
    public function handle($request, Closure $next)
//kalbos keitimas
//app()->setLocale('en');

    {

        app()->setLocale($request->session()->get('lang','en'));


//        $response = $next($request);//cia visas psl uzsikraus
//        $html=$response->getContent();
//        $html=str_rep('MAXIMA','***',$html);
//        $response->setContent($html);
//        return $response;
    }

}
