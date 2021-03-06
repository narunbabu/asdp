@extends('layouts.app')
@section('content')


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>New Task Assignment</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('AssignTasks.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    {!! Form::open(array('route' => 'AssignTasks.store','method'=>'POST')) !!}
    <div class="row">


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Task Name:</strong>
                
            <select name="task_id" class="form-control">
            @foreach ($works as $work)
            <option value="{{$work->id}}">{{$work->id}} . {{$work->worknature}} , {{$work->onskills}} , {{$work->worktitle}} , {{$work->worktitle}} , {{$work->whatinitforme}}</option>                
            @endforeach
            </select>

            <!-- <input name="single" type="radio" value="single">
            {!! Form::text('task_id', null, array('placeholder' => 'Task ID','class' => 'form-control')) !!}  -->
                
                   
                
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>User Name</strong>
                <select name="user_id" class="form-control">
                     @foreach ($users as $user)
                        <option value="{{$user->id}}">{{$user->id}} . {{$user->name}} , {{$user->email}}</option>                
                     @endforeach
                </select>



                <!-- <ul>
                @foreach ($users as $user)
                    <li>{{ $user->id }}.{{ $user->name }}</li>
                    
                @endforeach
                </ul>
                {!! Form::text('user_id', null, array('placeholder' => 'User ID','class' => 'form-control')) !!}
                 -->
                            
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Guide Name</strong>
                <select name="guide_id" class="form-control">
                     @foreach ($users as $user)
                        <option value="{{$user->name}}">{{$user->id}} . {{$user->name}} , {{$user->email}}</option>                
                     @endforeach
                </select>
                <!-- {!! Form::text('guide_id', null, array('placeholder' => 'Guide ID','class' => 'form-control')) !!} -->
                             
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Reviewer Name</strong>
                <select name="reviewer_id" class="form-control">
                     @foreach ($users as $user)
                        <option value="{{$user->name}}">{{$user->id}} . {{$user->name}} , {{$user->email}}</option>                
                     @endforeach
                </select>
                <!-- {!! Form::text('reviewer_id', null, array('placeholder' => 'Reviewer ID','class' => 'form-control')) !!} -->
                            
            </div>
        </div>
        <!-- <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Marks:</strong>
                {!! Form::text('marks', null, array('placeholder' => 'Marks for this task','class' => 'form-control')) !!}
            </div>
        </div> -->


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group" class="form-control">
                <strong>Assigned Date:</strong>
                {!! Form::text('assigned_date', null, array('placeholder' => 'task assigned date','class' => 'form-control')) !!}
             
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Completion Date:</strong>
                {!! Form::text('completion_date', null, array('placeholder' => 'Completion Date','class' => 'form-control')) !!}
               
            </div>
        </div>
        


        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>


    </div>
    {!! Form::close() !!}




@endsection