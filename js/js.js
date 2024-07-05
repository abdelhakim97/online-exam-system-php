var keyup_email = "";

function keyup_login_mot_pass() {
    var vlaue_email = document.getElementById('pass_wor').value;

    if (vlaue_email != "" || vlaue_email != null || vlaue_email != " ") {
        document.getElementById('Placeholder_ins').style.display = "none";

    }

    if (vlaue_email == " " || vlaue_email == "" || vlaue_email.length === 0 || vlaue_email == null) {

        document.getElementById('Placeholder_ins').style.display = "block";

    }
}


function keyup_login_Eamil() {

    var vlaue_email_login = document.getElementById('inp_email').value;

    if (vlaue_email_login != "" || vlaue_email_login != null || vlaue_email_login != " ") {
        document.getElementById('Placeholder_Email').style.display = "none";

    }
    if (vlaue_email_login == " " || vlaue_email_login == "" || vlaue_email_login === 0 || vlaue_email_login == null) {

        document.getElementById('Placeholder_Email').style.display = "block";

    }
}


//                                //      //      sing up 


function keyup_login_name() {

    var vlaue_email_login = document.getElementById('name').value;

    if (vlaue_email_login != "" || vlaue_email_login != null || vlaue_email_login != " ") {
        document.getElementById('Placeholder_name').style.display = "none";

    }
    if (vlaue_email_login == " " || vlaue_email_login == "" || vlaue_email_login === 0 || vlaue_email_login == null) {

        document.getElementById('Placeholder_name').style.display = "block";

    }
}



function keyup_login_collge_name() {

    var vlaue_email_login = document.getElementById('inp_collge').value;

    if (vlaue_email_login != "" || vlaue_email_login != null || vlaue_email_login != " ") {
        document.getElementById('Placeholder_collge').style.display = "none";

    }
    if (vlaue_email_login == " " || vlaue_email_login == "" || vlaue_email_login === 0 || vlaue_email_login == null) {

        document.getElementById('Placeholder_collge').style.display = "block";

    }
}



function keyup_login_tel() {

    var vlaue_email_login = document.getElementById('inp_tel').value;

    if (vlaue_email_login != "" || vlaue_email_login != null || vlaue_email_login != " ") {
        document.getElementById('Placeholder_Number').style.display = "none";

    }
    if (vlaue_email_login == " " || vlaue_email_login == "" || vlaue_email_login === 0 || vlaue_email_login == null) {

        document.getElementById('Placeholder_Number').style.display = "block";

    }
}



function keyup_login_Email() {

    var vlaue_email_login = document.getElementById('inp_sig_Email').value;

    if (vlaue_email_login != "" || vlaue_email_login != null || vlaue_email_login != " ") {
        document.getElementById('Placeholder_sig_Email').style.display = "none";

    }
    if (vlaue_email_login == " " || vlaue_email_login == "" || vlaue_email_login === 0 || vlaue_email_login == null) {

        document.getElementById('Placeholder_sig_Email').style.display = "block";

    }
}






function keyup_login_password() {

    var vlaue_email_login = document.getElementById('inp_sig_password').value;

    if (vlaue_email_login != "" || vlaue_email_login != null || vlaue_email_login != " ") {
        document.getElementById('Placeholder_sig_password').style.display = "none";

    }
    if (vlaue_email_login == " " || vlaue_email_login == "" || vlaue_email_login === 0 || vlaue_email_login == null) {

        document.getElementById('Placeholder_sig_password').style.display = "block";

    }
}





function keyup_login_con_password() {

    var vlaue_email_login = document.getElementById('inp_inp_sig_con_password').value;

    if (vlaue_email_login != "" || vlaue_email_login != null || vlaue_email_login != " ") {
        document.getElementById('Placeholder_sig_con_password').style.display = "none";

    }
    if (vlaue_email_login == " " || vlaue_email_login == "" || vlaue_email_login === 0 || vlaue_email_login == null) {

        document.getElementById('Placeholder_sig_con_password').style.display = "block";

    }
}
