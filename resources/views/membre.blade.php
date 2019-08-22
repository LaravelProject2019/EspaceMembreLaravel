@extends('include/layout')


@section('content')
	
	<h2>LISTE DES MEMBRES</h2>

	<!-- <ul>
		@foreach( $members as $member )
			<li>{{ $member->nom }}</li>
		@endforeach
	</ul> -->
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">Nom</th>
	      <th scope="col">Prenom</th>
	      <th scope="col">Email</th>
	      <th scope="col">Numero Carte</th>
	      <th scope="col">Niveau</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach($members as $member)
		    <tr>
		        <td>{{ $member->nom }}</td>
		        <td>{{ $member->prenom }}</td>
		        <td>{{ $member->email }}</td>
		        <td>{{ $member->numero_carte }}</td>
		        <td>{{ $member->niveau }}</td>
		    </tr>
		@endforeach
	  </tbody>
	</table>

@endsection