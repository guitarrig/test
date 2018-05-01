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
                 @if(isset($worker->image))

                <img src="{{$worker->image->name}}" class="img-thumbnail rounded-circle" style="width:200px;height:200px;" alt="...">
                <form method="post" action="{{route('image.change')}}" enctype="multipart/form-data" >
                  @csrf
                 <div class="form-group">
                   <input type="hidden" name="id" value="{{$worker->id}}">
                   <label for="exampleFormControlFile1">Change photo</label><br>
                   <input type="file" id="exampleFormControlFile1" name="image">
                   <input type="submit" value="Upgrade!" class="btn btn-outline-success">
                 </div>
               </form>

                @else

                <form method="post" action="{{route('image.add')}}" enctype="multipart/form-data" >
                  @csrf
                 <div class="form-group">
                   <input type="hidden" name="id" value="{{$worker->id}}">
                   <label for="exampleFormControlFile1">Add a photo</label><br>
                   <input type="file" id="exampleFormControlFile1" name="image">
                   <input type="submit" value="Save!" class="btn btn-outline-info">
                 </div>
               </form>

                @endif

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
