@extends('A_layouts.details')

@push('myTitle')
    <title>Manage Order</title>
@endpush

@section('main-section')<main id="main">

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Manage User</h2>
      <ol>
        <li><a href="admin">Home</a></li>
        <li>Manage user</li>
      </ol>
    </div>
<section class="sample-page">
  <div class="container" data-aos="fade-up">

<h1>user Details</h1>
<div class="container">
    <a class="btn btn-success" href="{{route('export_user_pdf')}}">Export PDF</a>
    </div>    
   
   <table border="2" class="table">                  
        <thead>
            <th>id</th>
            <th>User Name</th>
            <th>Email</th>
            <th>PassWord</th>
            <th>Delete</th>
            <th>View</th>

        </thead>
        <tbody>
            @foreach($user as $rec)
            <tr>
                <td>{{$rec->id}}</td>
                <td>{{$rec->uname}}</td>
                <td>{{$rec->emailid}}</td> 
                <td>{{$rec->pwd}}</td> 

              
                <td><a class="btn btn-danger" href="{{url('delete_item/'.$rec->id)}}">Delete</a></button></td>
                <td><a class="btn btn-warning" href="{{url('user_details/'.$rec->id)}}">View details</a></button></td>
                
            </tr>
            @endforeach
        </tbody>   
        
   </table>

  </div>
</div><!-- End Breadcrumbs -->


</main><!-- End #main -->
@endsection

