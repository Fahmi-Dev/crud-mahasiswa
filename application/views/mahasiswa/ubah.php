<div class="container">
  <div class="row mt-3">
    <div class="col-md-6">

      <div class="card">
        <div class="card-header">
          Form Ubah Data Mahasiswa
        </div>
        <div class="card-body">
          <!-- <?php //if(validation_errors()): ?>
          <div class="alert alert-danger" role="alert">
            <?php //echo validation_errors(); ?>
          </div>
          <?php //endif ?> -->

          <form class="" action="" method="post">
            <input type="hidden" name="id" value="<?php echo $mahasiswa['id']; ?>">
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $mahasiswa['nama']; ?>">
              <small class="form-text text-danger"><?php echo form_error('nama'); ?></small>
            </div>

            <div class="form-group">
              <label for="nim">NIM</label>
              <input type="text" class="form-control" id="nim" name="nim"
              value="<?php echo $mahasiswa['nim']; ?>">
              <small class="form-text text-danger"><?php echo form_error('nim'); ?></small>
            </div>

            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" id="email" name="email" value="<?php echo $mahasiswa['email']; ?>">
              <small class="form-text text-danger"><?php echo form_error('email'); ?></small>
            </div>

            <div class="form-group">
              <label for="jurusan">Jurusan</label>
              <select class="form-control" id="jurusan" name="jurusan">
                <?php foreach ($jurusan as $j): ?>
                  <?php if ($j == $mahasiswa['jurusan']): ?>
                    <option value="<?php echo $j; ?>" selected><?php echo $j; ?></option>
                  <?php else : ?>
                    <option value="<?php echo $j; ?>"><?php echo $j; ?></option>
                  <?php endif ?>
              <?php endforeach ?>
              </select>
            </div>

            <button class="btn btn-primary float-right" type="submit" name="ubah" >Ubah Data</button>
          </form>

        </div>
      </div>

    </div>
  </div>
</div>
