<?php include_once('functions.php'); ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Image Preview and Upload</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="">

</head>
  <body class="hm-gradient">

    <main>
        
        <!--MDB Tables-->
        <div class="container mt-4">


            <div class="card ">
                <div class="card-body">
                    <!-- Grid row -->
                    <div class="row">
                        <!-- Grid column -->
                        <div class="col-md-12">
                            <h2 class="py-3 text-center font-bold font-up blue-text">All applicants</h2>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                    <!--Table-->
                    <table class="table table-hover table-responsive container">
                        <!--Table head-->
                        <thead>
                            <tr>
                                <th scope="row">#</th>
                                <th class="th-lg"><a href="">Username</a></th>
                                <th class="th-lg"><a href="">email</a></th>
                                <th class="th-lg"><a href="">association code</a></th>
                                <th class="th-lg"><a href="">Group code</a></th>
                                <th class="th-lg"><a href="">KENAFF membership certificate</a></th>
                            </tr>
                        </thead>
                        <!--Table head-->
                        <!--Table body-->
                        <tbody>
                           <?php foreach($user as $item): ?>

                           <tr>
                           <td>
                             <?php echo $item['id']; ?>
                           </td>
                           <td>
                             <?php echo $item['username']; ?>
                           </td>
                               <td>
                                   <?php echo $item['email']; ?>
                               </td>
                               <td>
                                   <?php echo $item['association']; ?>
                               </td>
                               <td>
                                   <?php echo $item['code']; ?>
                               </td>
                           <td>
                            <img src="<?php echo 'images/'. $item['image']; ?>" width='90' height='90'>
                           </td>
                               <td>
                                   <a href="user-view.php?id=<?= $item['id']; ?>" class="btn btn-info btn-sm">View</a>


                               </td>
                           </tr>
                           
                           <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <hr class="my-4">
        </div>
      
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
