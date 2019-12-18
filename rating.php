<script type="text/javascript" src="js/jquery_src.js" ></script>

<div class="demo-table">
               
           <div id="tutorial-1">
    
<input type="hidden" name="rating" id="rating" value="1" />


<ul onMouseOut="resetRating(1);">
  <?php
  for($i=1;$i<=5;$i++) {
  $selected = "";
  if(!empty(1) && $i<=1) {
	$selected = "selected";
  }
  ?>
    
  <li class='<?php echo $selected; ?>'
      onmouseover="highlightStar(this,<?php echo $row["articleid"]; ?>);" 
      onmouseout="removeHighlight(<?php echo $row["articleid"]; ?>);" 
      onClick="addRating(this,<?php echo $row["articleid"]; ?>);">&#9733;
  </li> 
  
  <?php }  ?>
<ul>
</div>
   </div>   