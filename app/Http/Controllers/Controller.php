<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * Render view file
     */
    public function render($view, $data = [])
    {
        $routeArray = request()->route()->getAction();
        $controllerAction = class_basename($routeArray['controller']);
        list($controllerClass, $actionName) = explode('@', $controllerAction);
        $controllerId = str_replace('controller', '', strtolower($controllerClass));
        return view($controllerId . '/' . $view, $data);
    }
}
