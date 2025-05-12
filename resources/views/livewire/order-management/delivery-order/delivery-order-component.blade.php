<div>
    <div class="d-flex justify-content-between align-items-end gap-3 w-100 mt-3">
        <div class="d-flex gap-2 flex-grow-1 align-items-end">

            <div class="flex-grow-1">
                <input type="text" wire:model.live="search" class="form-control form-control-lg w-100"
                    placeholder="Search: Code">
            </div>

        </div>

    </div>

    <div class="card mx-auto my-4 px-3 py-2 w-100">
        <div class="table-responsive text-nowrap mt-2">

            <div class="mb-3 text-center">
                @foreach([ 'pending','accepted', 'completed', 'cancelled'] as $status)
                <label style="margin-right: 20px; transform: scale(1.2); display: inline-flex; align-items: center;">
                    <input type="checkbox" class="status-filter" wire:model.live="statusFilters" value="{{ $status }}"
                        style="margin-right: 5px;">
                    {{ ucfirst($status) }}
                </label>
                @endforeach

                <label style="margin-left: 50px; transform: scale(1.2); display: inline-flex; align-items: center;">
                    <input type="checkbox" id="selectAll" onclick="checkAllStatuses()" style="margin-right: 5px;">
                    (dis&select All)
                </label>
            </div>
            @if (isset($orders) && count($orders) > 0)
            <table class="table" wire:poll.60s>
                <thead>
                    <tr>
                        {{-- <th class="text-center">Code</th> --}}
                        <th class="text-center">Name</th>
                        <th class="text-center">Phone</th>
                        <th class="text-center">Main Price</th>
                        <th class="text-center">Discount</th>
                        <th class="text-center">Fanil Price</th>
                        <th class="text-center">Details</th>
                        <th class="text-center">Date Time</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse ($orders as $order)

                    <tr>
                        {{-- <td><i class="fab fa-angular fa-lg text-danger me-3 text-center"></i>
                            <strong>{{ $order->pickup_code}}</strong>
                        </td> --}}

                        <td class="text-center">
                            {{$order->user->full_name}}
                        </td>

                        <td class="text-center">
                            {{$order->user->phone}}
                        </td>

                        <td class="text-center">{{ $order->total }} <span>EGP</span></td>
                        <td class="text-center">{{ $order->total - $order->finally_total }} <span>EGP</span></td>
                        <td class="text-center">{{ $order->finally_total }} <span>EGP</span></td>

                        <td class="text-center">
                            <a class="btn btn-sm "
                                wire:click.prevent="$dispatch('showOrderDetailsEvent', {id: '{{ $order->id }}' })">
                                <i class='bx bx-info-circle'></i> View
                            </a>
                        </td>

                        <td class="text-center">
                            <x-special-text.dark-text title="{{ $order->order_date }}" />
                        </td>

                        <td class="text-center">
                            @switch($order->status_order)
                            @case("pending")
                            <x-special-text.warning-text title="pending" />
                            @break
                            @case("Accepted")
                            <x-special-text.dark-text title="Accepted" />
                            @break
                            @case("completed")
                            <x-special-text.success-text title="Completed" />
                            @break
                            @case("cancelled")
                            <x-special-text.danger-text title="Cancelled" />
                            @break
                            @default
                            <x-special-text.warning-text title="Accepted" />
                            @endswitch
                        </td>

                        <td class="text-center">
                            @if ($order->status_order == "accepted")
                            <div class="d-flex flex-row gap-3 align-items-center text-white">
                                <a wire:click.prevent="paymentSuccess({{$order->id}})" class="btn btn-success px-3">
                                    <i class="bx bx-dollar-circle"></i>
                                </a>

                                <a wire:click.prevent="cancelle({{$order->id}})" class="btn btn-danger px-3 text-white">
                                    <i class="bx bx-trash"></i>
                                </a>
                            </div>
                            @else
                            _____
                            @endif
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="10" class="text-center">No Orders found</td>
                    </tr>
                    @endforelse
                </tbody>
                <h5 class="text-center">" Total: {{ $orders->total() }} "</h5>
            </table>
            @else
            <div class="text-center">
                <div class="alert alert-danger text-center" role="alert">This Order Not Found!</div>
            </div>
            @endif
        </div>
    </div>

    <!-- Pagination -->
    <div>
        {{ $orders->links() }}
    </div>

    <script>
        function checkAllStatuses() {
            const checkboxes = document.querySelectorAll('.status-filter');
            const selectAll = document.getElementById('selectAll');
            checkboxes.forEach(cb => cb.checked = selectAll.checked);
            // Optional: Trigger 'change' event if needed by your framework
            checkboxes.forEach(cb => cb.dispatchEvent(new Event('change')));
        }
    </script>
</div>