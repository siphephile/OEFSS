  document.documentElement.classList.toggle(getCookie("mode"));
  document.getElementById("contact-filter").style.display = getCookie("shide"); 
  document.getElementById("tyu").style.display = getCookie("shide"); 
  document.getElementById("lvbtn").style.display = getCookie("shide"); 
  document.getElementById("gvbtn").style.display = getCookie("shide"); 
  document.getElementById("acbtn").style.display = getCookie("shide"); 

 // Creating a cookie after the document is ready
 var test = isActive(getCookie("pool"));
 var test2 = getCookie("pool")
 document.getElementById(test2).className = test; 

function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i <ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}
function checkCookie(cname) {
  let username = getCookie(cname);
  if (username != "") {
   return null;
  } else {
    
     return true;
  }
}

function isActive(mystring){

  var myStatus = "";  

  if (mystring==getCookie("pool")) {
    myStatus = "sidebar-list-item active";
    } else {
    myStatus = "sidebar-list-item ";
    } 

    return myStatus;
}


      // Get the modal
  var modal = document.getElementById("adobe-dc-view");
  var btn = document.getElementById("view-pdf-btn");
  var span = document.getElementsByClassName("close")[0];

  modal.style.display = "none";
  btn.onclick = function() {
    modal.style.display = "block";
    previewFile();
  }

  span.onclick = function() {
    modal.style.display = "none";
  }

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }

  document.querySelector(".jsFilter").addEventListener("click", function () {
  document.querySelector(".filter-menu").classList.toggle("active");
});

document.querySelector(".grid").addEventListener("click", function () {
  document.querySelector(".list").classList.remove("active");
  document.querySelector(".grid").classList.add("active");
  document.querySelector(".products-area-wrapper").classList.add("gridView");
  document.querySelector(".products-area-wrapper").classList.remove("tableView");
});

document.querySelector(".list").addEventListener("click", function () {
  document.querySelector(".list").classList.add("active");
  document.querySelector(".grid").classList.remove("active");
  document.querySelector(".products-area-wrapper").classList.remove("gridView");
  document.querySelector(".products-area-wrapper").classList.add("tableView");
});

var modeSwitch = document.querySelector('.mode-switch');
modeSwitch.addEventListener('click', function () {                      
  document.documentElement.classList.toggle('light');
 modeSwitch.classList.toggle(modeActive());
});

function modeActive(){

  
  if (getCookie("mode")=="light") {
    myMood = "inactive";
    setCookie("mode", 'dark', 365);
    } else {
    myMood = "active";
    setCookie("mode", 'light', 365);
    } 
    return myMood;
}


  $(document).ready(function(){
$('#action_menu_btn').click(function(){
  $('.action_menu').toggle();
});
  });