@extends("layouts.app")
@section("content")
<!-- Small boxes (Stat box) -->
<div class="row">
  <div class="col-12">
      <div class="card">
          <div class="card-header bg-light">
              <h3>VENDORS</h3>
              <p>List of all vendors on the system</p>
          </div>
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-condensed table-striped" id="dt">
                      <thead>
                          <tr>
                              <th>#</th>
                              <th>Email Address</th>
                              <th>Firstname</th>
                              <th>Lastname</th>
                              <th>Phone Number</th>
                              <th>Address</th>
                              <th>State/Country</th>
                              <th>Joined Date</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          @if($data)
                            @foreach($data as $key => $row)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $row->email }}</td>
                                    <td>{{ $row->firstname }}</td>
                                    <td>{{ $row->lastname }}</td>
                                    <td>{{ $row->phone }}</td>
                                    <td>{{ $row->address }}</td>
                                    <td>{{ $row->state." / ".$row->country }}</td>
                                    <td>{{ $row->created_at }}</td>
                                    <td>
                                        <a href="{{ route('vendor.view', $row->id) }}" class="btn btn-md btn-warning">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="{{ route('vendor.delete', $row->id) }}" onclick="return confirm('Are you sure you want to delete this row, this action is irreversible')" class="btn btn-md btn-danger">
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