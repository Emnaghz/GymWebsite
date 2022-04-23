<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UFIT Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/44f557ccce.js"></script>
    <style>
        nav{
            background-color: black;
        }

        /* contact */
        #contact{
            padding: 30px 0px;
        }

        .contact-row{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .contact-left-col{
            flex-basis: 50%;
            padding-top: 50px;
        }
        .contact-right-col{
            flex-basis: 50%;
            max-width: 450px;
            margin: auto;
        }
        .contact-right-col i{
            font-size: 20px;
            padding: 10px;
            background:#74b9ff;
            color: white; 
        }
        .contact-right-col p{
            margin-top: 10px;
            margin-bottom: 20px;
        }


        #footer{
            background: black;
            color:white;
            padding: 10px;
            display: flex;

            justify-content: space-around;
            align-items: center;
        }


        #footer h1{
            font-size: 50px;
        }
        #footer p{
            font-size: 25px;
        }



        .form{
            margin-bottom: 0;
            width: 70%;
            margin:auto;
            text-align: center;
        }
        .form input[type="text"]{
            width: 70%;
            padding: 10px;
            margin-bottom: 10px;
        }
        textarea{
            width: 70%;
            padding: 10px;
            margin-bottom: 10px;
        }



        .c_btn{
            background: black;
            color: white;
            padding: 10px;
            width: 50%;
            border:none;
        }

        nav{
    padding:1.5rem 5%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: #fff;
    z-index: 1000;
    position: fixed;
    top:0; left:0; right:0;
    background-color: rgb(92, 0, 49);
    margin:0cm;
    padding: 0.01mm;
    }
    nav .links li{
    display: inline-block;
    margin-left: 0.3rem;
    margin-right: 0.5rem;
    font-size: 1.4rem;
    }
    nav .logo{
    font-size: 3rem;
    cursor: pointer;
    margin-left:2.2rem;
    }
   
    </style>

</head>
<body>
    <header>
        <nav>
            <div class="logo"><span>U</span>FIT</div>
            <ul class="links">
                <li><a href="./index.php">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#trainers">Trainers</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="./login.php">Login</a></li>
            </ul>
        </nav>
        <div class="content">
            <h1>Time To Start Your Journey</h1>
            <button class="btn"><a href="./login.php" style="color: #f44336">Get started</a></button>
        </div>
    </header>

    <section class="about" id="about">
        <div class="row">
            <div class="image">
                <img src="./images/img2.jpg" alt="">
            </div>
            <div class="content">
                <div class="title">About <span>U</span>FIT</div>
                <p>A state of the art gym for fitness lovers with a passion for variety. After noticing we couldn't find a studio that offered enough to consistently motivate women, we decided to create one! UFIT is a fitness facility that provides a mix of instructor-led classes for improved strength, endurance, flexibility, and wellness. Mix and match weight training, boot camp, hot yoga, HIIT, hot barre, pilates, functional fitness, and more.           
                </p>
            </div>
        </div>
    </section>

    <section class="services" id="services">
        <div class="title">Our <span>Services</span></div>
        <div class="container">
            <div class="box">
                <img src="./images/cardio.jpg">
                <div class="info">
                    <h3>Cardio</h3>
                    <p>Cardio is a great way to exercise for overall health benefits and will support your weight loss efforts. However, to speed up weight loss and maintain the weight you have lost its important to do some form of resistance exercise. </p>
                </div>
            </div>
            <div class="box">
                <img src="./images/yoga1.jpg">
                <div class="info">
                    <h3>Yoga</h3>
                    <p>Yoga is a type of exercise in which you move your body into various positions in order to become more fit or flexible, to improve your breathing, and to relax your mind.</p>
                </div>
            </div>
            <div class="box">
                <img src="./images/pilate.jpg">
                <div class="info">
                    <h3>Pilates</h3>
                    <p>Pilates exercises the body as a whole evenly and symmetrically, which is the best way to develop your core strength and rehabilitate from previous injuries.</p>
                </div>
            </div>
            <div class="box">
                <img src="./images/zumba.jpg">
                <div class="info">
                    <h3>Zumba</h3>
                    <p>Zumba targets lots of different muscle groups at once for total body toning. Boosts your heart health. You not only get aerobic benefits (it really gets your heart rate up), you also get anaerobic benefits the kind that help you maintain a good cardiovascular respiratory system. Helps you de-stress.</p>
                </div>
            </div>
            <div class="box">
                <img src="./images/box.jpg">
                <div class="info">
                    <h3>boxing</h3>
                    <p>Boxing is very much about providing an uplifting environment where athletes can decompress, learn, and have fun around peers and positive leaders. It encourages individuality and self-worth.</p>
                </div>
            </div>
            <div class="box">
                <img src="./images/lifting.jpg">
                <div class="info">
                    <h3>weight lifting</h3>
                    <p>Weight lifting isn't just about bulking up and building muscle mass, the experts say. Its benefits include improved posture, better sleep, gaining bone density, maintaining weight loss, boosting metabolism, lowering inflammation and staving off chronic disease, among a laundry list of positives.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Start Trainers -->
    <section class="our-trainers" id="trainers">
        <div class="title">Meet Our <span>Trainers</span></div>
    
        <div class="main-trainer">
            <div class="inner-trainer">
                <img src="images/coach1.jpg" alt="">
            </div>
    
            <div class="inner-trainer">
                <div class="trainer-content">
                    <h2>Samira Heni</h2>
                    <span>Pilate trainer</span>
                    <hr>
                    <p>She played semi-professional tennis in junior leagues and as well as varsity basketball. After suffering a ski accident in her senior year of college, she started Pilates as a method of rehabilitation. This treatment turned into a passion over time. She dabbled in various Pilates programs but became convinced that the STOTT PILATES® system was far more innovative and the most scientific program she had experienced.</p>
                </div>
            </div>
    
            <div class="inner-trainer">
                <img src="images/coach2.jpg" alt="">
            </div>
    
            <div class="inner-trainer">
                <div class="trainer-content">
                    <h2>Nour Kobbi</h2>
                    <span>Box trainer</span>
                    <hr>
                    <p>Femaleboxingcoach wants to run and create as many women only sessions to enjoy the sport, skill and benefits of boxing. Offering a safe space and sessions which empower individual woman, mentally and physically within a sport that men dominate.

My sessions are for all abilities and fitness levels, a full body workout. Women can come and learn defences, skill, combinations, foot work, partner work and pad work. </p>
                </div>
            </div>
            <div class="inner-trainer">
                <img src="images/coach3.jpg" alt="">
            </div>
            <div class="inner-trainer">
                <div class="trainer-content">
                    <h2>Amira Jouini</h2>
                    <span>Yoga trainer</span>
                    <hr>
                    <p>As a believer that yoga is for everybody, Amiraa has shared yoga with children, senior citizens, and all ages and abilities in between.  Amira is especially interested in educating athletes about how yoga can benefit them, and has developed and taught classes specifically for athletes, including:  Yoga for Runners, Yoga for Cyclists, Yoga for Golfers, and Yoga for Triathletes. She has also brought yoga to young athletes in the sports of lacrosse, soccer, baseball, and cross country.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- reviews -->
    <section class="customer-review">
        <div class="title">Our <span>Reviews</span></div>

        <h2 class="title-review">Our Clients Love Us</h2>
        <p class="note">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil laboriosam possimus perferendis non error neque.</p>

        <div class="reviews">
        <div class="review">
                <div class="head-review">
                    <img class="ronde" src="images/c1.jpg" width="250px">
                </div>
                <div class="body-review">
                    <div class="name-review">Nathan D.</div>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div>
                    <div class="desc-review">AMAZING GYM, AMAZING WORKOUTS! The staff here is incredibly friendly and extremely qualified! They know how to push you to the limit in the best way possible with your workouts.</div>
                </div>
            </div>
            <div class="review">
                <div class="head-review">
                    <img class="ronde" src="images/c2.jpg" width="250px">
                </div>
                <div class="body-review">
                    <div class="name-review">Nathan D.</div>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="desc-review">Excellent personal training. Trainers who really care and go above and beyond to help you achieve your goals. Small and private gym that feels more personal. Highly recommended!</div>
                </div>
            </div>
            <div class="review">
                <div class="head-review">
                    <img class="ronde" src="images/c3.jpg" width="250px">
                </div>
                <div class="body-review">
                    <div class="name-review">Nathan D.</div>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div>
                    <div class="desc-review">This is a fantastic gym!! All the trainers are super nice and take an interest in you no matter what fitness level you're at. I really like how they give me tips and tricks to get the most out of every workout.</div>
                </div>
            </div>
            <div class="review">
                <div class="head-review">
                    <img class="ronde" src="images/c4.jpg" width="250px">
                </div>
                <div class="body-review">
                    <div class="name-review">Nathan D.</div>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div>
                    <div class="desc-review">This is a fantastic gym!! All the trainers are super nice and take an interest in you no matter what fitness level you're at. I really like how they give me tips and tricks to get the most out of every workout.</div>
                </div>
            </div>

        </div>

    </section>


    <!-- contact -->

    <section id="contact">
		<div class="services-info">
			<h1>Get in<span id="blue">Touch</span></h1>
	        <p> We are Available</p>
        </div>

    <section class="contact-row">
        <div class="contact-left-col">
            <div class="form">
                <input type="text" name="" placeholder="E-mail">
                <input type="text" name="" placeholder="Subject"><br>
                <textarea rows="10" cols="40" placeholder="Message"></textarea>
                <br> <button class="c_btn">Send</button>
            </div>
        </div>
            <div class="contact-right-col">
                <h1><i class="fa fa-envelope-o" aria-hidden="true"></i> E-mail</h1> <p>nd03081998@gmail.com</p><br>
                <h1><i class="fa fa-phone" aria-hidden="true"></i> Mobile</h1><p>823944147, 823944140</p>
                <br>
                <h1><i class="fa fa-location-arrow" aria-hidden="true"></i> Address</h1>
                <p> Near Shyam Mandir<br>
                    Ward no.5, Laxmangarh (Sikar), Rajasthan
                </p>
            </div>
    </section>

    <section id="footer">
	<h1>BP<span id="blue">FG</span></h1>
	
	<p>&copy; 2020 BPFG, Rajasthan, India </p>
	<img src="images/icon.png">

    </section>
                

</body>
</html>