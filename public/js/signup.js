function signup(event) {
    event.preventDefault();

    let form = $('form');
    let data = form.serialize();
    let url = form.attr('action');
    let type = form.attr('method');

    $.ajax({
        type,
        url,
        data,
        success: function(data) {
            console.log(data);
        },
        error: function(error) {
            console.log(error);
        }
    });
}
