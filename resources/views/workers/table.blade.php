@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card" style="width:830px">
               <div class="card-header">
                 <center><h3>Workers Table</h3></center>

                 <form method="POST"  action="{{route('workers.create')}}">
                   @csrf
                   @method('GET')
                   <input type="submit" value="Create worker" class="btn btn-outline-success">
                 </form>
                 <form method="POST" action="{{route('search')}}" >
                   @csrf
                   <div class="form-inline">
                   <input type="text" name="search" placeholder="Search . . ." class="form-control">
                   <input type="submit" value="Search" class="btn btn-outline-primary">
                 </div>
                 </form>


                 <form action="{{route('table')}}" method="POST" id="order_by">
                   @csrf
                 </form>

                <div class="input-group">
                  <select class="custom-select" id="inputGroupSelect04" form="order_by" name="order_by" required >
                    <option selected value="">Choose order</option>
                    <option value="id">Id</option>
                    <option value="name">Name</option>
                    <option value="surname">Surname</option>
                    <option value="patronymic">Patronymic</option>
                    <option value="position">Position</option>
                    <option value="salary">Salary</option>
                    <option value="work_start">Start of work</option>
                    <option value="parent_id">Chief id</option>
                  </select>
                  <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" form="order_by">Order</button>
                  </div>

                </div>


               </div>

               <div class="card-body">

                 <table class="table">
                  <thead class="thead-dark">
                   <tr>
                     <th scope="col">Photo</th>
                     <th scope="col">Id</th>
                     <th scope="col">Name</th>
                     <th scope="col">Surname</th>
                     <th scope="col">Patronymic</th>
                     <th scope="col">Position</th>
                     <th scope="col">Salary</th>
                     <th scope="col">Start of work</th>
                     <th scope="col">Chief id</th>
                   </tr>
                  </thead>
                    <tbody>
                      @foreach($workers as $worker)

                      <tr>
                        @if(!is_null($worker->path))
                        <td><img src="{{$worker->path}}" class="img-thumbnail rounded-circle" style="width:40px;height:40px;" alt="..."></td>
                        @else
                        <td>-</td>
                        @endif
                        <th scope="row"><a href="{{route('workers.show', $worker->id)}}">{{$worker->id}}</a></th>
                        <td><a href="{{route('workers.show', $worker->id)}}">{{$worker->name}}</a></td>
                        <td>{{$worker->surname}}</td>
                        <td>{{$worker->patronymic}}</td>
                        <td>{{$worker->position}}</td>
                        <td>{{$worker->salary}}</td>
                        <td>{{$worker->work_start}}</td>
                        <td>{{$worker->parent_id}}</td>
                      </a></tr>
                      @endforeach
                    </tbody>
                  </table>

               </div>
           </div>
       </div>
   </div>
</div>
@endsection
