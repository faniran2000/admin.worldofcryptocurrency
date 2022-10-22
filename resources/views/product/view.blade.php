@extends("layouts.app")
@section("content")
<!-- Small boxes (Stat box) -->
<div class="row">
  <div class="col-sm-9 col-md-6 col-lg-5 col-xl-4 mx-auto">
      <div class="card">
          <div class="card-header bg-light">
              <h3>MANAGE PRODUCTS</h3>
              <p>Update this product</p>
              <a href="{{ route('products') }}" class="btn btn-md btn-primary">
                  <b><small class="text-white"><i class="fa fa-arrow-left"></i> &nbsp;Back</small></b>
              </a>
          </div>
          <div class="card-body">
              @include("misc.errors")
              <form method="POST" action="{{ route('post.edit.product') }}" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" name="id" value="{{ $data->id }}"/>
                 
                  <div class="form-group">
                      <label>Is Live</label>
                      <select name="is_live" class="form-control">
                          <option <?php if($data->is_live == "yes"){ echo "selected"; } ?> value="yes">yes</option>
                          <option <?php if($data->is_live == "no"){ echo "selected"; } ?> value="no">no</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label>Is Featured</label>
                      <select name="is_featured" class="form-control">
                          <option <?php if($data->is_featured == "yes"){ echo "selected"; } ?> value="yes">yes</option>
                          <option <?php if($data->is_featured == "no"){ echo "selected"; } ?> value="no">no</option>
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