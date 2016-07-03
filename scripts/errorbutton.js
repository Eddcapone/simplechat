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
