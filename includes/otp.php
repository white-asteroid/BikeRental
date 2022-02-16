<div id="otp101" class="w3-content div-vert-hor-center">
  <div class="w3-content w3-card-4 w3-animate-zoom" style="max-width:600px">

    <!-- <div class="w3-center"><br>
      <span onclick="document.getElementById('otp101').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close ">&times;</span>

    </div> -->

    <form class="w3-container" method="post" action="resetpassword.php">
      <div class="w3-section">
        <label><b>OTP</b></label>
        <input id="otp" class="w3-input w3-border" type=" text" placeholder="Enter OTP" name="otp" required>
        <b style="color:red;"></b>
        <button class="w3-button w3-block w3-green w3-section w3-padding" name="passwordreset" value="passwordreset" type="submit">Update</button>
        <!-- <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me -->
      </div>
    </form>

  </div>
</div>
