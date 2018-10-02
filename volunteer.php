
<!DOCTYPE html>
<html>
        <head>

                <title>India ThrowDown</title>

                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="description" content="India ThrowDown">
                <meta name="author" content="themecube">
                <!-- viewport settings -->
                <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
                <!-- CSS -->
                <link rel="stylesheet" href="css/bootstrap.css">
                <link rel="stylesheet" href="css/pe-icon-7-stroke.css">
                <link rel="stylesheet" href="css/helper.css">
                <link rel="stylesheet" href="css/animate.min.css">
                <link rel="stylesheet" href="css/font-awesome.css">
                <link rel="stylesheet" href="css/font.css">
                <link rel="stylesheet" href="css/salvattore.css">
                <link rel="stylesheet" href="css/jquery.countdown.css">
                <link rel="stylesheet" href="css/magnific-popup.css">
                <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
                <link rel="stylesheet" href="css/owl.carousel.css">
                <link rel="stylesheet" href="css/owl.theme.css">
                <link rel="stylesheet" href="css/owl.transitions.css">
                <link rel="stylesheet" href="css/revolution.css">
                <link rel="stylesheet" href="css/revolution-extralayers.css">
                <link rel="stylesheet" href="css/main.css">
                <!-- Font -->
                <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>

                <!-- Favicon -->
                <link rel="shortcut icon" href="img/favicon.ico">
            </head>

            <body style="background:#fac42b;">

              <?php
              $servername = "65.60.4.130";
              $username = "neonclou_devusr";
              $password = "@Hope@2018#";
              $dbname = "neonclou_dev";

              // Create connection
              $conn = new mysqli($servername, $username, $password, $dbname);

              // Check connection
              if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
                  //echo("Connection failed");
              }else{
              	//echo("Connection success");
              }

              $first_name = "";
              $last_name = "";
              $email = "";
              $phone = "";
              $gender = "";
              $role = "";

              $first_name = $_POST['firstname'];
              $last_name = $_POST['lastname'];
              $email = $_POST['email'];
              $phone = $_POST['phone'];
              $gender = $_POST['gender'];
              $role = $_POST['type'];

              if($first_name != "" && $last_name != "" && $email != "" && $phone != "" && $gender != "" && $role != ""){
              	//echo("Insert success");
              $sql = "INSERT INTO indiatd_volunteer (first_name,last_name,email,phone,gender,role)
              VALUES ('$first_name', '$last_name', '$email', '$phone', '$gender','$role')";
              }

              if ($conn->query($sql) === TRUE) {
                  //echo "New record created successfully";
                  //alert("Form submitted successfully");

              } else {
                 //echo "Error in record creation " . $sql . "<br>" . $conn->error;
              }

              $first_name = "";
              $last_name = "";
              $email = "";
              $phone = "";
              $gender = "";
              $role = "";

              $conn->close();

              // redirect after processing the POST request
              //header("Location: " . $_SERVER["REQUEST_URI"]);
              header("Location: http://indiathrowdown.com/"); /* Redirect browser */
              //exit;

              ?>

                    <nav id="nav-primary" class="navbar navbar-custom" role="navigation">
                            <div class="container">

                              <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav">
                                  <span class="sr-only">Toggle navigation</span>
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                                </button>
                                <ul style="list-style-type:none">
                                <li ><a style="text-decoration:none; display: inline-block;" data-toggle="elementscroll" href="index.html"><!--<img src="img/logo.png" alt="logo">-->
                                <!--<h3 style="color:rgb(255, 255, 255);">-->
                                Home
                                <!--</h3>-->
                                </a>
                                </li>
                              </ul>
                              </div>



                            </div>
                    </nav>


                <div class="container" style="background: #fff;">
                    <div class="row">
                        <div id="volunteer-form" class="col-lg-6 col-lg-offset-3">
                            <div class="row">
                                <button title="Close (Esc)" type="button" class="mfp-close">×</button>

                                <div class="col-lg-12">
                                    <h2 class="uppercase">volunteer</h2>
                                        <p>Volunteers are the pillars of india throwdown event. They are the reason for an amazing athlete and spectator experience.</p>
                                        <p>Register with us to be a part of this grand community event. </p>
                                        <p>Enter Details Here Below:</p>
                                </div>
                                <!-- volunteer FORM -->
                                <form method="post">
                                <div class="volunteer-form col-lg-12">
                                    <div class="control-group">
                                        <div class="controls">
                                            <label for="name">FIRST NAME</label><br>
                                            <input type="text" name="firstname" id="firstname" required data-validation-required-message="Please enter your name" />
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <div class="controls">
                                            <label for="name">LAST NAME</label><br>
                                            <input type="text" name="lastname" id="lastname" required data-validation-required-message="Please enter your name" />
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <div class="controls ">
                                            <label for="email">EMAIL</label><br>
                                            <input type="email" name="email" id="email"  required data-validation-required-message="Please enter your email" />
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <div class="controls ">
                                            <label for="phone">PHONE</label><br>
                                            <input type="text" name="phone" id="phonzae" required data-validation-required-message="Please enter your phone" />
                                        </div>
                                    </div>

                                    <div class="controls ">
                                            <label for="gender">Gender</label><br>
                                            <input type="radio" name="gender" value="male"> Male &emsp;&emsp;
                                            <input type="radio" name="gender" value="female"> Female
                                    </div>
                                    <br>


                                <!-- Role -->

                                <div class="control-group">
                                        <div class="controls ">

                                            <label for="roleDropdown">Role</label><br>
                                            <select name="roleDropdown" id="type">
                                                <option id="option1" value="India Throwdown Crew">India Throwdown Crew</option>

                                                <option id="option2" value="India Throwdown Judges">India Throwdown Judges</option>

                                                <option id="option3" value="India Throwdown Medical Crew">India Throwdown Medical Crew</option>

                                                <option id="option4" value="India Throwdown Co-ordinator">India Throwdown Co-ordinator</option>

                                                <option id="option5" value="India Throwdown Commentator and Anchor">India Throwdown Commentator and Anchor</option>

                                            </select>

                                            <span class="option1">
                                                <p>The behind the scene heroes almost do everything right from managing crowd to spectator to guests. They can be seen everywhere on the floor working to make the games as smooth as possible.</p>
                                            </span>
                                            <span class="option2" style="display:none">
                                                <p>The judges at the India Throwdown event will be the one who will be counting the reps and submitting the final score of the athlete for fitness and strongman event.</p>
                                            </span>
                                            <span class="option3" style="display:none">
                                                <p>The medical crew be it nurses, doctor or sports practitioner will come in handy in case of emergencies like in case of any untoward incident while performing any movement by athletes.</p>
                                            </span>
                                            <span class="option4" style="display:none">
                                                <p>The Co-ordinator will be responsible for all the communication between India Throwdown and outside world. Should come with good communication skill and preferably a PR candidate.</p>
                                            </span>
                                            <span class="option5" style="display:none">
                                                <p >These people will be responsible for on site commentary and anchoring. Preferably with good english and communication skill.</p>
                                            </span>


                                         </div>
                                </div>
                                   <br/>
                                <div class="col-lg-12 text-left">
                                    <button id="saveChanges" class=".btn-primary" type="submit" style="color:#fac42b; background:#000; padding:5px 30px; margin-left:-11px; margin-bottom:50px;">Submit</button>
                                </div>
                                </div>
                              </form>
                            </div>
                        </div>
                    </div>
                </div>


                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

                <script>
                /*export default {
                  data() {
                    return {
                      selected: [], // Must be an array reference!
                      options: [{
                          text: 'S',
                          value: 's'
                        },
                        {
                          text: 'L',
                          value: 'l'
                        },
                        {
                          text: 'XL',
                          value: 'xl'
                        },
                      ]
                    }
                  }
                }*/


            $( document ).ready(function() {
              //roleDropdown extra info show/hide
              $("select[name='roleDropdown']").on('change',function(){
                $("select[name='roleDropdown']").parent().find('span').hide();
                var className = $( "select[name='roleDropdown'] option:selected" ).attr("id");
                $("." + className).show();
              });

              //null check
              $("#saveChanges").on('click',function(){
                var first_name  = $("input[name='firstname']").val();
                var last_name  = $("input[name='lastname']").val();
                var email  = $("input[name='email']").val();
                var phone  = $("input[name='phone']").val();
                var gender  = $("input[name='gender']").val();

                if(!first_name) {
                  alert("Please fill in First name");
                  return false;
                } else if (!last_name) {
                  alert("Please fill in Last name");
                  return false;
                } else if (!email) {
                  alert("Please fill in Email");
                  return false;
                } else if (!phone) {
                  alert("Please fill in phone number");
                  return false;
                } else if (!gender) {
                  alert("Please choose Gender");
                  return false;
                } else {
                  alert("Your form is saved.");
                }

              });

          });

  </script>

</body>

</html>
