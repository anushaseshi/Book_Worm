function validateField(fieldElem, infoMessage, validateFn) {
    // TODO: Implement validateField.
    fieldElem.parent().append("<span></span>");
    fieldElem.parent().find("span").hide();
    
    //Edited
    //Info
    fieldElem.focus(function(){
        fieldElem.parent().find("span").show();
        fieldElem.parent().find("span").removeClass("error ok").addClass("info");
        fieldElem.parent().find("span").text(infoMessage);
    });

    //Not Edited
    //Empty
    fieldElem.blur(function(){
        if(fieldElem.val().length == 0){
            fieldElem.parent().find("span").removeClass("error info ok");
            fieldElem.parent().find("span").empty();
            fieldElem.parent().find("span").hide();
        }
        else{
            //Not Empty
            //Ok
            if(validateFn()){
                fieldElem.parent().find("span").show();
                fieldElem.parent().find("span").removeClass("error info").addClass("ok");
                fieldElem.parent().find("span").text("OK");
            }
            else{
                //Error
                fieldElem.parent().find("span").show();
                fieldElem.parent().find("span").removeClass("ok info").addClass("mismatch");
                fieldElem.parent().find("span").text("invalid Email");
            }
        }
    });
    
};

function reCheckPwd(repeat_password){
    if(repeat_password.match($("#password").val())){
        $('#repeat_password_msg').removeClass()
        $('#repeat_password_msg').addClass('ok')
        return "OK!";
    }
    else{
        $('#repeat_password_msg').removeClass()
        $('#repeat_password_msg').addClass('mismatch')
        return "Password Mismatch";
    }
}

function checkStrength(password) {
    var strength = 0
    if (password.length < 6) {
        $('#password_msg').removeClass();
        $('#password_msg').addClass('short');
        return 'Too short';
    }
    if (password.length > 7) strength += 1;
    // If password contains both lower and uppercase characters, increase strength value.
    if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) strength += 1;
    // If it has numbers and characters, increase strength value.
    if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/)) strength += 1;
    // If it has one special character, increase strength value.
    if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1;
    // If it has two special characters, increase strength value.
    if (password.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1;
    // Calculated strength value, we can return messages
    // If value is less than 2
    if (strength < 2) {
        $('#password_msg').removeClass()
        $('#password_msg').addClass('weak')
        return 'Weak'
    } 
    else if (strength == 2) {
        $('#password_msg').removeClass()
        $('#password_msg').addClass('good')
        return 'Good'
    } 
    else {
        $('#password_msg').removeClass()
        $('#password_msg').addClass('strong')
        return 'Strong'
    }
}

$(document).ready(function() {
    // TODO: Use validateField to validate form fields on the page. 
    //VALIDATING USERNAME
    validateField(
        $("#username"),
        "username should contain only alphanumeric characters.",
        function(){
            return /^[0-9A-Za-z]+$/.test($("#username").val());
        });
    //VALIDATING PASSWORD
    $('#password').keyup(function() {
        $('#password_msg').html(checkStrength($('#password').val()))
    });

    
    //VALIDATING REPEAT_PASSWORD
    $('#repeat_password').blur(function() {
        $('#repeat_password_msg').html(reCheckPwd($('#repeat_password').val()))
    });

    //VALIDATING EMAIL
    validateField(
        $("#email"),
        "Enter a valid email address",
        function(){
            var atpos = $("#email").val().indexOf("@");
            //var dotpos = $("#email").val().lastIndexOf(".");
            if (atpos< 1) {
                return false;
            }
            else{
                return true;
            }
        });

});