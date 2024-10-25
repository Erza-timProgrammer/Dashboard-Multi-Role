var selector = $("#dosen_input");

var im = new Inputmask("DOS999999");
im.mask(selector);

$("#dosen_input").autocomplete({
    source: function (request, response) {
        $.ajax({
            url: "/search",
            dataType: "json",
            data: {
                term: request.term,
            },
            success: function (data) {
                var results = data.map(function (item) {
                    return {
                        label: item.kode_dosen + " - " + item.name,
                        value: item.kode_dosen,
                    };
                });
                response(results);
            },
        });
    },
    minLength: 2,
});
