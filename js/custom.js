$(document).ready(function () {
$('.checking_email').keyup(function (e){
var email = $('.checking_email').val();
// alert(email);
$.ajax({
    type: "POST",
    url: "actions/user-register-test.php",
    data:{
        "check_submit_btn": 1,
        "email_id": email,
    },
success: function(response){
    // alert(response);
    $('.error_email').text(response);
}
});
});
$(document).ready(function() {
    $('#cpwd').keyup(function() {
        var pwd = $('#pwd').val();
        var cpwd = $('#cpwd').val();

        if (cpwd != pwd) {
            $('#showErrorcPwd').html('Passwords do not match');
            $('#showErrorcPwd').css('color', 'red');
            return false;
        }
        // else {
        //     $('#showErrorcPwd').html('');
        //     return true;
        // }
    });
});
});

/* <script type="text/javascript">
$(document).ready(function () {
$('#cpwd').keyup(function (){
var pwd = $('#pwd').val();
var cpwd = $('#cpwd').val();
if(cpwd!=pwd){
$('#showErrorcPwd').html('Passwords don not match');
$('#showErrorcPwd').css('color','red');
return false;
 }else{
     $('#showErrorcPwd').html('');
     return true;
 }
 });
</script> */