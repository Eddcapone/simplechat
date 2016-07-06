//Funktion für das div-Element, das als Button benutzt wird und Autoscroll umschaltet.
$(document).ready
(
    function()
    {
        $("div.smpchtautoscroll").on 
        ( 
          "click", 
          function()
          {
            if(localStorage.getItem("smpchtautoscroll")==1)
            { 
              localStorage.setItem("smpchtautoscroll", "0");
            }else{ 
              localStorage.setItem("smpchtautoscroll", "1"); 
            } 
          } 
        ); 
    }
);
