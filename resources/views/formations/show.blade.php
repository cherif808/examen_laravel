@extends('default')

@section('content')

	
	<div>
			<h3>Mes references</h3>
			<ul>
				@foreach ($formation->referentiels as $referentiel)
					<li>{{ $referentiel->libelle }}</li>
				@endforeach
			</ul>

			<h3>Ajouter un referentiel</h3>
			<form action="{{ route('formations.storeReferentiel', [$formation->id]) }}" method="post">
				@csrf
				
				<select name="referentiel_id">
					@foreach ($referentiele as $referentiel)
						<option value="{{ $referentiel->id }}">{{ $referentiel->libelle }}</option>
					@endforeach
				</select>
				<button type="submit">Ajouter</button>
			</form>

	</div>
@stop