$(document).ready(function () {
    $('#leaders').before('<div id="after"></div>');
    var rowsShown = 25;
    var rowsTotal = $('#leaders tbody tr').length;
    var numPages = rowsTotal / rowsShown;
    for (i = 0; i < numPages; i++) {
        var pageNum = i + 1;
        $('#after').append('<a href="#" rel="' + i + '">' + pageNum + '</a> ');
    }

    $('#leaders tbody tr').hide();
    $('#leaders  tbody tr').slice(0, rowsShown).show();
    $('#after a:first').addClass('active');
    $('#after a').bind('click', function () {

        $('#after a').removeClass('active');
        $(this).addClass('active');
        var currPage = $(this).attr('rel');
        var startItem = currPage * rowsShown;
        var endItem = startItem + rowsShown;
        $('#leaders tbody tr').css('opacity', '0.0').hide().slice(startItem, endItem).
        css('display', 'table-row').animate({
            opacity: 1
        }, 300);
    });
});


$(document).ready(function () {
    $('#hall').after('<div id="after"></div>');
    var rowsShown = 25;
    var rowsTotal = $('#hall tbody tr').length;
    var numPages = rowsTotal / rowsShown;
    for (i = 0; i < numPages; i++) {
        var pageNum = i + 1;
        $('#after').append('<a href="#" rel="' + i + '">' + pageNum + '</a> ');
    }

    $('#hall tbody tr').hide();
    $('#hall  tbody tr').slice(0, rowsShown).show();
    $('#after a:first').addClass('active');
    $('#after a').bind('click', function () {

        $('#after a').removeClass('active');
        $(this).addClass('active');
        var currPage = $(this).attr('rel');
        var startItem = currPage * rowsShown;
        var endItem = startItem + rowsShown;
        $('#hall tbody tr').css('opacity', '0.0').hide().slice(startItem, endItem).
        css('display', 'table-row').animate({
            opacity: 1
        }, 300);
    });
});