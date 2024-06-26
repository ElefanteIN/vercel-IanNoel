<!DOCTYPE html>
<html>
<title>Elefante_Portfolio</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  body,
  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    font-family: "Montserrat", sans-serif
  }

  .w3-row-padding img {
    margin-bottom: 12px
  }

 
  .w3-sidebar {
    width: 120px;
    background: #222;
  }

  
  #main {
    margin-left: 120px
  }

  @media only screen and (max-width: 600px) {
    #main {
      margin-left: 0
    }
  }
</style>

<body class="w3-black">

  <nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
    
    
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
      <i class="fa fa-home w3-xxlarge"></i>
      <p>HOME</p>
    </a>
    <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
      <i class="fa fa-user w3-xxlarge"></i>
      <p>ABOUT</p>
    </a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
      <i class="fa fa-envelope w3-xxlarge"></i>
      <p>CONTACT</p>
    </a>
  </nav>

  
  <div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
    <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
      <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
      <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
      <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
    </div>
  </div>

  
  <div class="w3-padding-large" id="main">
  
    <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
      <h1 class="w3-jumbo"><span class="w3-hide-small">I'm</span> Ian Noel Elefante.</h1>
      <p>3rd Year Bachelor of Science and Information Technology Student.</p>
     
    </header>

    <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
      <h2 class="w3-text-light-grey">Ian Noel Elefante</h2>
      <hr style="width:200px" class="w3-opacity">
      <p>My name is Ian Noel Elefante, and I am currently a Bachelor of Science in Information Technology (BSIT) student
        at Saint Luois College of San Fernando, La Union. I'm from Lang-Ayan, Santiago, Ilocos Sur. I'm 20 years old. My
        hobbies is Playing Basketball and Playing some Outdoor Activities.
      </p>
      <h3 class="w3-padding-16 w3-text-light-grey">My Skills</h3>
      <p class="w3-wide">Adaptability</p>
      <div class="w3-white">
        <div class="w3-dark-grey" style="height:28px;width:95%"></div>
      </div>
      <p class="w3-wide">Leadership</p>
      <div class="w3-white">
        <div class="w3-dark-grey" style="height:28px;width:85%"></div>
      </div>
      <p class="w3-wide">Communication</p>
      <div class="w3-white">
        <div class="w3-dark-grey" style="height:28px;width:80%"></div>
      </div><br>

      <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
        <h2 class="w3-text-light-grey">Contact Me</h2>
        <hr style="width:200px" class="w3-opacity">

        <div class="w3-section">
          <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Lang-Ayan, Santiago, Ilocos
            Sur</p>
          <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Phone: 09288494666</p>
          <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email:
            Kherbycampilla@gmail.com</p>
        </div><br>
        <p>Let's get in touch. Send me a message:</p>

        <form action="/action_page.php" target="_blank">
          <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
          <p><input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="Email"></p>
          <p><input class="w3-input w3-padding-16" type="text" placeholder="Subject" required name="Subject"></p>
          <p><input class="w3-input w3-padding-16" type="text" placeholder="Message" required name="Message"></p>
          <p>
            <button class="w3-button w3-light-grey w3-padding-large" type="submit">
              <i class="fa fa-paper-plane"></i> SEND MESSAGE
            </button>
          </p>
        </form>
       
      </div>

    </div>

</body>

</html>
