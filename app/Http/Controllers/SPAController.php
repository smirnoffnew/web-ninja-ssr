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

    public function admin(Request $request) {
        $ssr = $this->adminRender($request->path());
        return view('admin-spa', ['ssr' => $ssr]);
    }

    private function adminRender($path) {
        $renderer_source = File::get(base_path('node_modules/vue-server-renderer/basic.js'));
        $app_source = File::get(public_path('js/admin-entry-server.js'));
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

    public function client(Request $request) {
        $ssr = $this->clientRender(($request->path()));
        return view('client-spa', ['ssr' => $ssr]);
    }

    private function clientRender($path) {
        $renderer_source = File::get(base_path('node_modules/vue-server-renderer/basic.js'));
        $app_source = File::get(public_path('js/client-entry-server.js'));
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

    public function web(Request $request) {
        $ssr = $this->webRender($request->path());
        return view('web-spa', ['ssr' => $ssr]);
    }

    private function webRender($path) {
        $renderer_source = File::get(base_path('node_modules/vue-server-renderer/basic.js'));
        $app_source = File::get(public_path('js/web-entry-server.js'));
        $v8 = new \V8Js();
        ob_start();
        $v8->executeString('var process = { env: { VUE_ENV: "server", NODE_ENV: "production" }}; this.global = { process: process }; var url = "$path";');
        $v8->executeString($renderer_source);
        $v8->executeString($app_source);
        return ob_get_clean();
    }

    public function test(Request $request) {
        $ssr = $this->testRender($request->path());
        return view('test-spa', ['ssr' => $ssr]);
    }

    private function testRender($path) {
        $renderer_source = File::get(base_path('node_modules/vue-server-renderer/basic.js'));
        $app_source = File::get(public_path('js/test-entry-server.js'));
        $v8 = new \V8Js();
        ob_start();
        $v8->executeString('var process = { env: { VUE_ENV: "server", NODE_ENV: "production" }}; this.global = { process: process }; var url = "$path";');
        $v8->executeString($renderer_source);
        $v8->executeString($app_source);
        return ob_get_clean();
    }
}

