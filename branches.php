<?php
  include "db.php";
  include_once "Common.php";

  $query = "SELECT * FROM ss_branches" ;
 
  // $query_status = "SELECT * FROM status " ;
  $branches = mysqli_query( $conn , $query); 

 

?>

<!--
=========================================================
* Secret Society Admin Panel - v2.1.1
=========================================================

* Product Page: https://www.creative-tim.com/product/paper-dashboard-2-pro
* Copyright 2020 Resturant Secrets (https://www.creative-tim.com)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img//apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img//favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
Secret Society Admin Panel
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="./assets/css/paper-dashboard.css?v=2.1.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="default" data-active-color="danger">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color=" default | primary | info | success | warning | danger |"
    -->
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="./assets/img/logo-small.png">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
          Resturant Secrets
          <!-- <div class="logo-image-big">
            <img src="./assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <div class="user">
          <div class="photo">
            <img src="./assets/img/faces/ayo-ogunseinde-2.jpg" />
          </div>
          <div class="info">
            <a data-toggle="collapse" href="#collapseExample" class="collapsed">
              <span>
                Simon Pervaiz
                <b class="caret"></b>
              </span>
            </a>
            <div class="clearfix"></div>
            <div class="collapse" id="collapseExample">
              <ul class="nav">
                <li>
                  <a href="#">
                    <span class="sidebar-mini-icon">MP</span>
                    <span class="sidebar-normal">My Profile</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="sidebar-mini-icon">EP</span>
                    <span class="sidebar-normal">Edit Profile</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="sidebar-mini-icon">S</span>
                    <span class="sidebar-normal">Settings</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <ul class="nav">
          <li>
            <a href="../../examples/dashboard.html">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li  class="active">
            <a href="members.php">
              <i class="nc-icon nc-bank"></i>
              <p>Members</p>
            </a>
          </li>
          <li >
            <a href="reservation.php">
              <i class="nc-icon nc-bank"></i>
              <p>Reservations</p>
            </a>
          </li>
          <li >
            <a href="branches.php">
              <i class="nc-icon nc-bank"></i>
              <p>Branches</p>
            </a>
          </li>
          <!-- <li>
            <a data-toggle="collapse" href="#pagesExamples">
              <i class="nc-icon nc-book-bookmark"></i>
              <p>
                Pages <b class="caret"></b>
              </p>
            </a>
            <div class="collapse " id="pagesExamples">
              <ul class="nav">
                <li>
                  <a href="../../examples/pages/timeline.html">
                    <span class="sidebar-mini-icon">T</span>
                    <span class="sidebar-normal"> Timeline </span>
                  </a>
                </li>
                <li>
                  <a href="../../examples/pages/login.html">
                    <span class="sidebar-mini-icon">L</span>
                    <span class="sidebar-normal"> Login </span>
                  </a>
                </li>
                <li>
                  <a href="../../examples/pages/register.html">
                    <span class="sidebar-mini-icon">R</span>
                    <span class="sidebar-normal"> Register </span>
                  </a>
                </li>
                <li>
                  <a href="../../examples/pages/lock.html">
                    <span class="sidebar-mini-icon">LS</span>
                    <span class="sidebar-normal"> Lock Screen </span>
                  </a>
                </li>
                <li>
                  <a href="../../examples/pages/user.html">
                    <span class="sidebar-mini-icon">UP</span>
                    <span class="sidebar-normal"> User Profile </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a data-toggle="collapse" href="#componentsExamples">
              <i class="nc-icon nc-layout-11"></i>
              <p>
                Components <b class="caret"></b>
              </p>
            </a>
            <div class="collapse " id="componentsExamples">
              <ul class="nav">
                <li>
                  <a href="../../examples/components/buttons.html">
                    <span class="sidebar-mini-icon">B</span>
                    <span class="sidebar-normal"> Buttons </span>
                  </a>
                </li>
                <li>
                  <a href="../../examples/components/grid.html">
                    <span class="sidebar-mini-icon">G</span>
                    <span class="sidebar-normal"> Grid System </span>
                  </a>
                </li>
                <li>
                  <a href="../../examples/components/panels.html">
                    <span class="sidebar-mini-icon">P</span>
                    <span class="sidebar-normal"> Panels </span>
                  </a>
                </li>
                <li>
                  <a href="../../examples/components/sweet-alert.html">
                    <span class="sidebar-mini-icon">SA</span>
                    <span class="sidebar-normal"> Sweet Alert </span>
                  </a>
                </li>
                <li>
                  <a href="../../examples/components/notifications.html">
                    <span class="sidebar-mini-icon">N</span>
                    <span class="sidebar-normal"> Notifications </span>
                  </a>
                </li>
                <li>
                  <a href="../../examples/components/icons.html">
                    <span class="sidebar-mini-icon">I</span>
                    <span class="sidebar-normal"> Icons </span>
                  </a>
                </li>
                <li>
                  <a href="../../examples/components/typography.html">
                    <span class="sidebar-mini-icon">T</span>
                    <span class="sidebar-normal"> Typography </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a data-toggle="collapse" href="#formsExamples">
              <i class="nc-icon nc-ruler-pencil"></i>
              <p>
                Forms <b class="caret"></b>
              </p>
            </a>
            <div class="collapse " id="formsExamples">
              <ul class="nav">
                <li>
                  <a href="../../examples/forms/regular.html">
                    <span class="sidebar-mini-icon">RF</span>
                    <span class="sidebar-normal"> Regular Forms </span>
                  </a>
                </li>
                <li>
                  <a href="../../examples/forms/extended.html">
                    <span class="sidebar-mini-icon">EF</span>
                    <span class="sidebar-normal"> Extended Forms </span>
                  </a>
                </li>
                <li>
                  <a href="../../examples/forms/validation.html">
                    <span class="sidebar-mini-icon">V</span>
                    <span class="sidebar-normal"> Validation Forms </span>
                  </a>
                </li>
                <li>
                  <a href="../../examples/forms/wizard.html">
                    <span class="sidebar-mini-icon">W</span>
                    <span class="sidebar-normal"> Wizard </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="active">
            <a data-toggle="collapse" href="#tablesExamples" aria-expanded="true">
              <i class="nc-icon nc-single-copy-04"></i>
              <p>
                Tables <b class="caret"></b>
              </p>
            </a>
            <div class="collapse  show " id="tablesExamples">
              <ul class="nav">
                <li>
                  <a href="../../examples/tables/regular.html">
                    <span class="sidebar-mini-icon">RT</span>
                    <span class="sidebar-normal"> Regular Tables </span>
                  </a>
                </li>
                <li class="active">
                  <a href="../../examples/tables/extended.html">
                    <span class="sidebar-mini-icon">ET</span>
                    <span class="sidebar-normal"> Extended Tables </span>
                  </a>
                </li>
                <li>
                  <a href="../../examples/tables/datatables.net.html">
                    <span class="sidebar-mini-icon">DT</span>
                    <span class="sidebar-normal"> DataTables.net </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a data-toggle="collapse" href="#mapsExamples">
              <i class="nc-icon nc-pin-3"></i>
              <p>
                Maps <b class="caret"></b>
              </p>
            </a>
            <div class="collapse " id="mapsExamples">
              <ul class="nav">
                <li>
                  <a href="../../examples/maps/google.html">
                    <span class="sidebar-mini-icon">GM</span>
                    <span class="sidebar-normal"> Google Maps </span>
                  </a>
                </li>
                <li>
                  <a href="../../examples/maps/fullscreen.html">
                    <span class="sidebar-mini-icon">FSM</span>
                    <span class="sidebar-normal"> Full Screen Map </span>
                  </a>
                </li>
                <li>
                  <a href="../../examples/maps/vector.html">
                    <span class="sidebar-mini-icon">VM</span>
                    <span class="sidebar-normal"> Vector Map </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a href="../../examples/widgets.html">
              <i class="nc-icon nc-box"></i>
              <p>Widgets</p>
            </a>
          </li>
          <li>
            <a href="../../examples/charts.html">
              <i class="nc-icon nc-chart-bar-32"></i>
              <p>Charts</p>
            </a>
          </li>
          <li>
            <a href="../../examples/calendar.html">
              <i class="nc-icon nc-calendar-60"></i>
              <p>Calendar</p>
            </a>
          </li> -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-minimize">
              <button id="minimizeSidebar" class="btn btn-icon btn-round">
                <i class="nc-icon nc-minimal-right text-center visible-on-sidebar-mini"></i>
                <i class="nc-icon nc-minimal-left text-center visible-on-sidebar-regular"></i>
              </button>
            </div>
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">Branches</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link btn-magnify" href="javascript:;">
                  <i class="nc-icon nc-layout-11"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bell-55"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link btn-rotate" href="javascript:;">
                  <i class="nc-icon nc-settings-gear-65"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->

<!-- All Models-->
      <div class="modal fade" id="updateModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-notice">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                              <i class="nc-icon nc-simple-remove"></i>
                            </button>
                            <h5 class="modal-title" id="myModalLabel">How Do You Become an Affiliate?</h5>
                          </div>
                          <div class="modal-body">
                          <form action="./datacalls/update-branch.php" method="POST" enctype="multipart/form-data">
               <div class="form-group">
               <input id="update_id" name="update_id" type="hidden" />

             
                        <b>Name</b>
                            <input id="update_name" name="update_name" type="text" placeholder="Branch Name" class="form-control"  />
                            <br> 
                       
                                <br><b>Status</b>
                       
                            	<select id="update_status" name="update_status" class="form-control">
                            
                              
                                     <option value="1">Active</option>
                                     <option value="0">Not Active</option>
                                 
                                 </select>
                        </div>
                        <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" name="updayeData" class="btn btn-primary">Procced</button>
                              </div>
              </form>
                          </div>
    
                        </div>
                      </div>
                    </div>

      <div class="content">
        <div class="row">
      
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">All Branches</h4>
              </div>
              <div class="card-body">
                <div class="toolbar">
                  <!--        Here you can write extra buttons/actions for the toolbar              -->
                </div>
                <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Status</th>
                      <th class="disabled-sorting text-right">Actions</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    <th>ID</th>
                      <th>Name</th>
                      <th>Status</th>
                      <th class="disabled-sorting text-right">Actions</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php
                  while($row=mysqli_fetch_array($branches))
                  {
                  ?>
                  <tr> 
                  <td> <?php  echo $row["uniqueId"]  ?> </td>
                    <td> <?php  echo $row["name"]  ?> </td>
                   
                 
                    <td> <?php 
                    if($row["status"] == "1"){ ?>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i> Active
                      </span>
                  <?php  }
                    else {  ?>
                      <span class="badge badge-dot mr-4">
                      <i class="bg-warning"></i> Not Active
                    </span> 
                    <?php  } ?> </td>
                   
                <td class="text-right">
                        <a href="#" class="btn btn-info btn-link btn-icon btn-sm like"><i class="fa fa-heart"></i></a>
                        <a href="#" class="btn btn-warning btn-link btn-icon btn-sm edit"><i class="fa fa-edit"></i></a>
                        <a href="#" class="btn btn-danger btn-link btn-icon btn-sm remove"><i class="fa fa-times"></i></a>
                      </td>
                  <?php  }?>
     
                    <!-- <tr>
                      <td>Dai Rios</td>
                      <td>Personnel Lead</td>
                      <td>Edinburgh</td>
                      <td>35</td>
                      <td class="text-right">
                        <a href="#" class="btn btn-info btn-link btn-icon btn-sm like"><i class="fa fa-heart"></i></a>
                        <a href="#" class="btn btn-warning btn-link btn-icon btn-sm edit"><i class="fa fa-edit"></i></a>
                        <a href="#" class="btn btn-danger btn-link btn-icon btn-sm remove"><i class="fa fa-times"></i></a>
                      </td>
                    </tr>
     
              
                    <tr>
                      <td>Olivia Liang</td>
                      <td>Support Engineer</td>
                      <td>Singapore</td>
                      <td>64</td>
                      <td class="text-right">
                        <a href="#" class="btn btn-info btn-link btn-icon btn-sm like"><i class="fa fa-heart"></i></a>
                        <a href="#" class="btn btn-warning btn-link btn-icon btn-sm edit"><i class="fa fa-edit"></i></a>
                        <a href="#" class="btn btn-danger btn-link btn-icon btn-sm remove"><i class="fa fa-times"></i></a>
                      </td>
                    </tr> -->
                  </tbody>
                </table>
              </div><!-- end content-->
            </div><!--  end card  -->
          </div> <!-- end col-md-12 -->

          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Add Branch</h4>
              </div>
              <div class="card-body">
              <form action="./datacalls/add-branch.php" method="POST" enctype="multipart/form-data">
                  <label>Branch Name</label>
                  <div class="form-group">
                    <input  id="branch_name" name="branch_name" type="text" class="form-control" placeholder="Enter Name" required>
                  </div>

                  <button type="submit" class="btn btn-info btn-round">Add</button>
                </form>
              </div><!-- end content-->
            </div><!--  end card  -->
          </div> <!-- end col-md-12 -->
        </div>
      </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li><a href="https://www.creative-tim.com" target="_blank">Resturant Secrets</a></li>
                <li><a href="https://www.creative-tim.com/blog" target="_blank">Blog</a></li>
                <li><a href="https://www.creative-tim.com/license" target="_blank">Licenses</a></li>
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                © <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="fa fa-heart heart"></i> by Resturant Secrets
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js"></script>
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="./assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="./assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="./assets/js/plugins/sweetalert2.min.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="./assets/js/plugins/jquery.validate.min.js"></script>
  <!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="./assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="./assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="./assets/js/plugins/bootstrap-datetimepicker.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
  <script src="./assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="./assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="./assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="./assets/js/plugins/fullcalendar/fullcalendar.min.js"></script>
  <script src="./assets/js/plugins/fullcalendar/daygrid.min.js"></script>
  <script src="./assets/js/plugins/fullcalendar/timegrid.min.js"></script>
  <script src="./assets/js/plugins/fullcalendar/interaction.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="./assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Bootstrap Table -->
  <script src="./assets/js/plugins/nouislider.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="./assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/paper-dashboard.min.js?v=2.1.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="./assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $('#datatable').DataTable({
        "pagingType": "full_numbers",
        "lengthMenu": [
          [10, 25, 50, -1],
          [10, 25, 50, "All"]
        ],
        responsive: true,
        language: {
          search: "_INPUT_",
          searchPlaceholder: "Search records",
        }

      });

      var table = $('#datatable').DataTable();

      // Edit record
      table.on('click', '.edit', function() {
        $tr = $(this).closest('tr');

        var data = table.row($tr).data();
        // alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');


        var rowID =  data[0]

var params = 'recordId=' + rowID +'&tableName=ss_branches';

console.log(params);
 $.ajax({                                      
   url: 'datacalls/get-branch-records.php',                  //the script to call to get data        

   data: params,                        //you can insert url argumnets here to pass to api.php
                                    //for example "id=5&parent=6"
   dataType: 'json',                //data format    
   type: 'post',  
   success: function(thedata)          //on recieve of reply
   {
    
     var id = thedata[0];             
     var uniqBranchId = thedata[1];            
     var name  = thedata[2]; 
     var status = thedata[3]; 
    
         $('#update_id').val(id);
        $('#update_name').val(name);
        $("update_status select").val(status);
        $('#updateModel').modal('show');

   } 

 });

      });

      // Delete a record
      table.on('click', '.remove', function(e) {
        $tr = $(this).closest('tr');
        table.row($tr).remove().draw();
        e.preventDefault();
      });

      //Like record
      table.on('click', '.like', function() {
        alert('You clicked on Like button');
      });
    });
  </script>
</body>

</html>