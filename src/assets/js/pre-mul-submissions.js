var pms_submited = 0;
$("form").on("beforeSubmit", function (event, messages) {
    if(pms_submited == 1){
        return false;
    }else{
        pms_submited = 1;
    }
    $(":submit").attr("disabled",true);
});
