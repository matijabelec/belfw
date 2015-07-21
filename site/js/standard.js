function prepare_tabs() {
    var tabcs = $(".tab-container");
    $('.pane div').hide();
    
    tabcs.each(function(e){
        sel = $(this).children('ul.tabs').find('a').first();
        if(sel) {
            tid = sel.attr('data-tabid');
            $(this).children('.pane').find('[data-id="' + tid + '"]').show();
        }
        
        $(this).on('click', 'ul.tabs a', function(e) {
            e.preventDefault();
            tid = $(this).attr('data-tabid');
            $('.pane div').hide();
            $(this).closest('.tab-container').children('.pane').find('[data-id="' + tid + '"]').show();
            return false;
        });
    });
}
