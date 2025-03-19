@extends('admin.layouts.app')
@section("admin-title" , "Edit Sub-Category")
@section('admin-content')

<x-form.edit title="Edit sub-Category" :name="$subCategory->name ?? $editCategory->name">

    <form method="post" action="{{ route('admin-dashboard.subcategory.update', $subCategory ?? $editCategory) }}"
        class="">
        <x-error></x-error>
        @csrf
        @method("PUT")


        @if (!isset($editCategory))
        @php
        $isMainCategory = $subCategory->parent->parent_id == null;
        if ($isMainCategory) {
        $mainId = $subCategory->parent->id;
        $mainName = $subCategory->parent->name;
        $editCategory= $subCategory;
        } else {
        $subId = $subCategory->parent->id;
        $subName = $subCategory->parent->name;
        $editCategory = $subCategory ;
        }
        $status = null
        @endphp

        @endif

        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" name="name" value="{{ $subCategory->name ?? $editCategory->name}}" id="name"
                class="form-control" required>
        </div>


        @if ($status == 1 || isset($mainId))
        <!-- Main Category Dropdown -->
        <div class="mb-3" id="mainCategorySection">
            <label for="mainCategory">Main Category</label>
            <select name="parent_id" id="mainCategory" class="form-control">
                <option value="{{ $mainId ?? '' }}">{{ $mainName ?? 'Select Main Category' }}</option>
                @foreach ($mainCategories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        @if(!$status == 1)
        <a class="btn btn-link" href="{{route("admin-dashboard.subcategory.edit.2" , $editCategory)}}">Do You Want
        Change To Selected "Sub Category" </a>
        @endif

        @elseif($status == 2 || isset($subId))

        <!-- Sub Category Dropdown -->
        <div class="mb-3" id="subCategorySection">
            <label for="subCategory">Sub Category</label>
            <select name="parent_id" id="subCategory" class="form-control">
                <option value="{{ $subId ?? '' }}">{{ $subName ?? 'Select Sub Category' }}</option>
                @foreach ($subCategories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        @if(!$status == 2)
        <a class="btn btn-link" href="{{route("admin-dashboard.subcategory.edit.2" , $editCategory)}}">Do You Want
            Change To Selected "Main Category" </a>
        @endif

        @endif

<x-button.submit.edit></x-button.submit.edit>
    </form>
</x-form.edit>


@endsection