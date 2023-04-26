$(document).ready(function () {
    var now = new Date();
    $('#fecha').val(return_string_date(now)); 
   
});

function return_string_date(date){
    var day = ("0" + date.getDate()).slice(-2);
    var month = ("0" + (date.getMonth() + 1)).slice(-2);
    var today = date.getFullYear()+"-"+(month)+"-"+(day) ;
    return today;
}