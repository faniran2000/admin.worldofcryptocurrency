@extends("layouts.app")
@section("content")
<!-- Small boxes (Stat box) -->
<div class="row">
  <div class="col-sm-9 col-md-6 col-lg-5 col-xl-4 mx-auto">
      <div class="card">
          <div class="card-header bg-light">
              <h3>CREATE NEW ADMIN</h3>
              <p>Create a new administrator access to the AdminCP</p>
              <a href="{{ route('admins') }}" class="btn btn-md btn-primary">
                  <b><small class="text-white"><i class="fa fa-arrow-left"></i> &nbsp;Back</small></b>
              </a>
          </div>
          <div class="card-body">
              @include("misc.errors")
              <form method="POST" action="{{ route('post.new.admin') }}" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                      <label>Fullname</label>
                      <input type="text" name="fullname" class="form-control"/>
                  </div>
                  <div class="form-group">
                      <label>Photo</label>
                      <input type="file" name="photo" class="form-control"/>
                  </div>
                  <div class="form-group">
                      <label>Username</label>
                      <input type="text" name="username" class="form-control"/>
                  </div>
                  <div class="form-group">
                      <label>Email Address</label>
                      <input type="email" name="email" class="form-control"/>
                  </div>
                  <div class="form-group">
                      <label>Phone Number</label>
                      <input type="tel" name="phone" class="form-control"/>
                  </div>
                  <div class="form-group">
                      <label>Password</label>
                      <input type="password" name="password" class="form-control"/>
                  </div>
                  <div class="form-group">
                      <label>About</label>
                      <textarea name="about" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                      <label>Role</label>
                      <select name="role" class="form-control">
                          <option value="admin">admin</option>
                          <option value="moderator">moderator</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <input type="submit" value="SUBMIT" class="btn btn-block mt-2 btn-md btn-primary text-white"/>
                  </div>
              </form>
          </div>
      </div>
  </div>
</div>
<!-- /.row -->
@endsection