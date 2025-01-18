@extends('admin.layouts.app')
@section('admin-content')
        <div class="container">
            <div class="row">
                <div class="col-6 mx-auto">

                        <div class="mb-3">
                          <h1 class="text-center my-2 p-3">Add New Product</h1>
                        </div>

                    <form method="post" action="{{route("store.product")}}" class="my-5 border p-3" enctype="multipart/form-data">
                        <x-error></x-error>
                        <x-success></x-success>
                        @csrf

                        <div class="mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" id="" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="category_id">Category</label>
                            <select name="category_id" id="category_id" class="form-control" required>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
{{-- 
                    <div class="mb-3">
                        <h5>Size</h5>
                        <button type="button" class="btn btn-sm btn-primary mb-2" onclick="toggleCheckboxes('sizes', true)">Check All</button>
                        <button type="button" class="btn btn-sm btn-danger mb-2" onclick="toggleCheckboxes('sizes', false)">Canseld Check</button>
                        <div class="row">
                            @foreach($sizes as $size)
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input type="checkbox" name="sizes[]" value="{{ $size->id }}" class="form-check-input sizes" id="size-{{ $size->id }}">
                                        <label for="size-{{ $size->id }}" class="form-check-label">{{ $size->name }}</label>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="mb-3">
                        <h5>Colour</h5>
                        <button type="button" class="btn btn-sm btn-primary mb-2" onclick="toggleCheckboxes('colors', true)">Check All</button>
                        <button type="button" class="btn btn-sm btn-danger mb-2" onclick="toggleCheckboxes('colors', false)">Canseld Check</button>
                        <div class="row">
                            @foreach($colors as $color)
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input type="checkbox" name="colors[]" value="{{ $color->id }}" class="form-check-input colors" id="color-{{ $color->id }}">
                                        <label for="color-{{ $color->id }}" class="form-check-label">{{ $color->name }}</label>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div> --}}


                        <div class="mb-3">
                            <label for="">Total QTY</label>
                            <input type="number" name="QTY" id="" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="">Description</label>
                            <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="">Price</label>
                            <input type="number" step="0.01" min="0" name="price" id="" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="">Offer</label>
                            <input type="number" step="0.01" min="0" name="offer" value="0" id="" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="">Image</label>
                            <input type="file" name="image" id="" class="form-control">
                        </div>
                        
                        <div class="mb-3">
                            <input type="submit" value="Save" class="form-control btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
    </div>

        <script>
        function toggleCheckboxes(className, check) {
            const checkboxes = document.querySelectorAll(`.${className}`);
            checkboxes.forEach(checkbox => {
                checkbox.checked = check;
            });
        }
    </script>

@endsection