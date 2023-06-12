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
        $strScriptspath = "scripts/";
    } else {
        $strScriptspath = "../scripts/";
    }
    $strJSscripts = $strScriptspath . "js/";
?>
<!-- --- --- --- END OF CONTENT --- --- --- -->
    </section>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Bootstrap's JavaScript plugins) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
<!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/91b2ef136e.js" crossorigin="anonymous"></script>
<!-- --- --- --- Add JavaScript here --- --- --- -->
    <script src="" crossorigin="anonymous"></script>
</body>
<?php
}