@extends("layouts.app")
@section("content")
<!-- Small boxes (Stat box) -->
<div class="row">
  <div class="col-12">
      <div class="card">
          <div class="card-header bg-light">
              <h3>ORDERS</h3>
              <p>List of all orders on the system</p>
          </div>
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-condensed table-striped" id="dt">
                      <thead>
                          <tr>
                              <th>#</th>
                              <th width="40%">Customer Details</th>
                              <th>Order ID</th>
                              <th>Total Item</th>
                              <th>Total Amount</th>
                              <th>Status</th>
                              <th>Date</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          @if($data)
                            @foreach($data as $key => $row)
                            <?php
                                $customer = json_decode($row->user_details, false);
                            ?>
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $customer->firstname." ".$customer->lastname." / ".$customer->email." / ".$customer->phone." / ".$customer->address.", ".$customer->city.", ".$customer->state.", ".$customer->country }}</td>
                                    <td>{{ $row->order_id }}</td>
                                    <td>{{ $row->total_item }}</td>
                                    <td>{{ $row->total_amount }}</td>
                                    <td>{{ $row->status }}</td>
                                    <td>{{ $row->created_at }}</td>
                                    <td>
                                        <a href="{{ route('order.delete', $row->id) }}" onclick="return confirm('Are you sure you want to delete this row, this action is irreversible')" class="btn btn-md btn-danger">
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