<?php

$router->get('/user/{id}', function ($id) {
    return 'user '.$id;
});

$router->post('/user', function () {
    return "name";
    
});



$router->put('/user', function () {
       
});

$router->delete('/user/{id}', function ($id) {
  

});

?>

