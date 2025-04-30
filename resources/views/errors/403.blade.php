@extends('errors.partials.app')

@section('error-content')
<div class="container-xxl container-p-y">
    <div class="misc-wrapper">
        <h2 class="mb-2 mx-2">Access Forbidden 🚫</h2>
        <p class="mb-4 mx-2">Sorry 😔, you don't have permission to access this page.</p>
        <div class="mt-3">
            <img src="{{asset('admin/assets')}}/img/illustrations/403.jpg" alt="page-misc-error-light"
                width="500" class="img-fluid" data-app-dark-img="illustrations/page-misc-error-dark.png"
                data-app-light-img="illustrations/403.jpg" />
        </div>
    </div>
</div>
@endsection