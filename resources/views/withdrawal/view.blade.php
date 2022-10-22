@extends("layouts.app")
@section("content")
<!-- Small boxes (Stat box) -->
<div class="row">
  <div class="col-sm-9 col-md-6 col-lg-5 col-xl-4 mx-auto">
      <div class="card">
          <div class="card-header bg-light">
              <h3>MANAGE WITHDRAWALS</h3>
              <p>Update this withdrawal</p>
              <a href="{{ route('withdrawals') }}" class="btn btn-md btn-primary">
                  <b><small class="text-white"><i class="fa fa-arrow-left"></i> &nbsp;Back</small></b>
              </a>
          </div>
          <div class="card-body">
              @include("misc.errors")
              <form method="POST" action="{{ route('post.edit.withdrawal') }}" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" name="id" value="{{ $data->id }}"/>
                 
                  <div class="form-group">
                      <label>Status</label>
                      <select name="status" class="form-control">
                          <option <?php if($data->status == "pending"){ echo "selected"; } ?> value="pending">pending</option>
                          <option <?php if($data->status == "paid"){ echo "selected"; } ?> value="paid">paid</option>
                          <option <?php if($data->status == "declined"){ echo "selected"; } ?> value="declined">declined</option>
                          <option <?php if($data->status == "processing"){ echo "selected"; } ?> value="processing">processing</option>
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