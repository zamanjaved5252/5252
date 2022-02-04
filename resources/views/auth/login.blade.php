
@extends('layouts.app')

@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    <title> Store Login </title>
    <meta charset="UTF-8">
    <link rel="icon" href="{{asset('images/logoforappstores.png')}}" type="image/x-icon"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet">

    <!--===============================================================================================-->
    <style>

        /*//////////////////////////////////////////////////////////////////
        [ FONT ]*/

        @font-face {
            font-family: Montserrat-Regular;
            src: url('../fonts/montserrat/Montserrat-Regular.ttf');
        }

        @font-face {
            font-family: Montserrat-ExtraBold;
            src: url('../fonts/montserrat/Montserrat-ExtraBold.ttf');
        }

        @font-face {
            font-family: Montserrat-Bold;
            src: url('../fonts/montserrat/Montserrat-Bold.ttf');
        }


        /*//////////////////////////////////////////////////////////////////
        [ RESTYLE TAG ]*/

        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }

        body, html {
            height: 100%;
            font-family: Montserrat-Regular, sans-serif;
        }

        /*---------------------------------------------*/
        a {
            font-family: Montserrat-Regular;
            font-size: 14px;
            line-height: 1.7;
            color: #666666;
            margin: 0px;
            transition: all 0.4s;
            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
        }

        a:focus {
            outline: none !important;
        }

        a:hover {
            text-decoration: none;
            color: #fff;
        }

        /*---------------------------------------------*/
        h1,h2,h3,h4,h5,h6 {
            margin: 0px;
        }

        p {
            font-family: Montserrat-Regular;
            font-size: 14px;
            line-height: 1.7;
            color: #666666;
            margin: 0px;
        }

        ul, li {
            margin: 0px;
            list-style-type: none;
        }


        /*---------------------------------------------*/
        input {
            outline: none;
            border: none;
        }

        textarea {
            outline: none;
            border: none;
        }

        textarea:focus, input:focus {
            border-color: transparent !important;
        }

        input:focus::-webkit-input-placeholder { color:transparent; }
        input:focus:-moz-placeholder { color:transparent; }
        input:focus::-moz-placeholder { color:transparent; }
        input:focus:-ms-input-placeholder { color:transparent; }

        textarea:focus::-webkit-input-placeholder { color:transparent; }
        textarea:focus:-moz-placeholder { color:transparent; }
        textarea:focus::-moz-placeholder { color:transparent; }
        textarea:focus:-ms-input-placeholder { color:transparent; }

        input::-webkit-input-placeholder { color: #999999; }
        input:-moz-placeholder { color: #999999; }
        input::-moz-placeholder { color: #999999; }
        input:-ms-input-placeholder { color: #999999; }

        textarea::-webkit-input-placeholder { color: #999999; }
        textarea:-moz-placeholder { color: #999999; }
        textarea::-moz-placeholder { color: #999999; }
        textarea:-ms-input-placeholder { color: #999999; }

        /*---------------------------------------------*/
        button {
            outline: none !important;
            border: none;
            background: transparent;
        }

        button:hover {
            cursor: pointer;
        }

        iframe {
            border: none !important;
        }


        /*//////////////////////////////////////////////////////////////////
        [ Utility ]*/
        .txt1 {
            font-family: Montserrat-Regular;
            font-size: 16px;
            color: #cccccc;
            line-height: 1.4;
        }

        .bo1 {
            border-bottom: 1px solid #999999;
        }

        .hov1:hover {
            border-color: #d33f8d;
        }


        /*//////////////////////////////////////////////////////////////////
        [ login ]*/

        .limiter {
            width: 100%;
            margin: 0 auto;
        }

        .container-login100 {
            width: 100%;
            min-height: 100vh;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            padding: 15px;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;

            position: relative;
            z-index: 1;
        }

        .container-login100::before {
            content: "";
            display: block;
            position: absolute;
            z-index: -1;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background:linear-gradient(to right ,rgba(35, 33, 33, 0.93),#ada873);

        }

        .wrap-login100 {
            width: 390px;
            background: transparent;
        }



        /*------------------------------------------------------------------
        [  ]*/
        .login100-form {
            width: 100%;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .login100-form-title {
            font-family: Montserrat-ExtraBold;
            font-size: 24px;
            color: #fff;
            line-height: 1.2;
            text-align: center;

            width: 100%;
            display: block;
        }

        /*---------------------------------------------*/
        .login100-form-avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto;
        }
        .login100-form-avatar img {
            width: 100%;
        }


        /*---------------------------------------------*/
        .wrap-input100 {
            position: relative;
            width: 100%;
            z-index: 1;
        }

        .input100 {
            font-family: Montserrat-Bold;
            font-size: 15px;
            line-height: 1.2;
            color: #333333;

            display: block;
            width: 100%;
            background: #fff;
            height: 50px;
            border-radius: 25px;
            padding: 0 30px 0 53px;
        }


        /*------------------------------------------------------------------
        [ Focus ]*/
        .focus-input100 {
            display: block;
            position: absolute;
            border-radius: 25px;
            bottom: 0;
            left: 0;
            z-index: -1;
            width: 100%;
            height: 100%;
            box-shadow: 0px 0px 0px 0px;
            color: rgba(0,91,234, 0.6);
        }

        .input100:focus + .focus-input100 {
            -webkit-animation: anim-shadow 0.5s ease-in-out forwards;
            animation: anim-shadow 0.5s ease-in-out forwards;
        }

        @-webkit-keyframes anim-shadow {
            to {
                box-shadow: 0px 0px 80px 30px;
                opacity: 0;
            }
        }

        @keyframes anim-shadow {
            to {
                box-shadow: 0px 0px 80px 30px;
                opacity: 0;
            }
        }

        .symbol-input100 {
            font-size: 15px;
            color: #999999;

            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            position: absolute;
            border-radius: 25px;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            padding-left: 30px;
            pointer-events: none;

            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s;
        }

        .input100:focus + .focus-input100 + .symbol-input100 {
            color: #00c6fb;
            padding-left: 23px;
        }


        /*------------------------------------------------------------------
        [ Button ]*/
        .container-login100-form-btn {
            width: 100%;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .login100-form-btn {
            font-family: Montserrat-Bold;
            font-size: 15px;
            line-height: 1.5;
            color: #e0e0e0;

            width: 100%;
            height: 50px;
            border-radius: 25px;
            background: #333333;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 25px;

            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s;

            position: relative;
            z-index: 1;
        }

        .login100-form-btn::before {
            content: "";
            display: block;
            position: absolute;
            z-index: -1;
            width: 100%;
            height: 100%;
            border-radius: 25px;
            top: 0;
            left: 0;
            background:linear-gradient(to right,#ada873,rgba(35, 33, 33, 0.93));

            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s;
            opacity: 0;
        }

        .login100-form-btn:hover {
            background: transparent;
            color: #fff;
        }

        .login100-form-btn:hover:before {
            opacity: 1;
        }

        /*------------------------------------------------------------------
        [ Button sign in with ]*/
        .btn-face,
        .btn-google {
            font-family: Raleway-Bold;
            font-size: 16px;
            line-height: 1.2;

            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: center;
            align-items: center;
            width: calc((100% - 10px) / 2);
            height: 40px;
            border-radius: 3px;
            border: 1px solid #e6e6e6;
            background-color: #fff;

            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s;
        }


        .btn-face {
            color: #3b5998;
        }

        .btn-face i {
            font-size: 20px;
            margin-right: 10px;
            padding-bottom: 1px;
        }

        .btn-google {
            color: #555555;
        }

        .btn-google img {
            width: 19px;
            margin-right: 10px;
            padding-bottom: 1px;
        }


        .btn-face:hover,
        .btn-google:hover {
            border-color: #d33f8d;
        }



        /*------------------------------------------------------------------
        [ Alert validate ]*/

        .validate-input {
            position: relative;
        }

        .alert-validate::before {
            content: attr(data-validate);
            position: absolute;
            max-width: 70%;
            background-color: white;
            border: 1px solid #c80000;
            border-radius: 14px;
            padding: 4px 25px 4px 10px;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
            right: 8px;
            pointer-events: none;

            font-family: Montserrat-Bold;
            color: #c80000;
            font-size: 13px;
            line-height: 1.4;
            text-align: left;

            visibility: hidden;
            opacity: 0;

            -webkit-transition: opacity 0.4s;
            -o-transition: opacity 0.4s;
            -moz-transition: opacity 0.4s;
            transition: opacity 0.4s;
        }

        .alert-validate::after {
            content: "\f06a";
            font-family: FontAwesome;
            display: block;
            position: absolute;
            color: #c80000;
            font-size: 15px;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
            right: 13px;
        }

        .alert-validate:hover:before {
            visibility: visible;
            opacity: 1;
        }

        @media (max-width: 992px) {
            .alert-validate::before {
                visibility: visible;
                opacity: 1;
            }
        }

        /*//////////////////////////////////////////////////////////////////
        [ responsive ]*/

        @media (max-width: 576px) {
            .wrap-login100 {
                padding-top: 80px;
                padding-left: 15px;
                padding-right: 15px;
            }
        }
        /**/


        /*[ SHAPE ]
        ///////////////////////////////////////////////////////////
        */

        /*[ Display ]
        -----------------------------------------------------------
        */
        .dis-none {display: none;}
        .dis-block {display: block;}
        .dis-inline {display: inline;}
        .dis-inline-block {display: inline-block;}
        .dis-flex {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
        }

        /*[ Position ]
        -----------------------------------------------------------
        */
        .pos-relative {position: relative;}
        .pos-absolute {position: absolute;}
        .pos-fixed {position: fixed;}

        /*[ float ]
        -----------------------------------------------------------
        */
        .float-l {float: left;}
        .float-r {float: right;}


        /*[ Width & Height ]
        -----------------------------------------------------------
        */
        .sizefull {
            width: 100%;
            height: 100%;
        }
        .w-full {width: 100%;}
        .h-full {height: 100%;}
        .max-w-full {max-width: 100%;}
        .max-h-full {max-height: 100%;}
        .min-w-full {min-width: 100%;}
        .min-h-full {min-height: 100%;}

        /*[ Top Bottom Left Right ]
        -----------------------------------------------------------
        */
        .top-0 {top: 0;}
        .bottom-0 {bottom: 0;}
        .left-0 {left: 0;}
        .right-0 {right: 0;}

        .top-auto {top: auto;}
        .bottom-auto {bottom: auto;}
        .left-auto {left: auto;}
        .right-auto {right: auto;}


        /*[ Opacity ]
        -----------------------------------------------------------
        */
        .op-0-0 {opacity: 0;}
        .op-0-1 {opacity: 0.1;}
        .op-0-2 {opacity: 0.2;}
        .op-0-3 {opacity: 0.3;}
        .op-0-4 {opacity: 0.4;}
        .op-0-5 {opacity: 0.5;}
        .op-0-6 {opacity: 0.6;}
        .op-0-7 {opacity: 0.7;}
        .op-0-8 {opacity: 0.8;}
        .op-0-9 {opacity: 0.9;}
        .op-1-0 {opacity: 1;}

        /*[ Background ]
        -----------------------------------------------------------
        */
        .bgwhite {background-color: white;}
        .bgblack {background-color: black;}



        /*[ Wrap Picture ]
        -----------------------------------------------------------
        */
        .wrap-pic-w img {width: 100%;}
        .wrap-pic-max-w img {max-width: 100%;}

        /* ------------------------------------ */
        .wrap-pic-h img {height: 100%;}
        .wrap-pic-max-h img {max-height: 100%;}

        /* ------------------------------------ */
        .wrap-pic-cir {
            border-radius: 50%;
            overflow: hidden;
        }
        .wrap-pic-cir img {
            width: 100%;
        }



        /*[ Hover ]
        -----------------------------------------------------------
        */
        .hov-pointer:hover {cursor: pointer;}

        /* ------------------------------------ */
        .hov-img-zoom {
            display: block;
            overflow: hidden;
        }
        .hov-img-zoom img{
            width: 100%;
            -webkit-transition: all 0.6s;
            -o-transition: all 0.6s;
            -moz-transition: all 0.6s;
            transition: all 0.6s;
        }
        .hov-img-zoom:hover img {
            -webkit-transform: scale(1.1);
            -moz-transform: scale(1.1);
            -ms-transform: scale(1.1);
            -o-transform: scale(1.1);
            transform: scale(1.1);
        }



        /*[  ]
        -----------------------------------------------------------
        */
        .bo-cir {border-radius: 50%;}

        .of-hidden {overflow: hidden;}

        .visible-false {visibility: hidden;}
        .visible-true {visibility: visible;}




        /*[ Transition ]
        -----------------------------------------------------------
        */


        .ab-t-l {
            position: absolute;
            left: 0px;
            top: 0px;
        }

        .ab-t-r {
            position: absolute;
            right: 0px;
            top: 0px;
        }

        .ab-b-l {
            position: absolute;
            left: 0px;
            bottom: 0px;
        }

        .ab-b-r {
            position: absolute;
            right: 0px;
            bottom: 0px;
        }

    </style>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body style="background-color:#ada873">

<div class="limiter">
    <div class="container-login100" style="background-image: url('images/img-01.jpg');">
        <div class="wrap-login100">

            <form action="{{ route('login') }}" method="post">
                @csrf
                @if(session()->has('alert'))
                    <div class="alert alert-{{ session()->get('alert.type') }}">
                        <strong>{{ session()->get('alert.message') }}</strong>
                    </div>
                @endif
                <div class="login100-form-avatar">
                    <img src="{{asset('images/zama.png)')}}" alt="">
                </div>
                <span class="login100-form-title pt-8 pb-4">
					Store Login
					</span>

                <div class="wrap-input100 validate-input mb-2" data-validate = "Username is required">
                    <input class="input100 {{ $errors->has('email') ? ' is-invalid' : ''}}" type="text" name="email" placeholder="YourEmail">
                    @if($errors->has('email') || session()->has('alert'))
                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                    @endif
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-envelope"></i>
						</span>
                </div>

                <div class="wrap-input100 validate-input mb-2" data-validate = "Password is required">
                    <input class="input100  {{ $errors->has('password') ? 'is-invalid' : ''}}" type="password" name="password" placeholder="Password">
                    @if($errors->has('password') || session()->has('alert'))
                        <span class="invalid-feedback" role="alert">
                                                         <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                    @endif
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
                </div>

                <div class="container-login100-form-btn pt-2">
                    <button class="login100-form-btn">
                        Login
                    </button>
                </div>
            </form>
            <div class="container-login100-form-btn pt-2">
                <button class="login100-form-btn" onclick="window.location='{{ url("register") }}'">
                    Register
                </button>
            </div>

        </div>
    </div>
</div>

</body>
</html>



@endsection
