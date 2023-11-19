<?php

namespace App\Http\Controllers;

class ProfileController extends Controller {
    function index($id) {
        $name = "Donal Trump";
        $age = "75";
        $data = [
            "id" => $id,
            "name" => $name,
            "age" => $age,
        ];
        $code = "200";
        //Cookie
        $cookieName = "access_token";
        $value = "123-XYZ";
        $minutes = 1;
        $path = "/";
        $domain = $_SERVER["SERVER_NAME"];
        $secure = false;
        $httpOnly = true;
        return response()->json($data, $code)->cookie(
            $cookieName, $value, $minutes, $path, $domain, $secure, $httpOnly
        );
    }
}
