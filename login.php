

<?php include_once "header.php"?>

<body>
    <div class="wrapper">
        <section class="form login">
            <header>Textagram</header>
            <form action="#">
                <div class="errorText">This is an error message!</div>

                
                <div class="fields input">
                    <label>Email Address</label>
                    <input type="text" name="email" placeholder="Enter your email">                        
                </div>
                <div class="fields input">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter your password"> 
                    <i class="fas fa-eye"></i>                       
                </div>
                
                <div class="fields button">
                    <input type="submit" value="Continue to Chat">                        
                </div>
                <div class="link">Don't have an Account?<a href="index.php">Sign Up</a> </div>

            </form>
        </section>
    </div>
    <script src="javascript/password.js"></script>
    <script src="javascript/login.js"></script>

</body>
</html>