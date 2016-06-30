if(localStorage.getItem("smpchtnightmode")==1)
{
    document.getElementById("mystyle").href="css/loginNightly.css";
}else{
    document.getElementById("mystyle").href="css/loginDay.css";
}