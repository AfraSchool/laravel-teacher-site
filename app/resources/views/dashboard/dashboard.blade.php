@extends('layouts.home')
@section('title', 'داشبور - دبیرستان غیر دولتی افرا')
@section('content')
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style ">
                        <li class="breadcrumb-item">
                            <h4 class="page-title">پیشخوان</h4>
                        </li>
                        <li class="breadcrumb-item bcrumb-1">
                            <a href="../../index.html">خانه</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="support-box text-center bg-green">
                    <div class="text m-b-10">اساتید</div>
                    <div class="icon m-b-10">
                        <div class="fas fa-chalkboard-teacher" style="font-size: 3rem;"></div>
                    </div>
                    <h3 class="m-b-0">
                        {{$data['teachers']}}
                    </h3>
                    <small class="displayblock">ثبت شده در سیستم</small>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="support-box text-center bg-orange">
                    <div class="text m-b-10">دانش آموزان</div>
                    <div class="fas fa-user-graduate" style="font-size: 3.1rem; margin: 2px;"></div>
                    <h3 class="m-b-0" style="margin-top: 2px;">                        {{$data['students']}}
                    </h3>
                    <small class="displayblock">ثبت شده در سیستم</small>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="support-box text-center bg-cyan">
                    <div class="text m-b-10">پیام ها</div>
                    <i class="material-icons" style="font-size: 3rem;">mail_outline</i>
                    <h3 class="m-b-0">                        {{$data['messages']}}
                    </h3>
                    <small class="displayblock"> پیام جدید </small>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="support-box text-center bg-purple">
                    <div class="text m-b-10">غیبت</div>
                    <i class="material-icons" style="font-size: 3rem;">phonelink</i>
                    <h3 class="m-b-0">
                        {{$data['attendance']}}
                    </h3>
                    <small class="displayblock"> دانش آموز غیبت داشته اند</small>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>به پیشخوان خوش آمدید!</strong>
                        </h2>
                        <p style="margin-top: 8px;">برای آغاز، چند پیوند برای شما گردآوری کرده‌ایم:</p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="body">
                            <div class="button-demo">
                                <button type="button" class="btn btn-info btn-border-radius waves-effect"
                                        style="width: 50%; font-size: 1em;">حضور و غیاب
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 ">
                        <div class="body">
                            <div class="button-demo">
                                <button type="button" class="btn btn-default btn-border-radius waves-effect">دانش
                                    آموزان
                                </button>
                                <button type="button" class="btn btn-primary btn-border-radius waves-effect">اساتید
                                </button>
                                <button type="button" class="btn btn-info btn-border-radius waves-effect">کلاس ها
                                </button>
                                <button type="button" class="btn btn-warning btn-border-radius waves-effect">ارسال
                                    اطلاعیه
                                </button>
                                <button type="button" class="btn btn-danger btn-border-radius waves-effect">چت باکس
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
