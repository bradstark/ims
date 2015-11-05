var flag=true;
       document.getElementById("bt4").addEventListener("click", function onClick() {
    this.removeEventListener("click", onClick);
if(flag===true){
    this.style.backgroundColor = "#00FF00"; 
flag=false;
       }
       else{
            this.style.backgroundColor = "#ffff00";
 flag=true;
       }
}, true);
   
