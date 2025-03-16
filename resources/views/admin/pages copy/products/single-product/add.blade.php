@extends('admin.layouts.app')
@section('admin-content')

@push("cdn")
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endpush

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-lg border-0 mt-4">
                <div class="card-header bg-primary text-white text-center">
                    <h2 class="mb-0">QTY For Product</h2>
                </div>
                <div class="card-body p-4">
                    <livewire:admin.product.create-single-product :singleProduct="$singleProduct" :colors="$colors"
                        :sizes="$sizes" />
                </div>
            </div>
        </div>
    </div>
</div>

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