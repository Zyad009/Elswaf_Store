<div>
    <div class="details-filter-row details-row-size">
        <label>Size:</label>
        <div class="select-custom">
            <select name="size" class="form-control" wire:model.live="selectedSize">
                <option value="#" selected="selected">Select a size</option>
                @foreach ($details as $index => $item)
                <option value="{{ $index }}" wire:key="size-{{ $index }}">{{ $item['name'] }}</option>
                @endforeach
            </select>
        </div><!-- End .select-custom -->
    </div><!-- End .details-filter-row -->

    <div class="details-filter-row details-row-size">
        <label>Color:</label>
        <div class="select-custom">
            <select name="color" class="form-control" wire:model.live="selectedColor">
                <option value="#" selected="selected">Select a color</option>
                @foreach ($details[$selectedSize]['colors'] ?? [] as $color)
                <option value="{{ $color['id'] }}" wire:key ="color-{{$color['id']}}">{{ $color['name'] }}</option>
                @endforeach
            </select>
        </div><!-- End .select-custom -->
    </div>
</div>