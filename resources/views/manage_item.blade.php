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
      <h2>Manage items</h2>
      <ol>
        <li><a href="admin">Home</a></li>
        <li>Manage items</li>
      </ol>
    </div>
<section class="sample-page">
  <div class="container" data-aos="fade-up">
  <p><span class="item-success">{{Session::get('succsess')}}</span></p>
<h1>Product Details</h1>
    <div class="container">
    <a class="btn btn-success" href="item">Insert new recoerds</a>

    
    <a class="btn btn-success" href="{{route('export_item_pdf')}}">Export PDF</a>
  









    </div>    
   <table border="2" class="table">                  
        <thead>
            <th>id</th>
            <th>Item name</th>
            <th>Image path</th>
            <th>Category</th>
            <th>Description</th>
            <th>price</th>
            <th>Discount</th>
            <th>Edite</th>
            <th>Delete</th>
            <th>View</th>

        </thead>
        <tbody>
            @foreach($items as $rec)
            <tr>
                <td>{{$rec->id}}</td>
                <td>{{$rec->item_name}}</td>
                <td>{{$rec->image}}</td> 

                <td>{{$rec->category}}</td>
                <td>{{$rec->description}}</td>
                <td>{{$rec->price}}</td>
                <td>{{$rec->discount}}</td>
               <td><a class="btn btn-success" href="{{url('item/'.$rec->id)}}">Edit</a></button></td>
                <td><a class="btn btn-danger" href="{{url('delete_item/'.$rec->id)}}">Delete</a></button></td>
                <td><a class="btn btn-warning" href="{{url('view_record/'.$rec->id)}}">View</a></button></td>
                
            </tr>
            @endforeach
        </tbody>   
        
   </table>

  </div>
</div><!-- End Breadcrumbs -->


</main><!-- End #main -->
@endsection

