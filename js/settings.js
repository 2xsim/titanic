function showPreview_pp(event){
    if(event.target.files.length = 1){
      var src = URL.createObjectURL(event.target.files[0]);
      var preview = document.getElementById("photo_profil");
      preview.src = src;

    }else if(event.target.files.length > 1){
        var src = URL.createObjectURL(event.target.files[0]);
        var preview = document.getElementById("photo_profil");
        preview.src = src;

        var src = URL.createObjectURL(event.target.files[1]);
        var preview = document.getElementById("photo_de_couverture");
        preview.src = src;
    }
}

function showPreview_pc(event){
    if(event.target.files.length = 1){
      var src = URL.createObjectURL(event.target.files[0]);
      var preview = document.getElementById("photo_de_couverture");
      preview.src = src;

    }else if(event.target.files.length > 1){
        var src = URL.createObjectURL(event.target.files[0]);
        var preview = document.getElementById("photo_profil");
        preview.src = src;

        var src = URL.createObjectURL(event.target.files[1]);
        var preview = document.getElementById("photo_de_couverture");
        preview.src = src;
    }
}