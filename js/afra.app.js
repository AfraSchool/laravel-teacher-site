$( document ).ready(function() {
    let mainUrl = 'http://localhost/AfraPortal';
    let apiUrl = 'http://localhost/AfraPortal/api/v1';


    if (window.location.href === mainUrl+'/login') {
        $('#loginSuccess').hide();
        $('#loginError').hide();
        $('#loading').hide();
    }
    $('#loginButton').on('click', function () {
        $('#loginSuccess').hide();
        $('#loginError').hide();
        $('#loading').hide();
        $('#loading').show();
        let username = $('#userName').val();
        let userPassword = $('#password').val();
        let params = {
            type: 'dGVhY2hlcg==',
            userName: '' + username,
            password: '' + userPassword
        };
        $.ajax({
            type: 'POST',
            url: apiUrl + "/userLogin",
            data: params,
            success: function (data) {
                console.log(data);
                $('#loading').hide();
                showMessage('لطفا شکیبا باشید...', '#2196F3');
                let error = data.error;
                let message = data.message;
                if (error === true) {
                    showMessage('' + message, '#f44336');
                    $('#loading').hide();
                    $('#loginDiv1').hide();
                    $('#loginError').show();
                    $('#errorText').text('' + message);
                } else {
                    $('#loading').hide();
                    $('#loginDiv1').hide();
                    showMessage('موفقیت آمیز!', '#2cac0a');
                    $('#loginSuccess').show();
                    $(location).attr('href', mainUrl + '/dashboard');
                }
            }
        });
    });

    function showMessage(text, color) {
        $("#snackbar").addClass('show');
        $("#snackbar").text(text);
        $("#snackbar").css('background', color);
        let x = document.getElementById("snackbar");
        setTimeout(function () {
            x.className = x.className.replace("show", "");
        }, 2000);
    }
});