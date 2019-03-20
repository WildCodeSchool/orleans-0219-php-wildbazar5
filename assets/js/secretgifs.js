var code = '.68.84.67';
var entered = '';
var clearCombo;

$(document).ready(function() {
    $("#secretgift").hide();
});
//keypress won't register up arrow

$('body').keydown(function (e) {
    clearTimeout(clearCombo);
    entered += '.' + e.which;
    console.log(entered);
    clearCombo = setTimeout(function () {
        entered = '';
    }, 1000);
    if (entered === code) {
        //$("#coucou").delay(200).show();

        $('#secretgift').fadeIn(3000);
        $('#secretgift').fadeOut(3000);
    }
});
