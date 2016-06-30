if(localStorage.getItem("smpchtnightmode")==1)
{
    document.getElementById("mystyle").href="css/loginNightly.css";
}else{
    document.getElementById("mystyle").href="css/loginDay.css";
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
              document.getElementById("mystyle").href="css/loginDay.css"; 
            }else{ 
              localStorage.setItem("smpchtnightmode", "1"); 
              document.getElementById("mystyle").href="css/loginNightly.css"; 
            } 
          } 
        ); 
    }
);
