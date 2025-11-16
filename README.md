Localization

Documentation: https://laravel.com/docs/12.x/localization#introduction

MIDDLEWARE

We created a middleware called language to check if the user chose a language in their current session.

PATH: app\Http\Middleware\Language.php 

REGISTER

Make sure to registrer the middleware, this case I added for all web routes

Documentation: https://laravel.com/docs/12.x/middleware#registering-middleware

PATH: bootstrap\app.php

CONTROLLER

PATH: app\Http\Controllers\languageController.php

NEW FILE

To show our available languages

PATH: config\languages.php

BUTTOM

PATH: resources\views\_partials\lang.blade.php




