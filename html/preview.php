<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preview</title>
</head>

<style>
body{
    color: white;
    font-family: sans-serif;
}
img{
        max-width: 100%;
        max-height: 100%;
        
        display: block; /* remove extra space below image */
    }
    *{
        padding: 0;
        margin: 0;
        /* background-color: black; */
    }
 .container1{
    
  width: 100%;
  height: 1000px;
  /* background-image: url('backG.jpg'); */
  background-color: #141414;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
  position: relative;
  /* background-color: rgb(0, 0, 0); */
  font-weight: 300;
  font-size: x-large;
  font-family: Verdana, Geneva, Tahoma, sans-serif;
  padding: 5px;
  word-spacing: 2px;
 

} 
.container2{
  /* background-color: red; */
  padding: 40px;
  text-align: left;
  width: 20%;
  height: 500px;
  position: absolute;
  top: 50%; left: 50%;
  transform: translate(-50%,-50%);
  font-size: x-large;
  font: cursive;
  font-family: Arial, Helvetica, sans-serif;
  color: white;
  
  opacity: .75;
  /* border: 3px solid green; */
}

.button {
  border-radius: 4px;
  background-color: rgb(255, 0, 0);
  border: none;
  color: #ffffff;
  text-align: center;
  font-size: 18px;
  padding: 20px;
  width: 300px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  border-radius: 10px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

.tb1{
    width: 300px; height: 50px;
    border-radius: 10px;
    font-size: 20px;
}
.tb2{
    width: 300px; height: 50px;
    border-radius: 10px;
    font-size: 20px;
}

#C{
    font-size: 2px;
    font-family: 'Courier New', Courier, monospace;
    font-style: italic;
}

.flex-container {
  display: flex;
  flex-wrap: nowrap;
  flex: 2 1 auto;
  
}

.flex-container > div {
  
  opacity: 1;
  width: 600px;
  height: 400px;
  margin: 10px;
  text-align: center;
  line-height: 75px;
  font-size: 30px;
}

.flex-container1 > div {
  background-color: black;
  margin: 10px;
  text-align: center;
  line-height: 75px;
  font-size: 30px;
}



.fotu-1 {
   flex-grow: 1;
   
   font-family: 'Courier New', Courier, monospace;
   color: #f1f1f1;
   text-align: left;
   
}
.fotu-2 {
   flex-grow: 4;
   background-color: black;
   object-fit: fill;
   
}

.flex-containerArvind > div {
  background-color: black;
  width: 400px;
  margin: 10px;
  text-align: center;
  line-height: 75px;
  font-size: 30px;
  height: 200px;
}

.flex-containerArvind {
  display: flex;
  flex-wrap: nowrap;
  background-color: #141414;
}
.img1{
    

}
.nfHeader{
  display: flex;
  justify-content: space-between;
  padding: 0 50px;
}

.logoutbtn{
  background: blue;
}
.nfHeader_left{
  padding: 10px 0;
  display: flex;
  justify-content: center;
  align-items: center;
}
.nfHeader_left{
  padding: 10px 0;
  display: flex;
  justify-content: center;
  align-items: center;
}
.nfHeader_left img{
  margin-right: 20px;
}
.nfHeader_left p {
  margin: 0 20px;
}
</style>
<body>
    
<div class="container1">
    <div class="nfHeader">
        <div class="nfHeader_left">
         <img src="https://upload.wikimedia.org/wikipedia/commons/0/08/Netflix_2015_logo.svg" style="height: 30px;" alt=""> 
         <p>Home</p>
         <p><a style="text-decoration: none;color: white" href="subs.html">Subscription</a></p>
         <p><a style="text-decoration: none;color: white" href="watchList.html">Watch List</a></p>
         <p><a style="text-decoration: none;color: white" href="downloads.html">Downloads</a></p>
        </div>
        <div class="nfHeader_right">
          <form action="logout.php" method="post">
            <button id="logoutbtn" type="submit" >Logout</button>
          </form>
          
        </div>
      </div>
    <!-- <img src="netflixLogo.png"  width="350" 
    height="200" alt=""> -->
    <div class="flex-container">
        <div class="fotu fotu-1" >
<h2>Stranger things</h2>
<h3 style="font-size: medium;">In 1980s Indiana, a group of young friends witness supernatural forces and secret government exploits. As they search for answers, the children unravel a series of extraordinary mysteries.</h3>

        </div>
        <div class="fotu fotu-2">
            <img src="https://occ-0-6246-2186.1.nflxso.net/dnm/api/v6/6gmvu2hxdfnQ55LZZjyzYR4kzGk/AAAABQpnK-uuOe7H7X3RMJKcroyNCybbVqlpkQEBlMZSM0nhbfjXH5QtVXtsUJ1JaWAslHy83WBoWpKciuuoURdF9Ccug19-wV3w-Sghdp4FMz7pwnwewfUwIm5EfLzL9PqT-ApC.jpg?r=ea5" style="height: 100% ;width: 800px; object-fit: cover;" alt="">
        </div>
        
      </div>
      <br>
      <h2 style="color: #f1f1f1" >Trending Now<?php 
      if($_SESSION['user']){
                // echo "Favorite color is " . $_SESSION["user"] . ".<br>";
      }else{
        echo "No user";
        echo "<script>window.location.href='login.html';</script>";
        exit;
      }
      
?></h2>
      <br>
      <div class="container3">
      
        
        <div class="flex-containerArvind">
        <div class="img1">
            <img src="http://occ-0-6246-2186.1.nflxso.net/dnm/api/v6/6gmvu2hxdfnQ55LZZjyzYR4kzGk/AAAABfWBCtebMFeCUpoFXOLMKLQmVmVHZZMtapSlr8scWHIrDG5p6FBKw_uT1AW0WxVr8_jghjmKNQPLuvGoeoT3pORc6RM7RV33--E.jpg?r=fee" alt="">
        </div>
        <div class="img2"><img src="http://occ-0-6246-2186.1.nflxso.net/dnm/api/v6/6gmvu2hxdfnQ55LZZjyzYR4kzGk/AAAABZ2yHxYwXGYYvYNaapauRedQTUaB1IovXVNfbr9TtduR4eThrbvxbp0pKx0fZcPK0OhkWy0K-HjlGnytRKTOFdaqF3Nc1H3qBUk.jpg?r=335" alt=""></div>
        <div class="img3"><img src="http://occ-0-6246-2186.1.nflxso.net/dnm/api/v6/6gmvu2hxdfnQ55LZZjyzYR4kzGk/AAAABawtLG-_WX7kt60wOuFDzqk__oEIQouWsKSGP45PWJkm4S1kudKEzir_Q1qB1ChNOJWdmoPVCVVfodgYjG2czN5TCjF3PEtXOFM.jpg?r=cd8" alt=""></div>  
        <div class="img4"><img src="http://occ-0-6246-2186.1.nflxso.net/dnm/api/v6/6gmvu2hxdfnQ55LZZjyzYR4kzGk/AAAABb2SjnfZKaK8vfubF2aGiKYnVS5FYmcFMxev1BiE70xjLdrtqw0B_gF5NrZQVpib7Yf7qcYFRSGziBLIaUJlur9LyLqcMkiP1eE5frGDz-Q5OKTsn9TupLSeWRmZCukWRDTG.jpg?r=484" alt=""></div>
        <div class="img5"><img src="https://occ-0-6246-2186.1.nflxso.net/dnm/api/v6/6gmvu2hxdfnQ55LZZjyzYR4kzGk/AAAABbxgQqmtgCTtSHI7IXELpxVhlZ5eZjrr3RQYU2syr5rf1-8K9Eueo2qryJ8EcQ8sqmuNrVXPts7-cf1fQEVayvGiDe03Dpf2oxA.jpg?r=bd6" alt=""></div>
       
      </div>
    </div>

     

   
</div>



    
</body>
</html>