@extends('layouts.default')
       
    @section('header')
       <h1> This is the header!</h1>
    @endsection

    @section('maincontent')
        <p class="text-green-500 bg-blue-500 border-yellow-500 border-2">Test Tailwind</p>
        <a href="{{ route("testpage") }}">TEST</a> 

        <form action="{{ route ("formsubmitted") }}" method="post">
            @csrf
            <label for="fullname"> Full name: </label>
            <input type="text" id="fullname" name="fullname" placeholder="Type your full name!">
            <br>
            <label for="email"> Email: </label>
            <input type="text" id="email" name="email" placeholder="Type your email!">
            <button type="submit">Submit</button>
        </form>
    @endsection
    @section('footer')
        <h2>This is the footer!</h2>
    @endsection