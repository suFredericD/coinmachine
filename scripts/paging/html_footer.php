<?php
// =====================================================================================================
// Project      : CoinMachine platform
// Context      : blockchain/cryptocurrency education and consulting, IT developement
// File         : html_footer.php
// Role         : script creating the HTML footer
// Author       : CoinMachine
// Creation     : 2023-06-11
// Last update  : 2023-06-28
// =====================================================================================================
function createHTMLfooter($fileName){
    if($fileName == '/index.php' || $fileName == '/coinmachine/index.php'){
        $strScriptspath = "scripts/";
        $strPagesPath = "pages/";
    } else {
        $strScriptspath = "../scripts/";
        $strPagesPath = "../pages/";
    }
    $strJSscripts = $strScriptspath . "js/";
    $strSpecialJSFile = $strJSscripts . substr(strrchr($fileName, "/"), 1, -4) . ".js";
    $strContactPage = $strPagesPath . "contacts.php";
?>
<!-- --- --- --- END OF CONTENT --- --- --- -->
    </section>
<!-- --- --- --- FOOTER --- --- --- -->
    <footer class="col-10">
        <div class="row">
            <p class="col-12">Powered by <span class="fa-brands fa-php"></span><span class="fa-brands fa-html5"><span class="fa-brands fa-css3"></span></span></p>
            <p class="col-12">With <span class="fa-regular fa-heart"></span> by <a href="<?php echo $strContactPage;?>" title="Contacter CoinMachine...">CoinMachine</a></p>
            <p class="col-12">&copy; 2023</p>
        </div>
    </footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<!-- Bootstrap's JavaScript plugins) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
<!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/91b2ef136e.js" crossorigin="anonymous"></script>
<!-- --- --- --- Attached JavaScript dedicated to unique utilisation page by page --- --- --- -->
<?php   if(file_exists($strSpecialJSFile)){ ?>
    <script src="<?php echo $strSpecialJSFile;?>" crossorigin="anonymous"></script>
<?php   }?>
<!-- --- --- --- Add JavaScript here --- --- --- -->

</body>
<?php
}