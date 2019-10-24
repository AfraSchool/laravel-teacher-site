$("#progress").hide();
$("#dAlert").hide();

function onType(v) {
    let value = $('#' + v).val();
    if (value.length <= 3) {
        showMessage('#f44336', 'حداقل 3 کاراکتر وارد نمایید');
        $('#' + v).css("border-bottom", "solid 3px #ff0000")
    } else {
        $('#' + v).css("border-bottom", "solid 3px #b8b8b8")
    }
}

$("#login").click(function () {
    $("#progress").show(500);
    showMessage('#008CBA', "چند لحظه صبر کنید");
    let loginData = {
        apiKey: "base64:ITepOnkQBSl3/wdHN9J7paJVxnxJR1wziIGs1uImuqQ=",
        userName: $('#userName').val(),
        password: $('#password').val()
    };
    let teacherLogin = $.ajax({
        type: 'GET',
        url: "http://localhost/AfraApi/admin/login",
        data: loginData,
        success: function (data) {
            $("#progress").hide();
            let obj = jQuery.parseJSON(data);
            let error = obj.error;
            let message = obj.message;
            if (error == true) {
                $("#dAlert").show();
                $("#alertMsg").html(message);
            }
            if (error == false) {
                Cookies.set('type', btoa(data.teacher.type), { expires: 7 });
                Cookies.set('userName', btoa(data.teacher.userName), { expires: 7 });
                Cookies.set('fullName', btoa(data.teacher.fullName), { expires: 7 });
                $(location).attr('href', 'http://localhost/AfraAdmin/dashboard');
            }
        }
    });

});
