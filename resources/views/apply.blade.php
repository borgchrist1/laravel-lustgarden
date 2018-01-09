<!DOCTYPE html>
<htmlhtml lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <form action="/ansokan/post/" method="POST">
        <input type="number" name="personalNumber" placeholder="Your Personalnumber"><br>
        <input type="text" name="name" placeholder="Name"><br>
        <input type="text" name="lastName" placeholder="Lastname"><br>
        <input type="text" name="street" placeholder="Street"><br>
        <input type="number" name="zip" placeholder="Zip-code"><br>
        <input type="text" name="city" placeholder="City"><br>
        <input type="text" name="email" placeholder="Email"><br>
        <input type="number" name="phoneNumber" placeholder="Phonenumber"><br>
        <input type="text" name="chaildName" placeholder="Chailds Name"><br>
        <input type="text" name="chaildName" placeholder="Chailds Name"><br>
        <input type="text" name="chaildName" placeholder="Chailds Name"><br>
        <input type="Number" name="chaildNumber" placeholder="Chailds Personal Number"><br>
        <input type="hidden" name="_token" value="<?php echo csrf_token() ?>" />
        <input type="submit">
    </form>
</html>