@extends('layouts.main')

@section('title',)
<title>Tìm kiếm</title>
@endsection

@section('content')
<div class="ms_content_wrapper padder_top90">
    <div class="ms_weekly_inner">
        <div class="row">
            <div class="col-lg-12">
                <div class="ms_heading">
                    <h1>Tìm kiếm</h1>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="ms_heading">
                    <h1>Tìm thấy {{count($song)}} bài hát</h1>
                </div>
            </div>
            @foreach($song as $song)
            <div class="col-lg-12 col-md-12 padding_right40">
                <div class="ms_weekly_box">
                    <div class="weekly_left">
                        <div class="w_top_song">
                            <div class="w_tp_song_img">
                                <img src="{{$song->img_path}}" alt="" />
                                <div class="ms_song_overlay">
                                </div>
                                <div class="ms_play_icon">
                                    <img src="{{asset('MusicLayout/images/svg/play.svg')}}" alt="">
                                </div>
                            </div>
                            <div class="w_tp_song_name">
                                <h3><a href="javascript:void(0)" data-url="{{route('song.update',['id'=>$song->id])}}"
                                class="song_play set" onClick="get_detail_song({{$song->id}})">{{$song->name}}</a></h3>
                                @foreach ($song->artists as $sa)
                                <p>{{$sa->name}}</p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="weekly_right">
                        <span class="w_song_time">{{$song->time}}</span>
                        <span class="ms_more_icon" data-other="1">
                            <img src="{{asset('MusicLayout/images/svg/more.svg')}}" alt="">
                        </span>
                        <span class="w_song_dwnload">
                            <i class="{{asset('MusicLayout/ms_icon1 dwnload_icon')}}"></i>
                        </span>
                    </div>
                    <ul class="more_option">
                        @if(Auth::check())
                        <li><a href="#" data-url="{{route('song.favourite',['id'=>$song->id])}}" class="add_favourite" data-toggle="modal"><span class="opt_icon"><span class="icon icon_fav"></span></span>Thêm vào thư viện</a></li>
                        <li>
                            <a href="{{route('download',['file'=>$song->song_path])}}" download="{{$song->song_path}}">
                                <span class="opt_icon"><span class="icon icon_dwn"></span></span>Tải xuống</a>
                        </li>
                        <li><a href="#" onClick="get_detail_song({{$song->id}})"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Thêm vào Playlist</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Chia sẻ</a></li>
                        @else
                        <li><a href="#save_modal" data-toggle="modal"><span class="opt_icon"><span class="icon icon_fav"></span></span>Thêm vào thư viện</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Tải xuống</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Thêm vào Playlist</a></li>
                        <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Chia sẻ</a></li>
                        @endif

                    </ul>
                </div>
                <div class="ms_divider"></div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="ms_top_artist">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ms_heading">
                                <h1>Ca sĩ</h1>
                            </div>
                        </div>
                        @foreach($artist as $artAll)
                        <div class="col-lg-2 col-md-6">
                            <div class="ms_rcnt_box marger_bottom30">
                                <div class="ms_rcnt_box_img">
                                    <img src="{{$artAll->img_path}}" alt="" class="img-fluid">
                                    <div class="ms_main_overlay">
                                        <div class="ms_box_overlay"></div>
                                        
                                    </div>
                                </div>
                                <div class="ms_rcnt_box_text">
                                    <h3><a href="{{route('artist.detail',['id'=>$artAll->id])}}">{{$artAll->name}}</a></h3>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
</div>
@endsection