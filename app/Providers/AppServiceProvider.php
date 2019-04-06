<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
//        URL::forceScheme('https');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(){
        \Blade::directive('login', function (){
            return '<?php if ( session()->get("user") != null ) { '.'$user=session()->get("user")'. " ?>";
        });

        \Blade::directive('logout', function (){
            return "<?php } else { ?>";
        });

        \Blade::directive('end', function (){
            return "<?php } ?>";
        });

        \Blade::directive('get', function ($expression) {
            $json = json_decode($expression);

//            dd($json->conn);
//            $users = DB::connection($json->conn)->select("SELECT ? FROM ?", [$json->what, $json->table]);
            $users = DB::connection($json->conn)->table($json->table)->select($json->what)->get();
            dd($users);
/*            return '<?php ${'.$var.'} = '.$value.';?>';*/
        });


    }
}
