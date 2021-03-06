@extends ('layouts.app')

@section ('content')
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth register-bg-1 theme-one">
          <div class="row w-100">
            <div class="col-lg-4 mx-auto">
              <h4 class="text-center mb-4">Micheal Stevens SME Advisory Portal</h4>
              <p class="text-center mb-2">Fill the form to be part of us! </p>
              <div class="auto-form-wrapper">
                <form action="#">
                <div class="form-group">
                <label class="label">First Name</label>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="First Name">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                  <label class="label">Last Name</label>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Last Name">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                  <label class="label">Email Address</label>

                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Email Address">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>    
                  <div class="form-group">
                  <label class="label">Phone Number</label>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="  Phone Number">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                  <label class="label">Contact Address</label>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="  Address">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group">
                  <label class="label">Enter Password</label>
                    <div class="input-group">
                      <input type="password" class="form-control" placeholder="Enter Password">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                  <label class="label">Confirm Password</label>
                    <div class="input-group">
                      <input type="password" class="form-control" placeholder="Confirm Password">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                      
                  
                  
                  
                    <div class="form-group d-flex justify-content-center">
                    <div class="form-check form-check-flat mt-0">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" checked> I agree to the terms </label>
                    </div>
                  </div>
                  <div class="form-group">
                
                 <button class="btn btn-primary submit-btn btn-block"><a href = "/bizInfo">  SUBMIT</a></button>
                  </div>
                  <div class="text-block text-center my-3">
                    <span class="text-small font-weight-semibold">Already have an account ?</span>
                    <a href="/login" class="text-black text-small">Login</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      <!-- page-body-wrapper ends -->
    </div>
    
  @endsection