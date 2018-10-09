@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-7">
            <div class="todo-container">
                <div class="row">
                    <div class="col-md-12">
                         <ul class="todo-projects-container">
                            <li class="todo-padding-b-0">
                                <div class="todo-head">
                                    <h3 style="list-style-type:none"> {{$announcement->title}} </h3>
                                    <br>
                                    <p>تاریخ نشر :{{ $announcement->date()}}</p>
                                </div>
                            </li>
                            <li style ="color: black; font-size: 15px;">
                                <p>{!!$announcement->body!!}</p>
                            </li>
                         </ul>
                    </div>
                </div>
             </div>
        </div>
        <!-- card -->
        <!-- download files table -->
        <div class="col-md-5">
            <div class="portlet">
                <div class="portlet-title">
                    <div class="caption" >
                            <h3 style ="margin-right:20px; text-align:center">{{trans('general.attached_files')}}</h3>  
                    </div>              
                    <div class="portlet-body">
                        <div class="table-scrollable">
                            <table class="table table-striped table-bordered table-advance table-hover">
                                <thead>
                                    <tr>
                                        <th> نام فایل </th>
                                        <th>دانلود </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($announcement->getFile($announcement->id,"Announcement")->count()>0)
                                    @foreach($announcement->getFile($announcement->id,"Announcement") as $document)
                                    <tr>
                                        <td>{{$document->extension}}</td>
                                        <td><a href="{{URL::to('/noticeboards/'.'download/'.$document->file.'/'.$document->id.'/'.'attachments')}}"><i class="fa fa-download"></i> {{trans('general.download')}} </a></td>
                                    </tr>
                                    @endforeach
                                    @else
                                        <td>{{trans('general.file_not_attached')}}</td>
                                    @endif                                            
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    
@endsection('content')
