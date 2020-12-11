<?php

//action.php
session_start();



if ( isset( $_POST[ "action" ] ) == "add" ) {


  if ( isset( $_SESSION[ "player_area" ] ) ) {
    $player_array_id = array_column( $_SESSION[ "player_area" ], "player_id" );
    if ( !in_array( $_POST[ "id" ], $player_array_id ) ) {
      $count = count( $_SESSION[ "player_area" ] );
      $player_array = array(
        'player_id' => $_POST[ "id" ],
        'player_name' => $_POST[ "name" ],
        'player_year' => $_POST[ "year" ],
        'player_team' => $_POST[ "team" ],
        'player_hits' => $_POST[ "hits" ],
        'player_doubles' => $_POST[ "doubles" ],
        'player_triples' => $_POST[ "triples" ],
        'player_homeruns' => $_POST[ "homeruns" ],
        'player_spray_chart' => $_POST[ "spray_chart" ],
        'player_field_chart' => $_POST[ "field_chart" ]


      );
      $_SESSION[ "player_area" ][ $count ] = $player_array;
    } else {
      echo '<script>alert("Player Already Added")</script>';
    }
  } else

  {
    $player_array = array(
      'player_id' => $_POST[ "id" ],
      'player_name' => $_POST[ "name" ],
      'player_year' => $_POST[ "year" ],
      'player_team' => $_POST[ "team" ],
      'player_hits' => $_POST[ "hits" ],
      'player_doubles' => $_POST[ "doubles" ],
      'player_triples' => $_POST[ "triples" ],
      'player_homeruns' => $_POST[ "homeruns" ],
      'player_spray_chart' => $_POST[ "spray_chart" ],
      'player_field_chart' => $_POST[ "field_chart" ]


    );
    $_SESSION[ "player_area" ][ 0 ] = $player_array;
  }
  echo make_player_table();
}


if ( isset( $_POST[ "action" ] ) == "delete" ) {
  foreach ( $_SESSION[ "player_area" ] as $keys => $values ) {
    if ( $values[ 'player_id' ] == $_POST[ "id" ] ) {
      unset( $_SESSION[ "player_area" ][ $keys ] );
      echo make_player_table();
    }
  }
}

function make_player_table() {

  $output = '';
  if ( !empty( $_SESSION[ "player_area" ] ) ) {

    $output .= '

                <div class="table-responsive" >
                     <table id="drag_table">
                          <thead>
              <tr>
                               <th>Name</th>
                 <th>Year</th>

                               <th>Team</th>
                               <th>H</th>
                               <th>2B</th>
                 <th>3B</th>
                               <th>HR</th>
                          </tr> </thead>
           ';


    foreach ( $_SESSION[ "player_area" ] as $keys => $values ) {
      $output .= '
                     <h4 id="reg">2019 Regular Season<h4>
           <div class="player_chart col-lg-6 col-xs-12"><img src="' . $values[ "player_spray_chart" ] . '" class="player_img"/>
           </div>

            <div class="player_chart col-lg-6 col-xs-12">
            <img src="' . $values[ "player_field_chart" ] . '" id="field_img"/></div>
           <tr>
              <td>' . $values[ "player_name" ] . '</td>
              <td>' . $values[ "player_year" ] . '</td>

                          <td>' . $values[ "player_team" ] . '</td>
                          <td>' . $values[ "player_hits" ] . '</td>
              <td>' . $values[ "player_doubles" ] . '</td>
                          <td>' . $values[ "player_triples" ] . '</td>
                          <td>' . $values[ "player_homeruns" ] . '</td>

                     </tr>

                </table><br/>


        <div class="remove"><a href="#" class="remove_player" id="' . $values[ "player_id" ] . '"><span class="text-danger">Remove</span></a></div>
        ';

    }

  }
  return $output;
}
?>
