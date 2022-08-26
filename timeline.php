<!DOCTYPE html>
<html>
    <head>

    </head>
    <style>
body{
  background: #F1F1F1;
}

.timeline{
  counter-reset: year 2013;
  position: relative;
}

.timeline li{
  list-style: none;
  float: left;
  width: 33.3333%;
  position: relative;
  text-align: center;
  text-transform: uppercase;
  font-family: 'Dosis', sans-serif;
}

ul:nth-child(1){
  color: #4caf50;
}

.timeline li:before{
  counter-increment: year;
  content: counter(year);
  width: 50px;
  height: 50px;
  border: 3px solid #4caf50;
  border-radius: 50%;
  display: block;
  text-align: center;
  line-height: 50px;
  margin: 0 auto 10px auto;
  background: #F1F1F1;
  color: #000;
  transition: all ease-in-out .3s;
  cursor: pointer;
}

.timeline li:after{
  content: "";
  position: absolute;
  width: 100%;
  height: 1px;
  background-color: grey;
  top: 25px;
  left: -50%;
  z-index: -999;
  transition: all ease-in-out .3s;
}

.timeline li:first-child:after{
  content: none;
}
.timeline li.active{
  color: #555555;
}
.timeline li.active:before{
  background: #4caf50;
  color: #F1F1F1;
}

.timeline li.active + li:after{
  background: #4caf50;
}
    </style>
<body>
<ul class="timeline" id="timeline">
  <li class="li complete">
    <div class="timestamp">
      <span class="author">Abhi Sharma</span>
      <span class="date">11/15/2014<span>
    </div>
    <div class="status">
      <h4> Shift Created </h4>
    </div>
  </li>
  <li class="li complete">
    <div class="timestamp">
      <span class="author">PAM Admin</span>
      <span class="date">11/15/2014<span>
    </div>
    <div class="status">
      <h4> Email Sent </h4>
    </div>
  </li>
  <li class="li complete">
    <div class="timestamp">
      <span class="author">Aaron Rodgers</span>
      <span class="date">11/15/2014<span>
    </div>
    <div class="status">
      <h4> SIC Approval </h4>
    </div>
  </li>
  <li class="li">
    <div class="timestamp">
      <span class="author">PAM Admin</span>
      <span class="date">TBD<span>
    </div>
    <div class="status">
      <h4> Shift Completed </h4>
    </div>
  </li>
 </ul>      
</body>
</html>