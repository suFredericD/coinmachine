<?php
// =====================================================================================================
// Project      : CoinMachine platform
// Context      : blockchain/cryptocurrency education and consulting, IT developement
// File         : html_footer.php
// Role         : script creating the HTML footer
// Author       : CoinMachine
// Creation     : 2023-06-11
// Last update  : 2021-06-12
// =====================================================================================================
function createHTMLfooter($fileName){
    if($fileName == '/index.php'){
        $strBootstrapPath = "config/bootstrap/js";
        $strScriptspath = "scripts/";
    } else {
        $strBootstrapPath = "../config/bootstrap/js/";
        $strScriptspath = "../scripts/";
    }
    $strJSscripts = $strScriptspath . "js/";
    $strBootstrapScript = $strBootstrapPath . "bootstrap.js";
?>

    </section>
<!-- --- --- --- Add JavaScript here --- --- --- -->
    <script src="<?php echo $strBootstrapScript;?>" crossorigin="anonymous"></script>    
    <script src="https://kit.fontawesome.com/91b2ef136e.js" crossorigin="anonymous"></script>
    <script src="" crossorigin="anonymous"></script>
</body>
<?php
}