function format(input, format, sep) {
    var output = "";
    var idx = 0;
    for (var i = 0; i < format.length && idx < input.length; i++) {
        output += input.substr(idx, format[i]);
        if (idx + format[i] < input.length) output += sep;
        idx += format[i];
    }

    output += input.substr(idx);

    return output;
}

$('.creditCardText').keyup(function() {
    var foo = $(this).val().replace(/-/g, ""); // remove hyphens
    // You may want to remove all non-digits here
    // var foo = $(this).val().replace(/\D/g, "");

    if (foo.length > 0) {
        foo = format(foo, [3, 2, 4, 3, 3], "-");
    }


    $(this).val(foo);
});