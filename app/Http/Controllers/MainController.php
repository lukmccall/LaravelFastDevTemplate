<?php

namespace App\Http\Controllers;

use App\Engine\Page;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MainController extends Controller
{

    public function page(Request $request, $url, $p1 = null){
        if($url == null) $url = "";
        if(($page = Page::pageExist($url)) == null)
            abort(404);
        if($p1 != null)
            return $page->render($request,$p1);
        return $page->render($request);
    }
}
