@extends('admin.layouts.app')
@section('admin-content')
        <div class="container">
            <div class="row">
                <div class="col-6 mx-auto">

            <div class="mb-3">
                <h1 class="text-center my-2 p-3">Add New Category</h1>
            </div>

                    <form method="post" action="{{route("admin-dashboard.category.store")}}" class="my-5 border p-3" enctype="multipart/form-data">
                        <x-error></x-error>

                        @csrf

                        <div class="mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" id="" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="">Main Image</label>
                            <input type="file" name="main_image" id="main_image" class="form-control">
                        </div>

                        <div class="mb-3">
                            <input type="submit" value="Save" class="form-control btn btn-primary">
                        </div>


                        @if(session('parentCategory'))
                        @php
                            $parentCategory = session('parentCategory');
                        @endphp
                            <a class="btn btn-link" href="{{route("admin-dashboard.subcategory.new" , $parentCategory)}}">Do You Want Add Sub-Category For "{{$parentCategory["name"]}}" </a>
                       @endif
                    </form>
                </div>
            </div>
    </div>

    
@endsection
@push("js")

    <script>
        
        // Get a reference to the file input element
        const inputElement = document.querySelectorAll('input[type=file]');

        console.log(inputElement)
        FilePond.registerPlugin(FilePondPluginImagePreview);
        // Create a FilePond instance
        const mainIMagePond = FilePond.create(document.querySelector('#main_image'), {
            allowImagePreview: true,
            imagePreviewHeight: 200,
            storeAsFile: true,
            allowMultiple: false,
            acceptedFileTypes: ['image/*'],
        });

        
        // FilePond.setOptions({
        //     server: {
        //         process: '{{ route('admin-dashboard.product.set.image') }}',
        //         revert: './image-delete',
        //         headers: {
        //             "X-CSRF-TOKEN": "{{ csrf_token() }}"
        //         }
        //     },
        // });
        </script>
        @endpush