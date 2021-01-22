<html>
    <script type="text/javascript">
  if (screen.width <= 1209) {
    document.location = "/error_page/error.html";
}
    </script>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Student Dashboard</title>
        <script src="../date.js"></script>
       <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Poppins:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="appstyle.css">


          <style>
          /* IDEA:insert the PHP style here  */
          </style>




    </head>


        <!-- html title with css stylesheet linked-->
        <!-- Made by MandraSaptak Mandal-->
    <div class="grid">
    <div class="menu">
    <div class="left">
                <div class="logo">
                    <a href="https://www.dpsdurgapur.com" target="_blank"><img src="images/DPS.png" id="image"></a>
                </div>
                <div class="notice">
                    <h1>NOTICE:-</h1>
                </div>
                <div class="programming">
                     <a id="examp" href="https://dpsdurgapur.000webhostapp.com/">
                    <h1>Exam Portal</h1>
                    </a>
                </div>

                    <a id="gc" href="https://www.github.com/"><img src="https://img.icons8.com/bubbles/50/000000/github.png"/>
        <h1>Github Classroom</h1></a>
                </div>




            </div>
    </div>

        <body>

            <!--<?php
                $sql = "SELECT * FROM 'notice';";
                $result = mysqli_query($conn ,$sql);
                $resultCheck = mysqli_num_rows($result);

                if ($resultCheck > 0) {
                    while ($row = mysqli_fetch_assoc($result)){
                        echo $row['Class11'];
                    }
                }
            ?> -->





            <div class="agrid">
                <div class="middlepanel">
                  <div class="announcement">
                     <h1 id="ann">Announcement:</h1>
                     <div class="area">
                       <h1>php system is work in progress</h1>
                       <?php
                            echo "<h1>15.11.2020: Hello World!</h1>";
                       ?>

                     </div>


                  </div>
                  <div class="schedule">
                    <div class="zoom">
                      <h1 id="ztext">Zoom</h1>
                      <div class="agenda">

                        <div class="period1 p">
                            <h1 id="title">Period</h1>
                            <h1 id="time">11:00 PM</h1>
                        </div>
                        <div class="period2 p">
                            <h1 id="title">Period</h1>
                            <h1 id="time">11:00 PM</h1>
                        </div>
                        <div class="period3 p">
                            <h1 id="title">Period</h1>
                            <h1 id="time">11:00 PM</h1>
                        </div>
                        <div class="period4 p">
                            <h1 id="title">Period</h1>
                            <h1 id="time">11:00 PM</h1>
                        </div>
                        <div class="period5 p">
                            <h1 id="title">Period</h1>
                            <h1 id="time">11:00 PM</h1>
                        </div>
                      </div>

                    </div>

                  </div>
                </div>
                <div class="menuright">
                    <div class="wrapgrid">

                    <div class="id">


                    </div>

                    <div class="menupanel">
                        <div class="panell">
                            <div class="menulist">

                                <a div class="questionbank" id="unit" href="https://drive.google.com/drive/folders/1vaWARCJMJb5RalC23QsZpeu9AXzwrszH?usp=sharing">
                                    <img src="images/icons8_task_500px.png" id="imagea">
                                    <h1 id="menutext">Question Bank</h1>
                                </a>

                                <a div class="calender" id="unit" href="calender.html">
                                    <img src="images/icons8_planner_128px.png" id="imagea">
                                    <h1 id="menutext">Calender</h1>

                                </a>

                                <a div class="assignment" id="unit" href="https://edu.google.com/intl/en_in/assignments/">
                                    <img src="images/icons8_report_card_100px.png" id="imagea">
                                    <h1 id="menutext">Assignment</h1>
                                </a>

                                <a div class="report" id="unit" href="">
                                <img src="images/icons8_graph_60px.png" id="imagea">
                                    <h1 id="menutext">Report</h1>
                                </a>

                                <a div class="studentcommunity" id="unit" href="">
                                <img src="images/icons8_student_male_500px.png" id="imagea">
                                    <h1 id="menutext">Student Community</h1>
                                </a>

                                <a div class="repository" id="unit" href="drive.google.com">
                                <img src="images/icons8_opened_folder_96px.png" id="imagea">
                                    <h1 id="menutext">Repository</h1>
                                </a>

                                <a div class="dfiles" id="unit" href="https://raindrop.io/collection/13364411">
                                <img src="images/icons8_sketchfab_100px.png" id="imagea">
                                    <h1 id="menutext">3D Models</h1>
                                </a>

                                <a div class="fees" id="unit" href="https://dpsdurgapur.net">
                                <img src="images/icons8_money_100px_1.png" id="imagea">
                                    <h1 id="menutext">Fees</h1>
                                </a>

                                <a div class="videos" id="unit" href="https://www.youtube.com/playlist?list=PLqqAKLz1TIXByiiCIL0xDXOTRKoK8-JXf">
                                <img src="images/icons8_play_button_96px_1.png" id="imagea">
                                    <h1 id="menutext">Videos</h1>
                                </a>

                                <a div class="contact" id="unit" href="https://docs.google.com/presentation/d/e/2PACX-1vTJ-dfLRNWdFT9cobGoQ0LejRNXiz4ctUmZ1pFjayVWmW-30f3I3O_REKBSFKEskFLZthThH_6BJWRt/pub?start=false&loop=false&delayms=60000">
                                <img src="images/icons8_contacts_64px.png" id="imagea">
                                    <h1 id="menutext">Contact</h1>
                                </a>

                                <a div class="links" id="unit" href="https://raindrop.io/collection/14514085">
                                <img src="images/icons8_link_64px.png" id="imagea">
                                    <h1 id="menutext">Links</h1>
                                </a>





                            </div>

                              <div class="name">
                               <a h1 id="name" href="MadeByMandraSaptak.html" target="_blank">Made By MandraSaptak Mandal,<br>-Class 11/D</h1></a>
                              </div>

                              
                        </div>



                    </div>
                    </div>
                    </div>

                    



            </div>



        </body>

        <a div id="dark" href="https://t.me/msmprototype">
            <img src="https://img.icons8.com/fluent/144/000000/telegram-app.png">
        </a>

</html>
