@extends('layouts.master')

@section('page-title')

  Room

@endsection

@section('content')

 <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-t2">
      <ul class="breadcrumb">
        <li><a href="{{ url('dashboard') }}"> Dashboard </a></li>
        <li><a href="{{ url('room') }}"> Room </a></li>
        <li class="active"> Edit </li>
      </ul>
    </div>
  </div>

  <div class="row">

    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12 margin-t1">
      @include('partials.flash_message')
      @include('partials.validate')
    </div>


    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-t2">
    
      <div class="blog blog-success">
        <div class="blog-header"> <h5 class="blog-title"> Rooms </h5> </div>

        <div class="blog-body">
          <div class = "col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <form class="form-horizontal" method="POST" action = "{{ url('room/edit',array($rooms->id)) }}">
                  {{csrf_field()}}
                   
                    <div class="form-group">
                      <label for="roomName" class=" control-label">Room Name</label>
                      
                        <input type="text" name = "roomName"class="form-control" id="inputEmail" value = "<?php echo $rooms->room_name; ?>">
                      
                    </div>
                    <div class="form-group">
                      <label for="inputMailServer" class=" control-label">Mail Server</label>
                      
                        <input type="text" name = "mailServer" class="form-control" id="inputEmail" value = "<?php echo $rooms->mail_server; ?>">
                      
                    </div>
                    <div class="form-group">
                      <label for="roomEmail"  class=" control-label">Room Email</label>
                      
                        <input type="text" name = "roomEmail"  class="form-control" id="inputRoomEmail" value = "<?php echo $rooms->room_email; ?>">
                      
                    </div>
                    <div class="form-group">
                      <label for="inputPassword" class=" control-label">Password</label>
                        
                        <input type="password" name = "password"  class="form-control" id="inputPassword" value = "<?php echo $rooms->password; ?>">
                      
                    </div>
                    <div class="form-group">
                      <label for="port" class=" control-label">Port</label>
                      
                        <input type="text" name = "port"  class="form-control" id="port" value = "<?php echo $rooms->port; ?>">
                      
                    </div>
                    <div class="form-group">
                      <label for="description" class=" control-label">Description</label>
                      
                        <textarea class="form-control" name = "description"  rows="3" id="textArea"><?php echo $rooms->description;?></textarea>
                    </div>
                    <div class="form-group">

                        <a href="{{url('/room')}}" class="btn btn-warning">Back</a>
                        <button type="submit" class="btn btn-success"> Update </button>
                    
                    </div>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div> 


@endsection


@section('extra-script')

    <script type="text/javascript">
        
        $mn_list = $('#menu > ul > li.room');
        $('#menu > ul > li').removeClass('highlight active ');
        $mn_list.addClass('highlight active');
        $mn_list.find('ul').css({'display': 'block'});
        $mn_list.find('ul > li:nth-child(2) > a').addClass('select');

    </script>

@endsection

