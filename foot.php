</div>
	<script>
		$(document).ready(function(){
			$("#DesktopShow").click(function(){
		    	$("#mobilehide,#fbxhide").hide('fast');
		        $("#featurehide,#ohidden,#specshide").show('fast');
		    });
		    $("#MobileShow").click(function(){
		        $("#ohidden,#mobilehide,#specshide").show('fast');
		        $("#featurehide,#hidden,#fbxhide").hide('fast');
		    });
		    $("#FBXShow").click(function(){
		        $("#featurehide,#ohidden,#mobilehide,#specshide").hide('fast');
		        $("#fbxhide").show('fast');
		    });
		    $(window).scroll(function () {
		        if ($(this).scrollTop() > 100) {
		            $('.scrollup').fadeIn();
		        } else {
		            $('.scrollup').fadeOut();
		        }
		    });
		    $('.scrollup').click(function () {
		        $("html, body").animate({
		            scrollTop: 0
		        }, 600);
		        return false;
		    });
		});
	</script>
</body>
</html>