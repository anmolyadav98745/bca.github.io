<!DOCTYPE html>
<html>
<head>
<title>BCAfunda.com</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<link rel="stylesheet" href="styles.css">
<body>
<h1 align="center" >BCAfunda.com</h1>
<table width="100%" bgcolor="black" align="center">
<tr>
<td>
<button class="tablink" onclick="openPage('Home', this, 'green')" style="width:210px;" id="defaultOpen">Home</button>

<a href="top.php" style="text-decoration:none;color:white;"><button  class="butt button11"  style="width:210px;"> Top University</button></a>

<button  class="tablink" onclick="openPage('Contact', this,'green')" style="width:210px;">Syllabus</button>

<a href="c.php" style="text-decoration:none;color:white;"><button  class="butt button11"  style="width:210px;">Notes</button></a>
    </td> 
</tr>
</table>

<div id="Home" class="tabcontent">
       
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 9</div>
  <img src="https://www.sandipuniversity.edu.in/blog/wp-content/uploads/2021/12/B.Tech-or-BCA-Which-is-the-Right-Choice.jpg" style="width:100%;height:300px;" align="center">
  <div class="text"> </div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 9</div>
  <img src=" https://img.collegedekhocdn.com/media/img/news/B.Tech_or_BCA_1_pick_the_better_pgm.png?tr=h-315,w-600" style="width:100%;height:300px;"  align="center">
  <div class="text"> </div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 9</div>
  <img src="https://21btrj3i7vy42n2f4044931p-wpengine.netdna-ssl.com/wp-content/uploads/2021/02/CG10000_1.jpg" style="width:100%;height:300px;"  align="center">
  <div class="text"> </div>
</div>
<div class="mySlides fade">
  <div class="numbertext">4 / 9</div>
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0ngWIoHU3CXkIVbgeEzHcTtofN0JPjJkCZQ&usqp=CAU" style="width:100%;height:300px;"  align="center">
  <div class="text"> </div>
</div>
<div class="mySlides fade">
  <div class="numbertext">5/ 9</div>
  <img src=" https://cdn.pixabay.com/photo/2017/06/14/16/20/network-2402637_960_720.jpg" style="width:100%;height:300px;"  align="center">
  <div class="text"> </div>
</div>

<div class="mySlides fade">
  <div class="numbertext">6 / 9</div>
  <img src=" https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbhz5B8wE2P-QGa9Wc40tYDq29xuy0yN8kETQTIbXr3t-Hl80SfptRwt3prjAhVNVXGJs&usqp=CAU" style="width:100%;height:300px;%"  align="center">
  <div class="text"> </div>
</div>
<div class="mySlides fade">
  <div class="numbertext">7/ 9</div>
  <img src=" https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR69oLFTo1s0YBVQvqr5VZIh-tbF9FBx2geb6r7B6XWyVScg6WejATwUT-3NwOzkLsyr2k&usqp=CAU" style="width:100%;height:300px;"  align="center">
  <div class="text"> </div>
</div>
<div class="mySlides fade">
  <div class="numbertext">8 / 9</div>
  <img src=" http://vertassets.blob.core.windows.net/image/c992098f/c992098f-059b-4faa-9498-308088c6b879/thinkstock_finger_touching_screen_w_icons.jpg" style="width:100%;height:300px;"  align="center">
  <div class="text"> </div>
</div>

<div class="mySlides fade">
  <div class="numbertext">9 / 9</div>
  <img src=" https://inteng-storage.s3.amazonaws.com/img/iea/3oOpMMP5GW/sizes/ai-in-ed_resize_md.jpg" style="width:100%;height:300px;"  align="center">
  <div class="text"> </div>
</div>
<a class="prev" onclick="plusSlides(-1)">     </a>
<a class="next" onclick="plusSlides(1)">  </a>

</div>
<br>
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
  <span class="dot" onclick="currentSlide(6)"></span>
  <span class="dot" onclick="currentSlide(7)"></span>
  <span class="dot" onclick="currentSlide(8)"></span>
  <span class="dot" onclick="currentSlide(9)"></span>
</div>

<script>
      var slideIndex = 0;
      showSlides();
      function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        for(i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        slideIndex++;
        if(slideIndex > slides.length) {
          slideIndex = 1
        }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 2000); 
      }
    </script>
     <h3  style="margin:20px;">Overview :</h3>
     <ul style="margin:20px; width:90%; aline:center;"><p1 style="font-size:15px;">Bachelor in Computer Application (BCA) is an undergraduate degree course in computer applications. With the rapid growth of IT industry in India, the demand of computer professional is increasing day by day. This increasing growth of IT industry has created a lot of opportunities for the computer graduates.

The BCA is an undergraduate degree course in computer applications for duration of 3 years. After completing BCA, a student can go for MCA which is a master course in computer application and is considered equivalent to engineering course (B.Tech).

The study period of BCA includes various subjects such as Programming in C Language (Basic and Advanced), Networking, World-Wide-Web, Data Structure, Advanced C Language Programming,Database Management,Mathematics,Software Engineering, Object Oriented Programming using C++, Visual Basic, Programming using PHP, JAVA, Oracle, Operating Systems, Web Scripting and Development, etc.

The course curriculum of BCA is somewhat similar to the course as Bachelor of Technology (B.Tech).</p1> </ul>
  
  <h3 style="margin:20px;">Eligibility : </h3>
  <ul style="margin-left:40px;font-size:15px;"> 
  <p > <li >Candidate must have passed 12th in any stream or equivalent from a recognized board.</li><br>
  <li>Candidate must have a minimum aggregate of 50% in Class 12th exam.</li><br>
  <li>Candidates who appearing for their final 12th board exam,s can also apply for admission. </li></p>
   </ul>
  
  <h3 style="margin:20px;">Package : </h3>
  <ul style="margin-left:40px;font-size:15px;"><li><p >Rs. 25,000 to Rs. 40,000 per month</p></li><ul>
   


<div style="border: 5px solid green;
width: 100%; 
  background-color: #008080; height: 125px; padding:30px; color: white; margin-top:10px; align: left;">
Contact Us: +91 9058428140
<br><br>
Mail :
<a href="mailto:anmolyadav95200@gmail.com" style="text-decoration:none;"> anmolyadav95200@gmail.com</a>

</div>

    </div>
<div id="Contact" class="tabcontent">
<div class="mr"> 
          <h1 align="center"><font class="button button2" >Bachelors of Computer Applications</font></h1>
          
            <button align="center" id="section1" class="button button5" >           
              <a  href="#section2"  style="text-decoration:none; color:white;"    >  
               B.C.A  first  Semester</a>
            </button>
           
            <button align="center" id="section1" class="button button5" >
              <a  href="#section3" style="text-decoration:none;color:white;"   >
              B.C.A Second Semester
            </a>
           </button>
            
            <button align="center" id="section1" class="button button5">
              <a  href="#section4" style="text-decoration:none; color:white;"  >
              B.C.A Third Semester</a>
            </button>
            
            <button align="center" id="section1" class="button button5">
              <a  href="#section5" style="text-decoration:none; color:white;"  >
              B.C.A Fourth Semester</a>
         </button>
            
         <button align="center" id="section1" class="button button5">
              <a  href="#section6" style="text-decoration:none; color:white;"   >
              B.C.A Fifth Semester</a>
          </button>
            
            <button align="center" id="section1" class="button button5">
              <a  href="#section7" style="text-decoration:none; color:white;" >
              B.C.A Six Semester</a>
          </button>
           <div class="lk"> 
             
            <div class="button button4" id="section2">
            <h1 style="color:white;">B.C.A   FIRST   SEMESTER </h1>
            <h2 style="color:red;">Subject Name</h2>
            <h2>Course Code	Course Name</h2>
            
             <ul style="margin-left:2px;">
            <h4 >BCA-S101T   Computer Fundamental & Office Automation</h4>
            <h4 > BCA-S102T	Programming Principle & Algorithm</h4>
            <h4 >BCA-S103	Principle of Management</h4>
            <h4 > BCA-S104	Business Communication</h4>
            <h4 >BCA-S105	Mathematics –I</h4>
            <h2 style="color:red">Computer Lab</h2>
            
            <h4> BCA-S101P	Computer Laboratory and Practical Work of Office  Automation</h4>
             <h4>BCA-S102P	Computer Laboratory and Practical Work of Programming Principle & Algorithm</h4>
           
            </div>
        
            <hr>
            <div class="button button4" id="section3">
            <h1 style="color:white;">B.C.A   SECOND   SEMESTER </h1>
            <h2 style="color:red;">Subject Name</h2>
            <h3 >Course Code	Course Name</h3>
            
           <ul style="margin-left:2px;">
            <h4 >BCA-S106T	C++ Programming</h4>
            <h4> BCA-S107	Digital Electronics & Computer Organization</h4>
            <h4 > BCA-S108	Organization Behavio</h4>
            <h4 > BCA-S109	Financial Accounting & Management</h4>
            <h4 >BCA-S110	Mathematics–II</h4>
</ul>
            <h2 style="color:red"> Computer Lab</h2>
            <ul style="margin:2px;"
            <h4 >BCA-S106P	Computer Laboratory and Practical Work of C++ Programming</h4>
           </ul> 
            </div>
            
            <hr>      
            <div class="button button4" id="section4">
            <h1 style="color:white;">B.C.A   THIRD   SEMESTER </h1>
            <h2>Subject Name</h2>
            <h3 >Course Code	Course Name</h3>
            
           <ul style="margin-left:5px;">
            <h4 > BCA-S201T	python</h4>
            <h4 > BCA-S202T	Data Structure Using C & C++</h4>
            <h4 > BCA-S203	Computer Architecture & Assembly Language</h4>
            <h4 > BCA-S204	Business Economics</h4>
            <h4 >BCA-S205	Elements of Statistics</h4> 
          </ul> 
            <h3 style="color:red;"> Computer Lab</h3>
            
           <ul style="margin-left:5px;">
            <h4 > BCA-S201P	Computer Laboratory and Practical Work of python</h4>
            <h4 > BCA-S202P	Computer Laboratory and Practical Work of DS</h4>
            </ul>
            </h3>
            </div>
            <hr>
            <div class="button button4" id="section5">
           
            <h1 style="color:white">B.C.A   FOURTH   SEMESTER </h1>
            <h2 style="color:red">Subject Name</h2>
            <h3>Course Code	Course Name</h3>
            
           <ul style="margin-left:5px;">
           <h4> BCA-S206T	Computer Graphics & Multimedia Application</h4>
           <h4>BCA-S207	Operating System</h4>
           <h4>BCA-S208	Software Engineering </h4>
           <h4> BCA-S209	Optimization Techniques</h4>
           <h4>BCA-S210	Mathematics-III</h4>
              </ul>
            <h3 style="color:red"> Computer Lab</h3>
            
           <ul style="margin-left:5px;">
            <h4>BCA-S206P	Computer Laboratory and Practical Work of
            Computer Graphics & Multimedia Application</h4> 
            </ul>
            </div>
            <hr>
            <div class="button button4" id="section6">
            
            <h1 style="color:white">B.C.A   FIFTH   SEMESTER </h1>
            <h2 style="color:red">Subject Name</h2>
            <h3>Course Code	Course Name</h3>
            
           <ul style="margin-left:5px;">
            <h4> BCA-S301T	Introduction to DBMS</h4>
            <h4>BCA-S302T	Java Programming and Dynamic Webpage
                Design</h4>
            <h4>BCA-S303	Computer Network</h4>
           <h4>BCA-S304	Numerical Methods</h4>
           <h4>BCA-S205	Elements of Statistics</h4>
           </ul>
               <h3 style="color:red"> Computer Lab</h3>
               
           <ul style="margin-left:5px;">
           <h4> BCA-S301P	Computer Laboratory and Practical Work of
            DBMS</h4>
            
            <h4>BCA-S302P	Computer Laboratory and Practical Work of
                Java Programming & Dynamic Webpage
                Design
            </h4>
            </ul>
            </div>
            <hr>
            <div class="button button4" id="section7">
            
            <h1 style="color:white;">B.C.A   SIXTH   SEMESTER </h1>
            <h2 style="color:red">Subject Name
            <h3>Course Code	Course Name</h3>
            
           <ul style="margin-left:5px;">
            <h4> BCA-S307	Computer Network Security</h4>
            <h4>BCA-S308	Information System: Analysis Design &
                Implementation
            </h4>
            
            <h4>BCA-S309	E-Commerce</h4>

            <h4> BCA-S310	Knowledge Management</h4>
            </ul>
            <h3 style="color:red;"> PROJECT MAJOR--</h3>
            
           <ul style="margin-left:5px;">
            <h4>BCA-S311	Major Project</h4>
            <h4> BCA-S312	Presentation/Seminar based on Major Project</h4>
          </ul>
          
            </div>
</div>
</div>

<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

document.getElementById("defaultOpen").click();
</script>
   
</body>
</html> 

