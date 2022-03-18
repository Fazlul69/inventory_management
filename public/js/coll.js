function openNav() {
    if("(max-width: 320px)"){
      document.getElementById("mySidepanel").style.width = "55%";
    }else{
      document.getElementById("mySidepanel").style.width = "40%";
    }
  }
  
  function closeNav() {
    document.getElementById("mySidepanel").style.width = "0";
  }