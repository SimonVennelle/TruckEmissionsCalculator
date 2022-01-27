<!DOCTYPE html>
<!-- Last Published: Mon May 7 2021 06:14:35 GMT+0000 (Coordinated Universal Time) -->
<html data-wf-domain="www.truck-industry-council.org" lang="en"  data-wf-page="5cbe6133ffa34d078ac69d02" data-wf-site="5cbe46bce3c2320cf45d2b62">
<head>
    <meta charset="utf-8"/>
    <title>Emissions Calculator TIC | Truck Industry Council | Safer | Greener | Essential</title>
    <meta content="The Truck Industry Council (TIC) was formed in 2001 as an independent organisation to represent the united views of truck manufacturers, importers, diesel engine companies and major component suppliers to Governments, political parties, other industry groups and the general public." name="description"/>
    <script src="calculations.js" type="text/javascript">></script>

    <meta content="Emissions Calculator  TIC | Truck Industry Council | Safer | Greener | Essential" property="og:title"/>
    <meta content="The Truck Industry Council (TIC) was formed in 2001 as an independent organisation to represent the united views of truck manufacturers, importers, diesel engine companies and major component suppliers to Governments, political parties, other industry groups and the general public." property="og:description"/>
    <meta content="Emissions Calculator  TIC | Truck Industry Council | Safer | Greener | Essential" property="twitter:title"/>
    <meta content="The Truck Industry Council (TIC) was formed in 2001 as an independent organisation to represent the united views of truck manufacturers, importers, diesel engine companies and major component suppliers to Governments, political parties, other industry groups and the general public." property="twitter:description"/>
    <meta property="og:type" content="website"/>
    <meta content="summary_large_image" name="twitter:card"/>
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <!-- <link href="https://assets.website-files.com/5cbe46bce3c2320cf45d2b62/css/truck-industry-council-website.cbd45c231.min.css" rel="stylesheet" type="text/css"/> -->
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">
        WebFont.load({
            google: {
                families: ["Oswald:200,300,400,500,600,700", "Varela:400"]
            }
        });
    </script>
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]-->
        <?php

    //set variables to connect to database
        $dbservername = "bpqd5gszvudvfzgwfo3a-mysql.services.clever-cloud.com";
        $dbusername = "utmc7sxkqknippwu";
        $dbpassword = "u8ArQL1UO4mQSnPDVUsx";
        $dbname = "bpqd5gszvudvfzgwfo3a";  

    //Create connection to database using mysqli
        $conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
        ?>
        <script type="text/javascript">  
            !function(o, c) {
                var n = c.documentElement,
                t = " w-mod-";
                n.className += t + "js",
                ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
            }(window, document);
        </script>
        <link href="https://assets.website-files.com/5cbe46bce3c2320cf45d2b62/5cf5b75c1931d96efce4d019_TIC-stacked-logo-favicon-Truck-industry-council.png" rel="shortcut icon" type="image/x-icon"/>
        <link href="https://assets.website-files.com/5cbe46bce3c2320cf45d2b62/5cf5b7d05b65b6e903995223_TIC-stacked-logo-webclip-Truck-industry-council.png" rel="apple-touch-icon"/>
        <!-- Memberstack -->
        <script src="https://api.memberstack.io/static/memberstack.js" data-memberstack-id="a1931af7eca4ea2613821b9b6cc3cab2"></script>
    </head>

    <!-------------------------------------------- Navigation ---------------------------------------------->
    <!-----------------------------------NAVIGATION BAR CODE IS TAKEN FROM TIC WEBSITE---------------------->

<!--     <body onload="hide1(), hidediv(),hide2(), hideSwitch(), hidePreselectedResult(), hideCompare()">
 -->            <body onload="">

        <div data-collapse="medium" data-animation="default" data-duration="400" data-easing="ease-in" data-easing2="ease-out" data-doc-height="1" role="banner" class="navbar w-nav">
            <div class="div-block" id="top">
                <a href="https://www.truck-industry-council.org" class="brand w-nav-brand">
                    <img src="https://assets.website-files.com/5cbe46bce3c2320cf45d2b62/5cf5aef01931d9ae1de4a793_Truck-Industry-Council-Logo-REV_Bigger%20Font.svg" width="205" alt=""  class="image"/>
                </a>
                <nav role="navigation" class="nav-menu w-nav-menu">
                    <a href="https://www.truck-industry-council.org" class="nav-link w-nav-link">HOME</a>
                    <div data-delay="0" class="dropdown w-dropdown">
                        <div class="dropdown-toggle-2 w-dropdown-toggle">
                            <div class="text-block-2">
                                ABOUT
                                <br/>
                                TIC
                            </div>
                            <div class="icon-13 w-icon-dropdown-toggle"></div>
                        </div>
                        <nav class="dropdown-list w-dropdown-list">
                            <a href="https://www.truck-industry-council.org/about-tic" aria-current="page" class="dropdown-link w-dropdown-link w--current">ABOUT TIC</a>
                            <a href="https://www.truck-industry-council.org/tic-council-members" class="dropdown-link-2 w-dropdown-link">TIC COUNCIL MEMBERS</a>
                            <a href="https://www.truck-industry-council.org/member-companies" class="dropdown-link-3 w-dropdown-link">MEMBERS COMPANIES</a>
                            <a href="https://www.truck-industry-council.org/achievements" class="dropdown-link-4 w-dropdown-link">ACHIEVEMENTS</a>
                            <a href="https://www.truck-industry-council.org/links" class="dropdown-link-5 w-dropdown-link">LINKS</a>

                        </nav>
                    </div>

                    <a href="" class="nav-link-3 w-nav-link">EMISSIONS CALCULATOR</a>

<!--                 Error fixed there was a / at the start of the link    <a href="/https://www.truck-industry-council.org/todays-trucks" class="nav-link-3 w-nav-link">TODAY&#x27;S TRUCKS</a>
 -->
                    <a href="https://www.truck-industry-council.org/todays-trucks" class="nav-link-3 w-nav-link">TODAY&#x27;S TRUCKS</a>
                    <a href="https://www.truck-industry-council.org/service-and-repairs-truck-industry-council-safer-greener-essential" class="nav-link-3-copy _9 w-nav-link">SERVICE &amp; REPAIR</a>
                    <a href="https://www.truck-industry-council.org/downloads" class="nav-link-5 w-nav-link">DOWNLOADS</a>
                    <a href="https://www.truck-industry-council.org/gallery" class="nav-link-5 w-nav-link">GALLERY</a>
                    <a href="https://www.truck-industry-council.org/news-articles" class="nav-link-6 w-nav-link">NEWS &amp; ARTICLES</a>
                    <a href="https://www.truck-industry-council.org/contact-us" class="nav-link-7 w-nav-link">CONTACT US</a>
                    <a href="https://www.truck-industry-council.org/login" class="nav-link-8 w-nav-link">MEMBERS AREA</a>
                </nav>
                <div class="menu-button w-nav-button">
                    <div class="icon w-icon-nav-menu"></div>
                </div>
            </div>
        </div>

        <!-------------------------------------------- Slide Show ---------------------------------------------->


        <div class="home-page-slider">
            <div data-delay="3000" data-animation="cross" data-autoplay="1" data-easing="ease-in" data-duration="500" data-infinite="1" class="home-slider w-slider">
                <div class="mask w-slider-mask">
                    <div class="about-slider w-slide">
                        <div class="welcome-to-tic-div-block">
                            <h1 class="heading">WELCOME TO TRUCK INDUSTRY COUNCIL&#x27;S</h1>    <!------- Code for first picture1 of slideshow ----->
                            <h1 class="heading-2">
                                TRUCK EMISSIONS CALCULATOR
                                <br/>
                                SAFER | GREENER | ESSENTIAL
                            </h1>
                            <a href="#Learn-more" class="button w-button">Learn More</a>
                        </div>
                    </div>
                    <div class="about-slider-2 w-slide">
                        <div class="welcome-to-tic-div-block">
                            <h1 class="heading">WELCOME TO TRUCK INDUSTRY COUNCIL&#x27;S</h1> <!------- Code for picture2 of slideshow ----->
                            <h1 class="heading-2">
                                EMISSIONS CALCULATOR
                                <br/>
                                SAFER | GREENER | ESSENTIAL
                            </h1>
                            <a href="#Learn-more" class="button w-button">Learn More</a>
                        </div>
                    </div>
                    <div class="about-slider-4 w-slide">
                        <div class="welcome-to-tic-div-block">
                            <h1 class="heading">WELCOME TO TRUCK INDUSTRY COUNCIL&#x27;S</h1> <!------- Code for picture3 of slideshow ----->
                            <h1 class="heading-2">
                                EMISSIONS CALCULATOR
                                <br/>
                                SAFER | GREENER | ESSENTIAL
                            </h1>
                            <a href="#Learn-more" class="button w-button">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="w-slider-arrow-left">
                    <div class="icon-17 w-icon-slider-left"></div>
                </div>
                <div class="w-slider-arrow-right">
                    <div class="icon-16 w-icon-slider-right"></div>
                </div>
                <div class="w-slider-nav w-round"></div>
            </div>
        </div>

        <!-- ------------------------------------------ Calculator ---------------------------------------------- -->

        <section id="Calculator-Section" class="calculator-section">

            <div class="tic-calculator-section">
                <div id="preselected" style="display: inline-flex;">

                  <div class="caculator-welcome-header">

                     <label style="display: none;" id="switch" class="switch">

                     <input type="checkbox" id="togBtn" onclick="hide1()">
                     <div class="slider round">
                      <!--ADDED HTML -->
                      <span class="on">Custom</span>
                      <span class="off">Custom</span>
                      <!--END-->
                  </div>
              </label>

              <form style="text-align: center; display: none;" id="frm1">    <!------- Form to slect and enter relevant information ----->
                  <h1 class="heading-3" style="text-align:center;" >Emissions Calculator</h1>
                  <label >All Fields Are Required</label>
                  <br><br>

                  <label for="make1">Make <button type="button" class="help" onclick="alert('Select the Make of your truck.') ">?</button></label>  <!------- Information about make ----->
                  <select id="make1" name="make1" required>     <!------- Drop-down menu for make ----->
                    <!------- Drop-down menu information for make of truckcs has been fecthed from database ----->
					<?php

                    echo '
                    <option>Select</option>';    <!------- Information about make ----->

                    $sqli = "SELECT DISTINCT make FROM TRUCK";
                    $result = mysqli_query($conn, $sqli);
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<option>'.$row['make'].'</option>';
                    }

                    echo '';
                    ?>
                </select><br>

                <label for="model1">Model <button type="button" class="help" onclick="alert('Select the Model of your truck.') ">?</button></label> <!------- Information about model ----->
                <select id="model1" name="model1" required> <!------- Drop-down menu for model ----->
				    <!------- Drop-down menu information for model has been fecthed from database ----->
                    <?php

                    echo '
                    <option>Select</option>';

                    $sqli = "SELECT DISTINCT name FROM TRUCK";
                    $result = mysqli_query($conn, $sqli);
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<option>'.$row['name'].'</option>';
                    }

                    echo '';
                    ?>
                </select><br>
                <label for="state1" class="first-column ">State or Territory <button type="button" class="help" onclick="alert('Select the State or Territory will me in for majority of route.') ">?</button></label> <!------- Information about state or territory ----->
                <select id="state1" onchange="maps1()" required>  <!------- Drop-down menu for state or territory ----->
				    <!------- Drop-down menu information for state or territory has been fecthed from database ----->
                    <?php

                    echo '
                    <option>Select</option>';

                    $sqli = "SELECT state FROM STATE ORDER BY state";
                    $result = mysqli_query($conn, $sqli);
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<option>'.$row['state'].'</option>';
                    }
                    echo '';
                    ?>


                </select><br>

                <label for="distance">Distance (km)
                    <button type="button" class="help" onclick="alert('Distance between payload pickup and dropoff location in kilometres.') ">?</button></label> <!------- Information about distance ----->

                    <a id="gmaps1" target="_blank"  href="https://www.google.com.au/maps/dir/@-28.961433,123.3575099,4.81z">Calculate Distance<a id="gmapAus1" href="https://www.google.com.au/maps/dir/@-28.961433,123.3575099,4.81z" target="_blank" class="mission-link w-inline-block">   <!------- Link for google maps to calculate distance ----->
                        <img src="images/google-maps-new.png" width="25" alt="google maps" class="mission-icon"/></a>
                    </a>
                    <br>     
                    <input type="number" id="distance1" min="1" max="99999" name="distance1" required>   <!------- Distance textfield and must be in between 1 to 99999 ----->

                    <br>

                    <label for="cargo">Total Cargo (tonne) <button type="button" class="help" onclick="alert('Total cargo to be delivered in tonne. \n1 tonne = 1000kg') ">?</button></label> <!------- Information about total cargo ----->
                    <input type="number" id="cargo1" name="cargo1" min="0.00" max="9999"step="0.5" required><br>  <!------- Total Cargo textfield and must be in between 0.0 to 99999 and can be increased or decreased by 0.5----->

                    <label for="fuelPrice">Fuel Price (cents per unit)<p id="unitFuel" style="display:inline"></p><button type="button" class="help" onclick="alert('The average price of the fuel in cents per unit.') ">?</button></label><br>  <!------- Information about fuel price ----->
                    <input type="number" id="fuelPrice" min="1"step="1" max="9999" name="fuelPrice" required><br> <br>  <!------- Fuel price textfield and must be in between 1 to 99999 ----->

 

    <table style="width:100%" style="left: 50%; right: 50%; table align: center"; >
      <tr>
        <th> 
            <input type="button" name="clickbtn" class="current-button w-button" value="Calculate" onclick="validate1()">  <!------- Button to calculate the emissions ----->
        </th>
        <th style="width: 10px;"> 

        <th><input type="button" class="current-button w-button" onclick="reset()" value="Clear"> <!------- Button to claer all the values from textfields and drop-down menus ----->
        </th> 
    </tr>
    </table>



</div  id="preselected">





<!------- JavaScript for all the functions used in form above----->
<script type="text/javascript">  
    function hide1() {    //not being used for this assignment purposes but can be used in the future
      var x = document.getElementById("frm1");
      if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
    hide2();
}
function hidePreselected() {   //not being used for this assignment purposes but can be used in the future
  var x = document.getElementById("frm1");
  if (x.style.display === "none") {
    x.style.display = "block";
} else {
    x.style.display = "none";
}
}

function hidePreselectedResult() {   //not being used for this assignment purposes but can be used in the future

  var x = document.getElementById("PreselectedResult");
  if (x.style.display === "none") {
    x.style.display = "block";
} else {
    x.style.display = "none";
}
}


function calculate1(){   // function to calculate the emission calculations
  
    var state = (document.getElementById("state1")).value;   //getting value from textfiels 
    var cargo = parseFloat(document.getElementById("cargo1").value);
    var fuelPrice = parseFloat(document.getElementById("fuelPrice").value);
    var distance = parseFloat(document.getElementById("distance1").value);


    document.getElementById("fuelCost").innerHTML = "<b>State: </b>" + state + "<b></p>Cargo: </b>" + cargo + "t<b></p>\nFuel Price: </b>" + fuelPrice + "<b>\n</p>Distance: </b>" +distance + "km.";

}


               function lastCalculation1(){   //not being used for this assignment purposes but can be used in the future
                    var lastFuelCalc = document.getElementById('PreselectedResults').innerHTML;
                    document.getElementById("lastFuelCost1").innerHTML = "<div style=\"text-align:center;\"><h1 class=\"heading-3\" >Previous Result</h1>" + lastFuelCalc + "</div>";
                    document.getElementById("lastFuelCost2").innerHTML = "<div style=\"text-align:center;\"><h1 class=\"heading-3\" >Previous Result</h1>" + lastFuelCalc + "</div>";
                }

                function validate1()     //to convert the string values from textfields in int, float
                {
                    var make = (document.getElementById("make1")).value;
                    var model = (document.getElementById("model1")).value;
                    var state = (document.getElementById("state1")).value;
                    var distance = parseFloat(document.getElementById("distance1").value);
                    var cargo = parseFloat(document.getElementById("cargo1").value);
                    var fuelPrice = parseFloat(document.getElementById("fuelPrice").value);


                    if (make == "Select")   //alert for differnet required fields and also for the limits for the textfields
                    {
                        alert("Please select a make.");

                    }
                    else
                        if (model == "Select")
                        {
                            alert("Please select a model.");

                        }
                        else
                           if (state == "Select")
                           {
                            alert("Please select a State or Territory.");
                        }
                        else
                           if (distance < 1 || distance > 99999 || isNaN(distance))
                           {
                            alert("Please enter a vaild distance. Eg 250");
                        }
                        else
                           if (cargo <= 0 || cargo > 9999 || isNaN(cargo))
                           {
                            alert("Please enter a vaild cargo");
                        }
                        else
                           if (fuelPrice <= 0 || fuelPrice > 999 || isNaN(fuelPrice))
                           {
                            alert("Please enter a vaild is fuel price");
                        }

                        else

                            {hidePreselected(),
                             hidePreselectedResult(),
                             hideSwitch(),
                             calculate1()
                         }
                     }

                 </script>

             </form>
 
         
             <script>  //for clear function to clear all the values entered into the fields 
                function clear() {
                  document.getElementById("frm1").reset();
              }
          </script>

        <!------------------ CALCULATIONS RESULT  -------------------------->
          <div style="display: none;" id="PreselectedResult">
            <h1 class="heading-3" style="text-align:center;" >Emissions Calculator</h1>
            <h1 class="heading-3" style="text-align:center;" >Result</h1>

            <p id="PreselectedResults" style="text-align: center;"></p>   <!------Results show on this side----->

            <label for="emis" style="text-align:center;">Emissions</label>

            <p id="lastFuelCost1" style="text-align:center;">No previous result recorded.</p>   <!------If no compariosn has been made----->



            <form style="text-align: center;">
              <input type="button" name="clickbtn" class="current-button w-button" style="width: 140px; "  value="< Back To Calculator" onclick="hidePreselected(), hidePreselectedResult(), hideSwitch(), lastCalculation1()">  <!------This button will direct to the main calculation page----->

          </form>
      </div>





      <form style="text-align: center;" id="frm2">
        <h1 class="heading-3" style="text-align:center;" >Emissions Calculator</h1>
        <label >All Fields Are Required</label>


<!--      Room for switch   <br><br>
 -->        <label for="fuelType2">Fuel Type <button type="button" class="help" onclick="alert('Select the fuel that your truck runs on.') ">?</button></label>
        <select id="fuelType2" name="fuelType2" required onchange="unit2(), avragePrice2()">  <!------Drop down for fuel type----->
		    <!------Getting value from database----->
            <?php

            echo '
            <option selected hidden value="Select">Select</option>';

            $sqli = "SELECT fuelType FROM FUEL ORDER BY fuelType ASC";
            $result = mysqli_query($conn, $sqli);
            while ($row = mysqli_fetch_array($result)) {
                echo '<option>'.$row['fuelType'].'</option>';
            }

            echo '';
            ?>
        </select>
        <div style="display: none;" id="euro">
            <label for="euro2">Engine Type <button type="button" class="help" onclick="alert('Select the truck engine type. If unsure select \'Euro iii\'.') ">?</button></label>
        <select id="euro2" name="euro2" onchange="">
            
            <option selected hidden value="Select">Select</option>';
            <option>Euro iv or higher</option>
            <option>Euro iii</option>
            <option>Euro i</option>

        </select>
        </div>
		<!------If diesel fuel type is selected then engine type drop down menu will appear----->
        <label for="state2" class="first-column ">State or Territory <button type="button" class="help" onclick="alert('Select the State or Territory you will be in for majority of the route.') ">?</button></label>
        <select id="state2" required onchange="maps2(), avragePrice2()">
		    <!------Drop down menu with euro type appear on the screen----->
            <?php

            echo '
            <option selected hidden value="Select">Select</option>';

            $sqli = "SELECT state FROM STATE ORDER BY state ASC";
            $result = mysqli_query($conn, $sqli);
            while ($row = mysqli_fetch_array($result)) {
                echo '<option>'.$row['state'].'</option>';
            }

            echo '';
            ?>
        </select>

        <label for="distance">Distance (km)  <!------- Information about distance ----->
            <button type="button" class="help" onclick="alert('Distance between payload pickup and drop-off location in kilometres.\nEnter half of the total distance if one-way calculations are desired.\nEnter value between 1 and 9999') ">?</button></label>

            <a id="gmaps" target="_blank"  href="https://www.google.com.au/maps/dir/@-28.961433,123.3575099,4.81z">Calculate Distance<a id="gmapAus" href="https://www.google.com.au/maps/dir/@-28.961433,123.3575099,4.81z" target="_blank" class="mission-link w-inline-block">
                <img src="images/google-maps-new.png" width="25" alt="google maps" class="mission-icon"/></a>
            </a>
            <br>     
            <input type="number" id="distance2" width="80px" min="1" max="9999" name="distance2">
            <br>
            <label for="cargo">Total Cargo (tonne) <button type="button" class="help" onclick="alert('Total cargo weight to delivered in tonne.\n1 tonne = 1000kg.\nEnter value between 0 and 9999') ">?</button></label>  <!------- Information about total cargo ----->
            <input type="number" id="cargo2" name="cargo2" width="80px" min="0.00" max="9999" step="0.5"  required><br>
            <label for="payload">Max Payload (tonne) <button type="button" class="help" onclick="alert('Maximum weight the truck can carry per load in tonne.\n1 tonne = 1000kg\nEnter value between 0 and 99')">?</button></label>  <!------- Information about total payload ----->
            <input type="number" id="payload2" width="80px" min="0.5" max="99"name="payload" step="0.5" required><br>
            <label for="fuelPrice">Fuel Price <p id="unit2" style="display:inline"></p><button type="button" class="help" onclick="alert('The average price of the fuel in cents per unit.\nEnter value between 0 and 999\nEg. If the fuel price $2 enter \'200\'') ">?</button></label>  <!------- Information about fuel price ----->
            <a id="priceImg"></a><br>
            <input type="number" id="fuelPrice2" width="80px" min="1" max="999"step="1" name="fuelPrice2" required>
            <br>    
            <label for="fuel1002">Fuel Consumption <p id="unit3" style="display:inline"></p><button type="button" class="help" onclick="alert('The average consumption of the fuel in 100KMs.\nEnter value between 0 and 999') ">?</button></label>  <!------- Information about fuel consumption ----->
            <input type="number" id="fuel1002" width="80px" min="1" max="999" step="0.1" name="fuel100" required><br><br>  



            <div style="display: none;" id="emissionsFactors" >
<!--         State emission factor comes here 
-->        <p id="emissionFactor"></p> 
<?php


$sqli = "SELECT `electricityEmissions`  FROM `STATE` WHERE `state` LIKE 'Australian Capital Territory' ORDER BY `electricityEmissions` ASC";
$result = mysqli_query($conn, $sqli);
while ($row = mysqli_fetch_array($result)) {
    echo '<p id=eACT>'.$row['electricityEmissions'].'</p>';
}
?>

<?php


$sqli = "SELECT `electricityEmissions`  FROM `STATE` WHERE `state` LIKE 'New South Wales' ORDER BY `electricityEmissions` ASC";
$result = mysqli_query($conn, $sqli);
while ($row = mysqli_fetch_array($result)) {
    echo '<p id=eNSW>'.$row['electricityEmissions'].'</p>';
}
?>
<?php


$sqli = "SELECT `electricityEmissions`  FROM `STATE` WHERE `state` LIKE 'Northern Territory' ORDER BY `electricityEmissions` ASC";
$result = mysqli_query($conn, $sqli);
while ($row = mysqli_fetch_array($result)) {
    echo '<p id=eNT>'.$row['electricityEmissions'].'</p>';
}
?>
<?php


$sqli = "SELECT `electricityEmissions`  FROM `STATE` WHERE `state` LIKE 'Queensland' ORDER BY `electricityEmissions` ASC";
$result = mysqli_query($conn, $sqli);
while ($row = mysqli_fetch_array($result)) {
    echo '<p id=eQLD>'.$row['electricityEmissions'].'</p>';
}
?>
<?php


$sqli = "SELECT `electricityEmissions`  FROM `STATE` WHERE `state` LIKE 'South Australia' ORDER BY `electricityEmissions` ASC";
$result = mysqli_query($conn, $sqli);
while ($row = mysqli_fetch_array($result)) {
    echo '<p id=eSA>'.$row['electricityEmissions'].'</p>';
}
?>
<?php


$sqli = "SELECT `electricityEmissions`  FROM `STATE` WHERE `state` LIKE 'Tasmania' ORDER BY `electricityEmissions` ASC";
$result = mysqli_query($conn, $sqli);
while ($row = mysqli_fetch_array($result)) {
    echo '<p id=eTAS>'.$row['electricityEmissions'].'</p>';
}
?>

<?php


$sqli = "SELECT `electricityEmissions`  FROM `STATE` WHERE `state` LIKE 'Victoria' ORDER BY `electricityEmissions` ASC";
$result = mysqli_query($conn, $sqli);
while ($row = mysqli_fetch_array($result)) {
    echo '<p id=eVIC>'.$row['electricityEmissions'].'</p>';
}
?>
<?php


$sqli = "SELECT `electricityEmissions`  FROM `STATE` WHERE `state` LIKE 'Western Australia' ORDER BY `electricityEmissions` ASC";
$result = mysqli_query($conn, $sqli);
while ($row = mysqli_fetch_array($result)) {
    echo '<p id=eWA>'.$row['electricityEmissions'].'</p>';
}
?> 
</div>

<table style="width:100%" style="left: 50%; right: 50%; table align: center"; >
  <tr>
    <th style="width: 162px;"><input type="button" class="clear-button" onclick="reset()" value="Clear">   <!------- Button to clear all input value from textfields ----->
        </th>
        <th style="width: 162px;"><input type="button" name="clickbtn" class="current-button w-button" value="Calculate" onclick="validate2()">  <!------- Button to calculate the emissions ----->
        </th> 
    </tr>
</table>

</form>

<form  style="text-align: center; display: none;"  id="result2">
    <h1 class="heading-3" style="text-align:center;" >Emissions Calculator</h1>
    <h1 class="heading-3" style="text-align:center;" >Result</h1>


    <p id="trips2"></p>
    <p id="fuelRequired2"></p>  
    <p id="fuelCost2"></p>  

    <label for="emis">Emissions</label>

    <p id="emissions2"></p>  

    <p id="lastTrips2"></p>
    <p id="lastFuelRequired2"></p>
    <p id="lastFuelCost2">No previous result recorded.</p>  



    <form>
        <input type="button" name="clickbtn" class="current-button w-button" style="width: 140px; "  value="< Back To Calculator" onclick="hidediv(), hide2(),hideSwitch(), lastCalculation2()">
<!--         <table style="width:100%" style="left: 50%; right: 50%; table align: center"; >
  <tr>
    <th>      <input type="button" name="clickbtn" class="current-button w-button" style="width: 140px; "  value="< Back To Calculator" onclick="hidediv(), hide2(),hideSwitch(), lastCalculation2()">
        </th>
        <th><input type="button" name="clickbtn" class="current-button w-button" style="width: 140px; "  value="Compare" onclick="hideCompare()"></th> 
    </tr>
</table> -->


<!------- JavaScript for all the functions used in form above----->
      <script type="text/javascript">
        function hidediv() {   //to hide the value of engine type(euro) when fuel type diesel's not selected
          var x = document.getElementById("result2");
          if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }

    function hide2() {   //to hide 
      var x = document.getElementById("frm2");
      if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
    function hideCompare() {   // to hide the comparison
      var x = document.getElementById("compare2");
      if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
function hideSwitch() {   // to hide the switch button
  var x = document.getElementById("switch");
//   if (x.style.display === "none") {
//     x.style.display = "block";
// } else {
    x.style.display = "none";
// }
}

function validate2() //to convert the string values from textfields in int, float
{
    var fuelType = (document.getElementById("fuelType2")).value;
    var state = (document.getElementById("state2")).value;
    var euro = (document.getElementById("euro2")).value;

    var distance = parseFloat(document.getElementById("distance2").value);
    var cargo = parseFloat(document.getElementById("cargo2").value);
    var payload = parseFloat(document.getElementById("payload2").value);
    var fuelPrice = parseFloat(document.getElementById("fuelPrice2").value);
    var fuel100 = parseFloat(document.getElementById("fuel1002").value);


//alert for differnet required fields and also for the limits for the textfields
    if (fuelType == "Select")
    {
        alert("Please select a fuel type.");

    }
    else
        if (fuelType == "Diesel" && euro=="Select" )
    {
        alert("Please select a engine type.");

    }
    else
        if (state == "Select")
        {
            alert("Please select a State or Territory.");

        }
        else
           if (state == "Select")
           {
            alert("Please select a State or Territory.");
        }
        else
           if (distance < 1 || distance > 9999 || isNaN(distance))
           {
            alert("Please enter a vaild distance between 1 km to 9999 km.");
        }
        else
           if (cargo <= 0 || cargo > 9999 || isNaN(cargo))
           {
            alert("Please enter a vaild cargo weight. Max is 9,999 tonne.");
        }
        else
           if (payload <= 0 || payload > 99 || isNaN(payload))
           {
            alert("Please enter a vaild payload weight. Max is 99 tonne.");
        }
        else
           if (fuelPrice <= 0 || fuelPrice > 999 || isNaN(fuelPrice))
           {
            alert("Please enter a vaild  fuel price. Max is 999 cents.");
        }
        else
           if (fuel100 <= 0 || fuel100 > 999 || isNaN(fuel100))
           {
            alert("Please enter a vaild fuel consumption. Max is '999' units/100km.");
        }

        else

            {hidediv(),calculate2(), hide2(), hideSwitch()
            }
        }


        function lastCalculation2(){ //to convert the string values from textfields in int, float

            var lastFuelCalc = document.getElementById('fuelCost2').innerHTML;
            var lastTrips = document.getElementById('trips2').innerHTML;
            var lastFuelRequired = document.getElementById('fuelRequired2').innerHTML;
            var lastEmissions = document.getElementById('emissions2').innerHTML;



            document.getElementById("lastFuelCost1").innerHTML = "<h1 class=\"heading-3\" style=\"text-align:center;\" >Previous Result</h1>" + lastTrips + "<p></p>" + lastFuelRequired + "<p></p>" +  lastFuelCalc + "<p></p> <label >Emissions</label>" + lastEmissions;
            document.getElementById("lastFuelCost2").innerHTML = "<h1 class=\"heading-3\" style=\"text-align:center;\" >Previous Result</h1>" + lastTrips + "<p></p>" + lastFuelRequired + "<p></p>" +  lastFuelCalc + "<p></p> <label >Emissions</label>" + lastEmissions;


        }


        function maps1(){   //maps for different state

         var x = document.getElementById("gmapAus1").style.display = "none";
         var state;

         var state = (document.getElementById("state1")).value;
         if(state=="Select"){document.getElementById("gmaps1").innerHTML = "<a href=\"https://www.google.com.au/maps/dir/@-28.961433,123.3575099,4.81z\" target=\"_blank\">Calculate Distance<img src=\"images/google-maps-new.png\" width=\"25px\"></a>"};
         if(state=="Australian Capital Territory"){document.getElementById("gmaps1").innerHTML = "<a href=\"https://www.google.com.au/maps/dir///@-35.4734628,148.732216,10z\" target=\"_blank\">Calculate Distance<img src=\"images/google-maps-new.png\" width=\"25px\"></a>"};
         if(state=="New South Wales"){document.getElementById("gmaps1").innerHTML = "<a href=\"https://www.google.com.au/maps/dir///@-31.2532136,142.4386768,6z\" target=\"_blank\">Calculate Distance<img src=\"images/google-maps-new.png\" width=\"25px\"></a>"};
         if(state=="Northern Territory"){document.getElementById("gmaps1").innerHTML = "<a href=\"https://www.google.com.au/maps/@-18.4292475,129.0051453,6z\" target=\"_blank\">Calculate Distance<img src=\"images/google-maps-new.png\" width=\"25px\"></a>"};
         if(state=="Queensland"){document.getElementById("gmaps1").innerHTML = "<a href=\"https://www.google.com.au/maps/dir/@-20.8811072,138.6443991,5.75z\" target=\"_blank\">Calculate Distance<img src=\"images/google-maps-new.png\" width=\"25px\"></a>"};
         if(state=="South Australia"){document.getElementById("gmaps1").innerHTML = "<a href=\"https://www.google.com.au/maps/dir/@-31.9502852,130.5100284,6z\" target=\"_blank\">Calculate Distance<img src=\"images/google-maps-new.png\" width=\"25px\"></a>"};
         if(state=="Western Australia"){document.getElementById("gmaps1").innerHTML = "<a href=\"https://www.google.com.au/maps/dir///@-27.6728124,113.7560466,5.19z\" target=\"_blank\">Calculate Distance<img src=\"images/google-maps-new.png\" width=\"25px\"></a>"};
         if(state=="Victoria"){document.getElementById("gmaps1").innerHTML = "<a href=\"https://www.google.com.au/maps/dir///@-37.7284446,142.6843662,7.09z\" target=\"_blank\">Calculate Distance<img src=\"images/google-maps-new.png\" width=\"25px\"></a>"};
         if(state=="Tasmania"){document.getElementById("gmaps1").innerHTML = "<a href=\"https://www.google.com.au/maps/dir///@-42.0409006,145.6881264,8z\" target=\"_blank\">Calculate Distance<img src=\"images/google-maps-new.png\" width=\"25px\"></a>"};
     }








     function unit2(){  // to get s.I. unit values of different fuel types
        var fuelType = (document.getElementById("fuelType2")).value;

        var fuelUnit;
        if(fuelType=="Select"){fuelUnit="Unit"};
        if(fuelType=="Hydrogen"){fuelUnit="KG"};
        if(fuelType=="Diesel"){fuelUnit="L"};
        if(fuelType=="Biodiesel"){fuelUnit="L"};
        if(fuelType=="Electricity"){fuelUnit="KW"};

        document.getElementById("unit2").innerHTML = "(cents per " +fuelUnit + ") ";
        document.getElementById("unit3").innerHTML = "("+ fuelUnit+ "/100km) ";


    }
    function avragePrice2(){   //to get the value of fuel type

        var fuelPrice;
        var x = document.getElementById("euro");
        if(fuelType!="Diesel"){
         if (x.style.display === "block") {
          x.style.display = "none";
            }
        }

        var fuelType = (document.getElementById("fuelType2")).value;
        if(fuelType=="Select"){fuelPrice="0",   document.getElementById("priceImg").innerHTML = ""};

        if(fuelType=="Biodiesel"){fuelPrice="69",   document.getElementById("priceImg").innerHTML = "<a href=\"https://fuelprice.io/diesel\" target=\"_blank\">Find Diesel Price <img src=\"images/fuelprice-logo.png\" width=\"25px\"></a>"};

        if(fuelType=="Diesel"){
         if (x.style.display === "none") {
          x.style.display = "block";
            }


            fuelPrice="143",   document.getElementById("priceImg").innerHTML = "<a href=\"https://fuelprice.io/diesel\" target=\"_blank\">Find Diesel Price <img src=\"images/fuelprice-logo.png\" width=\"25px\"></a>"};
        if(fuelType=="Electricity"){

            fuelPrice="<?php

// $sql = "SELECT ROUND(AVG(`electricityPrice`*100),0) FROM `STATE`";
            
            //to get electricity emissions for different fuel types
            $sqli = "SELECT `electricityPrice`  FROM `STATE` WHERE `state` LIKE 'Victoria' ORDER BY `electricityPrice` ASC";
            $result = mysqli_query($conn, $sqli);
            while ($row = mysqli_fetch_array($result)) {
                echo $row['electricityPrice'];
            }
            ?>",   document.getElementById("priceImg").innerHTML = "<a href=\"https://makescents.com.au/electricity-gas/which-australian-state-or-territory-has-the-lowest-electricity-and-gas-cost\" target=\"_blank\">Find Electricity Price <img src=\"images/renewable-energy-icon.png\" width=\"25px\"></a>"
            var state = (document.getElementById("state2")).value;

            if(state=="Australian Capital Territory"){
                fuelPrice="<?php

                $sqli = "SELECT `electricityPrice`  FROM `STATE` WHERE `state` LIKE 'Australian Capital Territory' ORDER BY `electricityPrice` ASC";
                $result = mysqli_query($conn, $sqli);
                while ($row = mysqli_fetch_array($result)) {
                    echo $row['electricityPrice'];
                }
                ?>"
            }
                if(state=="New South Wales"){
                fuelPrice="<?php

                $sqli = "SELECT `electricityPrice`  FROM `STATE` WHERE `state` LIKE 'New South Wales' ORDER BY `electricityPrice` ASC";
                $result = mysqli_query($conn, $sqli);
                while ($row = mysqli_fetch_array($result)) {
                    echo $row['electricityPrice'];
                }
                ?>"
            }
                if(state=="Northern Territory"){
                fuelPrice="<?php

                $sqli = "SELECT `electricityPrice`  FROM `STATE` WHERE `state` LIKE 'Northern Territory' ORDER BY `electricityPrice` ASC";
                $result = mysqli_query($conn, $sqli);
                while ($row = mysqli_fetch_array($result)) {
                    echo $row['electricityPrice'];
                }
                ?>"
            }
                if(state=="Queensland"){
                fuelPrice="<?php

                $sqli = "SELECT `electricityPrice`  FROM `STATE` WHERE `state` LIKE 'Queensland' ORDER BY `electricityPrice` ASC";
                $result = mysqli_query($conn, $sqli);
                while ($row = mysqli_fetch_array($result)) {
                    echo $row['electricityPrice'];
                }
                ?>"
            }
                if(state=="South Australia"){
                fuelPrice="<?php

                $sqli = "SELECT `electricityPrice`  FROM `STATE` WHERE `state` LIKE 'South Australia' ORDER BY `electricityPrice` ASC";
                $result = mysqli_query($conn, $sqli);
                while ($row = mysqli_fetch_array($result)) {
                    echo $row['electricityPrice'];
                }
                ?>"
            }
                if(state=="Tasmania"){
                fuelPrice="<?php

                $sqli = "SELECT `electricityPrice`  FROM `STATE` WHERE `state` LIKE 'Tasmania' ORDER BY `electricityPrice` ASC";
                $result = mysqli_query($conn, $sqli);
                while ($row = mysqli_fetch_array($result)) {
                    echo $row['electricityPrice'];
                }
                ?>"
            }
                if(state=="Victoria"){
                fuelPrice="<?php

                $sqli = "SELECT `electricityPrice`  FROM `STATE` WHERE `state` LIKE 'Victoria' ORDER BY `electricityPrice` ASC";
                $result = mysqli_query($conn, $sqli);
                while ($row = mysqli_fetch_array($result)) {
                    echo $row['electricityPrice'];
                }
                ?>"
            }
            if(state=="Western Australia"){
                fuelPrice="<?php

                $sqli = "SELECT `electricityPrice`  FROM `STATE` WHERE `state` LIKE 'Western Australia' ORDER BY `electricityPrice` ASC";
                $result = mysqli_query($conn, $sqli);
                while ($row = mysqli_fetch_array($result)) {
                    echo $row['electricityPrice'];
                }
                ?>"
            }


        };

        if(fuelType=="Hydrogen"){fuelPrice="356",   document.getElementById("priceImg").innerHTML = "<a href=\"https://www.abc.net.au/news/science/2021-01-23/green-hydrogen-renewable-energy-climate-emissions-explainer/13081872#Expensive,%20but%20getting%20cheaper\" target=\"_blank\">Find Hydrogen Price <img src=\"images/HydrogenIcon_Storage.png\" width=\"35px\"></a>"};
        document.getElementById("fuelPrice2").value = fuelPrice;
    }

    function maps2(){ //to get the maps for different states

     var x = document.getElementById("gmapAus").style.display = "none";
     var state;

     var state = (document.getElementById("state2")).value;
     if(state=="Select"){document.getElementById("gmaps").innerHTML = "<a href=\"https://www.google.com.au/maps/dir/@-28.961433,123.3575099,4.81z\" target=\"_blank\">Calculate Distance<img src=\"images/google-maps-new.png\" width=\"25px\"></a>"};
     if(state=="Australian Capital Territory"){document.getElementById("gmaps").innerHTML = "<a href=\"https://www.google.com.au/maps/dir///@-35.4734628,148.732216,10z\" target=\"_blank\">Calculate Distance<img src=\"images/google-maps-new.png\" width=\"25px\"></a>"

        var emissionFactor= parseFloat((document.getElementById("eACT").innerHTML));

    document.getElementById("emissionFactor").innerHTML = emissionFactor;};

    if(state=="New South Wales"){document.getElementById("gmaps").innerHTML = "<a href=\"https://www.google.com.au/maps/dir///@-31.2532136,142.4386768,6z\" target=\"_blank\">Calculate Distance<img src=\"images/google-maps-new.png\" width=\"25px\"></a>"
        var emissionFactor= parseFloat((document.getElementById("eNSW").innerHTML));
    document.getElementById("emissionFactor").innerHTML = emissionFactor;};
    if(state=="Northern Territory"){document.getElementById("gmaps").innerHTML = "<a href=\"https://www.google.com.au/maps/@-18.4292475,129.0051453,6z\" target=\"_blank\">Calculate Distance<img src=\"images/google-maps-new.png\" width=\"25px\"></a>"
        var emissionFactor= parseFloat((document.getElementById("eNT").innerHTML));
    document.getElementById("emissionFactor").innerHTML = emissionFactor;};
    if(state=="Queensland"){document.getElementById("gmaps").innerHTML = "<a href=\"https://www.google.com.au/maps/dir/@-20.8811072,138.6443991,5.75z\" target=\"_blank\">Calculate Distance<img src=\"images/google-maps-new.png\" width=\"25px\"></a>"
        var emissionFactor= parseFloat((document.getElementById("eQLD").innerHTML));
    document.getElementById("emissionFactor").innerHTML = emissionFactor;};
    if(state=="South Australia"){document.getElementById("gmaps").innerHTML = "<a href=\"https://www.google.com.au/maps/dir/@-31.9502852,130.5100284,6z\" target=\"_blank\">Calculate Distance<img src=\"images/google-maps-new.png\" width=\"25px\"></a>"    
        var emissionFactor= parseFloat((document.getElementById("eSA").innerHTML));
    document.getElementById("emissionFactor").innerHTML = emissionFactor;};
    if(state=="Western Australia"){document.getElementById("gmaps").innerHTML = "<a href=\"https://www.google.com.au/maps/dir///@-27.6728124,113.7560466,5.19z\" target=\"_blank\">Calculate Distance<img src=\"images/google-maps-new.png\" width=\"25px\"></a>"    
        var emissionFactor= parseFloat((document.getElementById("eWA").innerHTML));
    document.getElementById("emissionFactor").innerHTML = emissionFactor;};
    if(state=="Victoria"){document.getElementById("gmaps").innerHTML = "<a href=\"https://www.google.com.au/maps/dir///@-37.7284446,142.6843662,7.09z\" target=\"_blank\">Calculate Distance<img src=\"images/google-maps-new.png\" width=\"25px\"></a>"    
        var emissionFactor= parseFloat((document.getElementById("eVIC").innerHTML));
    document.getElementById("emissionFactor").innerHTML = emissionFactor;};
    if(state=="Tasmania"){document.getElementById("gmaps").innerHTML = "<a href=\"https://www.google.com.au/maps/dir///@-42.0409006,145.6881264,8z\" target=\"_blank\">Calculate Distance<img src=\"images/google-maps-new.png\" width=\"25px\"></a>"    
        var emissionFactor= parseFloat((document.getElementById("eTAS").innerHTML));
    document.getElementById("emissionFactor").innerHTML = emissionFactor;};
}




function calculate2(){
    var distance = parseFloat(document.getElementById("distance2").value);
    var cargo = parseFloat(document.getElementById("cargo2").value);
    var payload = parseFloat(document.getElementById("payload2").value);
    var fuelPrice = parseFloat(document.getElementById("fuelPrice2").value);
    var fuel100 = parseFloat(document.getElementById("fuel1002").value);
    var fuelType = (document.getElementById("fuelType2")).value;
    var emissionFactor= parseFloat((document.getElementById("emissionFactor").innerHTML));
    var euro = (document.getElementById("euro2")).value;


 
    var fuelUnit;  // to get s.I. unit values of different fuel types
    if(fuelType=="Hydrogen"){fuelUnit="KG"};
        if(fuelType=="Biodiesel"){fuelUnit="L"};

    if(fuelType=="Diesel"){fuelUnit="L"};

    if(fuelType=="Electricity"){fuelUnit="KW"};

    var state = (document.getElementById("state2")).value;

//calculation for different variables like tripe, fuel required, etc
    var trips = cargo / payload;   
    trips = Math.ceil(trips);

    var fuelReq = (fuel100 * trips *2 * distance)/100 ;
    document.getElementById("fuelRequired2").innerHTML = "Estimated total fuel consumption is <b>" +  Math.round((fuelReq + Number.EPSILON) * 100) / 100 + " " + fuelUnit +"</b> of <b>" + fuelType + "</b> over <b>" + (trips *2 * distance)+"</b> km.";

    var fuelCost = fuelPrice/100 * fuelReq;
    document.getElementById("fuelCost2").innerHTML = "The total estimated  " + fuelType +  "  cost is <b>$" +Math.round((fuelCost + Number.EPSILON) * 100) / 100 + "</b> in " + state +".";


    if (trips==1) {document.getElementById("trips2").innerHTML = "A minimum of <b>one</b> return trip is required to deliver the payload of <b>"+ cargo +"</b> tonne payload.";}
    else if (trips>1) {document.getElementById("trips2").innerHTML = "A minimum of <b>" + trips + "</b> return trips is required to deliver the <b>"+ cargo +"</b> tonne payload.";}

    var co2E = ((fuelReq * 100)/1000  * 38.6 * 69.9)/100;
    var mE = ((fuelReq * 100)/1000  * 38.6 * 0.1)/100;
    if (euro=="Euro i") {mE = ((fuelReq * 100)/1000  * 38.6 * 0.2)/100;}
    if (euro=="Euro iv or higher") {mE =((fuelReq * 100)/1000  * 38.6 * 0.07)/100;}

    var noE = (((fuelReq + Number.EPSILON) * 100)/1000  * 38.6 * 0.4)/100;
    var totalE = (co2E + mE + noE);

    var mEBio = ((fuelReq * 100)/1000  * 38.6 * 0.1)/100;

    var noEBio = (((fuelReq * 100)/1000  * 34.6 * 1.7)/100);
    var totalEBio = (0 + mEBio + noEBio);
    var  h2E = Math.round(((fuelReq + Number.EPSILON) * 1000) *  7.05 / 1000);
    var electricityE =  Math.round(((fuelReq + Number.EPSILON) * 100) *  emissionFactor);



// DIfferent emisssions for different fuel types
    if(fuelType=="Hydrogen"){ document.getElementById("emissions2").innerHTML =  "Total Green House Gas emissions: <b>" + h2E + "</b> kg CO<sub>2</sub>-e</p><b>"+  Math.round(((h2E/(distance*2)*1000)*100) / 100) +"</b> CO<sub>2</sub>-e g/km </p>";};
    if(fuelType=="Biodiesel"){
        document.getElementById("emissions2").innerHTML = 
        "<p>Carbon Dioxide: <b>" + 0 + "</b> kg CO<sub>2</sub><p>Methane: <b>" + mEBio.toFixed(2) +
        "</b> kg CH<sub>4</sub><p>Nitrous Oxide: <b>" + noEBio.toFixed(2)  +
        "</b> kg N<sub>2</sub>O<p>Total Green House Gas emissions: <b>" + totalEBio.toFixed(2) + "</b> kg CO<sub>2</sub>-e<p><b>" +  Math.round(((totalEBio/(distance*2)*1000) * 100) / 100) +"</b> CO<sub>2</sub>-e g/km </p>" ;};
    if(fuelType=="Diesel"){
        document.getElementById("emissions2").innerHTML = 
        "<p>Carbon Dioxide: <b>" + co2E.toFixed(2) + "</b> kg CO<sub>2</sub><p>Methane: <b>" + mE.toFixed(2) +
        "</b> kg CH<sub>4</sub><p>Nitrous Oxide: <b>" + noE.toFixed(2)  +
        "</b> kg N<sub>2</sub>O<p>Total Green House Gas emissions: <b>" + totalE.toFixed(2) + "</b> kg CO<sub>2</sub>-e<p><b>" +  Math.round(((totalE/(distance*2)*1000) * 100) / 100) +"</b> CO<sub>2</sub>-e g/km </p>" ;};
        if(fuelType=="Electricity"){
         document.getElementById("emissions2").innerHTML = "Total Green House Gas emissions: <b>" + electricityE + "</b> kg CO<sub>2</sub>-e<p><b>"+  Math.round(((electricityE/(distance*2)*1000) * 100) / 100) +"</b> CO<sub>2</sub>-e g/km </p>";};

     }

 </script>


 <script>
     function clear() {
        document.getElementById("frm2").reset();
    }
</script>


</form>
<form  style="text-align: center; display: none;" id="compare2">
    <h1 class="heading-3" style="text-align:center;">>     Compare     </h1>


    <p id="compare">Coming Soon</p>


</form>
</div>
</div>
</div>
</section>








<!-------------------------LEARN MORE SECTION--------------------------------->
<div id="Learn-more">

    <div class="about-icon-holders">
        <div class="icon-set---about">
            <div class="tic-mission">
                <a href="#Mission-Section" class="mission-link w-inline-block">
                    <img src="images/how_it_works.png" width="130" alt="Truck-industry-council-history-about-us-icon" class="mission-icon"/>
                </a>
                <div id="right"></div>
                <h1 class="current-heading">HOW IT WORKS?</h1>  <!------------How it works section--------->
                <p class="paragraph-8">The Fuel Emissions Calculator is based on default emission factors from the 2021 National Greenhouse Accounts Factors Report from the Department of Industry, Science Energy and Resources...</p>
                <a href="#Mission-Section" class="mission-button w-button">Learn More</a>
            </div>
            <div class="tic-history">
                <a href="#History-Section" class="history-link w-inline-block">
                    <img src="images/typesOfFuel.png" class="history-icon"/>
                </a>
                <h1 class="mission-heading">TYPES OF FUEL</h1>   <!------------Types of fuels section--------->
                <p class="mission-paragraph"><a href="#Topic-2-Diesel" >Diesel</a>, <a href="#Topic-2-Biodisel" >Biodisel</a>, <a href="#Topic-2-Electricity" >Electricity</a> & <a href="#Topic-2-Hydrogen" >Hydrogen</a></p>
                <a href="#History-Section" class="history-button w-button">Learn More</a>
            </div>
            <div class="tic-current">
                <a href="#Third-Section" class="current-link w-inline-block">
                    <img src="images/upgrade.png" width="130" alt="Truck-industry-council-current-about-us-icon" class="current-icon"/>
                </a>
                <h1 class="current-heading" style="text-align:center;  ">UPGRADING & FUTURE TECHNOLOGIES</h1>   <!------------Upgrading and future technologies section--------->
                <p class="mission-paragraph">
                    Many future technologies would likely emerge during the next upcoming years. The leading technologies that would likely emerge are:
                    <br/>
                    <p class="mission-paragraph"><a href="#Future-Section" >Hydrogen Trucks</a> & <a href="#Electric-Section" >Electric Trucks</a></p>
                    ‍
                </p>
                <a href="#Third-Section" class="current-button w-button">Learn More</a>
            </div>
        </div>
    </div>

    <!-- ------------------------------------------ Topic 1- HOW IT WORKS ---------------------------------------------->

    <section id="Mission-Section" class="mission-section">
        <div class="tic-council-section mission">
            <div data-w-id="0d187f8d-8432-3600-c4bd-8e53987acbd8" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="tic-history-div">
                <div class="tic-histroy-image-holder">
                    <div class="how-it-works-image-block"></div>
                </div>
                <div class="tic-history-content mission">
                    <div class="div-block-12"></div>
                    <h1 class="heading-12 about">HOW IT WORKS?</h1>
                    <p class="paragraph-9">
                        <span>
                            <strong>How Our Calculator Works :</strong>
                        </span>
                        <strong>
                            ‍
                            <br>
                        </strong>
                    </p>
                    <p class="paragraph-9"><strong>‍</strong>The Fuel Emissions Calculator is based on default emission factors from the 
                        <a target="_blank" href="https://www.industry.gov.au/data-and-publications/national-greenhouse-accounts-factors-2021" style="color: black;">2021 National Greenhouse Accounts Factors Report</a>  from the Department of Industry, Science Energy and Resources. It incorporates the emission rates of standard fuels like diesel and biodiesel and looks at the emissions of different State power grids for electric and hydrogen-powered vehicles. The given greenhouse emissions factor  incorporates carbon dioxide, nitrous oxide and methane and is represented by CO2-e, meaning carbon dioxide equivalent.
                        <br>    <br> 
                        For diesel and biodiesel, the formula used by our Calculator is as follows:  
                        <br> 
                        CO2-e (kg) = (Fuel Required (L) * Energy Content Factor (GJ/kL) * Emission Factor (kg CO2-e/GJ)) / 1000 
                        <br><br> 
                        For electric-based batteries and hydrogen-powered vehicles, the emissions factor is determined by the average scope of two emission factors from the state the energy is sourced.  
                        <br> 
                        The formula is: 
                        <br> 
                        CO2-e (kg) = Quantity of electricity used (kilowatt hours) * (Emission Factor of State)
                        <br>    <br> 

                        Please note that these calculations are based on average figures and the TIC accepts no liability resulting from the accuracy, interpretation, analysis or use of information gathered from the calculator. 

                    </p>
                    <p>
                        <a target="_blank" href="https://latrobeuni-my.sharepoint.com/:w:/g/personal/20777009_students_ltu_edu_au/EVcbhod0DMdFmQ0GC_WAWO4BC86nKfSlusPYbmL6gI3nyw?e=DBk9Kx" class="history-button w-button">Read User Guide</a>   <!------------User document--------->
                    </p>

                </div>
            </div>
        </div>

    </div>

</section>

<!-------------------------------------------- Topic 2-TYPES OF FUELS ---------------------------------------------->
<section id="Topic-2-Diesel" class="council-section">
    <section id="History-Section" class="council-section">
        <div class="tic-history-section">
            <div data-w-id="2b429415-239b-6c22-3f64-01bf1a6f735d" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="tic-history-div main">
                <div class="tic-histroy-image-holder">
                    <div class="diesel-image-block"></div>  <!------------Information about diesel trucks--------->
                </div>
                <div class="tic-history-content">
                    <div class="div-block-12"></div>
                    <h1 class="heading-12 about">TYPES OF FUEL</h1>
                    <h1 class="heading-12 about">DIESEL</h1>
                    <p class="paragraph-9">



                        Diesel, more specifically Petroleum diesel, is by far the most common type of fuel used by trucks today. Diesel, just like regular petrol, is derived from crude oils but goes through a different refining process than petrol. Many transportation companies use diesel to fuel their trucks because it is cheaper than alternatives and readily available at most petrol stations. This assists companies to become more profitable and saves them from the hassle of transitioning to an alternate fuel type.
                    </br></br> 
                    Although these factors contributes to the excellence of diesel as the desirable fuel choice, it is disadvataged due to the high emissions caused by its combustion. The average truck with a euro engine generates 120g CO₂/km whilst operating with diesel. If we think about how many trucks are on the road and most of them running on diesel, this increases the massive carbon footprint generated by the transportation industry.

                </p>

            </div>

        </div>

    </div>

</section>
</section>
<section id="Topic-2-Biodisel" class="council-section">  <!------------Information about biodiesel--------->

</div>

<section id="History-Section" class="council-section">
    <div class="tic-history-section">
        <div data-w-id="2b429415-239b-6c22-3f64-01bf1a6f735d" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="tic-history-div main">
            <div class="tic-histroy-image-holder">
                <div class="biodiesel-image-block"></div>
            </div>
            <div class="tic-history-content">
                <div class="div-block-12"></div>
                <h1 class="heading-12 about">BIODIESEL</h1>

                <p class="paragraph-9">


                Biodiesel is obtained by mixing alcohol, usual methanol with vegetable oil, animal fat, or recycled cooking oil. Pure biodiesel (B100) is the lowest emission diesel fuel. Biodiesel can be used in any diesel engine when mixed with mineral diesel making it an easy transition. It is also used as an additive (typically 20%) to reduce vehicle emissions. However, it produces anywhere from 12%-86% fewer emissions than regular diesel, depending on the strength of the blend. It is renewable, incredibly safe and can reduce the dependence on imported oil.</br></br> 
            However, there are some issues with a biofuel that need to be discussed. It must be stored in an environment above 10 degrees Celsius, or it will start gelling and possibly clog the tank. There is also the case that biodiesel can affect food supplies due to being created with organic matter, making it unsuitable in areas with food shortages. The biggest disadvantage of biodiesel is its low availability in Australia. Although it is produced in Australia, it isn’t available in petrol stations, making it very difficult to transition into using.</br></br> 

        </p>

    </div>
</div>
</div>

</section>
</section>

<section id="Topic-2-Electricity" class="council-section">  <!------------Information about electricity trcuks--------->

    <section id="History-Section" class="council-section">
        <div class="tic-history-section">
            <div data-w-id="2b429415-239b-6c22-3f64-01bf1a6f735d" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="tic-history-div main">
                <div class="tic-histroy-image-holder">
                    <div class="electricity-image-block"></div>
                </div>
                <div class="tic-history-content">
                    <div class="div-block-12"></div>
                    <h1 class="heading-12 about">ELECTRICITY</h1>

                    <p class="paragraph-9" id="t2">



                    There have been huge advancements in electric engines in the last few years, with companies like Tesla and Toyota leading the charge. Electric engines “refuel” by going to a charging station and taking electricity from the grid. This electricity is stored in rechargeable batteries that power the motor. Using electricity to power an engine results in reduced emissions, a lower cost per kilometre, and running extremely quiet, resulting in less noise pollution. Charging stations are becoming much more available than every before, with countries like Norway leading the way.
                     </br></br> 
                However, some negatives need to be addressed. Some states and countries have adopted electric engines more than others, so if a truck was to make a trip interstate, there is a chance that charging stations will not be available. There is also a much smaller range of manufacturers to choose from when looking to purchase an electric truck when compared to a regular diesel truck. The insurance cost is also quite high, which can add up for a company that has hundreds or thousands of electric trucks operating under them. Also, whilst they have reduced emissions, they still draw power from the grid, so the generated emissions depend on how clean the grid energy is in your location. </br></br> 

            </p>

        </div>
    </div>
</div>
</section>
</section>

<section id="Topic-2-Hydrogen" class="council-section">  <!------------Information about hydrogen trucks--------->
    <section id="History-Section" class="council-section">
        <div class="tic-history-section">
            <div data-w-id="2b429415-239b-6c22-3f64-01bf1a6f735d" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="tic-history-div main">
                <div class="tic-histroy-image-holder">
                    <div class="hydrogen-image-block"></div>
                </div>
                <div class="tic-history-content">
                    <div class="div-block-12"></div>
                    <h1 class="heading-12 about">HYDROGEN</h1>

                    <p class="paragraph-9">
                        An electric motor powers hydrogen fuel cell vehicles, but unlike battery-powered cars, they produce their power using hydrogen fuel cells. The fuel cells work using a process known as reverse electrolysis, in which hydrogen reacts with oxygen in the fuel cell. This reaction results in electrical energy, heat and water, which is emitted through the exhaust as water vapour, so hydrogen-powered vehicles are locally emission-free. The electricity generated can either go straight to the engine or be used to charge the vehicle’s battery. 
                    </br></br> 
                    When comparing Hydrogen fuel cell vehicles to vehicles that use other types of fuel, it’s easy to see the upside in the technology. They use an electrical engine which results in no engine noise, and they have faster charge times and more extended range than regular electric batteries. However, the most significant benefit of hydrogen is that the exhaust fumes are pure water vapour resulting in no emissions.
                </br></br> 
                That’s not to say they don’t have their disadvantages, though. Hydrogen fuel cells are quite expensive to produce because they need rare metal such as platinum for the catalyst for the engine. They also have a hydrogen tank which takes up quite a bit of space in the vehicle. The most significant disadvantage of hydrogen vehicles is that there are almost no refuelling stations in Australia. 
            </p>

        </div>
    </div>
</div>
</section>
</section>

<!-------------------------------------------- Topic 3-WHY TO UPGRADE TRUCKS---------------------------------------------->

<section id="Third-Section" class="mission-section">
    <div class="tic-council-section mission">
        <div data-w-id="0d187f8d-8432-3600-c4bd-8e53987acbd8" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="tic-history-div">
            <div class="tic-histroy-image-holder">
                <div class="upgrade-image-block"></div>
            </div>
            <div class="tic-history-content mission">
                <div class="div-block-12"></div>
                <h1 class="heading-12 about">WHY SHOULD I UPGRADE MY TRUCK?  </h1>  <!------------Information about why to upgarde the trucks--------->
                <p class="paragraph-9">

                    Upgrading the truck brings the best performance, functionality, comfort and aesthetics in the ride. Upgrading always come with new technologies, new experience and more new features. Some features include a better high flow exhaust system, performance tuner, lift and levelling kits, new technology tyres, future modifications etc.   
                </br></br> 
            </p>

            <h1 class="heading-12 about">WHEN TO UPGRADE THEM?</h1>
            <p class="paragraph-9">

                There are many factors, including when to upgrade the truck. Two main factors are:  
                <br><br>
                1. Trucks expect to last between 10 to 15 years. Most of the trucks start expirencing issues after 320,000 km to 480,000 km. They are likely to continue operating utill 1.1 to 1.6 million km and after that most trucks become useless. 
                <br><br>
                2. According to the research, a truck needs to be replaced when the fuel range drops 0.85 km per liter. The other thing to consider when to upgrade is when total maintenance cost reaches 15 per cent of the gross revenue. Truck should be upgraded when the principal, interest, maintenance, and operating cost is higher than the cost of the new vehicle. By upgrading at the right results in some incentive such as the truck’s resale value can be invested in the new truck.

</p>
</div>
</div>
</div>
</section>
</div>






<!------------------------------------------- Topic 3-FUTURE TECHNOLOGIES ---------------------------------------------->

<section id="Future-Section" class="mission-section">
    <div class="tic-council-section mission">
        <div data-w-id="0d187f8d-8432-3600-c4bd-8e53987acbd8" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="tic-history-div">
            <div class="tic-histroy-image-holder">
                <div class="hydrogen-truck-image-block"></div>
            </div>
            <div class="tic-history-content mission">
                <div class="div-block-12"></div>
                <h1 class="heading-12 about">FUTURE TECHNOLOGIES</h1>  <!------------Information about future technologies--------->
                <p class="paragraph-9">




                    Many future technologies would likely emerge during the next upcoming years. The leading technologies that would likely emerge are:   
                </br></br> 
            </p>

            <h1 class="heading-12 about">HYDROGEN TRUCKS</h1>
            <p class="paragraph-9">

                An electric motor powers hydrogen fuel cell vehicles, unlike battery-powered vehicles their power using hydrogen fuel cells. The fuel cells work using a process known as reverse electrolysis, in which hydrogen reacts with oxygen in the fuel cell.                       
                <br><br>
                <div class="council-mission-objective-text w-richtext">

                    <ul role="list">
                       <li>Fast charging time. The hydrogen can be quickly refuelled in minutes, much faster than electric batteries.</li>
                       <li>Longer-range than electric car.</li>
                       <li>The fuel cells aren’t affected by too cold or hot weather, unlike electric batteries.</li>
                       <li>Exhaust is pure water vapour.</li>
                       <li>Hydrogen can be taken from the air by renewable energy. It can be produced when there is an oversupply of electricity from renewable energy sources when the wind or solar energy currently produced is not otherwise used. Hydrogen is also a by-product of many industrial processes.</li>
                   </ul>
               </div>
           </p>

       </div> 
   </div>
</div>
</div>
</div>

</section>

<!-------------------------------------------- Topic 3 ---------------------------------------------->

<section id="Electric-Section" class="mission-section">
    <div class="tic-council-section mission">
        <div data-w-id="0d187f8d-8432-3600-c4bd-8e53987acbd8" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="tic-history-div">
            <div class="tic-histroy-image-holder">
                <div class="electric-truck-image-block"></div>
            </div>
            <div class="tic-history-content mission">


                <h1 class="heading-12 about">ELECTRIC TRUCKS</h1>
                <p class="paragraph-9">

                    There have been considerable advancements in electric engines in the last few years, with companies like Tesla and Toyota leading the charge. Electric motors “refuel” by going to a charging station and taking electricity from the grid.                       
                    <br><br>
                    <div class="council-mission-objective-text w-richtext">

                        <ul role="list">
                            <li>
                            The use of an electrical engine means no engine noise and a lively start because electric motors provide full torque even at low speeds.                                           </li>
                            <li>Lower fuel and maintenance cost. </li>
                            <li>
                              Reduced air pollution.     
                          </li>
                          <li>
                            Greenhouse gases emission is eliminated in electric trucks using renewable energy.  
                        </li> 
                    </ul>
                </div>
            </p>
        </div>
    </div>

</section>
<p>            <a   target="_blank" href="https://forms.gle/oRJAsGAAEXu7hkva6" class="history-button w-button"style="margin: auto;">User Feedback Survey</a>
</p>

<a href="#top" class="current-button w-button" style="margin: auto;">Return to top</a>




<!-------------------------------------------- Footer ---------------------------------------------->
 <!----------------------------Code for footer has been taken from TIC website--------->
<div class="footer home">
    <div class="footer-container">
        <div class="right-footer-container">
            <h1 class="heading-13">Menu</h1>
            <a href="https://www.truck-industry-council.org/" class="link-2">Home</a>
            <a href="https://www.truck-industry-council.org/about-tic" aria-current="page" class="link-2 w--current">About Us</a>
            <a href="https://www.truck-industry-council.org/todays-trucks" class="link-2">Today&#x27;s Trucks</a>
            <a href="https://www.truck-industry-council.org/downloads" class="link-2">Downloads</a>
            <a href="https://www.truck-industry-council.org/gallery" class="link-2">Gallery</a>
            <a href="https://www.truck-industry-council.org/news-articles" class="link-2">News &amp; Articles</a>
            <a href="https://www.truck-industry-council.org/contact-us" class="link-2">Contact Us</a>
        </div>
        <div class="left-footer-container">
            <a id="Footer-Link" href="https://www.truck-industry-council.org" class="footer-link w-inline-block">
                <img src="https://assets.website-files.com/5cbe46bce3c2320cf45d2b62/5cbff5ea2c7ff4884c34396d_Truck-Industry-Council-Logo-White.svg" width="220" alt="" class="tic-logo-white"/>
            </a>
            <div class="div-block-15">
                <a href="https://www.truck-industry-council.org/privacy" class="link-3">Privacy</a>
                <a href="https://www.truck-industry-council.org/disclaimer" class="link-3">Disclaimer</a>
                <a href="https://www.truck-industry-council.org/copyright" class="link-3">Copyright</a>
            </div>
            <div class="text-block">© Copyright 2021 Truck Industry Council. All Rights Reserved.</div>
            <div class="text-block">Team A - Josh, Simon, Tavleen & Kulwinder</div>
        </div>
    </div>
</div>
<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=5cbe46bce3c2320cf45d2b62" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://assets.website-files.com/5cbe46bce3c2320cf45d2b62/js/truck-industry-council-website.8b5b96cfa.js" type="text/javascript"></script>
<!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
</body>

</html>
