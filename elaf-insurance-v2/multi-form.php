<?php
include("functions.php");
include("header.php")
// PHP goes here!
?>

<!-- VEHICLE DRIVERS MODAL STARTS -->

<div class="modal fade" id="vehicleDriversModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content brand-modal-content">
            <div class="modal-header brand-modal-header">
                <h5 class="modal-title brand-modal-title" id="exampleModalLabel">Vehicle Drivers</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body brand-modal-body">
                <div class="container">
                    <div class="modal-title-content mt-3 mb-4">
                        <h5>Driver List</h5>
                        <p>You need to add each drivers details to ensure that they are covered in Comprehensive policy.</p>
                    </div>
                    <div class="vehicle-driver-table">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Driver ID</th>
                                        <th scope="col">Date of Birth</th>
                                        <th scope="col">Fullname</th>
                                        <th scope="col">Driving Percentage</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td><button class="brand-btn"><i class="icofont-ui-delete"></i></button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="text-center mt-2">
                        <button id="addDriverBtn" class="brand-btn">Add Addtional Driver</button>
                    </div>

                    <div id="additionalDriverInfo">
                        <div class="addDriver-wrapper">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="floating-label mb-4">
                                        <input class="floating-input" type="tel" placeholder=" ">
                                        <span class="highlight"></span>
                                        <label>Driver ID</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="floating-label mb-4">
                                        <input class="floating-input" type="text" onclick="(this.type='date')" placeholder=" ">
                                        <span class="highlight"></span>
                                        <label>Date of Birth</label>
                                    </div>
                                </div>
                            </div>

                            <div class="addDriverInfoTab">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link multi-step-link active" id="relationship-tab" data-toggle="tab" href="#relationship" role="tab" aria-controls="relationship" aria-selected="true">Relationship</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link multi-step-link" id="ha-tab" data-toggle="tab" href="#ha" role="tab" aria-controls="ha" aria-selected="false">Home Address</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link multi-step-link" id="hc-tab" data-toggle="tab" href="#hc" role="tab" aria-controls="hc" aria-selected="false">Health Conditions</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link multi-step-link" id="tv-tab" data-toggle="tab" href="#tv" role="tab" aria-controls="tv" aria-selected="false">Traffic Violations</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link multi-step-link" id="ot-tab" data-toggle="tab" href="#ot" role="tab" aria-controls="ot" aria-selected="false">Other Details</a>
                                    </li>
                                </ul>
                                <div class="tab-content multi-form-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="relationship" role="tabpanel" aria-labelledby="relationship-tab">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="floating-label">
                                                        <select class="floating-select" onclick="this.setAttribute('value', this.value);" value="">
                                                            <option value=""></option>
                                                            <option value="1">Yes</option>
                                                            <option value="2">No</option>
                                                        </select>
                                                        <span class="highlight"></span>
                                                        <label>Has Relationship with Policy Holder?</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="floating-label">
                                                        <select class="floating-select" onclick="this.setAttribute('value', this.value);" value="">
                                                            <option value=""></option>
                                                            <option value="1">Father</option>
                                                            <option value="2">Mother</option>
                                                            <option value="3">Husband</option>
                                                            <option value="4">Wife</option>
                                                            <option value="5">Son</option>
                                                            <option value="6">Daughter</option>
                                                            <option value="7">Brother</option>
                                                            <option value="8">Sister</option>
                                                            <option value="9">Employee</option>
                                                            <option value="10">Sponsered</option>
                                                        </select>
                                                        <span class="highlight"></span>
                                                        <label>Relationship</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group form-check mt-3">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1">I confirm the validity of the provided relationship.</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="ha" role="tabpanel" aria-labelledby="ha-tab">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="floating-label">
                                                        <select class="floating-select" onclick="this.setAttribute('value', this.value);" value="">
                                                            <option value=""></option>
                                                            <option value="1">Yes</option>
                                                            <option value="2">No</option>
                                                        </select>
                                                        <span class="highlight"></span>
                                                        <label>Driver Home Address same as policyholder address?</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="floating-label mb-4">
                                                                <input class="floating-input" type="tel" placeholder=" ">
                                                                <span class="highlight"></span>
                                                                <label>City</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="floating-label mb-4">
                                                                <input class="floating-input" type="tel" placeholder=" ">
                                                                <span class="highlight"></span>
                                                                <label>Address</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 text-right">
                                                <button class="brand-btn">Select Address on Map</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="hc" role="tabpanel" aria-labelledby="hc-tab">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="floating-label">
                                                        <select class="floating-select" onclick="this.setAttribute('value', this.value);" value="">
                                                            <option value=""></option>
                                                            <option value="1">Yes</option>
                                                            <option value="2">No</option>
                                                        </select>
                                                        <span class="highlight"></span>
                                                        <label>Does driver have Health Conditions or Restrictions?</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-content-title text-white">
                                                <h5>Select License Health Condition</h5>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group form-check mb-4">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                        <label class="form-check-label" for="exampleCheck1">Automatic Vehicle</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group form-check mb-4">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                        <label class="form-check-label" for="exampleCheck1">Prostheses Part</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group form-check mb-4">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                        <label class="form-check-label" for="exampleCheck1">Lenses for Eyesight</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group form-check mb-4">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                        <label class="form-check-label" for="exampleCheck1">Daytime Only</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group form-check mb-4">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                        <label class="form-check-label" for="exampleCheck1">Earpiece</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group form-check mb-4">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                        <label class="form-check-label" for="exampleCheck1">Vehicle for Disabled</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tv" role="tabpanel" aria-labelledby="tv-tab">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="floating-label">
                                                        <select class="floating-select" onclick="this.setAttribute('value', this.value);" value="">
                                                            <option value=""></option>
                                                            <option value="1">Yes</option>
                                                            <option value="2">No</option>
                                                        </select>
                                                        <span class="highlight"></span>
                                                        <label>Does driver have Traffice Violation?</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-content-title text-white">
                                                <h5>Select Violations</h5>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group form-check mb-4">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                        <label class="form-check-label" for="exampleCheck1">Speed Ticket</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group form-check mb-4">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                        <label class="form-check-label" for="exampleCheck1">Override Traffic Light</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group form-check mb-4">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                        <label class="form-check-label" for="exampleCheck1">Driving Opposite Direction</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group form-check mb-4">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                        <label class="form-check-label" for="exampleCheck1">Drifting</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group form-check mb-4">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                        <label class="form-check-label" for="exampleCheck1">Parking Violation</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="ot" role="tabpanel" aria-labelledby="ot-tab">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="floating-label">
                                                        <select class="floating-select" onclick="this.setAttribute('value', this.value);" value="">
                                                            <option value=""></option>
                                                            <option value="1">None</option>
                                                            <option value="2">High School</option>
                                                            <option value="3">Diploma</option>
                                                            <option value="4">Bachelor</option>
                                                            <option value="5">Master</option>
                                                            <option value="6">PhD</option>
                                                        </select>
                                                        <span class="highlight"></span>
                                                        <label>Driver Education</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="floating-label">
                                                        <select class="floating-select" onclick="this.setAttribute('value', this.value);" value="">
                                                            <option value=""></option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                        </select>
                                                        <span class="highlight"></span>
                                                        <label>Accident Counts</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="floating-label">
                                                        <select class="floating-select" onclick="this.setAttribute('value', this.value);" value="">
                                                            <option value=""></option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                            <option value="13">13</option>
                                                            <option value="14">14</option>
                                                            <option value="15">15</option>
                                                            <option value="16">16</option>
                                                            <option value="17">17</option>
                                                            <option value="18">18</option>
                                                            <option value="19">19</option>
                                                            <option value="20">20</option>

                                                        </select>
                                                        <span class="highlight"></span>
                                                        <label>Children below 16 years</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="floating-label mb-4">
                                                        <input class="floating-input" type="text" placeholder=" ">
                                                        <span class="highlight"></span>
                                                        <label>Enter Name & Location</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="floating-label">
                                                        <select class="floating-select" onclick="this.setAttribute('value', this.value);" value="">
                                                            <option value=""></option>
                                                            <option value="1">Yes</option>
                                                            <option value="2">No</option>
                                                        </select>
                                                        <span class="highlight"></span>
                                                        <label>Does driver have valid driving license from other countries?</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="floating-label">
                                                        <select class="floating-select" onclick="this.setAttribute('value', this.value);" value="">
                                                            <option value=""></option>
                                                            <option value="1">UAE</option>
                                                            <option value="2">Oman</option>
                                                            <option value="3">Qatar</option>
                                                            <option value="4">Egypt</option>
                                                            <option value="5">Kuwait</option>
                                                        </select>
                                                        <span class="highlight"></span>
                                                        <label>Country Name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="floating-label">
                                                        <select class="floating-select" onclick="this.setAttribute('value', this.value);" value="">
                                                            <option value=""></option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                        <span class="highlight"></span>
                                                        <label>Number of years</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <button class="brand-btn">Add</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-right">
                            <button class="brand-btn">Add Driver</button>
                            <button id="addDriverBtnCancel" class="brand-btn">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- VEHICLE DRIVERS MODAL ENDS -->

<div class="lb-bg section-spacing bg-dot">
    <div class="container">
        <div>
            <div class="info-banner-content mt-5">
                <h3>Apply/Renew Insurance</h3>
                <h5>We request you to fill the required details mentioned below.</h5>
            </div>
        </div>
    </div>
</div>

<div class="city-bg">
    <div class="container">
        <div class="multi-form">
            <div id="svg_wrap"></div>

            <h1 class="text-center">Online Insurance Application</h1>
            <section class="step-wrapper sec">
                <h4>Add Vehicle</h4>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link multi-step-link active" id="rc-tab" data-toggle="tab" href="#rc" role="tab" aria-controls="rc" aria-selected="true">Registration Card</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link multi-step-link" id="cc-tab" data-toggle="tab" href="#cc" role="tab" aria-controls="cc" aria-selected="false">Custom Card</a>
                    </li>
                </ul>
                <div class="tab-content multi-form-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="rc" role="tabpanel" aria-labelledby="rc-tab">
                        <div class="floating-label mb-4">
                            <input class="floating-input" type="tel" placeholder=" ">
                            <span class="highlight"></span>
                            <label>Sequence Number</label>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="floating-label">
                                    <select class="floating-select" onclick="this.setAttribute('value', this.value);" value="">
                                        <option value=""></option>
                                        <option value="1">Private</option>
                                        <option value="2">Commercial</option>
                                        <option value="3">Rental</option>
                                        <option value="4">Passengers Transport or Uber/Careem</option>
                                        <option value="5">Goods Transport</option>
                                        <option value="6">Petroleum Derivative Transport</option>
                                    </select>
                                    <span class="highlight"></span>
                                    <label>Purpose of vehicle use</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="floating-label">
                                    <select class="floating-select" onclick="this.setAttribute('value', this.value);" value="">
                                        <option value=""></option>
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                    <span class="highlight"></span>
                                    <label>Do you want ownership transfer</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="floating-label mb-4">
                                    <input class="floating-input" type="text" onclick="(this.type='date')" placeholder=" ">
                                    <span class="highlight"></span>
                                    <label>Year of Manufacture</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="floating-label mb-4">
                                    <input class="floating-input" type="text" onclick="(this.type='date')" placeholder=" ">
                                    <span class="highlight"></span>
                                    <label>Date of birth</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="cc" role="tabpanel" aria-labelledby="cc-tab">
                        <div class="floating-label mb-4">
                            <input class="floating-input" type="tel" placeholder=" ">
                            <span class="highlight"></span>
                            <label>Custom ID</label>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="floating-label">
                                    <select class="floating-select" onclick="this.setAttribute('value', this.value);" value="">
                                        <option value=""></option>
                                        <option value="1">Private</option>
                                        <option value="2">Commercial</option>
                                        <option value="3">Rental</option>
                                        <option value="4">Passengers Transport or Uber/Careem</option>
                                        <option value="5">Goods Transport</option>
                                        <option value="6">Petroleum Derivative Transport</option>
                                    </select>
                                    <span class="highlight"></span>
                                    <label>Purpose of vehicle use</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="floating-label mb-4">
                                    <input class="floating-input" type="text" onclick="(this.type='date')" placeholder=" ">
                                    <span class="highlight"></span>
                                    <label>Year of Manufacture</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="floating-label mb-4">
                                    <input class="floating-input" type="text" onclick="(this.type='date')" placeholder=" ">
                                    <span class="highlight"></span>
                                    <label>Date of birth</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <button class="brand-btn m-1" data-toggle="modal" data-target="#vehicleDriversModal">Vehicle Drivers</button>
                    <button class="brand-btn m-1">Other Details</button>
                </div>
            </section>

            <section class="step-wrapper sec">
                <h4>Insurance Details</h4>
                <div class="text-left">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">New Application</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Renew</label>
                    </div>
                </div>


                <div class="text-left mb-2">
                    <label>Insurance Category</label>
                    <select class="form-control" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="National ID/Iqama Number/ Company MOI">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <input type="date" class="form-control mb-2" placeholder="Date of Policy to be effective" />
                    </div>
                </div>
            </section>

            <section class="step-wrapper sec">
                <h4>Vehicle Details</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </section>

            <section class="step-wrapper sec">
                <h4>Driver Details</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </section>

            <section class="step-wrapper sec">
                <h4>Insurance Quotes</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </section>

            <section class="step-wrapper sec">
                <h4>Payment</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </section>

            <section class="step-wrapper sec">
                <h4>Success-Insurance Details</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </section>

            <div class="mx-auto d-block">
                <div class="multi-step-button" id="prev">&larr; Previous</div>
                <div class="multi-step-button" id="next">Next &rarr;</div>
                <div class="button" id="submit">Agree and send application</div>
            </div>

        </div>

    </div>
</div>

<!-- Footer section  -->
<?php include("footer.php") ?>