<div>
  <x-breadcrumb title="System Users" sub_title="add new User"/>

<div class="page-body">
  <div class="container-fluid">
    <div class="row g-3">
      <div class="col-12">
        <div class="card print_invoice">
          <div class="card-header border-bottom fs-4">
          </div>
          <div class="card-body">
            <div class="card p-3">
              <!-- Start Tab -->
              <div>
                <div>
                  <div class="modal-content">
                    <div class="modal-body custom_scroll">
                      <ul class="nav nav-tabs tab-card px-0" role="tablist">
                        <li class="nav-item flex-fill text-center">
                          <a class="nav-link active" href="add-user.html#step1" data-bs-toggle="tab" data-bs-step="1">1.
                            Personal Information</a>
                        </li>
                        <li class="nav-item flex-fill text-center">
                          <a class="nav-link" href="add-user.html#step2" data-bs-toggle="tab" data-bs-step="2">2.
                            Employment
                          </a>
                        </li>
                        <li class="nav-item flex-fill text-center">
                          <a class="nav-link" href="add-user.html#step3" data-bs-toggle="tab" data-bs-step="3">3.
                            Education</a>
                        </li>
                        <li class="nav-item flex-fill text-center">
                          <a class="nav-link" href="add-user.html#step4" data-bs-toggle="tab" data-bs-step="4">4.
                            Experience</a>
                        </li>
                        <li class="nav-item flex-fill text-center">
                          <a class="nav-link" href="add-user.html#step5" data-bs-toggle="tab" data-bs-step="5">5.
                            Banking & Compensation</a>
                        </li>
                        <li class="nav-item flex-fill text-center">
                          <a class="nav-link" href="add-user.html#step6" data-bs-toggle="tab" data-bs-step="6">6.
                            IT & Security</a>
                        </li>

                        <li class="nav-item flex-fill text-center">
                          <a class="nav-link" href="add-user.html#step7" data-bs-toggle="tab" data-bs-step="7">7.
                            Review</a>
                        </li>

                      </ul>
                      <!-- start: project status progress bar -->
                      <div class="progress bg-transparent" style="height: 3px; margin-top: -2px">
                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="1" aria-valuemin="1"
                          aria-valuemax="5" style="width: 20%"></div>
                      </div>
                      <div class="tab-content mt-3">
                        <!-- start: project type -->
                        <div class="tab-pane fade show active" id="step1">
                          <div class="card bg-body mb-2">
                            <div class="card-body">
                              <h6 class="card-title mb-1">
                                Personal Information
                              </h6>
                              <p class="text-muted small">
                                If you need more info, please check out
                                <a href="add-user.html#">FAQ Page</a>
                              </p>
                              <!-- Custome redio input -->

                              <div class="row g-2 mt-3">
                                <div class="form-floating mb-2 col-md-4">
                                  <input type="text" class="form-control" placeholder="Enter first name" />
                                  <label>First Name *</label>
                                </div>

                                <div class="form-floating mb-2 col-md-4">
                                  <input type="text" class="form-control" placeholder="Enter middle name" />
                                  <label>Middle Name </label>
                                </div>

                                <div class="form-floating mb-2 col-md-4">
                                  <input type="text" class="form-control" placeholder="Enter last name" />
                                  <label>Last Name *</label>
                                </div>

                                <div class="form-floating mb-2 col-md-4">
                                  <select class="form-select">
                                    <option selected>
                                      Open this select menu
                                    </option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                  </select>
                                  <label>Select Gender *</label>
                                </div>

                                <div class="form-floating mb-2 col-md-4">
                                  <input type="number" class="form-control" placeholder="Add telephone number" />
                                  <label>Phone Number *</label>
                                </div>
                                <div class="form-floating mb-2 col-md-4">
                                  <input type="email" class="form-control" placeholder="e.g. example@email.com" />
                                  <label>Email Address *</label>
                                </div>
                                <div class="form-floating mb-2 col-md-4">
                                  <input type="date" class="form-control" />
                                  <label>Date of Birth *</label>
                                </div>

                                <div class="form-floating mb-2 col-md-4">
                                  <select class="form-select">
                                    <option selected>
                                      Open this select menu
                                    </option>
                                    <option value="Single">Single</option>
                                    <option value="Married">
                                      Married
                                    </option>
                                    <option value="Divorced">
                                      Divorced
                                    </option>
                                    <option value="Widow">Widow</option>
                                    <option value="Widower">
                                      Widower
                                    </option>
                                  </select>
                                  <label>Marital Status *</label>
                                </div>
                                <div class="form-floating mb-2 col-md-4">
                                  <select class="form-select">
                                    <option selected>
                                      Open this select menu
                                    </option>
                                    <option value="1">Nigeria</option>
                                    <option value="2">Ghana</option>
                                    <option value="3">Zambia</option>
                                  </select>
                                  <label>Nationality *</label>
                                </div>

                                <div class="form-floating mb-2 col-md-4">
                                  <select class="form-select">
                                    <option selected>
                                      Open this select menu
                                    </option>
                                    <option value="nin">
                                      National Id
                                    </option>
                                    <option value="Voters card">
                                      Voter's Card
                                    </option>
                                    <option value="intl-passport">
                                      International Passport
                                    </option>
                                    <option value="drivers-license">
                                      Driver's License
                                    </option>
                                    <option value="Social Security Number">
                                      Social Security Number
                                    </option>
                                    <option value="Tax Identification Number">
                                      Tax Identification Number
                                    </option>
                                  </select>
                                  <label>Identification Type *</label>
                                </div>

                                <div class="form-floating mb-2 col-md-4">
                                  <input type="text" class="form-control" placeholder="Enter middle name" />
                                  <label>ID Number *</label>
                                </div>

                                <div class="form-floating mb-2 col-md-4">
                                  <input type="date" class="form-control" />
                                  <label>Expiry Date *</label>
                                </div>

                                <h4 class="my-md" style="margin: 15px 0">
                                  Emergency Contact
                                </h4>

                                <div class="form-floating mb-2 col-md-4">
                                  <input type="text" class="form-control" placeholder="Enter full name" />
                                  <label>Full Name *</label>
                                </div>

                                <div class="form-floating mb-2 col-md-4">
                                  <input type="text" class="form-control" placeholder="Emergency telephone" />
                                  <label>Telephone </label>
                                </div>

                                <div class="form-floating mb-2 col-md-4">
                                  <select class="form-select">
                                    <option selected>
                                      Open this select menu
                                    </option>
                                    <option value="father">Father</option>
                                    <option value="mother">Mother</option>
                                    <option value="brother">
                                      Brother
                                    </option>
                                    <option value="sister">Sister</option>
                                    <option value="son">Son</option>
                                  </select>
                                  <label>Relationship *</label>
                                </div>

                                <div class="col-12">
                                  <label class="form-label">Home Address</label>
                                  <textarea class="form-control" rows="3"></textarea>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="text-end">
                            <button type="button" class="btn btn-secondary">
                              Close
                            </button>
                            <button class="btn bg-secondary text-light next text-uppercase">
                              Save Record
                            </button>
                          </div>
                        </div>
                        <!-- start: Employment detail -->
                        <div class="tab-pane fade" id="step2">
                          <div class="card bg-body mb-2">
                            <div class="card-body">
                              <h6 class="card-title mb-1">
                                Employment Information
                              </h6>
                              <p class="text-muted small">
                                It is a long established fact that a
                                reader will be distracted by Avio.
                              </p>

                              <div class="row g-2 mt-3">
                                <div class="form-floating mb-2 col-md-4">
                                  <input type="text" class="form-control" placeholder="Job title" />
                                  <label>Job Title</label>
                                </div>

                                <div class="form-floating mb-2 col-md-4">
                                  <input type="text" class="form-control" placeholder="department" />
                                  <label>Department *</label>
                                </div>

                                <div class="form-floating mb-2 col-md-4">
                                  <select class="form-select">
                                    <option selected>
                                      Open this select menu
                                    </option>
                                    <option value="Full-Time">
                                      Full Time
                                    </option>
                                    <option value="Part Time">
                                      Part Time
                                    </option>
                                    <option value="Contract">
                                      Contract
                                    </option>
                                  </select>
                                  <label>Employment Status *</label>
                                </div>

                                <div class="form-floating mb-2 col-md-4">
                                  <input type="date" class="form-control" placeholder="start date" />
                                  <label>Start Date</label>
                                </div>

                                <div class="form-floating mb-2 col-md-4">
                                  <input type="text" class="form-control" placeholder="reporting manager" />
                                  <label>Reporting Manager/Supervisor *</label>
                                </div>
                                <div class="form-floating mb-2 col-md-4">
                                  <input type="text" class="form-control" placeholder="probation period" />
                                  <label>Probation Period (If any) *</label>
                                </div>

                                <div class="form-floating mb-2 col-12">
                                  <textarea class="form-control" rows="3" placeholder="Enter work location"></textarea>
                                  <label class="form-label">Work Location</label>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="text-end">
                            <button type="button" class="btn btn-secondary">
                              Close
                            </button>
                            <button class="btn bg-secondary text-light next text-uppercase">
                              Save Record
                            </button>
                          </div>
                        </div>
                        <!-- start: select team -->
                        <div class="tab-pane fade" id="step3">
                          <div class="card bg-body mb-2">
                            <div class="card-body">
                              <h6 class="card-title mb-1">
                                Education & Qualification
                              </h6>
                              <p class="text-muted small">
                                If you need more info, please check out
                                <a href="add-user.html#">Project Guidelines</a>
                              </p>

                              <div class="row g-2 mt-3">
                                <div class="form-floating mb-2 col-md-4">
                                  <select class="form-select">
                                    <option selected>
                                      Open this select menu
                                    </option>
                                    <option value="phd">PhD</option>
                                    <option value="MSc">MSc</option>
                                    <option value="BSc">BSc</option>
                                    <option value="College">
                                      College
                                    </option>
                                    <option value="Primary">
                                      Primary
                                    </option>
                                  </select>
                                  <label>Highest Qualification *</label>
                                </div>

                                <div class="form-floating mb-2 col-md-4">
                                  <input type="text" class="form-control" placeholder="Name of Institution" />
                                  <label>Institution Name</label>
                                </div>

                                <div class="form-floating mb-2 col-md-4">
                                  <input type="date" class="form-control" placeholder="year of graduation" />
                                  <label>Graduation Year *</label>
                                </div>

                                <div class="form-floating mb-2 col-md-12">
                                  <input type="text" class="form-control" placeholder="Languages spoken" />
                                  <label>List Languages Spoken*</label>
                                </div>
                                <div class="form-floating mb-2 col-md-6">
                                  <input type="text" class="form-control" placeholder="probation period" />
                                  <label>Professional Certifications *</label>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="text-end">
                            <button type="button" class="btn btn-secondary">
                              Close
                            </button>
                            <button class="btn bg-secondary text-light next text-uppercase">
                              Save Record
                            </button>
                          </div>
                        </div>
                        <!-- start: Upload Files -->
                        <div class="tab-pane fade" id="step4">
                          <div class="card bg-body mb-2">
                            <div class="card-body">
                              <h6 class="card-title mb-1">
                                Work Experience
                              </h6>
                              <div class="row g-2 mt-3">
                                <div class="form-floating mb-2 col-md-6">
                                  <input type="text" class="form-control" placeholder="Job Title" />
                                  <label>Job Title</label>
                                </div>
                                <div class="form-floating mb-2 col-md-6">
                                  <input type="text" class="form-control" placeholder="Previous Employer" />
                                  <label>Previous Employer</label>
                                </div>
                                <div class="form-floating mb-2 col-md-6">
                                  <input type="date" class="form-control" placeholder="Start Date" />
                                  <label>Start Date</label>
                                </div>
                                <div class="form-floating mb-2 col-md-6">
                                  <input type="date" class="form-control" placeholder="End Date" />
                                  <label>End Date</label>
                                </div>
                                <div class="form-floating mb-2 col-12">
                                  <textarea class="form-control" rows="3" placeholder="State reason for leaving"></textarea>
                                  <label class="form-label">Reason for Leaving</label>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="text-end">
                            <button type="button" class="btn btn-secondary">
                              Close
                            </button>
                            <button class="btn bg-secondary text-light next text-uppercase">
                              Save Record
                            </button>
                          </div>
                        </div>
                        <!-- start: Banking and Compensation -->
                        <div class="tab-pane fade" id="step5">
                          <div class="card bg-body mb-2">
                            <div class="card-body">
                              <h6 class="card-title mb-1">
                                Banking & Compensation
                              </h6>
                              <div class="row g-2 mt-3">
                                <div class="form-floating mb-2 col-md-3">
                                  <input type="text" class="form-control" placeholder="Bank Name" />
                                  <label>Bank Name</label>
                                </div>
                                <div class="form-floating mb-2 col-md-3">
                                  <input type="number" class="form-control" placeholder="Account Number" />
                                  <label>Account Number</label>
                                </div>
                                <div class="form-floating mb-2 col-md-3">
                                  <input type="number" class="form-control" placeholder="Bank Sort Code" />
                                  <label>Bank Sort Code</label>
                                </div>
                                <div class="form-floating mb-2 col-md-3">
                                  <input type="text" class="form-control" placeholder="Bank Branch" />
                                  <label>Bank Branch</label>
                                </div>
                                <h6 class="card-title mb-1">
                                  Benefits & Compensation
                                </h6>
                                <div class="form-floating mb-2 col-md-4">
                                  <input type="text" class="form-control" placeholder="Previous Salary" />
                                  <label>Previous Salary</label>
                                </div>

                                <div class="form-floating mb-2 col-md-4">
                                  <select class="form-select">
                                    <option selected>
                                      Open this select menu
                                    </option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                  </select>
                                  <label>Are you on a pension scheme? *</label>
                                </div>
                                <div class="form-floating mb-2 col-md-4">
                                  <input type="text" class="form-control" placeholder="Pension Administrator" />
                                  <label>Name of Pension Administrator</label>
                                </div>
                                <div class="form-floating mb-2 col-md-4">
                                  <input type="text" class="form-control" placeholder="pension ID" />
                                  <label>If Yes, Pension ID</label>
                                </div>

                                <div class="form-floating mb-2 col-md-4">
                                  <select class="form-select">
                                    <option selected>
                                      Open this select menu
                                    </option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                  </select>
                                  <label>Have Health Insurance? *</label>
                                </div>
                                <div class="form-floating mb-2 col-md-4">
                                  <input type="text" class="form-control" placeholder="pension ID" />
                                  <label>Name of Insurance</label>
                                </div>
                                <div class="form-floating mb-2 col-md-4">
                                  <input type="text" class="form-control" placeholder="pension ID" />
                                  <label>Insurance ID</label>
                                </div>
                                <div class="form-floating mb-2 col-12">
                                  <textarea class="form-control" rows="3" placeholder="State reason for leaving"></textarea>
                                  <label class="form-label">State any other benefit</label>
                                </div>

                              </div>
                            </div>
                          </div>
                          <div class="text-end">
                            <button type="button" class="btn btn-secondary">
                              Close
                            </button>
                            <button class="btn bg-secondary text-light next text-uppercase">
                              Save Record
                            </button>











                          </div>
                        </div>

                        <div class="tab-pane fade" id="step6">
                          <div class="card bg-body mb-2">
                            <div class="card-body">
                              <h6 class="card-title mb-1">
                                IT and Security
                              </h6>
                              <div class="row g-2 mt-3">
                                <div class="form-floating mb-2 col-md-6">
                                  <input type="email" class="form-control" placeholder="Enter official Email" />
                                  <label>Offical Email Address</label>
                                </div>
                                <div class="form-floating mb-2 col-md-6">
                                  <input type="text" class="form-control"
                                    placeholder="Company Equipment Issued" />
                                  <label>Company Equipment Issued</label>
                                </div>
                                <div class="form-floating mb-2 col-12">
                                  <textarea class="form-control" rows="3" placeholder="System Access Requirements"></textarea>
                                  <label class="form-label">Any System Access Requirements</label>
                                </div>

                                <div class="form-floating mb-2 col-12">
                                  <textarea class="form-control" rows="3" placeholder="Security Clearance Level (if applicable)"></textarea>
                                  <label class="form-label">Security Clearance Level (if applicable)</label>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="text-end">
                            <button type="button" class="btn btn-secondary">
                              Close
                            </button>
                            <button class="btn bg-secondary text-light next text-uppercase">
                              Save Record
                            </button>
                          </div>
                        </div>

                        <!-- Start New Tab -->

                        <div class="tab-pane fade" id="step7">
                          <div class="card bg-body mb-2">
                            <div class="card-body">
                              <h6 class="card-title mb-1">
                                Review and Submit
                              </h6>

                              <div class="row g-2 mt-3">




                                <div class="card fieldset border border-muted mt-3">
                                  <span class="fieldset-tile text-muted bg-body">Review Entry</span>


                                  <div class="card">
                                    <div class="card-body table-responsive p-0">






                                      <table class="table card-table mb-0">
                                        <thead>
                                          <tr>
                                            <th scope="col">Personal</th>
                                            <th scope="col"></th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>Full Name</td>
                                            <td>Ahmed Mohammed</td>
                                          </tr>
                                          <tr>
                                            <td>Gender </td>
                                            <td>Male</td>
                                          </tr>
                                          <tr>
                                            <td>Phone Number</td>
                                            <td>080123456789</td>
                                          </tr>
                                          <tr>
                                            <td>Email </td>
                                            <td>example@email.com</td>
                                          </tr>
                                          <tr>
                                            <td>Date of Birth: </td>
                                            <td>12 May, 1974</td>
                                          </tr>
                                          <tr>
                                            <td>Marital Status: </td>
                                            <td>Married</td>
                                          </tr>
                                          <tr>
                                            <td>Nationality: </td>
                                            <td>Nigerian</td>
                                          </tr>
                                          <tr>
                                            <td>Identification Type: </td>
                                            <td>Driver's License</td>
                                          </tr>
                                          <tr>
                                            <td>ID Number: </td>
                                            <td>234567899</td>
                                          </tr>
                                          <tr>
                                            <td>ID Expiry Date: </td>
                                            <td>12 May, 1974</td>
                                          </tr>
                                          <tr>
                                            <td>Emergency Contact: </td>
                                            <td>Dennis Philipson</td>
                                          </tr>
                                          <tr>
                                            <td>Phone: </td>
                                            <td>0823456788</td>
                                          </tr>
                                          <tr>
                                            <td>Relationship: </td>
                                            <td>Son</td>
                                          </tr>
                                          <tr>
                                            <td>Address: </td>
                                            <td>100 Main Street, Gwarinpa Estate, Lekki Phase 2</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                      <br><br>
                                      <table class="table card-table mb-0" style="margin: 20px 0;">
                                        <h6 class="card-title mb-1">
                                          Employment Information
                                        </h6>
                                        <thead>
                                          <tr>
                                            <th scope="col">Job Title</th>
                                            <th scope="col">Department</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Start </th>
                                            <th scope="col">End</th>
                                            <th scope="col">Reporting Officer</th>
                                            <th scope="col">Location</th>
                                            <th scope="col">Probation</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>UI/UX</td>
                                            <td>Engineering</td>
                                            <td>Full-Time</td>
                                            <td>2003</td>
                                            <td>2009</td>
                                            <td>Emeka Awa</td>
                                            <td>Lagos</td>
                                            <td>No</td>
                                          </tr>
                                          <tr>
                                            <td>HR</td>
                                            <td>Admin</td>
                                            <td>PartTime</td>
                                            <td>2003</td>
                                            <td>2009</td>
                                            <td>Emeka Awa</td>
                                            <td>Lagos</td>
                                            <td>No</td>
                                          </tr>
                                          <tr>
                                            <td>Secretary</td>
                                            <td>Admin</td>
                                            <td>Full-Time</td>
                                            <td>2014</td>
                                            <td>2009</td>
                                            <td>Ahmed Peter</td>
                                            <td>Abuja</td>
                                            <td>No</td>
                                          </tr>

                                        </tbody>
                                      </table>


                                      <br><br>
                                      <table class="table card-table mb-0" style="margin: 20px 0;">
                                        <h6 class="card-title mb-1">
                                          Education Information
                                        </h6>
                                        <thead>
                                          <tr>
                                            <th scope="col">Institution Name</th>
                                            <th scope="col">Qualification</th>
                                            <th scope="col">Graduation</th>
                                            <th scope="col">Languages </th>
                                            <th scope="col">Other Certification</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>National Open University</td>
                                            <td>BSc</td>
                                            <td>2001</td>
                                            <td>English, French, German</td>
                                            <td>CCIA, NCCE</td>
                                          </tr>
                                          <tr>
                                            <td>National Open University</td>
                                            <td>BSc</td>
                                            <td>2001</td>
                                            <td>English, French, German</td>
                                            <td>CCIA, NCCE</td>
                                          </tr>
                                          <tr>
                                            <td>National Open University</td>
                                            <td>BSc</td>
                                            <td>2001</td>
                                            <td>English, French, German</td>
                                            <td>CCIA, NCCE</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                      <br><br>
                                      <table class="table card-table mb-0" style="margin: 20px 0;">
                                        <h6 class="card-title mb-1">
                                          Experience
                                        </h6>
                                        <thead>
                                          <tr>
                                            <th scope="col">Job Title</th>
                                            <th scope="col">Previous Employeer</th>
                                            <th scope="col">Start</th>
                                            <th scope="col">End </th>
                                            <th scope="col">Reason for Leaving</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>Admin and Finance</td>
                                            <td>T and T Global Concepts India</td>
                                            <td>2001</td>
                                            <td>2004</td>
                                            <td>Salary was small</td>
                                          </tr>
                                          <tr>
                                            <td>Guard</td>
                                            <td>AB Justice Apartment </td>
                                            <td>2001</td>
                                            <td>20010</td>
                                            <td>Salary was too much</td>
                                          </tr>

                                        </tbody>
                                      </table>

                                      <br><br>
                                      <table class="table card-table mb-0" style="margin: 20px 0;">
                                        <h6 class="card-title mb-1">
                                          Banking & Compensation
                                        </h6>
                                        <thead>
                                          <tr>
                                            <th scope="col">Bank</th>
                                            <th scope="col">Number</th>
                                            <th scope="col">Sort Code</th>
                                            <th scope="col">Branch </th>
                                            <th scope="col">Last Salary</th>
                                            <th scope="col">Pension ID</th>
                                            <th scope="col">Pension Admin</th>
                                            <th scope="col">Health Ins. ID</th>
                                            <th scope="col">Health Ins. Admin</th>
                                            <th scope="col">Other Benefits</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>GT bank</td>
                                            <td>3456789876</td>
                                            <td>876545</td>
                                            <td>Madalla</td>
                                            <td>$12000</td>
                                            <td>3456789867</td>
                                            <td>Pension Alliance</td>
                                            <td>65456789</td>
                                            <td>Health Insurance Alliance</td>
                                            <td>Breakfast, Lunch Dinner</td>
                                          </tr>
                                          <tr>
                                            <td>Eco bank</td>
                                            <td>3456789876</td>
                                            <td>876545</td>
                                            <td>Madalla</td>
                                            <td>$12000</td>
                                            <td>3456789867</td>
                                            <td>Pension Alliance</td>
                                            <td>65456789</td>
                                            <td>Health Insurance Alliance</td>
                                            <td>Breakfast, Lunch Dinner</td>
                                          </tr>


                                        </tbody>
                                      </table>
                                      <br><br>
                                      <table class="table card-table mb-0" style="margin: 20px 0;">
                                        <h6 class="card-title mb-1">
                                          IT and Security
                                        </h6>
                                        <thead>
                                          <tr>
                                            <th scope="col">Email address</th>
                                            <th scope="col">Equipment Issued</th>
                                            <th scope="col">System Access Requirement</th>
                                            <th scope="col">Security Clearance Level </th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>newemail@email.com</td>
                                            <td>Tablet</td>
                                            <td>N/A</td>
                                            <td>N/A</td>
                                          </tr>
                                          <tr>
                                            <td>fakeemail@email.com</td>
                                            <td>Phone</td>
                                            <td>N/A</td>
                                            <td>N/A</td>
                                          </tr>

                                        </tbody>
                                      </table>

                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="text-end">
                              <button type="button" class="btn btn-secondary">
                                Close
                              </button>
                              <button class="btn bg-secondary text-light next text-uppercase">
                                Upload to Server
                              </button>
                            </div>
                          </div>



                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- .row end -->
        
      </div>
    </div>

  </div>
</div>
</div>

@assets
<!-- Plugin Js -->
{{-- <script src="{{asset('js/bundle/invoice.bundle.js')}}"></script> --}}
@endassets