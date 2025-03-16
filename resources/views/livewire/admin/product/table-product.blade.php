<div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="width: 10px">ID</th>
                <th class="text-center">Name</th>
                <th class="text-center">Category</th>
                <th class="text-center">QTY</th>
                <th class="text-center">Description</th>
                <th class="text-center">Price</th>
                <th class="text-center">Image</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $product)
            <tr>
                <td class="text-center">{{ $product->id }}</td>
                <td class="text-center">{{ $product->name }}</td>
                <td class="text-center">{{ $product->category->name }}</td>
                <td class="text-center">{{ $product->QTY }}</td>
                <td class="text-center">{{ $product->description }}</td>
                <td class="text-center">{{ $product->price }}</td>
                <td class="text-center">
                    <img src="{{ asset($product->images->first()?->main_image) }}" width="120" height="120"
                        style="aspect-ratio: 1/1; object-fit: cover; border-radius: 50%;" alt="product">
                </td>

                <td class="text-center">
                    <div class="d-flex gap-2 justify-content-center">
                        <a href="{{ route('admin-dashboard.product.edit', $product) }}" class="btn btn-warning">
                            <i class="bi bi-pencil-square"></i>
                        </a>

                        <a class="btn btn-info" wire:click.prevent='$dispatch("showProduct" , {id: {{$product->id}} })'>
                            <i class='bx bx-show '></i>
                        </a>

                        <form action="{{ route('admin-dashboard.product.delete', $product) }}" method="post"
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
            @empty
            <tr>
                <td colspan="10" class="text-center">No products found</td>
            </tr>
            @endforelse
        </tbody>
        <h5 class="text-center">Total: {{ $products->total() }}</h5>
    </table>
    <div>
        {{ $products->links() }}
    </div>
</div>