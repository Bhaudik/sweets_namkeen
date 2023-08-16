@extends('A_layouts.details')

@push('myTitle')
<title>items</title>
@endpush

@section('main-section')

<!-- ======= Book A Table Section ======= -->
<!-- End Book A Table Section -->
<section id="book-a-table" class="book-a-table">
  <div class="container" data-aos="fade-up">

    <div class="section-header mt-3">
      <h2>Insert new product items</h2>
      <p>new <span>product</span>items</p>
    </div>

    <div class="row g-0">

      <div class="col-lg-4 reservation-img" style="background-image: url(assets/img/Sweets_desktop2.jpg);" data-aos="zoom-out" data-aos-delay="200"></div>

      <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
        <form action="{{url('storeproduct')}}" method="POST" enctype="multipart/form-data">

          {{@csrf_field()}}

          <div class="row gy-4">

            <div class="col-lg-4 col-md-6">
              <input type="text" name="item_name" class="form-control" id="item_name" placeholder="item Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6">
              <input type="text" class="form-control" name="price" id="price" placeholder="price" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6">

              <select id="category" name="category" class="form-control">
                @foreach($category as $c)              
                  <option>{{$c->category}}</option>
                @endforeach
                
              </select>
              <div class="validate"></div>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="description" id="description" rows="5" placeholder="description"></textarea>
              <div class="validate"></div>
            </div>

            <div class="col-lg-4 col-md-6">
              <input type="text" class="form-control" name="discount" id="discount" placeholder="discount" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>

            </div>

            <div class="col-lg-4 col-md-6">
              <input type="file" class="form-control" name="image" id="image" data-rule="file">
              <div class="validate">
                @error('image')
                <span> {{$message}}
                  @enderror
              </div>
            </div>

            <div class="text-center">
              <input type="submit" class="btn btn-success" name="submit" value="Insert">
            </div>
        </form>
      </div><!-- End Reservation Form -->

    </div>

  </div>
</section><!-- End Book A Table Section -->
@endsection