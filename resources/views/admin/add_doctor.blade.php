<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
        label {
            display: inline-block;
            width: 200px
        }
    </style>
    @include('admin.css')
     
  </head>
  <body>
    <div class="container-scroller">
      
      @include('admin.sidebar')
      
        @include('admin.navbar')
        
        <div class="container-fluid page-body-wrapper">
            

        <div class="container"  style="padding: 100px" >
            
            @if(session()->has('message'))
            <button type="button" class="close" data-dismiss="alert">
                x
            </button>
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
            @endif

            <form method="POST"  action="{{ url('upload_doctor') }}" enctype="multipart/form-data">
                @csrf
                <div style="padding: 15px">
                    <label for="">Doctor`s Name</label>
                    <input type="text" style="color:#333" name="name" placeholder="Enter your name." required>
                </div>
                <div style="padding: 15px">
                    <label for="">Phone</label>
                    <input type="number" style="color:#333" name="phone" placeholder="Enter your contact." required>
                </div>
                <div style="padding: 15px">
                    <label for="">Speciality</label>
                    <select name="speciality" id="" style="color: #333; width: 200px " required>
                        <option value="">...Select Speciality...</option>
                        <option value="skin">Skin</option>
                        <option value="heart">Heart</option>
                        <option value="eye">Eye</option>
                        <option value="nose">Nose</option>
                    </select>
                    
                </div>
                <div style="padding:15px">
                    <label for="room_number.">Room Number</label>
                    <input type="number" style="color:#333" name="room" placeholder="Enter Room Number" required>
                </div>

                <div style="padding:15px">
                    <label for="">Doctor's Image</label>
                    <input type="file" name="file" required>
                </div>
                <div style="padding: 15px"> 
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('admin.script')
  </body>
</html>