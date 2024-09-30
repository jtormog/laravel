<body style="margin: 0">
    @include('navbar')
    @foreach ($ofertas as $oferta)
        <p>{{ $oferta['name'] }} {{ $oferta['precio'] }}€</p>
        <img src='{{ $oferta['imagen'] }}' alt='{{ $oferta['name'] }}'>
    @endforeach

    @include('footer')

</body>
