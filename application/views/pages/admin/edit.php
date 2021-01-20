<div id="page_content">
  <div id="page_content_inner">
    <div class="md-card">
      <form method="post" action="<?php echo base_url('Admin/edit_proses') ?>">
        <div class="md-card-content">
          <h3 class="heading_a">Edit Data Admin</h3>
          <div class="uk-grid" data-uk-grid-margin>
            <div class="uk-width-medium-1-2">
              <div class="uk-form-row">
                <label>Id Admin</label>
                <input type="number" name="id_admin" class="md-input" value="<?php echo !empty($admin->id_admin)? $admin->id_admin: set_value('id_admin'); ?>" readonly />
                <span style="color: red; font-style: italic;"><?php echo form_error('id_admin')?></span>
              </div>
            </div>
            <div class="uk-width-medium-1-2">
              <div class="uk-form-row">
                <label>Nama Admin</label>
                <input type="text" name="nama_admin" class="md-input" value="<?php echo !empty($admin->nama_admin)? $admin->nama_admin: set_value('nama_admin'); ?>" />
                <span style="color: red; font-style: italic;"><?php echo form_error('nama_admin')?></span>
              </div>
            </div>
          </div>
          <div class="uk-grid" data-uk-grid-margin>
            <div class="uk-width-medium-1-2">
              <div class="uk-form-row">
                <label>Username</label>
                <input type="text" name="username" class="md-input" value="<?php echo !empty($admin->username)? $admin->username: set_value('username'); ?>" />
                <span style="color: red; font-style: italic;"><?php echo form_error('username')?></span>
              </div>
            </div>
            <div class="uk-width-medium-1-2">
              <div class="uk-form-row">
                <label>Password</label>
                <input type="password" name="password" class="md-input" value="<?php echo !empty($admin->password)? $admin->password: set_value('password'); ?>" />
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
