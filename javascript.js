$( function() {
    from = $( "#date" )
    .datepicker({
        dateFormat: 'dd/mm/y',
        numberOfMonths: 1,
        showOtherMonths: true,
        selectOtherMonths: true,
        showAnim: "blind",
        changeMonth: true,
        changeYear: true, 
        showButtonPanel: true,
    })    
    $("#button").button();
    $(".form").validate({
        submitHandler: function(){
            sendAjaxForm();
            return false; 
       }
    });
    function sendAjaxForm(){
        $.ajax({
            url: 'calc.php',
            method: 'POST',
            data: $(".form").serialize(),
            success: function(data){
                var res = $(".form__result");
                var text = 'Результат: ' + data;
                res.text(text);
            }
        });
    };
});

function rangeSum() {
    var rng=document.getElementById('sum-range');
    var input=document.getElementById('sum');
    input.value=rng.value;
}
function rangeReplSum() {
    var rng=document.getElementById('sum_replenishment-range');
    var input=document.getElementById('sum_replenishment');
    input.value=rng.value;
}