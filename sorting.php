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
    <link rel="stylesheet" href="file.css">
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
    </script>
    
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
             
    <div class="lo">
        <div class="pk">
        
        </div>
        <h1 style="color:green;">Introduction of Sorting</h1>          
               <h4 >
                  Sorting algorithm specifies the way to arrange data in a particular order. Most common orders are in numerical or lexicographical order.

                 The importance of sorting lies in the fact that data searching can be optimized to
                     a very high level, if data is stored in a sorted manne
                     Sorting is also used to represent data in more readable formats.</h4>
                     <h1 align="center" style="color:green;">Time Complexities of all Sorting Algorithms</h1>
              
        </div>
            
             </div>
            </body>
        </html>