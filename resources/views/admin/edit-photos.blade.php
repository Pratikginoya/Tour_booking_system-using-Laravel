@include('admin/header')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add New Latest Photos</h1>
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
                <h3 class="card-title">Add New Latest Photos</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              @foreach($arr as $photos)
              <form method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  
                  <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title of Photo</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Title of New Photo" name="title" maxlength="20" required value="{{$photos->title}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Details of Photo</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" maxlength="50" placeholder="Enter Some Details of New Photo" name="details" maxlength="50" required value="{{$photos->details}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Type of Photo</label>

                    <select class="form-control" name="type" required>
                      <option disabled>-Select Type of Photo-</option>
                      <option {{($photos->type=="furniture")? "selected":""}}>furniture</option>
                      <option {{($photos->type=="wallpaper")? "selected":""}}>wallpaper</option>
                      <option {{($photos->type=="nature")? "selected":""}}>nature</option>
                      <option {{($photos->type=="branding")? "selected":""}}>branding</option>
                    </select>

                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Edit Photos</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                        <label class="custom-file-label" for="exampleInputFile">Choose image</label>
                      </div>
                    </div> 
                  </div>
                  <label for="exampleInputFile">Current Photo</label>
                  <div style="width: 250px; height: 200px;">
                      <img src="{{asset('images/'.$photos->image)}}" style="height: 100%; width: 100%;">
                  </div>
 
                </div>
                <!-- /.card-body -->
           
                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" name="edit_photos" value="Submit">
                </div>
              </form>
              @endforeach
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

@include('admin/footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('admin/scripts')