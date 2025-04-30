@extends('errors.partials.app')
@section('error-content')
<div class="container-xxl container-p-y">
    <div class="misc-wrapper">
        <h2 class="mb-2 mx-2">Unauthorized Access :(</h2>
        <p class="mb-4 mx-2">Oops! 😖 You must be logged in to view this page. Please check your credentials or contact support if you're having trouble
        logging in.</p>
        <div class="mt-3">
            <img src="{{asset('admin/assets')}}/img/illustrations/401-2.png" alt="401-2"
                width="500" class="img-fluid" data-app-dark-img="illustrations/401-2.png"
                data-app-light-img="illustrations/401-2.png" />
        </div>
    </div>
</div>
@endsection