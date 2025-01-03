@extends('front.app')
@section("content")

    <!-- Start Content Page -->
    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1">Contact Us</h1>
            <p>
                Proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet.
            </p>
        </div>
    </div>

    <!-- Start Contact -->
    <div class="container py-5">
        <div class="row py-5">
            <form class="col-md-9 m-auto" method="post" novalidate action="{{route("send")}}">
                @csrf
                <x-success></x-success>
                
                {{-- <x-error></x-error> --}}

                <div class="row">

                <div class="form-group col-md-6 mb-3">
                        <label for="inputname">Name</label>
                        <input type="text" value="{{old("name")}}" class="form-control mt-1" id="name" name="name" placeholder="Name">
                        @error("name")
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                </div>

                <div class="form-group col-md-6 mb-3">
                        <label for="inputemail">Email</label>
                        <input type="email" value="{{old("email")}}" class="form-control mt-1" id="email" name="email" placeholder="Email">
                        @error("email")
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label for="inputsubject">Subject</label>
                    <input type="text" value="{{old("subject")}}" class="form-control mt-1" id="subject" name="subject" placeholder="Subject">
                    @error("subject")
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="inputmessage">Message</label>
                    <textarea class="form-control mt-1" id="message" name="message" placeholder="Message"rows="8">{{old("message")}}</textarea>
                    @error("message")
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="inputphone">Phone</label>
                    <input type="text" value="{{old("phone")}}" class="form-control mt-1" id="phone" name="phone" placeholder="ex: 01114656758">
                    @error("phone")
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="row">
                    <div class="col text-end mt-2">
                        <button type="submit" class="btn btn-success btn-lg px-3">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End Contact -->


@endsection