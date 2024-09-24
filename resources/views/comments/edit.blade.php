<a href="/comments">back</a>
<form method=POST action=/comments/{{$id}}>
    <input type='hidden' name=_method value='PATCH'>
    <input value='{{ $comment }}' name='comment'>
    <input type=SUBMIT>
</form>
