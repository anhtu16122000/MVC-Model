
$('#name').keyup(function () { 
   var val_cur =  $("#name").val();
   $.post("./Ajax/checkUser",{ten:val_cur},
    function (res) {
        $("#isDuplicate").html(res);
    },
);
   
});

