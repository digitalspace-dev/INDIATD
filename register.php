<?php
/**
 * Created by PhpStorm.
 * User: nitishkalra
 * Date: 21/08/18
 * Time: 00:40 AM
 */
require_once('config.php');
?>
<!DOCTYPE html>
<head>

    <title>India ThrowDown</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="India ThrowDown">
    <meta name="author" content="themecube">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

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

<body>

 <!-- NAVIGATION -->
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
      <form method="post">
    <div class="container">
        <div class="row">
            <div id="register-form" class="col-lg-6 col-lg-offset-3">
                <div class="row">
                    <button title="Close (Esc)" type="button" class="mfp-close">×</button>

                    <div class="col-lg-12">
                        <h2>Athlete info</h2>
                        <label class="IDForSportsCategory" for="Sports Category">Sports Category</label>
                        <select class="IDForSportsCategory" name="CategoryM" id="type">
                                <option value="Select Category">Select Category</option>
                                <option value="Category A">Category A</option>
                                <option value="Category B">Category B</option>
                        </select>
                        <label class="IDForSportsCategoryA hideComponent" style="display:none" for="Category A">Category A <br>
                          <span>Select any two sports Category</span>
                        </label>
                        <select class="IDForSportsCategoryA hideComponent" style="display:none" multiple="multiple" name="CategoryA" id="type">

                                <option value="Fitness">Fitness</option>
                                <option value="Strongman">Strongman</option>
                                <option value="Powerlifting">Powerlifting</option>
                        </select>
                        <label class="IDForSportsCategoryB hideComponent" style="display:none" for="Category B">Category B</label>
                        <select class="IDForSportsCategoryB hideComponent" style="display:none" name="CategoryB" id="type">
                                <option value="Select Category">Select Category</option>
                                <option value="Kids">Kids</option>
                                <option value="Masters">Masters</option>
                        </select>
                    </div>

                    <!-- REGISTER FORM -->
                    <div id="formContainer" style="display:none" class="register-form col-lg-12 hideComponent">
                        <div class="control-group IDForName">
                            <div class="controls">
                                <br/>
                                <h4> Athlete <a style = "color:red">*</a></h4>
                                <!-- <label for="name">NAME</label><br> -->
                                <input type="text" name="first_name" placeholder="First Name" id="name" required data-validation-required-message="Please enter your first name" />
                                <input type="text" name="last_name" placeholder="Last Name" id="name" required data-validation-required-message="Please enter your last name" />
                            </div>
                        </div>

                        <div class="control-group IDForEmail">
                            <div class="controls ">
                                <h4>Email <a style = "color:red">*</a></h4>
                                <input type="email" name="email" placeholder="Email" id="email"  required data-validation-required-message="Please enter your email" />
                            </div>
                        </div>

                        <div class="control-group IDForEmail">
                                <div class="controls ">
                                    <h4>Confirm email <a style = "color:red">*</a></h4>
                                    <input type="email" name="email1" placeholder="Confirm Email" id="email"  required data-validation-required-message="Please enter your email" />
                                </div>
                        </div>

                        <div class="control-group IDForGender">
                                <div class="controls ">
                                    <h4>Gender <a style = "color:red">*</a></h4>
                                    <input type="radio" name="gender" value="male"> Male &emsp;&emsp;
                                    <input type="radio" name="gender" value="female"> Female
                                </div>
                        </div>

                        <br/>

                        <div class="control-group IDForDivision">
                                <div class="controls ">
                                    <h4>Division</h4>
                                    <select name="division" id="type">
                                        <option value="Individual Teens 13-15">Individual Teens 13-15</option>
                                            <span>
                                                <p>*Need parents consent for registration.</p>
                                                <p><strong>Age Requirement:</strong> Athletes in this division must be 13 years of age or older as of 1/2/2018 but not older than 15 as of 1/1/2019.</p>
                                            </span>
                                        <option value="Individual Teen 16-18">Individual Teen 16-18</option>
                                            <span>
                                                <p>*Need parents consent for registration.</p>
                                                <p><strong>Age Requirement:</strong> Athletes in this division must be 13 years of age or older as of 1/2/2018 but not older than 15 as of 1/1/2019.
                                            </span>
                                        <option value="Individual Pro">Individual Pro</option>
                                            <span>
                                                <p>This division is for elite level athletes.
                                                   The athletes are required to perform all the complex weightlifting and gymnastics movement including heavy lifting.
                                                </p>
                                            </span>
                                        <option value="Individual Scaled">Individual Scaled</option>
                                            <span>
                                                <p>This division is for those who are not sure about participating in individual pro  but can perform most of the gymnastics movement with occasional heavy weights.</p>
                                            </span>
                                        <option value="Individual Masters 35-39">Individual Masters 35-39</option>
                                            <span>
                                                <p>The athlete in this division are expected to perform same workout as individual Pro, only they will compete with athlete in their weight class.
                                                 <p><strong>Age Requirement:</strong> Athletes must have been born on or between 1/2/79-1/1/84</p>
                                                 </p>
                                            </span>
                                        <option value="Individual masters 40-44">Individual masters 40-44</option>
                                            <span>
                                                    <P>The athlete is this division are expected to perform a scaled version of individual elite /RX workouts.</P>
                                                    <p><strong>Age Requirement:</strong> Athletes must have been born on or between 1/2/74-1/1/79</p>

                                            </span>
                                        <option value="Individual master 45-49">Individual master 45-49</option>
                                            <span>
                                                    <p>This athlete in this division are expected to perform most of the gymnastics and should be able to move light to moderate weight.</p>
                                                    <p><strong>Requirement:</strong> Athletes must have been born after 1/1/74</p>
                                            </span>
                                    </select>
                                 </div>
                        </div>

                        <div class="control-group IDForAffiliate">
                            <div class="controls ">
                                <h4>Affiliate/box/gym<a style = "color:red">*</a></h4>
                                <input type="text" name="affiliate_box_gym" placeholder="Affiliate" id="email"  required data-validation-required-message="Please enter your affiliate/box/gym" />
                            </div>
                        </div>

                        <div class="control-group IDForEmergencyContact">
                            <div class="controls">
                                <h4> Emergency contact info <a style = "color:red">*</a></h4>
                                <input type="text" name="em_contact_name" placeholder="Contact Name" id="name" required data-validation-required-message="Please enter your emergency contact name" />
                                <input type="text" style = "width:50%" name="em_contact_no" placeholder="Contact Number" id="phone" required data-validation-required-message="Please enter your emergency contact number" />
                            </div>
                        </div>

                        <br/>
                        <br/>

                        <div class="control-group IDForTshirtSize">
                            <div class="controls">
                                <h4> Apparel </h4>
                                <label for="t-shirt size">T-shirt size<a style = "color:red">*</a></label>
                                <select name="apparel" id="type">
                                    <option value="Please Select" disabled selected="selected">Please Select</option>
                                    <option value="S">S</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                </select>

                               <!-- <label for="shorts size">Shorts Size<a style = "color:red">*</a></label>
                                <select name="type" id="type">
                                    <option value="Please Select" disabled selected="selected">Please Select</option>
                                    <option value="S">S</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                </select> -->
                            </div>
                        </div>

                        <br/>
                        <br/>

                        <div class="control-group IDForAddress">
                            <div class="controls">
                                <h4> Address </h4>
                                <label for="street">Street<a style = "color:red">*</a></label>
                                <input type="text" name="add_street" placeholder="Street Address" id="streetaddress" required data-validation-required-message="Please enter your street address" />
                                <label for="street">City<a style = "color:red">*</a></label>
                                <input type="text" name="add_city" placeholder="City" id="city" required data-validation-required-message="Please enter your city" />
                                <label for="state/pronvince">State/Province<a style = "color:red">*</a></label>
                                <input type="text" name="add_state" placeholder="State/Province" id="state/pronvince" required data-validation-required-message="Please enter your state/province" />
                                <label for="zipcode" style="width: 50%">Zip Code<a style = "color:red">*</a></label>
                                <input type="text" name="add_zip_code" placeholder="zipcode" pattern="[0-9]{5}" id="zipcode" required data-validation-required-message="Please enter your zip code" style="width: 50%"/><br/>
                                <label for="country">Country<a style = "color:red">*</a></label>
                                <select name="add_country" id="type">
                                    <option value="" disabled selected="selected">Select type</option>
                                    <option value="Afghanistan" title="Afghanistan">Afghanistan</option>
                                    <option value="Åland Islands" title="Åland Islands">Åland Islands</option>
                                    <option value="Albania" title="Albania">Albania</option>
                                    <option value="Algeria" title="Algeria">Algeria</option>
                                    <option value="American Samoa" title="American Samoa">American Samoa</option>
                                    <option value="Andorra" title="Andorra">Andorra</option>
                                    <option value="Angola" title="Angola">Angola</option>
                                    <option value="Anguilla" title="Anguilla">Anguilla</option>
                                    <option value="Antarctica" title="Antarctica">Antarctica</option>
                                    <option value="Antigua and Barbuda" title="Antigua and Barbuda">Antigua and Barbuda</option>
                                    <option value="Argentina" title="Argentina">Argentina</option>
                                    <option value="Armenia" title="Armenia">Armenia</option>
                                    <option value="Aruba" title="Aruba">Aruba</option>
                                    <option value="Australia" title="Australia">Australia</option>
                                    <option value="Austria" title="Austria">Austria</option>
                                    <option value="Azerbaijan" title="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas" title="Bahamas">Bahamas</option>
                                    <option value="Bahrain" title="Bahrain">Bahrain</option>
                                    <option value="Bangladesh" title="Bangladesh">Bangladesh</option>
                                    <option value="Barbados" title="Barbados">Barbados</option>
                                    <option value="Belarus" title="Belarus">Belarus</option>
                                    <option value="Belgium" title="Belgium">Belgium</option>
                                    <option value="Belize" title="Belize">Belize</option>
                                    <option value="Benin" title="Benin">Benin</option>
                                    <option value="Bermuda" title="Bermuda">Bermuda</option>
                                    <option value="Bhutan" title="Bhutan">Bhutan</option>
                                    <option value="Bolivia, Plurinational State of" title="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
                                    <option value="Bonaire, Sint Eustatius and Saba" title="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
                                    <option value="Bosnia and Herzegovina" title="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                    <option value="Botswana" title="Botswana">Botswana</option>
                                    <option value="Bouvet Island" title="Bouvet Island">Bouvet Island</option>
                                    <option value="Brazil" title="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Territory" title="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                    <option value="Brunei Darussalam" title="Brunei Darussalam">Brunei Darussalam</option>
                                    <option value="Bulgaria" title="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso" title="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi" title="Burundi">Burundi</option>
                                    <option value="Cambodia" title="Cambodia">Cambodia</option>
                                    <option value="Cameroon" title="Cameroon">Cameroon</option>
                                    <option value="Canada" title="Canada">Canada</option>
                                    <option value="Cape Verde" title="Cape Verde">Cape Verde</option>
                                    <option value="Cayman Islands" title="Cayman Islands">Cayman Islands</option>
                                    <option value="Central African Republic" title="Central African Republic">Central African Republic</option>
                                    <option value="Chad" title="Chad">Chad</option>
                                    <option value="Chile" title="Chile">Chile</option>
                                    <option value="China" title="China">China</option>
                                    <option value="Christmas Island" title="Christmas Island">Christmas Island</option>
                                    <option value="Cocos (Keeling) Islands" title="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                    <option value="Colombia" title="Colombia">Colombia</option>
                                    <option value="Comoros" title="Comoros">Comoros</option>
                                    <option value="Congo" title="Congo">Congo</option>
                                    <option value="Congo, the Democratic Republic of the" title="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
                                    <option value="Cook Islands" title="Cook Islands">Cook Islands</option>
                                    <option value="Costa Rica" title="Costa Rica">Costa Rica</option>
                                    <option value="Côte d'Ivoire" title="Côte d'Ivoire">Côte d'Ivoire</option>
                                    <option value="Croatia" title="Croatia">Croatia</option>
                                    <option value="Cuba" title="Cuba">Cuba</option>
                                    <option value="Curaçao" title="Curaçao">Curaçao</option>
                                    <option value="Cyprus" title="Cyprus">Cyprus</option>
                                    <option value="Czech Republic" title="Czech Republic">Czech Republic</option>
                                    <option value="Denmark" title="Denmark">Denmark</option>
                                    <option value="Djibouti" title="Djibouti">Djibouti</option>
                                    <option value="Dominica" title="Dominica">Dominica</option>
                                    <option value="Dominican Republic" title="Dominican Republic">Dominican Republic</option>
                                    <option value="Ecuador" title="Ecuador">Ecuador</option>
                                    <option value="Egypt" title="Egypt">Egypt</option>
                                    <option value="El Salvador" title="El Salvador">El Salvador</option>
                                    <option value="Equatorial Guinea" title="Equatorial Guinea">Equatorial Guinea</option>
                                    <option value="Eritrea" title="Eritrea">Eritrea</option>
                                    <option value="Estonia" title="Estonia">Estonia</option>
                                    <option value="Ethiopia" title="Ethiopia">Ethiopia</option>
                                    <option value="Falkland Islands (Malvinas)" title="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                    <option value="Faroe Islands" title="Faroe Islands">Faroe Islands</option>
                                    <option value="Fiji" title="Fiji">Fiji</option>
                                    <option value="Finland" title="Finland">Finland</option>
                                    <option value="France" title="France">France</option>
                                    <option value="French Guiana" title="French Guiana">French Guiana</option>
                                    <option value="French Polynesia" title="French Polynesia">French Polynesia</option>
                                    <option value="French Southern Territories" title="French Southern Territories">French Southern Territories</option>
                                    <option value="Gabon" title="Gabon">Gabon</option>
                                    <option value="Gambia" title="Gambia">Gambia</option>
                                    <option value="Georgia" title="Georgia">Georgia</option>
                                    <option value="Germany" title="Germany">Germany</option>
                                    <option value="Ghana" title="Ghana">Ghana</option>
                                    <option value="Gibraltar" title="Gibraltar">Gibraltar</option>
                                    <option value="Greece" title="Greece">Greece</option>
                                    <option value="Greenland" title="Greenland">Greenland</option>
                                    <option value="Grenada" title="Grenada">Grenada</option>
                                    <option value="Guadeloupe" title="Guadeloupe">Guadeloupe</option>
                                    <option value="Guam" title="Guam">Guam</option>
                                    <option value="Guatemala" title="Guatemala">Guatemala</option>
                                    <option value="Guernsey" title="Guernsey">Guernsey</option>
                                    <option value="Guinea" title="Guinea">Guinea</option>
                                    <option value="Guinea-Bissau" title="Guinea-Bissau">Guinea-Bissau</option>
                                    <option value="Guyana" title="Guyana">Guyana</option>
                                    <option value="Haiti" title="Haiti">Haiti</option>
                                    <option value="Heard Island and McDonald Islands" title="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
                                    <option value="Holy See (Vatican City State)" title="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                    <option value="Honduras" title="Honduras">Honduras</option>
                                    <option value="Hong Kong" title="Hong Kong">Hong Kong</option>
                                    <option value="Hungary" title="Hungary">Hungary</option>
                                    <option value="Iceland" title="Iceland">Iceland</option>
                                    <option value="India" title="India">India</option>
                                    <option value="Indonesia" title="Indonesia">Indonesia</option>
                                    <option value="Iran, Islamic Republic of" title="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                    <option value="Iraq" title="Iraq">Iraq</option>
                                    <option value="Ireland" title="Ireland">Ireland</option>
                                    <option value="Isle of Man" title="Isle of Man">Isle of Man</option>
                                    <option value="Israel" title="Israel">Israel</option>
                                    <option value="Italy" title="Italy">Italy</option>
                                    <option value="Jamaica" title="Jamaica">Jamaica</option>
                                    <option value="Japan" title="Japan">Japan</option>
                                    <option value="Jersey" title="Jersey">Jersey</option>
                                    <option value="Jordan" title="Jordan">Jordan</option>
                                    <option value="Kazakhstan" title="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya" title="Kenya">Kenya</option>
                                    <option value="Kiribati" title="Kiribati">Kiribati</option>
                                    <option value="Korea, Democratic People's Republic of" title="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                    <option value="Korea, Republic of" title="Korea, Republic of">Korea, Republic of</option>
                                    <option value="Kuwait" title="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan" title="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Lao People's Democratic Republic" title="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                    <option value="Latvia" title="Latvia">Latvia</option>
                                    <option value="Lebanon" title="Lebanon">Lebanon</option>
                                    <option value="Lesotho" title="Lesotho">Lesotho</option>
                                    <option value="Liberia" title="Liberia">Liberia</option>
                                    <option value="Libya" title="Libya">Libya</option>
                                    <option value="Liechtenstein" title="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania" title="Lithuania">Lithuania</option>
                                    <option value="Luxembourg" title="Luxembourg">Luxembourg</option>
                                    <option value="Macao" title="Macao">Macao</option>
                                    <option value="Macedonia, the former Yugoslav Republic of" title="Macedonia, the former Yugoslav Republic of">Macedonia, the former Yugoslav Republic of</option>
                                    <option value="Madagascar" title="Madagascar">Madagascar</option>
                                    <option value="Malawi" title="Malawi">Malawi</option>
                                    <option value="Malaysia" title="Malaysia">Malaysia</option>
                                    <option value="Maldives" title="Maldives">Maldives</option>
                                    <option value="Mali" title="Mali">Mali</option>
                                    <option value="Malta" title="Malta">Malta</option>
                                    <option value="Marshall Islands" title="Marshall Islands">Marshall Islands</option>
                                    <option value="Martinique" title="Martinique">Martinique</option>
                                    <option value="Mauritania" title="Mauritania">Mauritania</option>
                                    <option value="Mauritius" title="Mauritius">Mauritius</option>
                                    <option value="Mayotte" title="Mayotte">Mayotte</option>
                                    <option value="Mexico" title="Mexico">Mexico</option>
                                    <option value="Micronesia, Federated States of" title="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                    <option value="Moldova, Republic of" title="Moldova, Republic of">Moldova, Republic of</option>
                                    <option value="Monaco" title="Monaco">Monaco</option>
                                    <option value="Mongolia" title="Mongolia">Mongolia</option>
                                    <option value="Montenegro" title="Montenegro">Montenegro</option>
                                    <option value="Montserrat" title="Montserrat">Montserrat</option>
                                    <option value="Morocco" title="Morocco">Morocco</option>
                                    <option value="Mozambique" title="Mozambique">Mozambique</option>
                                    <option value="Myanmar" title="Myanmar">Myanmar</option>
                                    <option value="Namibia" title="Namibia">Namibia</option>
                                    <option value="Nauru" title="Nauru">Nauru</option>
                                    <option value="Nepal" title="Nepal">Nepal</option>
                                    <option value="Netherlands" title="Netherlands">Netherlands</option>
                                    <option value="New Caledonia" title="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand" title="New Zealand">New Zealand</option>
                                    <option value="Nicaragua" title="Nicaragua">Nicaragua</option>
                                    <option value="Niger" title="Niger">Niger</option>
                                    <option value="Nigeria" title="Nigeria">Nigeria</option>
                                    <option value="Niue" title="Niue">Niue</option>
                                    <option value="Norfolk Island" title="Norfolk Island">Norfolk Island</option>
                                    <option value="Northern Mariana Islands" title="Northern Mariana Islands">Northern Mariana Islands</option>
                                    <option value="Norway" title="Norway">Norway</option>
                                    <option value="Oman" title="Oman">Oman</option>
                                    <option value="Pakistan" title="Pakistan">Pakistan</option>
                                    <option value="Palau" title="Palau">Palau</option>
                                    <option value="Palestinian Territory, Occupied" title="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                    <option value="Panama" title="Panama">Panama</option>
                                    <option value="Papua New Guinea" title="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay" title="Paraguay">Paraguay</option>
                                    <option value="Peru" title="Peru">Peru</option>
                                    <option value="Philippines" title="Philippines">Philippines</option>
                                    <option value="Pitcairn" title="Pitcairn">Pitcairn</option>
                                    <option value="Poland" title="Poland">Poland</option>
                                    <option value="Portugal" title="Portugal">Portugal</option>
                                    <option value="Puerto Rico" title="Puerto Rico">Puerto Rico</option>
                                    <option value="Qatar" title="Qatar">Qatar</option>
                                    <option value="Réunion" title="Réunion">Réunion</option>
                                    <option value="Romania" title="Romania">Romania</option>
                                    <option value="Russian Federation" title="Russian Federation">Russian Federation</option>
                                    <option value="Rwanda" title="Rwanda">Rwanda</option>
                                    <option value="Saint Barthélemy" title="Saint Barthélemy">Saint Barthélemy</option>
                                    <option value="Saint Helena, Ascension and Tristan da Cunha" title="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
                                    <option value="Saint Kitts and Nevis" title="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                    <option value="Saint Lucia" title="Saint Lucia">Saint Lucia</option>
                                    <option value="Saint Martin (French part)" title="Saint Martin (French part)">Saint Martin (French part)</option>
                                    <option value="Saint Pierre and Miquelon" title="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                    <option value="Saint Vincent and the Grenadines" title="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                    <option value="Samoa" title="Samoa">Samoa</option>
                                    <option value="San Marino" title="San Marino">San Marino</option>
                                    <option value="Sao Tome and Principe" title="Sao Tome and Principe">Sao Tome and Principe</option>
                                    <option value="Saudi Arabia" title="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal" title="Senegal">Senegal</option>
                                    <option value="Serbia" title="Serbia">Serbia</option>
                                    <option value="Seychelles" title="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone" title="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapore" title="Singapore">Singapore</option>
                                    <option value="Sint Maarten (Dutch part)" title="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
                                    <option value="Slovakia" title="Slovakia">Slovakia</option>
                                    <option value="Slovenia" title="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands" title="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia" title="Somalia">Somalia</option>
                                    <option value="South Africa" title="South Africa">South Africa</option>
                                    <option value="South Georgia and the South Sandwich Islands" title="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                    <option value="South Sudan" title="South Sudan">South Sudan</option>
                                    <option value="Spain" title="Spain">Spain</option>
                                    <option value="Sri Lanka" title="Sri Lanka">Sri Lanka</option>
                                    <option value="Sudan" title="Sudan">Sudan</option>
                                    <option value="Suriname" title="Suriname">Suriname</option>
                                    <option value="Svalbard and Jan Mayen" title="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                    <option value="Swaziland" title="Swaziland">Swaziland</option>
                                    <option value="Sweden" title="Sweden">Sweden</option>
                                    <option value="Switzerland" title="Switzerland">Switzerland</option>
                                    <option value="Syrian Arab Republic" title="Syrian Arab Republic">Syrian Arab Republic</option>
                                    <option value="Taiwan, Province of China" title="Taiwan, Province of China">Taiwan, Province of China</option>
                                    <option value="Tajikistan" title="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania, United Republic of" title="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                    <option value="Thailand" title="Thailand">Thailand</option>
                                    <option value="Timor-Leste" title="Timor-Leste">Timor-Leste</option>
                                    <option value="Togo" title="Togo">Togo</option>
                                    <option value="Tokelau" title="Tokelau">Tokelau</option>
                                    <option value="Tonga" title="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago" title="Trinidad and Tobago">Trinidad and Tobago</option>
                                    <option value="Tunisia" title="Tunisia">Tunisia</option>
                                    <option value="Turkey" title="Turkey">Turkey</option>
                                    <option value="Turkmenistan" title="Turkmenistan">Turkmenistan</option>
                                    <option value="Turks and Caicos Islands" title="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                    <option value="Tuvalu" title="Tuvalu">Tuvalu</option>
                                    <option value="Uganda" title="Uganda">Uganda</option>
                                    <option value="Ukraine" title="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates" title="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom" title="United Kingdom">United Kingdom</option>
                                    <option value="United States" title="United States">United States</option>
                                    <option value="United States Minor Outlying Islands" title="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                    <option value="Uruguay" title="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan" title="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu" title="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela, Bolivarian Republic of" title="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option>
                                    <option value="Viet Nam" title="Viet Nam">Viet Nam</option>
                                    <option value="Virgin Islands, British" title="Virgin Islands, British">Virgin Islands, British</option>
                                    <option value="Virgin Islands, U.S." title="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                    <option value="Wallis and Futuna" title="Wallis and Futuna">Wallis and Futuna</option>
                                    <option value="Western Sahara" title="Western Sahara">Western Sahara</option>
                                    <option value="Yemen" title="Yemen">Yemen</option>
                                    <option value="Zambia" title="Zambia">Zambia</option>
                                    <option value="Zimbabwe" title="Zimbabwe">Zimbabwe</option>
                                </select>
                                <label for="phone">Phone Number <a style = "color:red">*</a></label><br>
                                <input type="text" name="add_phone" id="phone" placeholder="Phone Number" required data-validation-required-message="Please enter your phone" style="width: 50%" />
                            </div>
                        </div>

                        <br/>
                        <br/>

                        <div class="control-group IDForAddInfo">
                            <div class="controls">
                                <h4> Additional info </h4>
                                <label for="nationrepresenting">Nation representing<a style = "color:red">*</a></label>
                                <select name="national_represent" id="type">
                                    <option value="Please Select" disabled selected="selected">Please Select</option>
                                    <option value="indian">Indian</option>
                                </select>
                                <label for="dateofbirth" style="width: 100%;">Date of Birth<a style = "color:red">*</a></label>
                                <select name="dob_month" id="type" style="width: 30%;">
                                    <option value="Month" disabled selected="selected">Month</option>
                                    <option value="1">January</option>
                                    <option value="2">Febuary</option>
                                    <option value="3">March</option>
                                    <option value="4">April</option>
                                    <option value="5">May</option>
                                    <option value="6">June</option>
                                    <option value="7">July</option>
                                    <option value="8">August</option>
                                    <option value="9">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>&nbsp;&nbsp;&nbsp;&nbsp;
                                <select name="dob_day" id="type" style="width: 30%;">
                                    <option value="day" disabled selected="selected">Day</option>
                                    <option value="-">-</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                </select>&nbsp;&nbsp;&nbsp;&nbsp;
                                <select name="dob_year" id="type" style="width: 30%;">
                                    <option value="year" disabled selected="selected">Year</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                    <option value="2014">2014</option>
                                    <option value="2013">2013</option>
                                    <option value="2012">2012</option>
                                    <option value="2011">2011</option>
                                    <option value="2010">2010</option>
                                    <option value="2009">2009</option>
                                    <option value="2008">2008</option>
                                    <option value="2007">2007</option>
                                    <option value="2006">2006</option>
                                    <option value="2005">2005</option>
                                    <option value="2004">2004</option>
                                    <option value="2003">2003</option>
                                    <option value="2002">2002</option>
                                    <option value="2001">2001</option>
                                    <option value="2000">2000</option>
                                    <option value="1999">1999</option>
                                    <option value="1998">1998</option>
                                    <option value="1997">1997</option>
                                    <option value="1996">1996</option>
                                    <option value="1995">1995</option>
                                    <option value="1994">1994</option>
                                    <option value="1993">1993</option>
                                    <option value="1992">1992</option>
                                    <option value="1991">1991</option>
                                    <option value="1990">1990</option>
                                    <option value="1989">1989</option>
                                    <option value="1988">1988</option>
                                    <option value="1987">1987</option>
                                    <option value="1986">1986</option>
                                    <option value="1985">1985</option>
                                    <option value="1984">1984</option>
                                    <option value="1983">1983</option>
                                    <option value="1982">1982</option>
                                    <option value="1981">1981</option>
                                    <option value="1980">1980</option>
                                    <option value="1979">1979</option>
                                    <option value="1978">1978</option>
                                    <option value="1977">1977</option>
                                    <option value="1976">1976</option>
                                    <option value="1975">1975</option>
                                    <option value="1974">1974</option>
                                    <option value="1973">1973</option>
                                    <option value="1972">1972</option>
                                    <option value="1971">1971</option>
                                    <option value="1970">1970</option>
                                    <option value="1969">1969</option>
                                    <option value="1968">1968</option>
                                    <option value="1967">1967</option>
                                    <option value="1966">1966</option>
                                    <option value="1965">1965</option>
                                    <option value="1964">1964</option>
                                    <option value="1963">1963</option>
                                    <option value="1962">1962</option>
                                    <option value="1961">1961</option>
                                    <option value="1960">1960</option>
                                    <option value="1959">1959</option>
                                </select>
                                <br><label for="instagram">Instagram</label><br>
                                <input type="text" name="instagram" id="instagram" placeholder = "@username" required data-validation-required-message="Please enter your instagram user name"  />
                            </div>
                        </div>

                        <br/>
                        <br/>

                       <!-- <div class="control-group">
                            <div class="controls">
                                <h4> Benchmark workouts</h4>
                                <label for="fran" style="width:35%">Fran</label>
                                <label for="Helen" style="width:38%">Helen</label>
                                <label for="Grace" style="width:6%">Grace</label>
                                <input type="time" placeholder="MM:SS:mmm" id="time" required data-validation-required-message="Please enter your MM:SS::mmm" />
                                <input type="time" placeholder="MM:SS:mmm" id="time" required data-validation-required-message="Please enter your MM:SS::mmm" style="margin-left: 83px;"/>
                                <input type="time" placeholder="MM:SS:mmm" id="time" required data-validation-required-message="Please enter your MM:SS::mmm" style="margin-left: 96px;"/>
                            </div>
                        </div>

                        <br/>

                        <div class="control-group">
                            <div class="controls">
                                <label for="Filthy 50" style="width:35%">Filthy 50</label>
                                <label for="400m Run" style="width:38%">400m Run</label>
                                <label for="2k Row" style="width:6%">2k Row</label>
                                <input type="time" placeholder="MM:SS:mmm" id="time" required data-validation-required-message="Please enter your MM:SS::mmm" />
                                <input type="time" placeholder="MM:SS:mmm" id="time" required data-validation-required-message="Please enter your MM:SS::mmm" style="margin-left: 83px;"/>
                                <input type="time" placeholder="MM:SS:mmm" id="time" required data-validation-required-message="Please enter your MM:SS::mmm" style="margin-left: 96px;"/>
                            </div>
                        </div>

                        <br/>

                        <div class="control-group">
                            <div class="controls">
                                <label for="5K Run" style="width:35%">5K Run</label>
                                <label for="Max Pull Ups" style="width:38%">Max Pull Ups</label>
                                <label for="Fight Gone Bad" style="width:6%">Fight Gone Bad</label>
                                <input type="time" placeholder="MM:SS:mmm" id="time" required data-validation-required-message="Please enter your MM:SS::mmm" />
                                <input type="time" placeholder="MM:SS:mmm" id="time" required data-validation-required-message="Please enter your MM:SS::mmm" style="margin-left: 83px;"/>
                                <input type="time" placeholder="MM:SS:mmm" id="time" required data-validation-required-message="Please enter your MM:SS::mmm" style="margin-left: 96px;"/>
                            </div>
                        </div>

                        <br/>
                        <br/>

                        <div class="control-group">
                            <div class="controls">
                                <h4> Benchmark lifts</h4>
                                <label for="Clean&Jerk" style="width:35%">Clean & Jerk</label>
                                <label for="Snatch" style="width:33%">Snatch</label>
                                <label for="Press">Press</label>
                                <input type="text" placeholder="Weight" id="time" required data-validation-required-message="Please enter your Weight" style="margin-left: 0px;width: 26%"/>
                                <input type="text" placeholder="Weight" id="time" required data-validation-required-message="Please enter your Weight" style="margin-left: 48px;width: 28%""/>
                                <input type="text" placeholder="Weight" id="time" required data-validation-required-message="Please enter your Weight" style="margin-left: 27px;width:30%"/>
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="controls">
                                <label for="Deadlift" style="width:35%">Deadlift</label>
                                <label for="Back Squat" style="width:40%">Back Squat</label>
                                <input type="text" placeholder="Weight" id="time" required data-validation-required-message="Please enter your Weight" style="margin-left: 0px;width: 26%"/>
                                <input type="text" placeholder="Weight" id="time" required data-validation-required-message="Please enter your Weight" style="margin-left: 49px;width: 28%""/>
                            </div>
                        </div> -->

                        <br/>


                        <div class="control-group IDForAgreement">
                            <div class="checkbox">
                                <label>
                                  <input type="checkbox" value="">
                                  By registering to this event,you are agreeing to the IndiaThrow Down Online Challenge and Qualifier <b><font color = "red">liablity waiver and policies * </font></b>
                                </label>
                            </div>
                        </div>

                       <br/>

                        <div class="text-left IDForSaveChangesBtn">
                            <button class="button button-big button-dark" type="submit" id="save-button" style="color: white; background-color: green">Save Changes</button>
                        </div>

                         <!--<div class="control-group">
                            <div class="controls ">
                                <label for="type">TYPE</label><br>
                                <select name="type" id="type">
                                        <option value="" disabled selected="selected">Select type</option>
                                        <option value="Early Bird">Early Bird</option>
                                        <option value="Standart">Standart</option>
                                        <option value="Full Price">Full Price</option>
                                 </select>
                            </div>
                        </div>-->
                        <br/>
                        <br/>

                        <div class="text-left IDForPaymnetBtn">
                            <button id="rzp-button1" class="button button-big button-dark" style="color: white; background-color: red">Proceed To Payment</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="./js/main.js"></script>

    <link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet" />
    <link href="./jquery.multiselect.css" rel="stylesheet" />
    <!--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>-->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="./jquery.multiselect.js"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

    <script>
    $( document ).ready(function() {
        $('select[multiple]').multiselect({
            columns: 1,
            placeholder: 'Select Category',
            search: false,
            searchOptions: {
                'default': 'Search Category'
            },
            selectAll: false,
            maxSelect:2
        });

        //multiselect dynamic
        $("#ms-list-1 .ms-options").on('click',function(){
          var value = $("#ms-list-1 button span").text();
          var array = value.split(', ');
          var flag = value.includes("Fitness");

          if(array.length > 2) {
            alert("Maximum you can participate in any two Categories of sport, please select any two");
            //$(this).find('input').prop( "checked", false );
            //$(this).parent().find('button span').text('');
            //value = '';
            //array = [];
            //flag = false;
          }

          if(flag){
            IDForDivision.show();
          } else {
            IDForDivision.hide();
          }
        });

        console.log( "ready!" );
        IDForSportsCategoryA.hide();
        IDForSportsCategoryB.hide();
        IDForName.hide();
        IDForEmail.hide();
        IDForGender.hide();
        IDForDivision.hide();
        IDForAffiliate.hide();
        IDForEmergencyContact.hide();
        IDForTshirtSize.hide();
        IDForAddress.hide();
        IDForAddInfo.hide();
        IDForSaveChangesBtn.hide();
        IDForAgreement.hide();

        $("#ms-list-1").css('display','none');

        if(enablePaymentBtn){
          IDForPaymnetBtn.show();
          IDForSportsCategory.hide();
        }else{
          IDForPaymnetBtn.hide();
        }

    });

//Dynamic form logic
var IDForSportsCategory = $(".IDForSportsCategory").eq(1);
var IDForSportsCategoryA = $(".IDForSportsCategoryA");
var IDForSportsCategoryB = $(".IDForSportsCategoryB");
var IDForName = $(".IDForName");
var IDForEmail = $(".IDForEmail");
var IDForGender = $(".IDForGender");
var IDForDivision = $(".IDForDivision");
var IDForAffiliate = $(".IDForAffiliate");
var IDForEmergencyContact = $(".IDForEmergencyContact");
var IDForTshirtSize = $(".IDForTshirtSize");
var IDForAddress = $(".IDForAddress");
var IDForAddInfo = $(".IDForAddInfo");
var IDForSaveChangesBtn = $(".IDForSaveChangesBtn");
var IDForAgreement = $(".IDForAgreement");
var IDForPaymnetBtn = $(".IDForPaymnetBtn");
var enablePaymentBtn = false;
var payment = 100;

IDForSportsCategory.change(function() {
if ( IDForSportsCategory.val() === "Category A" ){
  //IDForSportsCategoryA.show();
  IDForSportsCategoryB.hide();
  IDForSportsCategoryA.eq(0).css('display','block');
  $("#ms-list-1").css('display','block');
  IDForAffiliate.show();
} else if ( IDForSportsCategory.val() === "Category B" ){
  IDForSportsCategoryA.eq(0).css('display','none');
  IDForSportsCategoryB.show();
  $("#ms-list-1").css('display','none');
  IDForAffiliate.hide();
}

$("#formContainer").show();
IDForName.show();
IDForEmail.show();
IDForGender.show();
IDForEmergencyContact.show();
IDForTshirtSize.show();
IDForAddress.show();
IDForAddInfo.show();
IDForSaveChangesBtn.show();
IDForAgreement.show();
//IDForPaymnetBtn.show();
});


// REGISTER FORM FUNCTION
document.getElementById('save-button').onclick = function() {

	'use strict';

	var CategoryM  = $("select[name='CategoryM']").val();
  if (CategoryM == 'Category A'){
    //Payment
    var sportsCount = $("select[name='CategoryA']").val().length;
    if(sportsCount == 1){
      payment = 200000;
    } else if (sportsCount == 2){
      payment = 400000;
    } else if (sportsCount == 3) {
      alert("Maximum you can participate in any two Categories of sport, please select any two");
      return false;
    }
    var CategoryA  = $("select[name='CategoryA']").val().toString();
  	var CategoryB  = "NA";
    var division  = $("select[name='division']").val();
  }else {
    var CategoryA  = "NA";
  	var CategoryB  = $("select[name='CategoryB']").val();
    var division  = "NA";
    payment = 100000;
  }

	var first_name  = $("input[name='first_name']").val();
  var last_name  = $("input[name='last_name']").val();
  var email  = $("input[name='email']").val();
  var gender  = $("input[name='gender']").val();

  var affiliate_box_gym  = $("input[name='affiliate_box_gym']").val();
  var em_contact_name  = $("input[name='em_contact_name']").val();
  var em_contact_no  = $("input[name='em_contact_no']").val();
  var apparel  = $("select[name='apparel']").val();
  var add_street  = $("input[name='add_street']").val();
  var add_city  = $("input[name='add_city']").val();
  var add_state  = $("input[name='add_state']").val();
  var add_zip_code  = $("input[name='add_zip_code']").val();
  var add_country  = $("select[name='add_country']").val();
  var add_phone  = $("input[name='add_phone']").val();
  var national_represent  = $("select[name='national_represent']").val();
  var dob_day  = $("select[name='dob_day']").val();
  var dob_month  = $("select[name='dob_month']").val();
  var dob_year  = $("select[name='dob_year']").val();
  var instagram  = $("input[name='instagram']").val();


		 //if ( name=="" ){ alert("name area is empty!"); $("#name").focus(); IDForPaymnetBtn.hide();}
	//else if ( email=="" ){ alert("email address area is empty!"); $("#email").focus(); IDForPaymnetBtn.hide();}
	//else if ( phone=="" ){ alert("phone number area is empty!"); $("#phone").focus(); IDForPaymnetBtn.hide();}
//	else if ( type=="" ){ alert("register type isn't selected!"); $("#type").focus(); IDForPaymnetBtn.hide();}
//	else {

/*
  	$.post("register-api.php", { CategoryM:CategoryM, CategoryA:CategoryA, CategoryB:CategoryB, first_name:first_name, last_name:last_name, email:email,
     gender:gender, division:division, affiliate_box_gym:affiliate_box_gym, em_contact_name:em_contact_name,
   em_contact_no:em_contact_no, apparel:apparel, add_street:add_street, add_city:add_city, add_state:add_state,
 add_zip_code:add_zip_code, add_country:add_country, add_phone:add_phone, national_represent:national_represent,
dob_day:dob_day, dob_month:dob_month, dob_year:dob_year, instagram:instagram}, function( result ){
			if ( result == "SUCCESS" ){
				alert("Your form is saved. Proceed with payment");
				setTimeout(function(){
					$("#name").val("");
					$("#email").val("");
					$("#phone").val("");
					$("#type").val("");

				},3000);
        enablePaymentBtn = true;
			} else {
				alert("Your form isn't saved. Please check fields and try again.");
			}
		});
*/
    var dataPayLoad = { CategoryM:CategoryM, CategoryA:CategoryA, CategoryB:CategoryB, first_name:first_name, last_name:last_name, email:email,
     gender:gender, division:division, affiliate_box_gym:affiliate_box_gym, em_contact_name:em_contact_name,
   em_contact_no:em_contact_no, apparel:apparel, add_street:add_street, add_city:add_city, add_state:add_state,
 add_zip_code:add_zip_code, add_country:add_country, add_phone:add_phone, national_represent:national_represent,
dob_day:dob_day, dob_month:dob_month, dob_year:dob_year, instagram:instagram};

    $.ajax({
      type: "POST",
      url: "register-api.php",
      data: dataPayLoad,
      cache: false,
      success: function(result) {
        if(data.status == 'success'){
          alert("Your form is saved. Proceed with payment");
        }else if(data.status == 'error'){
          alert("Error on query!");
        }

      },
      error: function (xmlHttpRequest, textStatus, errorThrown) {
         if(xmlHttpRequest.readyState == 0 || xmlHttpRequest.status == 0)
              return;  // it's not really an error
         else
              // Do normal error handling
              alert("Your form is saved. Proceed with payment");
              IDForPaymnetBtn.show();
        }
  });

  return false;

//	}

};

        document.getElementById('rzp-button1').onclick = function(e) {
          let options = {
              "key": "<?php echo $razor_pay_key; ?>",
              "amount": payment, // 2000 paise = INR 20
              "name": "Rover Fitness",
              "description": "Purchase Description",
              "image": "logo.png",
              "handler": function(response) {
                // alert(response.razorpay_payment_id);
                  if (typeof response.razorpay_payment_id == 'undefined' || response.razorpay_payment_id < 1) {
                      redirect_url = '/you-owe-money.html';
                  } else {
                      redirect_url = 'http://indiathrowdown.com/';
                  }
                  location.href = redirect_url;
              },
              "prefill": {
                  "name": "",
                  "email": ""
              },
              "theme": {
                  "color": "#F37254"
              }
          };

          var rzp1 = new Razorpay(options);
          rzp1.open();
          e.preventDefault();
        }
    </script>

<style>
    h2{
        text-transform: capitalize;
    }

    h4{
        text-transform: capitalize;
    }
</style>
</body>
