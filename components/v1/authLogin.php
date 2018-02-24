<?php
function authLogin($request, $response) {
    $json = $request->getBody();
    $data = json_decode($json, true);
    $user = $data['user'];
    $pass = $data['pass'];
    // Below are the dummy details :
    $sessionId = md5(rand());
    $fName = "Administrator";
    $email = "admin@foxogyan";

    if($user == 'admin' && $pass == 'password'){
        $data = array(
            "status"=>"ok",
            "msg"=>"Successfully logged in",
            "isMozillian" => "1",
            "sessionId" => $sessionId,
            "fName" => $fName,
            "email" => $email
        );
        $json = json_encode($data);
        return $json;
    } else {
        $data = array(
            "status"=>"error",
            "msg"=>"Invalid Details!",
            "isMozillian"=> null,
            "sessionId" => null,
            "fName" => null,
            "email" => null
        );
        $json = json_encode($data);
        return $json;
    }
}
?>