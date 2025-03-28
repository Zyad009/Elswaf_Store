<x-models.show title="{{ $title }} :-">
    @if ($data && $data->productColorsSizes->isNotEmpty())
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col" class="text-center">ID</th>
                <th scope="col" class="text-center">Size</th>
                <th scope="col" class="text-center">Colour</th>
                <th scope="col" class="text-center">QTY</th>
                <th scope="col" class="text-center">Edit</th>
                <th scope="col" class="text-center">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data->productColorsSizes as $singleProduct)
            <tr>
                <th scope="row" class="text-center">{{ $singleProduct->id }}|</th>
                <td class="text-center">"{{ $singleProduct->size->name }}"</td>
                <td class="text-center">{{ $singleProduct->color->name }}</td>
                <td class="text-center">{{ $singleProduct->QTY }}</td>
                <td class="text-center">
                        <a href="{{ route('admin-dashboard.single-product.edit', encrypt($singleProduct->id)) }}"
                            class="btn btn-warning">
                            <i class="bx bx-pencil"></i>
                        </a>
                    </td>
                    <td class="text-center">
                        <form action="{{ route('admin-dashboard.single-product.delete', $singleProduct) }}"
                        method="post"  >
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger confirm-delete">
                            <i class="bx bx-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @elseif ($data)
    <div class="text-center p-4">
        <div class="alert alert-warning" role="alert"><h6 class="alert-heading fw-bold mb-1">This product does not have any quantities of different sizes and colors !!</h6>
            <br>
            if you want add quantities click heare
            <a href="{{ route("admin-dashboard.single-product.add", ["singleProduct" => $data->slug]) }}" class="btn rounded-pill btn-danger btn-sm">
                Add Details 
            </a>
        </div>
    </div>
    @endif
</x-models.show>