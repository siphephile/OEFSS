<div class="products-area-wrapper tableView">
  <div class="content-wrapper">
  
      <?php
        // LOOP TILL END OF DATA
        while($rows=$result2->fetch_assoc()){
      ?>

  <div class="news-card">
    <a href="javascript:viewmypage(<?php echo $rows['nid'];?>)" class="news-card__card-link"></a>
    <img src="<?php echo $rows['postimage'];?>?auto=compress&cs=tinysrgb&h=750&w=1260" alt="" class="news-card__image">
    <div class="news-card__text-wrapper">
      <h2 class="news-card__title"><?php echo $rows['posttitle'];?></h2>
      <div class="news-card__post-date"><?php echo $rows['postdate'];?></div>
      <div class="news-card__details-wrapper">
        <p class="news-card__excerpt"><?php echo $rows['postdetails'];?>&hellip;</p>
        <a href="javascript:viewmypage(<?php echo $rows['nid'];?>)" class="news-card__read-more">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
      </div>
    </div>
  </div>

  <?php
    }
  ?>

</div>
</div>