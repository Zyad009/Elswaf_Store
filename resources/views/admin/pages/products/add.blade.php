@extends('admin.layouts.app')
@section('admin-content')
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">

                <div class="mb-3">
                    <h1 class="text-center my-2 p-3">Add New Product</h1>
                </div>

                <form method="post" novalidate action="{{ route('admin-dashboard.product.store') }}" class="my-5 border p-3"
                    enctype="multipart/form-data">
                    <x-error></x-error>
                    @csrf

                    <div class="mb-3">
                        <label for="">Name</label>
                        <input type="text" name="name" id="" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="category_id">Category</label>
                        <select name="category_id" id="category_id" class="form-control" required>
                            <option value="" class="text-center">Selet Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="type_size">Type Size:</label>
                        <select name="type_size" id="type_size" class="form-control">
                            <option value="" class="text-center">Selet A Type Size</option>
                            <option value="letter">Alphabetic</option>
                            <option value="number">Numeric</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="">Description</label>
                        <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="">Price</label>
                        <input type="number" step="0.01" min="0" name="price" id=""
                            class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="">Main Image</label>
                        <input type="file" name="main_image" id="main_image" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="">Hover Image</label>
                        <input type="file" name="hover_image" id="hover_image" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="">Images</label>
                        <input type="file" name="images[]" id="images" class="form-control">
                    </div>

                    <div class="mb-3">
                        <input type="submit" value="Save" class="form-control btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- <script>
        function toggleCheckboxes(className, check) {
            const checkboxes = document.querySelectorAll(`.${className}`);
            checkboxes.forEach(checkbox => {
                checkbox.checked = check;
            });
        }
    </script> --}}
@endsection

@push('js')
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

        const hoverIMagePond = FilePond.create(document.querySelector('#hover_image'), {
            allowImagePreview: true,
            imagePreviewHeight: 200,
            storeAsFile: true,
            allowMultiple: false,
            acceptedFileTypes: ['image/*'],
        });

        const imagesPond = FilePond.create(document.querySelector('#images'), {
            allowImagePreview: true,
            imagePreviewHeight: 200,
            storeAsFile: true,
            allowMultiple: true,
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
