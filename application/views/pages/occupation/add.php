<div id="page_content">
  <div id="page_content_inner">
    <div class="md-card">
      <form method="post" action="<?php echo base_url('Occupation/add_proses') ?>">
        <div class="md-card-content">
          <h3 class="heading_a">Tambah Data Occupation</h3>
          <div class="uk-grid" data-uk-grid-margin>
            <div class="uk-width-medium-1-2">
              <div class="uk-form-row">
                <label>Name Occupation</label>
                <input type="text" name="name_occupation" class="md-input" value="<?= set_value('name_occupation') ?>" />
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
