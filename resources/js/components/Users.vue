<template>
    

       <div class="content-wrapper">
          
          <div class="row grid-margin">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h6 class="card-title">Order status</h6>
                  <div class="d-flex table-responsive">
                    <div class="btn-group mr-2">
                      <button class="btn btn-sm btn-info" @click="newModal"><i class="mdi mdi-plus-circle-outline"></i> Add New</button>
                    </div>
                    <div class="btn-group mr-2">
                      <button type="button" class="btn btn-light"><i class="mdi mdi-alert-circle-outline"></i></button>
                      <button type="button" class="btn btn-light"><i class="mdi mdi-delete-empty"></i></button>
                    </div>
                    <div class="btn-group mr-2">
                      <button type="button" class="btn btn-light"><i class="mdi mdi-printer"></i></button>
                    </div>
                    <div class="btn-group ml-auto mr-2 border-0">
                      <input type="text" class="form-control" placeholder="Search Here">
                    </div>
                    <div class="btn-group">
                      <button type="button" class="btn btn-light"><i class="mdi mdi-cloud"></i></button>
                      <button type="button" class="btn btn-light"><i class="mdi mdi-dots-vertical"></i></button>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table mt-3 border-top">
                      <thead>
                        <tr>
                          <th>User</th>
                          <th>Staff Name</th>
                          <th>User Roal</th>
                          <th>Created Date</th>
                          <th>Status</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                      <tr  role="row" class="odd" v-for="user in users" :key="user.id">
                        <td class="py-1">
                            <img src="assets/images/faces-clipart/pic-1.png" alt="image"/>
                          </td>
                          <td>{{user.name}}</td>
                          <td>{{user.userRoal | capitalize}}</td>
                          <td>{{user.created_at | myDate}}</td>
                          <td>$2100</td>
                          <td class="project-actions"><a class="green btn btn-outline btn-sm" href="#" ><i class="fa fa-folder"></i> </a> <a class="red btn btn-outline btn-sm" href="#" @click="editModal(user)"><i class="fa fa-pencil"></i></a>
                            <a class ="jsgrid-button jsgrid-delete-button" href="#" @click="deleteUser(user.id)">
                            <i class="icon-chart menu-icon"></i></a>
                          </td>
                        </tr>
                       
                      </tbody>
                    </table>
                  </div>
                  <div class="d-flex align-items-center justify-content-between flex-column flex-sm-row mt-4">
                    <p class="mb-3 mb-sm-0">Showing 1 to 20 of 20 entries</p>
                    <nav>
                      <ul class="pagination pagination-info mb-0">
                        <li class="page-item"><a class="page-link"><i class="mdi mdi-chevron-left"></i></a></li>
                        <li class="page-item active"><a class="page-link">1</a></li>
                        <li class="page-item"><a class="page-link">2</a></li>
                        <li class="page-item"><a class="page-link">3</a></li>
                        <li class="page-item"><a class="page-link">4</a></li>
                        <li class="page-item"><a class="page-link"><i class="mdi mdi-chevron-right"></i></a></li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>



          <div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="addNewLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" v-show="!editmode" id="addNewLabel">Add New</h5>
                    <h5 class="modal-title" v-show="editmode" id="addNewLabel">Update User's Info</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form @submit.prevent="editmode? updateUser() : createUser()">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Staff Name</label>
                                    <input v-model="form.name" placeholder="Name" type="text" name="name"
                                        class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
                                    <has-error :form="form" field="name"></has-error>
                                </div>

                                <div class="form-group">
                                    <label>Staff Email</label>
                                    <input v-model="form.email" placeholder="Email" type="text" name="email"
                                        class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
                                    <has-error :form="form" field="email"></has-error>
                                </div>

                                <div class="form-group">
                                    <label>Staff Password</label>
                                    <input v-model="form.password" placeholder="password" type="text" name="password"
                                        class="form-control" :class="{ 'is-invalid': form.errors.has('password') }">
                                    <has-error :form="form" field="password"></has-error>
                                </div>

                                <div class="form-group">
                                    <label>Staff Phone</label>
                                    <input v-model="form.userPhone" placeholder="Phone" type="text" name="userPhone"
                                        class="form-control" :class="{ 'is-invalid': form.errors.has('userPhone') }">
                                    <has-error :form="form" field="userPhone"></has-error>
                                </div>

                                <div class="form-group">
                                    <label>Staff Address</label>
                                    <input v-model="form.userAddress" placeholder="Address" type="text" name="userAddress"
                                        class="form-control" :class="{ 'is-invalid': form.errors.has('userAddress') }">
                                    <has-error :form="form" field="userAddress"></has-error>
                                </div>

                                <div class="form-group">
                                    <label>Staff Roal</label>
                                    <select v-model="form.userRoal" class="form-control" :class="{ 'is-invalid': form.errors.has('userRoal') }" name="userRoal">
                                        <option value="">Select User type</option>
                                        <option value="admin">admin</option>
                                        <option value="maneger">manager</option>
                                        <option value="staff">staff</option>
                                    </select>
                                    <has-error :form="form" field="userRoal"></has-error>
                                </div>

                                <div class="form-group">
                                    <label>Staff Image</label>
                                    <input v-model="form.userImage" placeholder="Roal" type="text" name="userImage"
                                        class="form-control" :class="{ 'is-invalid': form.errors.has('userImage') }">
                                    <has-error :form="form" field="userImage"></has-error>
                                </div>


                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <button v-show="editmode" type="submit" class="btn btn-success">Update</button>
                              <button v-show="!editmode" type="submit" class="btn btn-primary">Create</button>
                            </div>
                            </form>

                </div>
            </div>
            </div>
          
        </div>
</template>

<script>
export default {
  data() {
    return {
      editmode: false,
      users: {},
      form: new Form({
        id: "",
        salonsId: "",
        name: "",
        email: "",
        password: "",
        userPhone: "",
        userAddress: "",
        userImage: "",
        userRoal: ""
      })
    };
  },

  methods: {
    updateUser() {
      //this.$Progress.start();
      // console.log('Editing data');
      this.form
        .put("api/user/" + this.form.id)
        .then(() => {
          // success
          $("#addNew").modal("hide");
          swal("Updated!", "Information has been updated.", "success");
          // this.$Progress.finish();
          Fire.$emit("AfterCreate");
        })
        .catch(() => {
          //this.$Progress.fail();
        });
    },
    editModal(user) {
      this.editmode = true;
      this.form.reset();
      $("#addNew").modal("show");
      this.form.fill(user);
    },
    newModal() {
      this.editmode = false;
      this.form.reset();
      $("#addNew").modal("show");
    },

    deleteUser(id) {
      swal({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
      }).then(result => {
        // Send request to the server
        if (result.value) {
          this.form
            .delete("api/user/" + id)
            .then(() => {
              showSwal("success-message");
              Fire.$emit("AfterCreate");
            })
            .catch(() => {
              swal("Failed!", "There was something wronge.", "warning");
            });
        }
      });
    },
    loadUsers() {
      axios.get("api/user").then(({ data }) => (this.users = data.data));
    },
    createUser() {
      this.form
        .post("api/user")
        .then(() => {
          Fire.$emit("AfterCreate");
          $("#addNew").modal("hide");
        })
        .catch(() => {});
    }
  },
  created() {
    this.loadUsers();
    Fire.$on("AfterCreate", () => {
      this.loadUsers();
    });
  },
  mounted() {
    console.log("Component mounted.");
  }
};
</script>
