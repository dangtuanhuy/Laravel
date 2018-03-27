@extends('Layout.master')
@section('Noidung')
<h2>Kusanaghi d</h2>
@if($khoahoc != "")
{{$khoahoc}}
@else
{{"Không có khóa học"}}
@endif
@endsection