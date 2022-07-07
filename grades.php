
    <div class="products-area-wrapper tableView">
      
      <?php
        // LOOP TILL END OF DATA
        while($rows=$result->fetch_assoc()){
      ?>

      <div class="products-row">
        <button id="view-pdf-btn" class="cell-more-button" onclick="previewFile()">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"/><circle cx="12" cy="5" r="1"/><circle cx="12" cy="19" r="1"/></svg>
        </button>
          <div class="product-cell image">
            <img src="images/paper.png" alt="product">
            <span><?php echo $rows['ModuleCode'];?></span>
          </div>
        <div class="product-cell category"><span class="cell-label">Module:</span><?php echo $rows['Description'];?></div>
        <div class="product-cell status-cell">
          <span class="cell-label">Status:</span>
          <span class="status active">Open</span>
        </div>
        <div class="product-cell sales"><span class="cell-label">Lecture:</span><?php echo $rows['StaffName'];?></div>
        <div class="product-cell stock"><span class="cell-label">Course:</span>Infomation Technology</div>
        <div class="product-cell price"><span class="cell-label">Exam Date:</span><?php echo $rows['DateExam'];?></div>
      </div>

      <?php
          }
      ?>
      
    </div>
