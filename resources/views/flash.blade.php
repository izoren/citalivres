<?php
/**
 * Created by PhpStorm.
 * User: Proprietaire
 * Date: 13/12/2018
 * Time: 17:06
 */
?>

@if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
    @elseif(Session::has('danger'))
    <div class="alert alert-danger">
        {{ Session::get('danger') }}
    </div>
@endif

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li> {{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif