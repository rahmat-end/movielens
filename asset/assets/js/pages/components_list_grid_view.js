$(function() {
    var $viewToggle = $('#list_grid_toggle').children('li'),
        $listGrid = $('#list_grid');

    $viewToggle.each(function() {
        if($(this).hasClass('uk-active')) {
            $listGrid.addClass($viewToggle.attr('data-view'));
        }
    });

    // set view class on init

    $viewToggle.on('click',function(e) {
        e.preventDefault();

        var $this = $(this),
            isActive = $this.hasClass('uk-active');

        if(!isActive) {
            var view = $this.attr('data-view');
            if(view == 'list_view') {
                $listGrid.addClass('list_view').removeClass('grid_view');
            } else {
                $listGrid.addClass('grid_view').removeClass('list_view');
            }
            $this.addClass('uk-active').siblings().removeClass('uk-active');
        }
    });

});