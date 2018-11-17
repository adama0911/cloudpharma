<?php

$app->get('/', App\Controllers\HomeController::class .':index');

$app->get('/accueil', App\Controllers\HomeController::class .':accueil');

$app->get('/erreur', App\Controllers\HomeController::class .':erreur');

$app->get('/essaie', App\Controllers\HomeController::class .':essaie');

$app->post('/ajaxconnexion', App\Controllers\AjaxController::class .':connexion');

$app->group('/ajax', function () {

    $this->post('/rechercheTnt', App\Controllers\AjaxController::class .':rechercheTnt');
    
    $this->post('/remonterTnt', App\Controllers\AjaxController::class .':remonterTnt');

    $this->post('/remonteremoney', App\Controllers\AjaxController::class .':remonteremoney');

    $this->post('/smscodesuperviseur', App\Controllers\AjaxController::class .':smscodesuperviseur');
   
    $this->post('/smscodecaisse', App\Controllers\AjaxController::class .':smscodecaisse');
    //----------
    $this->post('/remonterwizall', App\Controllers\AjaxController::class .':remonterwizall');

    $this->post('/rechercheom', App\Controllers\AjaxController::class .':rechercheom');

    $this->post('/rechercheallom', App\Controllers\AjaxController::class .':rechercheallom');

    $this->post('/recherchetc', App\Controllers\AjaxController::class .':recherchetc');

    $this->post('/importfile',App\Controllers\UploadsController::class .':importfile');
    
    $this->post('/remonter',App\Controllers\AjaxController::class .':remonter');

    $this->post('/tcremonter',App\Controllers\AjaxController::class .':tcremonter');

    $this->post('/reinitialiserOm',App\Controllers\AjaxController::class .':reinitialiserOm');
    
    $this->post('/findAndremonterexel',App\Controllers\AjaxController::class .':findAndremonterexel');

    $this->post('/arretservice',App\Controllers\AjaxController::class .':arretservice');

    $this->post('/basculementservice',App\Controllers\AjaxController::class .':basculementservice');
    

});
