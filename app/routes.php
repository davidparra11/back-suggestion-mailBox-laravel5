<?php

Route::resource('personas', 'FormController', ['except' => [
    'create', 'edit'
]]);