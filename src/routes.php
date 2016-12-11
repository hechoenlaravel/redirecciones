<?php
// Routes

$app->get('/', function($request, $response, $path = null) {
    header('Location: http://www.hechoenlaravel.com', 301);
   	die; 
});

$app->get('/podcast', function ($request, $response, $args) {
    header('Location: http://www.hechoenlaravel.com', 301);
    die;
});

$app->get('/workshops', function ($request, $response, $args) {
    header('Location: https://www.youtube.com/channel/UCQTmuJvtkHlXRQSrydoP_OA', 301);
    die;
});