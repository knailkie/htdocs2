<?php
require_once('config.php');

if(isset($_REQUEST['login']) && isset($_REQUEST['password'])) {
    require_once('config.php');
    require_once('User.class.php');
    $user = new User($_REQUEST['login'], $_REQUEST['password']);
    if($user->login()) {
        $v = array(
            'message' => "zalogowano poprawnie użytkownika: ".$user->getName(),
        );
    } else {
        $twig->display('message.html.twig', ['message => "Błędny login Lub Hasło']);
    }
}else {

    $twig->display('login.html.twig');
}

?>