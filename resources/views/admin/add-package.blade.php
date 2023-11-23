@include('admin/header')
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add New Package/Tour</h1>
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
                <h3 class="card-title">Add New Package/Tour</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tour Type</label>
                    <select class="form-control" required name="type" id="type">
                        <option id="internatinoal">International</option>
                        <option id="domestic">Domestic</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">To Place</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="To place" name="to_place" maxlength="50" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Default Price (From New Delhi)</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Default Price from New-Delhi" name="default_price" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">From Place</label> <br>
                      <div class="from_place_fles">
                          <input type="checkbox" name="from[]" value="Surat" onclick="if(this.checked){ document.getElementById('Surat').removeAttribute('disabled');}else{document.getElementById('Surat').setAttribute('disabled',true);}"> Surat </input>
                          <input type="number" class="form-control amt_add" id="Surat" placeholder="Price per day & per person from Surat" name="price[]" maxlength="100" required disabled='ture' />
                      </div>
                      <div class="from_place_fles">
                          <input type="checkbox" name="from[]" value="Ahmedabad" onclick="if(this.checked){ document.getElementById('Ahmedabad').removeAttribute('disabled');}else{document.getElementById('Ahmedabad').setAttribute('disabled',true);}"> Ahmedabad </input>
                          <input type="number" class="form-control amt_add" id="Ahmedabad" placeholder="Price per day & per person from Ahmedabad" name="price[]" maxlength="100" required disabled='ture' />
                      </div>
                      <div class="from_place_fles">
                          <input type="checkbox" name="from[]" value="Bengaluru" onclick="if(this.checked){ document.getElementById('Bengaluru').removeAttribute('disabled');}else{document.getElementById('Bengaluru').setAttribute('disabled',true);}"> Bengaluru </input>
                          <input type="number" class="form-control amt_add" id="Bengaluru" placeholder="Price per day & per person from Bengaluru" name="price[]" maxlength="100" required disabled='ture' />
                      </div>
                      <div class="from_place_fles">
                          <input type="checkbox" name="from[]" value="Mumbai" onclick="if(this.checked){ document.getElementById('Mumbai').removeAttribute('disabled');}else{document.getElementById('Mumbai').setAttribute('disabled',true);}"> Mumbai </input>
                          <input type="number" class="form-control amt_add" id="Mumbai" placeholder="Price per day & per person from Mumbai" name="price[]" maxlength="100" required disabled='ture' />
                      </div>
                      <div class="from_place_fles">
                          <input type="checkbox" name="from[]" value="Lucknow" onclick="if(this.checked){ document.getElementById('Lucknow').removeAttribute('disabled');}else{document.getElementById('Lucknow').setAttribute('disabled',true);}"> Lucknow </input>
                          <input type="number" class="form-control amt_add" id="Lucknow" placeholder="Price per day & per person from Lucknow" name="price[]" maxlength="100" required disabled='ture' />
                      </div>
                      <div class="from_place_fles">
                          <input type="checkbox" name="from[]" value="Pune" onclick="if(this.checked){ document.getElementById('Pune').removeAttribute('disabled');}else{document.getElementById('Pune').setAttribute('disabled',true);}"> Pune </input>
                          <input type="number" class="form-control amt_add" id="Pune" placeholder="Price per day & per person from Pune" name="price[]" maxlength="100" required disabled='ture' />
                      </div>
                      <div class="from_place_fles">
                          <input type="checkbox" name="from[]" value="Hyderabad" onclick="if(this.checked){ document.getElementById('Hyderabad').removeAttribute('disabled');}else{document.getElementById('Hyderabad').setAttribute('disabled',true);}"> Hyderabad </input>
                          <input type="number" class="form-control amt_add" id="Hyderabad" placeholder="Price per day & per person from Hyderabad" name="price[]" maxlength="100" required disabled='ture' />
                      </div>
                      <div class="from_place_fles">
                          <input type="checkbox" name="from[]" value="Chennai" onclick="if(this.checked){ document.getElementById('Chennai').removeAttribute('disabled');}else{document.getElementById('Chennai').setAttribute('disabled',true);}"> Chennai </input>
                          <input type="number" class="form-control amt_add" id="Chennai" placeholder="Price per day & per person from Chennai" name="price[]" maxlength="100" required disabled='ture' />
                      </div>
                      <div class="from_place_fles">
                          <input type="checkbox" name="from[]" value="Kolkata" onclick="if(this.checked){ document.getElementById('Kolkata').removeAttribute('disabled');}else{document.getElementById('Kolkata').setAttribute('disabled',true);}"> Kolkata </input>
                          <input type="number" class="form-control amt_add" id="Kolkata" placeholder="Price per day & per person from Kolkata" name="price[]" maxlength="100" required disabled='ture' />
                      </div>
                      <div class="from_place_fles">
                          <input type="checkbox" name="from[]" value="Rajkot" onclick="if(this.checked){ document.getElementById('Rajkot').removeAttribute('disabled');}else{document.getElementById('Rajkot').setAttribute('disabled',true);}"> Rajkot </input>
                          <input type="number" class="form-control amt_add" id="Rajkot" placeholder="Price per day & per person from Rajkot" name="price[]" maxlength="100" required disabled='ture' />
                      </div>
                      <div class="from_place_fles">
                          <input type="checkbox" name="from[]" value="Bhopal" onclick="if(this.checked){ document.getElementById('Bhopal').removeAttribute('disabled');}else{document.getElementById('Bhopal').setAttribute('disabled',true);}"> Bhopal </input>
                          <input type="number" class="form-control amt_add" id="Bhopal" placeholder="Price per day & per person from Bhopal" name="price[]" maxlength="100" required disabled='ture' />
                      </div>

                       <div class="add_input_of_place">
                          
                      </div>

                      <a href="javascript:void(0)" id="add_from_place" class="btn btn-primary add_from_place_button">Add From Place</a>
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

                   <div class="form-group">
                    <label for="exampleInputPassword1">Highlight</label>
                    <textarea rows="3" class="form-control" id="exampleInputPassword1" placeholder="Enter Discription of the Place" name="highlight" maxlength="1500" required></textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Hotel Type</label>
                    <select class="form-control" name="hotel_type" required>
                      <option>2 star</option>
                      <option>3 star</option>
                      <option>4 star</option>
                      <option>5 star</option>
                    </select>
                  </div>

                  <div class="form-group" id="vehicle">
                    <label for="exampleInputPassword1">Vehicle</label>
                    <select class="form-control" name="vehicle" required>
                      <option>By Flight</option>
                      <option>By Bus</option>
                      <option>By Car</option>
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
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                        <option>13</option>
                        <option>14</option>
                        <option>15</option>
                        <option>16</option>
                        <option>17</option>
                        <option>18</option>
                        <option>19</option>
                        <option>20</option>
                    </select>
                  </div>

                   <div class="form-group">
                    <label for="exampleInputPassword1">Nights</label>
                    <select class="form-control" name="total_nights" required>
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                        <option>13</option>
                        <option>14</option>
                        <option>15</option>
                        <option>16</option>
                        <option>17</option>
                        <option>18</option>
                        <option>19</option>
                        <option>20</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1" style="font-size: 18px;">Day Schedule :</label><br>

                    <label for="exampleInputPassword1">Day 1:</label>
                    <textarea rows="3" class="form-control" id="exampleInputPassword1" placeholder="Enter details" name="day[]" maxlength="1000" required></textarea>

                    <div id="day_added">
                      
                    </div>
                    <input type="hidden" id="increment" value="2">
                    <a href="javascript:void(0)" id="add_day" class="btn btn-primary add_day">Add Days</a>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">What Includes ?</label>
                    <textarea rows="3" class="form-control" id="exampleInputPassword1" placeholder="Enter includes facility in this trip.." name="includes" maxlength="1000" required></textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Map Embed Iframe Src</label>
                    <textarea rows="3" class="form-control" id="exampleInputPassword1" placeholder="Please enter only Src of Embed Iframe (Do not add full code of Iframe)" name="map_html" maxlength="2000" required></textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Image 1 (Main Image)</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image1" required>
                        <label class="custom-file-label" for="exampleInputFile">Choose image</label>
                      </div>
                    </div> 
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Image 2</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image2" required>
                        <label class="custom-file-label" for="exampleInputFile">Choose image</label>
                      </div>
                    </div> 
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Image 3</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image3" required>
                        <label class="custom-file-label" for="exampleInputFile">Choose image</label>
                      </div>
                    </div> 
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Image 4</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image4" required>
                        <label class="custom-file-label" for="exampleInputFile">Choose image</label>
                      </div>
                    </div> 
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Image 5</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image5" required>
                        <label class="custom-file-label" for="exampleInputFile">Choose image</label>
                      </div>
                    </div> 
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Popularity of this place</label>
                    <select class="form-control" name="popularity" required>
                      <option>Very high</option>
                      <option>High</option>
                      <option>Medium</option>
                      <option>Low</option>
                      <option>Very Low</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Status of this Package</label>
                    <select class="form-control" name="status" required>
                      <option>Live</option>
                      <option>Close</option>
                    </select>
                  </div>

                <!-- /.card-body -->
           
                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" name="submit_package" value="Next">
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