 var myMood = "dark";  
  let thepage = "here.php";
  let pagename = "Deshboard";

  
  function setCookie(cname, cvalue, exdays) {
  const d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  let expires = "expires="+ d.toUTCString();
  if (!checkCookie(cname)) {
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  }}

   function changemypage(value){

    setCookie("shide", "block", 365); 
    if (value=="hp1") {
      thepage = "here.php";
      pagename = "Deshboard";
    } else if(value=="hp2") {
      thepage = "exam.php";
      pagename = "Exam Papers";
    }  else if(value=="hp3") {
      thepage = "grades.php";
      pagename = "Grades";
    } else if(value=="hp4") {
      thepage = "chat.php";
      pagename = "Inbox";
    }else{
      thepage = "test.php";
      pagename = "Notificaions";
    }

    setCookie("thepage", thepage, 365);    
    setCookie("pagename", pagename, 365);  
    setCookie("pool", value, 365); 
    location.reload();
 }
 
  if (!checkCookie("shide")) {
    setCookie("shide", "block", 365); 
  }

  function viewmypage(value,nposts=""){

      if (value==0) {
        value = 1;
        document.getElementById("fabd").style.display = "none"; 
      }else if(value==nposts){
        value = nposts;
        document.getElementById("fabc").style.display = "none"; 
      }else{

      setCookie("viewpage", value, 365);  
      setCookie("thepage", "viewpage.php", 365); 
      setCookie("shide", "none", 365); 
      setCookie("pagename", ".", 365); 
      location.reload();
    }
   } 