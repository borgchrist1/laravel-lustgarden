@extends('layouts.default')
@section('content')
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
    @stop
