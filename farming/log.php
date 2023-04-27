
<?php include_once('functions.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Responsive Registration Form</title>
    <meta name="viewport" content="width=device-width,
      initial-scale=1.0"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="log.css" />
</head>
<body>
<section class="contact">
    <div class="container">
        <h1 class="form-title">Application</h1>
        <form action="functions.php" method="post" enctype="multipart/form-data">
            <div class="main-user-info">
                <div class="user-input-box">
                    <label for="fullName">Full Name</label>
                    <input type="text"
                           id="fullName"
                           name="username"
                           placeholder="Enter Full Name"/>
                </div>

                <div class="user-input-box">
                    <label for="email">Email</label>
                    <input type="email"
                           id="email"
                           name="email"
                           placeholder="Enter Email"/>
                </div>
                <div class="user-input-box">
                    <label for="email">KENAFF county code</label>
                    <input type="text"
                           id="email"
                           name="association"
                           placeholder="KENAFFCACO21"/>
                </div>
                <div class="user-input-box">
                    <label for="email">KENAFF Group code</label>
                    <input type="text"
                           id="email"
                           name="code"
                           placeholder="KENAFFGC001"/>
                </div>


                <input type="file" name="image" id="profileImage"  required accept='image/*'>
                <label>KENAFF Membership certificate screenshot</label>
            <div class="form-submit-btn">
                <button type="submit" name="save_profile" class="btn btn-primary btn-block">submit</button>
            </div>
        </form>
    </div>
</section>
</body>
</html>
