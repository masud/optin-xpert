<div id="lightBox" class="modal fade email-subscribe">
  <div class="modal-dialog">
    <div class="modal-content clearfix">     
          <div class="modal-body">

            <div class="lightbox-optin-image">
              <?php if(empty($OPTIN_IMAGE)): ?>  
                <img src="<?php echo plugins_url('../../assets/image/flyer-icon_tx.png', __FILE__ ) ?>"; ?>
              <?php else: ?>
                <img src="<?php echo $OPTIN_IMAGE ?>"; ?>
              <?php endif; ?> 
            </div>

            <div class="lightbox-optin-content">              
              <?php if(empty($OPTIN_DATA)): ?>  
                <p>Subscribe and learn of new tools</p>
              <?php else: ?>
                 <?php echo $OPTIN_DATA; ?>
              <?php endif; ?> 

                <form method="post"  id="tx-optin-form"  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                  <div id = "optin-email-subcribe" class="form-group">                    
                  <input  type="email" name="optin_mail" value="" class="form-control" id="optin_mail" placeholder="Enter email" required>
                  </div>
                  <button id="optin-email-button" type="submit" class="btn btn-success ">Subscribe!!</button>
                </form>
            </div>
        </div>        
    </div>
  </div>
</div>

<?php if($OPTIN_TIMER === "scrolldown"): ?>
  <script>
  jQuery(document).ready(function ($) {
    
    var waypoint = new Waypoint({
      element: document.querySelector('body'),
      handler: function(direction) {
        $('#lightBox').modal('show');
      },
      offset: '-90%' 
    });

  });
  </script>
  <?php else: ?>
    
  <script>
  jQuery(document).ready(function ($) {
    var TIMER = <?php echo $OPTIN_TIMER; ?>; // jshint ignore:line
    //hide a div after  seconds
    setTimeout( function(){
      $('#lightBox').modal('show');
    }, TIMER);
  });
  </script>
  <?php endif; ?>