<?php

class Home
{
    function index()
    {
        echo "This is my blog!";
    }
    function view( $params )
    {
        echo "This is article #".$params['id'];
    }
}