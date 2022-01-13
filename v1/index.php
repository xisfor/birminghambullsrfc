<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="shortcut icon" href="/images/logo.png">
  <link href="https://fonts.googleapis.com/css?family=Graduate" rel="stylesheet">
  <link rel="stylesheet" href="/style.css">

  <title>Birmingham Bulls RFC</title>

  <style>
    /* add anything temporary here */
    .alert {
      background-color: #FEE;
      border: 1px solid red;
      box-shadow: 0 0 15px #666;
      padding: 15px;
      color: #333;
    }
  </style>
</head>

<body>
  <?php
  // utils
  include('config.php');
  require('url_proxy.php');
  ?>

  <?php include('header.php'); ?>

  <?php //include("team_homepage.php"); 
  ?>


  <?php include("matches.php"); ?>

  <!-- COVID shiiiiit -->
  <section class="bg-black pt-15 pb-15">
    <div class="container content alert">

      <h2>COVID-19 Information</h2>

      <h3>Club Contact</h3>
      <p class="covtext">For any queries regarding COVID-19, including queries around contact tracing, please e-mail <a href="mailto:covid@birminghambullsrfc.com">covid@birminghambullsrfc.com</a></p>

      <h3>Return to Rugby</h3>
      <p class="covtext">Until 29 March 2021 we remain at Stage 'A' of England Rugby's <a href="https://www.englandrugby.com/dxdam/e7/e74055c0-8314-4250-91cb-034c0c6b423b/RUGBY%20ROAD%20MAP%202021%20MARCH%20-STAGE%204.pdf" target="_blank"> Return to Rugby Road Map</a>. We are currently waiting for updated guidance, and confirmation from Moor Lane. We hope to have this week begining 15 March 2021. As more information about the return process is released, we will update the table below. </p>
      <p class="covtext">All information will be posted on the club <a href="http://www.pitchero.com/clubs/birminghambullsrfc/">Pitchero Site</a>.</p>

      <table id="covdate" class="table">
        <tr>
          <th>Action</th>
          <th>Status</th>
          <th>Date</th>
        </tr>
        <tr class="red">
          <td>Moor Lane open for Rugby</td>
          <td>Closed</td>
          <td>4 January 2021 </td>
        </tr>

        <tr class="red">
          <td>England Rugby Rugby Road Map</td>
          <td>Stage A</td> Until 29 March 2021.<td>As at 11 March 2021</td>
        </tr>
        <tr class="red">
          <td>England Rugby Risk Assessment</td>
          <td>Awaiting updated guidance for Stage D1 </td>
          <td>As at 11 March 2021</td>
        </tr>
        <tr class="green">
          <td>National (England) COVID-19 Guidance</td>
          <td>Compliant - no rugby activity</td>
          <td>As at 11 March 2021</td>
        </tr>
        <tr class="red">
          <td>National (England) COVID-19 Restrictions</td>
          <td>Lockdown</td>
          <td>As at 11 March 2021</td>
        </tr>

      </table>
    </div>
  </section>






  <section class="league"></section>

  <section class="training-or-upcoming">

  </section>


  <!-- About the club -->

  <section class="about bg-yellow pt-15 pb-15">
    <div class="container content">
      <p>The Birmingham Bulls are a friendly, inclusive Rugby Union team that always ready to welcome new players to join
        us at any time, regardless of experience, age or orientation. </p>

      <p>We currently play in two leagues. The West Midlands Merit and the South England invitational.</p>

      <p>We train twice a week. You should come join us!</p>
    </div>
  </section>

  <!-- Fixures and news... probably just fixtures -->
  <!-- <div class="container">
    <div id="fixtures">
      <ul>
        <li v-for="event in events">
          {{ event.summary }} - {{ event.start | formatDate }}
        </li>
      </ul>
    </div>
  </div> -->



  <!-- Meet the team -->
  <div class="container">
  </div>

  <!-- Join the bulls -->
  <div class="container">
  </div>

  <!-- Footer for legals, etc -->
  <div class="container">
  </div>



  <!-- <script src="//cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script> -->
  <!-- <script src="//stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" ></script> -->
  <!-- <script src="//unpkg.com/ical@0.5.0/ical.js"></script> -->
  <!-- <script src="//cdn.jsdelivr.net/npm/vue/dist/vue.js"></script> -->

  <!-- <script>
    function dateFormatter(date) {
      var options = { year: 'numeric', month: 'long', day: 'numeric' };
      return new Date(date).toLocaleDateString('en-GB', options);
    }
    var fixturesEventsApp = new Vue({
      el: '#fixtures',
      data: {
        events: {}
      },
      filters: {
        formatDate: dateFormatter
      }
    });

    $.get('/cal.php').then(function (res) {
      var events = ical.parseICS(res);
      window.events = events;

      // convert to array
      window.eventsArr = Object.entries(events).map(function (entry) {
        return entry[1];
      });

      // TODO sort by date

      // TODO filter by type

      fixturesEventsApp.events = events;
    });
  </script> -->
</body>

</html>