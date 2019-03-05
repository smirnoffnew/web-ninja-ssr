<?php
/**
 * Created by PhpStorm.
 * User: smirnoff
 * Date: 02.02.19
 * Time: 3:26
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SPAController extends Controller
{

    public function getSpa(Request $request)
    {
        $prefix = $request->segments()[0];
        $ssr = $this->render($request->path(), $prefix );
        return view($prefix . '-spa', ['ssr' => $ssr]);
    }

//    public function client(Request $request)
//    {
//        $ssr = $this->render(($request->path()),  $request->segments()[0]);
//        return view('client-spa', ['ssr' => $ssr]);
//    }
//
//    public function test(Request $request)
//    {
//        $ssr = $this->render($request->path(),  $request->segments()[0]);
//        return view('test-spa', ['ssr' => $ssr]);
//    }
//
//    public function web(Request $request)
//    {
//        $ssr = $this->render($request->path(), $request->segments()[0]);
//        return view('web-spa', ['ssr' => $ssr]);
//    }

    private function render($path, $prefix)
    {
        $renderer_source = File::get(base_path('node_modules/vue-server-renderer/basic.js'));
        $app_source = File::get(public_path('js/' . $prefix . '-entry-server.js'));
        $v8 = new \V8Js();
        ob_start();

        $js =
            <<<EOT
var process = { env: { VUE_ENV: "server", NODE_ENV: "production" } };
this.global = { process: process };
var url = "$path";
EOT;

        $v8->executeString($js);
        $v8->executeString($renderer_source);
        $v8->executeString($app_source);
        return ob_get_clean();
    }


}




