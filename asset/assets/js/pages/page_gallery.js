$(function() {
    var $grid = $('#galleryGrid');
    $grid.waitForImages(function() {
        console.log('All images have loaded.');
        var grid = UIkit.grid($grid, {
            gutter: 16
        });
    });
});