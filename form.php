<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agency - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Aleo" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/form.css" rel="stylesheet">
</head>
<body id="page-top">
    <!-- Navigation -->
    <div class="navbarcontainer">
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
          <a class="navbar-brand js-scroll-trigger" href="#page-top">Start Bootstrap</a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#services">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#team">Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <?php
        session_start();
        if(isset($_POST['login'])){
           echo "<div class=\"header\">
                    <div class=\"headercontent\">
                      <span>
                          <table>
                              <tr>
                                  <td>Candidate Name: Aniket Kumar <br> </td>
                                  <td rowspan=\"2\"><button type=\"submit\" class=\"logout\" name=\"logut\">Logout</button></td>
                              </tr>
                              <tr>
                                  <td>Application Number: 123456789</td>
                              </tr>
                          </table>
                      </span>
                    </div>
                  </div>
            <div class=\"formcontainer\">
                <div class=\"personaldtails-title\"><b>Personal Details</b></div>
                <div class=\"personaldeatails\">
                  Post Appllied For:<br>
                  <b> Software Engineer
                  <table>
                    <tr>
                      <td><b>Name of the Candidate:*</td>
                      <td><b>Mobile No.</td>
                      <td>Email</td>
                    </tr>
                    <tr>
                      <td><input type=\"text\" class=\"input\" name=\"name\"  required></td>
                      <td><input type=\"text\" class=\"input\" name=\"phone\"  required></td>
                      <td><input type=\"text\" class=\"input\" name=\"email\"  required></td>
                    </tr>
                    <tr>
                      <td><b>Gender</td>
                      <td><b>Date of Birth</td>
                      <td>Age as of Now:</td>
                    </tr>
                    <tr>
                      <td><input type=\"text\" class=\"input\" name=\"gender\"  required></td>
                      <td><input type=\"text\" class=\"input\" name=\"dob\"  required></td>
                      <td><input type=\"text\" class=\"input\" name=\"page\"  required></td>
                    </tr>
                    <tr>
                      <td><b>Father's Name*</td>
                      <td><b>Mother's Name*</td>
                      <td>Marital Status</td>
                    </tr>
                    <tr>
                      <td><input type=\"text\" class=\"input\" name=\"fname\" required></td>
                      <td><input type=\"text\" class=\"input\" name=\"mname\" required></td>
                      <td>
                        <select name=\"Marital[]\"  style=\"-webkit-appearance: none\";>
                          <option value=\"select\">--Select--</option>
                          <option value=\"Maried\">Maried</option>
                          <option value=\"Unmaried\">Unmaried</option>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <td><b>Religion*</td>
                      <td><b>Nationality*</td>
                      <td>Domicile Place*</td>
                    </tr>
                    <tr>
                      <td><input type=\"text\" class=\"input\" name=\"religion\" required></td>
                      <td><input type=\"text\" class=\"input\" name=\"nationality\" required></td>
                      <td><input type=\"text\" class=\"input\" name=\"domicile\" required></td>
                    </tr>
                  </table>
                </div>
                <div class=\"personaldtails-title\"><b>Address Details</b></div>
                <div class=\"address\">
                  <table>
                    <tr>
                        <td><b>Address Line1*</td>
                        <td><b>Address Line2*</td>
                        <td><b>Address Line3*</td>
                      </tr>
                      <tr>
                        <td><input type=\"text\" class=\"input-address\" name=\"adress\" required></td>
                        <td><input type=\"text\" class=\"input-address\" name=\"adress\" required></td>
                        <td><input type=\"text\" class=\"input-address\" name=\"adress\" required></td>
                      </tr>
                      <tr>
                        <td><b>State*</td>
                        <td><b>City*</td>
                        <td>Pincode*</td>
                      </tr>
                      <tr>
                        <td><input type=\"text\" class=\"input\" name=\"state\" required></td>
                        <td><input type=\"text\" class=\"input\" name=\"city\" required></td>
                        <td><input type=\"number\" class=\"input\" name=\"pincode\" required></td>
                      </tr>
                  </table>
                </div>
                <div class=\"personaldtails-title\"><b>Education Qualification</b></div>
                <div class=\"education\">
                  <table cellpadding=\"5\">
                    <tr>
                      <th>Education Qualification</th>
                      <th>Course Name</th>
                      <th>Stream/Major</th>
                      <th>Board/Institution</th>
                      <th>Percentage</th>
                      <th>Class</th>
                      <th>Year Of Passing</th>
                      <th>Mode of Study</th>
                    </tr>
                    <tr>
                      <td>Intermediate</td>
                      <td><input type=\"text\" name=\"icourse\" class=\"marks\" required></td>
                      <td><input type=\"text\" name=\"istream\" class=\"marks\" required></td>
                      <td><input type=\"text\" name=\"iboard\" class=\"marks\" required></td>
                      <td><input type=\"text\" name=\"imarks\" class=\"marks\" required></td>
                      <td>
                        <select name=\"iclass[]\"  style=\"-webkit-appearance: none\";>
                            <option value=\"select\">--Select--</option>
                            <option value=\"First\">First</option>
                            <option value=\"Second\">Second</option>
                            <option value=\"Third\">Third</option>
                          </select>
                      </td>
                      <td><input type=\"text\" name=\"iyear\" class=\"marks\" required></td>
                      <td><input type=\"text\" name=\"imode\" class=\"marks\" required></td>
                    </tr>
                    <tr>
                      <td>Graduation</td>
                      <td><input type=\"text\" name=\"gcourse\" class=\"marks\" required></td>
                      <td><input type=\"text\" name=\"gstream\" class=\"marks\" required></td>
                      <td><input type=\"text\" name=\"gboard\" class=\"marks\" required></td>
                      <td><input type=\"text\" name=\"gmarks\" class=\"marks\" required></td>
                      <td>
                        <select name=\"gclass[]\"  style=\"-webkit-appearance: none\";>
                            <option value=\"select\">--Select--</option>
                            <option value=\"First\">First</option>
                            <option value=\"Second\">Second</option>
                            <option value=\"Third\">Third</option>
                        </select>
                      </td>
                      <td><input type=\"text\" name=\"gyear\" class=\"marks\" required></td>
                      <td><input type=\"text\" name=\"gmode\" class=\"marks\" required></td>
                    </tr>
                  </table>
                </div>
            </div>";
        }
        else{
            header("Location: http://localhost/php/index.php");
            
        }
    ?>
</body>
</html>