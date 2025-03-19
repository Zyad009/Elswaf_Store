@extends('admin.layouts.app')
@section("admin-title" , "Edit Category")
@push("cdn")
<link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
<link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet" />
@endpush
@section('admin-content')
<x-form.edit title="Edit category" :name="$category->name">
    <form method="post" action="{{route("admin-dashboard.category.update" , $category)}}"
        class="">
        <x-error></x-error>
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="">Name</label>
            <input type="text" name="name_en" id="" value="{{ $category->name }}" class="form-control">
        </div>

        <div class="col-md-12">
            <label class="form-label">Main Image</label>

            <input type="file" name="main_image" id="main_image" class="form-control">

            <input style="display: none" type="image" src="{{ asset($category->images->first()?->hover_image) }}"
                name="imagePreviewMainImage" id="imagePreviewMainImage" class="form-control">
        </div>

        <x-button.submit.edit></x-button.submit.edit>

    </form>
</x-form.edit>

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