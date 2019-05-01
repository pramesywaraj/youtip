<table>
                   
				   <tr>{{$users->name}}</tr>
                   <tr>{{$users->username}}</tr>
                    <tr>{{$users->email}}</tr>
                    <tr>{{$users->no_hp}}</tr>
                    <tr>{{$users->alamat}}</tr>
</table>

<div class="form" action="{{route('profile.update')}}" method="post" >
					{{ csrf_field() }}
					{{ method_field('PATCH') }}
                    <div class="form-group">
                          <div class="col-xs-12">
                              <label for="name"><h4> Nama</h4></label>
                              <input type="text" class="form-control" value="{{$users->name}}" name="name" id="name" placeholder="name" title="enter your first name if any.">
                          </div>
                      </div>
                     <br>
                      <div class="form-group">
                          <div class="col-xs-12">
                             <label for="no_telp"><h4>Mobile</h4></label>
                              <input type="text" class="form-control" value="{{$users->no_hp}}" name="no_telp" id="no_telp" placeholder="enter mobile number" title="enter your mobile number if any.">
                          </div>
                      </div>
					  <br>
                      <div class="form-group">
                          <div class="col-xs-12">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" value="{{$users->email}}" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                          </div>
                      </div>
                      <br>
                      <div class="form-group">
                          <div class="col-xs-12">
                              <label for="alamat"><h4>Alamat</h4></label>
                              <input type="text" class="form-control" value="{{$users->alamat}}" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                          </div>
                      </div>
                     
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit" value="Save"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	
                            </div>
                      </div>
              	</form>
				  


</div>