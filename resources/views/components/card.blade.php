<div class="w-25 text-center py-3 border">
    <img src="{{Vite::asset('resources/img/train.png')}}" alt="train_image" class="w-75">
    <h2>Treno #{{$train_number}}</h2>
    <h3>{{$train_company}}</h3>
    <p><strong>Partenza:</strong> {{$train_departure_time}} - {{$train_departure_station}}</p>
    <p><strong>Arrivo:</strong> {{$train_arrival_time}} - {{$train_arrival_station}}</p>
</div>