<!-- Header and hero image -->
<div class="header bg-bluegradient">
  <div class="container flex-space-between flex ">
    <div class="logo-outer">
      <img src="images/logo.png" class="logo mr-15" />
    </div>

    <div class="nav flex">
      <a href="">About</a>
      <a href="">Join</a>
      <a href="">Pitchero</a>
    </div>
  </div>
</div>

<div class="hero">
  <div class="container hero-overlay-outer">
    <div class="hero-overlay">
      <h1 class="brand">Birmingham Bulls RFC</h1>
      <p class="tagline">Inclusive rugby team<br /> based in the West Midlands, UK</p>
    </div>
  </div>

  <!-- <div id="hero-image" style="background-image: url(/images/a-b-winners.jpg);"></div> -->
  
  <?php $images = array(
    '82905207_10162798659160557_736411128317345792_n.jpg', 
    '82813759_10162834290370557_332220934435897344_n.jpg', 
    '83671809_10162798664200557_6699633654403956736_n.jpg', 
    '84293562_10162834294410557_3722382622832197632_n.jpg') ?>
  
  <div id="hero-image" style="background-image: url(images/<?php echo $images[rand(0,3)]; ?>);"></div>
  <div class="container">
    <div class="credit"><a href="https://www.facebook.com/alan.whittington.35/">Images by Alan Whittington 💛</a></div>
  </div>
</div>
