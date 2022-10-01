<html>
 <head>
  <title>SIM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Launch Simulation">
  <meta name="Mohammed Zakaria" content="">
  <script type='text/javascript' src='https://www.x3dom.org/download/x3dom.js'> </script>
  <link rel='stylesheet' type='text/css' href='https://www.x3dom.org/download/x3dom.css'></link>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link rel='stylesheet' type='text/css' href='x3dom.css'>
   <link rel='stylesheet' type='text/css' href='media/css/examples.css'>
  <link rel='stylesheet' type='text/css' href='media/font/orbitron.css'>
  <script>document.write('<script src="script.js?dev=' + Math.floor(Math.random() * 100) + '"\><\/script>');</script>
   <style>
  body{
   background-image: url('./backzip.jpg');
   background-repeat: no-repeat;
   background-size: 1366px 658px;
   }
   h5 {
       background-color:#00BFFF;
       padding: 5px;
       border-radius: 4px;
   }
   .swal-overlay {
      background-color: rgba(255, 10, 10, 0.45);
}
   .swal-modal {
      background-color: rgba(63,106,255,0.89);
      border: 3px solid white;
      color: #fff;
}
   .swal-title {
      background-color: #FEFAE3;
      margin: 0px;
      font-size: 22px;
      box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.21);
      margin-bottom: 28px;
}
   .swal-text {
      padding: 17px;
      font-size: 18px;
      display: block;
      margin: 22px;
      text-align: center;
      color: #fff;
}
   .swal-button {
      padding: 7px 12px;
      border-radius: 2px;
      background-color: #f00;
      font-size: 12px;
      border: 1px solid #3e549a;
      text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.3);
}
.quiz {
    padding:10px;
    background-color: #e00;
    color: #fff;
    font-size: 20px;
    border-radius:5px;
}
.feedform {
    padding:10px;
    background-color: #f2f2f2;
    color: #000000;
    font-size: 18px;
    border-radius:2px;
}
.but{
    border:none;
    margin-top: 10px;
    border-radius: 5px;
    background-color: #f00;
    color: #fff;
    font-size: 20px;
}
input[type=text]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
.ops{
   color: #708090;
}
.select2-results__option {
  background-color: #000;
  color: gold;
}
.select2-container--default .select2-results__option--highlighted[aria-selected] {
  background-color: #000;
  color: white;
}
table {
  border: 1px solid #ddd;
  font-size: 18px;
  cursor: pointer;
  white-space: nowrap;
}

th {
  text-align: left;
  width: 300px;
  background-color: #f00;
  color: #000;
  font-size: 20px;
  padding: 7px;
  border: 1px solid #bbb;
}

th:hover {
    color: #F5F5F5; 
}

td {
  padding: 6px;
  border: 1px solid #bbb;
  text-align: left;
}

table tr:hover {background-color: #ddd;}

tr:nth-child(even) {
  background-color: #f00;
}
tr:nth-child(odd) {
  background-color: #fff;
}
</style>
<script>
  $( function() {
    $( "#accordion" ).accordion();
  } );
  
    $("#role").select2({
          placeholder: "role", 
          minimumResultsForSearch: -1, 
          width:'200px',
          allowClear: true
      }).on('select2:open', function(e){
        $('.select2-dropdown').hide();
        setTimeout(function(){
          jQuery('.select2-dropdown').slideDown('slow');
        }, 0);
      });
      $("#nest").select2({
          placeholder: "nest", 
          minimumResultsForSearch: -1, 
          width:'200px',
          allowClear: true
      }).on('select2:open', function(e){
        $('.select2-dropdown').hide();
        setTimeout(function(){
          jQuery('.select2-dropdown').slideDown('slow');
        }, 0);
      });
  </script>
 </head>
 <body>
  <div id="ex1" style="display: none;">
  <form id="quiz1" name="quiz1">
  <div class="quiz">
  <h4>What is the maximum payload that the zip can carry?</h4>
  <input type="radio" id="a1" name="q1" value="1">3.30kg<br>
  <input type="radio" id="a2" name="q1" value="2">1.75kg<br>
  <input type="radio" id="a3" name="q1" value="3">1.00kg<br>
  <input type="radio" id="a4" name="q1" value="4">2.90kg<br>
  </div>
  <a style="text-decoration:none;" rel="modal:close"><button type="button" class="but" onclick="sub1();">Submit</button></a>
</form>
</div>
 <div id="ex2" style="display: none;">
  <form id="quiz2" name="quiz2">
  <div class="quiz">
  <h4>How many checks does the loader perform on a package?</h4>
  <input type="radio" id="b1" name="q2" value="1">One<br>
  <input type="radio" id="b2" name="q2" value="2">Two<br>
  <input type="radio" id="b3" name="q2" value="3">Three<br>
  <input type="radio" id="b4" name="q2" value="4">Four<br>
  </div>
  <a style="text-decoration:none;" rel="modal:close"><button type="button" class="but" onclick="sub2();">Submit</button></a>
</form>
</div>
<div id="ex3" style="display: none;">
  <form id="quiz3" name="quiz3">
  <div class="quiz">
  <h4>Which of these represents how to carry sparrow?</h4>
  <input type="radio" id="b1" name="q3" value="1">One hand on the hatch foam and another on the tail boom<br>
  <input type="radio" id="b2" name="q3" value="2">One hand on the launch ribs and another on the tail boom<br>
  <input type="radio" id="b3" name="q3" value="3">One hand on the front handle and another on the tail fins<br>
  <input type="radio" id="b4" name="q3" value="4">One hand on the front handle and another on the tail boom<br>
  </div>
  <a style="text-decoration:none;" rel="modal:close"><button type="button" class="but" onclick="sub3();">Submit</button></a>
</form>
</div>
<div id="ex4" style="display: none;">
  <form id="quiz4" name="quiz4">
  <div class="quiz">
  <h4>What is the function of the sparrow wing?</h4>
  <input type="radio" id="b1" name="q4" value="1">It provides lift and controls attitude of the zip through control surfaces<br>
  <input type="radio" id="b2" name="q4" value="2">It provides thrust and controls latitude of the zip through control surfaces<br>
  <input type="radio" id="b3" name="q4" value="3">It provides aerodynamic drag and controls attitude of the zip through control surfaces<br>
  <input type="radio" id="b4" name="q4" value="4">It provides weight and controls mass of the zip through control surfaces<br>
  </div>
  <a style="text-decoration:none;" rel="modal:close"><button type="button" class="but" onclick="sub4();">Submit</button></a>
</form>
</div>
<div id="ex5" style="display: none;">
  <form id="quiz5" name="quiz5">
  <div class="quiz">
  <h4>All the following are functions of the sparrow battery except?</h4>
  <input type="radio" id="b1" name="q5" value="1">It powers the zip<br>
  <input type="radio" id="b2" name="q5" value="2">It stores operating instructions<br>
  <input type="radio" id="b3" name="q5" value="3">It houses the LOS antenna<br>
  <input type="radio" id="b4" name="q5" value="4">It saves logs from flight<br>
  </div>
  <a style="text-decoration:none;" rel="modal:close"><button type="button" class="but" onclick="sub5();">Submit</button></a>
</form>
</div>
<div id="ex6" style="display: none;">
  <form id="quiz6" name="quiz6">
  <div class="quiz">
  <h4>The nose cone insulates and protects the battery?</h4>
  <input type="radio" id="b1" name="q6" value="1">true<br>
  <input type="radio" id="b2" name="q6" value="2">false<br>
  </div>
  <a style="text-decoration:none;" rel="modal:close"><button type="button" class="but" onclick="sub6();">Submit</button></a>
</form>
</div>
<div id="ex7" style="display: none;">
  <form id="quiz7" name="quiz7">
  <div class="quiz">
  <h4>Which of the following is/are true about the first checking of the propulsion system?</h4>
  <p>I. Ensure the motor pod is securely fastened to the pylon</p>
  <p>II. Ensure the pylon is securely attached to the tailboom</p>
  <p>III. Prop should be clear of any slices or cuts</p>
  <P>IV. It is performed by the launch operator</p>
  <p>V. It is performed by the loader</p>
  <input type="radio" id="b1" name="q7" value="1">I, III, and V<br>
  <input type="radio" id="b2" name="q7" value="2">I, II, III and V<br>
  <input type="radio" id="b3" name="q7" value="3">II, III, IV, V<br>
  <input type="radio" id="b4" name="q7" value="4">All the above<br>
  </div>
  <a style="text-decoration:none;" rel="modal:close"><button type="button" class="but" onclick="sub7();">Submit</button></a>
</form>
</div>
<div id="ex8" style="display: none;">
  <form id="quiz8" name="quiz8">
  <div class="quiz">
  <h4>The second checking of the propulsion system is done by the loader?</h4>
  <input type="radio" id="b1" name="q8" value="1">true<br>
  <input type="radio" id="b2" name="q8" value="2">false<br>
  </div>
  <a style="text-decoration:none;" rel="modal:close"><button type="button" class="but" onclick="sub8();">Submit</button></a>
</form>
</div>
<div id="ex9" style="display: none;">
  <form id="quiz9" name="quiz9">
  <div class="quiz">
  <h4>Who does the walkaround checks?</h4>
  <input type="radio" id="b1" name="q9" value="1">Loader<br>
  <input type="radio" id="b2" name="q9" value="2">Launch Operator<br>
  </div>
  <a style="text-decoration:none;" rel="modal:close"><button type="button" class="but" onclick="sub9();">Submit</button></a>
</form>
</div>
<div id="ex10" style="display: none;">
  <form id="quiz10" name="quiz10">
  <div class="quiz">
  <h4>All the following are checked during walkaround checks except?</h4>
  <input type="radio" id="b1" name="q10" value="1">Voltage: between 680V - 700V<br>
  <input type="radio" id="b2" name="q10" value="2">Nose: flush and secure<br>
  <input type="radio" id="b3" name="q10" value="3">Launch ribs: seated and secure<br>
  <input type="radio" id="b4" name="q10" value="4">Launcher: inclined and facing south<br>
  <input type="radio" id="b5" name="q10" value="5">Tailhook: aligned<br>
  </div>
  <a style="text-decoration:none;" rel="modal:close"><button type="button" class="but" onclick="sub10();">Submit</button></a>
</form>
</div>
<div id="ex11" style="display: none;">
  <form id="quiz11" name="quiz11">
  <div class="quiz">
  <h4>Why do we do control surface checks?</h4>
  <input type="radio" id="b1" name="q11" value="1">To reduce aerodynamic drag<br>
  <input type="radio" id="b2" name="q11" value="2">To ensure control surfaces can deflect to the appropriate angles<br>
  <input type="radio" id="b3" name="q11" value="3">To ensure even distribution of weight across the zip<br>
  <input type="radio" id="b4" name="q11" value="4">To ensure the zip is not loaded beyond limit<br>
  </div>
  <a style="text-decoration:none;" rel="modal:close"><button type="button" class="but" onclick="sub11();">Submit</button></a>
</form>
</div>
<div id="ex12" style="display: none;">
  <form id="quiz12" name="quiz12">
  <div class="quiz">
  <h4>All the following are checked during critical checks except?</h4>
  <input type="radio" id="b1" name="q12" value="1">Current<br>
  <input type="radio" id="b2" name="q12" value="2">Voltage<br>
  <input type="radio" id="b3" name="q12" value="3">Nose<br>
  <input type="radio" id="b4" name="q12" value="4">Launch ribs<br>
  <input type="radio" id="b4" name="q12" value="5">Tailfins<br>
  </div>
  <a style="text-decoration:none;" rel="modal:close"><button type="button" class="but" onclick="sub12();">Submit</button></a>
</form>
</div>
<div id="ex13" style="display: none;">
  <form id="quiz13" name="quiz13">
  <div class="quiz">
  <h4>As a launch operator, you are required to check the following before asking for clearance except?</h4>
  <input type="radio" id="b1" name="q13" value="1">Landscape<br>
  <input type="radio" id="b2" name="q13" value="2">Airspace<br>
  <input type="radio" id="b3" name="q13" value="3">Launch area<br>
  <input type="radio" id="b4" name="q13" value="4">Wind direction<br>
  </div>
  <a style="text-decoration: none;" rel="modal:close"><button type="button" class="but" onclick="sub13();">Submit</button></a>
</form>
</div>
<div id="ex14" style="display: none;">
  <form id="quiz14" name="quiz14">
  <div class="quiz">
  <h4>What is the right script the launch operator uses to ask for clearance from the controller?</h4>
  <input type="radio" id="b1" name="q14" value="1">Zipline ### seeking for launch, airspace is clear, land area is clear, headwind/tailwind/crosswind<br>
  <input type="radio" id="b2" name="q14" value="2">Zipline ### request for clearance, airspace is clear, launch area is clear, headwind/tailwind/crosswind<br>
  <input type="radio" id="b3" name="q14" value="3">Zipline ### request for launch, airspace is clear, launch area is clear, headwind/tailwind/crosswind<br>
  <input type="radio" id="b4" name="q14" value="4">Zipline ### request for launcher, airspace is clear, launch area is clear, frontwind/backwind/crosswind<br>
  </div>
  <a style="text-decoration: none;" rel="modal:close"><button type="button" class="but" onclick="sub14();">Submit</button></a>
</form>
</div>
<div id="ex15" style="display: none;">
  <form id="quiz15" name="quiz15">
  <div class="quiz">
  <h4>The launch operator can go ahead and launch the zip even when the controller has not given clearance?</h4>
  <input type="radio" id="b1" name="q15" value="1">true<br>
  <input type="radio" id="b2" name="q15" value="2">false<br>
  </div>
  <a style="text-decoration:none;" rel="modal:close"><button type="button" class="but" onclick="sub15();">Submit</button></a>
</form>
</div>
<div id="feedback" style="display: none;">
  <form id="feed" name="feeds">
  <div class="feedform">
  <h3 style="color:#8B0000; font-weight: bolder; padding: 10x 5px;">Feedback Form</h3>
  <div class="ops">
  <label for="name" style="color:#48D1CC; font-weight: bolder;padding: 10x 5px;">Name (Optional)</label>
  <input type="text" id="yname" name="yname" style="width:320px; height:26px; border-radius:5px;"><br>
  
  <label for="role" style="color:#48D1CC; font-weight: bolder;padding: 5px 5px;">Role</label>
  <select id="role" class="js-states form-control" name="role" style="width: 200px; padding:5px 2px;">
    <option>Flight Operator</option>
    <option>Fulfillment Operator</option>
    <option>Other</option>
  </select>
  <br>
  
  <label for="nest" style="color:#48D1CC; font-weight: bolder;padding: 5px 5px;">Nest</label>
  <select id="nest" class="js-states form-control" name="nest" style="width: 200px; padding:5px 2px;">
    <option>RW-1</option>
    <option>RW-2</option>
    <option>GH-1</option>
    <option>GH-2</option>
    <option>GH-3</option>
    <option>GH-4</option>
    <option>GH-5</option>
    <option>GH-6</option>
    <option>GH-7</option>
    <option>GH-8</option>
    <option>KD-1</option>
    <option>KD-2</option>
    <option>KD-3</option>
    <option>CR-1</option>
    <option>CR-2</option>
  </select>
  <br>
  <label for="comms" style="color:#48D1CC; font-weight: bolder; padding: 10px 5px;">Comments</label><br>
  <textarea id="comments" name="comments" rows="4" cols="20" style="width:420px; ">
  </textarea>
  </div>
  </div>
  <button type="button" id="sub" class="but" style="background-color:#00FF7F;" onclick="feedback();">Submit</button>
  <button type="button" class="but" style="background-color:#FF0000; float: right;"><a rel="modal:close">Close</a></button>
</form>
</div>

<div id="result" style="display: none;">
    <table style="width:445px;">
        <thead>
            <th>Score</th>
            <th>Time</th>
        </thead>
        <tbody></tbody>
    </table>
    <button type="button" class="but" style="background-color:#ff0000;text-decoration: none;"><a rel="modal:close">Close</a></button>
</div>

<div id="help" style="display: none;">
<div id="accordion">
  <h5>Select</h5>
  <div style="padding-bottom: 30px; color: #FF1493;">
    <p>
    Click on this button to take you to the drop mech viewpoint. Click on drop mech to open it.
    </p>
  </div>
  <h5>Package</h5>
  <div style="padding-bottom: 30px; color: #FF1493;">
    <p>
    Click on this button to take you to the package viewpoint. Click on package to move it to body.
    </p>
  </div>
  <h5>Body</h5>
  <div style="padding-bottom: 30px; color: #FF1493;">
    <p>
    Click on this button to take you to the body viewpoint. Click on tailfin or tailboom to move body to carriage.
    </p>
  </div>
  <h5>Props</h5>
  <div style="padding-bottom: 30px; color: #FF1493;">
    <p>
    Click on this button to take you to the propulsion system viewpoint. Click on motor pod to check propulsion system.
    </p>
  </div>
  <h5>Wing</h5>
  <div style="padding-bottom: 30px; color: #FF1493;">
    <p>
    Click on this button to take you to the wing viewpoint. Click on wing to insert it on the selected body.
    </p>
  </div>
  <h5>Battery</h5>
  <div style="padding-bottom: 30px; color: #FF1493;">
    <p>
    Click on this button to take you to the battery viewpoint. Click on battery to insert it on the selected body.
    </p>
  </div>
  <h5>Nose</h5>
  <div style="padding-bottom: 30px; color: #FF1493;">
    <p>
Click on this button to take you to the nose cone viewpoint. Click on nose cone to insert it on the selected body.
    </p>
  </div>
  <h5>Checks</h5>
  <div style="padding-bottom: 30px; color: #FF1493;">
    <p>
    Click on this button to do walkaround checks, control surface check and critical check.
    </p>
  </div>
</div>
<button type="button" class="but" style="background-color:#ff0000;"><a rel="modal:close">Close</a></button>
</div>

<x3d width="1358px", height="606px" showStat="false">
    <scene>
      <navigationInfo type='"" "any"' id="navType"></navigationInfo>
      <!--NEST-->
      <Sound>
        <AudioClip loop='true' id="mute" enabled="true" pitch='1' url="https://upload.wikimedia.org/wikipedia/commons/8/88/Jungle_audio.wav"/>
      </Sound>
      <Sound>
        <AudioClip loop='false' id="ready" enabled="false" pitch='1' url="https://upload.wikimedia.org/wikipedia/commons/a/a9/Ready_for_launch.wav"/>
      </Sound>
      <Sound>
        <AudioClip loop='false' id="qs" enabled="false" pitch='1' url="https://upload.wikimedia.org/wikipedia/commons/e/e2/Questions_for_simulator.wav"/>
      </Sound>
    <Sound>
    <AudioClip id="e2" loop="false" pitch="4" enable="false" url="https://upload.wikimedia.org/wikipedia/commons/7/7e/Error_message.wav"/>
    </Sound>
    <Sound>
    <AudioClip id="y2" loop="false" pitch="4" enable="false" url="https://upload.wikimedia.org/wikipedia/commons/6/6f/Doublesele.wav"/>
    </Sound>
    <Sound>
    <AudioClip id="s1" loop="false" pitch="4" enable="false" url="https://upload.wikimedia.org/wikipedia/commons/9/91/Sound4.wav"/>
    </Sound>
    <Sound>
    <AudioClip id="ssound" loop="false" pitch="4" enable="false" url="https://upload.wikimedia.org/wikipedia/commons/6/6f/Doublesele.wav"/>
    </Sound>
    <Sound>
    <AudioClip id="propsound" loop="true" pitch="4" enable="false" url="https://upload.wikimedia.org/wikipedia/commons/3/38/Propeller-plane-flying-steady-01.wav"/>
    </Sound>
    <Sound>
    <AudioClip id="lsound" loop="false" pitch="4" enable="false" url="https://upload.wikimedia.org/wikipedia/commons/6/6f/Doublesele.wav"/>
    </Sound>
        <Sound>
    <AudioClip id="esound" loop="false" pitch="4" enable="false" url="https://upload.wikimedia.org/wikipedia/commons/6/6f/Doublesele.wav"/>
    </Sound>
    <Sound>
    <AudioClip id="siren" loop="true" pitch="4" enable="false" url="https://upload.wikimedia.org/wikipedia/commons/1/1e/Siren.wav"/>
    </Sound>
      <!--NEST-->
    <transform translation="0 0 0.2" scale="3 3 3">
        <inline nameSpaceName="" mapDEFToID="true" url="nest.x3d"></inline>
    </Transform>
    <transform translation="-11.3 4.6 7" rotation="0 0 1 0.2">
     <shape>
      <appearance>
      <ImageTexture  url="./images/roof.jpg">
      <ImageTexture/>      
      </appearance>
      <box size="7.8 0.05 15"></box>
     </shape>
    </transform>
    <transform translation="-3.7 4.6 7" rotation="0 0 -1 0.2">
     <shape>
      <appearance>
      <ImageTexture  url="./images/roof.jpg">
      <ImageTexture/>      
      </appearance>
      <box size="7.8 0.05 15"></box>
     </shape>
    </transform>
    <transform translation="6.9 5.4 6.8" rotation="0 0 1 0.22">
     <shape>
      <appearance>
      <ImageTexture  url="./images/roof.jpg">
      <ImageTexture/>      
      </appearance>
      <box size="14 0.05 8.8"></box>
     </shape>
    </transform>
    <transform translation="6 5.15 1.3" rotation="0 0 1 0.22">
     <shape>
      <appearance>
      <ImageTexture  url="./images/roof.jpg">
      <ImageTexture/>      
      </appearance>
      <box size="3.3 0.05 2.3"></box>
     </shape>
    </transform>
        <transform translation="-16.2 3.6 7.7">
     <shape>
      <appearance>
      <ImageTexture  url="./images/roof.jpg">
      <ImageTexture/>      
      </appearance>
      <box size="3 0.05 3"></box>
     </shape>
    </transform>
    <!--Body and Wing Rack-->
    <transform translation="10.5 0.65 10.5" rotation="0 1 0 3.14" scale="0.6 0.6 0.6">
        <inline nameSpaceName="" mapDEFToID="true" url="stand.x3d"></inline>
    </Transform>
    <!--BOX-->
    <transform translation="-2.5 1 7.55">
     <shape>
      <appearance>
      <Material DEF="MA_Black_001"
	    diffuseColor="1 0 0"
		specularColor="0.401 0.401 0.401"
		emissiveColor="0.000 0.000 0.000"
		ambientIntensity="0.000"
		shininess="0.500"
		transparency="0.0"
	    />
      </appearance>
      <box size="1 0.05 2.5"></box>
     </shape>
    </transform>
    <group>
    <transform DEF="movePack" translation="0 0 0">
    <transform translation="-2.3 1.15 7">
     <shape onclick="package();">
      <appearance>
      <ImageTexture  url="https://upload.wikimedia.org/wikipedia/commons/7/7c/Package_design.png">
      <ImageTexture/>      
      </appearance>
      <box size="0.4 0.18 0.4"></box>
     </shape>
    </transform>
    <transform translation="-2.1 1.15 7">
     <shape onclick="packid();">
      <appearance>
      <ImageTexture  url="https://upload.wikimedia.org/wikipedia/commons/4/4a/My_QR_Code.png">      
      </appearance>
      <box size="0.01 0.14 0.2"></box>
     </shape>
    </transform>
    </transform>
    <touchSensor id="pack1" enabled="false"/>
    </group>
    <!--BODIES-->
    <transform DEF="ZIP111">
    <group>
    <transform DEF="ZIP11">
    <transform DEF="ZIP1" translation="9.05 1.5 10.4" rotation="1 0 0 1.58" scale="0.35 0.35 0.35">
       <inline nameSpaceName="zip_body" mapDEFToID="true" url="zip_body.x3d"> </inline>
       <inline nameSpaceName="Tail" mapDEFToID="true" url="Tail.x3d" onclick="loadbody1();"> </inline>
       <transform DEF="foreprop1" center="0.000000 0.752792 -0.599319">
        <inline nameSpaceName="forecap" mapDEFToID="true" url="forecap.x3d"> </inline>
         <transform DEF="prop11" center="0.00 0.85 -0.65">
          <inline nameSpaceName="prop1" mapDEFToID="true" url="prop1.x3d"> </inline>
         </transform>
         <transform DEF="prop12" center="-0.110759 0.85 -0.65">
          <inline nameSpaceName="prop2" mapDEFToID="true" url="prop2.x3d"> </inline>
         </transform>
         <transform DEF="prop13" center="0.116399 0.85 -0.65">
          <inline nameSpaceName="prop3" mapDEFToID="true" url="prop3.x3d"> </inline>
         </transform>
       </transform>
       <transform DEF="aftprop1" center="0.000000 0.752792 -1.481535">
        <inline nameSpaceName="aftcap1" mapDEFToID="true" url="aftcap.x3d"> </inline>
         <transform DEF="prop14" center="0.00 0.85 -1.42">
          <inline nameSpaceName="prop4" mapDEFToID="true" url="prop4.x3d"> </inline>
         </transform>
         <transform DEF="prop15" center="-0.110759 0.85 -1.42">
          <inline nameSpaceName="prop5" mapDEFToID="true" url="prop5.x3d"> </inline>
         </transform>
         <transform DEF="prop16" center="0.116399 0.85 -1.42">
          <inline nameSpaceName="prop6" mapDEFToID="true" url="prop6.x3d"> </inline>
         </transform>
       </transform>
       <group onclick="scan1();">
      <transform translation="0.3 -0.05 -1.28" rotation="1 0 0 0.2">
     <shape>
      <appearance>
      <ImageTexture  url="./images/QR_code.jpg">
      <ImageTexture/>      
      </appearance>
      <box size="0.3 0.05 0.3"></box>
     </shape>
    </transform>
    <transform translation="-0.3 -0.05 -1.28" rotation="1 0 0 0.2">
     <shape>
      <appearance>
      <ImageTexture  url="./images/QR_code.jpg">
      <ImageTexture/>      
      </appearance>
      <box size="0.3 0.05 0.3"></box>
     </shape>
    </transform>
    <touchSensor id="QR1" enabled="false"/>
    </group>
     <group onclick="drop1();">
      <transform DEF="dr1" center="-0.25 0 0" translation="-0.255 -0.32 0.96">
       <shape>
        <appearance>
         <material diffuseColor="0.9 1 0.9"></material>
        </appearance>
        <box size="0.5 0.003 1.23"></box>
       </shape>
      </transform>
      <transform DEF="dl1" center="0.25 0 0" translation="0.255 -0.32 0.96">
       <shape>
        <appearance>
         <material diffuseColor="0.9 1 0.9"></material>
        </appearance>
        <box size="0.5 0.003 1.23"></box>
       </shape>
      </transform>
      <touchSensor id="mech1" enabled="true"/>
      </group>
    </Transform>
    </Transform>
    <touchSensor id="zip1" enabled="false"/>
    </group>
    </transform>
  <transform DEF="ZIP222">
  <group>
  <transform DEF="ZIP22">   
  <transform DEF="ZIP2" translation="9.96 1.5 10.4" rotation="1 0 0 1.58" scale="0.35 0.35 0.35">
     <inline nameSpaceName="zip_body" mapDEFToID="true" url="zip_body.x3d"> </inline>
     <inline nameSpaceName="Tail" mapDEFToID="true" url="Tail.x3d" onclick="loadbody2();"> </inline>
     <transform DEF="foreprop2" center="0.000000 0.752792 -0.599319">
        <inline nameSpaceName="forecap" mapDEFToID="true" url="forecap.x3d"> </inline>
         <transform DEF="prop21" center="0.00 0.85 -0.65">
          <inline nameSpaceName="prop1" mapDEFToID="true" url="prop1.x3d"> </inline>
         </transform>
         <transform DEF="prop22" center="-0.110759 0.85 -0.65">
          <inline nameSpaceName="prop2" mapDEFToID="true" url="prop2.x3d"> </inline>
         </transform>
         <transform DEF="prop23" center="0.116399 0.85 -0.65">
          <inline nameSpaceName="prop3" mapDEFToID="true" url="prop3.x3d"> </inline>
         </transform>
       </transform>
       <transform DEF="aftprop2" center="0.000000 0.752792 -1.481535">
        <inline nameSpaceName="aftcap" mapDEFToID="true" url="aftcap.x3d"> </inline>
         <transform DEF="prop24" center="0.00 0.85 -1.42">
          <inline nameSpaceName="prop4" mapDEFToID="true" url="prop4.x3d"> </inline>
         </transform>
         <transform DEF="prop25" center="-0.110759 0.85 -1.42">
          <inline nameSpaceName="prop5" mapDEFToID="true" url="prop5.x3d"> </inline>
         </transform>
         <transform DEF="prop26" center="0.116399 0.85 -1.42">
          <inline nameSpaceName="prop6" mapDEFToID="true" url="prop6.x3d"> </inline>
         </transform>
       </transform>
    <group onclick="scan2();">
    <transform translation="0.3 -0.05 -1.28" rotation="1 0 0 0.2">
     <shape>
      <appearance>
      <ImageTexture  url="./images/QR_code.jpg">
      <ImageTexture/>      
      </appearance>
      <box size="0.3 0.05 0.3"></box>
     </shape>
    </transform>
    <transform translation="-0.3 -0.05 -1.28" rotation="1 0 0 0.2">
     <shape>
      <appearance>
      <ImageTexture  url="./images/QR_code.jpg">
      <ImageTexture/>      
      </appearance>
      <box size="0.3 0.05 0.3"></box>
     </shape>
    </transform>
    <touchSensor id="QR2" enabled="false"/>
    </group>
    <group onclick="drop2();">
      <transform DEF="dr2" center="-0.25 0 0" translation="-0.255 -0.32 0.96">
       <shape>
        <appearance>
         <material diffuseColor="0.9 1 0.9"></material>
        </appearance>
        <box size="0.5 0.003 1.23"></box>
       </shape>
      </transform>
      <transform DEF="dl2" center="0.25 0 0" translation="0.255 -0.32 0.96">
       <shape>
        <appearance>
         <material diffuseColor="0.9 1 0.9"></material>
        </appearance>
        <box size="0.5 0.003 1.23"></box>
       </shape>
      </transform>
      <touchSensor id="mech2" enabled="true"/>
      </group>
   </Transform>
   </Transform>
   <touchSensor id="zip2" enabled="false"/>
   </group>
   </Transform>
   <transform DEF="ZIP333">
   <group>
   <transform DEF="ZIP33">
   <transform DEF="ZIP3" translation="11.05 1.5 10.4" rotation="1 0 0 1.58" scale="0.35 0.35 0.35">
      <inline nameSpaceName="zip_body" mapDEFToID="true" url="zip_body.x3d"> </inline>
      <inline nameSpaceName="Tail" mapDEFToID="true" url="Tail.x3d" onclick="loadbody3();"> </inline>
       <transform DEF="foreprop3" center="0.000000 0.752792 -0.599319">
        <inline nameSpaceName="forecap" mapDEFToID="true" url="forecap.x3d"> </inline>
         <transform DEF="prop31" center="0.00 0.85 -0.65">
          <inline nameSpaceName="prop1" mapDEFToID="true" url="prop1.x3d"> </inline>
         </transform>
         <transform DEF="prop32" center="-0.110759 0.85 -0.65">
          <inline nameSpaceName="prop2" mapDEFToID="true" url="prop2.x3d"> </inline>
         </transform>
         <transform DEF="prop33" center="0.116399 0.85 -0.65">
          <inline nameSpaceName="prop3" mapDEFToID="true" url="prop3.x3d"> </inline>
         </transform>
       </transform>
       <transform DEF="aftprop3" center="0.000000 0.752792 -1.481535">
        <inline nameSpaceName="aftcap" mapDEFToID="true" url="aftcap.x3d"> </inline>
         <transform DEF="prop34" center="0.00 0.85 -1.42">
          <inline nameSpaceName="prop4" mapDEFToID="true" url="prop4.x3d"> </inline>
         </transform>
         <transform DEF="prop35" center="-0.110759 0.85 -1.42">
          <inline nameSpaceName="prop5" mapDEFToID="true" url="prop5.x3d"> </inline>
         </transform>
         <transform DEF="prop36" center="0.116399 0.85 -1.42">
          <inline nameSpaceName="prop6" mapDEFToID="true" url="prop6.x3d"> </inline>
         </transform>
       </transform>
    <group onclick="scan3();">
    <transform translation="0.3 -0.05 -1.28" rotation="1 0 0 0.2">
     <shape>
      <appearance>
      <ImageTexture  url="./images/QR_code.jpg">
      <ImageTexture/>      
      </appearance>
      <box size="0.3 0.05 0.3"></box>
     </shape>
    </transform>
    <transform translation="-0.3 -0.05 -1.28" rotation="1 0 0 0.2">
     <shape>
      <appearance>
      <ImageTexture  url="./images/QR_code.jpg">
      <ImageTexture/>      
      </appearance>
      <box size="0.3 0.05 0.3"></box>
     </shape>
    </transform>
    <touchSensor id="QR3" enabled="false"/>
    </group>
    <group onclick="drop3();">
      <transform DEF="dr3" center="-0.25 0 0" translation="-0.255 -0.32 0.96">
       <shape>
        <appearance>
         <material diffuseColor="0.9 1 0.9"></material>
        </appearance>
        <box size="0.5 0.003 1.23"></box>
       </shape>
      </transform>
      <transform DEF="dl3" center="0.25 0 0" translation="0.255 -0.32 0.96">
       <shape>
        <appearance>
         <material diffuseColor="0.9 1 0.9"></material>
        </appearance>
        <box size="0.5 0.003 1.23"></box>
       </shape>
      </transform>
      <touchSensor id="mech3" enabled="true"/>
      </group>
   </Transform>
   </Transform>
   <touchSensor id="zip3" enabled="false"/>
   </group>
   </Transform>
   <transform translation="11.99 1.5 10.4" rotation="1 0 0 1.58" scale="0.35 0.35 0.35" onclick="loadbody4();">
       <inline nameSpaceName="zip_body" mapDEFToID="true" url="zip_body.x3d"> </inline>
       <transform DEF="foreprop4">
        <inline nameSpaceName="forecap" mapDEFToID="true" url="forecap.x3d"> </inline>
         <transform DEF="prop41" center="0 0 0">
          <inline nameSpaceName="prop1" mapDEFToID="true" url="prop1.x3d"> </inline>
         </transform>
         <transform DEF="prop42" center="0 0 0 0">
          <inline nameSpaceName="prop2" mapDEFToID="true" url="prop2.x3d"> </inline>
         </transform>
         <transform DEF="prop43" center="0 0 0 0">
          <inline nameSpaceName="prop3" mapDEFToID="true" url="prop3.x3d"> </inline>
         </transform>
       </transform>
       <transform DEF="aftprop4">
        <inline nameSpaceName="aftcap" mapDEFToID="true" url="aftcap.x3d"> </inline>
        <inline nameSpaceName="Tail" mapDEFToID="true" url="Tail.x3d"> </inline>
         <transform DEF="prop44" center="0 0 0">
          <inline nameSpaceName="prop4" mapDEFToID="true" url="prop4.x3d"> </inline>
         </transform>
         <transform DEF="prop45" center="0 0 0">
          <inline nameSpaceName="prop5" mapDEFToID="true" url="prop5.x3d"> </inline>
         </transform>
         <transform DEF="prop46" center="0 0 0">
          <inline nameSpaceName="prop6" mapDEFToID="true" url="prop6.x3d"> </inline>
         </transform>
       </transform>
    <transform translation="0 -0.2 -0.6" rotation="1 0 0 0.17">
     <shape>
      <appearance>
      <ImageTexture  url="./images/orange.png">
      <ImageTexture/>      
      </appearance>
      <box size="0.22 0.01 1.5"></box>
     </shape>
    </transform>
    <transform translation="0.3 -0.05 -1.28" rotation="1 0 0 0.2">
     <shape>
      <appearance>
      <ImageTexture  url="./images/QR_code.jpg">
      <ImageTexture/>      
      </appearance>
      <box size="0.3 0.05 0.3"></box>
     </shape>
    </transform>
    <transform translation="-0.3 -0.05 -1.28" rotation="1 0 0 0.2">
     <shape>
      <appearance>
      <ImageTexture  url="./images/QR_code.jpg">
      <ImageTexture/>      
      </appearance>
      <box size="0.3 0.05 0.3"></box>
     </shape>
    </transform>
       <transform DEF="dr4" center="-0.25 0 0" translation="-0.255 -0.32 0.96">
       <shape>
        <appearance>
         <material diffuseColor="0.9 1 0.9"></material>
        </appearance>
        <box size="0.5 0.003 1.23"></box>
       </shape>
      </transform>
      <transform DEF="dl4" center="0.25 0 0" translation="0.255 -0.32 0.96">
       <shape>
        <appearance>
         <material diffuseColor="0.9 1 0.9"></material>
        </appearance>
        <box size="0.5 0.003 1.23"></box>
       </shape>
      </transform>
   </Transform>
   <transform DEF="ZIP555">
   <group>
   <transform DEF="ZIP55">
   <transform DEF="ZIP5" translation="11.53 1.5 10" center="0 0 0" rotation="1 0 0 1.66" scale="0.35 0.35 0.35">
    <inline nameSpaceName="zip_body" mapDEFToID="true" url="zip_body.x3d"> </inline>
    <inline nameSpaceName="Tail" mapDEFToID="true" url="Tail.x3d" onclick="loadbody5();"> </inline>
     <transform DEF="foreprop5" center="0.000000 0.752792 -0.599319">
        <inline nameSpaceName="forecap" mapDEFToID="true" url="forecap.x3d"> </inline>
         <transform DEF="prop51" center="0.00 0.85 -0.65">
          <inline nameSpaceName="prop1" mapDEFToID="true" url="prop1.x3d"> </inline>
         </transform>
         <transform DEF="prop52" center="-0.110759 0.85 -0.65">
          <inline nameSpaceName="prop2" mapDEFToID="true" url="prop2.x3d"> </inline>
         </transform>
         <transform DEF="prop53" center="0.116399 0.85 -0.65">
          <inline nameSpaceName="prop3" mapDEFToID="true" url="prop3.x3d"> </inline>
         </transform>
       </transform>
       <transform DEF="aftprop5" center="0.000000 0.752792 -1.481535">
        <inline nameSpaceName="aftcap" mapDEFToID="true" url="aftcap.x3d"> </inline>
         <transform DEF="prop54" center="0.00 0.85 -1.42">
          <inline nameSpaceName="prop4" mapDEFToID="true" url="prop4.x3d"> </inline>
         </transform>
         <transform DEF="prop55" center="-0.110759 0.85 -1.42">
          <inline nameSpaceName="prop5" mapDEFToID="true" url="prop5.x3d"> </inline>
         </transform>
         <transform DEF="prop56" center="0.116399 0.85 -1.42">
          <inline nameSpaceName="prop6" mapDEFToID="true" url="prop6.x3d"> </inline>
         </transform>
       </transform>
    <group onclick="scan5();">
    <transform translation="0.3 -0.05 -1.28" rotation="1 0 0 0.2">
     <shape>
      <appearance>
      <ImageTexture  url="./images/QR_code.jpg">
      <ImageTexture/>      
      </appearance>
      <box size="0.3 0.05 0.3"></box>
     </shape>
    </transform>
    <transform translation="-0.3 -0.05 -1.28" rotation="1 0 0 0.2">
     <shape>
      <appearance>
      <ImageTexture  url="./images/QR_code.jpg">
      <ImageTexture/>      
      </appearance>
      <box size="0.3 0.05 0.3"></box>
     </shape>
    </transform>
    <touchSensor id="QR5" enabled="false"/>
    </group>
    <group onclick="drop5();">
      <transform DEF="dr5" center="-0.25 0 0" translation="-0.255 -0.32 0.96">
       <shape>
        <appearance>
         <material diffuseColor="0.9 1 0.9"></material>
        </appearance>
        <box size="0.5 0.003 1.23"></box>
       </shape>
      </transform>
      <transform DEF="dl5" center="0.25 0 0" translation="0.255 -0.32 0.96">
       <shape>
        <appearance>
         <material diffuseColor="0.9 1 0.9"></material>
        </appearance>
        <box size="0.5 0.003 1.23"></box>
       </shape>
      </transform>
      <touchSensor id="mech5" enabled="true"/>
      </group>
   </Transform>
   </transform>
   <touchSensor id="zip5" enabled="false"/>
   </group>
   </transform>
   <transform DEF="ZIP666">
   <group>
   <transform DEF="ZIP66">
   <transform DEF="ZIP6" translation="10.5 1.5 10" rotation="1 0 0 1.66" scale="0.35 0.35 0.35">
      <inline nameSpaceName="zip_body" mapDEFToID="true" url="zip_body.x3d"> </inline>
      <inline nameSpaceName="Tail" mapDEFToID="true" url="Tail.x3d" onclick="loadbody6();"> </inline>
       <transform DEF="foreprop6" center="0.000000 0.752792 -0.599319">
        <inline nameSpaceName="forecap" mapDEFToID="true" url="forecap.x3d"> </inline>
         <transform DEF="prop61" center="0.00 0.85 -0.65">
          <inline nameSpaceName="prop1" mapDEFToID="true" url="prop1.x3d"> </inline>
         </transform>
         <transform DEF="prop62" center="-0.110759 0.85 -0.65">
          <inline nameSpaceName="prop2" mapDEFToID="true" url="prop2.x3d"> </inline>
         </transform>
         <transform DEF="prop63" center="0.116399 0.85 -0.65">
          <inline nameSpaceName="prop3" mapDEFToID="true" url="prop3.x3d"> </inline>
         </transform>
       </transform>
       <transform DEF="aftprop6" center="0.000000 0.752792 -1.481535">
        <inline nameSpaceName="aftcap" mapDEFToID="true" url="aftcap.x3d"> </inline>
         <transform DEF="prop64" center="0.00 0.85 -1.42">
          <inline nameSpaceName="prop4" mapDEFToID="true" url="prop4.x3d"> </inline>
         </transform>
         <transform DEF="prop65" center="-0.110759 0.85 -1.42">
          <inline nameSpaceName="prop5" mapDEFToID="true" url="prop5.x3d"> </inline>
         </transform>
         <transform DEF="prop66" center="0.116399 0.85 -1.42">
          <inline nameSpaceName="prop6" mapDEFToID="true" url="prop6.x3d"> </inline>
         </transform>
       </transform>
    <group onclick="scan6();">
    <transform translation="0.3 -0.05 -1.28" rotation="1 0 0 0.2">
     <shape>
      <appearance>
      <ImageTexture  url="./images/QR_code.jpg">
      <ImageTexture/>      
      </appearance>
      <box size="0.3 0.05 0.3"></box>
     </shape>
    </transform>
    <transform translation="-0.3 -0.05 -1.28" rotation="1 0 0 0.2">
     <shape>
      <appearance>
      <ImageTexture  url="./images/QR_code.jpg">
      <ImageTexture/>      
      </appearance>
      <box size="0.3 0.05 0.3"></box>
     </shape>
    </transform>
    <touchSensor id="QR6" enabled="false"/>
    </group>
    <group onclick="drop6();">
      <transform DEF="dr6" center="-0.25 0 0" translation="-0.255 -0.32 0.96">
       <shape>
        <appearance>
         <material diffuseColor="0.9 1 0.9"></material>
        </appearance>
        <box size="0.5 0.003 1.23"></box>
       </shape>
      </transform>
      <transform DEF="dl6" center="0.25 0 0" translation="0.255 -0.32 0.96">
       <shape>
        <appearance>
         <material diffuseColor="0.9 1 0.9"></material>
        </appearance>
        <box size="0.5 0.003 1.23"></box>
       </shape>
      </transform>
      <touchSensor id="mech6" enabled="true"/>
      </group>
   </Transform>
   </Transform>
   <touchSensor id="zip6" enabled="false"/>
   </group>
   </Transform>
   <transform DEF="ZIP777">
   <group>
   <transform DEF="ZIP77">
   <transform DEF="ZIP7" translation="9.48 1.5 10" rotation="1 0 0 1.66" scale="0.35 0.35 0.35">
      <inline nameSpaceName="zip_body" mapDEFToID="true" url="zip_body.x3d"> </inline>
      <inline nameSpaceName="Tail" mapDEFToID="true" url="Tail.x3d" onclick="loadbody7();"> </inline>
       <transform DEF="foreprop7" center="0.000000 0.752792 -0.599319">
        <inline nameSpaceName="forecap" mapDEFToID="true" url="forecap.x3d"> </inline>
         <transform DEF="prop71" center="0.00 0.85 -0.65">
          <inline nameSpaceName="prop1" mapDEFToID="true" url="prop1.x3d"> </inline>
         </transform>
         <transform DEF="prop72" center="-0.110759 0.85 -0.65">
          <inline nameSpaceName="prop2" mapDEFToID="true" url="prop2.x3d"> </inline>
         </transform>
         <transform DEF="prop73" center="0.116399 0.85 -0.65">
          <inline nameSpaceName="prop3" mapDEFToID="true" url="prop3.x3d"> </inline>
         </transform>
       </transform>
       <transform DEF="aftprop7" center="0.000000 0.752792 -1.481535">
        <inline nameSpaceName="aftcap" mapDEFToID="true" url="aftcap.x3d"> </inline>
         <transform DEF="prop74" center="0.00 0.85 -1.42">
          <inline nameSpaceName="prop4" mapDEFToID="true" url="prop4.x3d"> </inline>
         </transform>
         <transform DEF="prop75" center="-0.110759 0.85 -1.42">
          <inline nameSpaceName="prop5" mapDEFToID="true" url="prop5.x3d"> </inline>
         </transform>
         <transform DEF="prop76" center="0.116399 0.85 -1.42">
          <inline nameSpaceName="prop6" mapDEFToID="true" url="prop6.x3d"> </inline>
         </transform>
       </transform>
    <group onclick="scan7();">
    <transform translation="0.3 -0.05 -1.28" rotation="1 0 0 0.2">
     <shape>
      <appearance>
      <ImageTexture  url="./images/QR_code.jpg">
      <ImageTexture/>      
      </appearance>
      <box size="0.3 0.05 0.3"></box>
     </shape>
    </transform>
    <transform translation="-0.3 -0.05 -1.28" rotation="1 0 0 0.2">
     <shape>
      <appearance>
      <ImageTexture  url="./images/QR_code.jpg">
      <ImageTexture/>      
      </appearance>
      <box size="0.3 0.05 0.3"></box>
     </shape>
    </transform>
    <touchSensor id="QR7" enabled="false"/>
    </group>
    <group onclick="drop7();">
      <transform DEF="dr7" center="-0.25 0 0" translation="-0.255 -0.32 0.96">
       <shape>
        <appearance>
         <material diffuseColor="0.9 1 0.9"></material>
        </appearance>
        <box size="0.5 0.003 1.23"></box>
       </shape>
      </transform>
      <transform DEF="dl7" center="0.25 0 0" translation="0.255 -0.32 0.96">
       <shape>
        <appearance>
         <material diffuseColor="0.9 1 0.9"></material>
        </appearance>
        <box size="0.5 0.003 1.23"></box>
       </shape>
      </transform>
      <touchSensor id="mech7" enabled="true"/>
      </group>
   </Transform>
   </Transform>
   <touchSensor id="zip7" enabled="false"/>
   </group>
   </Transform>

  <!--WING 1-->
  <transform DEF="WING111">
  <group>
  <transform DEF="WING11">
  <transform DEF="WING1" translation="10.5 0.62 11" rotation="-1 0 0 0.32" scale="0.35 0.35 0.35">
  <transform onclick="loadwing1();">
    <inline nameSpaceName="Wing" mapDEFToID="true" url="Wing.x3d"></inline>
    </transform>
    </transform>
    </transform>
    <touchSensor id="wing1" enabled="false"/>
    </group>
    </transform>

  <!--WING 2-->
  <transform DEF="WING222">
  <group>
  <transform DEF="WING22">
  <transform DEF="WING2" translation="10.5 0.8 11" rotation="-1 0 0 0.32" scale="0.35 0.35 0.35">
  <transform onclick="loadwing2();">
    <inline nameSpaceName="Wing" mapDEFToID="true" url="Wing.x3d"></inline>
    </transform>
    </transform>
    </transform>
    <touchSensor id="wing2" enabled="false"/>
    </group>
    </transform>

  <!--WING 3-->
  <transform DEF="WING333">
  <group>
  <transform DEF="WING33">
  <transform DEF="WING3" translation="10.5 0.98 11" rotation="-1 0 0 0.32" scale="0.35 0.35 0.35">  
  <transform onclick="loadwing3();">
    <inline nameSpaceName="Wing" mapDEFToID="true" url="Wing.x3d"></inline>
    </transform>
    </transform>
    </transform>
    <touchSensor id="wing3" enabled="false"/>
    </group>
    </transform>

<!--WING 4-->
<group>
  <transform DEF="WING4" translation="10.5 1.16 11" rotation="-1 0 0 0.32" scale="0.35 0.35 0.35">
  <transform onclick="loadwing4();">
    <inline nameSpaceName="Wing" mapDEFToID="true" url="Wing.x3d"></inline>
    </transform>
    </transform>
    <touchSensor id="wing4" enabled="false"/>
    </group>
    
<!--WING 5-->
<transform DEF="WING555">
<group>
  <transform DEF="WING55">
  <transform DEF="WING5" translation="10.5 1.3 11" rotation="-1 0 0 0.32" scale="0.35 0.35 0.35">
  <transform onclick="loadwing5();">
    <inline nameSpaceName="Wing" mapDEFToID="true" url="Wing.x3d"></inline>
    </transform>
    </transform>
    </transform>
    <touchSensor id="wing5" enabled="false"/>
    </group>
    </transform>
    
<!--WING 6-->
<transform DEF="WING666">
<group>
  <transform DEF="WING66">
  <transform DEF="WING6" translation="10.5 1.48 11" rotation="-1 0 0 0.32" scale="0.35 0.35 0.35">
  <transform onclick="loadwing6();">
    <inline nameSpaceName="Wing" mapDEFToID="true" url="Wing.x3d"></inline>
    </transform>
    </transform>
    </transform>
    <touchSensor id="wing6" enabled="false"/>
    </group>
  </transform>

<!--WING 7-->
<transform DEF="WING777">
<group>
  <transform DEF="WING77">
  <transform DEF="WING7" translation="10.5 1.66 11" rotation="-1 0 0 0.32" scale="0.35 0.35 0.35">
  <transform onclick="loadwing7();">
    <inline nameSpaceName="Wing" mapDEFToID="true" url="Wing.x3d"></inline>
    </transform>
    </transform>
    </transform>
    <touchSensor id="wing7" enabled="false"/>
    </group>
    </transform>

 <!--battery1-->
 <transform DEF="bat1" translation="4 0 9" scale="0.36 0.36 0.36">
  <transform onclick="loadBattery1();">
    <inline nameSpaceName="battery" mapDEFToID="true" url="battery.x3d"></inline>
    </transform>
    </transform>
 <!--battery2-->
 <transform DEF="bat2" translation="4.73 0 9" scale="0.36 0.36 0.36">
  <transform onclick="loadBattery2();">
    <inline nameSpaceName="battery" mapDEFToID="true" url="battery.x3d"></inline>
    </transform>
    </transform>
 <!--battery3-->
 <transform DEF="BAT33">
 <group>
 <transform DEF="BAT3">
 <transform DEF="bat3" translation="2.9 0 8.99" rotation="0 1 0 3.14" scale="0.36 0.36 0.36">
  <transform onclick="loadBattery3();">
    <inline nameSpaceName="battery" mapDEFToID="true" url="battery.x3d"></inline>
    </transform>
    </transform>
    </transform>
    <touchSensor id="battery3" enabled="false"/>
 </group>
 </transform>
 <!--battery4-->
 <transform DEF="bat4" translation="3.285 0 8.99" rotation="0 1 0 3.14" scale="0.36 0.36 0.36">
  <transform onclick="loadBattery4();">
    <inline nameSpaceName="battery" mapDEFToID="true" url="battery.x3d"></inline>
    </transform>
    </transform>
    <!--battery5-->
 <transform DEF="BAT55">
 <group>
 <transform DEF="BAT5">
 <transform DEF="bat5" translation="3.645 0 8.99" rotation="0 1 0 3.14" scale="0.36 0.36 0.36">
  <transform onclick="loadBattery5();">
    <inline nameSpaceName="battery" mapDEFToID="true" url="battery.x3d"></inline>
    </transform>
    </transform>
    </transform>
    <touchSensor id="battery5" enabled="false"/>
 </group>
 </transform>
 <!--battery6-->
 <transform DEF=BAT66>
 <group>
 <transform DEF=BAT6>
 <transform DEF="bat6" translation="4.0 0 8.99" rotation="0 1 0 3.14" scale="0.36 0.36 0.36">
  <transform onclick="loadBattery6();">
    <inline nameSpaceName="battery" mapDEFToID="true" url="battery.x3d"></inline>
    </transform>
    </transform>
    </transform>
    <touchSensor id="battery6" enabled="false"/>
 </group>
 </transform>
  <!--Nose 1-->
  <transform DEF="NOSE111">
  <group>
  <transform DEF="NOSE11">
  <transform DEF="NOSE1"translation="7 1.25 3" rotation="0 1 0 1.57" scale="0.35 0.35 0.35">
  <transform onclick="loadNose1();">
     <inline nameSpaceName="NoseCone" mapDEFToID="true" url="NoseCone.x3d"></inline>
  </transform>
  </transform>
  </transform>
    <touchSensor id="noseCone1" enabled="false"/>
 </group>
 </transform>
  <!--Nose 2-->
  <transform DEF="NOSE222">
  <group>
  <transform DEF="NOSE22">
  <transform DEF='NOSE2' translation="7 1 3" rotation="0 1 0 1.57" scale="0.35 0.35 0.35">
  <transform onclick="loadNose2();">
    <inline nameSpaceName="NoseCone" mapDEFToID="true" url="NoseCone.x3d"></inline>
  </transform>
  </transform>
  </transform>
     <touchSensor id="noseCone2" enabled="false"/>
 </group>
 </transform>
  <!--Nose 3-->
  <transform DEF="NOSE333">
  <group>
  <transform DEF="NOSE33">
  <transform DEF='NOSE3' translation="7 0.75 3" rotation="0 1 0 1.57" scale="0.35 0.35 0.35">
  <transform onclick="loadNose3();">
    <inline nameSpaceName="NoseCone" mapDEFToID="true" url="NoseCone.x3d"></inline>
  </transform>
  </transform>
  </transform>
  <touchSensor id="noseCone3" enabled="false"/>
  </group>
  </transform>
  <!--Nose 4-->
  <transform DEF="NOSE444">
  <group>
  <transform DEF="NOSE44">
  <transform DEF='NOSE4' translation="7 1.25 3.6" rotation="0 1 0 1.57" scale="0.35 0.35 0.35">
  <transform onclick="loadNose4();">
    <inline nameSpaceName="NoseCone" mapDEFToID="true" url="NoseCone.x3d"></inline>
  </transform>
  </transform>
  </transform>
    <touchSensor id="noseCone4" enabled="false"/>
  </group>
  </transform>
  <!--Nose 5-->
  <transform DEF="NOSE555">
  <group>
  <transform DEF="NOSE55">
  <transform DEF='NOSE5' translation="7 1 3.6" rotation="0 1 0 1.57" scale="0.35 0.35 0.35">
  <transform onclick="loadNose5();">
    <inline nameSpaceName="NoseCone" mapDEFToID="true" url="NoseCone.x3d"></inline>
  </transform>
  </transform>
  </transform>
    <touchSensor id="noseCone5" enabled="false"/>
  </group>
  </transform>
    <!--Nose 6-->
  <group>
  <transform DEF="NOSE666">
  <transform DEF="NOSE66">
  <transform DEF='NOSE6' translation="7 0.75 3.6" rotation="0 1 0 1.57" scale="0.35 0.35 0.35">
  <transform onclick="loadNose6();">
    <inline nameSpaceName="NoseCone" mapDEFToID="true" url="NoseCone.x3d"></inline>
  </transform>
  </transform>
  </transform>
    <touchSensor id="noseCone6" enabled="false"/>
  </group>
  </transform>
    <!--Battery Cart 1-->
    <transform DEF="Charger" translation="4 0 9" scale="0.36 0.36 0.36">
    <inline nameSpaceName="" mapDEFToID="true" url="charger.x3d" > </inline>
       <!--LEDS-->
    <transform translation="-1.49 2.25 0.25">
     <shape>
      <appearance>
       <material id="heartbeat" diffuseColor="0.7 1 0.7"></material>
      </appearance>
      <sphere height="0.04" radius="0.04"></sphere>
     </shape>
    </transform>
    <transform translation="-1.49 2.25 -0.31">
     <shape>
      <appearance>
       <material diffuseColor="0 0 1"></material>
      </appearance>
      <sphere height="0.04" radius="0.04"></sphere>
     </shape>
    </transform>
    <transform translation="0.52 2.25 0.25">
     <shape>
      <appearance>
       <material diffuseColor="1 0 0"></material>
      </appearance>
      <sphere height="0.04" radius="0.04"></sphere>
     </shape>
    </transform>
    <transform translation="0.52 2.25 -0.31">
     <shape>
      <appearance>
       <material diffuseColor="0 0 1"></material>
      </appearance>
      <sphere height="0.04" radius="0.04"></sphere>
     </shape>
    </transform>
    <transform translation="-0.46 2.25 0.25">
     <shape>
      <appearance>
       <material diffuseColor="1 1 0"></material>
      </appearance>
      <sphere height="0.04" radius="0.04"></sphere>
     </shape>
    </transform>
    <transform translation="-0.46 2.25 -0.31">
     <shape>
      <appearance>
       <material diffuseColor="1 0 0"></material>
      </appearance>
      <sphere height="0.04" radius="0.04"></sphere>
     </shape>
    </transform>
    <transform translation="1.5 2.25 0.25">
     <shape>
      <appearance>
       <material diffuseColor="0.7 1 0.7"></material>
      </appearance>
      <sphere height="0.04" radius="0.04"></sphere>
     </shape>
    </transform>
    <transform translation="1.5 2.25 -0.31">
     <shape>
      <appearance>
       <material diffuseColor="0 0 1"></material>
      </appearance>
      <sphere height="0.04" radius="0.04"></sphere>
     </shape>
    </transform>
   </Transform>
   
   <!--Battery Cart 2-->
    <transform DEF="Charger" translation="1.5 0 9" scale="0.36 0.36 0.36">
    <inline nameSpaceName="" mapDEFToID="true" url="charger.x3d" > </inline>
       <!--LEDS-->
    <transform translation="-1.49 2.25 0.25">
     <shape>
      <appearance>
       <material diffuseColor="0.7 1 0.7"></material>
      </appearance>
      <sphere height="0.04" radius="0.04"></sphere>
     </shape>
    </transform>
    <transform translation="-1.49 2.25 -0.31">
     <shape>
      <appearance>
       <material diffuseColor="0.7 1 0.7"></material>
      </appearance>
      <sphere height="0.04" radius="0.04"></sphere>
     </shape>
    </transform>
    <transform translation="0.52 2.25 0.25">
     <shape>
      <appearance>
       <material diffuseColor="0.7 1 0.7"></material>
      </appearance>
      <sphere height="0.04" radius="0.04"></sphere>
     </shape>
    </transform>
    <transform translation="0.52 2.25 -0.31">
     <shape>
      <appearance>
       <material diffuseColor="0.7 1 0.7"></material>
      </appearance>
      <sphere height="0.04" radius="0.04"></sphere>
     </shape>
    </transform>
    <transform translation="-0.46 2.25 0.25">
     <shape>
      <appearance>
       <material diffuseColor="0.7 1 0.7"></material>
      </appearance>
      <sphere height="0.04" radius="0.04"></sphere>
     </shape>
    </transform>
    <transform translation="-0.46 2.25 -0.31">
     <shape>
      <appearance>
       <material diffuseColor="0.7 1 0.7"></material>
      </appearance>
      <sphere height="0.04" radius="0.04"></sphere>
     </shape>
    </transform>
    <transform translation="1.5 2.25 0.25">
     <shape>
      <appearance>
       <material diffuseColor="0.7 1 0.7"></material>
      </appearance>
      <sphere height="0.04" radius="0.04"></sphere>
     </shape>
    </transform>
    <transform translation="1.5 2.25 -0.31">
     <shape>
      <appearance>
       <material diffuseColor="0.7 1 0.7"></material>
      </appearance>
      <sphere height="0.04" radius="0.04"></sphere>
     </shape>
    </transform>
   </Transform>
    
    <!--LAUNCHER-->
  <transform DEF="Launcher" translation="10 0 2" rotation="0 1 0 3.14" scale="1 1 1">
    <inline nameSpaceName="Launcher" mapDEFToID="true" url="Launcher.x3d"></inline>
  </transform>
  <!--CARRIAGE-->
  <transform DEF="CARRIAGE" translation="10 0 2" rotation="0 1 0 3.14" scale="1 1 1">
     <inline nameSpaceName="Carriage" mapDEFToID="true" url="Carriage.x3d"></inline>
  </transform>
  <!--Launch Operator Box-->
  <transform translation="10 2.2 5.6">
  <transform translation="0 -0.7 0.2">
     <shape>
      <appearance>
       <material diffuseColor="0.85 0.85 0.85"></material>
      </appearance>
      <box size="0.08 2.8 0.08"></box>
     </shape>
    </transform>
    <transform translation="0 -1 0.2">
     <shape>
      <appearance>
       <material diffuseColor="0.85 0.85 0.85"></material>
      </appearance>
      <box size="1 0.08 0.08"></box>
     </shape>
    </transform>
    <transform translation="0 0.4 0.2">
     <shape>
      <appearance>
       <material diffuseColor="0.85 0.85 0.85"></material>
      </appearance>
      <box size="1 0.08 0.08"></box>
     </shape>
    </transform>
    <transform translation="0 -0.3 0.2">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1" transparency="0.7"></material>
      </appearance>
      <box size="1 1.4 0.01"></box>
     </shape>
    </transform>
    <!--BOX-->
    <transform translation="0 -0.2 0.29">
     <shape>
      <appearance>
       <material diffuseColor="0.8 0.8 0.8"></material>
      </appearance>
      <box size="0.16 0.4 0.1"></box>
     </shape>
    </transform>
    <!--BLUE-->
    <transform translation="0 -0.35 0.33" rotation="1 0 0 1.577">
     <shape>
      <appearance>
       <material diffuseColor="0 0 0"></material>
      </appearance>
      <cylinder height="0.05" radius="0.03"></cylinder>
     </shape>
    </transform>
    <group>
    <transform translation="0 -0.35 0.34" rotation="1 0 0 1.577">
     <shape onclick="enable();">
      <appearance>
       <material diffuseColor="0 0 1"></mate
        rial>
      </appearance>
      <cylinder height="0.05" radius="0.028"></cylinder>
     </shape>
    </transform>
    <touchSensor id='spin' enabled="false"/>
    
    </group>
    <!--GREEN-->
    <transform translation="0 -0.05 0.33" rotation="1 0 0 1.577">
     <shape>
      <appearance>
       <material diffuseColor="0 0 0"></material>
      </appearance>
      <cylinder height="0.05" radius="0.03"></cylinder>
     </shape>
    </transform>
    <group>
    <transform translation="0 -0.05 0.34" rotation="1 0 0 1.577">
     <shape onclick="launch();">
      <appearance>
       <material diffuseColor="0 1 0"></material>
      </appearance>
      <cylinder height="0.05" radius="0.028"></cylinder>
     </shape>
    </transform>
    <touchSensor id="launch" enabled="false"/>
    </group>
    <!--YELLOW-->
    <transform translation="0 -0.15 0.33" rotation="1 0 0 1.577">
     <shape>
      <appearance>
       <material diffuseColor="0 0 0"></material>
      </appearance>
      <cylinder height="0.05" radius="0.03"></cylinder>
     </shape>
    </transform>
    <transform translation="0 -0.15 0.34" rotation="1 0 0 1.577">
     <shape>
      <appearance>
       <material diffuseColor="1 1 0"></material>
      </appearance>
      <cylinder height="0.05" radius="0.028"></cylinder>
     </shape>
    </transform>
    <!--WHITE-->
    <transform translation="0 -0.25 0.33" rotation="1 0 0 1.577">
     <shape>
      <appearance>
       <material diffuseColor="0 0 0"></material>
      </appearance>
      <cylinder height="0.05" radius="0.03"></cylinder>
     </shape>
    </transform>
    <transform translation="0 -0.25 0.34" rotation="1 0 0 1.577">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1"></material>
      </appearance>
      <cylinder height="0.05" radius="0.028"></cylinder>
     </shape>
    </transform>
    <!--E STOP-->
    <transform translation="0 0.015 0.28">
     <shape>
      <appearance>
       <material diffuseColor="1 1 0"></material>
      </appearance>
      <cylinder height="0.05" radius="0.028"></cylinder>
     </shape>
    </transform>
    <group>
    <transform translation="0 0.03 0.28">
     <shape onclick="estop();">
      <appearance>
       <material diffuseColor="1 0 0"></material>
      </appearance>
      <cylinder height="0.03" radius="0.03"></cylinder>
     </shape>
    </transform>
    <touchSensor id="e-stop" enabled="false">
    </group>
    <!--MAGIC WAND CONTAINER-->
    <transform translation="-0.5 -0.88 0.305">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1" transparency="0.7"></material>
      </appearance>
      <box size="0.01 0.15 0.2"></box>
     </shape>
    </transform>
    <transform translation="0 -0.88 0.305">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1" transparency="0.7"></material>
      </appearance>
      <box size="0.01 0.15 0.2"></box>
     </shape>
    </transform>
    <transform translation="0.5 -0.88 0.305">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1" transparency="0.7"></material>
      </appearance>
      <box size="0.01 0.15 0.2"></box>
     </shape>
    </transform>
    <transform translation="0 -0.88 0.4">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1" transparency="0.7"></material>
      </appearance>
      <box size="1 0.15 0.01"></box>
     </shape>
    </transform>
    <transform translation="0 -0.95 0.3">
     <shape>
      <appearance>
       <material diffuseColor="1 1 1" transparency="0.7"></material>
      </appearance>
      <box size="1.01 0.01 0.18"></box>
     </shape>
    </transform>
    <!--SIGNAL LIGHT-->
    <transform translation="0 0.7 0.2">
     <shape>
      <appearance>
       <material diffuseColor="0 0 0"></material>
      </appearance>
      <cylinder height="0.1" radius="0.08"></cylinder>
     </shape>
    </transform>
    <transform translation="0 0.8 0.2">
     <shape>
      <appearance>
       <material id="red" diffuseColor="0.01 0 0" ambientIntensity='0.0933' shininess='0.9' specularColor='0.46 0.46 0.46'></material>
      </appearance>
      <cylinder height="0.1" radius="0.08"></cylinder>
     </shape>
    </transform>
    </transform>
    </transform>
    </transform>
    <timeSensor id="tp" cycleInterval="100" loop="false" enabled="false"/>
    <timeSensor id="watch" cycleInterval="1" loop="false" enabled="false"/>
    <timeSensor id="tQR1" cycleInterval="1" loop="false" enabled="false"/>
    <timeSensor id="tQR2" cycleInterval="1" loop="false" enabled="false"/>
    <timeSensor id="tQR3" cycleInterval="1" loop="false" enabled="false"/>
    <timeSensor id="tQR5" cycleInterval="1" loop="false" enabled="false"/>
    <timeSensor id="tQR6" cycleInterval="1" loop="false" enabled="false"/>
    <timeSensor id="tQR7" cycleInterval="1" loop="false" enabled="false"/>
    <timeSensor id="p1Watch" cycleInterval="1" loop="false" enabled="false"/>
    <timeSensor id="bwatch" cycleInterval="1" loop="false" enabled="false"/>
    <timeSensor id="wwatch" cycleInterval="1" loop="false" enabled="false"/>
    <timeSensor id="to1" cycleInterval="1" loop="false" enabled="false"/>
    <timeSensor id="tc1" cycleInterval="1" loop="false" enabled="false"/>
    <timeSensor id="to2" cycleInterval="1" loop="false" enabled="false"/>
    <timeSensor id="tc2" cycleInterval="1" loop="false" enabled="false"/>
    <timeSensor id="to3" cycleInterval="1" loop="false" enabled="false"/>
    <timeSensor id="tc3" cycleInterval="1" loop="false" enabled="false"/>
    <timeSensor id="to5" cycleInterval="1" loop="false" enabled="false"/>
    <timeSensor id="tc5" cycleInterval="1" loop="false" enabled="false"/>
    <timeSensor id="to6" cycleInterval="1" loop="false" enabled="false"/>
    <timeSensor id="tc6" cycleInterval="1" loop="false" enabled="false"/>
    <timeSensor id="to7" cycleInterval="1" loop="false" enabled="false"/>
    <timeSensor id="tc7" cycleInterval="1" loop="false" enabled="false"/>
    <timeSensor id="tZ11" cycleInterval="3" loop="false" enabled="false"/>
    <timeSensor id="tZ12" cycleInterval="3" loop="false" enabled="true"/>
    <timeSensor id="tZ13" cycleInterval="3" loop="false" enabled="true"/>
    <timeSensor id="tZfly1" cycleInterval="5" loop="false" enabled="false"/>
    <timeSensor id="tZ21" cycleInterval="3" loop="false" enabled="false"/>
    <timeSensor id="tZ22" cycleInterval="3" loop="false" enabled="true"/>
    <timeSensor id="tZ23" cycleInterval="3" loop="false" enabled="true"/>
    <timeSensor id="tZfly2" cycleInterval="5" loop="false" enabled="false"/>
    <timeSensor id="tZ31" cycleInterval="3" loop="false" enabled="false"/>
    <timeSensor id="tZ32" cycleInterval="3" loop="false" enabled="true"/>
    <timeSensor id="tZ33" cycleInterval="3" loop="false" enabled="true"/>
    <timeSensor id="tZfly3" cycleInterval="5" loop="false" enabled="false"/>
    <timeSensor id="tZ51" cycleInterval="3" loop="false" enabled="false"/>
    <timeSensor id="tZ52" cycleInterval="3" loop="false" enabled="true"/>
    <timeSensor id="tZ53" cycleInterval="3" loop="false" enabled="true"/>
    <timeSensor id="tZfly5" cycleInterval="5" loop="false" enabled="false"/>
    <timeSensor id="tZ61" cycleInterval="3" loop="false" enabled="false"/>
    <timeSensor id="tZ62" cycleInterval="3" loop="false" enabled="true"/>
    <timeSensor id="tZ63" cycleInterval="3" loop="false" enabled="true"/>
    <timeSensor id="tZfly6" cycleInterval="5" loop="false" enabled="false"/>
    <timeSensor id="tZ71" cycleInterval="3" loop="false" enabled="false"/>
    <timeSensor id="tZ72" cycleInterval="3" loop="false" enabled="true"/>
    <timeSensor id="tZ73" cycleInterval="3" loop="false" enabled="true"/>
    <timeSensor id="tZfly7" cycleInterval="5" loop="false" enabled="false"/>
    
    <timeSensor id="tpod1" cycleInterval="4" loop="false" enabled="false"/>
    <timeSensor id="tpod2" cycleInterval="4" loop="false" enabled="false"/>
    <timeSensor id="tpod3" cycleInterval="4" loop="false" enabled="false"/>
    <timeSensor id="tpod5" cycleInterval="4" loop="false" enabled="false"/>
    <timeSensor id="tpod6" cycleInterval="4" loop="false" enabled="false"/>
    <timeSensor id="tpod7" cycleInterval="4" loop="false" enabled="false"/>
    <timeSensor id="tW1" cycleInterval="4" loop="false" enabled="false"/>
    <timeSensor id="tW2" cycleInterval="4" loop="false"/>
    <timeSensor id="tW3" cycleInterval="4" loop="false"/>
    <timeSensor id="tWfly1" cycleInterval="5" loop="false" enabled="false"/>
    <timeSensor id="tWW1" cycleInterval="4" loop="false" enabled="false"/>
    <timeSensor id="tWW2" cycleInterval="4" loop="false"/>
    <timeSensor id="tWW3" cycleInterval="4" loop="false"/>
    <timeSensor id="tWfly2" cycleInterval="5" loop="false" enabled="false"/>
    <timeSensor id="tWWW1" cycleInterval="4" loop="false" enabled="false"/>
    <timeSensor id="tWWW2" cycleInterval="4" loop="false"/>
    <timeSensor id="tWWW3" cycleInterval="4" loop="false"/>
    <timeSensor id="tWfly3" cycleInterval="5" loop="false" enabled="false"/>
    <timeSensor id="tWWWW1" cycleInterval="4" loop="false" enabled="false"/>
    <timeSensor id="tWWWW2" cycleInterval="4" loop="false"/>
    <timeSensor id="tWWWWW1" cycleInterval="4" loop="false" enabled="false"/>
    <timeSensor id="tWWWWW2" cycleInterval="4" loop="false"/>
    <timeSensor id="tWWWWW3" cycleInterval="4" loop="false"/>
    <timeSensor id="tWfly5" cycleInterval="5" loop="false" enabled="false"/>
    <timeSensor id="tWWWWWW1" cycleInterval="4" loop="false" enabled="false"/>
    <timeSensor id="tWWWWWW2" cycleInterval="4" loop="false"/>
    <timeSensor id="tWWWWWW3" cycleInterval="4" loop="false"/>
    <timeSensor id="tWfly6" cycleInterval="5" loop="false" enabled="false"/>
    <timeSensor id="tWWWWWWW1" cycleInterval="4" loop="false" enabled="false"/>
    <timeSensor id="tWWWWWWW2" cycleInterval="4" loop="false"/>
    <timeSensor id="tWWWWWWW3" cycleInterval="4" loop="false"/>
    <timeSensor id="tWfly7" cycleInterval="5" loop="false" enabled="false"/>
    <timeSensor id="tB1" cycleInterval="5" loop="false" enabled="false"/>
    <timeSensor DEF="tB2" cycleInterval="5" loop="false"/>
    <timeSensor id="tBfly1" cycleInterval="5" loop="false" enabled="false"/>
    <timeSensor id="tBB1" cycleInterval="5" loop="false" enabled="false"/>
    <timeSensor DEF="tBB2" cycleInterval="5" loop="false"/>
    <timeSensor id="tBfly2" cycleInterval="5" loop="false" enabled="false"/>
    <timeSensor id="tBBB1" cycleInterval="5" loop="false" enabled="false"/>
    <timeSensor DEF="tBBB2" cycleInterval="5" loop="false"/>
    <timeSensor id="tBfly3" cycleInterval="5" loop="false" enabled="false"/>
    <timeSensor id="tN1" cycleInterval="2" loop="false" enabled="false"/>
    <timeSensor DEF="tN2" cycleInterval="2" loop="false"/>
    <timeSensor DEF="tN3" cycleInterval="2" loop="false"/>
    <timeSensor id="tNfly1" cycleInterval="5" loop="false" enabled="false"/>
    <timeSensor id="tNN1" cycleInterval="2" loop="false" enabled="false"/>
    <timeSensor DEF="tNN2" cycleInterval="2" loop="false"/>
    <timeSensor DEF="tNN3" cycleInterval="2" loop="false"/>
    <timeSensor id="tNfly2" cycleInterval="5" loop="false" enabled="false"/>
    <timeSensor id="tNNN1" cycleInterval="2" loop="false" enabled="false"/>
    <timeSensor DEF="tNNN2" cycleInterval="2" loop="false"/>
    <timeSensor DEF="tNNN3" cycleInterval="2" loop="false"/>
    <timeSensor id="tNfly3" cycleInterval="5" loop="false" enabled="false"/>
    <timeSensor id="tNNNN1" cycleInterval="2" loop="false" enabled="false"/>
    <timeSensor DEF="tNNNN2" cycleInterval="2" loop="false"/>
    <timeSensor DEF="tNNNN3" cycleInterval="2" loop="false"/>
    <timeSensor id="tNfly4" cycleInterval="5" loop="false" enabled="false"/>
    <timeSensor id="tNNNNN1" cycleInterval="2" loop="false" enabled="false"/>
    <timeSensor DEF="tNNNNN2" cycleInterval="2" loop="false"/>
    <timeSensor DEF="tNNNNN3" cycleInterval="2" loop="false"/>
    <timeSensor id="tNfly5" cycleInterval="5" loop="false" enabled="false"/>
    <timeSensor id="tNNNNNN1" cycleInterval="2" loop="false" enabled="false"/>
    <timeSensor DEF="tNNNNNN2" cycleInterval="2" loop="false"/>
    <timeSensor DEF="tNNNNNN3" cycleInterval="2" loop="false"/>
    <timeSensor id="tNfly6" cycleInterval="5" loop="false" enabled="false"/>
    <timeSensor id="tp1" cycleInterval="1" loop="true" enabled="false"/>
    <timeSensor id="tp11" cycleInterval="1" loop="true" enabled="false"/>
    <timeSensor id="tp12" cycleInterval="1" loop="true" enabled="false"/>
    <timeSensor id="tp13" cycleInterval="1" loop="true" enabled="false"/>
    <timeSensor id="tp2" cycleInterval="1" loop="true" enabled="false"/>
    <timeSensor id="tp21" cycleInterval="1" loop="true" enabled="false"/>
    <timeSensor id="tp22" cycleInterval="1" loop="true" enabled="false"/>
    <timeSensor id="tp23" cycleInterval="1" loop="true" enabled="false"/>
    <timeSensor id="tp3" cycleInterval="1" loop="true" enabled="false"/>
    <timeSensor id="tp31" cycleInterval="1" loop="true" enabled="false"/>
    <timeSensor id="tp32" cycleInterval="1" loop="true" enabled="false"/>
    <timeSensor id="tp33" cycleInterval="1" loop="true" enabled="false"/>
    <timeSensor id="tp5" cycleInterval="1" loop="true" enabled="false"/>
    <timeSensor id="tp51" cycleInterval="1" loop="true" enabled="false"/>
    <timeSensor id="tp52" cycleInterval="1" loop="true" enabled="false"/>
    <timeSensor id="tp53" cycleInterval="1" loop="true" enabled="false"/>
    <timeSensor id="tp6" cycleInterval="1" loop="true" enabled="false"/>
    <timeSensor id="tp61" cycleInterval="1" loop="true" enabled="false"/>
    <timeSensor id="tp62" cycleInterval="1" loop="true" enabled="false"/>
    <timeSensor id="tp63" cycleInterval="1" loop="true" enabled="false"/>
    <timeSensor id="tp7" cycleInterval="1" loop="true" enabled="false"/>
    <timeSensor id="tp71" cycleInterval="1" loop="true" enabled="false"/>
    <timeSensor id="tp72" cycleInterval="1" loop="true" enabled="false"/>
    <timeSensor id="tp73" cycleInterval="1" loop="true" enabled="false"/>
    <timeSensor DEF="t12" cycleInterval="10" loop="false">
    <timeSensor DEF="t13" cycleInterval="10" loop="false"/>
    <timeSensor id="tr" cycleInterval="0.5" loop="true" enabled="false"/>
    <timeSensor DEF="ctr" cycleInterval="0.3" loop="true"/>
    <timeSensor id="enableCheck" cycleInterval="1" loop="false" enabled="false"/>
    <timeSensor id="enableCheck2" cycleInterval="1" loop="false" enabled="false"/>
    <timeSensor id="checksWatch" cycleInterval="1" loop="false" enabled="false"/>
    <timeSensor id="scoreWatch" cycleInterval="1" loop="false" enabled="false"/>
    <timeSensor id="commEnd" cycleInterval="1" loop="false" enabled="false"/>

    <PositionInterpolator DEF="Movepackage" key="0 1"  keyValue="0 0 0   200 -200 200"/>
    
    <OrientationInterpolator id="d1" key="0 1" keyValue="0 0 1 0  0 0 1 -1.57079"/>
    <OrientationInterpolator id="d2" key="0 1" keyValue="0 0 1 0  0 0 1 1.57079"/>
    <OrientationInterpolator id="dd1" key="0 1" keyValue="0 0 1 -1.57079  0 0 1 0"/>
    <OrientationInterpolator id="dd2" key="0 1" keyValue="0 0 1 1.57079  0 0 1 0"/>
    
    <OrientationInterpolator id="d3" key="0 1" keyValue="0 0 1 0  0 0 1 -1.57079"/>
    <OrientationInterpolator id="d4" key="0 1" keyValue="0 0 1 0  0 0 1 1.57079"/>
    <OrientationInterpolator id="dd3" key="0 1" keyValue="0 0 1 -1.57079  0 0 1 0"/>
    <OrientationInterpolator id="dd4" key="0 1" keyValue="0 0 1 1.57079  0 0 1 0"/>
    
    <OrientationInterpolator id="d5" key="0 1" keyValue="0 0 1 0  0 0 1 1.57079"/>
    <OrientationInterpolator id="d6" key="0 1" keyValue="0 0 1 0  0 0 1 -1.57079"/>
    <OrientationInterpolator id="dd5" key="0 1" keyValue="0 0 1 1.57079  0 0 1 0"/>
    <OrientationInterpolator id="dd6" key="0 1" keyValue="0 0 1 -1.57079  0 0 1 0"/>
    
    <OrientationInterpolator id="d9" key="0 1" keyValue="0 0 1 0  0 0 1 -1.57079"/>
    <OrientationInterpolator id="d10" key="0 1" keyValue="0 0 1 0  0 0 1 1.57079"/>
    <OrientationInterpolator id="dd9" key="0 1" keyValue="0 0 1 -1.57079  0 0 1 0"/>
    <OrientationInterpolator id="dd10" key="0 1" keyValue="0 0 1 1.57079  0 0 1 0"/>
    
    <OrientationInterpolator id="d11" key="0 1" keyValue="0 0 1 0  0 0 1 -1.57079"/>
    <OrientationInterpolator id="d12" key="0 1" keyValue="0 0 1 0  0 0 1 1.57079"/>
    <OrientationInterpolator id="dd11" key="0 1" keyValue="0 0 1 -1.57079  0 0 1 0"/>
    <OrientationInterpolator id="dd12" key="0 1" keyValue="0 0 1 1.57079  0 0 1 0"/>
    
    <OrientationInterpolator id="d13" key="0 1" keyValue="0 0 1 0  0 0 1 -1.57079"/>
    <OrientationInterpolator id="d14" key="0 1" keyValue="0 0 1 0  0 0 1 1.57079"/>
    <OrientationInterpolator id="dd13" key="0 1" keyValue="0 0 1 -1.57079  0 0 1 0"/>
    <OrientationInterpolator id="dd14" key="0 1" keyValue="0 0 1 1.57079  0 0 1 0"/>
    
    <PositionInterpolator DEF="Z1" key="0 1"  keyValue="9.05 1.5 10.4  10 1.78 4.1"/>
    <OrientationInterpolator DEF="Z2" key="0 0.8 1"  keyValue="0 1 0 0  0 1 0 0  0 1 0 -3.14159"/>
    <OrientationInterpolator DEF="Z3" key="0 0.8 1"  keyValue="1 0 0 0  1 0 0 0  1 0 0 0.24"/>
    <PositionInterpolator DEF="Zfly1" key="0 1"  keyValue="0 0 0  0 25 -100"/>
    <OrientationInterpolator DEF="p11" key="0 0.001 1"  keyValue="1 0 0 0  1 0 0 1.572  1 0 0 1.572"/>
    <OrientationInterpolator DEF="p12" key="0 0.001 1"  keyValue="0 1 0 0  0 1 0 1.572  0 1 0 1.572"/>
    <OrientationInterpolator DEF="p13" key="0 0.001 1"  keyValue="0 1 0 0  0 1 0 -1.572  0 1 0 -1.572"/>
    <OrientationInterpolator DEF="p14" key="0 0.001 1"  keyValue="1 0 0 0  1 0 0 1.572  1 0 0 1.572"/>
    <OrientationInterpolator DEF="p15" key="0 0.001 1"  keyValue="0 1 0 0  0 1 0 1.572  0 1 0 1.572"/>
    <OrientationInterpolator DEF="p16" key="0 0.001 1"  keyValue="0 1 0 0  0 1 0 -1.572  0 1 0 -1.572"/>
    <OrientationInterpolator DEF='p1'  key='0 0.002 0.004 0.006 0.008 0.010 0.012 0.014 0.016 0.018 0.020 0.022 0.024 0.026 0.028 0.030 0.032 0.034 0.036 0.038 0.040 0.042 0.044 0.046 0.048 0.050 0.052 0.054 0.056 0.058 0.060 0.062 0.064 0.066 0.068 0.070 0.072 0.074 0.076 0.078 0.080 0.082 0.084 0.086 0.088 0.090 0.092 0.094 0.096 0.098 0.100 0.102 0.104 0.106 0.108 0.110 0.112 0.114 0.116 0.118 0.120 0.122 0.124 0.126 0.128 0.130 0.132 0.134 0.136 0.138 0.140 0.142 0.144 0.146 0.148 0.150 0.152 0.154 0.156 0.158 0.160 0.162 0.164 0.166 0.168 0.170 0.172 0.174 0.176 0.178 0.180 0.182 0.184 0.186 0.188 0.190 0.192 0.194 0.196 0.198 0.200 0.202 0.204 0.206 0.208 0.210 0.212 0.214 0.216 0.218 0.220 0.222 0.224 0.226 0.228 0.230 0.232 0.234 0.236 0.238 0.240 0.242 0.244 0.246 0.248 0.250 0.252 0.254 0.256 0.258 0.260 0.262 0.264 0.266 0.268 0.270 0.272 0.274 0.276 0.278 0.280 0.282 0.284 0.286 0.288 0.290 0.292 0.294 0.296 0.298 0.300 0.302 0.304 0.306 0.308 0.310 0.312 0.314 0.316 0.318 0.320 0.322 0.324 0.326 0.328 0.330 0.332 0.334 0.336 0.338 0.340 0.342 0.344 0.346 0.348 0.350 0.352 0.354 0.356 0.358 0.360 0.362 0.364 0.366 0.368 0.370 0.372 0.374 0.376 0.378 0.380 0.382 0.384 0.386 0.388 0.390 0.392 0.394 0.396 0.398 0.400 0.402 0.404 0.406 0.408 0.410 0.412 0.414 0.416 0.418 0.420 0.422 0.424 0.426 0.428 0.430 0.432 0.434 0.436 0.438 0.440 0.442 0.444 0.446 0.448 0.450 0.452 0.454 0.456 0.458 0.460 0.462 0.464 0.466 0.468 0.470 0.472 0.474 0.476 0.478 0.480 0.482 0.484 0.486 0.488 0.490 0.492 0.494 0.496 0.498 0.500 0.502 0.504 0.506 0.508 0.510 0.512 0.514 0.516 0.518 0.520 0.522 0.524 0.526 0.528 0.530 0.532 0.534 0.536 0.538 0.540 0.542 0.544 0.546 0.548 0.550 0.552 0.554 0.556 0.558 0.560 0.562 0.564 0.566 0.568 0.570 0.572 0.574 0.576 0.578 0.580 0.582 0.584 0.586 0.588 0.590 0.592 0.594 0.596 0.598 0.600 0.602 0.604 0.606 0.608 0.610 0.612 0.614 0.616 0.618 0.620 0.622 0.624 0.626 0.628 0.630 0.632 0.634 0.636 0.638 0.640 0.642 0.644 0.646 0.648 0.650 0.652 0.654 0.656 0.658 0.660 0.662 0.664 0.666 0.668 0.670 0.672 0.674 0.676 0.678 0.680 0.682 0.684 0.686 0.688 0.690 0.692 0.694 0.696 0.698 0.700 0.702 0.704 0.706 0.708 0.710 0.712 0.714 0.716 0.718 0.720 0.722 0.724 0.726 0.728 0.730 0.732 0.734 0.736 0.738 0.740 0.742 0.744 0.746 0.748 0.750 0.752 0.754 0.756 0.758 0.760 0.762 0.764 0.766 0.768 0.770 0.772 0.774 0.776 0.778 0.780 0.782 0.784 0.786 0.788 0.790 0.792 0.794 0.796 0.798 0.800 0.802 0.804 0.806 0.808 0.810 0.812 0.814 0.816 0.818 0.820 0.822 0.824 0.826 0.828 0.830 0.832 0.834 0.836 0.838 0.840 0.842 0.844 0.846 0.848 0.850 0.852 0.854 0.856 0.858 0.860 0.862 0.864 0.866 0.868 0.870 0.872 0.874 0.876 0.878 0.880 0.882 0.884 0.886 0.888 0.890 0.892 0.894 0.896 0.898 0.900 0.902 0.904 0.906 0.908 0.910 0.912 0.914 0.916 0.918 0.920 0.922 0.924 0.926 0.928 0.930 0.932 0.934 0.936 0.938 0.940 0.942 0.944 0.946 0.948 0.950 0.952 0.954 0.956 0.958 0.960 0.962 0.964 0.966 0.968 0.970 0.972 0.974 0.976 0.978 0.980 0.982 0.984 0.986 0.988 0.990 0.992 0.994 0.996 0.998 1' keyValue='0 0 1 0  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 0  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317'/>

    <PositionInterpolator DEF="ZZ1" key="0 1"  keyValue="9.96 1.5 10.4  10 1.78 4.1"/>
    <OrientationInterpolator DEF="ZZ2" key="0 0.8 1"  keyValue="0 1 0 0  0 1 0 0  0 1 0 -3.14159"/>
    <OrientationInterpolator DEF="ZZ3" key="0 0.8 1"  keyValue="1 0 0 0  1 0 0 0  1 0 0 0.24"/>
    <PositionInterpolator DEF="Zfly2" key="0 1"  keyValue="0 0 0  0 25 -100"/>
    <OrientationInterpolator DEF="p21" key="0 0.001 1"  keyValue="1 0 0 0  1 0 0 1.572  1 0 0 1.572"/>
    <OrientationInterpolator DEF="p22" key="0 0.001 1"  keyValue="0 1 0 0  0 1 0 1.572  0 1 0 1.572"/>
    <OrientationInterpolator DEF="p23" key="0 0.001 1"  keyValue="0 1 0 0  0 1 0 -1.572  0 1 0 -1.572"/>
    <OrientationInterpolator DEF="p24" key="0 0.001 1"  keyValue="1 0 0 0  1 0 0 1.572  1 0 0 1.572"/>
    <OrientationInterpolator DEF="p25" key="0 0.001 1"  keyValue="0 1 0 0  0 1 0 1.572  0 1 0 1.572"/>
    <OrientationInterpolator DEF="p26" key="0 0.001 1"  keyValue="0 1 0 0  0 1 0 -1.572  0 1 0 -1.572"/>
    <OrientationInterpolator DEF='p2'  key='0 0.002 0.004 0.006 0.008 0.010 0.012 0.014 0.016 0.018 0.020 0.022 0.024 0.026 0.028 0.030 0.032 0.034 0.036 0.038 0.040 0.042 0.044 0.046 0.048 0.050 0.052 0.054 0.056 0.058 0.060 0.062 0.064 0.066 0.068 0.070 0.072 0.074 0.076 0.078 0.080 0.082 0.084 0.086 0.088 0.090 0.092 0.094 0.096 0.098 0.100 0.102 0.104 0.106 0.108 0.110 0.112 0.114 0.116 0.118 0.120 0.122 0.124 0.126 0.128 0.130 0.132 0.134 0.136 0.138 0.140 0.142 0.144 0.146 0.148 0.150 0.152 0.154 0.156 0.158 0.160 0.162 0.164 0.166 0.168 0.170 0.172 0.174 0.176 0.178 0.180 0.182 0.184 0.186 0.188 0.190 0.192 0.194 0.196 0.198 0.200 0.202 0.204 0.206 0.208 0.210 0.212 0.214 0.216 0.218 0.220 0.222 0.224 0.226 0.228 0.230 0.232 0.234 0.236 0.238 0.240 0.242 0.244 0.246 0.248 0.250 0.252 0.254 0.256 0.258 0.260 0.262 0.264 0.266 0.268 0.270 0.272 0.274 0.276 0.278 0.280 0.282 0.284 0.286 0.288 0.290 0.292 0.294 0.296 0.298 0.300 0.302 0.304 0.306 0.308 0.310 0.312 0.314 0.316 0.318 0.320 0.322 0.324 0.326 0.328 0.330 0.332 0.334 0.336 0.338 0.340 0.342 0.344 0.346 0.348 0.350 0.352 0.354 0.356 0.358 0.360 0.362 0.364 0.366 0.368 0.370 0.372 0.374 0.376 0.378 0.380 0.382 0.384 0.386 0.388 0.390 0.392 0.394 0.396 0.398 0.400 0.402 0.404 0.406 0.408 0.410 0.412 0.414 0.416 0.418 0.420 0.422 0.424 0.426 0.428 0.430 0.432 0.434 0.436 0.438 0.440 0.442 0.444 0.446 0.448 0.450 0.452 0.454 0.456 0.458 0.460 0.462 0.464 0.466 0.468 0.470 0.472 0.474 0.476 0.478 0.480 0.482 0.484 0.486 0.488 0.490 0.492 0.494 0.496 0.498 0.500 0.502 0.504 0.506 0.508 0.510 0.512 0.514 0.516 0.518 0.520 0.522 0.524 0.526 0.528 0.530 0.532 0.534 0.536 0.538 0.540 0.542 0.544 0.546 0.548 0.550 0.552 0.554 0.556 0.558 0.560 0.562 0.564 0.566 0.568 0.570 0.572 0.574 0.576 0.578 0.580 0.582 0.584 0.586 0.588 0.590 0.592 0.594 0.596 0.598 0.600 0.602 0.604 0.606 0.608 0.610 0.612 0.614 0.616 0.618 0.620 0.622 0.624 0.626 0.628 0.630 0.632 0.634 0.636 0.638 0.640 0.642 0.644 0.646 0.648 0.650 0.652 0.654 0.656 0.658 0.660 0.662 0.664 0.666 0.668 0.670 0.672 0.674 0.676 0.678 0.680 0.682 0.684 0.686 0.688 0.690 0.692 0.694 0.696 0.698 0.700 0.702 0.704 0.706 0.708 0.710 0.712 0.714 0.716 0.718 0.720 0.722 0.724 0.726 0.728 0.730 0.732 0.734 0.736 0.738 0.740 0.742 0.744 0.746 0.748 0.750 0.752 0.754 0.756 0.758 0.760 0.762 0.764 0.766 0.768 0.770 0.772 0.774 0.776 0.778 0.780 0.782 0.784 0.786 0.788 0.790 0.792 0.794 0.796 0.798 0.800 0.802 0.804 0.806 0.808 0.810 0.812 0.814 0.816 0.818 0.820 0.822 0.824 0.826 0.828 0.830 0.832 0.834 0.836 0.838 0.840 0.842 0.844 0.846 0.848 0.850 0.852 0.854 0.856 0.858 0.860 0.862 0.864 0.866 0.868 0.870 0.872 0.874 0.876 0.878 0.880 0.882 0.884 0.886 0.888 0.890 0.892 0.894 0.896 0.898 0.900 0.902 0.904 0.906 0.908 0.910 0.912 0.914 0.916 0.918 0.920 0.922 0.924 0.926 0.928 0.930 0.932 0.934 0.936 0.938 0.940 0.942 0.944 0.946 0.948 0.950 0.952 0.954 0.956 0.958 0.960 0.962 0.964 0.966 0.968 0.970 0.972 0.974 0.976 0.978 0.980 0.982 0.984 0.986 0.988 0.990 0.992 0.994 0.996 0.998 1' keyValue='0 0 1 0  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 0  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317'/>

    <PositionInterpolator DEF="ZZZ1" key="0 1"  keyValue="11.05 1.5 10.4  10 1.78 4.1"/>
    <OrientationInterpolator DEF="ZZZ2" key="0 0.8 1"  keyValue="0 1 0 0  0 1 0 0  0 1 0 -3.14159"/>
    <OrientationInterpolator DEF="ZZZ3" key="0 0.8 1"  keyValue="1 0 0 0  1 0 0 0  1 0 0 0.24"/>
    <PositionInterpolator DEF="Zfly3" key="0 1"  keyValue="0 0 0  0 25 -100"/>
    <OrientationInterpolator DEF="p31" key="0 0.001 1"  keyValue="1 0 0 0  1 0 0 1.572  1 0 0 1.572"/>
    <OrientationInterpolator DEF="p32" key="0 0.001 1"  keyValue="0 1 0 0  0 1 0 1.572  0 1 0 1.572"/>
    <OrientationInterpolator DEF="p33" key="0 0.001 1"  keyValue="0 1 0 0  0 1 0 -1.572  0 1 0 -1.572"/>
    <OrientationInterpolator DEF="p34" key="0 0.001 1"  keyValue="1 0 0 0  1 0 0 1.572  1 0 0 1.572"/>
    <OrientationInterpolator DEF="p35" key="0 0.001 1"  keyValue="0 1 0 0  0 1 0 1.572  0 1 0 1.572"/>
    <OrientationInterpolator DEF="p36" key="0 0.001 1"  keyValue="0 1 0 0  0 1 0 -1.572  0 1 0 -1.572"/>
    <OrientationInterpolator DEF='p3'  key='0 0.002 0.004 0.006 0.008 0.010 0.012 0.014 0.016 0.018 0.020 0.022 0.024 0.026 0.028 0.030 0.032 0.034 0.036 0.038 0.040 0.042 0.044 0.046 0.048 0.050 0.052 0.054 0.056 0.058 0.060 0.062 0.064 0.066 0.068 0.070 0.072 0.074 0.076 0.078 0.080 0.082 0.084 0.086 0.088 0.090 0.092 0.094 0.096 0.098 0.100 0.102 0.104 0.106 0.108 0.110 0.112 0.114 0.116 0.118 0.120 0.122 0.124 0.126 0.128 0.130 0.132 0.134 0.136 0.138 0.140 0.142 0.144 0.146 0.148 0.150 0.152 0.154 0.156 0.158 0.160 0.162 0.164 0.166 0.168 0.170 0.172 0.174 0.176 0.178 0.180 0.182 0.184 0.186 0.188 0.190 0.192 0.194 0.196 0.198 0.200 0.202 0.204 0.206 0.208 0.210 0.212 0.214 0.216 0.218 0.220 0.222 0.224 0.226 0.228 0.230 0.232 0.234 0.236 0.238 0.240 0.242 0.244 0.246 0.248 0.250 0.252 0.254 0.256 0.258 0.260 0.262 0.264 0.266 0.268 0.270 0.272 0.274 0.276 0.278 0.280 0.282 0.284 0.286 0.288 0.290 0.292 0.294 0.296 0.298 0.300 0.302 0.304 0.306 0.308 0.310 0.312 0.314 0.316 0.318 0.320 0.322 0.324 0.326 0.328 0.330 0.332 0.334 0.336 0.338 0.340 0.342 0.344 0.346 0.348 0.350 0.352 0.354 0.356 0.358 0.360 0.362 0.364 0.366 0.368 0.370 0.372 0.374 0.376 0.378 0.380 0.382 0.384 0.386 0.388 0.390 0.392 0.394 0.396 0.398 0.400 0.402 0.404 0.406 0.408 0.410 0.412 0.414 0.416 0.418 0.420 0.422 0.424 0.426 0.428 0.430 0.432 0.434 0.436 0.438 0.440 0.442 0.444 0.446 0.448 0.450 0.452 0.454 0.456 0.458 0.460 0.462 0.464 0.466 0.468 0.470 0.472 0.474 0.476 0.478 0.480 0.482 0.484 0.486 0.488 0.490 0.492 0.494 0.496 0.498 0.500 0.502 0.504 0.506 0.508 0.510 0.512 0.514 0.516 0.518 0.520 0.522 0.524 0.526 0.528 0.530 0.532 0.534 0.536 0.538 0.540 0.542 0.544 0.546 0.548 0.550 0.552 0.554 0.556 0.558 0.560 0.562 0.564 0.566 0.568 0.570 0.572 0.574 0.576 0.578 0.580 0.582 0.584 0.586 0.588 0.590 0.592 0.594 0.596 0.598 0.600 0.602 0.604 0.606 0.608 0.610 0.612 0.614 0.616 0.618 0.620 0.622 0.624 0.626 0.628 0.630 0.632 0.634 0.636 0.638 0.640 0.642 0.644 0.646 0.648 0.650 0.652 0.654 0.656 0.658 0.660 0.662 0.664 0.666 0.668 0.670 0.672 0.674 0.676 0.678 0.680 0.682 0.684 0.686 0.688 0.690 0.692 0.694 0.696 0.698 0.700 0.702 0.704 0.706 0.708 0.710 0.712 0.714 0.716 0.718 0.720 0.722 0.724 0.726 0.728 0.730 0.732 0.734 0.736 0.738 0.740 0.742 0.744 0.746 0.748 0.750 0.752 0.754 0.756 0.758 0.760 0.762 0.764 0.766 0.768 0.770 0.772 0.774 0.776 0.778 0.780 0.782 0.784 0.786 0.788 0.790 0.792 0.794 0.796 0.798 0.800 0.802 0.804 0.806 0.808 0.810 0.812 0.814 0.816 0.818 0.820 0.822 0.824 0.826 0.828 0.830 0.832 0.834 0.836 0.838 0.840 0.842 0.844 0.846 0.848 0.850 0.852 0.854 0.856 0.858 0.860 0.862 0.864 0.866 0.868 0.870 0.872 0.874 0.876 0.878 0.880 0.882 0.884 0.886 0.888 0.890 0.892 0.894 0.896 0.898 0.900 0.902 0.904 0.906 0.908 0.910 0.912 0.914 0.916 0.918 0.920 0.922 0.924 0.926 0.928 0.930 0.932 0.934 0.936 0.938 0.940 0.942 0.944 0.946 0.948 0.950 0.952 0.954 0.956 0.958 0.960 0.962 0.964 0.966 0.968 0.970 0.972 0.974 0.976 0.978 0.980 0.982 0.984 0.986 0.988 0.990 0.992 0.994 0.996 0.998 1' keyValue='0 0 1 0  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 0  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317'/>

    <PositionInterpolator DEF="ZZZZZ1" key="0 1"  keyValue="11.53 1.5 10  10 1.78 4.1"/>
    <OrientationInterpolator DEF="ZZZZZ2" key="0 0.8 1"  keyValue="0 1 0 0  0 1 0 0  0 1 0 -3.14159"/>
    <OrientationInterpolator DEF="ZZZZZ3" key="0 0.8 1"  keyValue="1 0 0 0  1 0 0 0  1 0 0 0.24"/>
    <PositionInterpolator DEF="Zfly5" key="0 1"  keyValue="0 0 0  0 25 -100"/>
    <OrientationInterpolator DEF="p51" key="0 0.001 1"  keyValue="1 0 0 0  1 0 0 1.572  1 0 0 1.572"/>
    <OrientationInterpolator DEF="p52" key="0 0.001 1"  keyValue="0 1 0 0  0 1 0 1.572  0 1 0 1.572"/>
    <OrientationInterpolator DEF="p53" key="0 0.001 1"  keyValue="0 1 0 0  0 1 0 -1.572  0 1 0 -1.572"/>
    <OrientationInterpolator DEF="p54" key="0 0.001 1"  keyValue="1 0 0 0  1 0 0 1.572  1 0 0 1.572"/>
    <OrientationInterpolator DEF="p55" key="0 0.001 1"  keyValue="0 1 0 0  0 1 0 1.572  0 1 0 1.572"/>
    <OrientationInterpolator DEF="p56" key="0 0.001 1"  keyValue="0 1 0 0  0 1 0 -1.572  0 1 0 -1.572"/>
    <OrientationInterpolator DEF='p5'  key='0 0.002 0.004 0.006 0.008 0.010 0.012 0.014 0.016 0.018 0.020 0.022 0.024 0.026 0.028 0.030 0.032 0.034 0.036 0.038 0.040 0.042 0.044 0.046 0.048 0.050 0.052 0.054 0.056 0.058 0.060 0.062 0.064 0.066 0.068 0.070 0.072 0.074 0.076 0.078 0.080 0.082 0.084 0.086 0.088 0.090 0.092 0.094 0.096 0.098 0.100 0.102 0.104 0.106 0.108 0.110 0.112 0.114 0.116 0.118 0.120 0.122 0.124 0.126 0.128 0.130 0.132 0.134 0.136 0.138 0.140 0.142 0.144 0.146 0.148 0.150 0.152 0.154 0.156 0.158 0.160 0.162 0.164 0.166 0.168 0.170 0.172 0.174 0.176 0.178 0.180 0.182 0.184 0.186 0.188 0.190 0.192 0.194 0.196 0.198 0.200 0.202 0.204 0.206 0.208 0.210 0.212 0.214 0.216 0.218 0.220 0.222 0.224 0.226 0.228 0.230 0.232 0.234 0.236 0.238 0.240 0.242 0.244 0.246 0.248 0.250 0.252 0.254 0.256 0.258 0.260 0.262 0.264 0.266 0.268 0.270 0.272 0.274 0.276 0.278 0.280 0.282 0.284 0.286 0.288 0.290 0.292 0.294 0.296 0.298 0.300 0.302 0.304 0.306 0.308 0.310 0.312 0.314 0.316 0.318 0.320 0.322 0.324 0.326 0.328 0.330 0.332 0.334 0.336 0.338 0.340 0.342 0.344 0.346 0.348 0.350 0.352 0.354 0.356 0.358 0.360 0.362 0.364 0.366 0.368 0.370 0.372 0.374 0.376 0.378 0.380 0.382 0.384 0.386 0.388 0.390 0.392 0.394 0.396 0.398 0.400 0.402 0.404 0.406 0.408 0.410 0.412 0.414 0.416 0.418 0.420 0.422 0.424 0.426 0.428 0.430 0.432 0.434 0.436 0.438 0.440 0.442 0.444 0.446 0.448 0.450 0.452 0.454 0.456 0.458 0.460 0.462 0.464 0.466 0.468 0.470 0.472 0.474 0.476 0.478 0.480 0.482 0.484 0.486 0.488 0.490 0.492 0.494 0.496 0.498 0.500 0.502 0.504 0.506 0.508 0.510 0.512 0.514 0.516 0.518 0.520 0.522 0.524 0.526 0.528 0.530 0.532 0.534 0.536 0.538 0.540 0.542 0.544 0.546 0.548 0.550 0.552 0.554 0.556 0.558 0.560 0.562 0.564 0.566 0.568 0.570 0.572 0.574 0.576 0.578 0.580 0.582 0.584 0.586 0.588 0.590 0.592 0.594 0.596 0.598 0.600 0.602 0.604 0.606 0.608 0.610 0.612 0.614 0.616 0.618 0.620 0.622 0.624 0.626 0.628 0.630 0.632 0.634 0.636 0.638 0.640 0.642 0.644 0.646 0.648 0.650 0.652 0.654 0.656 0.658 0.660 0.662 0.664 0.666 0.668 0.670 0.672 0.674 0.676 0.678 0.680 0.682 0.684 0.686 0.688 0.690 0.692 0.694 0.696 0.698 0.700 0.702 0.704 0.706 0.708 0.710 0.712 0.714 0.716 0.718 0.720 0.722 0.724 0.726 0.728 0.730 0.732 0.734 0.736 0.738 0.740 0.742 0.744 0.746 0.748 0.750 0.752 0.754 0.756 0.758 0.760 0.762 0.764 0.766 0.768 0.770 0.772 0.774 0.776 0.778 0.780 0.782 0.784 0.786 0.788 0.790 0.792 0.794 0.796 0.798 0.800 0.802 0.804 0.806 0.808 0.810 0.812 0.814 0.816 0.818 0.820 0.822 0.824 0.826 0.828 0.830 0.832 0.834 0.836 0.838 0.840 0.842 0.844 0.846 0.848 0.850 0.852 0.854 0.856 0.858 0.860 0.862 0.864 0.866 0.868 0.870 0.872 0.874 0.876 0.878 0.880 0.882 0.884 0.886 0.888 0.890 0.892 0.894 0.896 0.898 0.900 0.902 0.904 0.906 0.908 0.910 0.912 0.914 0.916 0.918 0.920 0.922 0.924 0.926 0.928 0.930 0.932 0.934 0.936 0.938 0.940 0.942 0.944 0.946 0.948 0.950 0.952 0.954 0.956 0.958 0.960 0.962 0.964 0.966 0.968 0.970 0.972 0.974 0.976 0.978 0.980 0.982 0.984 0.986 0.988 0.990 0.992 0.994 0.996 0.998 1' keyValue='0 0 1 0  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 0  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317'/>
     
    <PositionInterpolator DEF="ZZZZZZ1" key="0 1"  keyValue="10.5 1.5 10  10 1.78 4.1"/>
    <OrientationInterpolator DEF="ZZZZZZ2" key="0 0.8 1"  keyValue="0 1 0 0  0 1 0 0  0 1 0 -3.14159"/>
    <OrientationInterpolator DEF="ZZZZZZ3" key="0 0.8 1"  keyValue="1 0 0 0  1 0 0 0  1 0 0 0.24"/>
    <PositionInterpolator DEF="Zfly6" key="0 1"  keyValue="0 0 0  0 25 -100"/>
    <OrientationInterpolator DEF="p61" key="0 0.001 1"  keyValue="1 0 0 0  1 0 0 1.572  1 0 0 1.572"/>
    <OrientationInterpolator DEF="p62" key="0 0.001 1"  keyValue="0 1 0 0  0 1 0 1.572  0 1 0 1.572"/>
    <OrientationInterpolator DEF="p63" key="0 0.001 1"  keyValue="0 1 0 0  0 1 0 -1.572  0 1 0 -1.572"/>
    <OrientationInterpolator DEF="p64" key="0 0.001 1"  keyValue="1 0 0 0  1 0 0 1.572  1 0 0 1.572"/>
    <OrientationInterpolator DEF="p65" key="0 0.001 1"  keyValue="0 1 0 0  0 1 0 1.572  0 1 0 1.572"/>
    <OrientationInterpolator DEF="p66" key="0 0.001 1"  keyValue="0 1 0 0  0 1 0 -1.572  0 1 0 -1.572"/>
    <OrientationInterpolator DEF='p6'  key='0 0.002 0.004 0.006 0.008 0.010 0.012 0.014 0.016 0.018 0.020 0.022 0.024 0.026 0.028 0.030 0.032 0.034 0.036 0.038 0.040 0.042 0.044 0.046 0.048 0.050 0.052 0.054 0.056 0.058 0.060 0.062 0.064 0.066 0.068 0.070 0.072 0.074 0.076 0.078 0.080 0.082 0.084 0.086 0.088 0.090 0.092 0.094 0.096 0.098 0.100 0.102 0.104 0.106 0.108 0.110 0.112 0.114 0.116 0.118 0.120 0.122 0.124 0.126 0.128 0.130 0.132 0.134 0.136 0.138 0.140 0.142 0.144 0.146 0.148 0.150 0.152 0.154 0.156 0.158 0.160 0.162 0.164 0.166 0.168 0.170 0.172 0.174 0.176 0.178 0.180 0.182 0.184 0.186 0.188 0.190 0.192 0.194 0.196 0.198 0.200 0.202 0.204 0.206 0.208 0.210 0.212 0.214 0.216 0.218 0.220 0.222 0.224 0.226 0.228 0.230 0.232 0.234 0.236 0.238 0.240 0.242 0.244 0.246 0.248 0.250 0.252 0.254 0.256 0.258 0.260 0.262 0.264 0.266 0.268 0.270 0.272 0.274 0.276 0.278 0.280 0.282 0.284 0.286 0.288 0.290 0.292 0.294 0.296 0.298 0.300 0.302 0.304 0.306 0.308 0.310 0.312 0.314 0.316 0.318 0.320 0.322 0.324 0.326 0.328 0.330 0.332 0.334 0.336 0.338 0.340 0.342 0.344 0.346 0.348 0.350 0.352 0.354 0.356 0.358 0.360 0.362 0.364 0.366 0.368 0.370 0.372 0.374 0.376 0.378 0.380 0.382 0.384 0.386 0.388 0.390 0.392 0.394 0.396 0.398 0.400 0.402 0.404 0.406 0.408 0.410 0.412 0.414 0.416 0.418 0.420 0.422 0.424 0.426 0.428 0.430 0.432 0.434 0.436 0.438 0.440 0.442 0.444 0.446 0.448 0.450 0.452 0.454 0.456 0.458 0.460 0.462 0.464 0.466 0.468 0.470 0.472 0.474 0.476 0.478 0.480 0.482 0.484 0.486 0.488 0.490 0.492 0.494 0.496 0.498 0.500 0.502 0.504 0.506 0.508 0.510 0.512 0.514 0.516 0.518 0.520 0.522 0.524 0.526 0.528 0.530 0.532 0.534 0.536 0.538 0.540 0.542 0.544 0.546 0.548 0.550 0.552 0.554 0.556 0.558 0.560 0.562 0.564 0.566 0.568 0.570 0.572 0.574 0.576 0.578 0.580 0.582 0.584 0.586 0.588 0.590 0.592 0.594 0.596 0.598 0.600 0.602 0.604 0.606 0.608 0.610 0.612 0.614 0.616 0.618 0.620 0.622 0.624 0.626 0.628 0.630 0.632 0.634 0.636 0.638 0.640 0.642 0.644 0.646 0.648 0.650 0.652 0.654 0.656 0.658 0.660 0.662 0.664 0.666 0.668 0.670 0.672 0.674 0.676 0.678 0.680 0.682 0.684 0.686 0.688 0.690 0.692 0.694 0.696 0.698 0.700 0.702 0.704 0.706 0.708 0.710 0.712 0.714 0.716 0.718 0.720 0.722 0.724 0.726 0.728 0.730 0.732 0.734 0.736 0.738 0.740 0.742 0.744 0.746 0.748 0.750 0.752 0.754 0.756 0.758 0.760 0.762 0.764 0.766 0.768 0.770 0.772 0.774 0.776 0.778 0.780 0.782 0.784 0.786 0.788 0.790 0.792 0.794 0.796 0.798 0.800 0.802 0.804 0.806 0.808 0.810 0.812 0.814 0.816 0.818 0.820 0.822 0.824 0.826 0.828 0.830 0.832 0.834 0.836 0.838 0.840 0.842 0.844 0.846 0.848 0.850 0.852 0.854 0.856 0.858 0.860 0.862 0.864 0.866 0.868 0.870 0.872 0.874 0.876 0.878 0.880 0.882 0.884 0.886 0.888 0.890 0.892 0.894 0.896 0.898 0.900 0.902 0.904 0.906 0.908 0.910 0.912 0.914 0.916 0.918 0.920 0.922 0.924 0.926 0.928 0.930 0.932 0.934 0.936 0.938 0.940 0.942 0.944 0.946 0.948 0.950 0.952 0.954 0.956 0.958 0.960 0.962 0.964 0.966 0.968 0.970 0.972 0.974 0.976 0.978 0.980 0.982 0.984 0.986 0.988 0.990 0.992 0.994 0.996 0.998 1' keyValue='0 0 1 0  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 0  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317'/>
    
    <PositionInterpolator DEF="ZZZZZZZ1" key="0 1"  keyValue="9.48 1.5 10  10 1.78 4.1"/>
    <OrientationInterpolator DEF="ZZZZZZZ2" key="0 0.8 1"  keyValue="0 1 0 0  0 1 0 0  0 1 0 -3.14159"/>
    <OrientationInterpolator DEF="ZZZZZZZ3" key="0 0.8 1"  keyValue="1 0 0 0  1 0 0 0  1 0 0 0.24"/>
    <PositionInterpolator DEF="Zfly7" key="0 1"  keyValue="0 0 0  0 25 -100"/>
    <OrientationInterpolator DEF="p71" key="0 0.001 1"  keyValue="1 0 0 0  1 0 0 1.572  1 0 0 1.572"/>
    <OrientationInterpolator DEF="p72" key="0 0.001 1"  keyValue="0 1 0 0  0 1 0 1.572  0 1 0 1.572"/>
    <OrientationInterpolator DEF="p73" key="0 0.001 1"  keyValue="0 1 0 0  0 1 0 -1.572  0 1 0 -1.572"/>
    <OrientationInterpolator DEF="p74" key="0 0.001 1"  keyValue="1 0 0 0  1 0 0 1.572  1 0 0 1.572"/>
    <OrientationInterpolator DEF="p75" key="0 0.001 1"  keyValue="0 1 0 0  0 1 0 1.572  0 1 0 1.572"/>
    <OrientationInterpolator DEF="p76" key="0 0.001 1"  keyValue="0 1 0 0  0 1 0 -1.572  0 1 0 -1.572"/>
    <OrientationInterpolator DEF='p7'  key='0 0.002 0.004 0.006 0.008 0.010 0.012 0.014 0.016 0.018 0.020 0.022 0.024 0.026 0.028 0.030 0.032 0.034 0.036 0.038 0.040 0.042 0.044 0.046 0.048 0.050 0.052 0.054 0.056 0.058 0.060 0.062 0.064 0.066 0.068 0.070 0.072 0.074 0.076 0.078 0.080 0.082 0.084 0.086 0.088 0.090 0.092 0.094 0.096 0.098 0.100 0.102 0.104 0.106 0.108 0.110 0.112 0.114 0.116 0.118 0.120 0.122 0.124 0.126 0.128 0.130 0.132 0.134 0.136 0.138 0.140 0.142 0.144 0.146 0.148 0.150 0.152 0.154 0.156 0.158 0.160 0.162 0.164 0.166 0.168 0.170 0.172 0.174 0.176 0.178 0.180 0.182 0.184 0.186 0.188 0.190 0.192 0.194 0.196 0.198 0.200 0.202 0.204 0.206 0.208 0.210 0.212 0.214 0.216 0.218 0.220 0.222 0.224 0.226 0.228 0.230 0.232 0.234 0.236 0.238 0.240 0.242 0.244 0.246 0.248 0.250 0.252 0.254 0.256 0.258 0.260 0.262 0.264 0.266 0.268 0.270 0.272 0.274 0.276 0.278 0.280 0.282 0.284 0.286 0.288 0.290 0.292 0.294 0.296 0.298 0.300 0.302 0.304 0.306 0.308 0.310 0.312 0.314 0.316 0.318 0.320 0.322 0.324 0.326 0.328 0.330 0.332 0.334 0.336 0.338 0.340 0.342 0.344 0.346 0.348 0.350 0.352 0.354 0.356 0.358 0.360 0.362 0.364 0.366 0.368 0.370 0.372 0.374 0.376 0.378 0.380 0.382 0.384 0.386 0.388 0.390 0.392 0.394 0.396 0.398 0.400 0.402 0.404 0.406 0.408 0.410 0.412 0.414 0.416 0.418 0.420 0.422 0.424 0.426 0.428 0.430 0.432 0.434 0.436 0.438 0.440 0.442 0.444 0.446 0.448 0.450 0.452 0.454 0.456 0.458 0.460 0.462 0.464 0.466 0.468 0.470 0.472 0.474 0.476 0.478 0.480 0.482 0.484 0.486 0.488 0.490 0.492 0.494 0.496 0.498 0.500 0.502 0.504 0.506 0.508 0.510 0.512 0.514 0.516 0.518 0.520 0.522 0.524 0.526 0.528 0.530 0.532 0.534 0.536 0.538 0.540 0.542 0.544 0.546 0.548 0.550 0.552 0.554 0.556 0.558 0.560 0.562 0.564 0.566 0.568 0.570 0.572 0.574 0.576 0.578 0.580 0.582 0.584 0.586 0.588 0.590 0.592 0.594 0.596 0.598 0.600 0.602 0.604 0.606 0.608 0.610 0.612 0.614 0.616 0.618 0.620 0.622 0.624 0.626 0.628 0.630 0.632 0.634 0.636 0.638 0.640 0.642 0.644 0.646 0.648 0.650 0.652 0.654 0.656 0.658 0.660 0.662 0.664 0.666 0.668 0.670 0.672 0.674 0.676 0.678 0.680 0.682 0.684 0.686 0.688 0.690 0.692 0.694 0.696 0.698 0.700 0.702 0.704 0.706 0.708 0.710 0.712 0.714 0.716 0.718 0.720 0.722 0.724 0.726 0.728 0.730 0.732 0.734 0.736 0.738 0.740 0.742 0.744 0.746 0.748 0.750 0.752 0.754 0.756 0.758 0.760 0.762 0.764 0.766 0.768 0.770 0.772 0.774 0.776 0.778 0.780 0.782 0.784 0.786 0.788 0.790 0.792 0.794 0.796 0.798 0.800 0.802 0.804 0.806 0.808 0.810 0.812 0.814 0.816 0.818 0.820 0.822 0.824 0.826 0.828 0.830 0.832 0.834 0.836 0.838 0.840 0.842 0.844 0.846 0.848 0.850 0.852 0.854 0.856 0.858 0.860 0.862 0.864 0.866 0.868 0.870 0.872 0.874 0.876 0.878 0.880 0.882 0.884 0.886 0.888 0.890 0.892 0.894 0.896 0.898 0.900 0.902 0.904 0.906 0.908 0.910 0.912 0.914 0.916 0.918 0.920 0.922 0.924 0.926 0.928 0.930 0.932 0.934 0.936 0.938 0.940 0.942 0.944 0.946 0.948 0.950 0.952 0.954 0.956 0.958 0.960 0.962 0.964 0.966 0.968 0.970 0.972 0.974 0.976 0.978 0.980 0.982 0.984 0.986 0.988 0.990 0.992 0.994 0.996 0.998 1' keyValue='0 0 1 0  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 0  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317  0 0 1 1.57079  0 0 1 3.14159  0 0 1 4.71239  0 0 1 6.28317'/>
    
    <PositionInterpolator DEF="W1" key="0 0.5 1"  keyValue="10.5 0.62 11  10.5 3 12  10 1.78 4.1"/>
    <OrientationInterpolator DEF="W2" key="0 0.8 1"  keyValue="0 1 0 0  0 1 0 0  0 1 0 3.142"/>
    <OrientationInterpolator DEF="W3" key="0 0.8 1"  keyValue="1 0 0 0  1 0 0 0  1 0 0 0.24"/>
    <PositionInterpolator DEF="Wfly1" key="0 1"  keyValue="0 0 0  0 25 -100"/>
    
    <PositionInterpolator DEF="WW1" key="0 0.5 1"  keyValue="10.5 0.8 11  10.5 3 12  10 1.78 4.1"/>
    <OrientationInterpolator DEF="WW2" key="0 0.8 1"  keyValue="0 1 0 0  0 1 0 0  0 1 0 3.142"/>
    <OrientationInterpolator DEF="WW3" key="0 0.8 1"  keyValue="1 0 0 0  1 0 0 0  1 0 0 0.24"/>
    <PositionInterpolator DEF="Wfly2" key="0 1"  keyValue="0 0 0  0 25 -100"/>
    
    <PositionInterpolator DEF="WWW1" key="0 0.5 1"  keyValue="10.5 0.98 11  10.5 3 12  10 1.78 4.1"/>
    <OrientationInterpolator DEF="WWW2" key="0 0.8 1"  keyValue="0 1 0 0  0 1 0 0  0 1 0 3.142"/>
    <OrientationInterpolator DEF="WWW3" key="0 0.8 1"  keyValue="1 0 0 0  1 0 0 0  1 0 0 0.24"/>
    <PositionInterpolator DEF="Wfly3" key="0 1"  keyValue="0 0 0  0 25 -100"/>
    
    <PositionInterpolator DEF="WWWWW1" key="0 0.5 1"  keyValue="10.5 1.16 11  10.5 3 12  10 1.78 4.1"/>
    <OrientationInterpolator DEF="WWWWW2" key="0 0.8 1"  keyValue="0 1 0 0  0 1 0 0  0 1 0 3.142"/>
    <OrientationInterpolator DEF="WWWWW3" key="0 0.8 1"  keyValue="1 0 0 0  1 0 0 0  1 0 0 0.24"/>
    <PositionInterpolator DEF="Wfly5" key="0 1"  keyValue="0 0 0  0 25 -100"/>
    
    <PositionInterpolator DEF="WWWWWW1" key="0 0.5 1"  keyValue="10.5 1.48 11  10.5 3 12  10 1.78 4.1"/>
    <OrientationInterpolator DEF="WWWWWW2" key="0 0.8 1"  keyValue="0 1 0 0  0 1 0 0  0 1 0 3.142"/>
    <OrientationInterpolator DEF="WWWWWW3" key="0 0.8 1"  keyValue="1 0 0 0  1 0 0 0  1 0 0 0.24"/>
    <PositionInterpolator DEF="Wfly6" key="0 1"  keyValue="0 0 0  0 25 -100"/>
    
    <PositionInterpolator DEF="WWWWWWW1" key="0 0.5 1"  keyValue="10.5 1.66 11  10.5 3 12  10 1.78 4.1"/>
    <OrientationInterpolator DEF="WWWWWWW2" key="0 0.8 1"  keyValue="0 1 0 0  0 1 0 0  0 1 0 3.142"/>
    <OrientationInterpolator DEF="WWWWWWW3" key="0 0.8 1"  keyValue="1 0 0 0  1 0 0 0  1 0 0 0.24"/>
    <PositionInterpolator DEF="Wfly7" key="0 1"  keyValue="0 0 0  0 25 -100"/>
    
    <PositionInterpolator DEF="B1" key="0 0.1 1"  keyValue="2.9 0 8.99  2.9 0.4 8.99  9.45 0.92 3.77"/>
    <OrientationInterpolator DEF="B2" key="0 1"  keyValue="1 0 0 0  1 0 0 0.2"/>
    <PositionInterpolator DEF="Bfly1" key="0 1"  keyValue="0 0 0  0 25 -100"/>
    
    <PositionInterpolator DEF="BB1" key="0 0.1 1"  keyValue="3.645 0 8.99  3.645 0.4 8.99  9.45 0.92 3.77"/>
    <OrientationInterpolator DEF="BB2" key="0 1"  keyValue="1 0 0 0  1 0 0 0.2"/>
    <PositionInterpolator DEF="Bfly2" key="0 1"  keyValue="0 0 0  0 25 -100"/>
    
    <PositionInterpolator DEF="BBB1" key="0 0.1 1"  keyValue="4.0 0 8.99  4.0 0.4 8.99  9.45 0.92 3.77"/>
    <OrientationInterpolator DEF="BBB2" key="0 1"  keyValue="1 0 0 0  1 0 0 0.2"/>
    <PositionInterpolator DEF="Bfly3" key="0 1"  keyValue="0 0 0  0 25 -100"/>
    
    <PositionInterpolator DEF="N1" key="0 1"  keyValue="7 1.25 3  10 1.78 4.1"/>
    <OrientationInterpolator DEF="N2" key="0 1"  keyValue="0 1 0 1.57  0 1 0 3.14"/>
    <OrientationInterpolator DEF="N3" key="0 1"  keyValue="1 0 0 0  1 0 0 0.24"/>
    <PositionInterpolator DEF="Nfly1" key="0 1"  keyValue="0 0 0  0 25 -100"/>
    
    <PositionInterpolator DEF="NN1" key="0 1"  keyValue="7 1 3  10 1.78 4.1"/>
    <OrientationInterpolator DEF="NN2" key="0 1"  keyValue="0 1 0 1.57  0 1 0 3.14"/>
    <OrientationInterpolator DEF="NN3" key="0 1"  keyValue="1 0 0 0  1 0 0 0.24"/>
    <PositionInterpolator DEF="Nfly2" key="0 1"  keyValue="0 0 0  0 25 -100"/>
    
    <PositionInterpolator DEF="NNN1" key="0 1"  keyValue="7 0.75 3  10 1.78 4.1"/>
    <OrientationInterpolator DEF="NNN2" key="0 1"  keyValue="0 1 0 1.57  0 1 0 3.14"/>
    <OrientationInterpolator DEF="NNN3" key="0 1"  keyValue="1 0 0 0  1 0 0 0.24"/>
    <PositionInterpolator DEF="Nfly3" key="0 1"  keyValue="0 0 0  0 25 -100"/>
    
    <PositionInterpolator DEF="NNNN1" key="0 1"  keyValue="7 1.25 3.6  10 1.78 4.1"/>
    <OrientationInterpolator DEF="NNNN2" key="0 1"  keyValue="0 1 0 1.57  0 1 0 3.14"/>
    <OrientationInterpolator DEF="NNNN3" key="0 1"  keyValue="1 0 0 0  1 0 0 0.24"/>
    <PositionInterpolator DEF="Nfly4" key="0 1"  keyValue="0 0 0  0 25 -100"/>
    
    <PositionInterpolator DEF="NNNNN1" key="0 1"  keyValue="7 1 3.6  10 1.78 4.1"/>
    <OrientationInterpolator DEF="NNNNN2" key="0 1"  keyValue="0 1 0 1.57  0 1 0 3.14"/>
    <OrientationInterpolator DEF="NNNNN3" key="0 1"  keyValue="1 0 0 0  1 0 0 0.24"/>
    <PositionInterpolator DEF="Nfly5" key="0 1"  keyValue="0 0 0  0 25 -100"/>
    
    <PositionInterpolator DEF="NNNNNN1" key="0 1"  keyValue="7 0.75 3.6  10 1.78 4.1"/>
    <OrientationInterpolator DEF="NNNNNN2" key="0 1"  keyValue="0 1 0 1.57  0 1 0 3.14"/>
    <OrientationInterpolator DEF="NNNNNN3" key="0 1"  keyValue="1 0 0 0  1 0 0 0.24"/>
    <PositionInterpolator DEF="Nfly6" key="0 1"  keyValue="0 0 0  0 25 -100"/>
    
    <ColorInterpolator DEF="R" key="0 0.7 0.7001 1" keyValue="1 0 0  1 0 0  0 0 0  0 0 0"/>
    <ColorInterpolator DEF="CLED" key="0 0.2 0.3 1" keyValue="1 1 1  1 1 1  0.2 1 0.2  0.2 1 0.2"/>
 
    <!--CARRIAGE-->
    <PositionInterpolator DEF="C1" key="0 0.030 0.0305 0.25 1"  keyValue="10 0 2  10 1.5 -3.5  10 1.5 -3.5  10 0 2  10 0 2"/>  
    <!--ZIP1-->
    <PositionInterpolator DEF="L1" key="0 0.03 1"  keyValue="0 0.2 0.56  0 2 -6.18  0 30 -120"/>   

    <ROUTE fromNode='pack1' fromField='touchTime' toNode='tp' toField='set_startTime'></ROUTE>
    <Route fromNode='tp' fromField ='fraction_changed' toNode='Movepackage' toField='set_fraction'></Route>
    <Route fromNode='Movepackage' fromField ='value_changed' toNode='movePack' toField='translation'></Route>
    
    <Route fromNode='mech1' fromField='touchTime' toNode='to1' toField='set_startTime'></Route>
    <Route fromNode='to1' fromField='fraction_changed' toNode='d1' toField='set_fraction'></Route>
    <Route fromNode='d1' fromField='value_changed' toNode='dr1' toField='set_rotation'></Route>
    <Route fromNode='mech1' fromField='touchTime' toNode='to1' toField='set_startTime'></Route>
    <Route fromNode='to1' fromField='fraction_changed' toNode='d2' toField='set_fraction'></Route>
    <Route fromNode='d2' fromField='value_changed' toNode='dl1' toField='set_rotation'></Route>
    
    <Route fromNode='pack1' fromField='touchTime' toNode='tc1' toField='set_startTime'></Route>
    <Route fromNode='tc1' fromField='fraction_changed' toNode='dd1' toField='set_fraction'></Route>
    <Route fromNode='dd1' fromField='value_changed' toNode='dr1' toField='set_rotation'></Route>
    <Route fromNode='tc1' fromField='fraction_changed' toNode='dd2' toField='set_fraction'></Route>
    <Route fromNode='dd2' fromField='value_changed' toNode='dl1' toField='set_rotation'></Route>
    
    <Route fromNode='mech2' fromField='touchTime' toNode='to2' toField='set_startTime'></Route>
    <Route fromNode='to2' fromField='fraction_changed' toNode='d3' toField='set_fraction'></Route>
    <Route fromNode='d3' fromField='value_changed' toNode='dr2' toField='set_rotation'></Route>
    <Route fromNode='to2' fromField='fraction_changed' toNode='d4' toField='set_fraction'></Route>
    <Route fromNode='d4' fromField='value_changed' toNode='dl2' toField='set_rotation'></Route>
    
    <Route fromNode='pack1' fromField='touchTime' toNode='tc2' toField='set_startTime'></Route>
    <Route fromNode='tc2' fromField='fraction_changed' toNode='dd3' toField='set_fraction'></Route>
    <Route fromNode='dd3' fromField='value_changed' toNode='dr2' toField='set_rotation'></Route>
    <Route fromNode='tc2' fromField='fraction_changed' toNode='dd4' toField='set_fraction'></Route>
    <Route fromNode='dd4' fromField='value_changed' toNode='dl2' toField='set_rotation'></Route>
    
    <Route fromNode='mech3' fromField='touchTime' toNode='to3' toField='set_startTime'></Route>
    <Route fromNode='to3' fromField='fraction_changed' toNode='d5' toField='set_fraction'></Route>
    <Route fromNode='d5' fromField='value_changed' toNode='dl3' toField='set_rotation'></Route>
    <Route fromNode='to3' fromField='fraction_changed' toNode='d6' toField='set_fraction'></Route>
    <Route fromNode='d6' fromField='value_changed' toNode='dr3' toField='set_rotation'></Route>
    
    <Route fromNode='pack1' fromField='touchTime' toNode='tc3' toField='set_startTime'></Route>
    <Route fromNode='tc3' fromField='fraction_changed' toNode='dd5' toField='set_fraction'></Route>
    <Route fromNode='dd5' fromField='value_changed' toNode='dr3' toField='set_rotation'></Route>
    <Route fromNode='tc3' fromField='fraction_changed' toNode='dd6' toField='set_fraction'></Route>
    <Route fromNode='dd6' fromField='value_changed' toNode='dl3' toField='set_rotation'></Route>
    
    <Route fromNode='mech5' fromField='touchTime' toNode='to5' toField='set_startTime'></Route>
    <Route fromNode='to5' fromField='fraction_changed' toNode='d9' toField='set_fraction'></Route>
    <Route fromNode='d9' fromField='value_changed' toNode='dr5' toField='set_rotation'></Route>
    <Route fromNode='to5' fromField='fraction_changed' toNode='d10' toField='set_fraction'></Route>
    <Route fromNode='d10' fromField='value_changed' toNode='dl5' toField='set_rotation'></Route>
    
    <Route fromNode='pack1' fromField='touchTime' toNode='tc5' toField='set_startTime'></Route>
    <Route fromNode='tc5' fromField='fraction_changed' toNode='dd9' toField='set_fraction'></Route>
    <Route fromNode='dd9' fromField='value_changed' toNode='dr5' toField='set_rotation'></Route>
    <Route fromNode='tc5' fromField='fraction_changed' toNode='dd10' toField='set_fraction'></Route>
    <Route fromNode='dd10' fromField='value_changed' toNode='dl5' toField='set_rotation'></Route>
    
    <Route fromNode='mech6' fromField='touchTime' toNode='to6' toField='set_startTime'></Route>
    <Route fromNode='to6' fromField='fraction_changed' toNode='d11' toField='set_fraction'></Route>
    <Route fromNode='d11' fromField='value_changed' toNode='dr6' toField='set_rotation'></Route>
    <Route fromNode='to6' fromField='fraction_changed' toNode='d12' toField='set_fraction'></Route>
    <Route fromNode='d12' fromField='value_changed' toNode='dl6' toField='set_rotation'></Route>
    
    <Route fromNode='pack1' fromField='touchTime' toNode='tc6' toField='set_startTime'></Route>
    <Route fromNode='tc6' fromField='fraction_changed' toNode='dd11' toField='set_fraction'></Route>
    <Route fromNode='dd11' fromField='value_changed' toNode='dr6' toField='set_rotation'></Route>
    <Route fromNode='tc6' fromField='fraction_changed' toNode='dd12' toField='set_fraction'></Route>
    <Route fromNode='dd12' fromField='value_changed' toNode='dl6' toField='set_rotation'></Route>
    
    <Route fromNode='mech7' fromField='touchTime' toNode='to7' toField='set_startTime'></Route>
    <Route fromNode='to7' fromField='fraction_changed' toNode='d13' toField='set_fraction'></Route>
    <Route fromNode='d13' fromField='value_changed' toNode='dr7' toField='set_rotation'></Route>
    <Route fromNode='to7' fromField='fraction_changed' toNode='d14' toField='set_fraction'></Route>
    <Route fromNode='d14' fromField='value_changed' toNode='dl7' toField='set_rotation'></Route>
    
    <Route fromNode='pack1' fromField='touchTime' toNode='tc7' toField='set_startTime'></Route>
    <Route fromNode='tc7' fromField='fraction_changed' toNode='dd13' toField='set_fraction'></Route>
    <Route fromNode='dd13' fromField='value_changed' toNode='dr7' toField='set_rotation'></Route>
    <Route fromNode='tc7' fromField='fraction_changed' toNode='dd14' toField='set_fraction'></Route>
    <Route fromNode='dd14' fromField='value_changed' toNode='dl7' toField='set_rotation'></Route>

    <Route fromNode='zip1' fromField='touchTime' toNode='tZ11' toField='set_startTime'></Route>
    <Route fromNode="tZ11" fromField ="fraction_changed" toNode="Z1" toField="set_fraction"></Route>
    <Route fromNode="Z1" fromField ="value_changed" toNode="ZIP1" toField="translation"></Route>

    <ROUTE fromNode='zip1' fromField='touchTime' toNode='tZ12' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tZ12' fromField='fraction_changed' toNode='Z2' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='Z2' fromField='value_changed' toNode='ZIP1' toField='set_rotation'></ROUTE>

    <ROUTE fromNode='zip1' fromField='touchTime' toNode='tZ13' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tZ13' fromField='fraction_changed' toNode='Z3' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='Z3' fromField='value_changed' toNode='ZIP11' toField='set_rotation'></ROUTE>

    <ROUTE fromNode='zip2' fromField='touchTime' toNode='tZ21' toField='set_startTime'></ROUTE>
    <Route fromNode="tZ21" fromField ="fraction_changed" toNode="ZZ1" toField="set_fraction"></Route>
    <Route fromNode="ZZ1" fromField ="value_changed" toNode="ZIP2" toField="translation"></Route>

    <ROUTE fromNode='zip2' fromField='touchTime' toNode='tZ22' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tZ22' fromField='fraction_changed' toNode='ZZ2' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='ZZ2' fromField='value_changed' toNode='ZIP2' toField='set_rotation'></ROUTE>

    <ROUTE fromNode='zip2' fromField='touchTime' toNode='tZ23' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tZ23' fromField='fraction_changed' toNode='ZZ3' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='ZZ3' fromField='value_changed' toNode='ZIP22' toField='set_rotation'></ROUTE>

    <ROUTE fromNode='zip3' fromField='touchTime' toNode='tZ31' toField='set_startTime'></ROUTE>
    <Route fromNode="tZ31" fromField ="fraction_changed" toNode="ZZZ1" toField="set_fraction"></Route>
    <Route fromNode="ZZZ1" fromField ="value_changed" toNode="ZIP3" toField="translation"></Route>

    <ROUTE fromNode='zip3' fromField='touchTime' toNode='tZ32' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tZ32' fromField='fraction_changed' toNode='ZZZ2' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='ZZZ2' fromField='value_changed' toNode='ZIP3' toField='set_rotation'></ROUTE>

    <ROUTE fromNode='zip3' fromField='touchTime' toNode='tZ33' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tZ33' fromField='fraction_changed' toNode='ZZZ3' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='ZZZ3' fromField='value_changed' toNode='ZIP33' toField='set_rotation'></ROUTE>

    <ROUTE fromNode='zip5' fromField='touchTime' toNode='tZ51' toField='set_startTime'></ROUTE>
    <Route fromNode="tZ51" fromField ="fraction_changed" toNode="ZZZZZ1" toField="set_fraction"></Route>
    <Route fromNode="ZZZZZ1" fromField ="value_changed" toNode="ZIP5" toField="translation"></Route>

    <ROUTE fromNode='zip5' fromField='touchTime' toNode='tZ52' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tZ52' fromField='fraction_changed' toNode='ZZZZZ2' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='ZZZZZ2' fromField='value_changed' toNode='ZIP5' toField='set_rotation'></ROUTE>

    <ROUTE fromNode='zip5' fromField='touchTime' toNode='tZ53' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tZ53' fromField='fraction_changed' toNode='ZZZZZ3' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='ZZZZZ3' fromField='value_changed' toNode='ZIP55' toField='set_rotation'></ROUTE>
    
    <ROUTE fromNode='zip6' fromField='touchTime' toNode='tZ61' toField='set_startTime'></ROUTE>
    <Route fromNode="tZ61" fromField ="fraction_changed" toNode="ZZZZZZ1" toField="set_fraction"></Route>
    <Route fromNode="ZZZZZZ1" fromField ="value_changed" toNode="ZIP6" toField="translation"></Route>

    <ROUTE fromNode='zip6' fromField='touchTime' toNode='tZ62' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tZ62' fromField='fraction_changed' toNode='ZZZZZZ2' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='ZZZZZZ2' fromField='value_changed' toNode='ZIP6' toField='set_rotation'></ROUTE>

    <ROUTE fromNode='zip6' fromField='touchTime' toNode='tZ63' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tZ63' fromField='fraction_changed' toNode='ZZZZZZ3' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='ZZZZZZ3' fromField='value_changed' toNode='ZIP66' toField='set_rotation'></ROUTE>
    
    <ROUTE fromNode='zip7' fromField='touchTime' toNode='tZ71' toField='set_startTime'></ROUTE>
    <Route fromNode="tZ71" fromField ="fraction_changed" toNode="ZZZZZZZ1" toField="set_fraction"></Route>
    <Route fromNode="ZZZZZZZ1" fromField ="value_changed" toNode="ZIP7" toField="translation"></Route>

    <ROUTE fromNode='zip7' fromField='touchTime' toNode='tZ72' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tZ72' fromField='fraction_changed' toNode='ZZZZZZZ2' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='ZZZZZZZ2' fromField='value_changed' toNode='ZIP7' toField='set_rotation'></ROUTE>

    <ROUTE fromNode='zip7' fromField='touchTime' toNode='tZ73' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tZ73' fromField='fraction_changed' toNode='ZZZZZZZ3' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='ZZZZZZZ3' fromField='value_changed' toNode='ZIP77' toField='set_rotation'></ROUTE>

    <ROUTE fromNode='wing1' fromField='touchTime' toNode='tW1' toField='set_startTime'></ROUTE>
    <Route fromNode="tW1" fromField ="fraction_changed" toNode="W1" toField="set_fraction"></Route>
    <Route fromNode="W1" fromField ="value_changed" toNode="WING1" toField="translation"></Route>

    <ROUTE fromNode='wing1' fromField='touchTime' toNode='tW2' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tW2' fromField='fraction_changed' toNode='W2' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='W2' fromField='value_changed' toNode='WING1' toField='set_rotation'></ROUTE>
    
    <ROUTE fromNode='wing1' fromField='touchTime' toNode='tW3' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tW3' fromField='fraction_changed' toNode='W3' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='W3' fromField='value_changed' toNode='WING11' toField='set_rotation'></ROUTE>

    <ROUTE fromNode='wing2' fromField='touchTime' toNode='tWW1' toField='set_startTime'></ROUTE>
    <Route fromNode="tWW1" fromField ="fraction_changed" toNode="WW1" toField="set_fraction"></Route>
    <Route fromNode="WW1" fromField ="value_changed" toNode="WING2" toField="translation"></Route>

    <ROUTE fromNode='wing2' fromField='touchTime' toNode='tWW2' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tWW2' fromField='fraction_changed' toNode='WW2' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='WW2' fromField='value_changed' toNode='WING2' toField='set_rotation'></ROUTE>
    
    <ROUTE fromNode='wing2' fromField='touchTime' toNode='tWW3' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tWW3' fromField='fraction_changed' toNode='WW3' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='WW3' fromField='value_changed' toNode='WING22' toField='set_rotation'></ROUTE>

    <ROUTE fromNode='wing3' fromField='touchTime' toNode='tWWW1' toField='set_startTime'></ROUTE>
    <Route fromNode="tWWW1" fromField ="fraction_changed" toNode="WWW1" toField="set_fraction"></Route>
    <Route fromNode="WWW1" fromField ="value_changed" toNode="WING3" toField="translation"></Route>

    <ROUTE fromNode='wing3' fromField='touchTime' toNode='tWWW2' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tWWW2' fromField='fraction_changed' toNode='WWW2' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='WWW2' fromField='value_changed' toNode='WING3' toField='set_rotation'></ROUTE>
    
    <ROUTE fromNode='wing3' fromField='touchTime' toNode='tWWW3' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tWWW3' fromField='fraction_changed' toNode='WWW3' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='WWW3' fromField='value_changed' toNode='WING33' toField='set_rotation'></ROUTE>
    
    <ROUTE fromNode='wing5' fromField='touchTime' toNode='tWWWWW1' toField='set_startTime'></ROUTE>
    <Route fromNode="tWWWWW1" fromField ="fraction_changed" toNode="WWWWW1" toField="set_fraction"></Route>
    <Route fromNode="WWWWW1" fromField ="value_changed" toNode="WING5" toField="translation"></Route>

    <ROUTE fromNode='wing5' fromField='touchTime' toNode='tWWWWW2' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tWWWWW2' fromField='fraction_changed' toNode='WWWWW2' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='WWWWW2' fromField='value_changed' toNode='WING5' toField='set_rotation'></ROUTE>
    
    <ROUTE fromNode='wing5' fromField='touchTime' toNode='tWWWWW3' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tWWWWW3' fromField='fraction_changed' toNode='WWWWW3' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='WWWWW3' fromField='value_changed' toNode='WING55' toField='set_rotation'></ROUTE>
    
    <ROUTE fromNode='wing6' fromField='touchTime' toNode='tWWWWWW1' toField='set_startTime'></ROUTE>
    <Route fromNode="tWWWWWW1" fromField ="fraction_changed" toNode="WWWWWW1" toField="set_fraction"></Route>
    <Route fromNode="WWWWWW1" fromField ="value_changed" toNode="WING6" toField="translation"></Route>

    <ROUTE fromNode='wing6' fromField='touchTime' toNode='tWWWWWW2' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tWWWWWW2' fromField='fraction_changed' toNode='WWWWWW2' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='WWWWWW2' fromField='value_changed' toNode='WING6' toField='set_rotation'></ROUTE>
    
    <ROUTE fromNode='wing6' fromField='touchTime' toNode='tWWWWWW3' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tWWWWWW3' fromField='fraction_changed' toNode='WWWWWW3' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='WWWWWW3' fromField='value_changed' toNode='WING66' toField='set_rotation'></ROUTE>
    
    <ROUTE fromNode='wing7' fromField='touchTime' toNode='tWWWWWWW1' toField='set_startTime'></ROUTE>
    <Route fromNode="tWWWWWWW1" fromField ="fraction_changed" toNode="WWWWWWW1" toField="set_fraction"></Route>
    <Route fromNode="WWWWWWW1" fromField ="value_changed" toNode="WING7" toField="translation"></Route>

    <ROUTE fromNode='wing7' fromField='touchTime' toNode='tWWWWWWW2' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tWWWWWWW2' fromField='fraction_changed' toNode='WWWWWWW2' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='WWWWWWW2' fromField='value_changed' toNode='WING7' toField='set_rotation'></ROUTE>
    
    <ROUTE fromNode='wing7' fromField='touchTime' toNode='tWWWWWWW3' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tWWWWWWW3' fromField='fraction_changed' toNode='WWWWWWW3' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='WWWWWWW3' fromField='value_changed' toNode='WING77' toField='set_rotation'></ROUTE>

    <ROUTE fromNode='battery3' fromField='touchTime' toNode='tB1' toField='set_startTime'></ROUTE>
    <Route fromNode="tB1" fromField ="fraction_changed" toNode="B1" toField="set_fraction"></Route>
    <Route fromNode="B1" fromField ="value_changed" toNode="bat3" toField="translation"></Route>

    <ROUTE fromNode='battery3' fromField='touchTime' toNode='tB2' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tB2' fromField='fraction_changed' toNode='B2' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='B2' fromField='value_changed' toNode='BAT3' toField='set_rotation'></ROUTE>

    <ROUTE fromNode='battery5' fromField='touchTime' toNode='tBB1' toField='set_startTime'></ROUTE>
    <Route fromNode="tBB1" fromField ="fraction_changed" toNode="BB1" toField="set_fraction"></Route>
    <Route fromNode="BB1" fromField ="value_changed" toNode="bat5" toField="translation"></Route>

    <ROUTE fromNode='battery5' fromField='touchTime' toNode='tBB2' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tBB2' fromField='fraction_changed' toNode='BB2' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='BB2' fromField='value_changed' toNode='BAT5' toField='set_rotation'></ROUTE>

    <ROUTE fromNode='battery6' fromField='touchTime' toNode='tBBB1' toField='set_startTime'></ROUTE>
    <Route fromNode="tBBB1" fromField ="fraction_changed" toNode="BBB1" toField="set_fraction"></Route>
    <Route fromNode="BBB1" fromField ="value_changed" toNode="bat6" toField="translation"></Route>

    <ROUTE fromNode='battery6' fromField='touchTime' toNode='tBBB2' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tBBB2' fromField='fraction_changed' toNode='BBB2' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='BBB2' fromField='value_changed' toNode='BAT6' toField='set_rotation'></ROUTE>

    <ROUTE fromNode='noseCone1' fromField='touchTime' toNode='tN1' toField='set_startTime'></ROUTE>
    <Route fromNode="tN1" fromField ="fraction_changed" toNode="N1" toField="set_fraction"></Route>
    <Route fromNode="N1" fromField ="value_changed" toNode="NOSE1" toField="translation"></Route>

    <ROUTE fromNode='noseCone1' fromField='touchTime' toNode='tN2' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tN2' fromField='fraction_changed' toNode='N2' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='N2' fromField='value_changed' toNode='NOSE1' toField='set_rotation'></ROUTE>
    
    <ROUTE fromNode='noseCone1' fromField='touchTime' toNode='tN3' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tN3' fromField='fraction_changed' toNode='N3' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='N3' fromField='value_changed' toNode='NOSE11' toField='set_rotation'></ROUTE>

    <ROUTE fromNode='noseCone2' fromField='touchTime' toNode='tNN1' toField='set_startTime'></ROUTE>
    <Route fromNode="tNN1" fromField ="fraction_changed" toNode="NN1" toField="set_fraction"></Route>
    <Route fromNode="NN1" fromField ="value_changed" toNode="NOSE2" toField="translation"></Route>

    <ROUTE fromNode='noseCone2' fromField='touchTime' toNode='tNN2' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tNN2' fromField='fraction_changed' toNode='NN2' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='NN2' fromField='value_changed' toNode='NOSE2' toField='set_rotation'></ROUTE>
    
    <ROUTE fromNode='noseCone2' fromField='touchTime' toNode='tNN3' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tNN3' fromField='fraction_changed' toNode='NN3' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='NN3' fromField='value_changed' toNode='NOSE22' toField='set_rotation'></ROUTE>

     <ROUTE fromNode='noseCone3' fromField='touchTime' toNode='tNNN1' toField='set_startTime'></ROUTE>
    <Route fromNode="tNNN1" fromField ="fraction_changed" toNode="NNN1" toField="set_fraction"></Route>
    <Route fromNode="NNN1" fromField ="value_changed" toNode="NOSE3" toField="translation"></Route>

    <ROUTE fromNode='noseCone3' fromField='touchTime' toNode='tNNN2' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tNNN2' fromField='fraction_changed' toNode='NNN2' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='NNN2' fromField='value_changed' toNode='NOSE3' toField='set_rotation'></ROUTE>
    
    <ROUTE fromNode='noseCone3' fromField='touchTime' toNode='tNNN3' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tNNN3' fromField='fraction_changed' toNode='NNN3' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='NNN3' fromField='value_changed' toNode='NOSE33' toField='set_rotation'></ROUTE>

    <ROUTE fromNode='noseCone4' fromField='touchTime' toNode='tNNNN1' toField='set_startTime'></ROUTE>
    <Route fromNode="tNNNN1" fromField ="fraction_changed" toNode="NNNN1" toField="set_fraction"></Route>
    <Route fromNode="NNNN1" fromField ="value_changed" toNode="NOSE4" toField="translation"></Route>

    <ROUTE fromNode='noseCone4' fromField='touchTime' toNode='tNNNN2' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tNNNN2' fromField='fraction_changed' toNode='NNNN2' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='NNNN2' fromField='value_changed' toNode='NOSE4' toField='set_rotation'></ROUTE>
    
    <ROUTE fromNode='noseCone4' fromField='touchTime' toNode='tNNNN3' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tNNNN3' fromField='fraction_changed' toNode='NNNN3' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='NNNN3' fromField='value_changed' toNode='NOSE44' toField='set_rotation'></ROUTE>
    
    <ROUTE fromNode='noseCone5' fromField='touchTime' toNode='tNNNNN1' toField='set_startTime'></ROUTE>
    <Route fromNode="tNNNNN1" fromField ="fraction_changed" toNode="NNNNN1" toField="set_fraction"></Route>
    <Route fromNode="NNNNN1" fromField ="value_changed" toNode="NOSE5" toField="translation"></Route>

    <ROUTE fromNode='noseCone5' fromField='touchTime' toNode='tNNNNN2' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tNNNNN2' fromField='fraction_changed' toNode='NNNNN2' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='NNNNN2' fromField='value_changed' toNode='NOSE5' toField='set_rotation'></ROUTE>
    
    <ROUTE fromNode='noseCone5' fromField='touchTime' toNode='tNNNNN3' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tNNNNN3' fromField='fraction_changed' toNode='NNNNN3' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='NNNNN3' fromField='value_changed' toNode='NOSE55' toField='set_rotation'></ROUTE>
    
    <ROUTE fromNode='noseCone6' fromField='touchTime' toNode='tNNNNNN1' toField='set_startTime'></ROUTE>
    <Route fromNode="tNNNNNN1" fromField ="fraction_changed" toNode="NNNNNN1" toField="set_fraction"></Route>
    <Route fromNode="NNNNNN1" fromField ="value_changed" toNode="NOSE6" toField="translation"></Route>

    <ROUTE fromNode='noseCone6' fromField='touchTime' toNode='tNNNNNN2' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tNNNNNN2' fromField='fraction_changed' toNode='NNNNNN2' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='NNNNNN2' fromField='value_changed' toNode='NOSE6' toField='set_rotation'></ROUTE>
    
    <ROUTE fromNode='noseCone6' fromField='touchTime' toNode='tNNNNNN3' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tNNNNNN3' fromField='fraction_changed' toNode='NNNNNN3' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='NNNNNN3' fromField='value_changed' toNode='NOSE66' toField='set_rotation'></ROUTE>


    <ROUTE fromNode='e-stop' fromField='touchTime' toNode='tr' toField='set_startTime'></ROUTE>
    <Route fromNode="tr" fromField ="fraction_changed" toNode="R" toField="set_fraction"></Route>
    <Route fromNode="R" fromField ="value_changed" toNode="red" toField="diffuseColor"></Route>
    
    <Route fromNode="ctr" fromField ="fraction_changed" toNode="CLED" toField="set_fraction"></Route>
    <Route fromNode="CLED" fromField ="value_changed" toNode="heartbeat" toField="diffuseColor"></Route>
    
    <ROUTE fromNode='spin' fromField='touchTime' toNode='tp1' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tp1' fromField='fraction_changed' toNode='p1' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='p1' fromField='value_changed' toNode='foreprop1' toField='set_rotation'></ROUTE>
    <ROUTE fromNode='tp1' fromField='fraction_changed' toNode='p1' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='p1' fromField='value_changed' toNode='aftprop1' toField='set_rotation'></ROUTE>

    <ROUTE fromNode='spin' fromField='touchTime' toNode='tp11' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tp11' fromField='fraction_changed' toNode='p11' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='p11' fromField='value_changed' toNode='prop11' toField='set_rotation'></ROUTE>
    <ROUTE fromNode='tp11' fromField='fraction_changed' toNode='p14' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='p14' fromField='value_changed' toNode='prop14' toField='set_rotation'></ROUTE>
    
    <ROUTE fromNode='spin' fromField='touchTime' toNode='tp12' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tp12' fromField='fraction_changed' toNode='p12' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='p12' fromField='value_changed' toNode='prop12' toField='set_rotation'></ROUTE>
    <ROUTE fromNode='tp12' fromField='fraction_changed' toNode='p15' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='p15' fromField='value_changed' toNode='prop15' toField='set_rotation'></ROUTE>
    
    <ROUTE fromNode='spin' fromField='touchTime' toNode='tp13' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tp13' fromField='fraction_changed' toNode='p13' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='p13' fromField='value_changed' toNode='prop13' toField='set_rotation'></ROUTE>
    <ROUTE fromNode='tp13' fromField='fraction_changed' toNode='p16' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='p16' fromField='value_changed' toNode='prop16' toField='set_rotation'></ROUTE>
    
    <ROUTE fromNode='spin' fromField='touchTime' toNode='tp2' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tp2' fromField='fraction_changed' toNode='p2' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='p2' fromField='value_changed' toNode='foreprop2' toField='set_rotation'></ROUTE>
    <ROUTE fromNode='tp2' fromField='fraction_changed' toNode='p2' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='p2' fromField='value_changed' toNode='aftprop2' toField='set_rotation'></ROUTE>
    
    <ROUTE fromNode='spin' fromField='touchTime' toNode='tp21' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tp21' fromField='fraction_changed' toNode='p21' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='p21' fromField='value_changed' toNode='prop21' toField='set_rotation'></ROUTE>
    <ROUTE fromNode='tp21' fromField='fraction_changed' toNode='p24' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='p24' fromField='value_changed' toNode='prop24' toField='set_rotation'></ROUTE>
    
    <ROUTE fromNode='spin' fromField='touchTime' toNode='tp22' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tp22' fromField='fraction_changed' toNode='p22' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='p22' fromField='value_changed' toNode='prop22' toField='set_rotation'></ROUTE>
    <ROUTE fromNode='tp22' fromField='fraction_changed' toNode='p25' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='p25' fromField='value_changed' toNode='prop25' toField='set_rotation'></ROUTE>
    
    <ROUTE fromNode='spin' fromField='touchTime' toNode='tp23' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tp23' fromField='fraction_changed' toNode='p23' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='p23' fromField='value_changed' toNode='prop23' toField='set_rotation'></ROUTE>
    <ROUTE fromNode='tp23' fromField='fraction_changed' toNode='p26' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='p26' fromField='value_changed' toNode='prop26' toField='set_rotation'></ROUTE>
    
    <ROUTE fromNode='spin' fromField='touchTime' toNode='tp3' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tp3' fromField='fraction_changed' toNode='p3' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='p3' fromField='value_changed' toNode='foreprop3' toField='set_rotation'></ROUTE>
    <ROUTE fromNode='tp3' fromField='fraction_changed' toNode='p3' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='p3' fromField='value_changed' toNode='aftprop3' toField='set_rotation'></ROUTE>
    
    <ROUTE fromNode='spin' fromField='touchTime' toNode='tp31' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tp31' fromField='fraction_changed' toNode='p31' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='p31' fromField='value_changed' toNode='prop31' toField='set_rotation'></ROUTE>
    <ROUTE fromNode='tp31' fromField='fraction_changed' toNode='p34' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='p34' fromField='value_changed' toNode='prop34' toField='set_rotation'></ROUTE>
    
    <ROUTE fromNode='spin' fromField='touchTime' toNode='tp32' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tp32' fromField='fraction_changed' toNode='p32' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='p32' fromField='value_changed' toNode='prop32' toField='set_rotation'></ROUTE>
    <ROUTE fromNode='tp32' fromField='fraction_changed' toNode='p35' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='p35' fromField='value_changed' toNode='prop35' toField='set_rotation'></ROUTE>
    
    <ROUTE fromNode='spin' fromField='touchTime' toNode='tp33' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tp33' fromField='fraction_changed' toNode='p33' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='p33' fromField='value_changed' toNode='prop33' toField='set_rotation'></ROUTE>
    <ROUTE fromNode='tp33' fromField='fraction_changed' toNode='p36' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='p36' fromField='value_changed' toNode='prop16' toField='set_rotation'></ROUTE>
    
    <ROUTE fromNode='spin' fromField='touchTime' toNode='tp51' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tp51' fromField='fraction_changed' toNode='p51' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='p51' fromField='value_changed' toNode='prop51' toField='set_rotation'></ROUTE>
    <ROUTE fromNode='tp51' fromField='fraction_changed' toNode='p54' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='p54' fromField='value_changed' toNode='prop54' toField='set_rotation'></ROUTE>
    
    <ROUTE fromNode='spin' fromField='touchTime' toNode='tp52' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tp52' fromField='fraction_changed' toNode='p52' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='p52' fromField='value_changed' toNode='prop52' toField='set_rotation'></ROUTE>
    <ROUTE fromNode='tp52' fromField='fraction_changed' toNode='p55' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='p55' fromField='value_changed' toNode='prop55' toField='set_rotation'></ROUTE>
    
    <ROUTE fromNode='spin' fromField='touchTime' toNode='tp53' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tp53' fromField='fraction_changed' toNode='p53' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='p53' fromField='value_changed' toNode='prop53' toField='set_rotation'></ROUTE>
    <ROUTE fromNode='tp53' fromField='fraction_changed' toNode='p56' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='p56' fromField='value_changed' toNode='prop56' toField='set_rotation'></ROUTE>
    
    <ROUTE fromNode='spin' fromField='touchTime' toNode='tp5' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tp5' fromField='fraction_changed' toNode='p5' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='p5' fromField='value_changed' toNode='foreprop5' toField='set_rotation'></ROUTE>
    <ROUTE fromNode='tp5' fromField='fraction_changed' toNode='p5' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='p5' fromField='value_changed' toNode='aftprop5' toField='set_rotation'></ROUTE>
    
    <ROUTE fromNode='spin' fromField='touchTime' toNode='tp6' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tp6' fromField='fraction_changed' toNode='p6' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='p6' fromField='value_changed' toNode='foreprop6' toField='set_rotation'></ROUTE>
    <ROUTE fromNode='tp6' fromField='fraction_changed' toNode='p6' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='p6' fromField='value_changed' toNode='aftprop6' toField='set_rotation'></ROUTE>
    
    <ROUTE fromNode='spin' fromField='touchTime' toNode='tp61' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tp61' fromField='fraction_changed' toNode='p61' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='p61' fromField='value_changed' toNode='prop61' toField='set_rotation'></ROUTE>
    <ROUTE fromNode='tp61' fromField='fraction_changed' toNode='p64' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='p64' fromField='value_changed' toNode='prop64' toField='set_rotation'></ROUTE>
    
    <ROUTE fromNode='spin' fromField='touchTime' toNode='tp62' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tp62' fromField='fraction_changed' toNode='p62' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='p62' fromField='value_changed' toNode='prop62' toField='set_rotation'></ROUTE>
    <ROUTE fromNode='tp62' fromField='fraction_changed' toNode='p65' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='p65' fromField='value_changed' toNode='prop65' toField='set_rotation'></ROUTE>
    
    <ROUTE fromNode='spin' fromField='touchTime' toNode='tp63' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tp63' fromField='fraction_changed' toNode='p63' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='p63' fromField='value_changed' toNode='prop63' toField='set_rotation'></ROUTE>
    <ROUTE fromNode='tp63' fromField='fraction_changed' toNode='p66' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='p66' fromField='value_changed' toNode='prop66' toField='set_rotation'></ROUTE>
    
    <ROUTE fromNode='spin' fromField='touchTime' toNode='tp7' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tp7' fromField='fraction_changed' toNode='p7' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='p7' fromField='value_changed' toNode='foreprop7' toField='set_rotation'></ROUTE>
    <ROUTE fromNode='tp7' fromField='fraction_changed' toNode='p7' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='p7' fromField='value_changed' toNode='aftprop7' toField='set_rotation'></ROUTE>
    
    <ROUTE fromNode='spin' fromField='touchTime' toNode='tp71' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tp71' fromField='fraction_changed' toNode='p71' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='p71' fromField='value_changed' toNode='prop71' toField='set_rotation'></ROUTE>
    <ROUTE fromNode='tp71' fromField='fraction_changed' toNode='p74' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='p74' fromField='value_changed' toNode='prop74' toField='set_rotation'></ROUTE>
    
    <ROUTE fromNode='spin' fromField='touchTime' toNode='tp72' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tp72' fromField='fraction_changed' toNode='p72' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='p72' fromField='value_changed' toNode='prop72' toField='set_rotation'></ROUTE>
    <ROUTE fromNode='tp72' fromField='fraction_changed' toNode='p75' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='p75' fromField='value_changed' toNode='prop75' toField='set_rotation'></ROUTE>
    
    <ROUTE fromNode='spin' fromField='touchTime' toNode='tp73' toField='set_startTime'></ROUTE>
    <ROUTE fromNode='tp73' fromField='fraction_changed' toNode='p73' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='p73' fromField='value_changed' toNode='prop73' toField='set_rotation'></ROUTE>
    <ROUTE fromNode='tp73' fromField='fraction_changed' toNode='p76' toField='set_fraction'></ROUTE>
    <ROUTE fromNode='p76' fromField='value_changed' toNode='prop76' toField='set_rotation'></ROUTE>

    <ROUTE fromNode='launch' fromField='touchTime' toNode='t12' toField='set_startTime'></ROUTE>
    <Route fromNode="t12" fromField ="fraction_changed" toNode="C1" toField="set_fraction"></Route>
    <Route fromNode="C1" fromField ="value_changed" toNode="CARRIAGE" toField="translation"></Route>

    <ROUTE fromNode='launch' fromField='touchTime' toNode='tZfly1' toField='set_startTime'></ROUTE>
    <Route fromNode="tZfly1" fromField ="fraction_changed" toNode="Zfly1" toField="set_fraction"></Route>
    <Route fromNode="Zfly1" fromField ="value_changed" toNode="ZIP111" toField="translation"></Route>
    
    <ROUTE fromNode='launch' fromField='touchTime' toNode='tZfly2' toField='set_startTime'></ROUTE>
    <Route fromNode="tZfly2" fromField ="fraction_changed" toNode="Zfly2" toField="set_fraction"></Route>
    <Route fromNode="Zfly2" fromField ="value_changed" toNode="ZIP222" toField="translation"></Route>
    
    <ROUTE fromNode='launch' fromField='touchTime' toNode='tZfly3' toField='set_startTime'></ROUTE>
    <Route fromNode="tZfly3" fromField ="fraction_changed" toNode="Zfly3" toField="set_fraction"></Route>
    <Route fromNode="Zfly3" fromField ="value_changed" toNode="ZIP333" toField="translation"></Route>
    
    <ROUTE fromNode='launch' fromField='touchTime' toNode='tZfly5' toField='set_startTime'></ROUTE>
    <Route fromNode="tZfly5" fromField ="fraction_changed" toNode="Zfly5" toField="set_fraction"></Route>
    <Route fromNode="Zfly5" fromField ="value_changed" toNode="ZIP555" toField="translation"></Route>
    
    <ROUTE fromNode='launch' fromField='touchTime' toNode='tZfly6' toField='set_startTime'></ROUTE>
    <Route fromNode="tZfly6" fromField ="fraction_changed" toNode="Zfly6" toField="set_fraction"></Route>
    <Route fromNode="Zfly6" fromField ="value_changed" toNode="ZIP666" toField="translation"></Route>
    
    <ROUTE fromNode='launch' fromField='touchTime' toNode='tZfly7' toField='set_startTime'></ROUTE>
    <Route fromNode="tZfly7" fromField ="fraction_changed" toNode="Zfly7" toField="set_fraction"></Route>
    <Route fromNode="Zfly7" fromField ="value_changed" toNode="ZIP777" toField="translation"></Route>
    
    <ROUTE fromNode='launch' fromField='touchTime' toNode='tWfly1' toField='set_startTime'></ROUTE>
    <Route fromNode="tWfly1" fromField ="fraction_changed" toNode="Wfly1" toField="set_fraction"></Route>
    <Route fromNode="Wfly1" fromField ="value_changed" toNode="WING111" toField="translation"></Route>
    
    <ROUTE fromNode='launch' fromField='touchTime' toNode='tWfly2' toField='set_startTime'></ROUTE>
    <Route fromNode="tWfly2" fromField ="fraction_changed" toNode="Wfly2" toField="set_fraction"></Route>
    <Route fromNode="Wfly2" fromField ="value_changed" toNode="WING222" toField="translation"></Route>
    
    <ROUTE fromNode='launch' fromField='touchTime' toNode='tWfly3' toField='set_startTime'></ROUTE>
    <Route fromNode="tWfly3" fromField ="fraction_changed" toNode="Wfly3" toField="set_fraction"></Route>
    <Route fromNode="Wfly3" fromField ="value_changed" toNode="WING333" toField="translation"></Route>
    
    <ROUTE fromNode='launch' fromField='touchTime' toNode='tWfly5' toField='set_startTime'></ROUTE>
    <Route fromNode="tWfly5" fromField ="fraction_changed" toNode="Wfly5" toField="set_fraction"></Route>
    <Route fromNode="Wfly5" fromField ="value_changed" toNode="WING555" toField="translation"></Route>
    
    <ROUTE fromNode='launch' fromField='touchTime' toNode='tWfly6' toField='set_startTime'></ROUTE>
    <Route fromNode="tWfly6" fromField ="fraction_changed" toNode="Wfly6" toField="set_fraction"></Route>
    <Route fromNode="Wfly6" fromField ="value_changed" toNode="WING666" toField="translation"></Route>
    
    <ROUTE fromNode='launch' fromField='touchTime' toNode='tWfly7' toField='set_startTime'></ROUTE>
    <Route fromNode="tWfly7" fromField ="fraction_changed" toNode="Wfly7" toField="set_fraction"></Route>
    <Route fromNode="Wfly7" fromField ="value_changed" toNode="WING777" toField="translation"></Route>
    
    <ROUTE fromNode='launch' fromField='touchTime' toNode='tBfly1' toField='set_startTime'></ROUTE>
    <Route fromNode="tBfly1" fromField ="fraction_changed" toNode="Bfly1" toField="set_fraction"></Route>
    <Route fromNode="Bfly1" fromField ="value_changed" toNode="BAT33" toField="translation"></Route>
    
    <ROUTE fromNode='launch' fromField='touchTime' toNode='tBfly2' toField='set_startTime'></ROUTE>
    <Route fromNode="tBfly2" fromField ="fraction_changed" toNode="Bfly2" toField="set_fraction"></Route>
    <Route fromNode="Bfly2" fromField ="value_changed" toNode="BAT55" toField="translation"></Route>
    
    <ROUTE fromNode='launch' fromField='touchTime' toNode='tBfly3' toField='set_startTime'></ROUTE>
    <Route fromNode="tBfly3" fromField ="fraction_changed" toNode="Bfly3" toField="set_fraction"></Route>
    <Route fromNode="Bfly3" fromField ="value_changed" toNode="BAT66" toField="translation"></Route>
    
    <ROUTE fromNode='launch' fromField='touchTime' toNode='tNfly1' toField='set_startTime'></ROUTE>
    <Route fromNode="tNfly1" fromField ="fraction_changed" toNode="Nfly1" toField="set_fraction"></Route>
    <Route fromNode="Nfly1" fromField ="value_changed" toNode="NOSE111" toField="translation"></Route>
    
    <ROUTE fromNode='launch' fromField='touchTime' toNode='tNfly2' toField='set_startTime'></ROUTE>
    <Route fromNode="tNfly2" fromField ="fraction_changed" toNode="Nfly2" toField="set_fraction"></Route>
    <Route fromNode="Nfly2" fromField ="value_changed" toNode="NOSE222" toField="translation"></Route>
    
    <ROUTE fromNode='launch' fromField='touchTime' toNode='tNfly3' toField='set_startTime'></ROUTE>
    <Route fromNode="tNfly3" fromField ="fraction_changed" toNode="Nfly3" toField="set_fraction"></Route>
    <Route fromNode="Nfly3" fromField ="value_changed" toNode="NOSE333" toField="translation"></Route>
    
    <ROUTE fromNode='launch' fromField='touchTime' toNode='tNfly4' toField='set_startTime'></ROUTE>
    <Route fromNode="tNfly4" fromField ="fraction_changed" toNode="Nfly4" toField="set_fraction"></Route>
    <Route fromNode="Nfly4" fromField ="value_changed" toNode="NOSE444" toField="translation"></Route>
    
    <ROUTE fromNode='launch' fromField='touchTime' toNode='tNfly5' toField='set_startTime'></ROUTE>
    <Route fromNode="tNfly5" fromField ="fraction_changed" toNode="Nfly5" toField="set_fraction"></Route>
    <Route fromNode="Nfly5" fromField ="value_changed" toNode="NOSE555" toField="translation"></Route>
    
    <ROUTE fromNode='launch' fromField='touchTime' toNode='tNfly6' toField='set_startTime'></ROUTE>
    <Route fromNode="tNfly6" fromField ="fraction_changed" toNode="Nfly6" toField="set_fraction"></Route>
    <Route fromNode="Nfly6" fromField ="value_changed" toNode="NOSE666" toField="translation"></Route>

  <Viewpoint id="default" position="12.01925 4.52593 -11.77357" orientation="0.01366 0.99960 0.02483 2.70013" 
	zNear="0.93444" zFar="80.42884" centerOfRotation="6.32481 3.97442 0.24755" fieldOfView="0.78540" description="defaultX3DViewpointNode"></Viewpoint>
  
 <Viewpoint id="open1" position="1.72875 -0.07534 8.96527" orientation="0.00246 0.99998 0.00545 2.83544" 
  zNear="0.93444" zFar="80.42884" centerOfRotation="0.77825 -0.10656 11.97192" fieldOfView="0.78540" description="defaultX3DViewpointNode"></Viewpoint>
  
  <Viewpoint id="scan" position="10.84847 1.57537 7.03232" orientation="0.00042 0.99988 0.01574 3.10355" 
	zNear="0.93444" zFar="80.42884" centerOfRotation="10.73638 1.48272 9.97539" fieldOfView="0.78540" description="defaultX3DViewpointNode"></Viewpoint>

    <Viewpoint id="package" position="2.54300 2.38163 4.63699" orientation="-0.04235 0.99909 0.00583 1.81694" 
	zNear="0.93444" zFar="80.42884" centerOfRotation="-3.07415 2.10143 6.04972" fieldOfView="0.78540" description="defaultX3DViewpointNode"></Viewpoint>

    <Viewpoint id="load" position="14.38575 2.03764 6.70376" orientation="-0.00443 0.99915 0.04108 2.29453" 
	zNear="0.93444" zFar="80.42884" centerOfRotation="10.16738 1.63436 10.42037" fieldOfView="0.78540" description="defaultX3DViewpointNode"></Viewpoint>
  
  <Viewpoint id="props" position="8.41518 1.08458 4.15311" orientation="-0.09339 -0.99451 -0.04714 1.93819" 
	zNear="0.93444" zFar="80.42884" centerOfRotation="9.99973 0.82532 4.76511" fieldOfView="0.78540" description="defaultX3DViewpointNode"></Viewpoint>

    <Viewpoint id="loadw" position="10.48394 1.63529 15.15655" orientation="0.95156 0.12020 -0.28298 0.04224" 
	zNear="0.93444" zFar="80.42884" centerOfRotation="10.45921 1.84097 10.04585" fieldOfView="0.78540" description="defaultX3DViewpointNode"></Viewpoint>
  
   <Viewpoint id="loadb" position="4.14875 3.97437 4.84260" orientation="0.01099 0.97174 0.23580 3.12917" 
	zNear="0.93444" zFar="80.42884" centerOfRotation="4.03362 0.91837 10.77108" fieldOfView="0.78540" description="defaultX3DViewpointNode"></Viewpoint>

    <Viewpoint id="loadn" position="11.85511 1.92406 3.51670" orientation="-0.01429 0.99950 0.02814 1.53204" 
	zNear="0.93444" zFar="80.42884" centerOfRotation="7.45112 1.74178 3.34244" fieldOfView="0.78540" description="defaultX3DViewpointNode"></Viewpoint>

    <Viewpoint id="estop" position="10.54472 2.77118 7.43776" orientation="-0.39204 0.91912 0.03915 0.32744" 
	zNear="0.93444" zFar="80.42884" centerOfRotation="10.03873 2.55148 5.81239" fieldOfView="0.78540" description="defaultX3DViewpointNode"></Viewpoint>

    <Viewpoint id="enable" position="11.19436 2.48423 7.93908" orientation="-0.38797 0.92051 0.04632 0.47232" 
	zNear="0.93444" zFar="80.42884" centerOfRotation="10.15590 1.81250 5.80061" fieldOfView="0.78540" description="defaultX3DViewpointNode"></Viewpoint>

    <Viewpoint id="launch 1" position="10.99193 2.20421 8.27032" orientation="-0.21729 0.96850 -0.12162 0.31896" 
	zNear="0.93444" zFar="80.42884" centerOfRotation="10.15590 1.81250 5.80061" fieldOfView="0.78540" description="defaultX3DViewpointNode"></Viewpoint>

    <Viewpoint id="view" position="16.25694 2.56033 6.00542" orientation="-0.02098 0.99860 0.04850 1.37543" 
	zNear="0.93444" zFar="80.42884" centerOfRotation="7.44272 2.02348 4.24023" fieldOfView="0.78540" description="defaultX3DViewpointNode"></Viewpoint>
  
  <Viewpoint id="comm" position="11.27861 1.82157 9.14454" orientation="-0.09455 0.99552 -0.00055 0.29082" 
	zNear="0.93444" zFar="80.42884" centerOfRotation="10.28007 1.72682 5.79332" fieldOfView="0.78540" description="defaultX3DViewpointNode"></Viewpoint>

     
    <div id="camera_buttons" style="display: inline;">
    <button title="Click here to restart" onClick="window.location.reload();"  onclick="document.getElementById('default').setAttribute('set_bind','true');" style="border: none; background-color: #f00; padding: 4px 12px; color: #fff;">Home</button>
    
    <button title="Click on this button to navigate to BODY VIEWPOINT. Click on drop mech to select body." onclick="document.getElementById('load').setAttribute('set_bind','true'); body_pop();" style="border: none; background-color: #fff; padding: 4px 12px; color: #f00;">Body</button>
    
    <button title="Click on this button to see components on carriage" onclick="document.getElementById('scan').setAttribute('set_bind','true'); scan_pop();" style="border: none; background-color: #f00; padding: 4px 12px; color: #fff;">Scan</button>

    <button title="Click on this button to navigate to PACKAGE VIEWPOINT. Click on QR code to scan package or click anywhere else to load package." onclick="document.getElementById('package').setAttribute('set_bind','true'); package_pop();" style="border: none; background-color: #f00; padding: 4px 12px; color: #fff;">Package</button>
    
    <button title="Click on this button to check propulsion system" onclick="document.getElementById('props').setAttribute('set_bind','true'); props_pop();" style="border: none; background-color: #fff; padding: 4px 12px; color: #f00;">Props</button>

    <button title="Click on this button to select a wing" onclick="document.getElementById('loadw').setAttribute('set_bind','true'); wing_pop();" style="border: none; background-color: #f00; padding: 4px 12px; color: #fff;">Wing</button>

    <button title="Click on this button to select a battery" onclick="document.getElementById('loadb').setAttribute('set_bind','true'); battery_pop()" style="border: none; background-color: #fff; padding: 4px 12px; color: #f00;">Battery</button>

    <button title="Click on this button to select a nose cone" onclick="document.getElementById('loadn').setAttribute('set_bind','true'); nose_pop();" style="border: none; background-color: #f00; padding: 4px 12px; color: #fff;">Nose</button>
    
    <button title="Click on this button to perform walkaround checks, control surface checks and critical checks" onclick="checks();" style="border: none; background-color: #fff; padding: 4px 12px; color: #f00;">Checks</button>
    
    <button title="Click on this button to initiate communication with controller" onclick="comms();" style="border: none; background-color: #f00; padding: 4px 12px; color: #fff;">Comms</button>

    <button title="Click on this button to release e-stop"onclick="document.getElementById('estop').setAttribute('set_bind','true'); estop_pop();" style="border: none; background-color: #fff; padding: 4px 12px; color: #f00;">E-Stop</button>

    <button title="Click on this button to press enable" onclick="document.getElementById('enable').setAttribute('set_bind','true'); enable_pop();" style="border: none; background-color: #f00; padding: 4px 12px; color: #fff;">Enable</button>

    <button onclick="document.getElementById('launch 1').setAttribute('set_bind','true'); launch_pop();" style="border: none; background-color: #fff; padding: 4px 12px; color: #f00;">Launch</button>
    
    <div style="float:right;">
    <button title="click to mute/unmute" onclick="Mute();" style='font-size:20px; color:red; cursor:pointer;'><i class='fas fa-volume-up' style='font-size:48px;color:red'></i></button>
    <button title="Click on this button to see components on carriage" onclick="document.getElementById('view').setAttribute('set_bind','true')" style="border: none; background-color: #00b3b3; padding: 4px 12px; color: #fff;">View</button>
    <button onclick="scores();" style="border: none; background-color:#ffc680; padding: 4px 12px; color: #fff;">Results</button>

    <button  onclick="helpMe();" style="border: none; background-color:#6666ff; padding: 4px 12px; color: #fff;">Help</button>
    
    <button title="Click here to submit feedback" onclick="feedback();" style="border: none; background-color:#00b300; padding: 4px 12px; color: #fff;">Feedback</button>
 
    <button title="Click on this button to exit" onclick="window.location.href = 'index.php'"; style="border: none; background-color: #ff6666; padding: 4px 12px; color: #fff;">Exit</button>
    </div>
    </scene>
    </x3d>
    </div>
  </body>
</html>
