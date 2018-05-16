@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="jsdemo-notification-button" style="display: none;">
            <button id="autoClick" type="button" class="btn btn-success btn-block waves-effect"
                data-text-content="{{$error}}"
                data-placement-from="top" data-placement-align="center"
                data-animate-enter="" data-animate-exit="" data-color-name="alert-danger">
            </button>
        <div>
    @endforeach
@endif

@if(session('success'))
    <div class="jsdemo-notification-button" style="display: none;">{{-- ; border: 1px solid; padding: 10px; box-shadow: 5px 10px #888888;"> --}}
        <button id="autoClick" type="button" class="btn btn-success btn-block waves-effect"
            data-text-content="{{session('success')}}"
            data-placement-from="top" data-placement-align="center"
            data-animate-enter="" data-animate-exit="" data-color-name="alert-success" >
        </button>
    <div>
@endif

@if(session('error'))
    <div class="jsdemo-notification-button" style="display: none;">
        <button id="autoClick" type="button" class="btn btn-success btn-block waves-effect"
            data-text-content="{{session('error')}}"
            data-placement-from="top" data-placement-align="center"
            data-animate-enter="" data-animate-exit="" data-color-name="alert-danger">
        </button>
    <div>
@endif