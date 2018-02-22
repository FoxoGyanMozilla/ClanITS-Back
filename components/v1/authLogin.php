<?php
function authLogin($request, $response) {
    $json = $request->getBody();
    $data = json_decode($json, true);
    $user = $data['user'];
    $pass = $data['pass'];
    if($user == 'admin' && $pass == 'password'){
        $data = array(
            "status"=>"ok",
            "msg"=>"Successfully logged in",
            "isMozillian" => "1"
        );
        $json = json_encode($data);
        return $json;
    } else {
        $data = array(
            "status"=>"error",
            "msg"=>"Invalid Details!",
            "isMozillian"=> "NA"
        );
        $json = json_encode($data);
        return $json;
    }
}
?>