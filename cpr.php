<!DOCTYPE html>
        <html>
            <head>
      <title> made</title>
      <style>
.button1 {
  background-color:black; 
  color: black; 
  border: 2px solid black;
}

.button1:hover {
  background-color: red;
  color: red;
}

</style>       
          <meta charset="UTF-8">
          <meta name="description" content="Free Web tutorials">
          <meta name="keywords" content="HTML,CSS,XML,JavaScript">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="cpd.css">
          </head>
            <body>
               
<script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>
</head>
  
<body style="text-align:center;" id="body">
    
      
    <h2 type="button" onclick="changecolor()" style="float:right;" >
    <a href="#" style="text-decoration:none; color:black">change background color{ }</a>
</h2>
         
    <script>
        function changecolor()
        {
            // Generating random color each time
            var color = "#"+(Math.random()*16777215|0).toString(16);
              
            $("body").css("background-color",color);
        }
    </script>sss
    
        <table style="width:100%; " bgcolor="green">
            <thead>
                <th><h3 align="center"><button class="button button1"><a href="string.php" style="text-decoration: none; color:white;">string base algorithm</a></button> </h3> </th>
                <th><h3 align="center"><button class="button button1" style="color:white">
                <a href="sorting.php " style="text-decoration: none; color:white;">sorting problem</a></button></h3></th>
                <th><h3 align="center"><button class="button button1"  style="color:white">
                <a href="searching.php " style="text-decoration: none; color:white;">
                searching problem
              </a>
            </button></h3> </th>
            </thead>
            </table>  
             <div class="a">
                <table >
                <tr width="100%">
                <td> <embed src="lp.php"  style="width:165px; height:500px;"> </td>
                  <div class="d">
                 <td   style="float:left;width:95%; margin:20px;" align="center"><h1>History Of C</h1>
                  <h4 >History of C language is interesting to know. Here we are going to discuss a brief history of the c language.
                       C programming language was developed in 1972 by Dennis Ritchie at bell laboratories of AT&T (American Telephone 
                       & Telegraph), located in the U.S.A.</h4>
                      <h2 align="center" style="color:blue"> Dennis Ritchie is known as the founder of the c language.</h2>
                     <h4 >It was developed to overcome the problems of previous languages such as B, BCPL, etc.
                       Initially, C language was developed to be used in UNIX operating system. It inherits many features of
                       previous languages such as B and BCPL.

                       Let's see the programming languages that were developed before C language. </h4>
                       
                       <table style="width:60%; border:2px solid black;" align="center" bgcolor="white">
                        <tr bgcolor="green">
                            <th align="center">Language</th>
                            <th align="center">Year</th>
                            <th align="center">Developed By</th>
                       </tr>
                       <tr >
                       <td align="center">Algol </td>
                            <td align="center">1960</td>
                            <td align="center">International Group</td>
                       <tr >     
                       <td align="center">BCPL</td>
                            <td align="center">1967</td>
                            <td align="center">Martin Richard</td>
                       </tr>
                       <tr >
                       <td align="center">B</td>
                            <td align="center">1970</td>
                            <td align="center">Ken Thompson</td>
                       </tr>
                       <tr >
                       <td align="center">Traditional C</td>
                            <td align="center">1972</td>
                            <td align="center">Dennis Ritchie</td>
                       </tr>
                       <tr >    
                       <td align="center">K & R C	</td>
                            <td align="center">1978</td>
                            <td align="center">Kernighan & Dennis Ritchie</td>
                       </tr> 
                 </table>
                 </td>
                 </div>
                </table>
             </div>
            </body>
        </html>