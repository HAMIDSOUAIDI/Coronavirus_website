<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://i.ibb.co/w6K9r3y/coronavirus-2019.jpg" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/f300a501c9.js" crossorigin="anonymous"></script>
    <script src="preventmain.js"></script>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="pstyle.css?version=51">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">

    <title>prevent</title>
</head>

<body>
 
    <header>
        <h1 class="maintitle">Coronavirus</h1>
        <div class="novbar">
         
           <ul class="menu ">
                                <li> <div id="nav-icon1" onclick="myFunction()">
                    <span></span>
                    <span></span>
                    <span></span>
                    </div></li>
                    </ul>
            <ul id="mea">
                <li><a  href="home.php">World wide</a></li>
                <li><a  href="symptoms.php">Symptoms</a></li>
                <li><a  href="prevent.php">prevention</a></li>
                <li><a  href="about.php">About us</a></li>
                <li> 
                    <form autocomplete="off" action="/action_page.php">
              <div class="autocomplete" style="width:300px;">
                   <input id="myInput" type="text" name="myCountry" placeholder="Country">
                                </div>
                                <i class="fas fa-search" onclick="heh()"></i>
                          </form></li>
              <!--   <li class="log">login</li>
               <li class="join">join</li>-->
            </ul>
        </div>

    </header>

    <main role="main">

        <section class="jumbotron text-center">

                <img src="https://i.ibb.co/HG78BGP/mainimage.jpg" height="100%" width="100%" alt="Workplace" usemap="#workmap">
                <!--
                <map name="workmap">
                    <area shape="circle" coords="200,230,80" alt="Computer" href="#">
                <area shape="circle" coords="285,230,60" alt="Computer" href="#">
                <area shape="circle" coords="465,230,60" alt="Computer" href="#">
                <area shape="circle" coords="640,230,60" alt="Computer" href="#">
                <area shape="circle" coords="815,230,60" alt="Computer" href="#">
                <area shape="circle" coords="990,230,60" alt="Computer" href="#">
                <area shape="circle" coords="1170,230,60" alt="Computer" href="#">
                </map>-->
        </section>

        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow card1">
                            <img class="card-img-top" src="https://i.ibb.co/Q6M0RbL/washing-hand-infographic.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h4>Wash your hands often</h4>
                                <p class="card-text infotext1">Wash your hands often with soap and water for at least 20
                                    seconds especially after you have been in a public place, or
                                    after blowing your nose, coughing, or sneezing.
                                    It’s especially important to wash:
                                    Before eating or preparing food
                                    Before touching your face
                                    After using the restroom
                                    After leaving a public place
                                    After blowing your nose, coughing, or sneezing
                                    After handling your cloth face covering
                                    After changing a diaper
                                    After caring for someone sick
                                    After touching animals or pets</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" id="showpar1"
                                            class="btn btn-sm btn-outline-secondary">Read More</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top" src="https://i.ibb.co/PChynRz/wear-mask.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h4>wear a mask</h4>
                                <p class="card-text infotext2">The CDC and WHO recommend that people wear cloth face
                                    coverings in public when social distancing is difficult. This
                                    advice is based on evidence that people with COVID-19 can transmit the virus before
                                    they realize they have it.

                                    Using masks in public may help reduce the spread from people who don't have
                                    symptoms. Non-medical cloth masks are
                                    recommended for the public. Surgical masks and N-95 respirators are in short supply
                                    and should be reserved for health
                                    care providers.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" id="showpar2"
                                            class="btn btn-sm btn-outline-secondary">Read More</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top" src="https://i.ibb.co/NCmQz4S/how-use-hand-sanitize.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h4>use sanitizer</h4>
                                <p class="card-text infotext3">Components to cleaning hands with waterless hand
                                    sanitizers (also known as handrubs), the proper technique, and how hand
                                    sanitizers work.
                                    <br>-Make sure all organic matter is removed from hands.
                                    All visible organic matter (for example: dirt) must be removed from hands prior to
                                    applying waterless hand sanitizer.
                                    <br> -Apply a dime sized amount of waterless hand sanitizer to the palm of one hand
                                    or use a waterless hand sanitizer wipe.
                                    <br>-Rub hands together covering all surfaces of hands and fingers.
                                    <br>-Rub until waterless hand sanitizer is absorbed.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" id="showpar3"
                                            class="btn btn-sm btn-outline-secondary">Read More</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top" src="https://i.ibb.co/VL7gSnx/man-touch-his-face.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h4>dont touch your face</h4>
                                <p class="card-text infotext4">To help prevent infections, keep your hands away from
                                    your eyes, nose, and mouth. Why? Touching the mucous membranes on
                                    your face with your dirty hands allows germs that cause respiratory infections to
                                    enter the body.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" id="showpar4"
                                            class="btn btn-sm btn-outline-secondary">Read More</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top" src="https://i.ibb.co/fps7SNW/avoid-contact-hands-with-others-prevention-69130-48.jpg"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4>avoid contact with others</h4>
                                <p class="card-text infotext5">Inside your home: Avoid close contact with people who are
                                    sick.
                                    If possible, maintain 6 feet between the person who is sick and other household
                                    members.
                                    <br> Outside your home: Put 6 feet of distance between yourself and people who don’t
                                    live in your household.
                                    Remember that some people without symptoms may be able to spread virus.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" id="showpar5"
                                            class="btn btn-sm btn-outline-secondary">Read More</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top"
                                src="https://i.ibb.co/F82Vvpv/pngtree-new-infographic-design-for-coronavirus-symptoms-with-dark-blue-color-png-image-2187284.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h4>if you have any symptoms</h4>
                                <p class="card-text infotext6">It depends on the virus, but common signs include
                                    respiratory symptoms, fever, cough, shortness of breath, and breathing
                                    difficulties. In more severe cases, infection can cause pneumonia, severe acute
                                    respiratory syndrome, kidney failure and
                                    even death.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" id="showpar6"
                                            class="btn btn-sm btn-outline-secondary">Read More</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top" src="https://i.ibb.co/FbCMtP3/shutterstock-679543909.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h4>avoid contact with animals</h4>
                                <p class="card-text infotext7">We are still learning about the virus that causes
                                    COVID-19, but it appears that it can spread from people to animals in
                                    some situations. A small number of pets worldwide, including cats and dogs, have
                                    been reportedexternal icon to be
                                    infected with the virus that causes COVID-19, mostly after close contact with people
                                    with COVID-19.

                                    Infected pets might get sick or they might not have any symptoms. Of the pets that
                                    have gotten sick, most only had mild
                                    illness and fully recovered.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" id="showpar7"
                                            class="btn btn-sm btn-outline-secondary">Read More</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top"
                            data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail"
                            alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top"
                            data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail"
                            alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>-->
                </div>
            </div>
        </div>

    </main>

    <footer class="page-footer font-small special-color-dark pt-4">

        <!-- Footer Elements -->
        <div class="container">

            <!-- Social buttons -->
            <ul class="list-unstyled list-inline text-center">
                <li class="list-inline-item">
                    <a class="btn-floating btn-fb mx-1">
                        <i class="fab fa-facebook-f"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-tw mx-1">
                        <i class="fab fa-twitter"> </i>
                    </a>
                </li>
                <li class="list-inline-item ">
                    <a class="btn-floating btn-gplus mx-1">
                        <i class="fab fa-google-plus-g"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-li mx-1">
                        <i class="fab fa-linkedin-in"> </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn-floating btn-youtube mx-1">
                        <i class="fab fa-youtube"> </i>
                    </a>
                </li>
            </ul>

        </div>

        <div class="footer-copyright text-center py-3">&copy; 2020 CoronaVarus . All Rights Reserved
        </div>

    </footer>
    <script>
              function autocomplete(inp, arr) {
            /*the autocomplete function takes two arguments,
            the text field element and an array of possible autocompleted values:*/
             var currentFocus;
            /*execute a function when someone writes in the text field:*/
            inp.addEventListener("input", function (e) {
                var a, b, i, val = this.value;
                /*close any already open lists of autocompleted values*/
                closeAllLists();
                if (!val) { return false; }
                currentFocus = -1;
                /*create a DIV element that will contain the items (values):*/
                a = document.createElement("DIV");
                a.setAttribute("id", this.id + "autocomplete-list");
                a.setAttribute("class", "autocomplete-items");
                /*append the DIV element as a child of the autocomplete container:*/
                this.parentNode.appendChild(a);
                /*for each item in the array...*/
                for (i = 0; i < arr.length; i++) {
                    /*check if the item starts with the same letters as the text field value:*/
                    if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                        /*create a DIV element for each matching element:*/
                        b = document.createElement("DIV");
                        /*make the matching letters bold:*/
                        b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                        b.innerHTML += arr[i].substr(val.length);
                        /*insert a input field that will hold the current array item's value:*/
                        b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                        /*execute a function when someone clicks on the item value (DIV element):*/
                        b.addEventListener("click", function (e) {
                            /*insert the value for the autocomplete text field:*/
                            inp.value = this.getElementsByTagName("input")[0].value;
                            /*close the list of autocompleted values,
                            (or any other open lists of autocompleted values:*/
                            closeAllLists();
                        });
                        a.appendChild(b);
                    }
                }
            });
            /*execute a function presses a key on the keyboard:*/
            inp.addEventListener("keydown", function (e) {
                var x = document.getElementById(this.id + "autocomplete-list");
                if (x) x = x.getElementsByTagName("div");
                if (e.keyCode == 40) {
                    /*If the arrow DOWN key is pressed,
                    increase the currentFocus variable:*/
                    currentFocus++;
                    /*and and make the current item more visible:*/
                    addActive(x);
                } else if (e.keyCode == 38) { //up
                    /*If the arrow UP key is pressed,
                    decrease the currentFocus variable:*/
                    currentFocus--;
                    /*and and make the current item more visible:*/
                    addActive(x);
                } else if (e.keyCode == 13) {
                    /*If the ENTER key is pressed, prevent the form from being submitted,*/
                    e.preventDefault();
                    if (currentFocus > -1) {
                        /*and simulate a click on the "active" item:*/
                        if (x) x[currentFocus].click();
                    }
                }
            });
            function addActive(x) {
                /*a function to classify an item as "active":*/
                if (!x) return false;
                /*start by removing the "active" class on all items:*/
                removeActive(x);
                if (currentFocus >= x.length) currentFocus = 0;
                if (currentFocus < 0) currentFocus = (x.length - 1);
                /*add class "autocomplete-active":*/
                x[currentFocus].classList.add("autocomplete-active");
            }
            function removeActive(x) {
                /*a function to remove the "active" class from all autocomplete items:*/
                for (var i = 0; i < x.length; i++) {
                    x[i].classList.remove("autocomplete-active");
                }
            }
            function closeAllLists(elmnt) {
                /*close all autocomplete lists in the document,
                except the one passed as an argument:*/
                var x = document.getElementsByClassName("autocomplete-items");
                for (var i = 0; i < x.length; i++) {
                    if (elmnt != x[i] && elmnt != inp) {
                        x[i].parentNode.removeChild(x[i]);
                    }
                }
            }
            /*execute a function when someone clicks in the document:*/
            document.addEventListener("click", function (e) {
                closeAllLists(e.target);
            });
          }

           /*An array containing all the country names in the world:*/
          var countries = ["USA", "BRAZIL", "RUSSIA", "INDIA", "UK", "SPAIN", "PERU", "CHILE", "ITALY", "IRAN", "MEXICO", "PAKISTAN", "TURKEY", "GERMANY", "SAUDI ARABIA", "FRANCE", "BANGLADESH", "SOUTH AFRICA", "CANADA", "QATAR", "COLOMBIA", "CHINA", "EGYPT", "SWEDEN", "BELARUS", "BELGIUM", "ARGENTINA", "ECUADOR", "INDONESIA", "NETHERLANDS", "UAE", "IRAQ", "KUWAIT", "SINGAPORE", "UKRAINE", "PORTUGAL", "OMAN", "PHILIPPINES", "POLAND", "PANAMA", "SWITZERLAND", "BOLIVIA", "DOMINICAN REPUBLIC", "AFGHANISTAN", "ROMANIA", "BAHRAIN", "IRELAND", "ARMENIA", "NIGERIA", "ISRAEL", "KAZAKHSTAN", "JAPAN", "HONDURAS", "AUSTRIA", "GUATEMALA", "GHANA", "AZERBAIJAN", "MOLDOVA", "SERBIA", "ALGERIA", "NEPAL", "S. KOREA", "DENMARK", "CAMEROON", "MOROCCO", "CZECHIA", "SUDAN", "CÔTE D'IVOIRE", "NORWAY", "MALAYSIA", "UZBEKISTAN", "AUSTRALIA", "FINLAND", "DRC", "SENEGAL", "EL SALVADOR", "MACEDONIA", "KENYA", "TAJIKISTAN", "HAITI", "ETHIOPIA", "GUINEA", "VENEZUELA", "GABON", "KYRGYZSTAN", "BULGARIA", "DJIBOUTI", "LUXEMBOURG", "MAURITANIA", "HUNGARY", "BOSNIA", "FRENCH GUIANA", "CENTRAL AFRICAN REPUBLIC", "GREECE", "THAILAND", "COSTA RICA", "SOMALIA", "CROATIA", "MAYOTTE", "ALBANIA"]

          /*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
          autocomplete(document.getElementById("myInput"), countries);
           function myFunction() {
    var x = document.getElementById("mea");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
} 
    </script>
</body>

</html>