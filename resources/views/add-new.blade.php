@extends('layout')

@section('content')

<div class="col-12 d-flex justify-content-center my-5">
    <div class="col-4 auth-card card">
        <h4>Add New Member  </h4>
        <form>
            <div class="form-group">
                <label class="my-3" for="exampleInputEmail1">Name</label>
                <input type="name" class="form-control" id="Name" placeholder="Enter Name">
              </div>
              <div class="form-group">
                <label class="my-3" for="exampleInputEmail1">Designation</label>
                <input type="name" class="form-control" id="Designation" placeholder="Enter Designation">
              </div>
            <div class="form-group">
              <label class="my-3" for="exampleInputPassword1">Join Date</label>
              <input type="date" class="form-control" id="JoinDate" placeholder="Enter Joining Date">
            </div>
            <div class="form-group">
                <label class="my-3" for="exampleInputPassword1">Discription</label>
                <textarea type="password" class="form-control" id="Discription" placeholder="Add Discription"></textarea>
              </div>
            <button type="" class="btn btn-primary mt-5 float-end" style="border-radius: 30px;">Submit</button>
            <button class="btn mx-3 mt-5 float-end">
            <a href="/ourteam" class="text-decoration-none">
                Back
            </a>
            </button>
          </form>
    </div>
</div>

@endsection