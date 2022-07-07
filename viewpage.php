    <?php
        // LOOP TILL END OF DATA
        while($rows=$result4->fetch_assoc()){

          $goop = $rows['nposts'];

        }
      ?>
    

    <div class="">

      <?php
        // LOOP TILL END OF DATA
        while($rows=$result3->fetch_assoc()){
          $date_string_prepared = date_create($rows['postdate']);
          $date_string = $date_string_prepared->format("d F Y");
      ?>

      <div class="fondc"> 
        <span class="s1"><?php echo substr($date_string, 0, -4);?></span>
        <span class="s2"><?php echo substr($date_string, -4, 4);?></span>
      </div>
      <div class="cardc">
      <div class="thumbnailc">
        <img class="leftc" src="<?php echo $rows['postimage'];?>?auto=compress&cs=tinysrgb&h=750&w=1260"/>
      </div>
      <div class="rightc">
        <h1 class="s3"><?php echo $rows['posttitle'];?></h1>
        <div class="authorc">
          <h5 class="s4"><?php echo $rows['StaffName'];?></h5>
        </div>
        <div class="separatorc"></div>
        <p><?php echo $rows['postfull'];?></p>
      </div>

      <div class="fabd" id="fabd">
        <a href="javascript:viewmypage(<?php echo $rows['nid']-1;?>,<?php echo $goop;?>)">
        <i class="fa fa-arrow-left fa-3x"></i>
        </a>
      </div>
      <div class="fabc" id="fabc">
        <a href="javascript:viewmypage(<?php echo $rows['nid']+1;?>,<?php echo $goop;?>)">
        <i class="fa fa-arrow-right fa-3x"></i>
        </a>
      </div>

    </div>

      <?php
        }
      ?>
  </div>
  