<form wire:submit.prevent="submit">
    {{-- for select colors --}}
    <div class="mb-4">
        <label class="form-label fw-bold">Select Colors</label>
        <div class="row">
            <div class="col-md-12">
                <div class="form-select-sm">
                    <select class="form-select" wire:model='color_id'>
                        <option value="">Select Colour</option>
                        @foreach ($colors as $color)
                        <option value="{{ $color->id }}" wire:key='color-{{$color->id}}'>{{ $color->name }}</option>
                        @endforeach
                    </select>
                    <x-message.error name="selectedColor" />
                </div>
            </div>
        </div>
    </div>
    {{-- end select colors --}}

    {{-- for select sizes --}}
    <div class="mb-4">
        <label class="form-label fw-bold">Select Sizes</label>
        <div class="row">
            <div class="col-md-12">
                <div class="form-select-sm">
                    <select class="form-select" wire:model='size_id'>
                        <option value="">Select Size</option>
                        @foreach ($sizes as $size)
                        <option value="{{ $size->id }}" wire:key='color-{{$size->id}}'>{{ $size->name }}</option>
                        @endforeach
                    </select>
                    <x-message.error name="selectedSize" />
                </div>
            </div>
        </div>
    </div>
    {{-- end select sizes --}}


    {{-- set QTY  --}}
    <div class="mb-4">
        <div class="col-md-3">
            <label class="form-label fw-bold">Quantity</label>
            <input type="number" wire:model="QTY" class="form-control" placeholder="Enter quantity" min="1">
            <x-message.error name="quantity" />
        </div>
    </div>
<x-button.submit.create></x-button.submit.create>
</form>
