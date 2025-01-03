@extends('front.app')
@section('content')


        <div class="container">
            <div class="row">
                <div class="col-6 mx-auto">
                    <form action="{{route('auth.action')}}" method="post" class="my-5 border p-3" enctype="multipart/form-data">
                        <x-error></x-error>
                        <x-success></x-success>
                        @csrf
                        <div class="mb-3">
                          <h1 class="text-center my-2 p-3">New Account</h1>
                        </div>
                        <div class="mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" value="{{old("name")}}" id="" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="">Address</label>
                            <input type="text" name="address" value="{{old("address")}}" id="" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="">Phone</label>
                            <input type="text" name="phone" value="{{old("phone")}}" id="" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="email" name="email" value="{{old("email")}}" id="" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="">Password</label>
                            <input type="password" name="password" id="" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="">Confirm Password</label>
                            <input type="password" name="password_confirmation" id="" class="form-control">
                        </div>

                        <div class="mb-3">
                            <input type="submit" value="Save" class="form-control btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
    </div>

    @endsection