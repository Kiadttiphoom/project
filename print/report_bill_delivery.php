<?php
    include("/xampp/htdocs/project/condb.php");
    require('fpdf/fpdf.php');

/*     class PDF extends FPDF{
        function Header(){
            $this -> AddFont('THSarabunNewBold','','THSarabunNewBold.php');
            $this -> SetFont('THSarabunNewBold','',16);
            $this -> SetLeftmargin(15);
            $this -> Cell(0,10,iconv('utf-8','cp874','กลุ่มรับซื้อน้ำยางควนดินแดง'),0,1,'C');
            $this -> Cell(0,10,iconv('utf-8','cp874','เลขที่บิลใบเสร็จ : '.$Billdelivery_no),0,1,'L');
            $this -> Cell(0,10,iconv('utf-8','cp874','วันที่ : '.$row['Billdelivery_date'],),0,1,'L');
            $this -> Cell(0,10,iconv('utf-8','cp874','เวลา : '.$row['Billdelivery_time'],),0,1,'L');
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

    $id_receipt_delivery = $_GET['id_receipt_delivery'];
    //echo $Billdelivery_no;
    $date = date("Y/m/d");
    date_default_timezone_set("Asia/Bangkok"); 
    $today = date("H:i:s");
    $sql = "SELECT receipt_delivery.id_receipt_delivery, customer.name_customer, delivery.total_delivery, delivery.delivery_number, product.id_product , product.name_product,delivery.id_product,
    receipt_delivery.date_receipt_delivery, receipt_delivery.time_receipt_delivery, delivery.price_delivery, customer.address_customer, customer.tel_customer, delivery.no_delivery,employee.username,employee.name_employee,
      customer.id_provinces, provinces.name_provinces,customer.id_amphures,amphures.name_amphures,customer.id_districts,districts.name_districts,customer.zip_code,receipt_delivery.address_delivery
     FROM receipt_delivery 
     INNER JOIN customer ON receipt_delivery.id_customer=customer.id_customer
     INNER JOIN employee ON receipt_delivery.id_employee=employee.username
     INNER JOIN delivery ON receipt_delivery.id_receipt_delivery=delivery.id_receipt_delivery
     INNER JOIN product ON delivery.id_product=product.id_product
     INNER JOIN provinces ON customer.id_provinces=provinces.id_provinces
     INNER JOIN amphures ON customer.id_amphures=amphures.id_amphures
     INNER JOIN districts ON customer.id_districts=districts.id_districts
    WHERE receipt_delivery.id_receipt_delivery=('$id_receipt_delivery');";
        $result2 = mysqli_query($objCon,$sql);  
        $data2 = mysqli_fetch_assoc($result2);
    
        $result1 = mysqli_query($objCon,$sql); 
        while($row = $result1->fetch_assoc()): 
    $pdf=new FPDF("P","mm","A4");
    $pdf->AddPage();
            $pdf->AddFont('THSarabunNewBold','','THSarabunNewBold.php');
            $pdf->SetFont('THSarabunNewBold','',13);
            $pdf->SetY(3);
            $pdf->SetX(-30);
            $pdf->Cell(0,3,iconv('utf-8','cp874','วันที่ : '.$data2['date_receipt_delivery']),0,1,'L');
            $pdf->SetX(-26.5);
            $pdf->Cell(0,5,iconv('utf-8','cp874','เวลา : '.$data2['time_receipt_delivery']),0,1,'L');


            $pdf->SetFont('THSarabunNewBold','',20);
            $pdf->SetY(7);
            $pdf->SetX(90);
            $pdf->Cell(30,9,iconv('utf-8','cp874','บิลใบเสร็จส่งของ',),0,0,'C');
            
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
            $pdf->Cell(25,9,iconv('utf-8','cp874','  '.$data2['id_receipt_delivery'],),1,0,'L');

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
            $pdf->Cell(19,9,iconv('utf-8','cp874','  '.$data2['name_customer'],),0,0,'L');

            $pdf->SetY(32);
            $pdf->SetX(10);
            $pdf->SetFont('THSarabunNewBold','',13);
            $pdf->Cell(18,35,iconv('utf-8','cp874','ที่อยู่ : ',),0,0,'C');

            $pdf->SetY(45);
            $pdf->SetX(22);
            $pdf->SetFont('THSarabunNewBold','',13);
            $pdf->multicell( 100 , 9 , iconv( 'UTF-8','cp874' ,'' .$data2['address_delivery'] ),0, 'L');
            $pdf->ln();
            
            $pdf->SetY(46);
            $pdf->SetX(15);
            $pdf->SetFont('THSarabunNewBold','',13);
            $pdf->Cell(18,35,iconv('utf-8','cp874','เบอร์โทรศัพท์ : ',),0,0,'C');

            $pdf->SetY(59);
            $pdf->SetX(31);
            $pdf->SetFont('THSarabunNewBold','',13);
            $pdf->Cell(19,9,iconv('utf-8','cp874','  '.$data2['tel_customer'],),0,0,'L');

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
            $pdf->Cell(19,9,iconv('utf-8','cp874',' '.$data2['name_employee'],),0,0,'L');

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
       
            $pdf->SetY(75);
            $pdf->SetX(10);
            $pdf->Cell(145,9,iconv('utf-8','cp874','รายการ',),1,0,'C');
            $pdf->Cell(15,9,iconv('utf-8','cp874','จำนวน',),1,0,'C');
            $pdf->Cell(15,9,iconv('utf-8','cp874','ราคา',),1,0,'C');
            $pdf->Cell(15,9,iconv('utf-8','cp874','ราคารวม',),1,1,'C');


         endwhile;         
            do{           
                $pdf->Cell(145,10,iconv('utf-8','cp874',''.$data2['name_product']),1,0,'C');
                $pdf->Cell(15,10,iconv('utf-8','cp874',''.$data2['delivery_number']),1,0,'C');
                $pdf->Cell(15,10,iconv('utf-8','cp874',''.$data2['price_delivery']),1,0,'C');
                $pdf->Cell(0,10,iconv('utf-8','cp874',''.$data2['total_delivery']),1,1,'C');
             }while($data2 = mysqli_fetch_assoc($result2));
        
             

             $sql3 = "SELECT SUM(total_delivery) AS grand_delivery
   FROM receipt_delivery 
   INNER JOIN customer ON receipt_delivery.id_customer=customer.id_customer
   INNER JOIN employee ON receipt_delivery.id_employee=employee.username
   INNER JOIN delivery ON receipt_delivery.id_receipt_delivery=delivery.id_receipt_delivery
   INNER JOIN product ON delivery.id_product=product.id_product
   WHERE receipt_delivery.id_receipt_delivery=('$id_receipt_delivery');";

$result3 = $objCon->query($sql3);
while($row3 = $result3->fetch_assoc()):

             $pdf->Cell(175,9,iconv('utf-8','cp874','รวมเงิน',),1,0,'R');
             $pdf->Cell(15,9,iconv('utf-8','cp874',''.$row3['grand_delivery'].' บาท'),1,1,'R');

            endwhile;
             
    $pdf -> Output();


?>