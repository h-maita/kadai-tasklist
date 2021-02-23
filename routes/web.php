<?php

// routes/web.php

Route::get('/', 'TasksController@index');

Route::resource('tasks', 'TasksController');