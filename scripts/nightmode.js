//Funktion für das div-Element, das als Button benutzt wird und den Nightmode umschaltet und enscheidet, welcher Stil gerade aktiv ist auf den Seiten.
if(localStorage.getItem("smpchtnightmode")==1)
{
    document.getElementById("mystyle").href="css/nightStyle.css";
}else{
    document.getElementById("mystyle").href="css/dayStyle.css";
}

$(document).ready
(
    function()
    {
        $("div.smpchtnightmode").on 
        ( 
          "click", 
          function()
          {
            if(localStorage.getItem("smpchtnightmode")==1)
            { 
              localStorage.setItem("smpchtnightmode", "0");                     //Der aktuelle Stil wird in localStorage gespeichert und Seitenübergreifend genutzt.
              document.getElementById("mystyle").href="css/dayStyle.css";
            }else{ 
              localStorage.setItem("smpchtnightmode", "1"); 
              document.getElementById("mystyle").href="css/nightStyle.css"; 
            } 
          } 
        ); 
    }
);
