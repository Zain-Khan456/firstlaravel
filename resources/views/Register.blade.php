
@extends('layout')

@section('content')

<div class="col-12 d-flex justify-content-center my-5">
    <div class="col-4 auth-card card">
        <h4>Registration</h4>
        <form>
            <div class="form-group">
                <label class="my-4" for="exampleInputEmail1">User Name</label>
                <input type="name" class="form-control" id="exampleInputName1" placeholder="Enter User Name">
              </div>
            <div class="form-group">
              <label class="my-4" for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label class="my-4" for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
                <label class="my-4" for="exampleInputPassword1">Confirm Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">
              </div>
            <button type="" class="btn btn-primary mt-5 float-end">Submit</button>
            <button type="submit" class="btn mx-3 mt-5 float-end">Close</button>
          </form>
    </div>
</div>

@endsection