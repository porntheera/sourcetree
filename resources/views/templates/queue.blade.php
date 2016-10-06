@extends('carcare')

@section('content')

 <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                              <small>Queue service</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class='fa fa-home fa-1x'></i>  <a href="{{url('home')}}">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class='fa fa-automobile fa-1x'></i>  Queue service
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <p><a href="{{url('book_queue')}}" class="btn btn-success">จองคิว</a></p>
                        <h3 style="color:#8B7D7B"><strong>รับ-ฝากรถ</strong></h3>

                                <table class="table table-striped table-with-header">


                        <div class="table-responsive" style="color:#363636">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    
                                    <tr class="danger">
                                        <th>ลำดับ</th>
                                        <th>ทะเบียน</th>
                                        <th>รุ่น</th>
                                        <th>รายการ</th>
                                        <th>ชื่อลูกค้า</th>
                                        <th>เบอร์ติดต่อ</th>
                                        <th>check-in</th>
                                    </tr>
                                    
                                </thead>
                                <tbody>
                                    @foreach (App\Bookqueue::all() as $index => $books)
                                    <tr>
                                        <td>{{$index+1}}</td>
                                        <td>{{$books->register}}</td>
                                        <td>{{$books->usecar}}</td>
                                        <td>{{$books->list}}</td>
                                        <td>{{$books->valet}}</td>
                                        <td>{{$books->tel}}</td>
                                        <td>{{$books->sevice}}</td>
                                    </tr> 
                                     @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>



            <div class="row">
                    <div class="col-lg-12">                       
                </div>
           
                   <div class="col-lg-12">
                         <h3 style="color:#8B7D7B"><strong>ล้างรถ</strong></h3>
                        <div class="table-responsive" style="color:#363636">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr class="warning">
                                        <th>ลำดับ</th>
                                        <th>ทะเบียน</th>
                                        <th>รุ่น</th>
                                        <th>รายการ</th>
                                        <th>ชื่อลูกค้า</th>
                                        <th>เบอร์ติดต่อ</th>
                                        <th>check-in</th>
                                    </tr>
                                </thead>
                               <tbody>
                                    @foreach (App\Bookqueue::all() as $index => $books)
                                    <tr>
                                        <td>{{$index+1}}</td>
                                        <td>{{$books->register}}</td>
                                        <td>{{$books->use}}</td>
                                        <td>{{$books->list}}</td>
                                        <td>{{$books->valet}}</td>
                                        <td>{{$books->tell}}</td>
                                        <td>{{$books->check}}</td>
                                    </tr> 
                                     @endforeach </tbody>
                            </table>
                        </div>
                    </div>
                

                <div class="col-lg-12">
                    <h3 style="color:#8B7D7B"><strong>ซ่อมรถ</strong></h3>
                        <div class="table-responsive" style="color:#363636">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr class="info">
                                        <th>ลำดับ</th>
                                        <th>ทะเบียน</th>
                                        <th>รุ่น</th>
                                        <th>รายการ</th>
                                        <th>ชื่อลูกค้า</th>
                                        <th>เบอร์ติดต่อ</th>
                                        <th>check-in</th>
                                    </tr>
                                </thead>
                               <tbody>
                                    <tr>
                                        <td colspan="7" class="text-center">ไม่พบรายการ</td>
                                    </tr> </tbody>
                            </table>
                        </div>
                    </div>               






@endsection