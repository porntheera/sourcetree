@extends('carcare')

@section('content')

<!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                    <small><li class="active"><small>Profile</small></li></small>
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->

<h3 class="page-title no-top" style="color:#808080"><strong>ข้อมูลส่วนตัว</strong></h3>
<div class="row">
    <div class="col-md-6 col-md-offset-6">
<div class="text-right">

<a href="{{url('editpassword')}}" class="btn grey-steel" style="color:#FF8C00"><i class="fa fa-edit"></i> เปลี่ยนรหัสผ่าน</a>
<a href="{{url('editprofile')}}" class="btn grey-steel" style="color:#FF8C00"><i class="fa fa-edit"></i> แก้ไขข้อมูลส่วนตัว</a>
</div>
</div>
</div>


@endsection