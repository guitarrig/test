@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card" style="width:830px">
               <div class="card-header">
                 <center><h3>Edit worker</h3></center>

               </div>

               <div class="card-body">
                 <form method="POST" action="{{route('workers.update', $worker->id)}}">
                   @csrf
                   @method('PUT')
                 <div class="form-row">
                      <div class="form-group col-md-4">
                       <label>Name</label>
                       <input type="text" name="name" class="form-control" value="{{$worker->name}}">
                      </div>

                      <div class="form-group col-md-4">
                       <label>Surname</label>
                       <input type="text" name="surname" class="form-control" value="{{$worker->surname}}">
                     </div>

                     <div class="form-group col-md-4">
                      <label>Patronymic</label>
                      <input type="text" name="patronymic" class="form-control" value="{{$worker->patronymic}}">
                    </div>

                    <div class="form-group col-md-3">
                     <label>Position</label>
                     <input type="text" name="position" class="form-control" value="{{$worker->position}}">
                   </div>

                   <div class="form-group col-md-3">
                    <label>Work start</label>
                    <input type="date" name="work_start" class="form-control" value="{{$worker->work_start}}">
                  </div>

                  <div class="form-group col-md-3">
                   <label>Salary</label>
                   <input type="number" name="salary" class="form-control" value="{{$worker->salary}}">
                 </div>

                 <div class="form-group col-md-3">
                  <label>Chief id</label>
                  <input type="number" name="parent_id" class="form-control" value="{{$worker->parent_id}}">
                </div>
                <center><button type="submit" class="btn btn-success">Update!</button></center>
                </div></form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection
