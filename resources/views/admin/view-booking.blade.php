@include('admin/header')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>View Bookings</h1>
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
                <h3 class="card-title">View Bookings</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover display_product_admin_page_change">
                  <thead>
                  <tr>
                    <th>Book ID</th>
                    <th>To Place</th>
                    <th>Total Person</th>
                    <th>From</th>
                    <th>Checkin Date</th>
                    <th>Total Days / Nights</th>
                    <th>Status</th>
                    <th>Image 1 (Main)</th>
                    <th>View More</th>
                  </tr>
                  </thead>
                  
                  @foreach($arr as $pack)

                      @php

                      $price = explode(',',$pack->from_price);
                      $basic_price = $price[1]*$pack->no_of_people;
                      $gst = $price[1]*18/100;
                      $total_price = $basic_price + $gst;

                      @endphp
                   <tr>
                    <td>{{$pack->book_id}}</td>
                    <td>{{$pack->to_place}}</td>
                    <td>{{$pack->no_of_people}}</td>
                    <td>{{$price[0]}}</td>
                    <td>{{$pack->checkin}}</td>
                    <td>{{$pack->total_days}} days / {{$pack->total_nights}} nights</td>
                    <td>Trip Pending</td>
                    <td align="center">
                         <div style="width: 200px; height: 170px;"><img src="{{asset('images/'.$pack->image1)}}" style="height: 100%; width: 100%; object-fit: cover; object-position: top;"></td></div>
                    </td>
                    <td><a href="/admin/view-detail-booking/{{$pack->book_id}}">View More</a></td>
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
