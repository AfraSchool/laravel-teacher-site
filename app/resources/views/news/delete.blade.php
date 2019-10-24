@extends('layouts.home')
@section('title', 'خبر - دبیرستان غیر دولتی افرا')
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
                            <a href="../../index.html">خبر</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                    <h2>
                        <strong>حذف</strong> خبر</h2>
                </div>

                <div class="tableBody">
                    <div class="table-responsive">
                        <p>                        آیا میخواهید این خبر حذف شود؟
                        </p>
                        <div style="float: left;">
                            <form method="post" >
                                {{@csrf_field()}}
                                <input type="hidden" id="ids" name="ids" value="{{$data['id']}}">
                                <button type="submit" class="btn btn-info waves-effect">حذف</button></a>
                            </form>
                            <button type="button" class="btn btn-danger waves-effect"
                                    data-dismiss="modal">لغو</button>
                        </div>
                    </div>

                </div>

                <div><p id="msg"></p></div>
            </div>
        </div>
    </div>

@stop
