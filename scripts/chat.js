var main = function()
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

$(document).ready(main);