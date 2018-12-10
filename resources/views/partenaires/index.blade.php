<?php
/**
 * Created by PhpStorm.
 * User: Proprietaire
 * Date: 29/11/2018
 * Time: 16:17
 */
?>

@extends('layouts.app2')
@section('content')




    <div class="quote-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-10">
                    <div class="title text-center">
                        <h1 class="mb-10">Notre mécène</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.  sed do eiusmod tempor incididunt..
                        </p>

                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <h4>
                    <a href="http://www.maisongillardeau.fr/"><img src="/img/gillardeau.png" width="375" height="200"></a>
                </h4>
            </div>
        </div>
    </div>





    <div class="quote-area gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-10">
                    <div class="title text-center">
                        <h1 class="mb-10">Nos partenaires</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.  sed do eiusmod tempor incididunt..
                        </p>

                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($partenaires->chunk(3) as $chunk)
                    @foreach($chunk as $partenaire)
                        <div class="col-md-4">
                            <a href="{{$partenaire->website}}"><img src="/img/logoPartenaire.jpg" width="250" height="175"></a>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
@endsection




