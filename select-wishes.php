<?php
    #AUTHOR: ADEEL KHILJI
    $output_String = "";

    $wishId = $_GET["wishId"];
    $yourName = $_GET["yourName"];
    $yourFriendName = $_GET["yourFriendName"];
    $yourEmail = $_GET["yourEmail"];
    $yourFriendEmail = $_GET["yourFriendEmail"];
    $wish = $_GET["wish"];
    
    if($GET["wishId"==1])
    {
        $output_String = "Wish";
    }
    else
    {
        $output_String = "Wishes";
    }
    endif
    echo($yourName." ".$yourFriendName." ".$yourEmail." ".$yourFriendEmail);
    echo($wish);
?>