window.onload = (function(document){
    var icon = document.getElementById("settings-button");
    var open = false;
    console.log(icon);  


    icon.addEventListener('click', function(){
      if(open){
        icon.className = 'topRightWithOffset settings-normal';  
      } else{
        icon.className = 'topRightWithOffset settings-rotated';
      }
      
      open = !open;
    });
  })(document);