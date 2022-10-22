@extends("layouts.app")
@section("content")

<!-- Small boxes (Stat box) -->
<div class="row">
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-info">
      <div class="inner">
        <h3>{{ \App\Models\Account::where('type', 'user')->count() }}</h3>
        <p>Users</p>
      </div>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-warning">
      <div class="inner">
        <h3>{{ \App\Models\Account::where('type', 'vendor')->count() }}</h3>
        <p>Agents</p>
      </div>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-danger">
      <div class="inner">
        <h3>{{ \App\Models\Product::count() }}</h3>
        <p>Products</p>
      </div>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-success">
      <div class="inner">
        <h3>{{ \App\Models\Category::count() }}</h3>
        <p>Categories</p>
      </div>
    </div>
  </div>
  <!-- ./col -->
</div>
<!-- /.row -->



@endsection

  