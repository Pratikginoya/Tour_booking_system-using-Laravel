@include('admin/header')
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit This Blog</h1>
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
                <h3 class="card-title">Edit This Blog</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              @foreach($arr as $blog)
              <form method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Edit Title of Blog</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Title of Blog" name="title" maxlength="70" value="{{$blog->title}}" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Edit Short Details of Blog</label>
                    <textarea type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Short Details of Blog" name="s_details" maxlength="250" required>{{$blog->short_details}}</textarea>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Edit Full Details of Blog</label>
                    <textarea rows="10" type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Full Details of Blog" name="f_details" maxlength="1500" required>{{$blog->full_details}}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Add New Image of This Blog</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                        <label class="custom-file-label" for="exampleInputFile">Choose image</label>
                      </div>
                    </div> 
                  </div>

                  <label for="exampleInputFile">Current Image of This Blog</label>
                   <div style="width: 250px; height: 200px;">
                      <img src="{{asset('images/'.$blog->image)}}" style="height: 100%; width: 100%; object-fit: cover;">
                  </div>
    
                </div>
                <!-- /.card-body -->
           
                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" name="edit_blog" value="Submit">
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