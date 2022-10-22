@extends("layouts.app")
@section("content")
<!-- Small boxes (Stat box) -->
<div class="row">
  <div class="col-sm-9 col-md-6 col-lg-5 col-xl-4 mx-auto">
      <div class="card">
          <div class="card-header bg-light">
              <h3>MANAGE VENDOR</h3>
              <p>Updating vendor for system</p>
              <a href="{{ route('vendors') }}" class="btn btn-md btn-primary">
                  <b><small class="text-white"><i class="fa fa-arrow-left"></i> &nbsp;Back</small></b>
              </a>
          </div>
          <div class="card-body">
            <ul class="list-group">
                <li class="list-group-item">
                    <b>Firstname: </b>
                    {{ $data->firstname }}
                </li>
                <li class="list-group-item">
                    <b>Lastname: </b>
                    {{ $data->lastname }}
                </li>
                <li class="list-group-item">
                    <b>Email: </b>
                    {{ $data->email }}
                </li>
                <li class="list-group-item">
                    <b>BTC Address: </b>
                    {{ $vendor->btc }}
                </li>
                <li class="list-group-item">
                    <b>BNB Address: </b>
                    {{ $vendor->bnb }}
                </li>
                <li class="list-group-item">
                    <b>ETH Address: </b>
                    {{ $vendor->eth }}
                </li>
                <li class="list-group-item">
                    <b>USDT Address: </b>
                    {{ $vendor->usdt }}
                </li>
                <li class="list-group-item">
                    <b>Paypal: </b>
                    {{ $vendor->paypal }}
                </li>
                <li class="list-group-item">
                    <b>Wallet Balance: </b>
                    {{ $vendor->wallet_balance }}
                </li>
            </ul>
              @include("misc.errors")
              <!-- <form method="POST" action="{{ route('post.edit.vendor') }}" >
                  @csrf
                  <input type="hidden" name="id" value="{{ $data->id }}"/>
                  <div class="form-group">
                      <label>Status</label>
                      <select name="status" class="form-control">
                          <option <?php if($data->status == "active"){ echo "selected"; } ?> value="active">active</option>
                          <option <?php if($data->status == "blocked"){ echo "selected"; } ?> value="blocked">blocked</option>
                          <option <?php if($data->status == "rejected"){ echo "selected"; } ?> value="rejected">rejected</option>
                          <option <?php if($data->status == "pending"){ echo "selected"; } ?> value="pending">pending</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <input type="submit" value="SAVE CHANGES" class="btn btn-block mt-2 btn-md btn-primary text-white"/>
                  </div>
              </form> -->
          </div>
      </div>
  </div>
</div>
<!-- /.row -->
@endsection