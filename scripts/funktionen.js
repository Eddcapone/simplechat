function send_message()
{
    $nachricht = $("input[name=nachricht]").val();

    if ($nachricht != "")       //Nachrichten nur abschicken wenn diese nicht leer sind.
    {
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
        //Wenn die Nachricht leer ist, sollte jetzt eine Messagebox angezeigt werden.
    }

    $("input[name=nachricht]").val("");
    $("input[name=nachricht]").focus();
}

function neuerstyle()
{
    if(localStorage.getItem("smpchtnightmode")==1)
    {
        localStorage.setItem("smpchtnightmode", "0");				
        document.getElementById("mystyle").href="css/loginDay.css";
    }else{
        localStorage.setItem("smpchtnightmode", "1");
        document.getElementById("mystyle").href="css/loginNightly.css";
    }
}