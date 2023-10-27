<link rel="stylesheet" href="../assets/css/styles.css">

<?php 
  include 'connection.php';
  function getAddress($conn) { { { { 
    global $dbh;
    $isread=0;
   $sql = "SELECT * from tblapplicationform where IsRead=:isread";
    $query = $dbh -> prepare($sql);
    $query->bindParam(':isread',$isread,PDO::PARAM_STR);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    $unreadcount=$query->rowCount();
  }
?>
   
        <li class="dropdown">
        <i class="ti-bell dropdown-toggle" data-toggle="dropdown">
            <span><?php echo htmlentities($unreadcount);}?></span>
            </i>
            <div class="dropdown-menu bell-notify-box notify-box">
            <span class="notify-title">You have <?php echo htmlentities($unreadcount);}?> <b>unread</b> notifications!</span>

            <div class="notify-list">
            <?php 
                $isread=0;
                $sql = "SELECT tblapplicationform.name as lid where tblapplicationform.IsRead=:isread";
                global $dbh;
                $query = $dbh -> prepare($sql);
                $query->bindParam(':isread',$isread,PDO::PARAM_STR);
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                if($query->rowCount() > 0)
                {
                foreach($results as $result)
                {               ?>  
                    
                     
                     <a href="/fund/application/result.php?name=<?php echo htmlentities($result->lid);?>" class="notify-item">
                       <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                       <div class="notify-text">
                       
                                            <br />(<?php echo htmlentities($result->name);?>)
                                            </b> has recently applied for a bursary.</p>
                            <span></b></span>
                        </div>
                      </a>
                                        
                      <?php }} } ?> 
                     </div>
                            
                     
                     
                      </div>
                      
     </li>

