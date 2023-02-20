@extends('layouts/app')


@section('content')
 <!-- Main content -->
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                

              <!-- Button trigger modal -->
                         
                          <h2>Active Guests</h2>
                         <!-- ADD MODAL BUTTON -->
                          <!-- Button trigger modal -->
                          @if (Auth::check())
                          @if (Auth::user()->role != 'School Accountant')
                         @if (Auth::user()->role != 'Housekeeping' )

                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
                            Add
                          </button>
                            @endif
                            @endif
                            @endif
                          <!-- Modal -->
                          <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalScrollableTitle">Walk-in Booking</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                      <!-- walk-in customer booking forms -->
<form action="activeguest.store" method="POST">
  @csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Name</label>
      <input type="text" class="form-control @error('Name') is-invalid @enderror" name="Name"   autofocus
                        name="name" aria-describedby="emailHelp">

                    @error('Name')
                         <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                         </span>
                     @enderror
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Email</label>
      <input type="email" class="form-control @error('Email') is-invalid @enderror" name="Email"   autofocus
                        name="name" aria-describedby="emailHelp">

                    @error('Email')
                         <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                         </span>
                     @enderror
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address</label>
    <input type="text" class="form-control @error('Address') is-invalid @enderror" name="Address"   autofocus
                        name="name" aria-describedby="emailHelp">

                    @error('Address')
                         <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                         </span>
                     @enderror

  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Date of Birth</label>
     <input type="date" class="form-control @error('DateofBirth') is-invalid @enderror" name="DateofBirth"   autofocus
                        name="name" aria-describedby="emailHelp">

                    @error('DateofBirth')
                         <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                         </span>
                     @enderror

    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Gender</label>
      <select id="inputState" name="Gender"  class="form-control">
        <option selected>Male</option>
        <option>Female</option>
      </select>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Number of Adults</label>
      <input type="number" name="AdultNum" class="form-control" id="inputEmail4" min="1" value="1">
      <span style="color:red">@error('AdultNum'){{$message}}@enderror</span>

    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Number of Children</label>
      <input type="number" name="ChildrenNum" class="form-control" id="inputEmail4" min="0" value="0">

    </div>  
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputPassword4">Check-in Date</label>
      <input type = "date"  name="CheckinDate" class="form-control" id = "theDate"  min="{new Date().toISOString().split('T')[0]}" >


    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Check-out Date</label>
      <input type = "date" name="CheckoutDate" class="form-control" id = "checkout-date" min="{new Date().toISOString().split('T')[0]}">


    </div>
  
    <div class="form-group col-md-6">
      <label for="inputState">Room Type</label>
      <select id="inputState" name="RoomType"  class="form-control">
        <option selected>Single Room</option>
        <option>Double Room</option>
        <option>Family Room</option>

      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Price</label>
      <select id="inputState" name="Price"  class="form-control">
        <option selected>Single Room $20</option>
        <option>Double Room $30</option>
        <option>Family Room $50</option>

      </select>
    </div>
    </div>
  
 
    
    
  
    <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</form>
                                </div>
                               
                              </div>
                            </div>
                          </div>

                        
             
                         
              </div>

              {{-- search --}}

<div>
 <div class="mx-auto pull-right">
     <div class="d-flex">
         <form action="{{ route('activeguest') }}" method="GET" role="search">
             <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">

                 
               </div>

             <div class="input-group flex-row-reverse ">
                 <span class="input-group-btn mr-2  mb-1">
                     <button class="btn btn-secondary " type="submit"  title="Search projects">
                         <span class="fas fa-search"></span>
                     </button>
                 </span>
                 <input type="text" class="mr-2 pl-2" name="transactionsSearch" placeholder="Name" id="transactionsSearch" style="width:150px; height:30px; border: 1px solid gray;">
                 <a href="{{ route('activeguest') }}" class="">
                     <span class="input-group-btn mr-2">
                         <button class="btn btn-danger" type="button" title="Refresh page">
                             <span class="fas fa-sync-alt"></span>
                         </button>
                     </span>
                 </a>
             </div>
         </form>
     </div>
 </div>
</div>
         {{-- end search --}}
         <!-- /.card-header -->
              




              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Date of Birth</th>
                    <th>Gender</th>
                    <th>Adult #</th>
                    <th>Children #</th>
                    <th>Check-in Date</th>
                    <th>Check-out Date</th>
                    <th>Room Type</th>
                    <th>Price</th>

                   
                  </tr>
                  </thead>
                  
      
                  <tbody>

                  <tr>
                  @foreach($transactions as $transaction)
                  <tr>
                        <td>{{ $transaction->id }}</td>
                        <td>{{ $transaction->Name }}</td>
                        <td>{{ $transaction->Email }}</td>
                        <td>{{ $transaction->Address }}</td>
                        <td>{{ $transaction->DateofBirth }}</td>
                        <td>{{ $transaction->Gender }}</td>
                        <td>{{ $transaction->AdultNum }}</td>
                        <td>{{ $transaction->ChildrenNum }}</td>
                        <td>{{ $transaction->CheckinDate }}</td>
                        <td>{{ $transaction->CheckoutDate }}</td>
                        <td>{{ $transaction->RoomType }}</td>
                        <td>{{ $transaction->Price }}</td>


                  </tr>
                  </tbody>


                @endforeach


              


                
                 
                  <tfoot>
                  <tr>
                  <th>ID</th>
                  <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Date of Birth</th>
                    <th>Gender</th>
                    <th>Adult #</th>
                    <th>Children #</th>
                    <th>Check-in Date</th>
                    <th>Check-out Date</th>
                    <th>Room Type</th>
                    <th>Price</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>



          

@endsection