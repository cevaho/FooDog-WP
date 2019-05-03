<?php /* Template Name: searchor */ ?>
<div id="searchor">
				<div id="modal">
					<div id="relativer">
					<p>What are you searching for?</p>

					<?php get_search_form();?>

					<button id="closer" class="btn btn-light">close X</button>
					</div>
				</div>

</div><!-- container -->
<style>
	#searchor{position:relative;}

	#modal{
		position:absolute;top:-500px;opacity:0;z-index:10;width:300px;margin-left:50%;left:-150px;background-color:white;
		padding:15px;
    		-webkit-transition: opacity 1.2s;
    		-moz-transition: opacity 1.2s;
    		-ms-transition: opacity 1.2s;
    		-o-transition: opacity 1.2s;
    		transition: opacity 1.2s;
        }

	#modal.shower{
		top:0px;opacity:1;
		-webkit-box-shadow: -1px 29px 61px -13px rgba(191,185,191,1);
		-moz-box-shadow: -1px 29px 61px -13px rgba(191,185,191,1);
		box-shadow: -1px 29px 61px -13px rgba(191,185,191,1);	
	}

	#relativer{
		position:relative;padding-top:35px;
	}
	#relativer #closer{
		position:absolute;right:0px;top:-4px;font-size:10px;
	}
</style>
<script type="text/javascript">

	(function() {
		var modaler = document.getElementById("modal");

		document.getElementById("ruby-banner-search").addEventListener("click", function() {
      			console.log('open');
			modaler.classList.add("shower");
		});

		document.getElementById("closer").addEventListener("click", function() {
		  	console.log('close');
			modaler.classList.remove("shower");
		});

	})();

</script>
