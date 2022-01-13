<?php

$url = sprintf(
  "https://www.pitchero.com/data/club/%s/matches?teamId=%s",
  CLUB_ID,
  TEAM_ID
);

$match_data = json_decode(get_url($url));

?>

<section class="fixtures">
  <div class="container">
    <table class="">
      <thead>
        <td>HOME</td>
        <td></td>
        <td>AWAY</td>
      </thead>

      <?php
      foreach ($match_data->data->matchFixtures as $_key => $fixture) {
      ?>

        <tr class="fixture">
          <td class="team home"><?php echo $fixture->homeSide->name ?></td>
          <td>
            <div class="date"><?php echo date("F jS, Y", strtotime($fixture->dateTime)); ?></div>
            <div>Kick off: <?php echo $fixture->kickoff ?> </div>
          </td>
          <td class="team away"><?php echo $fixture->awaySide->name ?></td>
        </tr>

      <?php
      }
      ?>
    </table>
  </div>
</section>
