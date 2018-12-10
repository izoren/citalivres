<?php
/**
 * Created by PhpStorm.
 * User: Proprietaire
 * Date: 14/11/2018
 * Time: 15:45
 */
?>

@extends('layouts.app2')
@section('content')
	<!-- Start upcoming-event Area -->

	<!-- Titre-->
	<div class="upcoming-event-area gap" id="events">
		<div class="container">

			<div class="row d-flex justify-content-center">
				<div class="menu-content col-lg-10">
					<div class="title text-center">
						<h1 class="mb-10">Nos auteurs invités</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.  sed do eiusmod tempor incididunt..</p>
					</div>
				</div>
			</div>
			<div class="text-center gap">
				@foreach(range('A','Z') as $letter)
					<a href="/auteurs/invites?var={{$letter}}" class="btn btn-info" id="btn-letters">{{$letter}}</a>
				@endforeach
			</div>
			<div class="row">


				<!--Events Gauche-->


				@foreach($auteurs as $auteur)
					@if($loop->iteration % 2 == 0)
						<div class="col-md-6 event-right">
							@else
								<div class="col-md-6 event-left">
									@endif
									<div class="single-events">
										<img class="img-fluid" src="/img/u1.jpg" alt="">
										<a href="#"><h4>{{$auteur -> nom.' '.$auteur -> prenom}}</h4></a>
										<h6><span>21st February</span> at Central government museum</h6>
										<p>{{$auteur->description}}</p>


{{--
<a  href="#modal" data-toggle="modal" data-target="#infos{{$auteur->id}}" class="primary-btn text-uppercase">Details</a>
--}}
										<button type="button" class="primary-btn text-uppercase" data-toggle="modal" data-target="#infos{{$auteur->id}}">Details</button>
									</div>
								</div>
								@endforeach
						</div>
						@foreach($auteurs as $key)
						<div class="modal fade " id="infos{{$key->id}}">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">
									<div class="modal-body">
										<button type="button" class="close" data-dismiss="modal">
											<span>&times;</span>
										</button>
										<div class="gap text-center">


										<img class="img-details" src="/img/insert-picture.png" alt="">
											<h4>{{$key->prenom.' '.$key->nom}}</h4>
										</div>
										<p>{!! nl2br(e($key->description))  !!}</p>
										<button type="button" class="primary-btn close-btn" data-dismiss="modal">Fermer</button>

									</div>



								</div>
							</div>
						</div>
						@endforeach
			</div>
		</div>
	</div>
@endsection




