/**
 * Created by João on 25/04/2015.
 */

$("form").on('keydown','input',function(e) {
    var keyCode = e.keyCode || e.which;
    if (keyCode == 9)
    {
        if ($("form").lastChild.getElementByID("email").value == "")
        {
            alert("Empty");
            return;
        }
        e.preventDefault();
        var newRow = $("#zero").clone();
        newRow.attr("id","");
        newRow.show();

        $("#reg_form").append(newRow);
    }
});