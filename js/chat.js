usersList = document.querySelector(".list-group");

setInterval(() =>{
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "traitements/traitement_select_discussions.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
            let data = xhr.response;
              usersList.innerHTML = data;
          }
      }
    }
    xhr.send();
  }, 500);