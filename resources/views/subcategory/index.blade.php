@extends("layouts.app")
@section("content")
<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-light">
                <h3>ADD NEW SUBCATEGORY</h3>
                <p>Add new subcategory</p>
            </div>
            <div class="card-body">
                @include("misc.errors")
                <form method="POST" action="{{ route('post.new.subcategory') }}">
                    @csrf
                    <div class="form-group">
                        <select name="category_id" class="form-control">
                            <option>Select category</option>
                            @foreach($category as $row)
                                <option value="{{ $row->id }}">{{ $row->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Name"/>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-md btn-block btn-primary">Add New+</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header bg-light">
                <h3>SUBCATEGORIES</h3>
                <p>List of all subcategories</p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-condensed table-striped" id="dt">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Category</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($data)
                            @foreach($data as $key => $row)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $row->category ? $row->category->name : "Undefined" }}</td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->slug }}</td>
                                <td>{{ $row->created_at }}</td>
                                <td>
                                    <a href="{{ route('subcategory.delete', $row->id) }}" onclick="return confirm('Are you sure you want to delete this row, this action is irreversible')" class="btn btn-md btn-danger">
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