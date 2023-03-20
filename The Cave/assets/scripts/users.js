const searchBar = document.querySelector(" .search input"),
searchBtn = document.querySelector(".search button"),
usersList= document.querySelector(".users-list");

searchBtn.onclick = () => {
    searchBar.classList.toggle("active");
     searchBar.focus();
    searchBtn.classList.toggle("active");
   
    if (searchBar.classList.contains("active")) {
        searchBar.value = "";
        searchBar.classList.remove("active");
    }  
}


searchBar.onkeyup = () => {
    let searchTerm = searchBar.value;
    if (searchTerm != "") {
        searchBar.classList.add("active");
    } else {
        searchBar.classList.remove("active");
    }
     let xhr = new XMLHttpRequest();
    xhr.open("POST", "assets/php/search.php", true);
    xhr.onload = () => {
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              let data = xhr.response;
              usersList.innerHTML = data;
          }
      }
    }
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send("searchTerm=" + searchTerm);
}
    
setInterval(() => {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "assets/php/users.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              let data = xhr.response;
              if (!searchBar.classList.contains("active")) {
                  usersList.innerHTML = data;
              }
          }
      }
    }
    xhr.send();
}, 500); //this fuction will run frequqntly after 500ms