<template>
     <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">jquery-steps wizard</h4>
                  <form id="example-form" action="#">
                    <div>
                      <h3>Account</h3>
                      <section>
                        <h4>Account details</h4>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
                          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" id="exampleInputPassword1" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword2">Confirm Password</label>
                          <input type="password" id="exampleInputPassword2" class="form-control" placeholder="Confirm password">
                        </div>
                      </section>
                      <h3>Profile</h3>
                      <section>
                        <h4>Profile details</h4>
                        <div class="form-group">
                          <label for="exampleInputEmail1">First name</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter first name">
                        </div>
                        <div class="form-group">
                          <label>Last name</label>
                          <input type="password" class="form-control" placeholder="Last name">
                        </div>
                        <div class="form-group">
                          <label>Profession</label>
                          <input type="password" class="form-control" placeholder="Profession">
                        </div>
                      </section>
                      <h3>Comments</h3>
                      <section>
                        <h4>Enter your comments</h4>
                        <div class="form-group">
                          <label>Comments</label>
                          <textarea class="form-control" rows="3"></textarea>
                        </div>
                      </section>
                      <h3>Finish</h3>
                      <section>
                        <h4>You are almost there!</h4>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="checkbox" type="checkbox">
                            I agree with the Terms and Conditions.
                          </label>
                        </div>
                      </section>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!--vertical wizard-->
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">jquery-steps vertical wizard</h4>
                  <form id="example-vertical-wizard" action="#">
                    <div>
                      <h3>Account</h3>
                      <section>
                        <h4>Account details</h4>
                        <div class="form-group">
                          <label for="userName">User name *</label>
                          <input id="userName" name="userName" type="text" class="required form-control">
                        </div>
                        <div class="form-group">
                          <label for="password">Password *</label>
                          <input id="password" name="password" type="password" class="required form-control">
                        </div>
                        <div class="form-group">
                          <label for="confirm">Confirm Password *</label>
                          <input id="confirm" name="confirm" type="password" class="required form-control">
                          <small>(*) Mandatory</small>
                        </div>
                      </section>
                      <h3>Profile</h3>
                      <section>
                        <h4>Profile details</h4>
                        <div class="form-group">
                          <label for="name">First name *</label>
                          <input id="name" name="name" type="text" class="required form-control">
                        </div>
                        <div class="form-group">
                          <label for="surname">Last name *</label>
                          <input id="surname" name="surname" type="text" class="required form-control">
                        </div>
                        <div class="form-group">
                          <label for="email">Email *</label>
                          <input id="email" name="email" type="text" class="required email form-control">
                        </div>
                        <div class="form-group">
                          <label for="address">Address</label>
                          <input id="address" name="address" type="text" class="form-control">
                          <small>(*) Mandatory</small>
                        </div>
                      </section>
                      <h3>Finish</h3>
                      <section>
                        <h4>Terms and conditions</h4>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="checkbox" type="checkbox">
                            I agree with the Terms and Conditions.
                          </label>
                        </div>
                      </section>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  }
};
</script>
