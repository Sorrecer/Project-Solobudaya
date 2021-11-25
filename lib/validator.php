<?php
$valid = true;

$REQ_MESSAGE = " harus diisi!";

function required($post, $error=null, $message=null){
    global $REQ_MESSAGE, $valid;
    if(!isset($_POST[$post]) || $_POST[$post] == ''){
        if($message == null) $message = $post.$REQ_MESSAGE;
        if($error == null) $error = 'error_'.$post;
        $GLOBALS[$error] = $message;
        $valid = false;
    }
}

function do_valid($loc, $goto=false){
    global $valid;
    if($valid){
        if($goto) header("Location: $loc");
        else include($loc);
    }
}

function set_back($post){
    if(isset($_POST[$post])) echo $_POST[$post];
}

?>