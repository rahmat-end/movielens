<div id="page_content">
  <div id="page_content_inner">
    <div class="md-card">
      <form method="post" action="<?php echo base_url('Admin/add_proses') ?>">
        <div class="md-card-content">
          <h3 class="heading_a">Tambah Data Admin</h3>
          <div class="uk-grid" data-uk-grid-margin>
            <div class="uk-width-medium-1-2">
              <div class="uk-form-row">
                <label>Nama Admin</label>
                <input type="text" name="nama_admin" class="md-input" value="<?= set_value('nama_admin') ?>" />
                <span style="color: red; font-style: italic;"><?php echo form_error('nama_admin')?></span>
              </div>
            </div>
            <div class="uk-width-medium-1-2">
              <div class="uk-form-row">
                <label>Username</label>
                <input type="text" name="username" class="md-input" value="<?= set_value('username') ?>" />
                <span style="color: red; font-style: italic;"><?php echo form_error('username')?></span>
              </div>
            </div>
          </div>
          <div class="uk-grid" data-uk-grid-margin>
            <div class="uk-width-medium-1-2">
              <div class="uk-form-row">
                <label>Password</label>
                <input type="password" name="password" class="md-input" value="<?= set_value('password') ?>" />
                <span style="color: red; font-style: italic;"><?php echo form_error('password')?></span>
              </div>
            </div>
          </div>
          <div class="uk-grid" data-uk-grid-margin>
            <div class="uk-width-medium-1-1">
              <div class="uk-form-row">
                <input type="submit" class="md-btn md-btn-primary" value="Submit" >
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
