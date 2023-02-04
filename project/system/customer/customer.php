<?php
    session_start();
    if($_SESSION['id_employee'] == "")
    {
        echo "Please Login!";
        exit();
    }

    include("/xampp/htdocs/project/condb.php");
    $sql = "SELECT * FROM provinces";
    $strSQL = "SELECT * FROM employee WHERE id_employee = '".$_SESSION['id_employee']."' ";
    $objQuery = mysqli_query($objCon,$strSQL);
    $query = mysqli_query($objCon, $sql);
    $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
?>

<html lang="en">

<head>
    
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/sb-admin-2.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
    
    
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sirisuwan Aluminum Glass</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    
    <!-- Swal.fire -->
    <script src="sweetalert2.all.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
    
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    
    
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/project/employee/index_employee.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Employee</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/project/employee/index_employee.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>หน้าหลัก</span></a>
            </li>
            
            <hr class="sidebar-divider">
            
         <!--   <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseone"
                    aria-expanded="true" aria-controls="collapseone">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>ข้อมูลลูกค้า</span>
                </a>
                <div id="collapseone" class="collapse" aria-labelledby="headingone" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/project/system/customer/customer.php">ข้อมูลลูกค้า</a>
                        <a class="collapse-item" href="/project/system/customer/addcustomer.php">เพิ่มข้อมูลลูกค้า</a>
                    </div>
                </div>
            </li> -->
    
             <li class="nav-item">
                <a class="nav-link" href="/project/employee/system/customer/customer.php">
                    <i class="fa fa-address-card" aria-hidden="true"></i>
                    <span>ข้อมูลลูกค้า</span></a>
            </li>
            
            
           <li class="nav-item">
                <a class="nav-link" href="/project/employee/system/company/company.php">
                    <i class="fa fa-building" aria-hidden="true"></i>
                    <span>ข้อมูลบริษัท</span></a>
            </li>
           
           
           
           
       <!--    <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsetwo"
                    aria-expanded="true" aria-controls="collapsetree">
                    <i class="fa fa-building" aria-hidden="true"></i>
                    <span>ข้อมูลบริษัท</span>
                </a>
                <div id="collapsetwo" class="collapse" aria-labelledby="headingtwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/project/system/customer/customer.php">ข้อมูลบริษัท</a>
                        <a class="collapse-item" href="/project/system/customer/addcustomer.php">เพิ่มข้อมูลบริษัท</a>
                    </div>
                </div>
            </li> -->

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsethree"
                    aria-expanded="true" aria-controls="collapsethree">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    <span>ข้อมูลสินค้า</span>
                </a>
                <div id="collapsethree" class="collapse" aria-labelledby="headingthree" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/project/employee/system/product/product.php">ข้อมูลสินค้า</a>
                        <a class="collapse-item" href="/project/employee/system/product/type_product.php">ประเภทสินค้า</a>
                    </div>
                </div>
            </li>
        
            
            <li class="nav-item">
                <a class="nav-link" href="/project/employee/system/product/stock.php">
                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                    <span>ข้อมูลคลังสินค้า</span></a>
            </li>
             <hr class="sidebar-divider">
            <!-- Nav Item - Utilities Collapse Menu -->
            
            
           <!--  <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsetwo"
                    aria-expanded="true" aria-controls="collapsetwo">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>ข้อมูลพนักงาน</span>
                </a>
                <div id="collapsetwo" class="collapse" aria-labelledby="headingtwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="employee.php">ข้อมูลพนักงาน</a>
                        <a class="collapse-item" href="employee_update.php">เพิ่มข้อมูลพนักงาน</a>

                    </div>
                </div>
            </li> -->


            <!-- Nav Item - Tables -->
             <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsefour"
                    aria-expanded="true" aria-controls="collapsefour">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    <span>ข้อมูลซื้อสินค้า</span>
                </a>
                <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/project/employee/system/buy/buy.php">ข้อมูลซื้อ</a>
                        <a class="collapse-item" href="/project/employee/system/buy/addbuy.php">เพิ่มข้อมูลซื้อ</a>
                    </div>
                </div>
            </li>
            
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsefive"
                    aria-expanded="true" aria-controls="collapsefive">
                    <i class="fas fa-comment-dollar"></i>
                    <span>ข้อมูลขายสินค้า</span>
                </a>
                <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/project/employee/system/sell/sell.php">ข้อมูลขาย</a>
                        <a class="collapse-item" href="/project/employee/system/sell/addsell.php">เพิ่มข้อมูลขาย</a>
                    </div>
                </div>
            </li>
            
            
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsesix"
                    aria-expanded="true" aria-controls="collapsesix">
                    <i class="fa fa-table" aria-hidden="true"></i>
                    <span>ข้อมูลการรับเหมาสินค้า</span>
                </a>
                <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/project/employee/system/contractor/contractor.php">ข้อมูลการรับเหมา</a>
                        <a class="collapse-item" href="/project/employee/system/contractor/addcontractor.php">เพิ่มข้อมูลการรับเหมา</a>
                    </div>
                </div>
            </li>
            

            

   <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $objResult["status_employee"];?>, <?php echo $objResult["name_employee"];?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                
                                <a class="dropdown-item" href="/project/login-register/login.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    ออกระบบ
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                            <div class="card shadow mb-4">
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">ข้อมูลลูกค้า</h6>
                                
                                </div>
                                <!-- Card Body -->
                                    <div class="container col-lg-12 py-2 " >

                                    <button type="button" class="btn btn-success pull-right" data-bs-toggle="modal" data-bs-target="#add_customer_modal">
  + เพิ่มข้อมูลลูกค้า
</button>

                <div class="table-responsive">
                    <table class="table table-fixed">
                     <?php
	include("/xampp/htdocs/project/condb.php"); 
    ?>   
                        
                        <table class="table table-bordered table-striped table-hover ">
            <thead >
                <tr class="bg-primary " >
                    <th><center><font size=2 color=#FFFFFF>รหัสลูกค้า</font></center></th>
                    <th><center><font size=2 color=#FFFFFF>คำนำหน้า</font></center></th>
                    <th><center><font size=2 color=#FFFFFF>ชื่อลูกค้า</font></center></th>
                    <th><center><font size=2 color=#FFFFFF>เบอรโทรศัพท์</font></center></th>
                    <th><center><font size=2 color=#FFFFFF>ที่อยู่</font></center></th>
                    <th><center><font size=2 color=#FFFFFF>จังหวัด</font></center></th>
                    <th><center><font size=2 color=#FFFFFF>อำเภอ</font></center></th>
                    <th><center><font size=2 color=#FFFFFF>ตำบล</font></center></th>
                    
                    <th><center><font size=2 color=#FFFFFF><i class="fas fa-align-justify"></font></center></th>
                </thead>
            <tbody>
     
                
                            <?php
                    $sql = " SELECT * FROM customer ";

                    $result = $objCon->query($sql);

            ?>   

                   
            
                     <?php while($row = $result->fetch_assoc()): ?>
                      <tr>
                        <td><center><font size=2><?php echo $row['id_customer']; ?></font></center></td>
                        <td><center><font size=2><?php echo $row['prefix_name']; ?></font></center></td>
                          <td><center><font size=2><?php echo $row['name_customer']; ?></font></center></td>
                          <td><center><font size=2><?php echo $row['tel_customer']; ?></font></center></td>
                          <td><center><font size=2><?php echo $row['id_provinces']; ?></font></center></td>
                          <td><center><font size=2><?php echo $row['id_amphures']; ?></font></center></td>
                          <td><center><font size=2><?php echo $row['id_districts']; ?></font></center></td>
                          <td><center><font size=2><?php echo $row['address_customer']; ?></font></center></td>
                          <td><center><font size=2>
                                <a href='edit_customer.php?id_customer=<?php echo $row['id_customer']; ?>
                                        &prefix_name=<?php echo $row['prefix_name']; ?>
                                        &name_customer=<?php echo $row['name_customer']; ?>
                                        &tel_customer=<?php echo $row['tel_customer']; ?>
                                        &province=<?php echo $row['province']; ?>
                                        &district=<?php echo $row['amphure']; ?>
                                        &amphure=<?php echo $row['district']; ?>
                                        &address_customer=<?php echo $row['address_customer']; ?>'>
                            <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#edit_customer_modal">
                                <i class='fas fa-edit'></i> แก้ไข</button></font>

                                
                        <font size=2><a href='delete_customer.php?id_customer=<?php echo $row['id_customer']; ?>'><button type="button" class="btn btn-danger btn-sm"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#delete_data"><i
                                                                            class='fas fa-trash-alt'></i> ลบ</button></font></center></td>
                       </tr>
                     <?php endwhile ?>
                    </tbody>

            
        </table>
                    
                    </table>
                
            </div>
            
        </div>
                                        
                                        <br>
    
    <div class="modal fade" id="edit_customer_modal" tabindex="0" aria-labelledby="edit_customer_modal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
             <div class="modal-content">
        
             

            </div>
         </div>
    </div>
        
                               
                               
                               
                                        <div class="modal fade" id="add_customer_modal" tabindex="0" aria-labelledby="add_customer_modal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">


    
        
        
        <form name="addcustomer" method="post" action="save_customer.php" style="width: 100%; margin: 0 auto;" class="text-center mt-5">
            <div class="container-fluid">

                            <div class="card shadow mb-12">
                                <div
                                    class="card-header py-3 flex-row align-items-center justify-content-between">
                                    <center><h6 class="m-0 font-weight-bold text-primary">เพิ่มข้อมูลลูกค้า</h6></center>                           
                                </div><br>
        
            <!-- 2 column grid layout with text inputs for the first and last names -->
                                <?php
                                                    $sql= "Select Max(substr(id_customer,-3))+1 as MaxID from customer";
                                                    $objQuery = mysqli_query($objCon,$sql);
                                                    $data=mysqli_fetch_assoc($objQuery);              
                                                    $new_id = $data['MaxID'];
                                                    if($new_id==''){
                                                        $id_customer="C001";
                                                    }else{
                                                        $id_customer="C".sprintf("%03d",$new_id);
                                                    }
                                                    ?>
                                
                                

                <table style="width:90%" class="text-center"> 

                <style>
table, th, td {
  border:0px solid black;
}
</style>
  <tr>
    <td style="width:30%">รหัสลูกค้า</td>
    <td><input class="form-control text-center" name="id_customer" value="<?php echo $id_customer; ?>" type="text" id="id_customer"  readonly aria-describedby="text" required style="width:50%"/></td>
  </tr>
  <tr>
    <td style="width:30%">คำนำหน้า</td>
    <td><select name="prefix_name" id="prefix_name" class="form-control text-center" style="width:35%">
                            <option value="">เลือกคำนำหน้า</option>
                            <option value="นาย">นาย</option>
                            <option value="นาง">นาง</option>
                            <option value="น.ส.">นางสาว</option>
                            <option value="Mr.">MR</option>
                            <option value="Mrs. ">MRS</option>
                            <option value="Ms. ">MS</option>
                            <option value="Miss">MISS</option>
                            <option value="Dr.">Dr.</option>
                        </select></td>
  </tr>
  <tr>
    <td style="width:30%">ชื่อ</td>
    <td style="width:100%"><input class="form-control text-center" name="name_customer" type="text" id="name_customer" class="form-control" placeholder="ชื่อลูกค้า" aria-describedby="text" required style="width:50%"/></td>
  </tr>
    <tr>
    <td style="width:30%">เบอรโทรศัพท์</td>
    <td style="width:100%"><input class="form-control text-center" name="tel_customer" type="text" id="tel_customer" class="form-control" placeholder="เบอร์โทรศัพท์" aria-describedby="text" required style="width:50%"/></td>
  </tr>
  <tr>
    <td style="width:30%">จังหวัด</td>
    <td style="width:100%"><select name="province_id" id="province" class="form-control text-center" style="width:50%">
                            <option value="">เลือกจังหวัด</option>
                            <?php while($result = mysqli_fetch_assoc($query)): ?>
                                <option value="<?=$result['id']?>"><?=$result['name_th']?></option>
                            <?php endwhile; ?>
                        </select></td>
  </tr>
    <tr>
    <td style="width:30%">อำเภอ</td>
    <td style="width:100%"><select name="amphure_id" id="amphure" class="form-control text-center" style="width:50%">
                            <option value="">เลือกอำเภอ</option>
                        </select></td>
  </tr>
    <tr>
    <td style="width:30%">ตำบล</td>
    <td style="width:100%"><select name="district_id" id="district" class="form-control text-center" style="width:50%">
                            <option value="">เลือกตำบล</option>
                        </select></td>
  </tr>
  <tr>
    <td style="width:30%">ที่อยู่</td>
    <td style="width:100%"><textarea input class="form-control text-center" name="address_customer" type="text" id="address_customer" class="form-control" placeholder="ที่อยู่" aria-describedby="text" required style="width:"></textarea></td>
  </tr>
</table>
<br>
<div>
                <button type="submit" name="submit" value="Save" class="btn btn-primary" >เพิ่มข้อมูล</button>
                <a class="btn btn-danger" href="customer.php" >ยกเลิก</a>
            </div> <br>
            </div>  
            <br>   
            
            </div>
                                
            </div>
    </div>

    
     </form>
      <div>
       
      </div>
        <br>
    </div>
  </div>
</div>
                                
                                <br>
    </div>
                                </div>
                            </div>

                </div>
                <!-- /.container-fluid -->

    

    </div>
    <!-- End of Page Wrapper -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="logoutModal">คุณแน่ใจหรือไม่?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">ยกเลิก</button>
                    <a class="btn btn-primary" href="/project/login/login.php">ออกระบบ</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="js/demo/chart-bar-demo.js"></script>
    <script src="assets/jquery.min.js"></script>
<script src="assets/script.js"></script>
</body>

</html>