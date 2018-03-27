@extends('Layout.master')
@section('Noidung')
<h2>Kusanaghi d</h2>
@if($khoahoc != "")
{{$khoahoc}}
@else
{{"Không có khóa học"}}
@endif
{{--  asdf  Dùng For --}}
{{$khoahoc or "không tồn tại khóa học"}}
</br>
    @for($i = 0 ; $i <10 ; $i++)
    {{$i.""}}
    @endfor

    <?php 
    $khoahoc = array('PHP','IOT','Laravel');
    ?>
    </br>
    {{--  @if(!empty($khoahoc))
        @foreach($khoahoc as $value)
            {{$value}}
        @endforeach
    @else
    {{"Mãng rỗng"}}
    @endif  --}}
    @forelse($khoahoc as $value)
        @continue($value == "IOT")
        {{$value}}
    @empty
        {{"Mãng rỗng"}}
    @endforelse
 
@endsection