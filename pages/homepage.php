<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Task Management Application</title>
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


    <link rel="stylesheet" href="pages/assets/css/style.css">


</head>

<body>
<h1><strong>Task Management Application</strong> </h1>

<div class="form">

    <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
    </ul>

    <div class="tab-content">
        <div id="signup">


            <form action="index.php?page=accounts&action=store" method="post">

                <div class="top-row">
                    <div class="field-wrap">
                        <label>
                            First Name<span class="req">*</span>
                        </label>
                        <input type="text" name="fname" required autocomplete="off" />
                    </div>

                    <div class="field-wrap">
                        <label>
                            Last Name<span class="req">*</span>
                        </label>
                        <input type="text" name="lname" required autocomplete="off"/>
                    </div>
                </div>

                <div class="field-wrap">
                    <label>
                        Email Address<span class="req">*</span>
                    </label>
                    <input type="email" name="email" required autocomplete="off"/>
                </div>

                <div class="field-wrap">
                    <label>
                        Phone number<span class="req">*</span>
                    </label>
                    <input type="phone" name="phone" required autocomplete="off"/>
                </div>
                <div class="field-wrap">
                    <label>
                        Birthday<span class="req">*</span>
                    </label>
                    <input type="birthday" name="birthday" required autocomplete="off"/>
                </div>
                <div class="field-wrap">
                    <label>
                        Gender<span class="req">*</span>
                    </label>
                    <input type="gender" name="gender" required autocomplete="off"/>
                </div>

                <div class="field-wrap">
                    <label>
                        Set A Password<span class="req">*</span>
                    </label>
                    <input type="password" name="password" required autocomplete="off"/>
                </div>

                <button type="submit" class="button button-block"/>Get Started</button>

            </form>

        </div>

        <div id="login">
            <h1>Welcome Back!</h1>

            <form action="index.php?page=accounts&action=login" method="post">

                <div class="field-wrap">
                    <label>
                        Email Address<span class="req">*</span>
                    </label>
                    <input type="email" name="email" required autocomplete="off"/>
                </div>

                <div class="field-wrap">
                    <label>
                        Password<span class="req">*</span>
                    </label>
                    <input type="password" name="password" required autocomplete="off"/>
                </div>



                <button class="button button-block"/>Log In</button>

            </form>

        </div>

    </div><!-- tab-content -->

</div> <!-- /form -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script  src="pages/assets/js/script.js"></script>

</body>
</html>
