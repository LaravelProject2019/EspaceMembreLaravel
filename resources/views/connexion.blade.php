@extends('include/layout')

@section('content')
	 <div class="title m-b-md">
	   	CONNEXION MEMBRE

	    <form method="post" action="/connexion">

	    	{{ csrf_field() }}


		  	<div class="row input">

			    <div class="col">

			    	<input type="email" name="email" class="form-control" placeholder="Votre adresse email" value="{{ old('email')}}">

			        @if($errors->has('email'))

			       		<p class="form-control para alert alert-danger">{{ $errors->first('email') }}</p>

			      	@endif

			    </div>

		  	</div>
		  	<div class="row input">

		  		<div class="col">

				    <input type="password" name="password" class="form-control" placeholder="Votre mot de passe">

				    @if($errors->has('password'))

				    	<p class="form-control para alert alert-danger">{{ $errors->first('password') }}</p>

				    @endif

			    </div>

		  	</div>

		  	
		  	<button  type="submit" class="btn btn-primary">Se connecter</button>

		</form>
	 </div>
@endsection