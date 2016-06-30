var main = function()
{
    $("button[name=login]").click
    (
        function()
        {
            console.log("ISODFPJSID");
            var name       = $("input[name=username]").val();
            var passwort   = $("input[name=password]").val();

            console.log("NAME = ", name);
            console.log("PW = ", passwort);

            if (name != "" && passwort != "")
            {
                $.ajax
                (
                    {
                        url:    "ajax.php",
                        type:   "POST",
                        data:
                        {
                            cmd:        "check_login",
                            passwort:   passwort,
                            name:       name
                        },
                        success: function (response)
                        {
                            if (response === "Anmeldung erfolgreich!")
                            {
                                console.log("Anmeldung erfolgreich");
                                $("div#login_error").css("display","none");
                                window.location.replace("chat.php");
                            }
                            else
                            {
                                console.log("Anmeldung fehlgeschlagen");
                                $("div#login_error").css("display","block");
                            }
                        }
                    }
                );
            }
            else
            {
                $("div#login_error").css("display","block");
            }
        }
    );

    $('.close').click
    (
        function()
        {
            $('#login_error').css('display', 'none');
        }
    );
};

$(document).ready(main);