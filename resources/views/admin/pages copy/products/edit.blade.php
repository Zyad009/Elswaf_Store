@extends('admin.layouts.app')
@push("cdn")
<link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
<link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet" />
@endpush
@section('admin-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow-lg border-0 mt-4">
                <div class="card-header bg-primary text-white text-center">
                    <h2 class="mb-0">Edit Product</h2>
                </div>
                <div class="card-body p-4">
                    <form method="post" action="{{ route('admin-dashboard.product.update', $product->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <x-error></x-error>

                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" value="{{ $product->name }}"
                                    required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Category</label>
                                <select name="category_id" class="form-control" required>
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ $category->id == $product->category_id ?
                                        'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Type Size</label>
                                <select name="type_size" class="form-control">
                                    <option value="">Select Type Size</option>
                                    <option value="letter" {{ $product->type_size == 'letter' ? 'selected' : ''
                                        }}>Alphabetic</option>
                                    <option value="number" {{ $product->type_size == 'number' ? 'selected' : ''
                                        }}>Numeric</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Price</label>
                                <input type="number" step="0.01" min="0" name="price" class="form-control"
                                    value="{{ $product->price }}" required>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Description</label>
                                <textarea name="description" class="form-control"
                                    rows="4">{{ $product->description }}</textarea>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Main Image</label>
                                <input type="file" name="main_image" id="main_image" class="form-control"
                                    data-filepond-initial-file="{{ asset($product->images->first()?->main_image) }}">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Hover Image</label>

                                <input type="file" name="hover_image" id="hover_image" class="form-control">
                                
                                <input  type="image"src="{{ asset($product->images->first()?->hover_image) }}" name="imagePreviewHoverImage" id="imagePreviewHoverImage" class="form-control">
                            </div>

                            <div class="col-12">
                                <label class="form-label">Additional Images</label>
                                <input type="file" name="images[]" id="images" class="form-control" multiple>
                            </div>
                        </div>

                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-success w-50">Update Product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
<script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
<script>
    FilePond.registerPlugin(FilePondPluginImagePreview);

        FilePond.create(document.querySelector('#main_image'), {
            allowImagePreview: true,
            imagePreviewHeight: 200,
            storeAsFile: true,
            allowMultiple: false,
            acceptedFileTypes: ['image/*'],
            files: [
                {
                    source: "{{ asset($product->images->first()?->main_image) }}",
                    options: {
                        type: 'local',
                    }
                }
            ]
        });

        // FilePond.create(document.querySelector('#hover_image'), {
        //     allowImagePreview: true,
        //     imagePreviewHeight: 200,
        //     storeAsFile: true,
        //     allowMultiple: false,
        //     acceptedFileTypes: ['image/*'],
            
        //     files: [
        //         {
        //             source: "{{ asset($product->images->first()?->hover_image) }}",
        //             options: {
        //                 type: 'local',
        //             }
        //         }
        //     ]
        // });

        document.addEventListener('DOMContentLoaded', function() {
        // Register FilePond plugins
        FilePond.registerPlugin(FilePondPluginImagePreview);
        
        var imagePreviewHoverImage = document.querySelector('#imagePreviewHoverImage').src;
        // Initialize FilePond
        const pond = FilePond.create(document.querySelector('#hover_image'), {
        allowImagePreview: true,
        imagePreviewMaxHeight: 200,
        storeAsFile: true,
        allowMultiple: false,
        acceptedFileTypes: ['image/*'],
        });
        if (imagePreviewHoverImage != null) {
        pond.addFile(imagePreviewHoverImage);
          }  
        
                });

        FilePond.create(document.querySelector('#images'), {
            allowImagePreview: true,
            imagePreviewHeight: 200,
            storeAsFile: true,
            allowMultiple: true,
            acceptedFileTypes: ['image/*'],
            files: [
                @foreach ($product->images as $image)
                {
                    source: "{{ asset($image->path) }}",
                    options: {
                        type: 'local',
                    }
                },
                @endforeach
            ]
        });
</script>
@endpush