<!-- ADD/UPDATE CLASS MODAL -->
<div class="modal fade" id="student_loads_modal" tabindex="-1" role="dialog" aria-labelledby="class_modal_label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="class_modal_label">Select Subjects Loads</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="class_form">
                    <table id="subject_ids" class="table table-bordered table-striped" >
                        <thead>
                            <tr>
                                <th width="2%"><input type="checkbox" id="select-all"></th>
                                <th>COURSECODE</th>
                                <th>Description</th>
                                <th>Units</th>
                                <th>Pre-Req</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="save_student_loads_btn">Save</button>
            </div>
        </div>
    </div>
</div>


<style>
.text-on-pannel {
  background: #fff none repeat scroll 0 0;
  height: auto;
  margin-left: 20px;
  padding: 3px 5px;
  position: absolute;
  margin-top: -47px;
  border: 1px solid #337ab7;
  border-radius: 8px;
}

.panel {
  /* for text on pannel */
  margin-top: 27px !important;
}

.panel-body {
  padding-top: 30px !important;
}

#dropzone {
  position: relative;
  border: 2px dotted #444;
  color: #444;
  height: 100px;
  margin: 0 auto;
  text-align: center;
  width: 100px;
}

#dropzone.hover {
  border: 2px solid green;
  color: green;
}

#dropzone.dropped {
  background: #fff;
  border: 5px solid #444;
}

#dropzone div {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

#dropzone.dropped img {
  padding: 20px auto;
  max-width: 90px;
  max-height: 90px;
}
#dropzone [type="file"] {
  cursor: pointer;
  position: absolute;
  opacity: 0;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
}
</style>
<script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
  <!-- Admission Form Modal -->
  <div class="modal fade" id="modal_form2" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3><i class="glyphicon glyphicon-user"></i> <span class="modal-title"></span></h3>
                </div>
                <div class="modal-body">
                <form action="#" id="form2" enctype='multipart/form-data'>
                        <input type="hidden" value="" name="id"/>
                        <div class="form-body">
                                    
                            <div class="panel panel-primary">
                                <div class="row panel-body">
                                <div id="dropzone">
                                        <div><i class="glyphicon glyphicon-plus"></i> Upload</div>
                                        <div id="image-preview"></div>

                                        <input id="imgfile" name="imgfile" value="" size='20' type="file" accept="image/png,image/jpeg, application/pdf" />
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-primary">
                                <div class="row panel-body">
                                <h4 class="text-on-pannel text-primary">Personal Information</h4>
                                    <div class="col-xs-3">
                                        <input name="lname" placeholder="Surname" class="form-control" type="text">
                                        <span class="help-block"></span>
                                        <label for="lname">Surname <b style="color:red;">*</b></label>
                                    </div>
                                    <div class="col-xs-4">
                                        <input name="fname" placeholder="Given Name" class="form-control" type="text">
                                        <span class="help-block"></span>
                                        <label for="fname">Given Name <b style="color:red;">*</b></label>
                                    </div>
                                    <div class="col-xs-3">
                                        <input name="mname" placeholder="Middle Name" class="form-control" type="text">
                                        <span class="help-block"></span>
                                        <label for="mname">Middle Name</label>
                                    </div>
                                    <div class="col-xs-2">
                                        <input name="extension" placeholder="Extension" class="form-control" type="text">
                                        <span class="help-block"></span>
                                        <label for="extension">Extension</label>
                                    </div>
                                </div><br>
                            </div>
                            <div class="panel panel-primary">
                                <div class="row panel-body">
                                    <div class="col-xs-3">
                                        <label for="birthdate">Birthdate</label>
                                        <input name="birthdate" class="form-control" type="date">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="col-xs-2">
                                    <label for="age">Age</label>
                                        <input name="age" placeholder="Age" class="form-control" type="text">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="col-xs-3">
                                        <label for="sex">Gender</label>
                                        <select name="sex" class="form-control"  id="">
                                            <option value="">Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="col-xs-2">
                                        <label for="height">Height</label>
                                        <input name="height" placeholder="Height" class="form-control" type="text">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="col-xs-2">
                                        <label for="weight">Weight</label>
                                        <input name="weight" placeholder="Weight (kg)" class="form-control" type="text">
                                        <span class="help-block"></span>
                                    </div>
                                
                                    <div class="col-xs-5">
                                        <input name="birthplace" placeholder="Birthplace" class="form-control" type="text">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="col-xs-3">
                                        <select name="citizenship"  class="form-control">
                                            <option value="">Citizenship</option>
                                            <option value="Filipino">Filipino</option>
                                            <option value="American">American</option>
                                            <option value="others">others</option>
                                        </select>
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="col-xs-4">
                                        <input name="religion" placeholder="Religion" class="form-control" type="text">
                                        <span class="help-block"></span>
                                    </div>
                                
                                    <div class="col-xs-2">
                                        <select name="civil_status"  class="form-control">
                                            <option value="">Civil Status</option>
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Divorced">Divorced</option>
                                            <option value="Separated">Separated</option>
                                            <option value="Widowed">Widowed</option>
                                        </select>
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="col-xs-2">
                                        <input name="mobile_no" placeholder="Mobile No. " class="form-control" type="text" pattern="09123456789">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="col-xs-4">
                                        <input name="email" placeholder="Email " class="form-control" type="email">
                                        <span id="email-error" class="help-block"></span>
                                    </div>
                                    <div class="col-xs-4">
                                        <input name="facebook" placeholder="Facebook " class="form-control" type="text">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-primary">
                                <div class="row panel-body">
                                <h4 class="text-on-pannel text-primary">Address</h4>
                                    <div class="col-xs-4">
                                        <input name="address" placeholder="Permanent Address/Current/Street" class="form-control" type="text">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="col-xs-3">
                                        <input name="city_municipality" placeholder="City Municipality" class="form-control" type="text">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="col-xs-3">
                                        <input name="province" placeholder="Province" class="form-control" type="text">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="col-xs-2">
                                        <input name="zip_code" placeholder="Zip Code" class="form-control" type="text">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="panel panel-primary">
                                <div class="row panel-body">
                                <h4 class="text-on-pannel text-primary">Family background</h4>
                                <!-- father -->
                                    <div class="col-xs-4">
                                        <label for="">Name</label>
                                        <input name="father" placeholder="Father's Name" class="form-control" type="text">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="col-xs-3">
                                        <label for="">Occupation</label>
                                        <input name="f_occupation" placeholder="Occupation" class="form-control" type="text">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="col-xs-2">
                                        <label for="">Contact</label>
                                        <input name="f_contact" placeholder="Contact #" class="form-control" type="text">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="col-xs-3">
                                        <label for="">Birthday</label>
                                        <input name="f_birthdate" placeholder="Birthday" class="form-control" type="date">
                                        <span class="help-block"></span>
                                    </div>  
                                <!-- Mother -->
                                    <div class="col-xs-4">
                                        <input name="mother" placeholder="Mother's Name" class="form-control" type="text">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="col-xs-3">
                                        <input name="m_occupation" placeholder="Occupation" class="form-control" type="text">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="col-xs-2">
                                        <input name="m_contact" placeholder="Contact #" class="form-control" type="text">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="col-xs-3">
                                        <input name="m_birthdate" placeholder="Birthday" class="form-control" type="date">
                                        <span class="help-block"></span>
                                    </div>  
                                <!-- Guardian -->
                                    <div class="col-xs-4">
                                        <input name="guardian" placeholder="Guardian's Name" class="form-control" type="text">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="col-xs-3">
                                        <input name="g_relationship" placeholder="Relationship" class="form-control" type="text">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="col-xs-2">
                                        <input name="g_contact" placeholder="Contact #" class="form-control" type="text">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="col-xs-3">
                                        <input name="g_birthdate" placeholder="Birthday" class="form-control" type="date">
                                        <span class="help-block"></span>
                                    </div>  
                                <!-- addres -->
                                    <div class="col-xs-6">
                                        <input name="parent_address" placeholder="Parent's Address" class="form-control" type="text">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="col-xs-6">
                                        <input name="guardian_address" placeholder="Guardian Address" class="form-control" type="text">
                                        <span class="help-block"></span>
                                    </div> 
                                </div>
                            </div>
                            <div class="panel panel-primary">
                                <div class="row panel-body">
                                <h4 class="text-on-pannel text-primary">For Working Students</h4>
                                    <div class="col-xs-4">
                                        <label for="">Name of the Company</label>
                                        <input name="ws_company" placeholder="Name of the Company" class="form-control" type="text">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="col-xs-4">
                                    <label for="">Position</label>
                                        <input name="ws_position" placeholder="Position" class="form-control" type="text">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="col-xs-4">
                                    <label for="">Date Started</label>
                                        <input name="ws_date_started" placeholder="Province" class="form-control" type="date">
                                        <span class="help-block"></span>
                                    </div>

                                    <div class="col-xs-4">
                                        <label for="">Name of Employer</label>
                                        <input name="ws_employer" placeholder="Name of Employer" class="form-control" type="text">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="col-xs-4">
                                    <label for="">Contact</label>
                                        <input name="ws_employer_contact" placeholder="Contact" class="form-control" type="text" pattern="09123456789">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="col-xs-4">
                                    <label for="">Office Address</label>
                                        <input name="ws_company_address" placeholder="Address" class="form-control" type="text">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                            </div><br>

                            <!-- EDUCATIOn -->
                            <h4>Educational Information</h4>
                            <div class="panel panel-primary">
                                <div class="row panel-body">
                                <h4 class="text-on-pannel text-primary">Tertiary</h4>
                                    <div class="col-xs-8">
                                        <label for="">School Last Attended</label>
                                        <input name="tertiary_school_last_attended" placeholder="School Last Attended" class="form-control" type="text">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="col-xs-4">
                                    <label for="">Year Last Attended</label>
                                        <select id="tertiary_year_last_attended" name="tertiary_year_last_attended" class="form-control" ></select>
                                        <span class="help-block"></span>
                                    </div>

                                    <div class="col-xs-4">
                                        <label for="">School Address</label>
                                        <input name="tertiary_school_address" placeholder="School Address" class="form-control" type="text">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="col-xs-4">
                                    <label for="">City/Municipality</label>
                                        <input name="tertiary_city" placeholder="City/Municipality" class="form-control" type="text">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="col-xs-4">
                                    <label for="">Province</label>
                                        <input name="tertiary_province" placeholder="Province" class="form-control" type="text">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-primary">
                                <div class="row panel-body">
                                <h4 class="text-on-pannel text-primary">Secondary Senior High School</h4>
                                    <div class="col-xs-8">
                                        <label for="">School Last Attended</label>
                                        <input name="secondary_school_last_attended" placeholder="School Last Attended" class="form-control" type="text">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="col-xs-4">
                                    <label for="">Year Last Attended</label>
                                        <select id="secondary_year_last_attended" name="secondary_year_last_attended" class="form-control" ></select>
                                        <span class="help-block"></span>
                                    </div>

                                    <div class="col-xs-4">
                                        <label for="">School Address</label>
                                        <input name="secondary_school_address" placeholder="School Address" class="form-control" type="text">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="col-xs-4">
                                    <label for="">City/Municipality</label>
                                        <input name="secondary_city" placeholder="City/Municipality" class="form-control" type="text">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="col-xs-4">
                                    <label for="">Province</label>
                                        <input name="secondary_province" placeholder="Province" class="form-control" type="text">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-primary">
                                <div class="row panel-body">
                                <h4 class="text-on-pannel text-primary">Secondary - Junior High School</h4>
                                    <div class="col-xs-8">
                                        <label for="">School Last Attended</label>
                                        <input name="secondary_junior_school_last_attended" placeholder="School Last Attended" class="form-control" type="text">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="col-xs-4">
                                    <label for="">Year Last Attended</label>
                                        <select id="secondary_junior_year_last_attended" name="secondary_junior_year_last_attended" class="form-control" ></select>
                                        <span class="help-block"></span>
                                    </div>

                                    <div class="col-xs-4">
                                        <label for="">School Address</label>
                                        <input name="secondary_junior_school_address" placeholder="School Address" class="form-control" type="text">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="col-xs-4">
                                    <label for="">City/Municipality</label>
                                        <input name="secondary_junior_city" placeholder="City/Municipality" class="form-control" type="text">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="col-xs-4">
                                    <label for="">Province</label>
                                        <input name="secondary_junior_province" placeholder="Province" class="form-control" type="text">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-primary">
                                <div class="row panel-body">
                                <h4 class="text-on-pannel text-primary">Primary</h4>
                                    <div class="col-xs-8">
                                        <label for="">School Last Attended</label>
                                        <input name="primary_school_last_attended" placeholder="School Last Attended" class="form-control" type="text">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="col-xs-4">
                                    <label for="">Year Last Attended</label>
                                        <select id="primary_year_last_attended" name="primary_year_last_attended" class="form-control" ></select>
                                        <span class="help-block"></span>
                                    </div>

                                    <div class="col-xs-4">
                                        <label for="">School Address</label>
                                        <input name="primary_school_address" placeholder="School Address" class="form-control" type="text">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="col-xs-4">
                                    <label for="">City/Municipality</label>
                                        <input name="primary_city" placeholder="City/Municipality" class="form-control" type="text">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="col-xs-4">
                                    <label for="">Province</label>
                                        <input name="primary_province" placeholder="Province" class="form-control" type="text">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-primary">
                                <div class="row panel-body">
                                <h4 class="text-on-pannel text-primary">Program</h4>
                                <!-- father -->
                                    <div class="col-xs-6">
                                        <label for="year_level">Year Level</label>
                                        <select name="year_levels" id="year_levels" class="form-control">
                                            <option value="">Select Year Level</option>
                                        </select>
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="col-xs-6">
                                        <label for="program">Course/Program <b style="color:red;">*</b></label>
                                        <select name="program" id="program" class="form-control">
                                            <option value="">Select a course</option>
                                        </select>
                                        <span class="help-block"></span>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                </form>
                <div class="modal-footer">
                    <button type="button" id="btnSave" onclick="save_student()" class="btn btn-primary"><i class="glyphicon glyphicon-save"></i> Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Cancel</button>
                </div>
                </div>
            </div>
        </div>
  </div>
  <script type="text/javascript">
    const yearDropdownField = $("#tertiary_year_last_attended");
    const yearDropdownField1 = $("#secondary_year_last_attended");
    const yearDropdownField2 = $("#secondary_junior_year_last_attended");
    const yearDropdownField3 = $("#primary_year_last_attended");

    window.onload = function () {

      populateYearDropdown();
      populateYearDropdown1();
      populateYearDropdown2();
      populateYearDropdown3();

      // Initially, we make hidden Date Dropdown Div.
      $("#dateDropdownDiv").toggle();

      // Add click event on selectedDateField and called toggle method on dateDropdownDiv
      $("#selectedDateField").click(function () {
        $("#dateDropdownDiv").toggle();
      });
    };

    function populateYearDropdown() {
      const currentYear = new Date().getFullYear();
      for (let i = currentYear; i >= 1950; i--) {
        const option = document.createElement("OPTION");
        option.innerHTML = i;
        option.value = i;
        yearDropdownField.append(option);
      }
    }
    function populateYearDropdown1() {
      const currentYear = new Date().getFullYear();
      for (let i = currentYear; i >= 1950; i--) {
        const option = document.createElement("OPTION");
        option.innerHTML = i;
        option.value = i;
        yearDropdownField1.append(option);
      }
    }
    function populateYearDropdown2() {
      const currentYear = new Date().getFullYear();
      for (let i = currentYear; i >= 1950; i--) {
        const option = document.createElement("OPTION");
        option.innerHTML = i;
        option.value = i;
        yearDropdownField2.append(option);
      }
    }
    function populateYearDropdown3() {
      const currentYear = new Date().getFullYear();
      for (let i = currentYear; i >= 1950; i--) {
        const option = document.createElement("OPTION");
        option.innerHTML = i;
        option.value = i;
        yearDropdownField3.append(option);
      }
    }

</script>
<script>
    $(function() {
  
  $('#dropzone').on('dragover', function() {
    $(this).addClass('hover');
  });
  
  $('#dropzone').on('dragleave', function() {
    $(this).removeClass('hover');
  });
  
  $('#dropzone input').on('change', function(e) {
    var file = this.files[0];

    $('#dropzone').removeClass('hover');
    
    if (this.accept && $.inArray(file.type, this.accept.split(/, ?/)) == -1) {
      return alert('File type not allowed.');
    }
    
    $('#dropzone').addClass('dropped');
    $('#dropzone img').remove();
    
    if ((/^image\/(gif|png|jpeg)$/i).test(file.type)) {
      var reader = new FileReader(file);

      reader.readAsDataURL(file);
      
      reader.onload = function(e) {
        var data = e.target.result,
            $img = $('<img />').attr('src', data).fadeIn();
        
        $('#dropzone div').html($img);
      };
    } else {
      var ext = file.name.split('.').pop();
      
      $('#dropzone div').html(ext);
    }
  });
});
</script>
<style>
#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  /* z-index: 1;  */
  left: 50%; /* Center horizontally */
  top: 50%; /* Center vertically */
  transform: translate(-50%, -50%); /* Center both horizontally and vertically */
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgba(0,0,0,0.9); 
  padding: 20px; /* Add some padding for readability */
}


/* Modal Content (image) */
.modal-content1 {
  margin: auto;
  display: block;
  width: 90%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content1, #caption {  
  animation-name: zoom;
  animation-duration: 0.6s;
}

@keyframes zoom {
  from {transform: scale(0.1)} 
  to {transform: scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
</style>
<div id="myModal" class="modal">
  <span class="close" onclick="closeModal()">&times;</span>
  <img class="modal-content1" id="img01">
</div>

<script>
function openModal(img) {
  var modal = document.getElementById("myModal");
  var modalImg = document.getElementById("img01");
  modal.style.display = "block";
  modalImg.src = img.src;
}

function closeModal() {
  var modal = document.getElementById("myModal");
  modal.style.display = "none";
}
</script>