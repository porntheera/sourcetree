@extends('carcare')

@section('content')
    <div class="col-lg-12">
                        <h1 class="page-header">
                              <small>List service</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class='fa fa-home fa-1x'></i>  <a href="{{url('test')}}"> Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> List service
                            </li>


                            <div class="row">
    <div class="col-md-6 col-md-offset-6">
<div class="text-right">

<div class='menusearch'>
                      <form action='/search' class='searchform' method='get'>
                        <input class='searchfield' id='q' name='q' onblur='if(this.value==&apos;&apos;)this.value=this.defaultValue;' onfocus='if(this.value==this.defaultValue)this.value=&apos;&apos;' type='text' value=''/>
                        <input class='searchbutton' src='http://1.bp.blogspot.com/-N_4TWVUmXv4/UDdKJf5NwCI/AAAAAAAAIgY/AGrKXgwkrTo/s1600/tombolcari.gif' style='cursor:pointer;vertical-align:top' type='image' value='Go'/>
                      </form>
                    </div>

</div>
</div>
</div>
                      

                       </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">

                        <form role="form">

                            <div class="form-group">
                                <h3 style="color:#808080"><strong>รายการใช้บริการ</strong></h3>
                            </div>
                        </div></form>

<div class="container">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">รับ-ฝากรถ</a></li>
    <li><a data-toggle="tab" href="#menu1">ล้างรถ</a></li>
    <li><a data-toggle="tab" href="#menu2">ซ่อมรถ</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">

<div class="col-lg-12">
                        <br> <h4 style="color:#111111"><strong>รับ-ฝากรถ</strong></h4>

                        <div class="table-responsive" style="color:#363636">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr class="danger">
                                        <th>ทะเบียน</th>
                                        <th>รายการ</th>
                                        <th>ชื่อลูกค้า</th>
                                        <th>เบอร์ติดต่อ</th>
                                        <th>check-in</th>
                                        <th>check-out</th>
                                         <th>สถานะ</th>
                                    </tr>
                                </thead>
                               <tbody>
                                <tr>
                                       <tr>
                                        <td>ชช1563</td>
                                        <td>ฝากรถ(รายวัน)</td>
                                        <td>พรธีรา</td>
                                        <td>0831860998</td>
                                        <td>15/02/2559 12.30</td>
                                        <td>15/03/2559 13.45</td>
                                        <td><i class='fa fa-check fa-1x' style="color:#00CC00"></i>ชำระแล้ว</td>
                                    </tr> 
                                    <tr>        
                                        <tr>
                                        <td>กอ670</td>
                                        <td>ฝากรถ(รายวัน)</td>
                                        <td>ลูกน้ำ</td>
                                        <td>0815991349</td>
                                        <td>25/02/2559 12.30</td>
                                        <td>25/02/2559 18.25</td>
                                        <td><i class='fa fa-check fa-1x' style="color:#00CC00"></i>ชำระแล้ว</td>
                                    </tr> 
                                    <tr>
                                       <tr>
                                        <td>สน8000</td>
                                        <td>ฝากรถ(รายวัน)</td>
                                        <td>ธิติพงศ์</td>
                                        <td>082777843</td>
                                        <td>1/02/2559 9.05</td>
                                        <td>1/02/2559 16.25</td>
                                        <td><i class='fa fa-check fa-1x' style="color:#00CC00"></i>ชำระแล้ว</td>
                                    </tr> 
                                    </tr> </tbody>
                            </table>
                        </div>
                    </div>

    </div>
    <div id="menu1" class="tab-pane fade">
      
 <div class="col-lg-12">
                         <br><h4 style="color:#111111"><strong>ล้างรถ</strong></h4>
                        <div class="table-responsive" style="color:#363636">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr class="warning">
                                        <th>ทะเบียน</th>
                                        <th>รายการ</th>
                                        <th>ชื่อลูกค้า</th>
                                        <th>เบอร์ติดต่อ</th>
                                        <th>check-in</th>
                                        <th>check-out</th>
                                         <th>สถานะ</th>
                                    </tr>
                                </thead>
                               <tbody>
                                    <tr>  
                                    <tr>
                                        <td>ขก1122</td>
                                        <td>ล้างอัดฉีด</td>
                                        <td>ปพิชญญา</td>
                                        <td>0898783327</td>
                                        <td>15/03/2559 15.00</td>
                                        <td>15/03/2559 20.25</td>
                                        <td>ไม่ได้ชำระ     <i class='fa fa-check-square-o fa-1x' style="color:#FF0000"></i>ไม่ได้ส่งรถคืน</td>
                                    </tr>   
                                        <tr>
                                        <td>กอ670</td>
                                        <td>ล้างสีดูดฝุ่น</td>
                                        <td>ลูกน้ำ</td>
                                        <td>0815991349</td>
                                        <td>15/03/2559 12.30</td>
                                        <td>15/03/2559 14.25</td>
                                        <td>ชำระแล้ว     <i class='fa fa-check-square-o fa-1x' style="color:#00CC00"></i>ส่งรถคืน</td>
                                    </tr> 
                                     <tr>
                                        <td>ชช1563</td>
                                        <td>ล้างเคลือบสี</td>
                                        <td>พรธีรา</td>
                                        <td>0831860998</td>
                                        <td>10/03/2559 11.08</td>
                                        <td>10/03/2559 12.45</td>
                                        <td>ชำระแล้ว     <i class='fa fa-check-square-o fa-1x' style="color:#00CC00"></i>ส่งรถคืน</td>
                                    </tr> 
                                    </tr> </tbody>
                            </table>
                        </div>
                    </div>

    </div>
    <div id="menu2" class="tab-pane fade">
       <div class="col-lg-12">
                    <br><h4 style="color:#111111"><strong>ซ่อมรถ</strong></h4>
                        <div class="table-responsive" style="color:#363636">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr class="info">
                                       <th>ทะเบียน</th>
                                        <th>รายการ</th>
                                        <th>ชื่อลูกค้า</th>
                                        <th>เบอร์ติดต่อ</th>
                                        <th>check-in</th>
                                        <th>check-out</th>
                                         <th>สถานะ</th>
                                    </tr>
                                </thead>
                               <tbody>
                                    <tr>
                                        <td colspan="7" class="text-center">ไม่พบรายการ</td>
                                    </tr> </tbody>
                            </table>
                        </div>
                    </div>       
    </div>
  </div>
</div>

                </div>
                <!-- /.row -->

@endsection