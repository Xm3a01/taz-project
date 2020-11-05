@extends('dashboard.metronic')
@section('content')
<!-- BEGIN PAGE-BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="{{route('index')}}">الصفحة الرئيسية</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="{{route('sections.index')}}">الاقسام</a>
            <i class="fa fa-circle"></i>
        </li>
    </ul>
</div>
<!-- END PAGE-BAR -->

<h3 class="page-title">تعديل الاقسام </h3>

<form action="{{ route('sections.update', $section->id) }}" method="POST">
    @csrf {{ method_field('PUT') }}
    <div class="form-group">
        <label>الاسم</label>
        <input type="text" name="name" class="form-control" value="{{$section->name}}">
    </div>
    <div class="form-group">
        <label>المشفى</label>
        <select class="form-control" name="hospital_id">
            <option value="">المشفى</option>
            @foreach ($hospitals as $hospital)    
               <option {{$section->hospital_id == $hospital->id ? 'selected' : ''}} value="{{$hospital->id}}">{{$hospital->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="margin-top-10">
        <button type="submit" class="btn green"> حفظ التعديل </button>
    </div>

</form>

@endsection