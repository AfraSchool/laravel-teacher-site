@extends('layouts.home')
@section('title', 'ارسال خبر - دبیرستان غیر دولتی افرا')
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
                            <a href="../../index.html">ارسال خبر</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div id="message"></div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>ارسال خبر</strong>
                        </h2>
                    </div>
                    <div class="tableBody">
                        <div class="table-responsive">

                            <form id="frmFileUpload"  method="post"
                                  enctype="multipart/form-data">
                                {{csrf_field()}}
                                @if(!empty($message))
                                    <div class="alert bg-success alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{$message}}
                                    </div>
                                @endif
                                @foreach ($errors->all('<div class="alert bg-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>:message</div>') as $error)
                                    {!! $error !!}
                                @endforeach
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea name="caption" rows="10" class="form-control no-resize news-textarea"
                                                  placeholder="لطفا متن پیام  وارد کنید..."
                                                  value=""></textarea>
                                    </div>
                                </div>
                                <div class="file-field input-field">
                                    <div class="btn">
                                        <span>فایل</span>
                                        <input type="file" name="file" multiple>
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text"
                                               placeholder="یک یا چند فایل را آپلود کنید">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info btn-border-radius waves-effect" style="margin-bottom: 20px;">ارسال</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
