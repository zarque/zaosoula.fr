<div class="abilities">
<h2 class="editable" data-editable-mode="input" data-editable-name="param_title_language"><strong><? echo $resume->param['title_language'];?></strong></h2>
<div class="row">

  <?
          foreach($resume->languages as $key => $value){
            if($key === 0){
              echo '<div class="6u 12u$(medium)"><ul class="no-bullets">';
            }
            echo '<li>
              <span class="ability-title">'.$value['name'].'</span>
              <span class="ability-score">';
              for($stars = 1; $stars <= 5; $stars++) {
                  $fill = ($value['level'] >= $stars) ? '' : '-o';
                  echo '<span class="fa fa-star'.$fill.'"></span>';
              }

              echo '</span></li>';
            if(ceil(count($resume->languages) / 2) == $key + 1) {
              echo '</ul></div><div class="6u 12u$(medium)"><ul class="no-bullets">';
            }

            if($key == count($resume->languages) - 1){
              echo '</ul></div>';
            }
          }
        ?>
</div>
</div>
