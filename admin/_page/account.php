<div class="accframe">
    <div class="tableframe">
        <table style="width: 100%;">
            <tr>
                <th>Account</th>
                <th>Name</th>
                <th>Status</th>
                <th style="width: 20%; overflow-x: auto;">Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Point</th>
            </tr>
            <?php
            $sql_user = 'SELECT * from users';
            $query_user = $connect->query($sql_user);      
            while($user = $query_user->fetch_assoc()){
            ?>
            <tr>
                <td><?php echo $user['user'];?></td>
                <td><?php echo $user['firstname'];?> <?php echo $user['lastname'];?></td>
                <td><?php echo $user['status'];?></td>
                <td style="width: 20%; overflow-x: auto;"><?php echo substr($user['email'], 0, 15);?>...</td>
                <td><?php echo $user['phone'];?></td>
                <td style="width: 20%; overflow-x: auto;"><?php echo substr($user['address'], 0, 15);?>...</td>
                <td><?php echo $user['point'];?></td>
                <td><a href="?page=profile&id=<?php echo $user['id'];?>">เรียกดู</td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
</div>
