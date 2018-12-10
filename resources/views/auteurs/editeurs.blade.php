<?php
/**
 * Created by PhpStorm.
 * User: Proprietaire
 * Date: 29/11/2018
 * Time: 22:11
 */
?>
@extends('layouts.app2')
@section('content')
    <div class="quote-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-10">
                    <div class="title text-center">

                        <h1 class="mb-10">Nos editeurs présents</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.  sed do eiusmod tempor incididunt..
                        </p>

                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($editeurs->chunk(3) as $chunk)
                    @foreach($chunk as $editeur)
                        <div class="col-md-4">
                            <a href="{{$editeur->website}}"><img src="/img/editeurEdilivre.png" width="250" height="175"></a>
                        </div>
                    @endforeach
                @endforeach
            </div>








            {{--            <div class="col-md-4">
                            <ul>
                                @foreach($auteurs as $auteur)
                                    <li>
                                        <h4>
                                            @if(!empty($auteur->website))
                                                <a href="{{$auteur->website}}">@endif{{$auteur->nom.' '.$auteur->prenom}}</a>
                                        </h4>
                                    </li>
                                @endforeach
                            </ul>
                        </div>--}}



        </div>
    </div>
@endsection

