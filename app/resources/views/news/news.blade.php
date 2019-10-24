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
                        <strong>جزئیات</strong> کلاس ها</h2>
                </div>

                <div class="tableBody">
                    <div class="table-responsive">

                        <table class="table table-hover dashboard-task-infos">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>متن و عنوان</th>
                                <th>اقدام</th>
                            </tr>
                            </thead>
                            <tbody id="students">
                            @foreach($data['news'] as $new)
                                <tr>
                                    <td>{{$new->id}}</td>
                                    <td>{{str_limit($new->caption, 15, '...')}}</td>
                                    <td>
                                    <a href="{{URL('dashboard/news/del', $new->id)}}"><button class="btn tblActnBtn"><i class="material-icons">delete</i></button></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        @if(!empty($message))
                            <div class="alert bg-error alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{$message}}
                            </div>
                        @endif
                    </div>

                </div>

                <div><p id="msg"></p></div>
            </div>
        </div>
    </div>

@stop
