@extends('admin.layouts.app')

@section('admin-content')

<div class="card-body">
  <div class="row">
    <div class="col-12">
      <h1 class="text-center">All Customer Service</h1>

      <!--(Success/Error) -->
      <x-success></x-success>
      <x-error></x-error>

      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="width: 10px">ID</th>
            <th class="text-center">Name</th>
            <th class="text-center">Email</th>
            <th class="text-center">Edit</th>
            <th class="text-center">Delete</th>
          </tr>
        </thead>
        <tbody>

          @forelse ($customerServices as $customerService)
            <tr>
              <td>{{ $customerService->id }}</td>
              <td class="text-center">{{ $customerService->name }}</td>
              <td class="text-center">{{ $customerService->email }}</td>
              <td class="text-center">
                <a href="{{ route('edit.customer_s', $customerService) }}" class="btn btn-info">Edit</a>
              </td>
              <td class="text-center">
                <form action="{{ route('delete.customer_s', $customerService) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Delete</button>
                </form>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="5" class="text-center">No customer service found.</td>
            </tr>
          @endforelse
        </tbody>
        <h5 class="text-center">Total: {{ $customerServices->total() }}</h5>
      </table>

      <div class="text-center p-3">
        {{ $customerServices->links() }}
      </div>
    </div>
  </div>
</div>

@endsection
