$(function() {
    $('#accordion2').on('mouseenter.collapse.data-api', '[data-toggle=collapse]', function(e) {
        var $this = $(this),
            href, target = $this.attr('data-target') || e.preventDefault() || (href = $this.attr('href')) && href.replace(/.*(?=#[^\s]+$)/, '') //strip for ie7
            ,
            option = $(target).data('collapse') ? 'show' : $this.data()
            $(target).collapse(option)
    })
})
