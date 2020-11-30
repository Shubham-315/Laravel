@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="container p-5">
  <form action="/insert" method="post" onsubmit="return validateForm()">
    <div class="row">
      <div class="col-2">
        {{ csrf_field() }}
        <label for="name">Name</label>
      </div>
      <div class="col">
        <input required type="text" id="name" name="name" class="form-control"class="form-control" placeholder="Your name..">
      </div>
    </div>
    <div class="row mt-2">
      <div class="col-2">
        <label for="address">Address</label>
      </div>
      <div class="col">
        <input required type="text" id="address" name="address"class="form-control" placeholder="Your address..">
      </div>
    </div>
    <div class="row mt-2">
      <div class="col-2">
        <label for="phone">phone</label>
      </div>
      <div class="col">
        <input required class="form-control" type="tel" id="phone" pattern="[0-9]{10}" name="phone" placeholder="9124921323">
      </div>
    </div>
    <div class="row mt-2">
      <div class="col-2">
        <label for="email">Email</label>
      </div>
      <div class="col">
        <input type="email" required="email" id="email" name="email"class="form-control" placeholder="Your email address..">
      </div>
    </div>
    <div class="row mt-2">
      <div class="col-2">
        <label for="email">Parent Name</label>
      </div>
      <div class="col">
        <input type="text" id="pname" required name="pname"class="form-control" placeholder="Your Parent Name..">
      </div>
    </div>
    <div class="row mt-2">
      <div class="col-2">
        <label for="school">School</label>
      </div>
      <div class="col">
        <input type="text" id="school" required name="school"class="form-control" placeholder="Your School name..">
      </div>
    </div>
    <div class="row mt-2">
      <div class="col-2">
        <label for="class">Class</label>
      </div>
      <div class="col">
        <input type="text" id="class" required name="class"class="form-control" placeholder="Your class..">
      </div>
    </div>
    <div class="row mt-5">
        <div class="col-12 text-center">
            <input type="submit" class="btn btn-primary" value="Submit">
        </div>
      
    </div>
    @csrf
  </form>

</div>

    
    

            </div>

            <div class="table-responsive">
                <table class="table table-hover">
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th>Phone No</th>
            <th>email</th>
            <th>Parents name</th>
            <th>School</th>
            <th>Class</th>
        </tr>
        @foreach($data as $value)
            <tr>
                <td>
                    {{$value->name}}</td>
                <td>{{$value->address}}</td>
                <td>{{$value->phone}}</td>
                <td>{{$value->email}}</td>
                <td>{{$value->pname}}</td>
                <td>{{$value->school}}</td>
                <td>{{$value->class}}</td>
            </tr>
        @endforeach
    </table>
            </div>
            
        </div>
    </div>
</div>
<script type="text/javascript">
    function validateForm() {
        
    }
</script>
@endsection
