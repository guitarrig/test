@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card" style="width:830px">
               <div class="card-header">
                 <center><h3>Info</h3></center>
               </div>

               <div class="card-body">
                <p> Name: {{$worker->name}}</p>
                 <p>Surname: {{$worker->surname}}</p>
                 <p>Patronymic: {{$worker->patronymic}}</p>
                 <p>Position: {{$worker->position}}</p>
                 <p>Salary: {{$worker->salary}}</p>
                 <p>Work start: {{$worker->work_start}}</p>
                 <p>Chief id: {{$worker->parent_id}}</p>
                 <div class="form-row">
                   <form method="POST" action="{{route('workers.edit', $worker->id)}}">
                   @csrf
                   @method('GET')
                   <input type="submit" value="Edit" class="btn btn-success">
                 </form>
                 <form method="POST" action="{{route('workers.destroy', $worker->id)}}">
                   @csrf
                   @method('DELETE')
                   <input type="submit" value="Delete" class="btn btn-danger">
                 </form></div>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection
