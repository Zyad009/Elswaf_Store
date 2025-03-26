@extends('admin.layouts.app')
@section('admin-title', 'Archive Employees')
@section('admin-content')
<div class="card-body">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2 class="fw-bold mb-0">All Deleted Employees</h2>
                <a href="{{ route('admin-dashboard.customer_s.all') }}" class="btn btn-primary">
                    <i class='bx bx-collection'></i> All Employees
                </a>
            </div>
            <x-error></x-error>

            <x-table.index :items="$employees">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="width: 10px">ID</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Salary</th>
                            <th class="text-center">Branch</th>
                            <th class="text-center">Phone</th>
                            <th class="text-center">Whatsapp</th>
                            <th class="text-center">Gender</th>
                            <th class="text-center" style="width: 200px;">Address</th>
                            <th class="text-center">Deleted-At</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($employees as $employee)
                        <tr>
                            <td class="text-center">
                                @php
                                if($employee->gender == "male"){
                                $defaultImage = config("default-image.male-image");
                                }else{
                                $defaultImage = config("default-image.female-image");
                                }
                                @endphp
                                <div class="d-flex align-items-center">
                                    {{ $employee->id }} ||
                                    <img src="{{ asset($employee->images->first()?->main_image ?? $defaultImage ) }}"
                                        class="rounded-circle ms-2" alt="avatar"
                                        style="width: 100px; height: 100px; object-fit: cover;">
                                </div>
                            </td>
                            <td class="text-center"><i class="fab fa-angular fa-lg text-danger me-3 text-center"></i>
                                <strong>{{
                                    $employee->name
                                    }}</strong>
                            </td>
                            <td class="text-center">{{ $employee->email }}</td>
                            <td class="text-center">
                                <div>
                                    <b class="badge bg-success me-1 fw-bold text-white">
                                        {{$employee->salary}} EGP
                                    </b>
                                </div>
                            </td>
                            <td class="text-center">
                                @if ($employee->branch)
                                <b class="badge bg-label-primary me-1 fw-bold">
                                    {{ $employee->branch->name }}
                                </b>
                                @else
                                <b class="badge bg-label-danger me-1">No Branch</b>
                                @endif
                            </td>
                            <td class="text-center">{{ $employee->phone }}</td>
                            <td class="text-center">{{ $employee->whatsapp }}</td>
                            <td class="text-center">{{ $employee->gender }}</td>
                            <td class="text-center">
                                <textarea class="form-control" rows="3"
                                    style="width: 100%; min-width: 200px; resize: none;" readonly>
                                    {{ $employee->address }}
                                </textarea>
                            </td>
                            <td class="text-center">
                                <b class="badge bg-label-danger me-1 fw-bold">
                                    {{ $employee->deleted_at }}
                                </b>
                            </td>
                            <td class="text-center">
                                <div class="d-flex gap-2 justify-content-center">
                                    <form action="{{ route('admin-dashboard.employee.restore', $employee->id) }}"
                                        method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-success">
                                            <i class="bx bx-undo"></i>
                                        </button>
                                    </form>

                                    <form action="{{ route('admin-dashboard.employee.remove', $employee->id) }}"
                                        method="post" data-confirm-delete="true">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            <i class="bx bx-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <h5 class="text-center">Total: {{ $employees->total() }}</h5>
                </table>

            </x-table.index>

            <div class="text-center p-3">
                {{ $employees->links() }}
            </div>
        </div>
    </div>
</div>
@endsection