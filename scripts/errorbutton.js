//Funktion für das div-Element, das als Button benutzt wird und die "Leere Nachricht!" Fehlermeldung schließt.
$(document).ready
(
    function()
    {
        $("div.smpchterrorbutton").on 
        ( 
          "click", 
          function()
          {
            document.getElementById("login_error").style.display = "none";
          } 
        ); 
    }
);
