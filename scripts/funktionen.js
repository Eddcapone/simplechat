$(document).ready(main);

function main()
{
    $("div.logout").on
    (
        "click",
        function()
        {
            location.replace("logout.php");
        }
    );
        
    $("input[name=send]").on
    (
        "click",
        function()
        {
            send_message();
        }
    );
        
    $("input[name=nachricht]").keydown
    (
        function(event)
        {
//            console.log("eventKeycode = ", event.keyCode);
            if (event.keyCode == 13)    //Wenn der Enter Button gedrückt wurde und das Feld den Fokus hat
            {
                send_message();
            }
        }
    );
}

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


//    console.log("input gedrückt");

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