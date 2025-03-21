<div class="col">
    <div class="text-center py-4 border rounded shadow bg-light h-100">
        <img src="{{Vite::asset('resources/img/train.png')}}" alt="train_image" class="img-fluid w-50 mb-3 rounded">
        <h2 class="fw-bold text-dark">Treno #{{$train_number}}</h2>
        <h3 class="text-primary">{{$train_company}}</h3>
        <p class="mb-1 text-muted"><strong>Partenza:</strong> {{$train_departure_time}} - {{$train_departure_station}}</p>
        <p class="mb-1 text-muted"><strong>Arrivo:</strong> {{$train_arrival_time}} - {{$train_arrival_station}}</p>
    </div>
</div>