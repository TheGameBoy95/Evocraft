/* Listenner and Transparency Applicator */
$(window).scroll(function () {
if ($(window).scrollTop() >= 50) {
$('nav').css('background','#ec4e20');
} else {
$('nav').css('background','transparent');
}
});
