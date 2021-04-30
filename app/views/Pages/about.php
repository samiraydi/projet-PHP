<?php require APPROOT . '/views/inc/header.php'; ?>

<h2>Journey made available on Carpooling</h2>
<div class="bod">
    <div class="container1">
        <div class="box">
            <h2 class="name">In Control</h2>
            <div class="circle">
                <p>Verified member profiles and ratings mean you know exactly who you're travelling with.</p>
            </div>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b9/Group_font_awesome.svg/2000px-Group_font_awesome.svg.png" class="product">
        </div>

        <div class="box">
            <h2 class="name">Carpool with confidence</h2>
            <div class="circle">
                <p>ID and home address verification adds another level of security to member profiles.</p>
            </div>
            <img src="https://cdn2.iconfinder.com/data/icons/smileys-people-hand-gestures-add-on/48/v-08-512.png" class="product">
        </div>
        <div class="box">
            <h2 class="name">Your booking is protected</h2>
            <div class="circle">
                <p>We offer 100% full refund for cancelation either by driver, or passenger.</p>
            </div>
            <img src="https://www.freepnglogos.com/uploads/key-png/key-icon-game-icons-24.png" class="product">
        </div>
    </div>
</div>
<script src="<?php echo URLROOT; ?>/js/vanilla-tilt.min.js"></Script>
<script>
    VanillaTilt.init(document.querySelectorAll(".box"), {
        max: 25,
        speed: 400
    });
</script>
<style>
    .bod {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: #348984;
    }

    h2 {
        position: relative;
        top: 12%;
    }

    .container1 {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        width: 1200px;
        transform-style: preserve-3d;
    }

    .container1 .box {
        position: relative;
        width: 300px;
        height: 400px;
        margin: 40px;
        background: #b9d4d5;
        border-radius: 20px;
        transform-style: preserve-3d;
    }

    .container1 .box::before {

        position: absolute;
        top: 20px;
        left: 20px;
        font-size: 6em;
        font-weight: 900;
        color: #fff;
        font-style: italic;
        opacity: 0;
    }

    .container1 .box::after {
        position: absolute;
        bottom: 20px;
        right: 20px;
        font-size: 5em;
        font-weight: 900;
        color: #fff;
        font-style: italic;
        opacity: 0;
        transition: 0.5s;
    }

    .container1 .box::after,
    .container1 .box::before {
        opacity: 0.04;
    }

    .container1 .bod .name {
        position: absolute;
        top: 0;
        left: 0;
        text-align: center;
        color: #fff;
        width: 100%;
        transform-style: preserve-3d;
        transform: translate3d(0, 0, 75px);
        transition: 0.5s;
        opacity: 0;
        z-index: 10;
    }

    .container1 .box:hover .name {
        top: 40px;
        opacity: 1;
    }

    .container1 .box .buy {
        position: absolute;
        bottom: 0;
        left: 50%;
        transform-style: preserve-3d;
        transform: translate3d(-50, 0, 75px);
        color: #fff;
        background: #333;
        padding: 10px 25px;
        border-radius: 30px;
        text-decoration: none;
        transition: 0.5s;
        opacity: 0;
        z-index: 10;
    }

    .container1 .box:hover .buy {
        bottom: 30px;
        opacity: 1;
    }

    .container1 .box .circle {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 200px;
        height: 200px;
        border-radius: 50%;
        transition: 0.5s;
        background: #fff;
        transform-style: preserve-3d;
        z-index: 10;
        opacity: 1;
        transform: translate3d(-50px, -50px, 50px);
    }

    .container1 .box .circle p {
        position: absolute;
        top: 30%;
        left: 4%;
        width: 190;
        text-align: center;
    }

    .container1 .box .product {
        position: absolute;
        top: 52%;
        left: 40%;
        max-width: 300px;
        transition: 0.5s;
        z-index: 11;
        transition: 0.5s;
        transform-style: preserve-3d;
        transform: translate3d(-50%, -50%, 0px) rotate(-20deg);
    }

    .container1 .box:nth-child(1) .circle,
    .container1 .box:nth-child(1) .buy {
        background: #379bf7;
    }

    .container1 .box:nth-child(2) .circle,
    .container1 .box:nth-child(2) .buy {
        background: #9bdc28;
    }

    h2 {
        text-align: center;
    }

    img {
        width: 60%;
    }

    /* contact */
    .icon-contact {
        width: 20%;
    }

    .contact-email,
    .contact-phone,
    .contact-linkedin {
        text-align: center;
    }
</style>

<!-- contact -->

<div class="jumbotron" id="no-margin" style="background-color: #e9ecef;">
    <div class="container contact-container">

        <div class="contact-header" style="text-align: center;">
            <h3>Contact</h3>
            <p>Fill out the form for any query</p>
        </div>

        <div class="row row-contact-info">

            <div class="col-md-4">
                <div class="contact-email">
                    <img src="http://localhost/Car-Reduction-master/Resources/images/email.svg" class="icon-contact" alt="E-MAIL">
                    <h3>E-MAIL</h3>
                    <p><a href="mailto:akcount121@gmail.com">CarpoolingTN@gmail.com</a></p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="contact-phone">
                    <img src="http://localhost/Car-Reduction-master/Resources/images/phone.svg" class="icon-contact" alt="PHONE">
                    <h3>MOBILE</h3>
                    <p><a href="tel:+91 9009546537">+91 9009546537</a></p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="contact-linkedin">
                    <img src="http://localhost/Car-Reduction-master/Resources/images/linkedin.png" class=" icon-contact" id="a4" alt="LINKEDIN">
                    <h3>LINKEDIN</h3>
                    <p><a href="https://www.linkedin.com/in/akash-sharma-1a5433178/" target="_blank">CarpoolingTN</a></p>
                </div>
            </div>
        </div>
        <div class="contact-form">
            <form method="post" action="">
                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <input class="form-control" type="text" placeholder="Name" name="name" class="form-control">
                        <span class="error"></span>
                    </div>
                    <div class=" form-group col-lg-6">
                        <input class="form-control" type="text" placeholder="Company" name="company" class=" form-control">
                        <span class="error"></span>
                    </div>
                    <div class="form-group col-lg-6">
                        <input class="form-control" type="text" placeholder="Email" name="email" class=" form-control">
                        <span class="error"></span>
                    </div>
                    <div class="form-group col-lg-6">
                        <input class="form-control" type="text" placeholder="Subject" name="subject" class=" form-control">
                        <span class="error"></span>
                    </div>
                    <div class="form-group col-lg-12">
                        <textarea class="form-control" type="text" rows="5" data-msg="Enter your message" placeholder="" name="message" class="form-control"></textarea>
                        <span class="error"></span>
                    </div>
                </div>
                <div>
                    <div class="text-center"><button type="button" class="btn btn-primary">Send Message</button></div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>