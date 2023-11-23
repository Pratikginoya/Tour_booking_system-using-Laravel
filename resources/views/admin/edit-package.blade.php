@include('admin/header')
  
  @foreach($arr as $pack)
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Details of Package</h1>
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
                <h3 class="card-title">Edit Details of Package</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tour Type</label>
                    <select class="form-control" required name="type">
                        <option {{($pack->type=='International')? "selected":""}}>International</option>
                        <option {{($pack->type=='Domestic')? "selected":""}}>Domestic</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">To Place</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="To place" name="to_place" maxlength="50" required value="{{$pack->to_place}}">
                  </div>

                   <div class="form-group">
                    <label for="exampleInputPassword1">Default Price (From New Delhi)</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Default Price from New-Delhi" name="default_price" required value="{{$pack->default_price}}">
                  </div>

                  @php 
                  $from = explode(' | ',$pack->from);
                  $price = explode(' | ',$pack->price);
                  $from_length = count($from);
                  @endphp
                  <div class="form-group">
                    <label for="exampleInputEmail1">From Place</label> <br>

                      @for($i=0; $i<$from_length; $i++)
                      <div class="from_place_fles">
                          <input type="checkbox" name="from[]" value="{{$from[$i]}}" onclick="if(this.checked){ document.getElementById('{{$from[$i]}}').removeAttribute('disabled');}else{document.getElementById('{{$from[$i]}}').setAttribute('disabled',true);}" checked> {{$from[$i]}} </input>
                          <input type="number" class="form-control amt_add" id="{{$from[$i]}}" placeholder="Price per day & per person from New-Delhi" name="price[]" required value="{{$price[$i]}}" />
                      </div>
                      @endfor
                      
                      <div class="add_input_of_place">
                          
                      </div>

                      <a href="javascript:void(0)" id="add_from_place" class="btn btn-primary add_from_place_button">Add From Place</a>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Highlight</label>
                    <textarea rows="3" class="form-control" id="exampleInputPassword1" placeholder="Enter Discription of the Place" name="highlight" maxlength="1500" required>{{$pack->highlight}}</textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Hotel Type</label>
                    <select class="form-control" name="hotel_type" required>
                      <option {{($pack->hotel_type=='2 star')? "selected":""}}>2 star</option>
                      <option {{($pack->hotel_type=='3 star')? "selected":""}}>3 star</option>
                      <option {{($pack->hotel_type=='4 star')? "selected":""}}>4 star</option>
                      <option {{($pack->hotel_type=='5 star')? "selected":""}}>5 star</option>
                    </select>
                  </div>

                  <div class="form-group" id="vehicle">
                    <label for="exampleInputPassword1">Vehicle</label>
                    <select class="form-control" name="vehicle" required>
                      <option {{($pack->vehicle=="By Flight")? "selected":""}}>By Flight</option>
                      <option {{($pack->vehicle=="By Bus")? "selected":""}}>By Bus</option>
                      <option {{($pack->vehicle=="By Car")? "selected":""}}>By Car</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Food Includes</label><br>
                    <input type="checkbox" name="food[]" value="Break-fast" class="checkbox_edit"> Break-fast<br>
                    <input type="checkbox" name="food[]" value="Lunch" class="checkbox_edit"> Lunch <br>
                    <input type="checkbox" name="food[]" value="Dinner" class="checkbox_edit"> Dinner <br>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Day</label>
                    <select class="form-control" name="total_days" required>
                        <option {{($pack->total_days=='1')? "selected":""}}>1</option>
                        <option {{($pack->total_days=='2')? "selected":""}}>2</option>
                        <option {{($pack->total_days=='3')? "selected":""}}>3</option>
                        <option {{($pack->total_days=='4')? "selected":""}}>4</option>
                        <option {{($pack->total_days=='5')? "selected":""}}>5</option>
                        <option {{($pack->total_days=='6')? "selected":""}}>6</option>
                        <option {{($pack->total_days=='7')? "selected":""}}>7</option>
                        <option {{($pack->total_days=='8')? "selected":""}}>8</option>
                        <option {{($pack->total_days=='9')? "selected":""}}>9</option>
                        <option {{($pack->total_days=='10')? "selected":""}}>10</option>
                        <option {{($pack->total_days=='11')? "selected":""}}>11</option>
                        <option {{($pack->total_days=='12')? "selected":""}}>12</option>
                        <option {{($pack->total_days=='13')? "selected":""}}>13</option>
                        <option {{($pack->total_days=='14')? "selected":""}}>14</option>
                        <option {{($pack->total_days=='15')? "selected":""}}>15</option>
                        <option {{($pack->total_days=='16')? "selected":""}}>16</option>
                        <option {{($pack->total_days=='17')? "selected":""}}>17</option>
                        <option {{($pack->total_days=='18')? "selected":""}}>18</option>
                        <option {{($pack->total_days=='19')? "selected":""}}>19</option>
                        <option {{($pack->total_days=='20')? "selected":""}}>20</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Nights</label>
                    <select class="form-control" name="total_nights" required>
                        <option {{($pack->total_nights=='0')? "selected":""}}>0</option>
                        <option {{($pack->total_nights=='1')? "selected":""}}>1</option>
                        <option {{($pack->total_nights=='2')? "selected":""}}>2</option>
                        <option {{($pack->total_nights=='3')? "selected":""}}>3</option>
                        <option {{($pack->total_nights=='4')? "selected":""}}>4</option>
                        <option {{($pack->total_nights=='5')? "selected":""}}>5</option>
                        <option {{($pack->total_nights=='6')? "selected":""}}>6</option>
                        <option {{($pack->total_nights=='7')? "selected":""}}>7</option>
                        <option {{($pack->total_nights=='8')? "selected":""}}>8</option>
                        <option {{($pack->total_nights=='9')? "selected":""}}>9</option>
                        <option {{($pack->total_nights=='10')? "selected":""}}>10</option>
                        <option {{($pack->total_nights=='11')? "selected":""}}>11</option>
                        <option {{($pack->total_nights=='12')? "selected":""}}>12</option>
                        <option {{($pack->total_nights=='13')? "selected":""}}>13</option>
                        <option {{($pack->total_nights=='14')? "selected":""}}>14</option>
                        <option {{($pack->total_nights=='15')? "selected":""}}>15</option>
                        <option {{($pack->total_nights=='16')? "selected":""}}>16</option>
                        <option {{($pack->total_nights=='17')? "selected":""}}>17</option>
                        <option {{($pack->total_nights=='18')? "selected":""}}>18</option>
                        <option {{($pack->total_nights=='19')? "selected":""}}>19</option>
                        <option {{($pack->total_nights=='20')? "selected":""}}>20</option>
                    </select>
                  </div>

                  @php 
                  $day = explode(' | ',$pack->day);
                  $day_length = count($day);
                  @endphp

                  <div class="form-group">
                    <label for="exampleInputPassword1" style="font-size: 18px;">Day Schedule :</label><br>

                    @for($i=0; $i<$day_length; $i++)
                    <label for="exampleInputPassword1">Day {{$i+1}}:</label>
                    <textarea rows="3" class="form-control" id="exampleInputPassword1" placeholder="Enter details" name="day[]" maxlength="1000" required>{{$day[$i]}}</textarea>
                    @endfor

                    <div id="day_added">
                      
                    </div>
                    <input type="hidden" id="increment" value="{{$i+1}}">
                    <a href="javascript:void(0)" id="add_day" class="btn btn-primary add_day">Add Days</a>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">What Includes ?</label>
                    <textarea rows="3" class="form-control" id="exampleInputPassword1" placeholder="Enter includes facility in this trip.." name="includes" maxlength="1000" required>{{$pack->includes}}</textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Map Embed Iframe Src</label>
                    <textarea rows="3" class="form-control" id="exampleInputPassword1" placeholder="Please enter only Src of Embed Iframe (Do not add full code of Iframe)" name="map_html" maxlength="2000" required>{{$pack->map_html}}</textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Image 1 (Main Image)</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image1">
                        <label class="custom-file-label" for="exampleInputFile">Choose image</label>
                      </div>
                    </div> 
                  </div>
                  <label for="exampleInputFile">Current Image 1 (Main)</label>
                  <div style="width: 200px; height: 200px;">
                      <img src="{{asset('images/'.$pack->image1)}}" style="height: 100%; width: 100%; object-fit: cover;">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Image 2</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image2">
                        <label class="custom-file-label" for="exampleInputFile">Choose image</label>
                      </div>
                    </div> 
                  </div>
                  <label for="exampleInputFile">Current Image 2</label>
                  <div style="width: 200px; height: 200px;">
                      <img src="{{asset('images/'.$pack->image2)}}" style="height: 100%; width: 100%; object-fit: cover;">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Image 3</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image3">
                        <label class="custom-file-label" for="exampleInputFile">Choose image</label>
                      </div>
                    </div> 
                  </div>
                  <label for="exampleInputFile">Current Image 3</label>
                  <div style="width: 200px; height: 200px;">
                      <img src="{{asset('images/'.$pack->image3)}}" style="height: 100%; width: 100%; object-fit: cover;">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Image 4</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image4">
                        <label class="custom-file-label" for="exampleInputFile">Choose image</label>
                      </div>
                    </div> 
                  </div>
                  <label for="exampleInputFile">Current Image 4</label>
                  <div style="width: 200px; height: 200px;">
                      <img src="{{asset('images/'.$pack->image4)}}" style="height: 100%; width: 100%; object-fit: cover;">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Image 5</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image5">
                        <label class="custom-file-label" for="exampleInputFile">Choose image</label>
                      </div>
                    </div> 
                  </div>
                  <label for="exampleInputFile">Current Image 5</label>
                  <div style="width: 200px; height: 200px;">
                      <img src="{{asset('images/'.$pack->image5)}}" style="height: 100%; width: 100%; object-fit: cover;">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Popularity of this place</label>
                    <select class="form-control" name="popularity" required>
                      <option {{($pack->popularity=='Very high')? "selected":""}}>Very high</option>
                      <option {{($pack->popularity=='High')? "selected":""}}>High</option>
                      <option {{($pack->popularity=='Medium')? "selected":""}}>Medium</option>
                      <option {{($pack->popularity=='Low')? "selected":""}}>Low</option>
                      <option {{($pack->popularity=='Very Low')? "selected":""}}>Very Low</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Status of this Package</label>
                    <select class="form-control" name="status" required>
                      <option {{($pack->status=='Live')? "selected":""}}>Live</option>
                      <option {{($pack->status=='Close')? "selected":""}}>Close</option>
                    </select>
                  </div>

                <!-- /.card-body -->
           
                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" name="submit_edited_package" value="Submit">
                </div>

              </form>
            </div>

            <!-- Add from place Modal Start -->
                  <div class="modal fade" id="exampleModal_place" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5 model_title" id="exampleModalLabel">Modal title</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">close</button>
                        </div>

                            <input type="text" class="form-control add_place_model_css" placeholder="Enter place to be add" id="place_add" name="place_add" maxlength="15" required>
                            <div class="modal-footer">
                              <button type="button" id="submit_add_place" class="btn btn-primary">Add place</button>
                            </div>
                      </div>
                    </div>
                  </div>
                  <!-- Modal end -->
                  
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