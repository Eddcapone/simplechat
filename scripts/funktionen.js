function send_message()
{
    $nachricht = $("input[name=nachricht]").val();

    if ($nachricht != "")       //Nachrichten nur abschicken wenn diese nicht leer sind.
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
    else
    {
        $("div#login_error").css("display","block");
    }

    $("input[name=nachricht]").val("");
    $("input[name=nachricht]").focus();
}

