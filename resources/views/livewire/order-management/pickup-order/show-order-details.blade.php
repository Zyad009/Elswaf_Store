<x-models.xlarge title="{{ $title }} :-">
    @if ($data)
    <table class="table table-hover">
        <thead>
            <tr>
                <th class="text-center">Name</th>
                <th class="text-center">Size</th>
                <th class="text-center">Colour</th>
                <th class="text-center">QTY</th>
                <th class="text-center">Discount For 1</th>
                <th class="text-center">Final Price For (T)</th>
                <th class="text-center">Edit</th>
                <th class="text-center">Delete</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($data as $singleProduct)
            <tr>
                <td class="text-center">{{ $singleProduct->product_name }}</td>

                <td class="text-center">
                    @if( $key == $singleProduct->id.'&'.$singleProduct->order_id)
                    <input type="text" wire:model.blur="selectedSize" class="form-control form-control-sm">
                    @else
                    {{ $singleProduct->size }}
                    @endif
                </td>

                <td class="text-center">
                    @if( $key == $singleProduct->id.'&'.$singleProduct->order_id)
                    <input type="text" wire:model.blur="selectedColor" class="form-control form-control-sm">
                    @else
                    {{ $singleProduct->color }}
                    @endif
                </td>

                <td class="text-center">
                    @if( $key == $singleProduct->id.'&'.$singleProduct->order_id )
                    <input type="number" wire:model.blur="QTY" class="form-control form-control-sm">
                    @else
                    {{ $singleProduct->QTY }}
                    @endif
                </td>

                <td class="text-center">{{ $singleProduct->discount }}</td>
                <td class="text-center">{{ $singleProduct->final_price }}</td>

                <td class="text-center">
                @if ($deleteKey != $secritKey)
                    <button wire:click="toggleEditMode({{ $singleProduct->id}} , {{$singleProduct->order_id}})"
                        class="btn btn-outline-primary">
                        @if( $key == $singleProduct->id.'&'.$singleProduct->order_id)
                        <i class="bx bx-x"></i>
                        @else
                        <i class="bx bx-edit"></i>
                        @endif
                    </button>
                    @else
                    <button class="btn btn-secondary " disabled>
                        <i class="bx bx-edit"></i>
                    </button>
                    @endif
                </td>

                <td class="text-center">

                    @if ($deleteKey != $secritKey)
                    <button class="btn btn-danger confirm-delete"
                        wire:click='deleteItem("{{$singleProduct->slug}}" , "{{$singleProduct->order_id}}" , {{$singleProduct->QTY}} , "{{$singleProduct->product_name}}")'>
                        <i class="bx bx-trash"></i>
                    </button>
                    @else
                    <button class="btn btn-secondary " disabled>
                        <i class="bx bx-trash"></i>
                    </button>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    @if ($deleteKey == $secritKey)
    <div class="border rounded p-3 my-3 bg-light">
        <div class="row g-2 align-items-stretch">
            <label class="form-label fw-bold">Remove: {{$productName}}</label>
            <div class="col-md-5 d-flex flex-column">
                <label class="form-label fw-bold">Reason Delete</label>
                <textarea wire:model='reasonDelete' class="form-control form-control-sm flex-grow-1" placeholder="reason delete"></textarea>
                <x-message.error name="reasonDelete"/>
            </div>

            <div class="col-md-3 d-flex flex-column">
                <label class="form-label fw-bold">QTY</label>
                <input type="number"
                    wire:model="QTYDelete" min="0" max="{{$maxDeletedQTY}}"
                    class="form-control form-control-sm w-100 h-100" placeholder="QTY">
                    <x-message.error name="QTYDelete"/>
                </div>
                
                <div class="col-md-2 d-flex flex-column justify-content-end">
                    <label class="form-label fw-bold invisible">Cancel</label>
                    <button class="btn btn-danger btn-sm w-100 h-100" wire:click='canceleDelete'>
                        <i class="bx bx-x"></i>
                    </button>
            </div>

            <div class="col-md-2 d-flex flex-column justify-content-end">
                <label class="form-label fw-bold invisible">Delete</label>
                <button class="btn btn-danger btn-sm w-100 h-100"
                    wire:click='removeItem("{{$singleProduct->slug}}" , "{{$singleProduct->color}}" , "{{$singleProduct->size}}" , "{{$singleProduct->order_id}}" )'>
                    <i class="bx bx-trash"></i>
                </button>
            </div>
        </div>
    </div>
    @endif

    @if($key)
    <div class="text-end mt-3">
        <button wire:click="saveChanges" class="btn btn-success">
            <i class="bx bx-save"></i> Save Changes
        </button>
    </div>
    @endif

    @elseif ($data)
    <div class="text-center p-4">
        <div class="alert alert-warning" role="alert">
            <h6 class="alert-heading fw-bold mb-1">This product does not have any quantities of different sizes and
                colors !!</h6>
            <br>
            if you want add quantities click here
            <a href="{{ route(" admin-dashboard.single-product.add", ["singleProduct"=> $data->slug]) }}"
                class="btn rounded-pill btn-danger btn-sm">
                Add Details
            </a>
        </div>
    </div>
    @endif
</x-models.xlarge>