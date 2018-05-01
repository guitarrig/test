@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card" style="width:830px">
               <div class="card-header">
                 <center><h3>Workers Table</h3></center>

               </div>

               <div class="card-body">
                 <form method="POST" action="{{route('workers.store')}}">
                   @csrf
                   @method('POST')
                 <div class="form-row">
                      <div class="form-group col-md-4">
                       <label>Name</label>
                       <input type="text" name="name" class="form-control">
                      </div>

                      <div class="form-group col-md-4">
                       <label>Surname</label>
                       <input type="text" name="surname" class="form-control">
                     </div>

                     <div class="form-group col-md-4">
                      <label>Patronymic</label>
                      <input type="text" name="patronymic" class="form-control">
                    </div>

                    <div class="form-group col-md-3">
                     <label>Position</label>
                     <input type="text" name="position" class="form-control">
                   </div>

                   <div class="form-group col-md-3">
                    <label>Work start</label>
                    <input type="date" name="work_start" class="form-control">
                  </div>

                  <div class="form-group col-md-3">
                   <label>Salary</label>
                   <input type="number" name="salary" class="form-control">
                 </div>

                 <div class="form-group col-md-3">
                  <label>Chief id</label>
                  <input type="number" name="parent_id" class="form-control">
                </div>
                <center><button type="submit" class="btn btn-success">Create!</button></center>
                </div></form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection
