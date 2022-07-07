<div class="products-area-wrapper tableView">

    <table>
            <tr>
                <th>ModuleCode</th>
                <th>DateExam</th>
                <th>Coding Score</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['StudentName'];?></td>
                <td><?php echo $rows['DateExam'];?></td>
                <td><?php echo $rows['StaffName'];?></td>
            </tr>
            <?php
                }
            ?>
    </table>


</div>