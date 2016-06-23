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
            send_message()
        }
    );
        
    $("input[name=nachricht]").keydown
    (
        function(event)
        {
            console.log("eventKeycode = ", event.keyCode);
            if (event.keyCode == 13)
            {
                send_message()
            }
        }
    );
        

}

function send_message()
{
    $nachricht = $("input[name=nachricht]").val();

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

    console.log("input gedrückt");

    $("input[name=nachricht]").val("");
    $("input[name=nachricht]").focus();
}