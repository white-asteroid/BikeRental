<div id="forgot101" class="w3-modal mt-5">
  <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

    <div class="w3-center"><br>
      <span onclick="document.getElementById('forgot101').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>

    </div>

    <form class="w3-container" method="post" action="sendmail.php">
      <div class="w3-section">
        <label><b>Email</b></label>
        <input id="send-email" class="w3-input w3-border" type="email" placeholder="Enter email" name="email" required>
        
        <b style="color:red;"></b>
        <!-- onclick="document.getElementById('forgot-101').style.display='none'; document.getElementById('otp101').style.display='block'" -->
        <button 
        class="w3-button w3-block w3-green w3-section w3-padding" name="passwordreset" value="shivigarg010@gmail.com" id="sendmail" type="submit">Send mail</button>
        <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me
      </div>
    </form>

  </div>
</div>