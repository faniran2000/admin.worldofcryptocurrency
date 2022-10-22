@extends("layouts.app")
@section("content")
<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-sm-9 col-md-6 col-lg-5 col-xl-4 mx-auto">
        <div class="card">
            <div class="card-header bg-light">
                <h3>MANAGE ADMIN</h3>
                <p>Update administrator access to the AdminCP</p>
                <a href="{{ route('admins') }}" class="btn btn-md btn-primary">
                    <b><small class="text-white"><i class="fa fa-arrow-left"></i> &nbsp;Back</small></b>
                </a>
            </div>
            <div class="card-body">
                @include("misc.errors")
                <form method="POST" action="{{ route('post.edit.admin') }}" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="{{ $data->id }}" />
                    @csrf
                    <div class="form-group">
                        <label>Fullname</label>
                        <input type="text" name="fullname" value="{{ $data->fullname }}" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>
                            <img src="{{ $data->photo }}" alt="Photo" width="100" height="100" /><br>
                            Photo
                        </label>
                        <input type="file" name="photo" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" value="{{ $data->usernamee }}" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" name="email" value="{{ $data->email }}" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="tel" name="phone" value="{{ $data->phone }}" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>About</label>
                        <textarea name="about" class="form-control">{{ $data->about }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Role</label>
                        <select name="role" class="form-control">
                            <option <?php if ($data->role == 'admin') {
                                        echo "selected";
                                    } ?> value="admin">admin</option>
                            <option <?php if ($data->role == 'moderator') {
                                        echo "selected";
                                    } ?> value="moderator">moderator</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="SAVE CHANGES" class="btn btn-block mt-2 btn-md btn-primary text-white" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /.row -->
@endsection