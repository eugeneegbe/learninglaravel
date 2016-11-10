@extends('layout')
@section('content')
    <h1>Contact Us.</h1>
    <p>Please Contact us by sending a message usng the form below </p>
{{--we will use the following code to display errors --}}
{{--    {{ HTML::ul($errors->all(), array('class' => 'errors')) }}--}}
    <form>
        Subject<br>
        <input type="text" placeholder="Enter your subject " name="subject"><br><br>
        Message:<br>
        <input type="text" style="height: 35px" placeholder="Please enter your message" name="message">
        <br> <br>
        <button type="submit">Send</button>
    </form>
@stop