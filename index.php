<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AILRAPPC | Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/reset.css"/>
    <script src="js/jquery.js"></script>
    
</head>
<body>
    <div class="container"><!-- Container Starts-->
        <div class="headbar_con"><!-- headbar_con Starts-->
            <?php include "header.php"; ?>
        </div><!-- headbar_con Ends-->
        <div class="header_con">
            <div class="header_center">
                <div class="header">
                    <div class="logo_con">
                        <div class="images">
                            <a href="index.php"><img src="images/logo/logo.webp"/></a>
                        </div>
                        <div class="text">
                            <div class="row_one">All India Legal Rights & people Protection Council</div>
                            <!-- <div class="row_two">& people Protection Council</div> -->
                        </div>
                    </div>
                </div>  
            </div>
        </div>
        <div class="menu_con">
            <?php include "menu.php"; ?>
        </div>
        <div class="slider_con"><!--slider_con Starts -->
            <?php include "slider.php"; ?>
        </div>

        <div class="about_us_con">
            <div class="about_us_center">
                <div class="about_us">
                    <div class="about_details">
                        <div class="about_head">
                            <div class="head">About Us</div>
                        </div>
                        <div class="about_line">
                            <div class="line">
                                We Make A Different Life For Indian People
                            </div>
                        </div>
                        <div class="about_para">
                            <div class="para">
                                <p>All India Legal Rights People Protection Council (AILRPPC) is a National, not-for-profit organization dedicated to implementing the Universal Declaration of Human Rights at local, regional, national levels. Its membership is comprised of individuals, educators and groups throughout the national who are actively forwarding the knowledge and protection of human rights by and for all Mankind.</p>
                            </div>
                        </div>
                        <div class="about_three">
                            <div class="buttons">Read More...</div>
                            <!-- <div class="buttons">Contact Us</div> -->
                        </div>
                    </div>
                    <div class="about_image">
                        <img src='images/sliders/about.png'/>
                    </div>
                </div>
            </div>
        </div>


        <div class="choose_us_con">
            <div class="choose_us_center">
                <div class="choose_us">
                    <div class="choose_details">
                        <div class="about_head">
                            <div class="head">Why Choose Us</div>
                        </div>
                        <div class="about_line">
                            <div class="line">
                                Trusted Non Profit Donation Center
                            </div>
                        </div>
                        <div class="tab_con">
                            <div class="tab_choose">
                                <ul>
                                    <li>Mission</li>
                                    <li>vision</li>
                                </ul>
                            </div>
                            <div class="tab_choose_list">
                                <ul>
                                    <li>
                                        Our Mission: To legally empower the marginalized and excluded groups of the society by providing effective legal representation, legal literacy, Protection and awareness and bridging the gap between the legally available benefits and the entitled beneficiaries.
                                    </li>
                                    <li>
                                        Our Vission: Reforming the Law for maximizing Justice, Truth and care in society and promoting good governance under the rule of Law.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="about_image">
                        <img src='images/sliders/values.png'/>
                    </div>
                </div>
            </div>
        </div>
        <div class="volun_con">
            <?php include "volunteer.php"; ?>
        </div>
        <div class="footer_con">
           <?php include "footer.php"; ?>
        </div>
        <div class="privacy_copy_con">
            <?php include "policy.php"; ?>
        </div>
    </div><!-- Container Ends-->
</body>
</html>
<script src="js/code.js"></script>
