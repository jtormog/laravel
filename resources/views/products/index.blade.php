@foreach ($ofertas as $oferta)
<p>{{$oferta["name"]}}  {{$oferta["precio"]}}€</p>   
<img src='{{$oferta["imagen"]}}' alt='{{$oferta["name"]}}'>
@endforeach

<a href="www.google.com">guguel</a>
<a href="www.google.com" @if (1 == 1) style="pointer-events: none; color:rgb(199, 202, 0); text-decoration: none;" @endif>guguel</a>