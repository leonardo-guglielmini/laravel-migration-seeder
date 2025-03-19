{{-- @dd($trains); --}}

@foreach ($trains as $train)
    <div>
        <h2>{{$train['train_number']}}</h2>
        <p>{{$train['departure_time']}}</p>
    </div>
@endforeach