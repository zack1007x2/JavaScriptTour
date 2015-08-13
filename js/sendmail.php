
<script>
$(".message").toggle();
$(".message").toggle().hide("slow").show("slow"); 
</script>
<script>
$(".alert").addClass('alert-block alert-error').removeClass('alert-success');
 </script>Looks like you are missing some info. Try again.
 <li>Entering your name?
 </li><script>jQuery("#name").addClass("error");
 </script>
 <li>Entering your email address?
 </li>
 <script>jQuery("#email").addClass("error");
 </script><li>Entering a message?
 </li>
 <script>jQuery("#message").addClass("error");
 </script>