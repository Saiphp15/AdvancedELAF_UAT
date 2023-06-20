<?php
include("functions.php");
include("header.php")
// PHP goes here!
?>

<!-- Header section  -->

<!-- Main section  -->
<div class="faq-sec-one">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
                <div class="faq-title">
                    <h2>Frequently Asked Questions</h2>
                </div>
                <div class="faq-subtitle mt-4">
                    <p>Get the key solution to Unlock all doors of new opportunities.</p>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                <div class="faq-banner-image">
                    <img class="img-fluid" src="image/faq-banner-mascot.png"/>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="faq-sec-two">
    <div class="container">
        <div id="accordion">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link faq-list-title" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            What is <span class="matjary-name">Matjary</span> and how does it work?
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body faq-list-content">
                        <span class="matjary-name">Matjary</span> is a complete commerce platform that lets you start, grow, and manage a business.

                        Create and customize an online store

                        Sell in multiple places, including web, mobile, social media, online marketplaces, brick-and-mortar locations, and pop-up shops

                        Manage products, inventory, payments, and shipping

                        Matjary is completely cloud-based and hosted, which means you don’t have to worry about upgrading or maintaining software or web servers. This gives you the flexibility to access and run your business from anywhere with an internet connection.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link faq-list-title collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            How much does <span class="matjary-name">Matjary</span> cost?
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        Try <span class="matjary-name">Matjary</span> free for 14 days, no credit card required.

                        After your trial expires, choose a pricing plan that suits the size and stage of your business.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link faq-list-title collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Can I use my own domain name with <span class="matjary-name">Matjary</span>?
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        Yes, you can use your own domain name with <span class="matjary-name">Matjary</span>.

                        If you have an existing domain name, you can connect it to <span class="matjary-name">Matjary</span> from your store’s admin. Learn more about connecting an existing domain to a <span class="matjary-name">Matjary</span> store.

                        If you don’t have a domain name yet, you can either buy one through <span class="matjary-name">Matjary</span> or a third-party provider.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingFour">
                    <h5 class="mb-0">
                        <button class="btn btn-link faq-list-title collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Do I need to be a designer or developer to use <span class="matjary-name">Matjary</span>?
                        </button>
                    </h5>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                    <div class="card-body">
                        No, you don’t need to be a designer or developer to use <span class="matjary-name">Matjary</span>.

                        Customize the look and feel of your store with the online store builder and themes.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer section  -->
<?php include("footer.php") ?>