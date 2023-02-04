<?php
	include("/xampp/htdocs/project/condb.php");
     
    session_start();
    if($_SESSION['id_employee'] == "")
    {
        echo "Please Login!";
        exit();
    }

    include("/xampp/htdocs/project/condb.php");

    $strSQL = "SELECT * FROM employee WHERE id_employee = '".$_SESSION['id_employee']."' ";
    $objQuery = mysqli_query($objCon,$strSQL);
    $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
?>
<html lang="en">

<head>
    
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/sb-admin-2.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
    
    
    
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/sb-admin-2.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
    
    
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sirisuwan Aluminum Glass</title>

    <!-- Favicon  -->
    <link rel="icon" href="/project/employee/img/headlogo.png">

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
        <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="/project/admin/index_admin.php">
    <div class="sidebar-brand-icon rotate-n-15">
    <img src="img/logo.png" alt="Girl in a jacket" width="60" height="60">
    </div>
    <div class="sidebar-brand-text mx-3">admin</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="/project/admin/index_admin.php">
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
    <a class="nav-link" href="/project/admin/customer.php">
        <i class="fa fa-address-card" aria-hidden="true"></i>
        <span>ข้อมูลลูกค้า</span></a>
</li>


<li class="nav-item">
    <a class="nav-link" href="/project/admin/company.php">
        <i class="fa fa-building" aria-hidden="true"></i>
        <span>ข้อมูลบริษัท</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="/project/admin/employee.php">
        <i class="fa fa-user" aria-hidden="true"></i>
        <span>ข้อมูลพนักงาน</span></a>
</li>





<!--    <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsetwo"
        aria-expanded="true" aria-controls="collapsetree">
        <i class="fa fa-building" aria-hidden="true"></i>
        <span>ข้อมูลบริษัท</span>
    </a>
    <div id="collapsetwo" class="collapse" aria-labelledby="headingtwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="/project/system/company/company.php">ข้อมูลบริษัท</a>
            <a class="collapse-item" href="/project/system/company/addcompany.php">เพิ่มข้อมูลบริษัท</a>
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
            <a class="collapse-item" href="/project/admin/product.php">ข้อมูลสินค้า</a>
            <a class="collapse-item" href="/project/admin/type_product.php">ประเภทสินค้า</a>
            <a class="collapse-item" href="/project/admin/type_work.php">ชนิดงาน</a>
            <a class="collapse-item" href="/project/admin/unit.php">หน่วยนับ</a>
        </div>
    </div>
</li>


<li class="nav-item">
    <a class="nav-link" href="/project/admin/stock.php">
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
            <a class="collapse-item" href="admin.php">ข้อมูลพนักงาน</a>
            <a class="collapse-item" href="admin_update.php">เพิ่มข้อมูลพนักงาน</a>

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
            <a class="collapse-item" href="/project/admin/buy.php">ข้อมูลซื้อ</a>
            <a class="collapse-item" href="/project/admin/buy_add.php">เพิ่มข้อมูลซื้อ</a>
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
            <a class="collapse-item" href="/project/admin/sell.php">ข้อมูลขาย</a>
            <a class="collapse-item" href="/project/admin/sell_add.php">เพิ่มข้อมูลขาย</a>
        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsesix"
        aria-expanded="true" aria-controls="collapsesix">
        <i class="fas fa-truck-moving"></i>
        <span>ข้อมูลส่งสินค้า</span>
    </a>
    <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="/project/admin/delivery.php">ข้อมูลการส่ง</a>
            <a class="collapse-item" href="/project/admin/sell_add.php">เพิ่มข้อมูลการส่ง</a>
        </div>
    </div>
</li>


<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseseven"
        aria-expanded="true" aria-controls="collapseseven">
        <i class="fa fa-table" aria-hidden="true"></i>
        <span>ข้อมูลการรับเหมาสินค้า</span>
    </a>
    <div id="collapseseven" class="collapse" aria-labelledby="headingseven" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="/project/admin/contractor.php">ข้อมูลการรับเหมา</a>
            <a class="collapse-item" href="/project/admin/contractor_add.php">เพิ่มข้อมูลการรับเหมา</a>
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

                    
                    <marquee direction="left"><font size=5 color=#000><i class="fas fa-bullhorn fa-sm fa-fw mr-2 text-gray-800"></i>  ร้ า น สิ ริ สุ ว ร ร ณ ก ร ะ จ ก อ ลู มิ เ นี ย ม ยิ น ดี ต้ อ น รั บ</font></marquee>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-800 small"><font color=#000><?php echo $objResult["status_employee"];?>, <?php echo $objResult["name_employee"];?></font></span>
                                <img class="img-profile rounded-circle"
                                    src="img/user.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="profile.php" >
                                    <i class="far fa-address-card mr-2 text-gray-400"></i>
                                    ข้อมูลส่วนตัว
                                </a>
                                <a class="dropdown-item" href="/project/login.php" data-toggle="modal" data-target="#logoutModal">
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

                            <div class="card shadow-lg mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h5 class="m-0 font-weight-bold"><font color="#000">ข้อมูลซื้อสินค้า</font></h5>
                                    
                                
                                </div>
                                <!-- Card Body -->
                                <div class="container col-lg-12 py-2 " >
                                <a href="/project/admin/buy_add.php" class="btn btn-success pull-right" type="button" style="width:%"><i class="fa fa-plus" aria-hidden="true"></i> เพิ่มข้อมูลซื้อสินค้า</a>
                <!-- Fixed header table-->
                <div class="table-responsive">
                    <table class="table table-fixed" >
                     <?php
	include("/xampp/htdocs/project/condb.php");
     
    ?>     
                        
                        <style>
td {
  border: 0.5px solid;
}
</style>

    <table id="dataTable" class="table table-striped table-hover" >
            
            <thead style="background-color:#f26b5f;">
                <tr >
                    <th><center><font size=2 color=#FFFFFF><b>เลขที่ใบเสร็จซื้อ</b></font></center></th>
                    <th><center><font size=2 color=#FFFFFF><b>ชื่อพนักงาน</b></font></center></th>
                    <th><center><font size=2 color=#FFFFFF><b>ชื่อบริษัท</b></font></center></th>
                    <th><center><font size=2 color=#FFFFFF><b>เบอร์ติดต่อ</b></font></center></th>
                    <th><center><font size=2 color=#FFFFFF><b>วันที่ซื้อ</b></font></center></th>
                    <th><center><font size=2 color=#FFFFFF><b>เวลาที่ซื้อ</b></font></center></th>
                    <th><center><font size=2 color=#FFFFFF><b>ราคารวมทั้งหมด</b></font></center></th>
                    <th><center><font size=2 color=#FFFFFF><b>สถานะ</b></font></center></th>
                    <th><center><font size=2 color=#FFFFFF><i class="fas fa-align-justify"></font></center></th>
                </thead>
            <tbody>
            
           




            <?php
                    $sql = " SELECT receipt_buy.id_receipt_buy , employee.name_employee, company.name_company, company.tel_company, receipt_buy.date_receipt_buy, receipt_buy.time_receipt_buy, receipt_buy.grand_buy, receipt_buy.status
                    FROM receipt_buy 
                    INNER JOIN employee on receipt_buy.id_employee = employee.username 
                    INNER JOIN company on receipt_buy.id_company = company.id_company ORDER BY receipt_buy.id_receipt_buy";
                    $result = $objCon->query($sql);
                    while($row = $result->fetch_assoc()):

    
                        $sql1 = " SELECT  SUM(total_buy) AS grand_buy
                        FROM receipt_buy 
                        INNER JOIN buy ON receipt_buy.id_receipt_buy=buy.id_receipt_buy
                        WHERE buy.id_receipt_buy = '$row[id_receipt_buy]';";
                        $result1 = $objCon->query($sql1);
                        while($row1 = $result1->fetch_assoc()):
            ?>    
                   
            
                      <tr>
                          
                          <td><center><font size=2 color="#000"><b><?php echo $row['id_receipt_buy']; ?></b></font></center></td>
                          <td><center><font size=2 color="#000"><b><?php echo $row['name_employee']; ?></b></font></center></td>
                          <td><center><font size=2 color="#000"><b><?php echo $row['name_company']; ?></b></font></center></td>
                          <td><center><font size=2 color="#000"><b><?php echo $row['tel_company']; ?></b></font></center></td>
                          <td><center><font size=2 color="#000"><b><?php echo $row['date_receipt_buy']; ?></b></font></center></td>
                          <td><center><font size=2 color="#000"><b><?php echo $row['time_receipt_buy']; ?></b></font></center></td>
                          <td><center><font size=2 color="#000"><b><?php echo $row1['grand_buy']; ?>  บาท</font></b></center></td>
                          <!-- <td><center><font size=2><?php echo $row['status']; ?></font></center></td> -->
                          <!-- <td>
                            <form action="buy_change.php?id_receipt_buy=<?php echo $row['id_receipt_buy']; ?>" method="post">
                          <select name='status' id='status'>
                            <option value = '0'>กำลังสั่งซื้อ</option>
                            <option value = '1'>สั่งซื้อสำเร็จ</option>
                            <option value = '2'>ยกเลิกสั่งซื้อ</option>
                            <option value = '3'>รออนุมัติ</option>
                            <option value = '4'>อนุมัติ</option>
                            </select>
                            <input type='submit'>
                            </form>

                     </td> -->
                          <td class="text-center" ><font size=2><b><!-- <a href="buy_change.php?Action=Change&id_receipt_buy=<?php echo $row['id_receipt_buy']; ?>" onclick="return confirm('ยืนยันการเปลี่ยนสถานะ')"> -->
                                <?php if($row ['status']=='1'){ 
                                    echo "<font color=\"green\">สั่งซื้อสำเร็จ</font>";
                                    }
                                    elseif($row ['status']=='2'){ 
                                        echo "<font color=\"red\">ยกเลิกสั่งซื้อ</font>";
                                    } 
                                    elseif($row ['status']=='3'){ 
                                        echo "<font color=\"purple\">รออนุมัติ</font>";
                                    }  
                                    elseif($row ['status']=='4'){ 
                                        echo "<font color=\"blue\">อนุมัติ</font>";
                                    } 
                                    elseif($row ['status']=='0') { 
                                        echo "<font color=\"orange\">กำลังสั่งซื้อ</font>";
                                    } 
                                    else { 
                                        echo "<font color=\"sky\">มีปัญหา</font>";
                                    }?></a></b></font>
                                    
                                </td>
                          <td><center>
                          <button type="button" class="btn btn-primary btn-sm"
                                                                    href="sell-buy/buyadd.php"><a
                                                                        href="print/report_bill_buy.php?id_receipt_buy=<?php echo $row['id_receipt_buy']; ?>"
                                                                        target="_Blank" class="text-white"><i
                                                                            class='fas fa-print fa-lg'></i>
                                                                        </a></button>
                          <a href="buy_detail.php?id_receipt_buy=<?php echo $row['id_receipt_buy']; ?>"><button type="button" class="btn btn-success btn-sm"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#"><i
                                                                         class='fa fa-info-circle fa-lg'></i></button></a>
                         <!--  <td><center><a href='edit.php?id_product=<?php echo $row['id_product']; ?>&name_product=<?php echo $row['name_product']; ?>&id_type_product=<?php echo $row['id_type_product']; ?>&price_buy=<?php echo $row['price_buy']; ?>&price_sell=<?php echo $row['price_sell']; ?>'><button type='button' class='btn btn-success'>แก้ไข</button></a></center></td> -->
                        
                          <a href="buy_receipt_delete.php?id_receipt_buy=<?php echo $row['id_receipt_buy']; ?>"><button type="button" class="btn btn-danger btn-sm"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#delete_data"><i
                                                                            class='fas fa-trash-alt fa-lg'></i></button></a></center></td>
                         
                          

                       </tr>
                     <?php endwhile ?>
                     <?php endwhile ?>
                
                    </tbody>
                                
            
        </table>
                    
                    </table>
                
            </div>
            
        </div>
                                        
                                        <br>
                                        
                                        
    </div>
                                </div>
                       
                            
                    

                        <!-- Pie Chart -->
        

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">คุณแน่ใจหรือไม่?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">ยกเลิก</button>
                    <a class="btn btn-primary" href="/project/login.php">ออกระบบ</a>
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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>


    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    
</body>

</html>