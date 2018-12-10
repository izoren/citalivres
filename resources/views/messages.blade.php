<?php
/**
 * Created by PhpStorm.
 * User: Proprietaire
 * Date: 29/10/2018
 * Time: 17:54
 */
?>
@extends('layouts.app')
@section('content')
    <h1>Messages</h1>
    @if(count($messages)>0)
        @foreach($messages as $message)
            <div class="ul-div">
            <ul class="list-group">
                <li class="list-group-item">Name : {{$message->name}}</li>
                <li class="list-group-item">Email : {{$message->email}}</li>
                <li class="list-group-item">Message : {{$message->message}}</li>
            </ul>
            </div>
            @endforeach
    @endif
@endsection
@section('sidebar')
    @parent
    <p>this is appended to the sidebar</p>
@endsection
