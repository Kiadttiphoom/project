<?php
    include("/xampp/htdocs/project/condb.php");
    require('fpdf/fpdf.php');

/*     class PDF extends FPDF{
        function Header(){
            $this -> AddFont('THSarabunNewBold','','THSarabunNewBold.php');
            $this -> SetFont('THSarabunNewBold','',16);
            $this -> SetLeftmargin(15);
            $this -> Cell(0,10,iconv('utf-8','cp874','กลุ่มรับซื้อน้ำยางควนดินแดง'),0,1,'C');
            $this -> Cell(0,10,iconv('utf-8','cp874','เลขที่บิลใบเสร็จ : '.$Billcontractor_no),0,1,'L');
            $this -> Cell(0,10,iconv('utf-8','cp874','วันที่ : '.$row['Billcontractor_date'],),0,1,'L');
            $this -> Cell(0,10,iconv('utf-8','cp874','เวลา : '.$row['Billcontractor_time'],),0,1,'L');
            $this -> Cell(0,10,iconv('utf-8','cp874','ใบเสร็จรับซื้อน้ำยาง',),0,1,'C');
        }
    }
    $pdf=new FPDF('p','mm','a4');
    $pdf->AddPage();
    $pdf->AddFont('THSarabunNewBold','','THSarabunNewBold.php');
    $pdf->SetFont('THSarabunNewBold','',16);
    $pdf->Cell(20,10,iconv('utf-8','cp874','วันที่รับซื้อ',),1,0,'C');
    $pdf->Cell(40,10,iconv('utf-8','cp874','ชื่อลูกค้า',),1,0,'C');
    $pdf->Cell(30,10,iconv('utf-8','cp874','น้ำยางสด',),1,0,'C');
    $pdf->Cell(30,10,iconv('utf-8','cp874','%น้ำยาง',),1,0,'C');
    $pdf->Cell(30,10,iconv('utf-8','cp874','ราคาต่อหน่วย',),1,0,'C');
    $pdf->Cell(30,10,iconv('utf-8','cp874','คิดเป็นเงิน',),1,0,'C');

    $pdf -> Output(); */

    $id_receipt_contractor = $_GET['id_receipt_contractor'];
    //echo $Billcontractor_no;
    $date = date("Y/m/d");
    date_default_timezone_set("Asia/Bangkok"); 
    $today = date("H:i:s");
    $sql = "SELECT receipt_contractor.id_receipt_contractor, customer.name_customer, contractor.total_contractor,contractor.contractor_number, type_work.id_type_work , type_work.name_type_work,contractor.id_type_work,
    receipt_contractor.date_receipt_contractor, receipt_contractor.time_receipt_contractor, customer.address_customer, customer.tel_customer, contractor.no_contractor,employee.username,employee.name_employee,
    contractor.width_contractor,contractor.hight_contractor,  receipt_contractor.detail_contractor, receipt_contractor.address_contractor
   FROM receipt_contractor 
   INNER JOIN customer ON receipt_contractor.id_customer=customer.id_customer
   INNER JOIN employee ON receipt_contractor.id_employee=employee.username
   INNER JOIN contractor ON receipt_contractor.id_receipt_contractor=contractor.id_receipt_contractor
   INNER JOIN type_work ON contractor.id_type_work=type_work.id_type_work
WHERE receipt_contractor.id_receipt_contractor=('$id_receipt_contractor');";
    $result = mysqli_query($objCon,$sql);        
    while($row = $result->fetch_assoc()):
    $pdf=new FPDF("P","mm","A4");
    $pdf->AddPage();
            $pdf->AddFont('THSarabunNewBold','','THSarabunNewBold.php');
            $pdf->SetFont('THSarabunNewBold','',13);
            $pdf->SetY(3);
            $pdf->SetX(-30);
            $pdf->Cell(0,3,iconv('utf-8','cp874','วันที่ : '.$row['date_receipt_contractor']),0,1,'L');
            $pdf->SetX(-26.5);
            $pdf->Cell(0,5,iconv('utf-8','cp874','เวลา : '.$row['time_receipt_contractor']),0,1,'L');


            $pdf->SetFont('THSarabunNewBold','',20);
            $pdf->SetY(7);
            $pdf->SetX(90);
            $pdf->Cell(30,9,iconv('utf-8','cp874','บิลใบเสร็จรับเหมา',),0,0,'C');
            
            $pdf->SetY(18);
            $pdf->SetX(13);
            $pdf->SetFont('THSarabunNewBold','',17);
            $pdf->Cell(0,10,iconv('utf-8','cp874','ร้านสิริสุวรรณกระจกอลูมิเนียม'),0,1,'C');
            //Display INVOICE text
            
            $pdf->SetY(5);
            $pdf->SetX(10);
            $pdf->Image('/xampp/htdocs/project/owner/fpdf/logo.png',30,5,0,25);
            
            $pdf->SetY(20);
            $pdf->SetX(-65);
            $pdf->Cell(30,9,iconv('utf-8','cp874','เลขที่บิลใบเสร็จ',),1,0,'C');
            $pdf->Cell(25,9,iconv('utf-8','cp874','  '.$row['id_receipt_contractor'],),1,0,'L');

            $pdf->SetY(35);
            $pdf->SetX(10);
            $pdf->Cell(115,35,iconv('utf-8','cp874','',),1,0,'C');

            $pdf->SetY(25);
            $pdf->SetX(12);
            $pdf->SetFont('THSarabunNewBold','',13);
            $pdf->Cell(18,35,iconv('utf-8','cp874','ชื่อลูกค้า : ',),0,0,'L');

            $pdf->SetY(38);
            $pdf->SetX(25);
            $pdf->SetFont('THSarabunNewBold','',13);
            $pdf->Cell(19,9,iconv('utf-8','cp874','  '.$row['name_customer'],),0,0,'L');

            $pdf->SetY(32);
            $pdf->SetX(10);
            $pdf->SetFont('THSarabunNewBold','',13);
            $pdf->Cell(18,35,iconv('utf-8','cp874','ที่อยู่ : ',),0,0,'C');

            $pdf->SetY(45);
            $pdf->SetX(20);
            $pdf->SetFont('THSarabunNewBold','',13);
            $pdf->Cell(19,9,iconv('utf-8','cp874','  '.$row['address_contractor'],),0,0,'L');

            $pdf->SetY(46);
            $pdf->SetX(15);
            $pdf->SetFont('THSarabunNewBold','',13);
            $pdf->Cell(18,35,iconv('utf-8','cp874','เบอร์โทรศัพท์ : ',),0,0,'C');

            $pdf->SetY(59);
            $pdf->SetX(31);
            $pdf->SetFont('THSarabunNewBold','',13);
            $pdf->Cell(19,9,iconv('utf-8','cp874','  '.$row['tel_customer'],),0,0,'L');

            $pdf->SetY(35);
            $pdf->SetX(130);
            $pdf->Cell(70,35,iconv('utf-8','cp874','',),1,0,'C');

            $pdf->SetY(25);
            $pdf->SetX(132);
            $pdf->SetFont('THSarabunNewBold','',13);
            $pdf->Cell(18,35,iconv('utf-8','cp874','พนักงาน : ',),0,0,'C');

            $pdf->SetY(38);
            $pdf->SetX(147);
            $pdf->SetFont('THSarabunNewBold','',13);
            $pdf->Cell(19,9,iconv('utf-8','cp874',' '.$row['name_employee'],),0,0,'L');

            $pdf->SetY(32);
            $pdf->SetX(129.5);
            $pdf->SetFont('THSarabunNewBold','',13);
            $pdf->Cell(18,35,iconv('utf-8','cp874','ที่อยู่ : ',),0,0,'C');

            $pdf->SetY(45);
            $pdf->SetX(141);
            $pdf->SetFont('THSarabunNewBold','',13);
            $pdf->Cell(19,9,iconv('utf-8','cp874',' 7/1 ถนนประชาบำรุง ตำบลคูหาสวรรค์ ',),0,0,'L');
            $pdf->SetY(51);
            $pdf->SetX(141);
            $pdf->SetFont('THSarabunNewBold','',13);
            $pdf->Cell(19,9,iconv('utf-8','cp874',' อำเภอเมือง จังหวัดพัทลุง 93000  ',),0,0,'L');

            $pdf->SetY(46);
            $pdf->SetX(136);
            $pdf->SetFont('THSarabunNewBold','',13);
            $pdf->Cell(18,35,iconv('utf-8','cp874','เบอร์โทรศัพท์ : ',),0,0,'C');

            $pdf->SetY(59);
            $pdf->SetX(153);
            $pdf->SetFont('THSarabunNewBold','',13);
            $pdf->Cell(19,9,iconv('utf-8','cp874',' 074-626656 ',),0,0,'L');
            //Display Horizontal line

            //Billing Details
            
            //Display Invoice no
            $pdf->SetY(55);
            $pdf->SetX(-60);
            $pdf->SetFont('THSarabunNewBold','',13);
            $pdf->SetY(75);
            $pdf->SetX(10);
            $pdf->Cell(130,9,iconv('utf-8','cp874','รายการ',),1,0,'C');
            $pdf->Cell(30,9,iconv('utf-8','cp874','ขนาด',),1,0,'C');
            $pdf->Cell(15,9,iconv('utf-8','cp874','จำนวน',),1,0,'C');
            $pdf->Cell(15,9,iconv('utf-8','cp874','ราคารวม',),1,0,'C');

            

            $pdf->SetY(84);
            $pdf->SetX(140);
            $pdf->Cell(15,10,iconv('utf-8','cp874','กว้าง'),1,0,'C');
            $pdf->Cell(15,10,iconv('utf-8','cp874','ยาว'),1,0,'C');

            $pdf->SetY(84);
            $pdf->SetX(10);
            $pdf->Cell(130,90,iconv('utf-8','cp874',''.$row['name_type_work'],),1,0,'C');
            
            $pdf->Cell(15,90,iconv('utf-8','cp874',''.$row['width_contractor'].' เมตร',),1,0,'C');
            $pdf->Cell(15,90,iconv('utf-8','cp874',''.$row['hight_contractor'].' เมตร',),1,0,'C');
            $pdf->Cell(15,90,iconv('utf-8','cp874',''.$row['contractor_number']),1,0,'C');
            $pdf->Cell(15,90,iconv('utf-8','cp874',''.$row['total_contractor']),1,0,'C');

            $pdf->SetY(174);
            $pdf->SetX(10);


            $pdf->Cell(175,9,iconv('utf-8','cp874','จำนวนเงินรวมทั้งสิ้น',),1,0,'R');
            $pdf->Cell(15,9,iconv('utf-8','cp874',''.$row['total_contractor'].' บาท'),1,0,'R');
            



        endwhile;


    $pdf -> Output();

?>