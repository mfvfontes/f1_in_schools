
$(document).ready(function() {

    function search() {
        $.ajax({
            type: "GET",
            url: "../../javascript/search/users.php",
            data: 'search=' + $('#search_input').val(),
            success: function(msg) {
                $('#tableBody').html(msg);
            },
            error: function() {
                alert($('#search_input').val());
                $('#tableBody').html('<tr><td>Error</td></tr>')
            }
        });
    }

    $('#search_input').keyup(search);
    search();

}); //Document Ready