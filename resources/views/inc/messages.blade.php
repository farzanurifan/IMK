@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" aria-label="Close" onclick="hilang()"><span aria-hidden="true">&times;</span></button>
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" aria-label="Close" onclick="hilang()"><span aria-hidden="true">&times;</span></button>
        {{session('success')}}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" aria-label="Close" onclick="hilang()"><span aria-hidden="true">&times;</span></button>
        {{session('error')}}
    </div>
@endif
