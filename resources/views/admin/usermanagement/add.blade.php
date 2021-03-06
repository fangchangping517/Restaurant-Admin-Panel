@extends('admin.main')
@section('content')

<div class="page-container">

    <div class="page-container-1" id="page-container">
        <div class="page-title padding pb-0 ">
            <h2 class="text-md mb-0">Add User
            <!-- <a href="{{ url('admin/users') }}" class="btn btn-primary" style="float: right;color: white;">All Office Mangers</a> -->
            </h2>
            
        </div>        
    <div class="padding">

    <div class="tab-content mb-4">
        <div class="tab-pane fade show active" id="home2" role="tabpanel" aria-labelledby="home-tab">

            <form  data-plugin="parsley" data-option="{}"  method="post" action="{{ url('user/add') }}" enctype="multipart/form-data">
                @csrf
                
                <div class="form-group">
                    <input type="text" name="name" class="  form-control" placeholder="Name"  required="required">
                </div>

            
              
                
                <div class="form-group">
                    <input type="email" name="email" class="  form-control" placeholder="Email"    required="required">
                </div>

                <div class="form-group">
                    <input type="text" name="phone" class="form-control" placeholder="Phone"  required="required">
                </div>

                <div class="form-group">
                    <input type="password" name="password" class="  form-control" placeholder="Password"    required="required">
                </div>


                <div class="form-group">
                        <label>Select Role</label>
                        <select id="role" name="role" class="col-md-12 form-control" placeholder="Role" require>  
                        <optgroup label="Role">
                                
                                <option value="0"> Admin </option>  
                                <option value="1"> Manager  </option>  
                                <option value="3"> Client </option>  

                            </optgroup>                                                
                    </select>
                </div> 


                <div class="form-group">
                    <input type="file" name="img" class="  form-control" placeholder="File" >
                </div>


                                
                <div class=" form-group" style="padding: 0px;">                    
                    <button class="btn btn-primary" style="float: right;">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop

@section('script')
<script src="https://unpkg.com/imask"></script>
<script type="text/javascript">   
    $(document).ready( function() {    
        var phoneMask = IMask(
        document.getElementById('office_num'), {
            mask: '000-000-0000'
        });

        var phoneMask = IMask(
        document.getElementById('home_num'), {
            mask: '000-000-0000'
        });
        
    });
</script>

@stop




