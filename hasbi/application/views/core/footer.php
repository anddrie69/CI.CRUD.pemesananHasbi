		<script type="text/javascript">
	            $("#file_post_img").change(function(e){
	                var file_gmb = $("#file_post_img").prop('files')[0];
	                var myfrm = new FormData();
	                myfrm.append('foto',file_gmb);
	                $.ajax({
	                    beforeSend:function(){
	                        $("#loader").show();
	                    },
	                    url:"<?php echo base_url(); ?>index.php/pesanan/do_upload",
	                    dataType:'json',
	                    cache:false,
	                    contentType: false,
	                    processData: false,
	                    data:myfrm,
	                    type:'post',
	                    success:function(response){

	                        $("#foto").append("<img style='width:50%' src='<?php echo base_url(); ?>statics/images/"+response.imgname+"'>");
	                        $("#fotoname").val(response.imgname);
	                    },
	                    complete:function(data){
	                        $("#loader").hide();
	                        $("#fotoEdit").hide();
	                        
	                    }
	                });
	            });
	        </script>	    
	</body>
</html>
