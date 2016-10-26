<!DOCTYPE html>
<html lang="en">

<!-- head -->
  <?php include 'head.php';?>
<!-- end of head -->

<body>

    <!-- *** NAVBAR *** -->
    <?php include 'navbar.php';?>
    <!-- *** NAVBAR END *** -->

    <div id="all">

        <div id="content">
            <div class="container">

                <!-- <div class="col-md-12">

                    <ul class="breadcrumb">
                        <li><a href="<?php echo base_url()."index.php/main" ?>">Home</a>
                        </li>
                        <li>Jual</li>
                    </ul>

                </div> -->

                <div class="col-md-8">
                    <div class="box">
                        <h1>Jual</h1>

                        <p class="lead">Ubah Barang berkasmu Jadi uang.</p>
                        <p>Anda dapat menjual barang-barang dengan tipe tertentu, kami beli dengan harga tinggi.</p>
                        <p class="text-muted">Jika Ada hal yang ingin ditanyakan, <a href="<?php echo base_url()."index.php/main/contact" ?>">hubungi kami</a>.</p>

                        <hr>

                        <form action="<?php echo base_url()."index.php/user/do_jual" ?>" method="post">
                          <div class="form-group">
                            <label>Jenis Barang</label>
                            <select class="form-control" name="jenis">
                              <option value="1">Besi</option>
                              <option value="2">Botol Plastik</option>
                              <option value="3">Gelas Bening</option>
                              <option value="4">Kardus</option>
                              <option value="5">Buku Campur</option>
                              <option value="6">Beling Bening</option>
                              <option value="7">Kertas HVS/SWL</option>
                              <option value="8">Koran Bekas</option>
                            </select>
                          </div>
                            <!-- <div class="form-group">
                              <label for="exampleInputFile">Foto Barang</label>
                              <input type="file" id="exampleInputFile">
                              <p class="help-block">Maksimal ukuran file 2 MB</p>
                            </div> -->
                            <div class="form-group">
                                <label for="berat">Berat </label>
                                <input type="number" class="form-control" name="berat">
                            </div>
                            <div class="form-group">
                                <label for="keterangan">Lokasi Penjemputan</label>
                                <input type="text" class="form-control" name="lokasi">
                            </div>
                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <input type="text" class="form-control" name="keterangan">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-user-md"></i>Jual</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                      <div class="box-header with-border">
                        <h3 class="box-title">Jenis Barang</h3>
                      </div>
                <!-- /.box-header -->
                      <div class="box-body">
                        <table class="table table-bordered">
                          <tr>
                            <th style="width: 10px">No</th>
                            <th>Jenis</th>
                            <th>Harga/kg</th>
                          </tr>
                          <tr>
                            <td>1.</td>
                            <td>Besi</td>
                            <td>Rp. 2.500,-</td>
                          </tr>
                          <tr>
                            <td>2.</td>
                            <td>Gelas Bening</td>
                            <td>Rp. 2.500,-</td>
                          </tr>
                          <tr>
                            <td>3.</td>
                            <td>Botol Plastik</td>
                            <td>Rp. 3.500,-</td>
                          </tr>
                          <tr>
                            <td>4.</td>
                            <td>Kardus</td>
                            <td>Rp. 2.500,-</td>
                          </tr>
                          <tr>
                            <td>5.</td>
                            <td>Buku Campur</td>
                            <td>Rp. 1.300,-</td>
                          </tr>
                          <tr>
                            <td>6.</td>
                            <td>Beling Bening</td>
                            <td>Rp. 1.000,-</td>
                          </tr>
                          <tr>
                            <td>7.</td>
                            <td>Kertas HVS/SWL</td>
                            <td>Rp. 2.500,-</td>
                          </tr>
                          <tr>
                            <td>8.</td>
                            <td>Koran Bekas</td>
                            <td>Rp. 2.900,-</td>
                          </tr>
                        </table>
                      </div>
                <!-- /.box-body -->
                    </div>
                </div>
            </div>

            <!-- /.container -->
      </div>

        <!-- /#content -->


        <!-- *** FOOTER ***-->
          <?php include 'footer.php';?>
        <!-- *** FOOTER END *** -->

    </div>
    <!-- /#all -->


    <!-- *** SCRIPTS TO INCLUDE *** -->
 <!-- script -->
      <?php include 'script.php';?>
<!-- end of script -->

</body>

</html>
