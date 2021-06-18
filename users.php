<?php
    session_start();
    if(!isset($_SESSION['unique_id'])) {
        header("location: login.php");
    }
?>


<?php include_once "header.php"?>

<body>
    <div class="wrapper">
        <section class="users">
            <header>
            <?php
                include_once "php/config.php";
                $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
                if(mysqli_num_rows($sql)  > 0) {
                    $row = mysqli_fetch_assoc($sql);
                }

            ?>
                <div class="contents">
                    <img src="php/images/<?php echo $row['img'] ?>" alt="User Image">
                    <div class="detail">
                        <span><?php echo $row['fname'] . " " . $row['lname']   ?></span>
                        <p><?php echo $row['status'] ?></p>
                    </div>
                </div>
                <a href="php/logout.php?logout_id =<?php echo $row['unique_id'] ?>" class="logout">Logout</a>
            </header>
            
            <div class="userList">
                        <a href="#">
                        <div class="contents">
                            <img src= "php/images/ '. $row['img'] .'" >
                            <div class="detail">
                                <span>'.$row['fname'] . " " . $row['lname'] .'</span>
                                <p>This is a Text Message</p>
                            </div>
                        </div>
                        <div class="status"><i class="fas fa-circle"></i></div>
                        </a>
                
            </div>
        </section>
    </div>
    <script src="javascript/users.js"></script>
</body>
</html>