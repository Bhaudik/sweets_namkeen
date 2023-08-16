@extends('layouts.details')

@push('myTitle')
<title>items</title>
@endpush

@section('main-section')

<!-- ======= Book A Table Section ======= -->
<!-- End Book A Table Section -->
<section id="book-a-table" class="book-a-table">
    <div class="container" data-aos="fade-up">

        <div class="section-header mt-3">
            <h2></h2>
            <p><span>product Detials</span></p>

            <h1>{{$records->item_name}}</h1>

        </div>

        <div class="row g-0">

            <a href="/{{$records->image}}" target="newpage"<div class="col-lg-4 reservation-img" style="background-image: url(/{{$records->image}});" data-aos="zoom-out" data-aos-delay="200">></a>

            <div class="col-lg-8 align-items-center reservation-form-bg ">

                <form action="{{url('storeorder')}}" method="POST" enctype="multipart/form-data"
                style="margin-left: 80px; 
                font-size: larger; 
                display: grid;
                background: beige;
                padding:100px">
                @csrf 
                    <label for="eid">Your E-mail:</label>

                    <input type="text" id="eid" value="{{Session::get('emailid')}}" name="eid" required>
                    <input type="text" id="pif" value="{{$records->id}}" name="pid" require>
                    <input type="text" id="pname" value="{{$records->item_name}}" name="pname" require>
                    <!-- <label for="pid">Product ID:</label>
                    <input type="text" id="pid" vlue="" name="pid" required> -->
                    <label for="price">Price:</label>
                    <input type="number" step="0.01" id="price" value="{{$records->price}}" name="price" required>

                    <label for="qty">Quantity:</label>
                    <input type="number" id="qty" name="qty" value="1" onchange="calculateTotalAmount()" min="1" required>

                    <label for="tot_amt">Total Amount:</label>
                    <input type="number" step="0.01" id="tot_amt" value="{{$records->price}}" name="tot_amt" min="{{$records->price}}" required><br>

                    <label for="address">Address:</label>
                    <textarea id="address" name="address" rows="3" cols="40" required></textarea><br>

                    <input type="submit" value="Order">


                </form>
            </div><!-- End Reservation Form -->

        </div>

    </div>
</section><!-- End Book A Table Section -->
<script>
    function calculateTotalAmount() {
        // Get the price and quantity input values
        var price = parseFloat(document.getElementById("price").value);
        var qty = parseInt(document.getElementById("qty").value);

        // Calculate the total amount
        var totalAmount = price * qty;

        // Set the total amount input value
        document.getElementById("tot_amt").value = totalAmount.toFixed(2);
    }
</script>
@endsection