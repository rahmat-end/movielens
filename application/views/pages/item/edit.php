<div id="page_content">
  <div id="page_content_inner">
    <div class="md-card">
      <form method="post" action="<?php echo base_url('Item/edit_proses') ?>">
        <div class="md-card-content">
          <h3 class="heading_a">Edit Data Item</h3>
          <div class="uk-grid" data-uk-grid-margin>
            <div class="uk-width-medium-1-2">
              <div class="uk-form-row">
                <label>Id Item</label>
                <input type="number" name="id_item" class="md-input" value="<?php echo !empty($item->id_item)? $item->id_item: set_value('id_item'); ?>" readonly />
                <span style="color: red; font-style: italic;"><?php echo form_error('id_item')?></span>
              </div>
            </div>
            <div class="uk-width-medium-1-2">
              <div class="uk-form-row">
                <label>Movie</label>
                <input type="text" name="movie" class="md-input" value="<?php echo !empty($item->movie)? $item->movie: set_value('movie'); ?>" />
                <span style="color: red; font-style: italic;"><?php echo form_error('movie')?></span>
              </div>
            </div>
          </div>
          <div class="uk-grid" data-uk-grid-margin>
            <div class="uk-width-medium-1-2">
              <div class="uk-form-row">
                <label>Release</label>
                <input type="number" name="release_date" class="md-input label-fixed" value="<?php echo !empty($item->release_date)? $item->release_date: set_value('release_date'); ?>" />
                <span style="color: red; font-style: italic;"><?php echo form_error('release_date')?></span>
              </div>
            </div>
            <div class="uk-width-medium-1-2">
              <div class="uk-form-row">
                <label>Video Release</label>
                <input type="date" name="video_release_date" class="md-input label-fixed" value="<?php echo !empty($item->video_release_date)? $item->video_release_date: set_value('video_release_date'); ?>" />
                <span style="color: red; font-style: italic;"><?php echo form_error('video_release_date')?></span>
              </div>
            </div>
          </div>
          <div class="uk-grid" data-uk-grid-margin>
            <div class="uk-width-medium-1-2">
              <div class="uk-form-row">
                <label>IMDB Url</label>
                <input type="text" name="imdb_url" class="md-input" value="<?php echo !empty($item->imdb_url)? $item->imdb_url: set_value('imdb_url'); ?>" />
                <span style="color: red; font-style: italic;"><?php echo form_error('imdb_url')?></span>
              </div>
            </div>
            <div class="uk-width-medium-1-2">
              <label>Select Genre ...</label>
              <div class="uk-form-row" style="margin-top: 15px;">
                <span class="icheck-inline">
                  <?php if($item->unknown==NULL): ?>
                  <input type="checkbox" name="unknown" value="Unknown" data-md-icheck />
                  <?php else: ?>
                  <input type="checkbox" name="unknown" value="<?php echo !empty($item->unknown)? $item->unknown: set_value('unknown'); ?>" data-md-icheck checked />
                  <?php endif; ?>
                  <label class="inline-label">Unknown</label>
                </span>
                <span class="icheck-inline">
                  <?php if($item->action==NULL): ?>
                  <input type="checkbox" name="action" value="Action" data-md-icheck />
                  <?php else: ?>
                  <input type="checkbox" name="action" value="<?php echo !empty($item->action)? $item->action: set_value('action'); ?>" data-md-icheck checked />
                  <?php endif; ?>
                  <label class="inline-label">Action</label>
                </span>
                <span class="icheck-inline">
                  <?php if($item->adventure==NULL): ?>
                  <input type="checkbox" name="adventure" value="Adventure" data-md-icheck />
                  <?php else: ?>
                  <input type="checkbox" name="adventure" value="<?php echo !empty($item->adventure)? $item->adventure: set_value('adventure'); ?>" data-md-icheck checked />
                  <?php endif; ?>
                  <label class="inline-label">Adventure</label>
                </span>
                <span class="icheck-inline">
                  <?php if($item->animation==NULL): ?>
                  <input type="checkbox" name="animation" value="Animation" data-md-icheck />
                  <?php else: ?>
                  <input type="checkbox" name="animation" value="<?php echo !empty($item->animation)? $item->animation: set_value('animation'); ?>" data-md-icheck checked />
                  <?php endif; ?>
                  <label class="inline-label">Animation</label>
                </span>
                <span class="icheck-inline">
                  <?php if($item->children==NULL): ?>
                  <input type="checkbox" name="children" value="Children" data-md-icheck />
                  <?php else: ?>
                  <input type="checkbox" name="children" value="<?php echo !empty($item->children)? $item->children: set_value('children'); ?>" data-md-icheck checked />
                  <?php endif; ?>
                  <label class="inline-label">Children</label>
                </span>
                <span class="icheck-inline">
                  <?php if($item->comedy==NULL): ?>
                  <input type="checkbox" name="comedy" value="Comedy" data-md-icheck />
                  <?php else: ?>
                  <input type="checkbox" name="comedy" value="<?php echo !empty($item->comedy)? $item->comedy: set_value('comedy'); ?>" data-md-icheck checked />
                  <?php endif; ?>
                  <label class="inline-label">Comedy</label>
                </span>
                <span class="icheck-inline">
                  <?php if($item->crime==NULL): ?>
                  <input type="checkbox" name="crime" value="Crime" data-md-icheck />
                  <?php else: ?>
                  <input type="checkbox" name="crime" value="<?php echo !empty($item->crime)? $item->crime: set_value('crime'); ?>" data-md-icheck checked />
                  <?php endif; ?>
                  <label class="inline-label">Crime</label>
                </span>
                <span class="icheck-inline">
                  <?php if($item->documentary==NULL): ?>
                  <input type="checkbox" name="documentary" value="Documentary" data-md-icheck />
                  <?php else: ?>
                  <input type="checkbox" name="documentary" value="<?php echo !empty($item->documentary)? $item->documentary: set_value('documentary'); ?>" data-md-icheck checked />
                  <?php endif; ?>
                  <label class="inline-label">Documentary</label>
                </span>
                <span class="icheck-inline">
                  <?php if($item->drama==NULL): ?>
                  <input type="checkbox" name="drama" value="Drama" data-md-icheck />
                  <?php else: ?>
                  <input type="checkbox" name="drama" value="<?php echo !empty($item->drama)? $item->drama: set_value('drama'); ?>" data-md-icheck checked />
                  <?php endif; ?>
                  <label class="inline-label">Drama</label>
                </span>
                <span class="icheck-inline">
                  <?php if($item->fantasy==NULL): ?>
                  <input type="checkbox" name="fantasy" value="Fantasy" data-md-icheck />
                  <?php else: ?>
                  <input type="checkbox" name="fantasy" value="<?php echo !empty($item->fantasy)? $item->fantasy: set_value('fantasy'); ?>" data-md-icheck checked />
                  <?php endif; ?>
                  <label class="inline-label">Fantasy</label>
                </span>
                <span class="icheck-inline">
                  <?php if($item->film_noir==NULL): ?>
                  <input type="checkbox" name="film_noir" value="Film-Noir" data-md-icheck />
                  <?php else: ?>
                  <input type="checkbox" name="film_noir" value="<?php echo !empty($item->film_noir)? $item->film_noir: set_value('film_noir'); ?>" data-md-icheck checked />
                  <?php endif; ?>
                  <label class="inline-label">Film-Noir</label>
                </span>
                <span class="icheck-inline">
                  <?php if($item->horror==NULL): ?>
                  <input type="checkbox" name="horror" value="Horror" data-md-icheck />
                  <?php else: ?>
                  <input type="checkbox" name="horror" value="<?php echo !empty($item->horror)? $item->horror: set_value('horror'); ?>" data-md-icheck checked />
                  <?php endif; ?>
                  <label class="inline-label">Horror</label>
                </span>
                <span class="icheck-inline">
                  <?php if($item->musical==NULL): ?>
                  <input type="checkbox" name="musical" value="Musical" data-md-icheck />
                  <?php else: ?>
                  <input type="checkbox" name="musical" value="<?php echo !empty($item->musical)? $item->musical: set_value('musical'); ?>" data-md-icheck checked />
                  <?php endif; ?>
                  <label class="inline-label">Musical</label>
                </span>
                <span class="icheck-inline">
                  <?php if($item->mystery==NULL): ?>
                  <input type="checkbox" name="mystery" value="Mystery" data-md-icheck />
                  <?php else: ?>
                  <input type="checkbox" name="mystery" value="<?php echo !empty($item->mystery)? $item->mystery: set_value('mystery'); ?>" data-md-icheck checked />
                  <?php endif; ?>
                  <label class="inline-label">Mystery</label>
                </span>
                <span class="icheck-inline">
                  <?php if($item->romance==NULL): ?>
                  <input type="checkbox" name="romance" value="Romance" data-md-icheck />
                  <?php else: ?>
                  <input type="checkbox" name="romance" value="<?php echo !empty($item->romance)? $item->romance: set_value('romance'); ?>" data-md-icheck checked />
                  <?php endif; ?>
                  <label class="inline-label">Romance</label>
                </span>
                <span class="icheck-inline">
                  <?php if($item->sci_fi==NULL): ?>
                  <input type="checkbox" name="sci_fi" value="Sci-Fi" data-md-icheck />
                  <?php else: ?>
                  <input type="checkbox" name="sci_fi" value="<?php echo !empty($item->sci_fi)? $item->sci_fi: set_value('sci_fi'); ?>" data-md-icheck checked />
                  <?php endif; ?>
                  <label class="inline-label">Sci-Fi</label>
                </span>
                <span class="icheck-inline">
                  <?php if($item->thriller==NULL): ?>
                  <input type="checkbox" name="thriller" value="Thriller" data-md-icheck />
                  <?php else: ?>
                  <input type="checkbox" name="thriller" value="<?php echo !empty($item->thriller)? $item->thriller: set_value('thriller'); ?>" data-md-icheck checked />
                  <?php endif; ?>
                  <label class="inline-label">Thriller</label>
                </span>
                <span class="icheck-inline">
                  <?php if($item->war==NULL): ?>
                  <input type="checkbox" name="war" value="War" data-md-icheck />
                  <?php else: ?>
                  <input type="checkbox" name="war" value="<?php echo !empty($item->war)? $item->war: set_value('war'); ?>" data-md-icheck checked />
                  <?php endif; ?>
                  <label class="inline-label">War</label>
                </span>
                <span class="icheck-inline">
                  <?php if($item->western==NULL): ?>
                  <input type="checkbox" name="western" value="Western" data-md-icheck />
                  <?php else: ?>
                  <input type="checkbox" name="western" value="<?php echo !empty($item->western)? $item->western: set_value('western'); ?>" data-md-icheck checked />
                  <?php endif; ?>
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
