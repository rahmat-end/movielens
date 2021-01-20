<div id="page_content">
  <div id="page_content_inner">
    <div class="md-card">
      <form method="post" action="<?php echo base_url('Item/add_proses') ?>">
        <div class="md-card-content">
          <h3 class="heading_a">Tambah Data Item</h3>
          <div class="uk-grid" data-uk-grid-margin>
            <div class="uk-width-medium-1-2">
              <div class="uk-form-row">
                <label>Movie</label>
                <input type="text" name="movie" class="md-input" value="<?= set_value('movie') ?>" />
                <span style="color: red; font-style: italic;"><?php echo form_error('movie')?></span>
              </div>
            </div>
            <div class="uk-width-medium-1-2">
              <div class="uk-form-row">
                <label>Release</label>
                <input type="date" name="release_date" class="md-input label-fixed" value="<?= set_value('release_date') ?>" />
                <span style="color: red; font-style: italic;"><?php echo form_error('release_date')?></span>
              </div>
            </div>
          </div>
          <div class="uk-grid" data-uk-grid-margin>
            <div class="uk-width-medium-1-2">
              <div class="uk-form-row">
                <label>Video Release</label>
                <input type="date" name="video_release_date" class="md-input label-fixed" value="<?= set_value('video_release_date') ?>" />
                <span style="color: red; font-style: italic;"><?php echo form_error('video_release_date')?></span>
              </div>
            </div>
            <div class="uk-width-medium-1-2">
              <div class="uk-form-row">
                <label>IMDB Url</label>
                <input type="text" name="imdb_url" class="md-input" value="<?= set_value('imdb_url') ?>" />
                <span style="color: red; font-style: italic;"><?php echo form_error('imdb_url')?></span>
              </div>
            </div>
          </div>
          <div class="uk-grid" data-uk-grid-margin>
            <div class="uk-width-medium-1-2">
              <label>Select Genre ...</label>
              <div class="uk-form-row" style="margin-top: 15px;">
                <span class="icheck-inline">
                  <input type="checkbox" name="unknown" value="Unknown" data-md-icheck />
                  <label class="inline-label">Unknown</label>
                </span>
                <span class="icheck-inline">
                  <input type="checkbox" name="action" value="Action" data-md-icheck />
                  <label class="inline-label">Action</label>
                </span>
                <span class="icheck-inline">
                  <input type="checkbox" name="adventure" value="Adventure" data-md-icheck />
                  <label class="inline-label">Adventure</label>
                </span>
                <span class="icheck-inline">
                  <input type="checkbox" name="animation" value="Animation" data-md-icheck />
                  <label class="inline-label">Animation</label>
                </span>
                <span class="icheck-inline">
                  <input type="checkbox" name="children" value="Children's" data-md-icheck />
                  <label class="inline-label">Children's</label>
                </span>
                <span class="icheck-inline">
                  <input type="checkbox" name="comedy" value="Comedy" data-md-icheck />
                  <label class="inline-label">Comedy</label>
                </span>
                <span class="icheck-inline">
                  <input type="checkbox" name="crime" value="Crime" data-md-icheck />
                  <label class="inline-label">Crime</label>
                </span>
                <span class="icheck-inline">
                  <input type="checkbox" name="documentary" value="Documentary" data-md-icheck />
                  <label class="inline-label">Documentary</label>
                </span>
                <span class="icheck-inline">
                  <input type="checkbox" name="drama" value="Drama" data-md-icheck />
                  <label class="inline-label">Drama</label>
                </span>
                <span class="icheck-inline">
                  <input type="checkbox" name="fantasy" value="Fantasy" data-md-icheck />
                  <label class="inline-label">Fantasy</label>
                </span>
                <span class="icheck-inline">
                  <input type="checkbox" name="film_noir" value="Film-Noir" data-md-icheck />
                  <label class="inline-label">Film-Noir</label>
                </span>
                <span class="icheck-inline">
                  <input type="checkbox" name="horror" value="Horror" data-md-icheck />
                  <label class="inline-label">Horror</label>
                </span>
                <span class="icheck-inline">
                  <input type="checkbox" name="musical" value="Musical" data-md-icheck />
                  <label class="inline-label">Musical</label>
                </span>
                <span class="icheck-inline">
                  <input type="checkbox" name="mystery" value="Mystery" data-md-icheck />
                  <label class="inline-label">Mystery</label>
                </span>
                <span class="icheck-inline">
                  <input type="checkbox" name="romance" value="Romance" data-md-icheck />
                  <label class="inline-label">Romance</label>
                </span>
                <span class="icheck-inline">
                  <input type="checkbox" name="sci_fi" value="Sci-Fi" data-md-icheck />
                  <label class="inline-label">Sci-Fi</label>
                </span>
                <span class="icheck-inline">
                  <input type="checkbox" name="thriller" value="Thriller" data-md-icheck />
                  <label class="inline-label">Thriller</label>
                </span>
                <span class="icheck-inline">
                  <input type="checkbox" name="war" value="War" data-md-icheck />
                  <label class="inline-label">War</label>
                </span>
                <span class="icheck-inline">
                  <input type="checkbox" name="western" value="Western" data-md-icheck />
                  <label class="inline-label">Western</label>
                </span>
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
