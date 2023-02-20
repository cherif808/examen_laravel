@extends('default')

@section('content')

<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://localhost/l2_2022/exercice/public/css/bootstrap.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

	<div>
			
			<h3>Faire votre choix sur une formation</h3>
			<form action="{{ route('candidats.storeFormation', [$candidat->id]) }}" method="post">
				@csrf
				
				<select name="formation_id">
					@foreach ($formatione as $formation)
						<option value="{{ $formation->id }}">{{ $formation->nom }}</option>
					@endforeach
				</select>
				<button type="submit">Postuler</button>
			</form>


			<h3>Mes formations</h3>
			<ul>
				@foreach ($candidat->formations as $formation)
					<li>{{ $formation->nom }}</li>
				@endforeach
			</ul>

	</div>

@stop