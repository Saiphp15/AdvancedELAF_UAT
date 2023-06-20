<?php
include("functions.php");
include("header.php") 
// PHP goes here!
?>
<!-- Header section  -->


<!-- Main section  -->

<div class="container">
    <div class="dashboard-page-title">
        <h2>Pending Settlements</h2>
    </div>

    <div class="ps-table">
        <div class="table-responsive">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Sr. No.</th>
                        <th scope="col">Requested Amount</th>
                        <th scope="col">Description</th>
                        <th scope="col">Status</th>
                        <th scope="col">Requested Date</th>
                        <th scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>SAR 100</td>
                        <td>test</td>
                        <td>Pending</td>
                        <td>06/06/2021</td>
                        <td><a href="#">Edit</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    <div class="row ps-btn-spacing">
        <div class="col-xs-12 xol-sm-12 col-md-6 col-lg-6 col-xl-6"></div>

        <div class="col-xs-12 xol-sm-12 col-md-6 col-lg-6 col-xl-6">
            <button class="btn btn-primary btn-lg ps-btn float-right" 
                        type="submit">
                     Make a Request
            </button>
        </div>
    </div>
</div>

 <!-- Footer section  -->
 <?php include("footer.php") ?>