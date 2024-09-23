@if ($comments == null)
    <p>No hay comentarios</p>
@else
    <ul>
        @foreach ($comments as $comment)
            <li><a href='/comments/{{ $loop->index }}'>{{ $comment }}</a><br>
                <a href='/comments/{{ $loop->index }}/edit'> edit</a>
                <form action='/comments/{{ $loop->index }}' method='POST'>
                    <input type='hidden' name='_method' value='DELETE'>
                    <input type='SUBMIT' value="Delete">
                </form>
        @endforeach
    </ul>
@endif
<br><a href='/comments/create'>create</a>
