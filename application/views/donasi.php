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
                        <li>Donasi</li>
                    </ul>

                </div> -->

                <div class="col-md-12">
                    <div class="box">
                        <h1>Donasi</h1>

                        <p class="lead">Jadikan Barang berkasmu lebih bermanfaat, dengan mendonasikannya.</p>
                        <p>Anda dapat berdonasi apapun yang tentunya akan bermanfaat bagi orang lain.</p>
                        <p class="text-muted">Jika Ada hal yang ingin ditanyakan, <a href="<?php echo base_url()."index.php/main/contact" ?>">hubungi kami</a>.</p>

                        <hr>

                        <form action="<?php echo base_url()."index.php/user/do_donasi" ?>" method="post">
                          <div class="form-group" >
                            <label>Jenis Barang</label>
                            <select class="form-control" name="jenis" >
                              <option value="1">Besi</option>
                              <option value="2">Botol Plastik</option>
                              <option value="3">Gelas Bening</option>
                              <option value="4">Kardus</option>
                              <option value="5">Buku Campur</option>
                              <option value="6">Beling Bening</option>
                              <option value="7">Kertas HVS/SWL</option>
                              <option value="8">Koran Bekas</option>
                              <option value="9">Lainnya</option>
                            </select>
                          </div>
                          <!-- <div class="form-group">
                            <label for="exampleInputFile">Foto Barang</label>
                            <input type="file" id="exampleInputFile">
                            <p class="help-block">Maksimal ukuran file 2 MB</p>
                          </div> -->
                            <div class="form-group">
                                <label for="berat">Estimasi Berat</label>
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
                                <button type="submit" class="btn btn-primary"><i class="fa fa-user-md"></i> Donasikan</button>
                            </div>
                        </form>
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
