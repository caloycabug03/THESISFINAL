<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

@foreach ($reservations as $reservation)
      
        @endforeach
        
<div class="col-sm-3">
<table class="table table-dark  " id="tableform">
  <thead class= "thead-dark">
    <tr class="text-left">
      <th  scope="col">Check-in Date</th>
      <td>{{ $reservation->checkinDate }}</td>
    </tr>
  </thead>
  <tbody>
    <tr  class="text-left">
    <th scope="col">Check-out Date</th>
            <td>{{ $reservation->checkoutDate }}</td>
           
    </tr>
    <tr  class="text-left">
          <th scope="col">Number of Adults</th>
            <td>{{ $reservation->numAdults }}</td>
    </tr>
    <tr  class="text-left">
             <th scope="col">Number of Children</th>
            <td>{{ $reservation->numChildren }}</td>
    </tr>
  
   
  </tbody>
</table>
</div>

<div class="col-sm-6">

<form action="getdata" method="POST" id="form">
  @csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Name</label>
      <input type="text" name="Name" class="form-control" id="inputEmail4">
        <span style="color:red">@error('Name'){{$message}}@enderror</span>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Email</label>
      <input type="email" name="Email"  class="form-control" id="inputPassword4">
      <span style="color:red">@error('Email'){{$message}}@enderror</span>

    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address</label>
    <input type="text" name="Address"  class="form-control" id="inputAddress2" >
    <span style="color:red">@error('Address'){{$message}}@enderror</span>

  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Date of Birth</label>
      <input type="date" name="DateofBirth"  class="form-control" id="inputEmail4">
      <span style="color:red">@error('DateofBirth'){{$message}}@enderror</span>

    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Gender</label>
      <select id="inputState" name="gender"  class="form-control">
        <option selected>Male</option>
        <option>Female</option>
      </select>
    </div>
  </div>
    
    
  
  <button type="submit" class="btn btn-primary float-right">Save</button>

</form>
</div>

