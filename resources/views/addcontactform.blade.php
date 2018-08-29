@extends('layout')
@section('content')
            @if(count($errors) > 0)
                <div class="col-md-5">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    
                </div>
                @endif
                <form action="/contact" method="POST" >    
                    {{csrf_field()}}
                    
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="{{old('name')}}" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label>Enter Email</label>
                        <input type="email" name="email" class="form-control" value="{{old('email')}}" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                        <label>Camping Type</label>
                       
                    <div class="radio">
                      <label><input type="radio" name="type" value="Jr Camp" checked> Jr Camp</label> &nbsp;
                      <label><input type="radio" name="type" value="Family Camp"> Family Camp</label>&nbsp;
                      <label>&nbsp;<input type="radio" name="type" value="Other"> Other</label>
                    </div>
                    </div>
                    <div class="form-group">
                        <label>Content Body</label><br />
                        <textarea name="body" class="form-control rounded-0" rows="3">
                           {{old('body')}}
                        </textarea>
                        
                    </div>
                    <div class="cleafloat">&nbsp;</div>
                    <div class="form-group">
                        <input type="submit"  name="submit" class="btn btn-primary" value="Add" />
                    </div>
                </form>
@endsection