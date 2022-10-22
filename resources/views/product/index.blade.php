@extends("layouts.app")
@section("content")
<!-- Small boxes (Stat box) -->
<div class="row">
  <div class="col-12">
      <div class="card">
          <div class="card-header bg-light">
              <h3>PRODCUTS</h3>
              <p>All products</p>
          </div>
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-condensed table-striped" id="dt">
                      <thead>
                          <tr>
                              <th>#</th>
                              <th>Photo</th>
                              <th>Title</th>
                              <th>Original Price</th>
                              <th>Sale Price</th>
                              <th>Live</th>
                              <th>Featured</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          @if($data)
                            @foreach($data as $key => $row)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td><img alt="Photo" width="75" height="75" src="{{ $row->featured_image }}"/></td>
                                    <td>{{ $row->title }}</td>
                                    <td>{{ number_format($row->original_price,2,".",",") }}</td>
                                    <td>{{ number_format($row->sale_price,2,".",",") }}</td>
                                    <td>{{ $row->is_live }}</td>
                                    <td>{{ $row->is_featured }}</td>
                                    <td>
                                        <a href="{{ route('product.view', $row->id) }}" class="btn btn-md btn-warning mr-2 text-white">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="{{ route('product.delete', $row->id) }}" onclick="return confirm('Are you sure you want to delete this row, this action is irreversible')" class="btn btn-md btn-danger">
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