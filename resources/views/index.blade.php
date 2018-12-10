@extends('layouts.app2')
@section('content')
	<!-- start banner Area -->

	<!-- End banner Area -->

	<!-- Start quote Area -->
	<div class="quote-area gap">

		<div class="container">
			<div class="row">

				<div class="col-md-6 text-center">
					<h1>Le mot des présidents</h1>
					<img src="/img/insert-picture.png" alt="" title="" class="gap" />
					<!--<h1>
						<span>Music</span> gives soul to the universe, <br>
						wings to the <span>mind</span>, flight <br>
						to the <span>imagination</span>.
					</h1>
					-->

					<p class="text-justify">{{$mots[0]->mot}}</p>
				</div>
				<div class="col-md-6 text-center">
					<h1>Le mot du maire</h1>
					<img src="/img/insert-picture.png" alt="" title="" class="gap" />
					<!--<h1>
						<span>Music</span> gives soul to the universe, <br>
						wings to the <span>mind</span>, flight <br>
						to the <span>imagination</span>.
					</h1>
					-->

					<p class="text-justify">{{$mots[1]->mot}}</p>
				</div>
			</div>
		</div>
	</div>
	<!-- End quote Area -->
@endsection




