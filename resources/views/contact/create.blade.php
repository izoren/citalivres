<?php
/**
 * Created by PhpStorm.
 * User: Proprietaire
 * Date: 11/12/2018
 * Time: 14:14
 */
?>
@extends('layouts.app2')
@section('content')

    <div class="quote-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-10">
                    <div class="title text-center">

                        <h1 class="mb-10">Nous contacter</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.  sed do eiusmod tempor incididunt..
                        </p>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d13211.766814510236!2d-1.1918635546464735!3d45.88267564394405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e3!4m0!4m5!1s0x480160bd83656ae1%3A0x9acdd06640faf8f2!2sCitadelle+du+Ch%C3%A2teau-d&#39;Ol%C3%A9ron%2C+Le+Ch%C3%A2teau-d&#39;Ol%C3%A9ron!3m2!1d45.884732199999995!2d-1.1893071!5e0!3m2!1sfr!2sfr!4v1544538428078" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col-md-6">

                    {!! Form::open(['route' => 'contact.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}

                    <div class="form-group required{{ $errors->has('nom') ? ' has-error' : '' }}">
                        {!! Form::label('first_name', 'Prénom', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::text('nom', null, ['class' => 'form-control']) !!}
                            @if ($errors->has('nom'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nom') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group required{{ $errors->has('email') ? ' has-error' : '' }}">
                        {!! Form::label('email', 'Adresse e-mail', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::text('email', null, ['class' => 'form-control']) !!}
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group required{{ $errors->has('message') ? ' has-error' : '' }}">
                        {!! Form::label('message', 'Adresse e-mail', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::text('message', null, ['class' => 'form-control']) !!}
                            @if ($errors->has('message'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('message') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="pull-right">
                        {!! Form::button('Enregistrer', ['type' => 'submit', 'class' => 'btn btn-success']) !!}
                    </div>
                    {!! Form::close() !!}







                </div>

            </div>
        </div>
    </div>
@endsection
