<div id="page_content">
  <div id="page_content_inner">
    <div class="md-card">
      <form method="post" action="<?php echo base_url('Occupation/edit_proses') ?>">
        <div class="md-card-content">
          <h3 class="heading_a">Edit Data Occupation</h3>
          <div class="uk-grid" data-uk-grid-margin>
            <div class="uk-width-medium-1-2">
              <div class="uk-form-row">
                <label>Id Occupation</label>
                <input type="number" name="id_occupation" class="md-input" value="<?php echo !empty($occupation->id_occupation)? $occupation->id_occupation: set_value('id_occupation'); ?>" readonly />
                <span style="color: red; font-style: italic;"><?php echo form_error('id_occupation')?></span>
              </div>
            </div>
            <div class="uk-width-medium-1-2">
              <div class="uk-form-row">
                <label>Name Occupation</label>
                <input type="text" name="name_occupation" class="md-input" value="<?php echo !empty($occupation->name_occupation)? $occupation->name_occupation: set_value('name_occupation'); ?>" />
                <span style="color: red; font-style: italic;"><?php echo form_error('name_occupation')?></span>
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
