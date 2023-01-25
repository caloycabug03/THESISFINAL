@extends('layouts/app')


@section('content')
 <!-- Main content -->
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <button class=".btn-lg">Add</button>
                <button class=".btn-lg">Edit</button>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>STATUS</th>
                    <th>CHECK IN</th>
                    <th>CHECK OUT</th>
                    <th>ADULT #</th>
                    <th>CHILDREN #</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>ACTIVE</td>
                    <td>12/12/2022
                    </td>
                    <td>12/12/2022</td>
                    <td> 4</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>ACTIVE</td>
                    <td>12/12/2022
                    </td>
                    <td>12/12/2022</td>
                    <td> 4</td>
                    <td>2</td>
                  </tr> <tr>
                    <td>ACTIVE</td>
                    <td>12/12/2022
                    </td>
                    <td>12/12/2022</td>
                    <td> 4</td>
                    <td>2</td>
                  </tr> <tr>
                    <td>ACTIVE</td>
                    <td>12/12/2022
                    </td>
                    <td>12/12/2022</td>
                    <td> 4</td>
                    <td>2</td>
                  </tr>
                 
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>STATUS</th>
                    <th>CHECK IN</th>
                    <th>CHECK OUT</th>
                    <th>ADULT #</th>
                    <th>CHILDREN #</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
 

@endsection