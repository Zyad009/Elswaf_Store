@extends('admin.layouts.app')
@section("admin-title" , "Add Details For Product")
@section('admin-content')

@push("cdn")
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endpush

<x-form.create title="Rest Of The Details">
    <livewire:admin.product.create-single-product :singleProduct="$singleProduct" :colors="$colors"
        :sizes="$sizes" />
</x-form.create>

<script>
    window.addEventListener("success", () => {
                            Swal.fire({
                            icon: "success",
                            title: "Success!",
                            showConfirmButton: false,
                            timer: 1000
                        });
                    });

    window.addEventListener("errorDuplicate", (event) => {
        const productId = event.detail;
        Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "This product already exists!",
        footer: `<a href="/admin-dashboard/single-product/${productId}/edit">Edit Product</a>`
        // footer: `<a href="{{route("admin-dashboard.single-product.edit" , 'product_id' )}}">Edit Product</a>`.replace('product_id' , productId)
        });
    });

</script>

@endsection