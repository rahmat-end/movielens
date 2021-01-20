<div id="page_content">
  <div id="page_content_inner">
    <div class="md-card">
      <form method="post" action="<?php echo base_url('User/edit_proses') ?>">
        <div class="md-card-content">
          <h3 class="heading_a">Edit Data User</h3>
          <div class="uk-grid" data-uk-grid-margin>
            <div class="uk-width-medium-1-2">
              <div class="uk-form-row">
                <label>Id User</label>
                <input type="number" name="id_user" class="md-input" value="<?php echo !empty($user->id_user)? $user->id_user: set_value('id_user'); ?>" readonly />
                <span style="color: red; font-style: italic;"><?php echo form_error('id_user')?></span>
              </div>
            </div>
            <div class="uk-width-medium-1-2">
              <div class="uk-form-row">
                <label>Age</label>
                <input type="number" name="age" class="md-input" value="<?php echo !empty($user->age)? $user->age: set_value('age'); ?>" />
                <span style="color: red; font-style: italic;"><?php echo form_error('age')?></span>
              </div>
            </div>
          </div>
          <div class="uk-grid" data-uk-grid-margin>
            <div class="uk-width-medium-1-2">
              <div class="uk-form-row">
                <label>Gender</label>
                <select name="gender" id="select_demo_4" data-md-selectize>
                  <option value="<?php echo $user->gender?>" style="display: none"><?php echo $user->gender?></option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
                <span style="color: red; font-style: italic;"><?php echo form_error('gender')?></span>
              </div>
            </div>
            <div class="uk-width-medium-1-2">
              <div class="uk-form-row">
                <label>Zipcode</label>
                <input type="number" name="zipcode" class="md-input" value="<?php echo !empty($user->zipcode)? $user->zipcode: set_value('zipcode'); ?>" />
                <span style="color: red; font-style: italic;"><?php echo form_error('zipcode')?></span>
              </div>
            </div>
          </div>
          <div class="uk-grid" data-uk-grid-margin>
            <div class="uk-width-medium-1-2">
              <div class="uk-form-row">
                <label>Occupation</label>
                <select name="id_occupation" id="select_demo_4" data-md-selectize>
                  <option value="<?php echo $user->id_occupation?>" style="display: none"><?php echo $user->name_occupation?></option>
                  <?php foreach($occupation as $l){ ?>
                    <option value="<?php echo $l['id_occupation']; ?>"><?php echo $l['name_occupation']; ?></option>
                  <?php } ?>
                </select>
                <span style="color: red; font-style: italic;"><?php echo form_error('id_occupation')?></span>
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
