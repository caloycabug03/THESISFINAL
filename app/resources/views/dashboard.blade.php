@extends('layouts/app')

@section('content')
 <!-- Main content -->
 <section class="content">
      <div class="container-fluid">

      <h2>Dashboard</h2>
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              
              <div class="info-box-content">
                <span class="info-box-text">Available Rooms</span>
                <i class="ion ion-bag"></i>
                <span class="info-box-number">
                  5
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">

              <div class="info-box-content">
                <span class="info-box-text">Occupied Rooms</span>
                <i class="ion ion-stats-bars"></i>

                <span class="info-box-number">7</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">

              <div class="info-box-content">
                <span class="info-box-text">Check-in Customers</span>
                <span class="info-box-number">4</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">

              <div class="info-box-content">
                <span class="info-box-text">Arriving Customers</span>
                <span class="info-box-number">5</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Main content -->
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                

              <!-- ADD MODAL BUTTON -->
              <!-- Button trigger modal -->
                          <h3>Check-in Customers Today</h3>
                         

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>Room</th>
                    <th>Duration</th>
                    <th>Days Left</th>
                    <th>Status</th>
                    


                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>

                  </tr>
                  <tr>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>

                  </tr> <tr>
                    <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>

                  </tr> <tr>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   

                  </tr>
                 
                  </tbody>
                  <tfoot>
                  <tr>
                     <th>Name</th>
                    <th>Room</th>
                    <th>Duration</th>
                    <th>Days Left</th>
                    <th>Status</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
 
             
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
   <!-- Main content -->
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                

              <!-- ADD MODAL BUTTON -->
              <!-- Button trigger modal -->
                          <h3>Arriving Customers Today</h3>
                         


              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>Room</th>
                    <th>Duration</th>
                    <th>Status</th>
                    


                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                  <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>

                  </tr>
                  <tr>
                  <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>

                  </tr> <tr>
                  <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>

                  </tr> <tr>
                  <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   

                  </tr>
                 
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>Name</th>
                    <th>Room</th>
                    <th>Duration</th>
                    <th>Status</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
 
             
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection