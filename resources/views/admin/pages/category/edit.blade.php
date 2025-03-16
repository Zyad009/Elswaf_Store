@extends('admin.layouts.app')
@push("cdn")
<link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
<link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet" />
@endpush
@section('admin-content')
<div class="container">
    <div class="row">
        <div class="col-6 mx-auto">

            <div class="mb-3">
                <h1 class="text-center my-2 p-3">Edit Category</h1>
            </div>

            <form method="post" action="{{route("admin-dashboard.category.update" , $category)}}"
                class="my-5 border p-3">
                <x-error></x-error>
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="">Name</label>
                    <input type="text" name="name_en" id="" value="{{ $category->name }}" class="form-control">
                </div>

                <div class="col-md-6">
                    <label class="form-label">Main Image</label>

                    <input type="file" name="main_image" id="main_image" class="form-control">

                    <input style="display: none" type="image" src="{{ asset($category->images->first()?->hover_image) }}"
                        name="imagePreviewMainImage" id="imagePreviewMainImage" class="form-control">
                </div>

                <div class="mb-3">
                    <input type="submit" value="Save" class="form-control btn btn-primary">
                </div>

            </form>
        </div>
    </div>
</div>

@push('js')
<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
<script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
<script>
    FilePond.registerPlugin(FilePondPluginImagePreview);

    document.addEventListener('DOMContentLoaded', function() {
    // Register FilePond plugins
    FilePond.registerPlugin(FilePondPluginImagePreview);
    
    var imagePreviewMainImage = document.querySelector('#imagePreviewMainImage').src;
    // Initialize FilePond
    const pond = FilePond.create(document.querySelector('#main_image'), {
    allowImagePreview: true,
    imagePreviewMaxHeight: 200,
    storeAsFile: true,
    allowMultiple: false,
    acceptedFileTypes: ['image/*'],
    });
    if (imagePreviewMainImage != null) {
    pond.addFile(imagePreviewMainImage);
      }
    
            });
</script>
@endpush

@endsection