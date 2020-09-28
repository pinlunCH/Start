<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Start(); -We Want you!</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/wide.css">
    <link rel="stylesheet" href="animate.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&family=Roboto:wght@700&family=Source+Serif+Pro:wght@400;600;700&display=swap" rel="stylesheet">
    <body>
    <?php
    if(isset($_GET["file"]))
    {
    ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
    Invalid Format For Resume, Please Try Again!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
    <?php
    }
    ?>
<div class="container-fluid wrapper">
    <div class="row">
        <div class="col-sm-12 space">
            <div class="header">
                <h1 id="siteLogo">Start();</h1>
                <a href="#applynow" class="no-hover fixBtn source">Apply Now</a>
            </div>
        </div>    
    </div>
    <div class="row homeRibben">
        <div class="col-sm-12 col-md-12 col-lg-7 col-xl-7 imgcol">
            <img class="imgSize" src="imgs/homeImg-04.png" alt="hiring">            
        </div>
        <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5 homeText">
            <p class="roboto noMargin">#10 BEST COMPANIES TO WORK FOR</p>
            <h3 class="headerS noMargin">We’re looking for</h3>
            <h2 class="headerM">Front End Developer</h2>
            <img id="location" src="imgs/icon.png" alt="Front end developer"><p class="inlineBlock source">Vancouver, Canada</p>
            <p class="source fontColor">As a Front-End Developer, you’ll support the planning and 
                development of web and mobile platforms, products, and 
                UI systems, producing deliverables that bring the UX and 
                Design group’s work to life through interaction and motion.</p>
            <div class="dAction"><a class="callAction source no-hover" href="#applynow">Apply Now</a></div>
        </div>
    </div>
    <div class="row reqRibben rowCenter">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="group">
                <div class="title source inlineBlock">
                    <h3 class="noMargin reqtitle">Requirement</h3>
                    <img class="titledec" src="imgs/titledec.png" alt="vancouver hiring">
                </div>
            </div>    
            <div class="textBoxs">
                <div class="textBox">
                    <img class="dot" src="imgs/dot.png" alt="#10 Best COMPANIES to work for">
                    <p>Recent CS program grads, candidates with 1-2 years 
                        experience, or self taught engineers with strong portfolios 
                        are welcome to apply</p>
                </div>
                <div class="textBox">
                    <img class="dot" src="imgs/dot.png" alt="#10 Best COMPANIES to work for">
                    <p>Knowledge of JavaScript including ReactJS, Vue.js, and JQuery  </p>
                </div>
                <div class="textBox">
                    <img class="dot" src="imgs/dot.png" alt="#10 Best COMPANIES to work for">
                    <p>Familiarity with CMS (WordPress) and static site generators 
                        (Statamic, Gatsby, Middleman)</p>
                </div>
                <div class="textBox">
                    <img class="dot" src="imgs/dot.png" alt="#10 Best COMPANIES to work for">
                    <p>Confidence in following design systems and detail-oriented 
                        design direction</p>
                </div>

            </div>
        </div> 
    </div>
    <div class="row quaRibben">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="group">
                <div class="title source inlineBlock">
                    <h3 class="noMargin reqtitle">Qualification</h3>
                    <img class="titledec" src="imgs/titledec02.png" alt="vancouver hiring">
                </div>
            </div>    
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 illbox">
                    <img src="imgs/iubox1.png" alt="hiring">
                    <div class="illtext source">Creative & 
                        Problem-solver</div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 illbox">
                    <img src="imgs/iubox2.png" alt="hiring">
                    <div class="illtext source">Team Player</div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 illbox">
                    <img src="imgs/iubox3.png" alt="hiring">
                    <div class="illtext source">Time Management</div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 illbox">
                    <img src="imgs/iubox4.png" alt="hiring">
                    <div class="illtext source">Detailed Oriented</div>
                </div>               
            </div>
        </div> 
    </div>
    <div class="row benRibben">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="group">
                <div class="title source inlineBlock">
                    <h3 class="noMargin reqtitle">Benefits</h3>
                    <img class="titledec bentitledec" src="imgs/titledec.png" alt="vancouver hiring">
                </div>
            </div>    
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 illbox">
                    <img src="imgs/iubox5.png" alt="hiring">
                    <div class="illtext source">Health, dental, 
                        and vision coverage</div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 illbox">
                    <img src="imgs/iubox6.png" alt="hiring">
                    <div class="illtext source">Unlimited access 
                        to fitness center & 
                        Office buffet keep a 
                        balanced diet  </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 illbox">
                    <img src="imgs/iubox7.png" alt="hiring">
                    <div class="illtext source">Team building 
                        activities</div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 illbox">
                    <img src="imgs/iubox8.png" alt="hiring">
                    <div class="illtext source">Monthly birthday 
                        and Holiday parties</div>
                </div>
            </div>
        </div> 
    </div>
    <div class="row yesRibben">
        <div class="col-sm-12 col-md-12 col-lg-7 col-xl-7">
            <img class="org" src="imgs/photo-1557425493-6f90ae4659fc.jpeg" alt="">        
        </div>
        <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5 gluepare">
            <div class="glue">
                <h2 class="source noMargin yesText">And yes</h2>
                <h2 class="source noMargin yesText">We want you to</h2>
                <h2 class="source noMargin yesText">Join this big family.</h2>
                <div class="dAction ction"><a class="callAction secondaryAaction source no-hover" href="https://www.vanarts.com/">About <span class="mono">Start();</span></a></div>
                <div class="dAction ction"><a class="callAction source no-hover" href="#applynow">Apply Now</a></div>
            </div>
        </div>
    </div>
    <div class="row fillForm">            
        <h2 class="source noMargin yesText tell">Tell us about you!</h2>
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 formRibben glueparej">
            <div class="handle">
                <div class="pictureBox"></div>
                <div class="theform" id="applynow">
                    <form method="post" id="form" enctype="multipart/form-data" action="saveApp.php">
                        <div class="errMsg">Please fill all the field</div>
                        <div class="field source" data-required="ture">
                            <label>Name</label>
                            <input type="text" name="name">
                        </div>
                        <div class="field source" data-required="ture">
                            <label>Email</label>
                            <input type="text" name="email">
                        </div>
                        <div class="field source" data-required="ture">
                            <label>Portfolio Link (url)</label>
                            <input type="text" name="link">
                        </div>
                        <div class="field source" data-required="ture" >
                            <label>Resume(pdf)</label>
                            <input type="file" id="fieldFile" name="upfile">
                        </div>
                        <div class="field source">
                            <label>Tell us more about yourself</label>
                            <textarea name="intro" id="" cols="30" rows="10" ></textarea>
                        </div>
                        <div class="dAction formBtn"><input class="callAction source no-hover" type="submit" value="Apply Now"></div>
                    </form>
                </div>
            </div>    
        </div>
    </div>
    <div class="row footer">
        <div class="mono">&copy;	Start();</div>
    </div>
</div>
    <script src="js/validator.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>    
</body>
</html>