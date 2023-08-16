@extends('A_layouts.details')

@push('myTitle')
    <title>Manage Order</title>
@endpush

@section('main-section')
<main id="main">

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Manage Order</h2>
      <ol>
        <li><a href="index.html">Home</a></li>
        <li>Manage Order</li>
      </ol>
    </div>

  </div>
</div><!-- End Breadcrumbs -->

<section class="sample-page">
  <div class="container" data-aos="fade-up">

  <h1>Order Details</h1>
        
<div class="container">
    <a class="btn btn-success" href="{{route('export_order_pdf')}}">Export PDF</a>
    </div>    
   <table border="2" class="table">                  
        <thead>
            <th>Order_id</th>
            <th>User emial</th>
            <th>product id</th>
            <th>product name</th>
            <th>price</th>
            <th>Quantity</th>
            <th>Total Amount</th>
            <th>Address</th>
            <th>Delivery</th>
          </thead>
        <tbody>
            @foreach($records as $rec)
            <tr>
                <td>{{$rec->id}}</td>
                <td>{{$rec->eid}}</td>
                <td>{{$rec->pid}}</td> 

                <td>{{$rec->pname}}</td>
                <td>{{$rec->price}}</td>
                <td>{{$rec->qty}}</td>
                <td>{{$rec->tot_amt}}</td>
                <td>{{$rec->address}}</td>
               <!-- <td><button type="button" class="btn btn-success"><a href="{{url('item/'.$rec->id)}}">Edit</a></button></td> -->
                <td><a class="btn btn-danger" href="{{url('delete_item/'.$rec->id)}}">Delivery</a></td>
                <!-- <td><button type="button" class="btn btn-warning"><a href="{{url('view_record/'.$rec->id)}}">View</a></button></td> -->
                
            </tr>
            @endforeach
        </tbody>   
        
   </table>

  </div>
</div><!-- End Breadcrumbs -->


    <p>
      You can duplicate this sample page and create any number of inner pages you like!
    </p>

  </div>
</section>

</main><!-- End #main -->
@endsection


