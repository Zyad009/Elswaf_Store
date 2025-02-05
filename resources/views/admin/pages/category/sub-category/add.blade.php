@extends('admin.layouts.app')
@section('admin-content')
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">

                <div class="mb-3">
                    <h1 class="text-center my-2 p-3">Add New Sub Category</h1>
                </div>

                <form method="post"
                    action="{{ isset($restoredSubCategory) ? route('admin-dashboard.subcategory.update', $restoredSubCategory) : route('admin-dashboard.subcategory.store') }}"
                    class="my-5 border p-3">
                    @csrf
                    @if (isset($restoredSubCategory))
                        @method('PUT')
                    @endif


                    <x-error></x-error>

                    <div class="mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" value="{{ $restoredSubCategory->name ?? '' }}"
                            class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="mainCategory">Main Category</label>
                        <select name="parent_id" id="mainCategory" class="form-control mb-3"
                            onchange="handleCategoryChange()">
                            <option value="{{ $parentCategory->id ?? '' }}">
                                {{ $parentCategory->name ?? 'Select Main Category' }}</option>
                            @foreach ($parentCategories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    @if (isset($restoredSubCategory) || !isset($parentCategory))
                        <div class="mb-3">
                            <label for="subCategory">Sub Category</label>
                            <select name="parent_id" id="subCategory" class="form-control mb-3"
                                onchange="handleCategoryChange()">
                                <option value="">Select Sub Category</option>
                                @foreach ($subCategories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <button type="button" class="btn btn-secondary" onclick="resetSelections()">Reset</button>
                        </div>
                    @endif

                    <div class="mb-3">
                        <input type="submit" value="Save" class="form-control btn btn-primary">
                    </div>

                </form>
            </div>
        </div>
    </div>
    <script>
        function handleCategoryChange() {
            const mainCategory = document.getElementById('mainCategory');
            const subCategory = document.getElementById('subCategory');

            if (mainCategory.value) {
                subCategory.disabled = true;
            } else {
                subCategory.disabled = false;
            }

            if (subCategory.value) {
                mainCategory.disabled = true;
            } else {
                mainCategory.disabled = false;
            }
        }

        function resetSelections() {
            document.getElementById('mainCategory').value = "";
            document.getElementById('subCategory').value = "";
            document.getElementById('mainCategory').disabled = false;
            document.getElementById('subCategory').disabled = false;
        }
    </script>
@endsection
