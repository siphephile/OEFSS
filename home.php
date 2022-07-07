<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 <?php
 
// Username is root
$stuNoSelect = htmlspecialchars($_SESSION["id"]);
$mysqli = new mysqli("localhost", "root",
                "", "UNISYS");
 
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}
 
// SQL query to select data from database
$sql = "SELECT *\n"

    . "FROM (((((studentinfo\n"

    . "INNER JOIN examoutput ON studentinfo.StudentNumber = examoutput.StudentNumber)\n"

    . "INNER JOIN moduleinfo ON examoutput.ModuleCode = moduleinfo.ModuleCode)\n"

    . "INNER JOIN moduleleader ON moduleinfo.ModuleCode = moduleleader.ModuleCode)\n"

    . "INNER JOIN staffinfo ON moduleleader.StaffNumber = staffinfo.StaffNumber)\n"

    . "INNER JOIN examsetup ON examoutput.ModuleCode = examsetup.ModuleCode)\n"

    . "WHERE studentinfo.StudentNumber = $stuNoSelect LIMIT 20, 60;";

$result = $mysqli->query($sql);

$sql2 = "SELECT * FROM newsblog WHERE 1;";
$result2 = $mysqli->query($sql2);

$sql4 = "SELECT *, COUNT(nid) AS nposts FROM newsblog WHERE 1;";
$result4 = $mysqli->query($sql4);

if (!isset($_COOKIE['viewpage'])) {
  
}else{
  $yuu = $_COOKIE['viewpage'];
  $sql3 = "SELECT * \n"

    . "FROM newsblog\n"

    . "INNER JOIN staffinfo ON newsblog.StaffNumber = staffinfo.StaffNumber\n"

    . "WHERE nid = $yuu;";
$result3 = $mysqli->query($sql3);
}

$mysqli->close();

?>
<!DOCTYPE html>
<head>
  <link rel="stylesheet" href="style/style2.css">
  <link rel="stylesheet" href="style/dashcss.css">
  <link rel="stylesheet" href="style/cards.css">
  <link rel="stylesheet" href="style/chat.css">
  <link rel="stylesheet" href="style/cont.css">
  <link rel="stylesheet" href="style/footer.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js"></script>
  <script src="scripts/otherscript.js"></script>
  <script src="scripts/index.js"></script>
</head>
<body>
<div class="app-container">
  <div class="sidebar">
    <div class="sidebar-header">
      <div class="app-icon">
        
        <h3><img src="images/paper.png" alt="paper" width="20px">UNISYS</h3>
      </div>
    </div>
    <ul class="sidebar-list">
      <li class="sidebar-list-item" id="hp1">
        <a href="javascript:changemypage('hp1')">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
          <span>Home</span>
        </a>
      </li>
      <li class="sidebar-list-item" id="hp2">
        <a href="javascript:changemypage('hp2')">

          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><path d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48"></path></svg>

          <span>Exam Papers</span>
        </a>
      </li>
      <li class="sidebar-list-item" id="hp3">
        <a href="javascript:changemypage('hp3')">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"/><path d="M22 12A10 10 0 0 0 12 2v10z"/></svg>
          <span>Grades</span>
        </a>
      </li>
      <li class="sidebar-list-item" id="hp4">
        <a href="javascript:changemypage('hp4')">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"/><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"/></svg>
          <span>Inbox</span>
        </a>
      </li>
      <li class="sidebar-list-item" id="hp5">
        <a href="javascript:changemypage('hp5')">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
          <span>Notifications</span>
        </a>
      </li>
    </ul>
    <div class="account-info">
      <div class="account-info-picture">
        <img src="https://images.unsplash.com/photo-1527736947477-2790e28f3443?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTE2fHx3b21hbnxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60" alt="Account">
      </div>
      <div class="account-info-name"><?php echo htmlspecialchars($_SESSION["username"]); ?></div>
      <button class="account-info-more">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"/><circle cx="19" cy="12" r="1"/><circle cx="5" cy="12" r="1"/></svg>
      </button>
    </div>
  </div>

  <div id="adobe-dc-view" class="white_content">
      <div class="modal-content">
      <span class="close">&times;</span>
      </div>    
  </div>

<div class="app-content">
  <div id="adobe-dc-view"></div>
    <div class="app-content-header">
      <h1 class="app-content-headerText" id="tyu"><?php echo $_COOKIE['pagename']; ?></h1>

      <button class="mode-switch" title="Switch Theme">

        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="moon feather-activity"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>

        <svg class="moon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" width="24" height="24" viewBox="0 0 24 24">
          <defs></defs>
          <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
        </svg>
      </button><a href="logout.php" class="btn btn-danger ml-3">Sign Out</a>
    </div>
    <div class="app-content-actions">
      <input class="search-bar" placeholder="Search..." type="text" id="contact-filter">
      <div class="app-content-actions-wrapper">
        <div class="filter-button-wrapper">
          <button class="action-button filter jsFilter" id="acbtn"><span>Filter</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-filter"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"/></svg>
          </button>
          <div class="filter-menu">
            <label>Category</label>
            <select>
              <option>All Categories</option>
              <option>Lacture</option>                     <option>Date</option>
              <option>Course</option>
              <option>Module</option>
            </select>
            <label>Status</label>
            <select>
              <option>All Status</option>
              <option>Open</option>
              <option>Closed</option>
            </select>
            <div class="filter-menu-buttons">
              <button class="filter-button reset">
                Reset
              </button>
              <button class="filter-button apply">
                Apply
              </button>
            </div>
          </div>
        </div>
        <button class="action-button list active" title="List View" id="lvbtn">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"/><line x1="8" y1="12" x2="21" y2="12"/><line x1="8" y1="18" x2="21" y2="18"/><line x1="3" y1="6" x2="3.01" y2="6"/><line x1="3" y1="12" x2="3.01" y2="12"/><line x1="3" y1="18" x2="3.01" y2="18"/></svg>
        </button>
        <button class="action-button grid" title="Grid View" id="gvbtn">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
        </button>
      </div>
    </div>

  <?php $test = $_COOKIE['thepage']; ?>
  <?php include $test; ?>





<div class="app-content-footer">

 <footer class="site-footer">
      
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; <?php echo date("Y");?>
         <a href="#">UNISYS</a>.
            </p>
          </div>
        </div>
      </div>
</footer>
</div> 

</div>


</div>
<script src="scripts/bottom.js"></script>
<script src="https://documentcloud.adobe.com/view-sdk/main.js"></script>
<script src="scripts/script.js"></script>
</body>
</html>