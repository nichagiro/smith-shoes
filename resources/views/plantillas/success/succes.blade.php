@if (session('status'))
    <div class="alert alert-success w-75"  role="alert">
        <b>{{session('status')}}</b>      
    </div>
@endif
