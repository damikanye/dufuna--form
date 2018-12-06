let hideBtn = $("#hideBtn");
let showBtn = $("#showBtn");

hideBtn.click(function(){
    $("form").hide();
});

showBtn.click(function(){
    $("form").show();
});

$(function)() {
    $("#exampleInputFullName").hide();
    $("#examppleInputEmail").hide();
    
    var error_fullName = false;
    var error_email = false;
    
}