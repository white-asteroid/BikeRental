
<div id="reset" class="w3 mt-5 mb-5">
  <div class="w3-content w3-card-4 w3-animate-zoom" style="max-width:600px">

    <!-- <div class="w3-center"><br>
        <span onclick="document.getElementById('reset').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
      
      </div> -->

    <form class="w3-container" method="post" action="updatepassword.php">
      <div class="w3-section">
        <label><b>Password</b></label>
        <input id="pswc" class="w3-input w3-border" type="password" placeholder="Enter Password" name="pswc" required>

        <label><b>Confirm Password</b></label>
        <input id="cpswc" class="w3-input w3-border" type="password" placeholder="Re-enter Password" name="pswc" required>
        <p style="color:red;" id="CheckPasswordMatchc"></p>
        <button name="update" class="w3-button w3-block w3-green w3-section w3-padding" type="submit">UPDATE</button>
        <!-- <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me -->
      </div>
    </form>

    <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
      <button onclick="document.getElementById('reset').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
      <span class="w3-right w3-padding w3-hide-small">Forgot <a href="#">password?</a></span>
    </div>

  </div>
</div>

