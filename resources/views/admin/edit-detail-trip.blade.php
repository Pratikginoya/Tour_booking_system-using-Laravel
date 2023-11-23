@include('admin/header')

@foreach($arr as $pack)

  @php

  $price = explode(',',$pack->from_price);
  $basic_price = $price[1]*$pack->no_of_people;
  $gst = $price[1]*18/100;
  $total_price = $basic_price + $gst;

  @endphp
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
            <form method="post">
              <table id="example2" class="table table-bordered">
              
                @csrf
                  <tr>
                    <th>Booking ID</th>
                    <td>{{$pack->book_id}}</td>
                  </tr>
                  <tr>
                    <th>Booking Status</th>
                    <td>
                      <select class="form-control" name="book_status">
                          <option value="booked" {{($pack->status=="booked")? "selected":""}}>Trip Pending</option>
                          <option value="Trip Running" >Trip Running</option>
                          <option value="Trip Completed" >Trip Completed</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <th>Check In Date</th>
                    <td>{{$pack->checkin}}</td>
                  </tr>
                  <tr>
                    <th>No of People</th>
                    <td>{{$pack->no_of_people}}</td>
                  </tr>
                  <tr>
                    <th>From Place</th>
                    <td>{{$price[0]}}</td>
                  </tr>
                   <tr>
                    <th>Total Amount to be Received</th>
                    <td>Rs. {{$total_price}}</td>
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

                  <input type="submit" class="btn btn-primary" name="update_status" value="Submit">
                </form>
 
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