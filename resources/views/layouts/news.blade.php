





@if (is_array($Flight ?? '') || is_object($Flight ?? '')){
@foreach($Flight ?? '' ?? ''  as $p)
    <h1>{{$p->id}}</h1>
    <p>{{$p->ELSE1}}</p>
    <hr>
@endforeach
}@endif
