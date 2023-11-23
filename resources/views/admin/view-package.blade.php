@include('admin/header')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>View / Manage Data of Packages</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">View/Manage data of Packages</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover display_product_admin_page_change">
                  <thead>
                  <tr>
                    <th>Package ID</th>
                    <th>Package Type</th>
                    <th>To Place</th>
                    <th>Default Price (From New-Delhi)</th>
                    <th>Hotel Types</th>
                    <th>Total Days / Nights</th>
                    <th>Status</th>
                    <th>Image 1 (Main)</th>
                    <th>View More</th>
                  </tr>
                  </thead>
                  
                  @foreach($arr as $pack)

                   <tr>
                    <td>{{$pack->package_id}}</td>
                    <td>{{$pack->type}}</td>
                    <td>{{$pack->to_place}}</td>
                    <td>Rs.{{$pack->default_price}}</td>
                    <td>{{$pack->hotel_type}}</td>
                    <td>{{$pack->total_days}} days / {{$pack->total_nights}} nights</td>
                    <td>{{$pack->status}}</td>
                    <td align="center">
                         <div style="width: 200px; height: 170px;"><img src="{{asset('images/'.$pack->image1)}}" style="height: 100%; width: 100%; object-fit: cover; object-position: top;"></td></div>
                    </td>
                    <td><a href="/admin/view-detail-package/{{$pack->package_id}}">View More</a></td>
                  </tr>

                  @endforeach

                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@include('admin/footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('admin/scripts')
