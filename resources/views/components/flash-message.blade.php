@if (session()->has('message'))
    <div style="position:fixed;top:0;left:50%;background:aquamarine;opacity:50%">
        <p>{{session('message')}}</p>
    </div>
@endif