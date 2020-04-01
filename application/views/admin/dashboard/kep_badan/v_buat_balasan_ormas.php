<!-- Menu -->
<?=$header;?>
<!-- End Menu -->

        <!-- Isi Konten Disini -->
        <div class="right_col" role="main">

  <?php if(is_array($cari_sumber_ormas)){ ?>
             <?php $no = 1;?>
             <?php foreach($cari_sumber_ormas as $b) {
              $sumber = $b->sumber_surat;

             } ?>
             <?php } ?>

                <div class="x_panel">
                  <div class="x_title">
                    <h2>Buat Surat Balasan Ormas</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />

                  
                    <form class="form-horizontal form-label-left" action="<?php echo base_url()?>admin/simpan_balasan_ormas"  method="POST">


                      <input type="hidden" name="id_surat" value="<?=$id_surat?>">
                      <input type="hidden" name="nik" value="<?=$nik?>">

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12">Tanggal Surat : </label>
                        <div class="col-md-4 col-sm-10 col-xs-12">
                          <input type="date" class="form-control" name="tgl_surat"  required oninvalid="this.setCustomValidity('Isi Terlebih Dahulu')" oninput="setCustomValidity('')">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12">Berdasarkan : </label>
                        <div class="col-md-10 col-sm-10 col-xs-12">
                          <input type="text" class="form-control" name="berdasarkan" value="<?=$sumber?>" required oninvalid="this.setCustomValidity('Tidak boleh kosong')" oninput="setCustomValidity('')" disabled>
                        </div>
                      </div>

                   <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12">Tanggal Wajib Lapor : </label>
                        <div class="col-md-4 col-sm-10 col-xs-12">
                          <input type="date" class="form-control" name="tgl_wajib_lapor"  required oninvalid="this.setCustomValidity('Isi Terlebih Dahulu')" oninput="setCustomValidity('')">
                        </div>
                      </div>

                      
                  <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-4 col-sm-4 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success"> <i class="fa fa-edit"> </i> &nbsp; Simpan Surat</button>
                    </form>
                           <button type="button" class="btn btn-danger" onclick="window.history.go(-1); return false;"> <i class="fa fa-arrow-left"> </i> &nbsp; Kembali</button> 
                        </div>
                      </div>

                  </div>
                </div>
              </div>

       


        <!-- End Konten  -->


<!-- Footer -->
<?=$footer;?>
<!-- End Footer-->


 