
<div class="products-area-wrapper tableView">
<div class="app-content">
    <div class="app-content-header">
      <h1 class="app-content-headerText">Grades</h1>
      <button class="mode-switch" title="Switch Theme">
        <svg class="moon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" width="24" height="24" viewBox="0 0 24 24">
          <defs></defs>
          <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
        </svg>
      </button><a href="logout.php" class="btn btn-danger ml-3">Sign Out</a>
    </div>
    


    <div class="content-wrapper">
  
      <?php
                // LOOP TILL END OF DATA
                while($rows=$result2->fetch_assoc())
                {
            ?>

  <div class="news-card">
    <a href="#" class="news-card__card-link"></a>
    <img src="<?php echo $rows['postimage'];?>?auto=compress&cs=tinysrgb&h=750&w=1260" alt="" class="news-card__image">
    <div class="news-card__text-wrapper">
      <h2 class="news-card__title"><?php echo $rows['posttitle'];?></h2>
      <div class="news-card__post-date"><?php echo $rows['postdate'];?></div>
      <div class="news-card__details-wrapper">
        <p class="news-card__excerpt"><?php echo $rows['postdetails'];?>&hellip;</p>
        <a href="javascript:viewmypage(<?php echo $rows['postfull'];?>)" class="news-card__read-more">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
      </div>
    </div>
  </div>

  <?php
                }
            ?>

</div>
  </div>
</div>