@if($errors->any())
<div>
    <p>
        <ul class="list-group">
            @foreach ($errors->all() as $error)
            <li class="list-group-item list-group-item-danger">
                {{$error}}
            </li>
            @endforeach
        </ul>
    </p>
</div>
@endif