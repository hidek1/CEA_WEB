@include('dashboardheader')
@if(Auth::check())
<div class="row">
<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="official-home" class="btn btn-primary"> Go back Official Page</a>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6 pull-left">
                                  @if(count($errors) > 0)
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach($errors->all() as $error)
                                                    <li>{{$error}}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    @if($message = Session::get('success'))
                                        <div class="alert alert-success alert-block">
                                            <button type="button" class="close" data-dismiss="alert">X</button>
                                            <strong>{{$message}}</strong>
                                        </div>
                                    @endif
                                    <form  action="{{ url('contactmail') }}"  method="POST" >
                                        {{ csrf_field() }}

                                        <div class="form-group" >
                                            
                                            <label>Request Fom</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="requestroom" id="optionsRadios1" value="change my room" checked>Change my room
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="requestroom" id="optionsRadios2" value="Room mate issue">Room Mate issue
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="requestroom" id="optionsRadios3" value="Other request">Other request
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Enter Subject</label>
                                            <input type="text" name="subject" class="form-control"value="" Placeholder="Subject">
                                        </div>
                                        <div class="form-group">
                                            <label>Enter Email</label>
                                            <input type="email" name="email" class="form-control"value="" Placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <label>Reason</label>
                                            <textarea class="form-control" name="reason" rows="5"></textarea>
                                        </div>
                                         <input type="hidden" name="name" value="{{Auth::user()->name}}">
                                         <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                        <input type="submit" name="submit" class="btn btn-primary" value="Submit Request">
                                        
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                
                                
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
</div>

@include('dashboardfooter');
@else
<h3>Page not found</h3>
@endif