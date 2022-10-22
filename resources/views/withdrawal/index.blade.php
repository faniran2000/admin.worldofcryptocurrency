@extends("layouts.app")
@section("content")
<!-- Small boxes (Stat box) -->
<div class="row">
  <div class="col-12">
      <div class="card">
          <div class="card-header bg-light">
              <h3>WITHDRAWALS</h3>
              <p>List of all withdrawals on the system</p>
          </div>
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-condensed table-striped" id="dt">
                      <thead>
                          <tr>
                              <th>#</th>
                              <th>User</th>
                              <th>Amount</th>
                              <th>Method</th>
                              <th>Status</th>
                              <th>Date</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          @if($data)
                            @foreach($data as $key => $row)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td></td>
                                    <td>{{ $row->amount }}</td>
                                    <td>{{ $row->method }}</td>
                                    <td>{{ $row->status }}</td>
                                    <td>{{ $row->created_at }}</td>
                                    <td>
                                        <a href="{{ route('withdrawal.view', $row->id) }}"  class="btn btn-md btn-warning">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="{{ route('withdrawal.delete', $row->id) }}" onclick="return confirm('Are you sure you want to delete this row, this action is irreversible')" class="btn btn-md btn-danger">
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