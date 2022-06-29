@extends('layouts.admin')

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <section id="validation">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">ADD NEW TOUR PACKAGE</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                    <div class="heading-elements">
                      <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-content collapse show">
                    <div class="card-body">
                      <form action="#" class="steps-validation wizard-notification">
                        <!-- Step 1 -->
                        <h6>Step 1</h6>
                        <fieldset>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="firstName3">
                                  First Name :
                                  <span class="danger">*</span>
                                </label>
                                <input type="text" class="form-control required" id="firstName3" name="firstName">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="lastName3">
                                  Last Name :
                                  <span class="danger">*</span>
                                </label>
                                <input type="text" class="form-control required" id="lastName3" name="lastName">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="emailAddress5">
                                  Email Address :
                                  <span class="danger">*</span>
                                </label>
                                <input type="email" class="form-control required" id="emailAddress5" name="emailAddress">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="location">
                                  Select City :
                                  <span class="danger">*</span>
                                </label>
                                <select class="c-select form-control required" id="location" name="location">
                                  <option value="">Select City</option>
                                  <option value="Amsterdam">Amsterdam</option>
                                  <option value="Berlin">Berlin</option>
                                  <option value="Frankfurt">Frankfurt</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="phoneNumber3">Phone Number :</label>
                                <input type="tel" class="form-control" id="phoneNumber3">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="date3">Date of Birth :</label>
                                <input type="date" class="form-control" id="date3">
                              </div>
                            </div>
                          </div>
                        </fieldset>
                        <!-- Step 2 -->
                        <h6>Step 2</h6>
                        <fieldset>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="proposalTitle3">
                                  Proposal Title :
                                  <span class="danger">*</span>
                                </label>
                                <input type="text" class="form-control required" id="proposalTitle3" name="proposalTitle">
                              </div>
                              <div class="form-group">
                                <label for="emailAddress6">
                                  Email Address :
                                  <span class="danger">*</span>
                                </label>
                                <input type="email" class="form-control required" id="emailAddress6" name="emailAddress">
                              </div>
                              <div class="form-group">
                                <label for="videoUrl3">Video URL :</label>
                                <input type="url" class="form-control" id="videoUrl3" name="videoUrl">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="jobTitle3">
                                  Job Title :
                                  <span class="danger">*</span>
                                </label>
                                <input type="text" class="form-control required" id="jobTitle3" name="jobTitle">
                              </div>
                              <div class="form-group">
                                <label for="shortDescription3">Short Description :</label>
                                <textarea name="shortDescription" id="shortDescription3" rows="4" class="form-control"></textarea>
                              </div>
                            </div>
                          </div>
                        </fieldset>
                        <!-- Step 3 -->
                        <h6>Step 3</h6>
                        <fieldset>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="eventName3">
                                  Event Name :
                                  <span class="danger">*</span>
                                </label>
                                <input type="text" class="form-control required" id="eventName3" name="eventName">
                              </div>
                              <div class="form-group">
                                <label for="eventType3">
                                  Event Type :
                                  <span class="danger">*</span>
                                </label>
                                <select class="c-select form-control required" id="eventType3" name="eventType3">
                                  <option value="Banquet">Banquet</option>
                                  <option value="Fund Raiser">Fund Raiser</option>
                                  <option value="Dinner Party">Dinner Party</option>
                                  <option value="Wedding">Wedding</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="eventLocation3">Event Location :</label>
                                <select class="c-select form-control" id="eventLocation3" name="eventLocation">
                                  <option value="">Select City</option>
                                  <option value="Amsterdam">Amsterdam</option>
                                  <option value="Berlin">Berlin</option>
                                  <option value="Frankfurt">Frankfurt</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="eventDate">
                                  Event Date - Time :
                                  <span class="danger">*</span>
                                </label>
                                <div class='input-group'>
                                  <input type='text' class="form-control datetime required" id="eventDate" name="eventDate"
                                  />
                                  <span class="input-group-addon">
                                    <span class="ft-calendar"></span>
                                  </span>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="eventStatus3">
                                  Event Status :
                                  <span class="danger">*</span>
                                </label>
                                <select class="c-select form-control required" id="eventStatus3" name="eventStatus">
                                  <option value="Planning">Planning</option>
                                  <option value="In Progress">In Progress</option>
                                  <option value="Finished">Finished</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label>Requirements :</label>
                                <div class="c-inputs-stacked">
                                  <div class="d-inline-block custom-control custom-checkbox">
                                    <input type="checkbox" name="status3" class="custom-control-input" id="staffing3">
                                    <label class="custom-control-label" for="staffing3">Staffing</label>
                                  </div>
                                  <div class="d-inline-block custom-control custom-checkbox">
                                    <input type="checkbox" name="status3" class="custom-control-input" id="catering3">
                                    <label class="custom-control-label" for="catering3">Catering</label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </fieldset>
                        <!-- Step 4 -->
                        <h6>Step 4</h6>
                        <fieldset>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="meetingName3">
                                  Name of Meeting :
                                  <span class="danger">*</span>
                                </label>
                                <input type="text" class="form-control required" id="meetingName3" name="meetingName">
                              </div>
                              <div class="form-group">
                                <label for="meetingLocation3">
                                  Location :
                                  <span class="danger">*</span>
                                </label>
                                <input type="text" class="form-control required" id="meetingLocation3" name="meetingLocation">
                              </div>
                              <div class="form-group">
                                <label for="participants3">Names of Participants</label>
                                <textarea name="participants" id="participants3" rows="4" class="form-control"></textarea>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="decisions3">Decisions Reached</label>
                                <textarea name="decisions" id="decisions3" rows="4" class="form-control"></textarea>
                              </div>
                              <div class="form-group">
                                <label>Agenda Items :</label>
                                <div class="c-inputs-stacked">
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="agenda3" class="custom-control-input" id="item31">
                                    <label class="custom-control-label" for="item31">1st item</label>
                                  </div>
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="agenda3" class="custom-control-input" id="item32">
                                    <label class="custom-control-label" for="item32">2nd item</label>
                                  </div>
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="agenda3" class="custom-control-input" id="item33">
                                    <label class="custom-control-label" for="item33">3rd item</label>
                                  </div>
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="agenda3" class="custom-control-input" id="item34">
                                    <label class="custom-control-label" for="item34">4th item</label>
                                  </div>
                                  <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="agenda3" class="custom-control-input" id="item35">
                                    <label class="custom-control-label" for="item35">5th item</label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </fieldset>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        <!--/ Sell Orders & Buy Order -->
        <!-- Active Orders -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">ALL TOURS</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                  <td>
                    <button class="btn btn-sm round btn-danger btn-glow"><i class="la la-close font-medium-1"></i> Delete all</button>
                  </td>
                </div>
              </div>
              <div class="card-content">
                <div class="table-responsive">
                  <table class="table table-de mb-0">
                    <thead>
                      <tr>
                        <th>Date</th>
                        <th>Type</th>
                        <th>Price</th>
                        <th>USD</th>
                        <th>Fee (%)</th>
                        <th>Ations</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>2018-01-31 06:51:51</td>
                        <td class="success">Buy</td>
                        <td>11900.12</td>
                        <td>$ 6979.78</td>
                        <td>0.2</td>
                        <td>
                          <button class="btn btn-sm round btn-outline-danger"> Delete</button>
                        </td>
                      </tr>
                      <tr>
                        <td>2018-01-31 06:50:50</td>
                        <td class="danger">Sell</td>
                        <td>11905.09</td>
                        <td>$ 4600.97</td>
                        <td>0.2</td>
                        <td>
                          <button class="btn btn-sm round btn-outline-danger"> Delete</button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Active Orders -->
      </div>
    </div>
  </div>
@endsection
