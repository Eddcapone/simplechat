//Funktion für das Senden einer Nachricht.
function send_message()
{
    $nachricht = $("input[name=nachricht]").val();

    if ($nachricht != "")                                                       //Nachrichten nur abschicken wenn diese nicht leer sind.
    {
        $("div#login_error").css("display","none");

        $.ajax
        (
            {
                url: "ajax.php",
                type: "POST",
                data: 
                {
                    cmd: "create_entry",
                    message: $nachricht
                }
            }
        );
    }
    else                                                                        //Auslöser für die "Leere Nachricht!" Fehlermeldung.
    {
        $("div#login_error").css("display","block");
    }

    $("input[name=nachricht]").val("");
    $("input[name=nachricht]").focus();
}

