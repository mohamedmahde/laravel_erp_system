@extends('layouts.admin')

@section('title')
    تعديل الضبط العام
@endsection

@section("css")
<link rel="stylesheet" href="{{ asset('assets/admin/plugins/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endsection
@section('contentheader')
    الضبط
@endsection
@section('contentheaderlink')
    <a href="{{ route('admin.adminPanelSetting.index') }}">الضبط</a>
@endsection

@section('contentheaderactive')
    تعديل
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title card_title_center">تعديل بيانات الضبط العام</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                    @if (@isset($data) && !@empty($data))
                        <form action="{{ route('admin.adminPanelSetting.update') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">اسم الشركة</label>
                                <input type="text" name="system_name" id="system_name" class="form-control" value="{{ $data['system_name'] }}" placeholder="ادخل اسم الشركة" oninvalid="setCustomValidity('من فضلك ادخل هذا الحقل')" onchange="try{setCustomValidity('')}catch(e){}"  required>
                            </div>

                            <div class="form-group">
                                <label for="">عنوان الشركة</label>
                                <input type="text" name="address" id="address" class="form-control" value="{{ $data['address'] }}" placeholder="ادخل اسم الشركة" oninvalid="setCustomValidity('من فضلك ادخل هذا الحقل')" onchange="try{setCustomValidity('')}catch(e){}"  required>
                            </div>

                            <div class="form-group">
                                <label for="">هاتف الشركة</label>
                                <input type="text" name="phone" id="phone" class="form-control" value="{{ $data['phone'] }}" placeholder="ادخل اسم الشركة" oninvalid="setCustomValidity('من فضلك ادخل هذا الحقل')" onchange="try{setCustomValidity('')}catch(e){}"  required>
                            </div>


                            <div class="form-group">
                                <label for="">رسالة الشركة الشركة</label>
                                <input type="text" name="general_alert" id="general_alert" class="form-control" value="{{ $data['general_alert'] }}" placeholder="ادخل اسم الشركة" oninvalid="setCustomValidity('من فضلك ادخل هذا الحقل')" onchange="try{setCustomValidity('')}catch(e){}"  required>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group"  >
                                   <label>شعار الشركة</label>
                                   <div class="image">
                                      <img class="custom_img" src="{{ asset('assets/admin/uploads').'/'.$data['photo'] }}"  alt="لوجو الشركة">       
                                      <button type="button" class="btn btn-sm btn-danger" id="update_image">تغير الصورة</button>
                                      <button type="button" class="btn btn-sm btn-danger" style="display: none;" id="cancel_update_image"> الغاء</button>
                                   </div>
                                </div>
                                <div id="oldimage">
                                </div>
                             </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">حفظ</button>
                            </div>
                        </form>
                    @else
                        <div class="alert alert-danger"></div>
                        عفوا لا توجد بيانات لعرضها
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection
@section("script")
<script  src="{{ asset('assets/admin/plugins/select2/js/select2.full.min.js') }}"> </script>
<script  src="{{ asset('assets/admin/js/collect_transaction.js') }}"> </script>
<script>
   //Initialize Select2 Elements
   $('.select2').select2({
     theme: 'bootstrap4'
   });
</script>
@endsection