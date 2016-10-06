@extends('carcare')

@section('content')

<!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                              <small>Service</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class='fa fa-home fa-1x'></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class='fa fa-automobile fa-1x'></i>  Service
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- Flot Charts -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">Car Care System</h2>
                        <p class="lead">Car Care System On Android Application (ระบบคาร์แคร์ผ่านแอพแอนดรอยด์) เป็นโปรแกรมควบคุมระบบคาร์แคร์ไว้ใช้สำหรับแอดมิน ที่เอาไว้บริหารการจัดการในเรื่องของธุรกิจคาร์แคร์ ซึ่งโปรแกรม สามารถรองรับธุรกิจคาร์แคร์ได้หลากหลายรูปแบบไม่ว่าจะเป็นในเรื่องของการให้บริการ รับ-ฝากรถ ล้างรถ ซ่อมรถ ซึ่งระบบคาร์แคร์จะควบคุมทุกอย่างที่ลูกค้าต้องการใช้บริการ.</p>
                    </div>
                </div>
                <!-- /.row -->

               
               
              

                <div class="row">
                    <div class="col-lg-4">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class='fa fa-automobile fa-1x'></i> รับ-ฝากรถ</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-donut-chart"><h3 class="panel-title"><i class='fa fa-automobile fa-1x'></i> รายละเอียด</h3>
                                </div>

                                <div class="text-right">
                                    <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class='fa fa-automobile fa-1x'></i> ล้างรถ</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-line-chart"><h3 class="panel-title"><i class='fa fa-automobile fa-1x'></i> รายละเอียด</h3>
                                </div>
                                <div class="text-right">
                                    <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>

                                   </div>
                        </div>
                    </div>



                    <div class="col-lg-4">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class='fa fa-automobile fa-1x'></i> ซ่อมรถ</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-bar-chart"><h3 class="panel-title"><i class='fa fa-automobile fa-1x'></i> รายละเอียด</h3>
                                </div></div>
                                <div class="text-right">
                                    <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
@endsection