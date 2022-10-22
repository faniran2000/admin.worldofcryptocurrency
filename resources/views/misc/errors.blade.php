@if(Session::has('success'))
    <div class="m-2 p-1 text-center font-weight-bold alert alert-success border-bottom-2 border-success"> {{ Session::get('success') }} </div>
@endif

@if(Session::has('error'))
    <div class="m-2 p-1 text-center font-weight-bold alert alert-danger border-bottom-2 border-danger"> {{ Session::get('error') }} </div>
@endif

@if(Session::has('info'))
    <div class="m-2 p-1 text-center font-weight-bold alert alert-info border-bottom-2 border-info"> {{ Session::get('info') }} </div>
@endif

@if($errors->any())
    <ul class="alert alert-danger p-1">
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif