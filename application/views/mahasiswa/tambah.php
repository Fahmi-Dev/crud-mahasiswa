<div class="row">
  <div class="col-lg-6">
    <div class="card m-b-30">
      <div class="card-body">

        <h4 class="mt-0 header-title">Validation type</h4>
        <p class="sub-title">Parsley is a javascript form validation
          library. It helps you provide your users with feedback on their form
          submission before sending it to your server.</p>

        <form class="" action="<?php echo form_error('nama'); ?>">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" required placeholder="Type something" id="nama" name="nama" />
          </div>

          <div class="form-group">
            <label for="nim">NIM</label>
            <div>
              <input type="text" id="pass2" class="form-control" required placeholder="NIM" id="nim" name="nim" />
            </div>
            <div class="m-t-10">
              <input type="password" class="form-control" required data-parsley-equalto="#pass2" placeholder="Re-Type Password" />
            </div>
          </div>

          <div class="form-group">
            <label>E-Mail</label>
            <div>
              <input type="email" class="form-control" required parsley-type="email" placeholder="Enter a valid e-mail" />
            </div>
          </div>
          <div class="form-group">
            <label>URL</label>
            <div>
              <input parsley-type="url" type="url" class="form-control" required placeholder="URL" />
            </div>
          </div>
          <div class="form-group">
            <label>Digits</label>
            <div>
              <input data-parsley-type="digits" type="text" class="form-control" required placeholder="Enter only digits" />
            </div>
          </div>
          <div class="form-group">
            <label>Number</label>
            <div>
              <input data-parsley-type="number" type="text" class="form-control" required placeholder="Enter only numbers" />
            </div>
          </div>
          <div class="form-group">
            <label>Alphanumeric</label>
            <div>
              <input data-parsley-type="alphanum" type="text" class="form-control" required placeholder="Enter alphanumeric value" />
            </div>
          </div>
          <div class="form-group">
            <label>Textarea</label>
            <div>
              <textarea required class="form-control" rows="5"></textarea>
            </div>
          </div>
          <div class="form-group">
            <div>
              <button type="submit" class="btn btn-primary waves-effect waves-light">
                Submit
              </button>
              <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                Cancel
              </button>
            </div>
          </div>
        </form>

      </div>
    </div>
  </div> <!-- end col -->


  <div class="container">
    <div class="row mt-3">
      <div class="col-md-6">

        <div class="card">
          <div class="card-header">
            Form Tambah Data Mahasiswa
          </div>
          <div class="card-body">
            <!-- <?php //if(validation_errors()): 
                  ?>
          <div class="alert alert-danger" role="alert">
            <?php //echo validation_errors(); 
            ?>
          </div>
          <?php //endif 
          ?> -->

            <form class="" action="" method="post">
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
                <small class="form-text text-danger"><?php echo form_error('nama'); ?></small>
              </div>
              <div class="form-group">
                <label for="nim">NIM</label>
                <input type="text" class="form-control" id="nim" name="nim">
                <small class="form-text text-danger"><?php echo form_error('nim'); ?></small>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email">
                <small class="form-text text-danger"><?php echo form_error('email'); ?></small>
              </div>
              <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <select class="form-control" id="jurusan" name="jurusan">
                  <option value="Informatika">Informatika</option>
                  <option value="Teknik Industri">Teknik Industri</option>
                  <option value="Teknik Elektro">Teknik Elektro</option>
                  <option value="Teknik Mesin">Teknik Mesin</option>
                </select>
              </div>
              <button class="btn btn-primary float-right" type="submit" name="tambah">Tambah Data</button>
            </form>

          </div>
        </div>

      </div>
    </div>
  </div>