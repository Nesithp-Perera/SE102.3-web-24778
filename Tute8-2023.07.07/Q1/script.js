function redirect(){
    if(confirm("Do you want to go to Google")==true){
        window.location.href = "https://www.google.com";
    }else{
        window.alert("You dicided to stay");
    }
}