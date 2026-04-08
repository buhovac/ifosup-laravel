
@foreach ($membres as $membre)
    @if($membre['age'] >= 18)
        <p>{{$membre['prenom']}} -- Age {{$membre['age']}}</p>
    @else
        <p>{{$membre['prenom']}} -- Age, Mineur</p>
    @endif
@endforeach
