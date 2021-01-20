$(function() {
    $('#replay-animations').on('click',function(e) {
        e.preventDefault();
        altair_helpers.hierarchical_show('#hierarchical-show');
        altair_helpers.hierarchical_slide('#hierarchical-slide');
    })
});