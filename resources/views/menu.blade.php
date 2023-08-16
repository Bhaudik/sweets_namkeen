@extends('layouts.details')

@push('myTitle')
<title>menu</title>
@endpush

@section('main-section')
<!-- ======= Menu Section ======= -->
<section id="menu" class="menu">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      </br></br>
      <h2>Our Menu</h2>
      <p>Check Our <span>Yummy Menu</span></p>
    </div>

    <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

      <li class="nav-item">
        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
          <h4>All</h4>
        </a>
      </li><!-- End tab nav item -->
     
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
          <h4>Namkeen</h4>
        </a><!-- End tab nav item -->
      </li>
    
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
          <h4>Sweets</h4>
        </a>
      </li><!-- End tab nav item -->



    </ul>

    <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

      <div class="tab-pane fade active show" id="menu-starters">

        <div class="tab-header text-center">
          <p>Menu</p>
          <h3>All</h3>
        </div>

        <div class="row gy-5">
          @foreach($records as $rec)
          <div class="col-lg-4 menu-item">
            <a href="{{$rec->image}}" class="glightbox"><img src="{{$rec->image}}" class="menu-img img-fluid" alt=""></a>
            <h4>{{$rec->item_name}}</h4>
            <p class="ingredients">
              {{$rec->description}}
            </p>
            <p class="price">
              ₹{{$rec->price}}
            </p>
            @if(Session::has('emailid'))
            <button class="btn btn-primary" id="add-to-cart-btn"><a href="/#cart"> Add to Cart</a></button>
            <button class="btn btn-success" id="buy-btn"><a href="{{url('/order/'.$rec->id)}}">Buy Now</a></button>
            @else
            <button class="btn btn-primary" id="add-to-cart-btn"><a href="/signin"> Add to Cart</a></button>
            <button class="btn btn-success" id="buy-btn"><a href="/signin">Buy Now</a></button>
            @endif




            <h4>discount:{{$rec->discount}}% </h4>
          </div>
          <!-- Menu Item -->
          @endforeach

          <div class="col-lg-4 menu-item">
            <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
            <h4>Aut Luia</h4>
            <p class="ingredients">
              Lorem, deren, trataro, filede, nerada
            </p>
            <p class="price">
              $14.95
            </p>
          </div><!-- Menu Item -->

          <div class="col-lg-4 menu-item">
            <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
            <h4>Est Eligendi</h4>
            <p class="ingredients">
              Lorem, deren, trataro, filede, nerada
            </p>
            <p class="price">
              $8.95
            </p>
          </div><!-- Menu Item -->

          <div class="col-lg-4 menu-item">
            <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
            <h4>Eos Luibusdam</h4>
            <p class="ingredients">
              Lorem, deren, trataro, filede, nerada
            </p>
            <p class="price">
              $12.95
            </p>
          </div><!-- Menu Item -->

          <div class="col-lg-4 menu-item">
            <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
            <h4>Eos Luibusdam</h4>
            <p class="ingredients">
              Lorem, deren, trataro, filede, nerada
            </p>
            <p class="price">
              $12.95
            </p>
          </div><!-- Menu Item -->

          <div class="col-lg-4 menu-item">
            <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
            <h4>Laboriosam Direva</h4>
            <p class="ingredients">
              Lorem, deren, trataro, filede, nerada
            </p>
            <p class="price">
              $9.95
            </p>
          </div><!-- Menu Item -->

        </div>
      </div><!-- End Starter Menu Content -->

      <div class="tab-pane fade" id="menu-breakfast">

        <div class="tab-header text-center">
          <p>Menu</p>
          <h3>Namkeen</h3>
        </div>

        <div class="row gy-5">
        @foreach($namkeen as $rec)
          <div class="col-lg-4 menu-item">
            <a href="{{$rec->image}}" class="glightbox"><img src="{{$rec->image}}" class="menu-img img-fluid" alt=""></a>
            <h4>{{$rec->item_name}}</h4>
            <p class="ingredients">
              {{$rec->description}}
            </p>
            <p class="price">
              ₹{{$rec->price}}
            </p>
            @if(Session::has('emailid'))
            <button class="btn btn-primary" id="add-to-cart-btn"><a href="/#cart"> Add to Cart</a></button>
            <button class="btn btn-success" id="buy-btn"><a href="{{url('/order/'.$rec->id)}}">Buy Now</a></button>
            @else
            <button class="btn btn-primary" id="add-to-cart-btn"><a href="/signin"> Add to Cart</a></button>
            <button class="btn btn-success" id="buy-btn"><a href="/signin">Buy Now</a></button>
            @endif




            <h4>discount:{{$rec->discount}}% </h4>
          </div>
          <!-- Menu Item -->
          @endforeach

          <div class="col-lg-4 menu-item">
            <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
            <h4>Magnam Tiste</h4>
            <p class="ingredients">
              Lorem, deren, trataro, filede, nerada
            </p>
            <p class="price">
              $5.95
            </p>
          </div><!-- Menu Item -->

          <div class="col-lg-4 menu-item">
            <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
            <h4>Aut Luia</h4>
            <p class="ingredients">
              Lorem, deren, trataro, filede, nerada
            </p>
            <p class="price">
              $14.95
            </p>
          </div><!-- Menu Item -->

          <div class="col-lg-4 menu-item">
            <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
            <h4>Est Eligendi</h4>
            <p class="ingredients">
              Lorem, deren, trataro, filede, nerada
            </p>
            <p class="price">
              $8.95
            </p>
          </div><!-- Menu Item -->

          <div class="col-lg-4 menu-item">
            <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
            <h4>Eos Luibusdam</h4>
            <p class="ingredients">
              Lorem, deren, trataro, filede, nerada
            </p>
            <p class="price">
              $12.95
            </p>
          </div><!-- Menu Item -->

          <div class="col-lg-4 menu-item">
            <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
            <h4>Eos Luibusdam</h4>
            <p class="ingredients">
              Lorem, deren, trataro, filede, nerada
            </p>
            <p class="price">
              $12.95
            </p>
          </div><!-- Menu Item -->

          <div class="col-lg-4 menu-item">
            <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
            <h4>Laboriosam Direva</h4>
            <p class="ingredients">
              Lorem, deren, trataro, filede, nerada
            </p>
            <p class="price">
              $9.95
            </p>
          </div><!-- Menu Item -->

        </div>
      </div><!-- End Breakfast Menu Content -->

      <div class="tab-pane fade" id="menu-lunch">

        <div class="tab-header text-center">
          <p>Menu</p>
          <h3>Sweets</h3>
        </div>

        <div class="row gy-5">
        @foreach($sweets as $rec)
          <div class="col-lg-4 menu-item">
            <a href="{{$rec->image}}" class="glightbox"><img src="{{$rec->image}}" class="menu-img img-fluid" alt=""></a>
            <h4>{{$rec->item_name}}</h4>
            <p class="ingredients">
              {{$rec->description}}
            </p>
            <p class="price">
              ₹{{$rec->price}}
            </p>
            @if(Session::has('emailid'))
            <button class="btn btn-primary" id="add-to-cart-btn"><a href="/#cart"> Add to Cart</a></button>
            <button class="btn btn-success" id="buy-btn"><a href="{{url('/order/'.$rec->id)}}">Buy Now</a></button>
            @else
            <button class="btn btn-primary" id="add-to-cart-btn"><a href="/signin"> Add to Cart</a></button>
            <button class="btn btn-success" id="buy-btn"><a href="/signin">Buy Now</a></button>
            @endif

            <h4>discount:{{$rec->discount}}% </h4>
          </div>
          <!-- Menu Item -->
          @endforeach

          <div class="col-lg-4 menu-item">
            <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
            <h4>Magnam Tiste</h4>
            <p class="ingredients">
              Lorem, deren, trataro, filede, nerada
            </p>
            <p class="price">
              $5.95
            </p>
          </div><!-- Menu Item -->

          <div class="col-lg-4 menu-item">
            <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
            <h4>Aut Luia</h4>
            <p class="ingredients">
              Lorem, deren, trataro, filede, nerada
            </p>
            <p class="price">
              $14.95
            </p>
          </div><!-- Menu Item -->

          <div class="col-lg-4 menu-item">
            <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
            <h4>Est Eligendi</h4>
            <p class="ingredients">
              Lorem, deren, trataro, filede, nerada
            </p>
            <p class="price">
              $8.95
            </p>
          </div><!-- Menu Item -->

          <div class="col-lg-4 menu-item">
            <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
            <h4>Eos Luibusdam</h4>
            <p class="ingredients">
              Lorem, deren, trataro, filede, nerada
            </p>
            <p class="price">
              $12.95
            </p>
          </div><!-- Menu Item -->

          <div class="col-lg-4 menu-item">
            <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
            <h4>Eos Luibusdam</h4>
            <p class="ingredients">
              Lorem, deren, trataro, filede, nerada
            </p>
            <p class="price">
              $12.95
            </p>
          </div><!-- Menu Item -->

          <div class="col-lg-4 menu-item">
            <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
            <h4>Laboriosam Direva</h4>
            <p class="ingredients">
              Lorem, deren, trataro, filede, nerada
            </p>
            <p class="price">
              $9.95
            </p>
          </div><!-- Menu Item -->

        </div>
      </div><!-- End Lunch Menu Content -->



    </div>

  </div>
</section><!-- End Menu Section -->
@endsection