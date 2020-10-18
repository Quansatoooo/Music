<!DOCTYPE html>
<html lang="vi">

<head>
    @yield('title')
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Music">
    <meta name="keywords" content="">
    <meta name="author" content="kamleshyadav">
    <meta name="MobileOptimized" content="320">
    <!--Start Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('MusicLayout/css/fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('MusicLayout/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('MusicLayout/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('MusicLayout/js/plugins/swiper/css/swiper.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('MusicLayout/js/plugins/nice_select/nice-select.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('MusicLayout/js/plugins/player/volume.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('MusicLayout/js/plugins/scroll/jquery.mCustomScrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('MusicLayout/css/style.css') }}">
    <!-- Favicon Link -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('MusicLayout/images/favicon.png') }}">
</head>

<body>
    <!----Loader Start---->
    <!-- <div class="ms_loader">
		<div class="wrap">
		  <img src="MusicLayout/images/loader.gif" alt="">
		</div>
	</div> -->
    <!----Main Wrapper Start---->
    <div class="ms_main_wrapper">
        @include('partials.sidebar')
        <div class="ms_content_wrapper padder_top80">
            @include('partials.header')
            @yield('content')
        </div>
         
        @include('partials.footer')

        @include('partials.songplay')
    </div>
    <!-- Modal -->
    <div class="ms_register_popup">
        <div id="myModal" class="modal  centered-modal" role="dialog">
            <div class="modal-dialog register_dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal">
                        <i class="fa_icon form_close"></i>
                    </button>
                    <div class="modal-body">
                        <div class="ms_register_img">
                            <img src="{{asset('MusicLayout/images/register_img.png')}}" alt="" class="img-fluid" />
                        </div>
                        <div class="ms_register_form">
                            <h2>Đăng kí / Đăng nhập</h2>
                            <div class="form-group">
                                <input type="text" placeholder="Enter Your Name" class="form-control">
                                <span class="form_icon">
                                    <i class="fa_icon form-user" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Enter Your Email" class="form-control">
                                <span class="form_icon">
                                    <i class="fa_icon form-envelope" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Enter Password" class="form-control">
                                <span class="form_icon">
                                    <i class="fa_icon form-lock" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Confirm Password" class="form-control">
                                <span class="form_icon">
                                    <i class=" fa_icon form-lock" aria-hidden="true"></i>
                                </span>
                            </div>
                            <a href="#" class="ms_btn">register now</a>
                            <p>Already Have An Account? <a href="#myModal1" data-toggle="modal" class="ms_modal hideCurrentModel">login here</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!----Login Popup Start---->
        <div id="myModal1" class="modal  centered-modal" role="dialog">
            <div class="modal-dialog login_dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal">
                        <i class="fa_icon form_close"></i>
                    </button>
                    <div class="modal-body">
                        <div class="ms_register_img">
                            <img src="{{asset('MusicLayout/images/register_img.png')}}" alt="" class="img-fluid" />
                        </div>
                        <div class="ms_register_form">
                            <h2>login / Sign in</h2>
                            <div class="form-group">
                                <input type="text" placeholder="Enter Your Email" class="form-control">
                                <span class="form_icon">
                                    <i class="fa_icon form-envelope" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Enter Password" class="form-control">
                                <span class="form_icon">
                                    <i class="fa_icon form-lock" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="remember_checkbox">
                                <label>Keep me signed in
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <a href="profile.html" class="ms_btn" target="_blank">login now</a>
                            <div class="popup_forgot">
                                <a href="#">Forgot Password ?</a>
                            </div>
                            <p>Don't Have An Account? <a href="#myModal" data-toggle="modal" class="ms_modal1 hideCurrentModel">register here</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----Language Selection Modal---->
    <div class="ms_lang_popup">
        <div id="lang_modal" class="modal  centered-modal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal">
                        <i class="fa_icon form_close"></i>
                    </button>
                    <div class="modal-body">
                        <h1>language selection</h1>
                        <p>Please select the language(s) of the music you listen to.</p>
                        <ul class="lang_list">
                            <li>
                                <label class="lang_check_label">
                                    English
                                    <input type="checkbox" name="check">
                                    <span class="label-text"></span>
                                </label>
                            </li>
                            <li>
                                <label class="lang_check_label">
                                    hindi
                                    <input type="checkbox" name="check">
                                    <span class="label-text"></span>
                                </label>
                            </li>
                            <li>
                                <label class="lang_check_label">
                                    punjabi
                                    <input type="checkbox" name="check">
                                    <span class="label-text"></span>
                                </label>
                            </li>
                            <li>
                                <label class="lang_check_label">
                                    French
                                    <input type="checkbox" name="check">
                                    <span class="label-text"></span>
                                </label>
                            </li>
                            <li>
                                <label class="lang_check_label">
                                    German
                                    <input type="checkbox" name="check">
                                    <span class="label-text"></span>
                                </label>
                            </li>
                            <li>
                                <label class="lang_check_label">
                                    Spanish
                                    <input type="checkbox" name="check">
                                    <span class="label-text"></span>
                                </label>
                            </li>
                            <li>
                                <label class="lang_check_label">
                                    Chinese
                                    <input type="checkbox" name="check">
                                    <span class="label-text"></span>
                                </label>
                            </li>
                            <li>
                                <label class="lang_check_label">
                                    Japanese
                                    <input type="checkbox" name="check">
                                    <span class="label-text"></span>
                                </label>
                            </li>
                            <li>
                                <label class="lang_check_label">
                                    Arabic
                                    <input type="checkbox" name="check">
                                    <span class="label-text"></span>
                                </label>
                            </li>
                            <li>
                                <label class="lang_check_label">
                                    Italian
                                    <input type="checkbox" name="check">
                                    <span class="label-text"></span>
                                </label>
                            </li>
                        </ul>
                        <div class="ms_lang_btn">
                            <a href="#" class="ms_btn">apply</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----Queue Clear Model ---->
    <div class="ms_clear_modal">
        <div id="clear_modal" class="modal  centered-modal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal">
                        <i class="fa_icon form_close"></i>
                    </button>
                    <div class="modal-body">
                        <h1>Are you sure you want to clear your queue?</h1>
                        <div class="clr_modal_btn">
                            <a href="#">clear all</a>
                            <a href="#">cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----Queue Save Modal---->
    <div class="ms_save_modal">
        <div id="save_modal" class="modal  centered-modal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal">
                        <i class="fa_icon form_close"></i>
                    </button>
                    <div class="modal-body">
                        <h1>Log in to start sharing your music!</h1>
                        <div class="save_modal_btn">
                            <a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i> continue with google </a>
                            <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i> continue with facebook</a>
                        </div>
                        <div class="ms_save_email">
                            <h3>or use your email</h3>
                            <div class="save_input_group">
                                <input type="text" placeholder="Enter Your Name" class="form-control">
                            </div>
                            <div class="save_input_group">
                                <input type="password" placeholder="Enter Password" class="form-control">
                            </div>
                            <button class="save_btn">Log in</button>
                        </div>
                        <div class="ms_dnt_have">
                            <span>Dont't have an account ?</span>
                            <a href="javascript:;" class="hideCurrentModel" data-toggle="modal" data-target="#myModal">Register Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Main js file Style-->
    <script type="text/javascript" src="{{ asset('MusicLayout/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('MusicLayout/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('MusicLayout/js/plugins/swiper/js/swiper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('MusicLayout/js/plugins/player/jplayer.playlist.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('MusicLayout/js/plugins/player/jquery.jplayer.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('MusicLayout/js/plugins/player/audio-player.js') }}"></script>
    <script type="text/javascript" src="{{ asset('MusicLayout/js/plugins/player/volume.js') }}"></script>
    <script type="text/javascript" src="{{ asset('MusicLayout/js/plugins/nice_select/jquery.nice-select.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('MusicLayout/js/plugins/scroll/jquery.mCustomScrollbar.js') }}"></script>
    <script type="text/javascript" src="{{ asset('MusicLayout/js/custom.js') }}"></script>
</body>

</html>