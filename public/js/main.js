$(document).on('click', 'a', function (event) {
    event.preventDefault();
    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 500);
});
$('code').each(function () {
    var text = $(this).html().replace(/</g, '&lt;');
    var text = text.replace(/>/g, '&gt;');
    $(this).html(text);
});