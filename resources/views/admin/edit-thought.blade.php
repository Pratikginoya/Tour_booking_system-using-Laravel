@include('admin/header')
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Your Thought in About (What Others Saying)</h1>
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
                <h3 class="card-title">Add Your Thought</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" enctype="multipart/form-data">
              @csrf
              @foreach($arr as $about)
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Your Thought</label>
                    <textarea rows="7" type="text" class="form-control" id="exampleInputEmail1" maxlength="300" placeholder="Enter Your Thought" name="thought" required>{{$about->thought}}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Your Name</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" maxlength="20" placeholder="Enter Your Name" name="name" required value="{{$about->name}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Your City & State</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" maxlength="35" placeholder="Enter Your City, State" name="city" required value="{{$about->city}}">
                  </div>
                </div>
              @endforeach
                <!-- /.card-body -->
           
                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" name="edit_thought" value="Submit">
                </div>
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

@include('admin/footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('admin/scripts')