<?php
/**
 * Created by PhpStorm.
 * User: Proprietaire
 * Date: 14/11/2018
 * Time: 16:01
 */
?>

@if(Request::is('/'))
    <div class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row fullscreen d-flex align-items-center justify-content-center">
                <div class="banner-content col-lg-8">
                    <h6 class="text-white">Openning on 21st February, 2018</h6>
                    <h1 class="text-white">CITA'LIVRES</h1>
                    <p class="pt-20 pb-20 text-white">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.  sed do eiusmod tempor incididunt..
                    </p>
                    <a href="{{url('/programme')}}" class="primary-btn text-uppercase">Programme</a>
                </div>
            </div>
        </div>
    </div>
@else
    <div class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">

                    <h1 class="text-white"> Les @if(Route::is('auteurs.*')) auteurs  @elseif(Request::is('partenaires')) partenaires

                    @endif
                    </h1>
{{--
                    <p class="text-white link-nav"><a href="{{url('/')}}">Accueil </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{url('/auteurs')}}">Auteurs</a></p>
--}}
                </div>
            </div>
        </div>
    </div>
@endif
