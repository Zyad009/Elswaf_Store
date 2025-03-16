<x-models.show title="{{ $title }} :-">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col" class="text-center">ID</th>
                <th scope="col" class="text-center">Size</th>
                <th scope="col" class="text-center">Colour</th>
                <th scope="col" class="text-center">QTY</th>
                <th scope="col" class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @if ($data)
            @foreach ( $data->productColorsSizes as $singleProduct)
            <tr>
                <th scope="row" class="text-center">{{$singleProduct->id}}|</th>
                <td class="text-center">"{{$singleProduct->size->name}}"</td>
                <td class="text-center">{{$singleProduct->color->name}}</td>
                <td class="text-center">{{$singleProduct->QTY}}</td>
                <td>
                    <div class="d-flex gap-2 justify-content-center">
                        <a href="{{ route("admin-dashboard.single-product.edit", $singleProduct) }}" class="btn btn-warning">
                            <i class="bi bi-pencil-square"></i>
                        </a>

                        <form action="{{ route("admin-dashboard.single-product.delete", $singleProduct) }}" method="post"
                            data-confirm-delete="true" class="delete-form">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-danger confirm-delete">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
</x-models.show>

{{-- <div class="mt-3">
    <!-- Modal 1-->
    <div wire:ignore.self class="modal fade" id="showProductModal" aria-labelledby="modalToggleLabel" tabindex="-1" style="display: none;"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalToggleLabel">Modal 1</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">ID</th>
                                <th scope="col" class="text-center">Size</th>
                                <th scope="col" class="text-center">Colour</th>
                                <th scope="col" class="text-center">QTY</th>
                                <th scope="col" class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($data)
                            @foreach ( $data->productColorsSizes as $singleProduct)
                            <tr>
                                <th scope="row" class="text-center">{{$singleProduct->id}}|</th>
                                <td class="text-center">"{{$singleProduct->size->name}}"</td>
                                <td class="text-center">{{$singleProduct->color->name}}</td>
                                <td class="text-center">{{$singleProduct->QTY}}</td>
                                <td>
                                     <div class="d-flex gap-2 justify-content-center">
                                        <a href="{{ route(" admin-dashboard.single-product.edit", $singleProduct) }}" class="btn btn-warning">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                    
                                        <form action="{{ route('admin-dashboard.product.delete', $singleProduct) }}" method="post"
                                            data-confirm-delete="true" class="delete-form">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-danger confirm-delete">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </div> 
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#modalToggle2" data-bs-toggle="modal"
                        data-bs-dismiss="modal">
                        Open second modal
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 2-->
    <div class="modal fade" id="modalToggle2" aria-labelledby="modalToggleLabel2" tabindex="-1" style="display: none;"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalToggleLabel2">Modal 2</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">Hide this modal and show the first with the button below.</div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#modalToggle" data-bs-toggle="modal"
                        data-bs-dismiss="modal">
                        Back to first
                    </button>
                </div>
            </div>
        </div>
    </div>
</div> --}}