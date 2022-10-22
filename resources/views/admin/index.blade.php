@extends("layouts.app")
@section("content")
<!-- Small boxes (Stat box) -->
<div class="row">
  <div class="col-12">
      <div class="card">
          <div class="card-header bg-light">
              <h3>ADMINS</h3>
              <p>All administrators access to the AdminCP</p>
              <a href="{{ route('admin.new') }}" class="btn btn-md btn-primary">
                  <b><small class="text-white"><i class="fa fa-plus-circle"></i> &nbsp;Add New</small></b>
              </a>
          </div>
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-condensed table-striped" id="dt">
                      <thead>
                          <tr>
                              <th>#</th>
                              <th>Photo</th>
                              <th>Fullname</th>
                              <th>Username</th>
                              <th>Email Address</th>
                              <th>Phone No.</th>
                              <th>Role</th>
                              <th>About</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          @if($data)
                            @foreach($data as $key => $row)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td><img alt="Photo" width="75" height="75" src="{{ $row->photo }}"/></td>
                                    <td>{{ $row->fullname }}</td>
                                    <td>{{ $row->username }}</td>
                                    <td>{{ $row->email }}</td>
                                    <td>{{ $row->phone }}</td>
                                    <td>{{ $row->role }}</td>
                                    <td>{{ $row->about }}</td>
                                    <td>
                                        <a href="{{ route('admin.view', $row->id) }}" class="btn btn-md btn-warning mr-2 text-white">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="{{ route('admin.delete', $row->id) }}" onclick="return confirm('Are you sure you want to delete this row, this action is irreversible')" class="btn btn-md btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                          @endif
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- /.row -->
@endsection