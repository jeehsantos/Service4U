<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Area | Dashboard</title>
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
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
                aria-hidden="true"></span> Posts</span></a></li>

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
                    <th>Name</th>
                    <th>Email</th>
                    <th>City</th>
                    <th></th>
                  </tr>
                  <tr>
                    <td>Jill Smith</td>
                    <td>jillsmith@gmail.com</td>
                    <td>Christchurch</td>
                    <td><a class="btn btn-default" href="edit.html">Edit</a> <a class="btn btn-danger"
                        href="#">Delete</a></td>
                  </tr>
                  <tr>
                    <td>Eve Jackson</td>
                    <td>ejackson@yahoo.com</td>
                    <td>Christchurch</td>
                    <td><a class="btn btn-default" href="edit.html">Edit</a> <a class="btn btn-danger"
                        href="#">Delete</a></td>
                  </tr>
                  <tr>
                    <td>Stephanie Landon</td>
                    <td>landon@yahoo.com</td>
                    <td>Queenstown</td>
                    <td><a class="btn btn-default" href="edit.html">Edit</a> <a class="btn btn-danger"
                        href="#">Delete</a></td>
                  </tr>
                  <tr>
                    <td>Mike Johnson</td>
                    <td>mjohnson@gmail.com</td>
                    <td>Cromwell</td>
                    <td><a class="btn btn-default" href="edit.html">Edit</a> <a class="btn btn-danger"
                        href="#">Delete</a></td>
                  </tr>
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
                          <option>Autos</option>
                          <option>Classes</option>
                          <option>Renovation</option>
                          <option>Events</option>
                          <option>Tech assistance</option>
                          <option>Design and Technology</option>
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
                          <option>Construction</option>
                          <option>Instalation</option>
                          <option>Repair and Renovation</option>
                          <option>General Services</option>
                          <option>Housing</option>
                          <option>Academic</option>
                          <option>sport</option>
                          <option>Staff and Support</option>
                          <option>Technology</option>
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
                    <th>Title</th>
                    <th>Local</th>
                    <th>Review</th>
                    <th></th>
                  </tr>
                  <tr>
                    <td>Announce Post 1</td>
                    <td>Horby, Christchurch</td>
                    <td>79%</td>
                    <td><a class="btn btn-default" href="edit.html">Edit</a> <a class="btn btn-danger"
                        href="#">Delete</a></td>
                  </tr>
                  <tr>
                    <td>Announce Post 2</td>
                    <td>CBD, Christchurch</td>
                    <td>91%</td>
                    <td><a class="btn btn-default" href="edit.html">Edit</a> <a class="btn btn-danger"
                        href="#">Delete</a></td>
                  </tr>
                  <tr>
                    <td>Announce Post 3</td>
                    <td>Rolleston, Christchurch</td>
                    <td>100%</td>
                    <td><a class="btn btn-default" href="edit.html">Edit</a> <a class="btn btn-danger"
                        href="#">Delete</a></td>
                  </tr>
                  <tr>
                    <td>Announce Post 4</td>
                    <td>Center, Queenstown</span></td>
                    <td>95%</td>
                    <td><a class="btn btn-default" href="edit.html">Edit</a> <a class="btn btn-danger"
                        href="#">Delete</a></td>
                  </tr>
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
  <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>
