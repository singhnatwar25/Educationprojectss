<?php
require './ext/_header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Convergence" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap');
        @import url('https://fonts.google.com/specimen/Lobster?query=Impallari+Type');
    </style>
    <style>
       @media screen and (max-width: 400px){
          
        }

        body {
            margin: auto;
            padding: auto;
            background-color: #fffff0;
            /* background-color: #e3f9a6; */
            /* <div class="p-3 mb-2 bg-white text-dark">.bg-white */
            /* </div> */
            font-family: 'Times New Roman', Times, serif;
            background-image: url('./imgbg/peakpx-20.jpg');
            /* background-color: #d1d0ce; */
            /* background-repeat: no-repeat; */
        }

        :root {
            margin: auto;
            padding: auto;
        }

        @import url('https://fonts.googleapis.com/css2?family=Barlow:wght@200&display=swap');

        .man {
            display: flex;
        }

        /* The sidebar menu */
        .sidenav {
            height: 380px;
            width: 250px;
            position: relative;
            z-index: 1;
            left: 0;
            /* background-color: #2b3856; */
            overflow-x: hidden;
            padding-top: 20px;
            border-radius: 0px 14px 14px 0px;
            font-family: 'Barlow', sans-serif;
        }
   .sidenav::-webkit-scrollbar {
  display: none;
}

/* Hide scrollbar for IE, Edge and Firefox */
.sidenav{
  -ms-overflow-style: none;  /* IE and Edge */
  scrollbar-width: none;  /* Firefox */
}
        .titleside {
            text-align: center;
            margin: auto;
            padding: 6px;
            font-size: 16px;
            font-weight: bold;
            color: white;
            color: black;
            color: #2b3856;
            color: #15317e;
            text-decoration: underline;
            font-family: Convergence;
        }

        /* marquee scroll */
        .update {
            text-align: center;
            margin-left: 10px;
            margin-right: 16px;
            color: black;
            color: #2b3856;
            color: #15317e;
            font-family: 'Times New Roman', Times, serif;
            font-family: Convergence;
        }

        /* scrolling text css */
        .titleside1 {
            font-family: 'Barlow', sans-serif;
            text-align: center;
            font-size: 13px;
            color: rgb(51, 51, 153);
            color: white;
            color: black;
            /* color: #2b3856; */
        }

        /*  anchors */
        .sidenav a {
            margin-top: -10px;
            text-decoration: none;
            font-size: 18px;
            text-align: left;
            color: blue;
            color: black;
            /* color: #2b3856; */
            margin-left: 18px;
        }

        /* quick link text css */
        .quick {
            margin-top: auto;
            text-align: center;
            color: white;
            color: black;
            font-size: 16px;
            font-weight: bold;
            margin: auto;
            margin-top: 14px;
            text-decoration: underline;
            font-family: Convergence;
            color: #2b3856;
            color: #15317e;
        }


        .topslider {
            margin: 1px;
            width: 64%;
            margin-left: 20px;
        }


        /* left side bar list */
        .quicklist {
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            color: rgb(51, 51, 153);
            color: white;
            color: black;
            /* color: #2b3856; */
            text-align: center;
            padding: 9px;
            margin: 2px;
            border-top: 2px solid blue ;
            border-bottom: 2px solid #800080;
            border-radius: 24px;
            box-shadow: 2px 2px;
            width: 80%;
        }

        /* left sidebar anchors */
        .quicklist a {
            text-align: center;
            font-size: 16px;
            color: white;
            color: black;
            color: #2b3856;
            color: #15317e;
            font-weight: bold;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        /* image slider */
        #slider {
            position: relative;
            width: 75%;
            height: 23vw;
            margin: 4px auto;
            font-family: 'Helvetica Neue', sans-serif;
            perspective: 1400px;
            transform-style: preserve-3d;
        }

        input[type=radio] {
            position: relative;
            top: 108%;
            left: 50%;
            width: 18px;
            height: 18px;
            margin: 0 15px 0 0;
            opacity: 0.4;
            transform: translateX(-83px);
            cursor: pointer;
        }

        input[type=radio]:nth-child(5) {
            margin-right: 0px;
        }

        input[type=radio]:checked {
            opacity: 1;
        }

        #slider label,
        #slider label img {
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            color: white;
            font-size: 70px;
            font-weight: bold;
            border-radius: 3px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform 400ms ease;
        }

        /* Slider Functionality */
        /* Active Slide */
        #s1:checked~#slide1,
        #s2:checked~#slide2,
        #s3:checked~#slide3,
        #s4:checked~#slide4,
        #s5:checked~#slide5 {
            box-shadow: 0 13px 26px rgba(0, 0, 0, 0.3), 0 12px 6px rgba(0, 0, 0, 0.2);
            transform: translate3d(0%, 0, 0px);
        }

        /* Next Slide */
        #s1:checked~#slide2,
        #s2:checked~#slide3,
        #s3:checked~#slide4,
        #s4:checked~#slide5,
        #s5:checked~#slide1 {
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.3), 0 2px 2px rgba(0, 0, 0, 0.2);
            transform: translate3d(20%, 0, -100px);
        }

        /* Next to Next Slide */
        #s1:checked~#slide3,
        #s2:checked~#slide4,
        #s3:checked~#slide5,
        #s4:checked~#slide1,
        #s5:checked~#slide2 {
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.4);
            transform: translate3d(40%, 0, -250px);
        }

        /* Previous to Previous Slide */
        #s1:checked~#slide4,
        #s2:checked~#slide5,
        #s3:checked~#slide1,
        #s4:checked~#slide2,
        #s5:checked~#slide3 {
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.4);
            transform: translate3d(-40%, 0, -250px);
        }

        /* Previous Slide */
        #s1:checked~#slide5,
        #s2:checked~#slide1,
        #s3:checked~#slide2,
        #s4:checked~#slide3,
        #s5:checked~#slide4 {
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.3), 0 2px 2px rgba(0, 0, 0, 0.2);
            transform: translate3d(-20%, 0, -100px);
        }

        /* righr side nav */
        .sidenavright {
            height: 380px;
            width: 250px;
            position: relative;
            z-index: 1;
            float: right;
            right: 0;
            /* margin-top: 20px; */
            margin-left: 50px;
            /* background-color: #2b3856; */
            overflow-x: hidden;
            padding-top: 20px;
            border-radius: 14px 0px 0px 14px;
        }



        /* right Sidebar list */
        .quicklist1 {
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            color: rgb(51, 51, 153);
            color: white;
            color: black;
            border-top: 2px solid blue;
            border-bottom: 2px solid #800080;
            text-align: center;
            padding: 9px;
            /* margin-top: 20px; */
            margin: 2px;
            border-radius: 17px;
            box-shadow: 2px 2px;
            width: 80%;
        }

        /* blinking buttons css */
        #blink {
            font-size: 17px;
            text-align: center;
            width: 90%;
            padding: 9px;
            border-radius: 45px;
            background-color: blue;
            color: white;
            font-weight: bold;
            font-family: 'Times New Roman', Times, serif;
            text-transform: uppercase;
            border: 1px dotted whitesmoke;
            animation: blinker 200ms infinite;
            color: #151b54;
            /* color: #2b3856; */
        }

        @keyframes blinker {
            from {
                opacity: 0.5;
                background-color: #ff8c0c;
            }

            to {
                opacity: 1;
                background-color: red;
                background-color: #00fa9a;
                background-color: cyan;
                transform: scale(1);
            }
        }

        /* right sidebar anchor link css */
        .quicklist1 a {
            color: red;
            color: rgb(51, 51, 153);
            color: white;
            color: black;
            color: #2b3856;
            color:#15317e;
            font-weight: bold;
            text-decoration: none;
        }

        /* after slider quote tags */
        .quote {
            font-size: 18px;
            font-style: italic;
            font-weight: 600;
            margin-left: 7%;
            color: #3b3131;
            color: #52595d;
            /* color: #2b3856; */
        }

        .quote span {
            margin-left: 50%;
        }

        .quoteright {
            position: absolute;
            right: 0;
            font-size: 18px;
            font-style: italic;
            font-weight: 600;
            margin-right: 7%;
            color: #3b3131;
            color: #b3446c;
            color: #52595d;
            /* color: #15317e; */
        }

        .quoteright span {
            margin-left: 50%;
        }

        /* home center coode starts here */
        /* jicsian tag */
        .jics {
            text-align: center;
            font-size: 50px;
            text-transform: uppercase;
            color: #151b54;
            color: white;
            font-weight: bold;
            font-family: 'Times New Roman', Times, serif;
            margin: auto;
            padding: auto;
            /* color: black; */
            color: #151b54;
            color: #15317e;
            color: #2b1b17;
        }

        /* ian text jics home */
        .jics span {
            font-size: 35px;
            text-transform: lowercase;
            margin: auto;
            margin-left: -12px;
            padding: auto;
            color: red;
            color: darkcyan;
            color: #15317e;
            color: #2b1b17;
        }

        /* robust tag jicsian home */
        .jicstag {
            font-size: 22px;
            text-align: center;
            margin: auto;
            margin-top: 10px;
            padding: auto;
            color: #f660ab;
            color: #15317e;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        /* learn more link */
        .jicslink {
            text-align: center;
            margin-top: 8px;
            margin-bottom: 0px;
            font-size: 15px;
            color: #15317e;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        /* learn more links */
        .jicslink a {
            color: darkgreen;
            color: #52595d;
            font-size: 34px;
            margin: auto;
            padding: auto;
            margin-bottom: 0px;
            text-decoration: none;
        }

        /* jicsian box */
        .boxjics {
            text-align: center;
            margin: 3px;
            margin-top: 85px;
            width: 40%;
            border: 2px solid white;
            border-radius: 52px 12px 52px 12px;
            margin-left: 30%;
            border-bottom: 2px solid blue;
            border-right: 0.6px solid blue;
        }

        /* 3images overlay css */
        #overlay {
            display: none;
            position: absolute;
            /* top: 45.4%; */
            top: 0;
            bottom: 0;
            background: #999;
            width: 100%;
            height: 352.4%;
            opacity: 0.7;
            z-index: 40;
        }

        #popup {
            display: none;
            position: absolute;
            top: 127.4%;
            left: 23%;
            /* background: #fff; */
            width: 90%;
            height: 400px;
            margin-left: -250px;
            /*Half the value of width to center div*/
            margin-top: -250px;
            /*Half the value of height to center div*/
            z-index: 200;
        }

        #popupclose {
            float: right;
            padding: 4px;
            width: 8px;
            font-size: 12px;
            border-radius: 12px;
            border: 2px solid rgb(255, 252, 252);
            cursor: pointer;
            color: white;
            background-color: blueviolet;
            margin-bottom: 50px;
            margin-top: auto;
            position: relative;
            right: 3;
        }

        .popupcontent {
            padding: 10px;
        }

        .popupcontent img {
            width: 100%;
            margin-top: -6%;
            height: 570px;
        }

        #popup1 {
            display: none;
            position: absolute;
            top: 97.4%;
            left: 23%;
            /* background: #fff; */
            width: 90%;
            height: 400px;
            margin-left: -250px;
            /*Half the value of width to center div*/
            margin-top: -250px;
            /*Half the value of height to center div*/
            z-index: 200;
        }

        #popupclose1 {
            float: right;
            padding: 4px;
            width: 8px;
            font-size: 12px;
            border-radius: 12px;
            border: 2px solid rgb(255, 252, 252);
            cursor: pointer;
            color: white;
            background-color: blueviolet;
            margin-bottom: 50px;
            margin-top: auto;
            position: relative;
            right: 3;
        }

        .popupcontent1 {
            padding: 10px;
        }

        .popupcontent1 img {
            width: 100%;
            margin-top: -6%;
            height: 1620px;
        }

        #button {
            cursor: pointer;
            width: 360px;
            height: 450px;
            margin-left: 115px;
            border-radius: 23px;
            box-shadow:1.5px 1.9px blue;
        }

        #button1 {
            cursor: pointer;
            width: 360px;
            height: 450px;
            margin-top: -20px;
            margin-left: 90px;
            border-radius: 23px;
            box-shadow:1.5px 1.9px blue;
        }

        #button2 {
            cursor: pointer;
            width: 360px;
            height: 450px;
            margin-left: 90px;
            border-radius: 23px;
            box-shadow:1.8px 2.1px blue;
        }
        .button2::-webkit-scrollbar {
  display: none;
}

/* Hide scrollbar for IE, Edge and Firefox */
.button2{
  -ms-overflow-style: none;  /* IE and Edge */
  scrollbar-width: none;  /* Firefox */
}

        #maincontent {
            margin-left: 4%;
            margin-top: -2%;
        }

        .image img:hover {
            transform: scale(1.07);
            transition: ease-in-out .8s;
            margin-left: 12%;
            margin-top: 3%;
        }

        .image1 img:hover {
            transform: scale(1.07);
            transition: ease-in-out .8s;
            margin-left: 12%;
            margin-top: 3%;
            margin-top: -1%;
        }

        .image1 {
            margin-top: 6%;
        }

        .image2 iframe:hover {
            transform: scale(1.07);
            transition: ease-in-out .8s;
            margin-left: 12%;
            margin-top: 3%;
        }

        /*  body title sections css .. why jics & plcement partners */
        .centeritemp {
            text-align: center;

            /* box-shadow: 2px 2px; */
            border-radius: 52px 12px 52px 12px;
            padding: 10px;
            font-weight: bold;
            color: white;
            /* font-size: 1.4em; */
            font-size: 35px;
            /* background-color: #2b3856; */
            width: 30%;
            /* color:black; */
            border: 2px solid #f9f6ee;
            border-bottom: 2px solid blue;
            border-right: 2px solid blue;
            color: #151b54;
            color: #15317e;
            color: #2b1b17;
            margin-top: -10px;
            font-family: 'Times New Roman', Times, serif;
        }




        /* bottom to top button css */
        #myBtn {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 30px;
            z-index: 99;
            font-size: 18px;
            border: none;
            outline: none;
            background-color: #2b3856;
            color: white;
            cursor: pointer;
            padding: 15px;
            border-radius: 14px;
        }

        #myBtn:hover {
            background-color: #555;
        }

        .textslider {
            color: red;
        }

        /* footer css */
    </style>
</head>

<body>
    <button onclick="topFunction()" id="myBtn" title="Go to top">&uarr;</button>
    <div class="textslider">
        <marquee behavior="scroll" direction="rtl" class="textslider">My dear Friend- Don't curse the darkness light a lamp.</marquee>
    </div>
    <!-- Left Side navigation -->
    <div class="man">
        <div class="sidenav">
            <div style="border: 1px solid navy; height:40%;margin:5px; box-shadow: 2px 2px; border-radius:24px;margin-top:1px;">
                <p class="titleside">Recent Updates & Links</p>
                <marquee class="titleside1" width="95%" direction="up" height="70%" scrollamount='2,0'>
                    <p class="update">Admissions Open ! Apply Now</p>
                    <p class="update">New batch for CCNA Starting So Enroll Nown</p>
                    <p class="update">Discount On Hardware Courses ! Enroll Now</p>
                    <p class="update">New year Discount ending soon..</p>
                    <p class="update">testing the texttesting the text</p>
                    <p class="update">testing the texttesting the text</p>
                    <p class="update">testing the texttesting the text</p>
                    <p class="update">testing the texttesting the text</p>
                </marquee>
            </div>
            <div align="center">
                <p class="quick">Quick Links</p>
                <ul>
                    <li class="quicklist" style=" border-top: 2px solid blue; margin-top:10px;"><a href="labs.php">Gallery</a></li>
                    <!-- <li class="quicklist"><a href="labs.php">Labs</a></li> -->
                    <li class="quicklist"><a href="contact.php">Contact Us</a></li>
                    <li class="quicklist"><a href="">W2Career</a></li>
                </ul>
            </div>
        </div>
        <!-- main slideshow of homepage -->
        <div class="topslider">
            <!-- 
               <div class="slideshow-container">
               
                   <div class="mySlides fade">
                       <img src="./img/img1.jpg" alt="image" style="width:105%;height: 400px;">
                   </div>
               
                   <div class="mySlides fade">
                       <img src="./img/img2.jpg" alt="image" style="width:105%;height: 400px; ">
                   </div>
               
                   <div class="mySlides fade">
                       <img src="./img/img3.jpg" alt="image" style="width:105%;height: 400px; ">
                   </div>
               
               </div>
               <br>
               
               <div style="text-align:center;">
                   <span class="dot"></span>
                   <span class="dot"></span>
                   <span class="dot"></span>
               </div>
               
               <script>
                   let slideIndex = 0;
                   showSlides();
               
                   function showSlides() {
                       let i;
                       let slides = document.getElementsByClassName("mySlides");
                       let dots = document.getElementsByClassName("dot");
                       for (i = 0; i < slides.length; i++) {
                           slides[i].style.display = "none";
                       }
                       slideIndex++;
                       if (slideIndex > slides.length) {
                           slideIndex = 1
                       }
                       for (i = 0; i < dots.length; i++) {
                           dots[i].className = dots[i].className.replace(" active", "");
                       }
                       slides[slideIndex - 1].style.display = "block";
                       dots[slideIndex - 1].className += " active";
                       setTimeout(showSlides, 2000); // Change image every 2 seconds
                   }
               </script> -->
            <div style="border: 5px groove #e3319d; margin-left:75px; padding: 13px;width:950px; ">
                <section id="slider">
                    <input type="radio" name="slider" id="s1" checked>
                    <input type="radio" name="slider" id="s2">
                    <input type="radio" name="slider" id="s3">
                    <input type="radio" name="slider" id="s4">
                    <input type="radio" name="slider" id="s5">
                    <label for="s1" id="slide1"><img src="https://i.pinimg.com/originals/2b/de/de/2bdede0647e3cdf75b44ea33723201d9.jpg" alt=""></label>
                    <label for="s2" id="slide2"><img src="https://images6.alphacoders.com/462/thumb-1920-462371.jpg" alt=""></label>
                    <label for="s3" id="slide3"><img src="https://wallpaperaccess.com/full/1154341.jpg" alt=""></label>
                    <label for="s4" id="slide4"><img src="https://wallpapercave.com/wp/wp2634222.jpg" alt=""></label>
                    <label for="s5" id="slide5"><img src="https://images5.alphacoders.com/343/thumb-1920-343645.jpg" alt=""></label>
                    <label for="s3" id="slide3"><img src="./img/999.png.jpeg" alt=""></label> -->
                    <!-- <label for="s4" id="slide4"><img src="img.jpg" alt=""></label> -->
                    <!-- <label for="s5" id="slide5"><img src="logosi.png" alt=""></label> --> -->
                </section>
            </div>
        </div>
        <!-- right side sidebar -->
        <div class="sidenavright">
            <ul>
                <div align="center">
                    <li><a href=""><Button id="blink">New Batches: </Button></a></li>
                    <br>
                    <li><a href=""><Button id="blink">Bulletins: </Button></a></li>
                    <br>
                    <!-- <li class="quicklist1" style=" border-top: 2px solid blue;"><a href="">Placement partners</a></li> -->
                    <li class="quicklist1" style="margin-top:15px;   "   ><a href="">Certificates</a></li>
                    <li class="quicklist1"><a href="courses.php">Contents / Notes </a></li>
                    <li class="quicklist1"><a href="">Projects</a></li>
                    <li class="quicklist1"><a href="">Thesis</a></li>
                    
                </div>
            </ul>
        </div>
    </div>
    <br> <br>
    <div style="display: flex;">
        <div class="quote">
            <h3>Innovation distinguishes between a leader and a follow <br> <span>-Steve Jobs </span></h3>
        </div>
        <div class="quoteright">
            <h3>If you can't explain it simply you don't understand it well enough <br><span>-Albert Einetin</span></h3>
        </div>
    </div>
    <div class="mainsectionimg">
        <div class="boxjics">
            <p class="jics">Jics <span>ian</span>
            </p>
        </div>
        <p class="jicstag">Robust..Skilled..Professional..</p>
        <p class="jicslink">
            <a href="#">Learn More...</a>
        </p>
        <div id="maincontent">
            <div style="display: flex;">
                <div class="image">
                    <img src="./img/c.jpeg" alt="" id="button">
                </div>
                <div class="image1">
                    
                    <img src="./img/b12.jpeg" alt="" id="button1">
                </div>
                <div class="image2">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7114.711804147622!2d75.79945967277636!3d26.923929448438713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db3ff7408bccf%3A0xed8d079caf1e07a7!2sJICS%20Computer%20Hardware%20%26%20Networking%20Institute!5e0!3m2!1sen!2sin!4v1673949037194!5m2!1sen!2sin" width="350" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="button2"></iframe>
                </div>
            </div>
        </div>
        <div id="overlay"></div>
        <div id="popup">
            <div class="popupcontrols">
                <span id="popupclose">X</span>
            </div>
            <div class="popupcontent">
            <!-- <a href="about.php"></a> -->
                <img src="./img/bg.jpg" alt="">
              
            </div>
        </div>
        <div id="popup1">
            <div class="popupcontrols1">
                <span id="popupclose1">X</span>
            </div>
            <div class="popupcontent1">
                <img src="./img/review3.png" alt="">
            </div>
            <script type="text/javascript">
                // Initialize Variables
                var closePopup = document.getElementById("popupclose");
                var closePopup1 = document.getElementById("popupclose1");
                var overlay = document.getElementById("overlay");
                var popup = document.getElementById("popup");
                var popup1 = document.getElementById("popup1");
                var button = document.getElementById("button");
                var button1 = document.getElementById("button1");
                var button2 = document.getElementById("button2");
                // Close Popup Event
                closePopup.onclick = function() {
                    overlay.style.display = 'none';
                    popup.style.display = 'none';
                };
                closePopup1.onclick = function() {
                    overlay.style.display = 'none';
                    popup1.style.display = 'none';
                };
                // Show Overlay and Popup
                button.onclick = function() {
                    overlay.style.display = 'block';
                    popup.style.display = 'block';
                }
                button1.onclick = function() {
                    overlay.style.display = 'block';
                    popup1.style.display = 'block';
                }
                button2.onclick = function() {
                    overlay.style.display = 'block';
                    popup.style.display = 'block';
                }
            </script>
        </div>
        <!-- placement partner's section -->
        <div class="centeritem" align="center">
            <p class="centeritemp" style="margin: 40px;" >Our Associates</p>
            <img src="./imgbg/ssit.png" alt="" width="75.5%" style="box-shadow: 1.5px 2px 1px  2px blue; margin-left:-25px; ">

            <p class="centeritemp"  style="margin-top: 40px;"   >Placement Partner's</p>
            <img src="./img/new one.png" alt="placements" width="76%" style="margin-left:-1.6%; box-shadow:1.8px 1.8px 3px  pink;height:820px;">
        </div>
</body>
<br> <br>
<!-- <script>
      const date = new Date();
      document.getElementById('cdate').innerHTML = date.getUTCFullYear();
      </script> -->
<script>
    // Get the button
    let mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<style>
   /* Component Needs */
@import url(https://fonts.googleapis.com/css?family=Droid+Serif:400,700);
@import url(https://fonts.googleapis.com/css?family=Raleway:100,400,700);
.pc-tab > input,
.pc-tab section > div {
  display: none;
  font-size: 18px;
  /* font-weight: bold; */
}

#tab1:checked ~ section .tab1,
#tab2:checked ~ section .tab2,
#tab3:checked ~ section .tab3,
#tab4:checked ~ section .tab4,
#tab5:checked ~ section .tab5,
#tab6:checked ~ section .tab6 {
  display: block;
}

#tab1:checked ~ nav .tab1,
#tab2:checked ~ nav .tab2,
#tab3:checked ~ nav .tab3,
#tab4:checked ~ nav .tab4,
#tab5:checked ~ nav .tab5,
#tab6:checked ~ nav .tab6    {
  color: red;
}


/* Visual Styles */
*, *:after, *:before {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

.pc-tab {
  /* width: 100%; */
  max-width: 1260px;
  margin: 0 auto;
  margin-top: -15px;
  margin-left:185px;
  color: #15317e;
  box-shadow:2px px  3px blue;
  /* border : 1px solid blue; */
}
.pc-tab ul {
  list-style: none;
  margin: 0;
  padding: 0;
  color: #15317e;
}
.pc-tab ul li label {
  font-family: "Raleway";
  float: left;
  padding: 15px 25px;
  border: 1px solid #045f5f;
  border-bottom: 0;
  /* background: #eeeeee; */
  color: #15317e;
}
.pc-tab ul li label:hover {
  /* background: #dddddd; */
}
.pc-tab ul li label:active {
  /* background: #ffffff; */
}
.pc-tab ul li:not(:last-child) label {
  border-right-width: 0;
}
.pc-tab section {
  font-family: "Droid Serif";
  clear: both;
}
.pc-tab section div {
  padding: 20px;
  width: 100%;
  height: 300px;
  border: 1px solid #98afc7;
  /* background: #fff; */
  line-height: 1.5em;
  letter-spacing: 0.3px;
  color: #15317e;
}
.pc-tab section div h2 {
  margin: 0;
  font-family: "Raleway";
  letter-spacing: 1px;
  color: #34495e;
  /* color: red; */
  
}

#tab1:checked ~ nav .tab1 label,
#tab2:checked ~ nav .tab2 label,
#tab3:checked ~ nav .tab3 label,
#tab4:checked ~ nav .tab4 label,
#tab5:checked ~ nav .tab5 label,
#tab6:checked ~ nav .tab6 label {
  /* background: white; */
  color: #111;
  position: relative;
}
#tab1:checked ~ nav .tab1 label:after,
#tab2:checked ~ nav .tab2 label:after,
#tab3:checked ~ nav .tab3 label:after,
#tab4:checked ~ nav .tab2 label:after,
#tab5:checked ~ nav .tab2 label:after,
#tab6:checked ~ nav .tab2 label:after {
  content: "";
  display: block;
  position: absolute;
  height: 2px;
  width: 100%;
  /* background: #ffffff; */
  left: 0;
  bottom: -1px;
}
.tab1{
width: 300px;
}

</style>
<!-- <?php
//require './ext/_footer.php';
?> -->
<style>
    .footer hr{
        width: 80%;
        opacity: 0.3;
    }
    .footer img{
        width: 1150px;
        margin-left: 12%;
    }
    .hrf{
        /* margin-bottom: 300px; */
        margin-top: -20px;
        margin-bottom: 30px;
        margin-left:180px;
    }
    .upfoot{
        font-family: 'Times New Roman', Times, serif;
    }
    .tab1 span,
    .tab2 span,
    .tab3 span,
    .tab4 span,
    .tab5 span,
    .tab6 span{
        border: 1px solid #9172ec;
        margin:15px;
        padding: 7px;
    }
    .tab2 span{
        /* height: 200px; */
    }
    
</style>
<footer>
<div class="footer">
<div class="centeritem" align="center">
            <p class="centeritemp">Certifications</p>
</div>
<!-- <hr class="hrf" style="width:78%"> -->
    <div class="upfoot">
    <div class="pc-tab">
        <input checked="checked" id="tab1" type="radio" name="pct" />
        <input id="tab2" type="radio" name="pct" />
        <input id="tab3" type="radio" name="pct" />
        <input id="tab4" type="radio" name="pct" />
        <input id="tab5" type="radio" name="pct" />
        <input id="tab6" type="radio" name="pct" />
          <nav style="font-size: 18px;font-weight: bold;">
            <ul>
              <li class="tab1">
                <label for="tab1" style="padding: 15px;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color:#2b547e; ">Databases</label>
              </li>
              <li class="tab2">
                <label for="tab2" style="padding: 15px;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color:#2b547e;">Programming</label>
              </li>
              <li class="tab3">
                <label for="tab3" style="padding: 15px;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color:#2b547e;">Networking</label>
              </li>
              <li class="tab4">
                <label for="tab4" style="padding: 15px;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color:#2b547e;">Cloud Computing</label>
              </li>
              <li class="tab5">
                <label for="tab5" style="padding: 15px;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color:#2b547e;">Data Science</label>
              </li>
              <li class="tab6">
                <label for="tab6" style="padding: 15px;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color:#2b547e;">AWS</label>
              </li>
            </ul>
          </nav>
          <section>
            <div class="tab1">
              <span style="display: flex;   ">
              <span><h3 style="width: 250px; height:50px; color:#566d7e;  "   >Oracle cetitified professional, MySQL 5.7 Database Administor</h3><p align="center" style="margin-top:60px;color:#a52a2a; " >learn more</p></span>
              <span><h3 style="width: 250px; height:50px; color:#566d7e; "  >Oracle Database 12c Administor Ceritified Professional</h3><p align="center" style="margin-top: 60px; color:#a52a2a;"  >learn more</p></span>
              <span><h3 style="width: 250px; height:50px; color:#566d7e;">Microsoft Certified: Azure Database Administrator Associate</h3><p align="center" style="margin-top: 60px; color:#a52a2a;"  >learn more</p></span>
              <span><h3 style="width: 250px; height:50px; color:#566d7e;">IBM Certified Database Administrator- DB2 11.1 for LUW</h3><p align="center"style="margin-top: 60px; color:#a52a2a;">learn more</p></span>
 
              <!-- <span><h3></h3><p align="center">learn more</p></span> -->
              </span>
        </div>
            <div class="tab2">
            <span style="display: flex; height:238px; ">
              <span><h3 style="width: 250px;">Oracle Certified Professional, java SE 11 developer(Oracle)</h3><p align="center" style="margin-top:30px;">learn more</p></span>
              <span><h3 style="width: 250px;">Microsoft Certified Azure Developer Associate(Microsoft)</h3><p align="center" style="margin-top:30px;">learn more</p></span>
              <span><h3 style="width: 250px;">IBM certified  Solution Developer IBM Watson Studio(IBM)</h3><p align="center" style= "margin-top:30px;">learn more</p></span>
              <span><h3  style="width: 250px;">Oracle Database 12c Administrator Certified Professional(Oracle)</h3><p align="center"style="margin-bottom:-70px;">learn more</p></span>
              </span> </div>
            <div class="tab3">
            <span style="display: flex; height:238px;">
              <span><h3 style="width: 250px;">Oracle: Oracle  Certifed Professional, Oracle Solaris 11 System Administrator</h3> <a href="hjii.html"><p align="center" style="margin-top:-10px;">learn more</p></a></span>
              <span><h3 style="width: 250px;">Microsoft: Microsoft Certified : Azure Admistrator Associate</h3> <a href="hjii.html"><p align="center" style="margin-top:40px;">learn more</p></a></span>
              <span><h3 style="width: 250px;">IBM: IBM Certified Network Architect- cloud Network Infrastrastructure</h3> <a href="hjii.html"><p align="center" style="margin-top:-10px;">learn more</p></a></span>
              <span><h3 style="width: 250px;">Cisco: CCNA Routing and Switching</h3> <a href="hjii.html"><p align="center" style="margin-top:70px;">learn more</p></a></span>
              </span></div>
            <div class="tab4">
            <span style="display: flex; height:238px;">
              <span><h3 style="width: 250px;">Oracle Cloud Infrastructure (OcI) Ceritified Architect Asssociate </h3> <a href="hjii.html"><p align="center" style="margin-top:-10px;">learn more</p></a></span>
              <span><h3 style="width: 250px;">Microsoft Azure Administrator Associate</h3> <a href="hjii.html"><p align="center" style="margin-top:40px;">learn more</p></a></span>
              <span><h3 style="width: 250px;">"IBM cloud Solution Architect V2</h3> <a href="hjii.html"><p align="center" style="margin-top:60px;">learn more</p></a></span>
              <span><h3 style="width: 250px;">IBM Cloud Application Developer v2</h3> <a href="hjii.html"><p align="center" style="margin-top:60px;">learn more</p></a></span>
              </span></div>
              <div class="tab5">
              <span style="display: flex;  height:238px;">
              <span><h3 style="width: 250px;">Microsoft Certified: Azure Data Enginer Associate </h3> <a href="hjii.html"><p align="center" style="margin-top:30px;">learn more</p></a></span>
              <span><h3 style="width: 250px;">IBM Certified Data Engineer - Big DATa</h3> <a href="hjii.html"><p align="center"style="margin-top:60px;">learn more</p></a></span>
              <span><h3 style="width: 250px;">Microsoft Certified: Data Analyst Asssociate</h3> <a href="hjii.html"><p align="center"style="margin-top:30px;">learn more</p></a></span>
              <span><h3 style="width: 250px;">IBM Certified Data Scientist - Big Data and Wastson</h3> <a href="hjii.html"><p align="center"style="margin-top:30px;">learn more</p></a></span>
              </span></div>
              <div class="tab6">
              <span style="display: flex; height:238px;">
              <span><h3 style="width: 250px;">Aws Certified Solutions Archiect - Associate (Amazon Web Services)</h3> <a href="hjii.html"><p align="center"style="margin-top:10px;">learn more</p></a></span>
              <span><h3 style="width: 250px;">AWS Certified  Developer- Associate (Amazon web services)</h3> <a href="hjii.html"><p align="center"style="margin-top:20px;">learn more</p></a></span>
              <span><h3 style="width: 250px;">AWS Certified SysOps Administrator - Associate (Amazon web Services)</h3> <a href="hjii.html"><p align="center"style="margin-top:20px;">learn more</p></a></span>
              <span><h3 style="width: 250px;"> AWS Certified  Big Data- Specialty (Amazon web Services)</h3> <a href="hjii.html"><p align="center"style="margin-top:20px;">learn more</p></a></span>
              </span></div>
          </section>
        </div>
</div>
           
<p class="centeritemp"  style="margin-top: 40px;margin-left:32.5%; border-bottom:white; border-right:white; color:blue; "   >Way 2 Career</p>
 
<img src="./imgbg/ssa3.png" alt="" style="width:76.4%; margin-left:180px; margin-top:-60px; ">
    <!-- <hr style="width:78%; margin-left:180px;"> -->
    
    <br> <br> <br><br> <br>
    <img src="./imgbg/footer2.png" alt="" style="width:90%; margin-left:110px;  ">  
    <div style="margin-top:-600px;border: 1px solid black;height:180px;padding:150px;width:78%;margin-left:10%; margin-bottom:-20px; box-shadow: 2px 1px 3px 1px pink;">
    
      <br> <br>
      <style>
     .fa {
  padding: 10px;
  font-size: 300px;
  width: 40px;
  text-align: center;
  text-decoration: none;
  border-radius: 80%;
  background-color:#b3d9d9;
   
} 
</style>
<body>
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

<!-- Add font awesome icons -->
<a href="" class="fa fa-facebook " style="margin-left: 70%; margin-top:30px"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-instagram"></a>
  
      <!-- <img src="./imgbg/ic.jpg" alt="" style="width: 30px; margin-top:3%; float: right; margin-right:30%;">
      <img src="./imgbg/t3.png" alt="" style="width: 30px; margin-top:3%; float: right; margin-right:-11%;">
      <img src="./imgbg/f.jpg" alt="" style="width: 65px; margin-top:2%; float: right; margin-right:-11%;"> -->

    <p style=" margin-left: -50px; margin-top:-27px;  color:#15317e; font-size:20px; ">More way to Find us: www.jicsindia.com or call 9987654321,9876543212.</p>
      <hr style="width: 1320px; margin-left:-150px; margin-top:-10px; height:3px;  background-color:blue;  box-shadow: 1px 1px 1px 1px cyan; ">
     <p style="margin-left:-50px; margin-top: -4px; color:#15317e; font-size:20px  ">Copyright &copy; <span id="date" ></span> JICS_Jaipur Inc. All rights reserved <a href="" style="margin-left: 20px;"  >Privacy Policy</a> <a href="">Terms of Use</a> <a href="">Site Map </a> <div style="float: right; margin-top:-40px;  margin-right: -60px; color:#15317e; font-size:20px; "  > Jaipur,India</div>  </p>     
    </div>
    
    
</div> 
<script>
      const date = new Date();
      document.getElementById('date').innerHTML = date.getUTCFullYear();
      </script>
</footer>
</html>