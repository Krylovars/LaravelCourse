@if($rand > 5)
    <div>{{ $rand }}</div>
@else
    <div>{{ $time }}</div>
@endif
<hr>
@foreach($items as $item)
    <div>{{ $item}}</div>
@endforeach