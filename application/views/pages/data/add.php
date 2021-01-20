<div id="page_content">
  <div id="page_content_inner">
    <div class="md-card">
      <form method="post" action="<?php echo base_url('Data/add_proses') ?>">
        <div class="md-card-content">
          <h3 class="heading_a">Tambah Data Rating</h3>
          <div class="uk-grid" data-uk-grid-margin>
            <div class="uk-width-medium-1-2">
              <select name="id_user" id="select_demo_4" data-md-selectize>
                <option value="">Select User ...</option>
                <?php foreach($user as $l){ ?>
                  <option value="<?php echo $l['id_user']; ?>"><?php echo $l['id_user']; ?></option>
                <?php } ?>
              </select>
              <span style="color: red; font-style: italic;"><?php echo form_error('id_user')?></span>
            </div>
            <div class="uk-width-medium-1-2">
              <select name="id_item" id="select_demo_4" data-md-selectize>
                <option value="">Select Item ...</option>
                <?php foreach($item as $l){ ?>
                  <option value="<?php echo $l['id_item']; ?>"><?php echo $l['id_item']; ?></option>
                <?php } ?>
              </select>
              <span style="color: red; font-style: italic;"><?php echo form_error('id_item')?></span>
            </div>
          </div>
          <div class="uk-grid" data-uk-grid-margin>
            <div class="uk-width-medium-1-2">
              <div class="uk-form-row">
                <label>Rating</label>
                <input type="number" name="rating" class="md-input" value="<?= set_value('rating') ?>" />
                <span style="color: red; font-style: italic;"><?php echo form_error('rating')?></span>
              </div>
            </div>
            <div class="uk-width-medium-1-2">
              <div class="uk-form-row">
                <label>Timestamp</label>
                <input type="number" name="timestamp" class="md-input" value="<?= set_value('timestamp') ?>" />
                <span style="color: red; font-style: italic;"><?php echo form_error('timestamp')?></span>
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
