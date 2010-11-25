<?php

$return_url = $_SERVER["HTTP_REFERER"];

if( session_id() == "" )
    session_start();

$_SESSION["css_session"] = $_GET["mode"];


header( "Location:" . $return_url );