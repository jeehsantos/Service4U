 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Area | Dashboard</title>
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="../CSS/account.css" rel="stylesheet">
  
  <link href="css/style.css" rel="stylesheet">
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
    integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
    integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
  </script>
  <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
</head>

<body>
<!-- Nav -->
  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
          aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Admin Service4U</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
  <?php 
session_start();
$user_name = $_SESSION['name'];
?>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Welcome, <?php echo"$user_name";?></a></li>
          <li><a href="../logout.php">Logout</a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </nav>

<!-- Header bar with the logo image-->
  <header id="header">
    <div class="container">
      <div class="row">
        <div class="col-md-10">
          <img style="width: 30%;" src="LSFullWhite.png">
        </div>

      </div>
    </div>
  </header>

  <!-- 
    Dashboard content having Users and Posts options with nav-pills
  -->
  <div id="exTab2" class="container">

    <ul class="nav nav-tabs justify-content-center">
      <a href="./index.php" class="list-group-item active main-color-bg">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
      </a>

      <div class="container">
        <ul class="nav nav-pills nav-stacked col-md-2">
          <li class="active"><a href="#tab_a" data-toggle="pill"><span class="glyphicon glyphicon-user"
                aria-hidden="true"></span> Users</span></a></li>
          <li class="bg-light"><a href="#tab_b" data-toggle="pill"><span class="glyphicon glyphicon-comment"
                aria-hidden="true"></span> Service announces</span></a></li>

        </ul>
        <div class="tab-content col-md-10">
          <div class="tab-pane active" id="tab_a">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title main-color-bg">Users</h3>
              </div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-12">
                    <input class="form-control" type="text" placeholder="Filter Users...">
                  </div>
                </div>
                <br>
                <table class="table table-striped table-hover">
                  <tr>
                    <th>Id</th>
                    <th>Full name</th>
                    <th>Email</th>
                    <th>City</th>
                    <th></th>
                  </tr>
                  <?php include('listUsers.php');?>
                 
                </table>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab_b">
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title main-color-bg">Posts</h3>
              </div>
              <div class="panel-body">
              <form >
              <div class="row">
                 <h2 class="text-center">Announce itens</h2><hr>
                    <div class="form-group col-xs-4">
                        <label for="sel1">Area list:</label>
                        <select class="form-control" id="sel1">
                         <?php include('includes/selectList.php'); ?>
                        </select>
                    
                    </div>
                     
                    <div class="col-xs-4">
                    <label for="ex3">Input area: </label>
                    <input class="form-control" id="ex3" type="text">
                    
                  </div>  
                  <div class="col-xs-2">
                  <label for="include"></label>
                  <button class="form-control btn-danger" style="margin-top:5px;" id="include" type="submit">Include</button>
                </div>      
              </div>  
              <div class="row">
                 
                    <div class="form-group col-xs-4">
                        <label for="sel1">Process list:</label>
                        <select class="form-control" id="sel1">
                        <?php include('includes/selectProcess.php'); ?>
                        </select>
                    
                    </div>
                    <div class="col-xs-4">
                    <label for="ex3">Input process: </label>
                    <input class="form-control" id="ex3" type="text">
                    
                  </div>  
                  <div class="col-xs-2">
                  <label for="include"></label>
                  <button class="form-control btn-danger" style="margin-top:5px;" id="include" type="submit">Include</button>
                </div>      
              </div>  
              <hr>
                <div class="row">
                  <div class="col-md-12">
                    <input class="form-control" type="text" placeholder="Filter Posts...">
                  </div>
                </div>
                <br>
                <table class="table table-striped table-hover">
                  <tr>
                    <th>Id</th>
                    <th>Announce Title</th>
                    <th>Location</th>
                    <th>Reviews</th>
                    <th></th>
                  </tr>
                  <?php include('listServices.php');?>
                 
                </table>
              </div>
            </div>
          </div>

        </div><!-- tab content -->
      </div><!-- end of container -->
    </ul>

  </div>

  <hr>
  </hr>
<!-- teste --> 
<div class="container">
  <h2>Modal Example</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#profileModal">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header modalHeader">
                <h5 class="modal-title" id="profileModalLabel">My profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body modalProfileBody">
             
               <div class="row">
                <div class="col-5"> 
               <div class="imageProfileContainer"> 
               <form action="updateProfile.php" method="POST" enctype="multipart/form-data">
                  <div class="imageProfile img-fluid"><img id="imagem2" src="IMG/user-profile.jpg" alt="Profile image"> </div>
                  <div class="mb-3">
  <label for="formFileSm" class="form-label">Upload image</label>
  <input class="form-control form-control-sm"  type="file" name="imagem" id="imagem" onchange="previewImagem()">
            </div>
</div>
                </div>
                <div class="col-7">
            
                  <div class="inputsProfileContainer">
                    <input type="text" name="fullName" class="form-control" value="'.  $row_announce['fullName'] .'" placeholder="Full name" aria-describedby="addon-wrapping">
                    
                    <input type="text" name="email" class="form-control" value="'. $row_announce['email'] .'" placeholder="Email" aria-describedby="addon-wrapping" required>

                    <div class="inputsProfileGroup">
                      <input type="text" name="address" class="form-control" value="'. $row_announce['address'] .'"  placeholder="Address" aria-describedby="addon-wrapping" required>
                      <input type="text" name="postCode" class="form-control" value="'. $row_announce['postCode'] .'" placeholder="Postcode" aria-describedby="addon-wrapping" required>
                    </div>
                    <div class="inputsProfileGroup">
                      <input type="text" name="phone" class="form-control" value="'. $row_announce['phone'] .'" placeholder="Phone" aria-describedby="addon-wrapping" required>
                      <input type="text" name="city" class="form-control" value="'. $row_announce['city'] .'" placeholder="City" aria-describedby="addon-wrapping" required>
                    </div>
                    <input type="password" name="password" class="form-control" placeholder="Password" value="'. $row_announce['password'] .'" aria-describedby="addon-wrapping">
                    <input type="password" class="form-control" placeholder="Confirm password"
                      aria-describedby="addon-wrapping">
                    <div class="buttonProfileContainer">
                      <button type="submit" name="updateMyProfile" class="btn btn-primary">Update</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
  
</div>

<!-- termina teste -->
  </div><!-- tab content -->
  </div><!-- end of container -->
  <!-- Nav tabs -->


  <footer id="footer">
    <p>Copyright Service4U Assignment Project Integration &copy; 2021</p>
  </footer>


  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>
