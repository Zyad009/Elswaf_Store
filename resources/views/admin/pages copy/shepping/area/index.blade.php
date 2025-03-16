   @extends('admin.layouts.app')
   @section('admin-content')
    <section class="section dashboard">
        <div class="row">
          @forelse ( $cities as $city )
  
              <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">
                  <div class="card-body">
                    <h5 class="card-title">Areas for {{$city->name}}</h5>
                      <div class="inner">
                          <h4>All Areas In {{$city->name}} </h4>
                          <p>|edit & delete & all</p>
                      </div>
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <a href="{{route("admin-dashboard.area.all" , $city)}}">
                          <i class="bi bi-text-left"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            @empty
            <div class="col-12">
              <div class="alert alert-danger text-center" role="alert">
                No City Found
                @endforelse
          </div>
    </section>
        @endsection