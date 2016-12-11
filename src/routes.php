<?php
// Routes

$app->get('/', function ($request, $response, $args) {
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

$app->get('/:method', function($method) use ($app) {
   header('Location: https://www.youtube.com/channel/UCQTmuJvtkHlXRQSrydoP_OA', 301);
   die; 
})->conditions(array('method' => '.+'));