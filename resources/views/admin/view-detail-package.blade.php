@include('admin/header')

@foreach($arr as $pack)
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Details of Package</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Details of Package</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <table id="example2" class="table table-bordered">
                  
                  <tr>
                    <th>Package ID</th>
                    <td>{{$pack->package_id}}</td>
                  </tr>
                  <tr>
                    <th>Package Current Status</th>
                    <td>{{$pack->status}}</td>
                  </tr>
                  <tr>
                    <th>Package Type</th>
                    <td>{{$pack->type}}</td>
                  </tr>
                  <tr>
                    <th>To Place</th>
                    <td>{{$pack->to_place}}</td>
                  </tr>
                   <tr>
                    <th>Default Price</th>
                    <td>Rs. {{$pack->default_price}}</td>
                  </tr>

                  @php 
                  $from = explode(' | ',$pack->from);
                  $price = explode(' | ',$pack->price);
                  $from_length = count($from);
                  @endphp

                  <tr>
                    <th>From Place with Price</th>
                    <td>
                        <table>
                          <tr>
                            <th>From Place</th>
                            <th>Price per person for {{$pack->total_days}} days</th>
                          </tr>

                          @for($i=0; $i<$from_length; $i++)
                          <tr>
                            <td>{{$from[$i]}}</td>
                            <td>Rs. {{$price[$i]}}</td>
                          </tr>
                          @endfor
                        </table>
                    </td>
                  </tr>
                  <tr>
                    <th>Place Highlight</th>
                    <td>{{$pack->highlight}}</td>
                  </tr>
                  <tr>
                    <th>Hotel Type</th>
                    <td>{{$pack->hotel_type}}</td>
                  </tr>
                  <tr>
                    <th>Vehicle</th>
                    <td>{{$pack->vehicle}}</td>
                  </tr>
                  <tr>
                    <th>Foods</th>
                    <td>{{$pack->foods}}</td>
                  </tr>
                  <tr>
                    <th>Total Days</th>
                    <td>{{$pack->total_days}} days</td>
                  </tr>
                  <tr>
                    <th>Total Nights</th>
                    <td>{{$pack->total_nights}} nights</td>
                  </tr>

                  @php 
                  $day = explode(' | ',$pack->day);
                  $day_length = count($day);
                  @endphp

                  <tr>
                    <th>Days Schedule</th>
                    <td>
                      <table>
                          <tr>
                            <th>Day</th>
                            <th>Schedule</th>
                          </tr>

                         @for($i=0; $i<$day_length; $i++)
                          <tr>
                            <th>Day {{$i+1}}</th>
                            <td>{{$day[$i]}}</td>
                          </tr>
                          @endfor
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <th>What Includes?</th>
                    <td>{{$pack->includes}}</td>
                  </tr>
                  <tr>
                    <th>Map Embed Iframe Src</th>
                    <td>
                        <div class="map_view_pack"><iframe src="{{$pack->map_html}}"></iframe></div>
                    </td>
                  </tr>
          
                  <tr>
                    <th>Image-1 (Main)</th>
                    <td align="center">
                         <div style="width: 250px; height: 200px;"><img src="{{asset('images/'.$pack->image1)}}" style="height: 100%; width: 100%; object-fit: cover; object-position: top;"></div>
                    </td>
                  </tr>
                  <tr>
                    <th>Image-2</th>
                    <td align="center">
                         <div style="width: 250px; height: 200px;"><img src="{{asset('images/'.$pack->image2)}}" style="height: 100%; width: 100%; object-fit: cover; object-position: top;"></div>
                    </td>
                  </tr>
                  <tr>
                    <th>Image-3</th>
                    <td align="center">
                         <div style="width: 250px; height: 200px;"><img src="{{asset('images/'.$pack->image3)}}" style="height: 100%; width: 100%; object-fit: cover; object-position: top;"></div>
                    </td>
                  </tr>
                  <tr>
                    <th>Image-4</th>
                    <td align="center">
                         <div style="width: 250px; height: 200px;"><img src="{{asset('images/'.$pack->image4)}}" style="height: 100%; width: 100%; object-fit: cover; object-position: top;"></div>
                    </td>
                  </tr>
                  <tr>
                    <th>Image-5</th>
                    <td align="center">
                         <div style="width: 250px; height: 200px;"><img src="{{asset('images/'.$pack->image5)}}" style="height: 100%; width: 100%; object-fit: cover; object-position: top;"></div>
                    </td>
                  </tr>

                  </table>

                  <a href="/admin/edit-package/{{$pack->package_id}}" class="btn btn-primary">Edit Package Details</a>
                  <br>
                  <a href="view-product.php?d_id=" class="btn btn-primary">Delete This Package</a>
                   <br>
                  <a href="/admin/view-package" class="btn btn-primary">Back to List of Packages</a>
 
            </div>
            <!-- /.card -->
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endforeach

@include('admin/footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('admin/scripts')