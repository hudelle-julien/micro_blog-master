<?php
/* Smarty version 3.1.30, created on 2018-01-19 07:39:02
  from "P:\Data\hudellej\wamp64\www\micro_blog-master\includes\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a61a09623d758_65026969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8bc33a72f0b84500e519bdc08c734df52a60b4a' => 
    array (
      0 => 'P:\\Data\\hudellej\\wamp64\\www\\micro_blog-master\\includes\\footer.tpl',
      1 => 1511379009,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a61a09623d758_65026969 (Smarty_Internal_Template $_smarty_tpl) {
?>

</div>
</section>


<!-- Footer -->
<footer class="text-center">
    <div class="footer-above">
        <div class="container">
            <div class="row">
                <div class="footer-col col-md-4">
                    <h3>Location</h3>
                    <p>3481 Melrose Place
                        <br>Beverly Hills, CA 90210</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <a class="icone facebook" href="http://www.facebook.com" target="_blank" ></a>
                        <a class="icone twitter" href="http://www.twitter.com" target="_blank" ></a>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>A propos</h3>
                        <p>Micro blog est une application PHP basée sur le thème <a href="https://startbootstrap.com/template-overviews/freelancer/">Freelancer</a>.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Your Website 2016
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- jQuery -->
    <?php echo '<script'; ?>
 src="vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>

    <!-- Bootstrap Core JavaScript -->
    <?php echo '<script'; ?>
 src="vendor/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>

    <!-- Plugin JavaScript -->
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"><?php echo '</script'; ?>
>

    <!-- Theme JavaScript -->
    <?php echo '<script'; ?>
 src="js/freelancer.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        
        
$(function(){
  $('.voteup').click(function(){
      var u=this.dataset.u;
     $.get('getVote.php',
    {
      id:this.dataset.id
    },
      function(data){
        document.getElementById("spanVote"+u).innerHTML=data;

      }
      );
  });
  $('#message').keyup(function(){
     $('#apercu').removeClass("hidden");
    
     var message = document.getElementById('message').value;
    $.get('apercu.php',
    {
      message:message
    },
      function(data){
        
        document.getElementById("apercuexpreg").innerHTML = data;
       
      }
      );
  });

});
  
<?php echo '</script'; ?>
>
   
</body>

</html>
<?php }
}
