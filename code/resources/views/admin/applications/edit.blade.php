@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Application
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($application, ['route' => ['admin.applications.update', $application->id], 'method' => 'patch']) !!}

                        @include('admin.applications.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection