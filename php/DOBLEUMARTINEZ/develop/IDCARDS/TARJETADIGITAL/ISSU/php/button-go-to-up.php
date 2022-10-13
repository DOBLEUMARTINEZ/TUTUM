<style type="text/css">
	.ir-arriba{
  display:none;
  background-repeat:no-repeat;
  font-size:40px;
  color: #f28e36;
  cursor:pointer;
  position:fixed;
  bottom:10%;
  right:3%;
  z-index:2;
}
</style>
<a class="ir-arriba"  javascript:void(0) title="Volver arriba">
   <i style="color: #f28e36;" class="fas fa-chevron-up"></i>
</a>

<script type="text/javascript">
	  $(document).ready(function(){ //Hacia arriba
  irArriba();
});

function irArriba(){
  $('.ir-arriba').click(function(){ $('body,html').animate({ scrollTop:'0px' },1000); });
  $(window).scroll(function(){
    if($(this).scrollTop() > 0){ $('.ir-arriba').slideDown(600); }else{ $('.ir-arriba').slideUp(600); }
  });
  $('.ir-abajo').click(function(){ $('body,html').animate({ scrollTop:'1000px' },1000); });
}
</script>