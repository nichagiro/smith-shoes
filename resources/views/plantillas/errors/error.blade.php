@if ($errors->any())
    <div class="alert alert-danger w-75" role="alert">
        @foreach ($errors->all() as $error)  
            <ul>
            <b>{{$error}}</b>
            </ul>            
        @endforeach
    </div>
@endif
