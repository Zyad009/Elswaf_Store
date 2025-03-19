<div>
    <x-error></x-error>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="input-group">
                    <input class="form-control form-control-lg" wire:model.live='search'
                        placeholder="Search:- Phone,Name" aria-label="Search">
                </div>
            </div>
        </div>
    </div>

    <div class="card mx-auto my-4 px-3 py-2 w-100">
        <div class="table-responsive text-nowrap mt-2">
            @if (count($users) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 10px">ID</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Phone</th>
                        <th class="text-center">Address</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($users as $user)
                    <tr>
                        <td class="text-center">{{ $user->id }} || </td>
                        <td class="text-center"><i class="fab fa-angular fa-lg text-danger me-3 text-center"></i>
                            <strong>{{ $user->name}}</strong>
                        </td>
                        <td class="text-center">{{ $user->email }}</td>
                        <td class="text-center">{{ $user->address }}</td>

                        <td class="text-center">
                            <textarea class="form-control" rows="3" style="width: 100%; height: 100px; resize: none;"
                                readonly>{{ $user->address }}</textarea>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <h5 class="text-center">" Total: {{ $users->total() }} "</h5>
            </table>
            @else
            <div class="text-center">
                <div class="alert alert-danger text-center" role="alert">This user Not Found!</div>
            </div>
            @endif
        </div>
    </div>
    <div class="text-center p-3">
        {{ $users->links() }}
    </div>

</div>