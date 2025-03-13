@extends('layouts.admin')

@section('title')
    الضبط العام
@endsection

@section('contentheader')
    الضبط
@endsection
@section('contentheaderlink')
    <a href="{{ route('admin.adminPanelSetting.index') }}">الضبط</a>
@endsection

@section('contentheaderactive')
    عرض
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title" card_title_center>بيانات الضبط العام</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                    @if (@isset($data) && !@empty($data))
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>

                                <tr>
                                    <td class="width30">اسم الشركة</td>
                                    <td>{{ $data['system_name'] }}</td>

                                </tr>


                                <tr>
                                    <td class="width30">كود الشركة</td>
                                    <td>{{ $data['com_code'] }}</td>

                                </tr>

                                <tr>
                                    <td class="width30">اسم الشركة</td>
                                    <td>
                                        @if ($data['active'] == 1)
                                            مفعل
                                        @else
                                            غير مفعل
                                        @endif
                                    </td>

                                </tr>

                                <tr>
                                    <td class="width30">عنوان الشركة</td>
                                    <td>{{ $data['address'] }}</td>

                                </tr>

                                <tr>
                                    <td class="width30">هاتف الشركة</td>
                                    <td>{{ $data['phone'] }}</td>

                                </tr>

                                <tr>
                                    <td class="width30">رسالة التنبية علي الشاشة</td>
                                    <td>{{ $data['general_alert'] }}</td>
                                </tr>

                                <tr>
                                    <td class="width30"> شعار الشركة</td>
                                    <td>

                                        <div class="image">
                                            <img class="custom_img"
                                                src="{{ asset('assets/admin/uploads') . '/' . $data['photo'] }}"
                                                alt="logo company">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="width30">تاريخ اخر تحديث</td>
                                    <td>
                                        @if ($data['update_by'] > 0 && $data['updated_by'] != null)
                                            @php
                                                $dt = new DateTime($data['updated_at']);
                                                $date = $dt->format('Y-m-d');
                                                $time = $dt->format('H:i');
                                                $newDateTime = data('A', strtotime($time));
                                                $newDateTimeType = $newDateTimeType == 'AM' ? 'صباحا' : 'مساء';
                                            @endphp
                                            {{ $date }}
                                            {{ $time }}
                                            {{ $newDateTimeType }}
                                            بواسطة
                                            {{ $update_by_admin }}
                                        @else
                                            لا يوجد تحديث
                                        @endif
                                        

                                    </td>
                                </tr>
                        </table>
                        <a class="btn btn-success"
                                            href="{{ route('admin.adminPanelSetting.edit') }}">تعديل</a>
                    @else
                        <div class="alert alert-danger"></div>
                        عفوا لا توجد بيانات لعرضها
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection
