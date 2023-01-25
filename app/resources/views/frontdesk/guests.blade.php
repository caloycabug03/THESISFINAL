

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
                    <th>FULL NAME</th>
                    <th>ROOM #</th>
                    <th>PHONE #</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>CARDO DALISAY</td>
                    <td>212
                    </td>
                    <td>09232374552</td>
                  </tr>
                  <tr>
                    <td>CARDO DALISAY</td>
                    <td>212
                    </td>
                    <td>09232374552</td>
                  </tr>
                  <tr>
                    <td>CARDO DALISAY</td>
                    <td>212
                    </td>
                    <td>09232374552</td>
                  </tr>
                  <tr>
                    <td>CARDO DALISAY</td>
                    <td>212
                    </td>
                    <td>09232374552</td>
                  </tr>
                 
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>FULL NAME</th>
                    <th>ROOM #</th>
                    <th>PHONE #</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
 

@endsection