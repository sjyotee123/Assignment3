<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MultiStep Registration Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  
   
   <link rel="stylesheet" href="<?php echo base_url();?>assets/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  

</head>
<body>



        <form id="msform" action="UserController/index" method="post">

 





                <!-- progressbar -->





                <ul id="progressbar">
                    <li class="active">Company Details</li>
                    <li>Contact Details</li>
                    <li>SDG Details</li>
                    <li>Project Details</li>
                    <li>Achivements & Plans</li>
                </ul>
                <!-- fieldsets -->
                <fieldset>
                        <div class="row">
                <h2 class="fs-title">Company Details</h2>
                <div class="input-field col s6">
                        <input  id="companyname" type="text" name="companyname" class="validate">
                        <label for="companyname">Company Name</label>
                      </div>
                      <div class="input-field col s6">
                        <input id="companywebsite" type="text" class="validate" name="companywebsite">
                        <label for="companywebsite">Company Website</label>
                      </div>
                    </div>
                    <div class="row">
                            <div class="input-field col s12">
                              <textarea id="companydescription" class="materialize-textarea"></textarea>
                             <label for="companydescription">Company Description</label>
                            </div>
                          </div>

               <div class="row">
            <div class="input-field col s6">
              <input type="text" class="datepicker">
              <label for="dateofinception">Date Of Inception</label>
            </div>
            <div class="input-field col s6">
              <input id="cinnumber" type="text" class="validate" name="cinnumber">
              <label for="cinnumber">Cin Number</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input id="uamnumber" type="text" class="validate" name="uamnumber">
              <label for="uamnumber">Uam Number</label>
            </div>
            <div class="input-field col s12">
              <textarea id="address" class="materialize-textarea"></textarea>
             <label for="address">Address</label>
            </div>
            </div>
           
            <input type="button" name="next" class="next action-button " value="Next" />
                </fieldset>
                <fieldset>
                        <div class="row">
                                <h2 class="fs-title">Contact Details</h2>
                                <div class="container1">
                                <div class="input-field col s6">
                                        <input  id="founder" type="text"  name="founder" class="validate">
                                        <label for="founder">Founder</label>
                                      </div>
                                      <button class="add_form_field btn waves-effect waves-light">Add New Field &nbsp; 
                                            <i class="material-icons right">send</i> </button>
                                        </div>
                                    </div>
                                    <div class="row">
                                            <div class="input-field col s6">
                                              <input type="text" class="validate" name="contactperson">
                                              <label for="contactperson">Contact_person</label>
                                            </div>
                                        </div>
                                    
                                        <div class="row">
                                            <div class="container2">
                                                    <div class="input-field col s6">
                                                            <input  id="contactnumber" type="number"  name="contactnumber" class="validate">
                                                            <label for="contactnumber">Contact Number</label>
                                                          </div>
                                                          <button class="add_form_num btn waves-effect waves-light">Add New Field &nbsp; 
                                                                <i class="material-icons right">send</i> </button>
                                                            </div>
                                          </div>
                                          
               
                <input type="button" name="previous" class="previous action-button" value="Previous" />
                <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                        <div class="row">
                <h2 class="fs-title">SDG Details</h2>
                <div class="row">
                                <div class="input-field col s12">
                                        <select multiple>
                                          <option value="" disabled selected>Choose Your SDG</option>
                                          <option value="1">GOAL 1: No Poverty </option>
                                          <option value="2">GOAL 2: Zero Hunger </option>
                                          <option value="3">GOAL 3: Good Health and Well-being</option>
                                          <option value="3">GOAL 4: Quality Education</option>
                                          <option value="3">GOAL 5: Gender Equality</option>
                                          <option value="3">GOAL 6: Clean Water and Sanitation</option>
                                          <option value="3">GOAL 7: Affordable and Clean Energy</option>
                                          <option value="3">GOAL 8: Decent Work and Economic Growth</option>
                                          <option value="3">GOAL 9: Industry, Innovation and Infrastructure</option>
                                          <option value="3">GOAL 10: Reduced Inequality</option>
                                          <option value="3">GOAL 11: Sustainable Cities and Communities</option>
                                          <option value="3">GOAL 12: Responsible Consumption and Production</option>
                                          <option value="3">GOAL 13: Climate Action</option>
                                          <option value="3">GOAL 14: Life Below Water</option>
                                          <option value="3">GOAL 15: Life on Land</option>
                                          <option value="3">GOAL 16: Peace and Justice Strong Institutions</option>
                                          <option value="3">GOAL 17: Partnerships to achieve the Goal</option>
                                        </select>
                                        <label>SDG:</label>
                                      </div>
                      
                        
                      </div>
            </div>
            
                <input type="button" name="previous" class="previous action-button" value="Previous" />
                <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Project Details</h2>
                    <div class="file-field input-field">
                            <div class="btn">
                              <span> <i class="material-icons leftt">attach_file</i> File</span>
                              <input type="file" multiple>
                            </div>
                            <div class="row">
                                    <div class="input-field col s6">
                           
                              <input class="file-path validate" type="text" placeholder="Upload one or more files">
                              <label for="reports">Upload Project Reports</label>
                            </div>
                          </div>
                
                          </div>
                          <div class="file-field input-field">
                                <div class="btn">
                                  <span><i class="material-icons leftt">attach_file</i>Image</span>
                                  <input type="file" multiple>
                                </div>
                                <div class="row">
                                        <div class="input-field col s6">
                               
                                  <input class="file-path validate" type="text" placeholder="Upload images">
                                  <label for="reports">Upload Image</label>
                                </div>
                              </div>
                    
                              </div>
                              <div class="file-field input-field">
                                    <div class="btn">
                                      <span><i class="material-icons leftt">attach_file</i>Video</span>
                                      <input type="file" multiple>
                                    </div>
                                    <div class="row">
                                            <div class="input-field col s6">
                                   
                                      <input class="file-path validate" type="text" placeholder="Upload video">
                                      <label for="reports">Upload Video For Profiling</label>
                                    </div>
                                  </div>
                        
                                  </div>
                                  <div class="row">
                                        <div class="container1">
                                                <div class="input-field col s6">
                                                        <input  id="projectname" type="text"  name="projectname" class="validate">
                                                        <label for="projectname">Project Name</label>
                                                      </div>
                                                      <button class="add_form_field btn waves-effect waves-light">Add New Field &nbsp; 
                                                            <i class="material-icons right">send</i> </button>
                                                        </div>
                                                        </div>
                                      </div>
                                      <div class="row">
                                            <div class="container2">
                                                    <div class="input-field col s6">
                                                            <input  id="projectdescription" type="text"  name="projectdescription" class="validate">
                                                            <label for="projectdescription">Project Description</label>
                                                          </div>
                                                          <button class="add_form_num btn waves-effect waves-light">Add New Field &nbsp; 
                                                                <i class="material-icons right">send</i> </button>
                                                            </div>
                                                            </div>
                                          </div>
                    <input type="button" name="previous" class="previous action-button" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>
                    <fieldset>
                            <div class="row">
                                    <h2 class="fs-title">Achivements & Plans</h2>
                                    <div class="input-field col s6">
                                            <input  id="companyawards" type="text" name="companyawards" class="validate">
                                            <label for="companyawards">Company Awards</label>
                                          </div>
                                          </div>
                                          <div class="row">
                                                <div class="input-field col s6">
                                          <p>Choose Your Membership</p>
                                          <br>
                                          <p>
                                                <label>
                                                  <input name="membership" type="radio" />
                                                  <span>Free</span>
                                                </label>
                                              </p>
                                              <p>
                                                    <label>
                                                      <input name="membership" type="radio" />
                                                      <span>Gold</span>
                                                    </label>
                                                  </p>
                                                  </div>
                                                  </div>
                        <input type="button" name="previous" class="previous action-button" value="Previous" />
                        <input type="submit" name="submit" class="submit action-button" value="Submit" />
                        </fieldset>
                </form>
                
               <!-- jQuery --> 
               <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js "></script>
               <!-- jQuery easing plugin --> 
               <script src="<?php echo base_url();?>assets/js/jquery.easing.min.js"></script>
               <script>
                $(function() {
                
                //jQuery time
                var current_fs, next_fs, previous_fs; //fieldsets
                var left, opacity, scale; //fieldset properties which we will animate
                var animating; //flag to prevent quick multi-click glitches
                
                $(".next").click(function(){
                    if(animating) return false;
                    animating = true;
                    
                    current_fs = $(this).parent();
                    next_fs = $(this).parent().next();
                    
                    //activate next step on progressbar using the index of next_fs
                    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                    
                    //show the next fieldset
                    next_fs.show(); 
                    //hide the current fieldset with style
                    current_fs.animate({opacity: 0}, {
                        step: function(now, mx) {
                            //as the opacity of current_fs reduces to 0 - stored in "now"
                            //1. scale current_fs down to 80%
                            scale = 1 - (1 - now) * 0.2;
                            //2. bring next_fs from the right(50%)
                            left = (now * 50)+"%";
                            //3. increase opacity of next_fs to 1 as it moves in
                            opacity = 1 - now;
                            current_fs.css({'transform': 'scale('+scale+')'});
                            next_fs.css({'left': left, 'opacity': opacity});
                        }, 
                        duration: 800, 
                        complete: function(){
                            current_fs.hide();
                            animating = false;
                        }, 
                        //this comes from the custom easing plugin
                        easing: 'easeInOutBack'
                    });
                });
                
                $(".previous").click(function(){
                    if(animating) return false;
                    animating = true;
                    
                    current_fs = $(this).parent();
                    previous_fs = $(this).parent().prev();
                    
                    //de-activate current step on progressbar
                    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
                    
                    //show the previous fieldset
                    previous_fs.show(); 
                    //hide the current fieldset with style
                    current_fs.animate({opacity: 0}, {
                        step: function(now, mx) {
                            //as the opacity of current_fs reduces to 0 - stored in "now"
                            //1. scale previous_fs from 80% to 100%
                            scale = 0.8 + (1 - now) * 0.2;
                            //2. take current_fs to the right(50%) - from 0%
                            left = ((1-now) * 50)+"%";
                            //3. increase opacity of previous_fs to 1 as it moves in
                            opacity = 1 - now;
                            current_fs.css({'left': left});
                            previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
                        }, 
                        duration: 800, 
                        complete: function(){
                            current_fs.hide();
                            animating = false;
                        }, 
                        //this comes from the custom easing plugin
                        easing: 'easeInOutBack'
                    });
                });
                
                $(".submit").click(function(){
                    return false;
                })
                
                });
                </script>
                <script type="text/javascript">
                
                  var _gaq = _gaq || [];
                  _gaq.push(['_setAccount', 'UA-36251023-1']);
                  _gaq.push(['_setDomainName', 'jqueryscript.net']);
                  _gaq.push(['_trackPageview']);
                
                  (function() {
                    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
                  })();
                
                </script>
                <script>
                
                $(document).ready(function() {
    var max_fields = 10;
    var wrapper = $(".container1");
    var add_button = $(".add_form_field");
    var x = 1;
    $(add_button).click(function(e) {
        e.preventDefault();
        if (x < max_fields) {
            x++;
            $(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="delete">Delete</a></div>'); //add input box
        } else {
            alert('You Reached the limits')
        }
    });
    $(wrapper).on("click", ".delete", function(e) {
        e.preventDefault();
        $(this).parent('div').remove();
        x--;
    })
});
$(document).ready(function() {
    var max_fields = 10;
    var wrapp = $(".container2");
    var add_butt = $(".add_form_num");
    var y = 1;
    $(add_butt).click(function(e) {
        e.preventDefault();
        if (y < max_fields) {
            y++;
            $(wrapp).append('<div><input type="number" name="mytext"/><a href="#" class="delete">Delete</a></div>'); //add input box
        } else {
            alert('You Reached the limits')
        }
    });
    $(wrapp).on("click", ".delete", function(e) {
        e.preventDefault();
        $(this).parent('div').remove();
        y--;
    })
});
$(document).ready(function(){
    $('select').formSelect();
  });
        
                </script>
  
 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="<?php echo base_url();?>assets/register.js"></script>
 <?php echo form_close(); ?>
</body>
</html>