<?php

// Default Route.
$this->map(
    "GET",
    "/",
    function () {
        $response = [
            "data"   => NULL,
            "header" => "200 Success"
        ];
        return $response;
    },
    "default"
);
