
document.querySelector("#files").addEventListener("change", (e) =>{
  if(window.File && window.FileReader && window.FileList && window.Blob) {
    const files = e.target.files;
    const output = document.querySelector(".carousel-inner");

    for(let i=0; i<files.length; i++) {
      if(!files[i].type.match("image")) continue;
      const picReader = new FileReader();
      picReader.addEventListener("load", function(event){
        const picFile = event.target;
        const div = document.createElement("div");
        div.classList.add("carousel-item")
        div.innerHTML = `<img class="d-block w-100" src="${picFile.result}" alt="Third slide">`;
          output.appendChild(div);
      })
      picReader.readAsDataURL(files[i]);
    }
  } else {
    alert("Your browser does not support the fiel API")
  }
})
