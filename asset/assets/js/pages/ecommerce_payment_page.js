$(function() {
    $('[name="pm"]').on('ifChecked',function() {
        var $this = $(this);
        $('.js-pm_info').not($this).slideUp('fast');
        $('.' + $this.attr('id')).slideDown('fast');
    })
});