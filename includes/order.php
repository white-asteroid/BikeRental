<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ordermodal">
  Confirm Order
</button> -->

<!-- Modal -->
<!-- <button onclick="document.getElementById('order101').style.display='block'" class="w3-button w3-black">Open Modal</button> -->

<div id="order101" class="w3-modal" style="display:none;">
  <div class="w3-modal-content w3-card-4 w3-animate-zoom">
    <header class="w3-container w3-teal"> 
      <span onclick="document.getElementById('order101').style.display='none'" 
      class="w3-button w3-display-topright">&times;</span>
      <h2>Modal Header</h2>
    </header>
    <div class="w3-container">
      <form id="order-form">
          <div class="mb-3">
           <p> <label for="hno">Address:</label></p>
            <input type="text" class="w3-input w3-border w3-half" placeholder="House number" id="hno" name="hno">
            <input type="text" class="w3-input w3-border w3-half" id="landmark" placeholder="Landmark/Street Number" name="landmark">
            <input type="text" class="w3-input w3-border w3-half" id="city" placeholder="City" name="city">
            <input type="text" class="w3-input w3-border w3-half" id="state" placeholder="state" name="state">
          </div>
          <!-- <div class="mb-3">
            <label for="hno">Address:</label>
            <input type="text" class="w3-input w3-border" id="hno" name="hno">
          </div> -->
          <div class="mb-4">
            <label for="fromd" >From:</label>
            <input type="date" class="w3-input w3-border" id="fromd" name="fromd">
          </div>
          <div class="mb-3">
            <label for="tod" >To:</label>
            <input type="date" class="w3-input w3-border" id="tod" name="tod">
          </div>
          <div class="mb-3">
            <label for="msg" >Message</label>
            <textarea type="text" class="w3-input w3-border" id="msg" name="msg"></textarea>
          </div>          
        </form>
    </div>
    <footer class="w3-container w3-teal">
    <button  class="w3-button w3-block w3-green w3-section w3-padding" form="order101" type="submit">Login</button>
    </footer>
  </div>
</div>