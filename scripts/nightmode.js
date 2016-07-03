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
              localStorage.setItem("smpchtnightmode", "0");         
              document.getElementById("mystyle").href="css/dayStyle.css"; 
            }else{ 
              localStorage.setItem("smpchtnightmode", "1"); 
              document.getElementById("mystyle").href="css/nightStyle.css"; 
            } 
          } 
        ); 
    }
);
