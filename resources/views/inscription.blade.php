@extends('include/layout')

@section('content')
	 <div class="title m-b-md">
	   	INSCRIPTION MEMBRE

	    <form method="post" action="/inscription">

	    	{{ csrf_field() }}

		  	<div class="row input">

			    <div class="col">
			      <input type="text" name="nom" class="form-control" placeholder="Nom" value="{{ old('nom')}}">

			      @if($errors->has('nom'))

			      	<p class="form-control para alert alert-danger">{{ $errors->first('nom') }}</p>

			      @endif

			    </div>

			    <div class="col">
			      <input type="text" name="prenom" class="form-control" placeholder="Prénom" value="{{ old('prenom')}}">

			       @if($errors->has('prenom'))

			      	<p class="form-control para alert alert-danger">{{ $errors->first('prenom') }}</p>

			      @endif

			    </div>
			</div>

		  	<div class="row input">

			    <div class="col">
			      <input type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email')}}">

			       @if($errors->has('email'))

			      	<p class="form-control para alert alert-danger">{{ $errors->first('email') }}</p>

			      @endif

			    </div>

			    <div class="col">
			      <input type="text" name="password" class="form-control" placeholder="Password">

			       @if($errors->has('password'))

			      	<p class="form-control para alert alert-danger">{{ $errors->first('password') }}</p>

			      @endif

			    </div>
		  	</div>

		  	<div class="row input">

			    <div class="col">
			      <input type="text" name="numero_carte" class="form-control" placeholder="Numero Carte" value="{{ old('numero_carte')}}">

			       @if($errors->has('numero_carte'))

			      	<p class="form-control para alert alert-danger">{{ $errors->first('numero_carte') }}</p>

			      @endif

			    </div>

			    <div class="col">
			    	<select name="niveau" class="form-control">
			    		<option value=""></option>
			    		<option value="Licence">LICENCE</option>
			    		<option value="Master">MASTER</option>
			    		<option value="Doctorat">DOCTORAT</option>
			    	</select>

			    	 @if($errors->has('niveau'))

			      		<p class="form-control para alert alert-danger">{{ $errors->first('niveau') }}</p>

			      	 @endif

			    </div>
		  	</div>

		  <button type="submit" class="btn btn-primary">M'inscrire</button>

		</form>
	</div>
@endsection