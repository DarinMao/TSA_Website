<!DOCTYPE html>
<html>
    <head>
		<!-- 
		*******************************
		*
		*  Made for Technology 
		*  Student Association
		*		
		*  By Ethan James, Ryan Kim,
		*  Darin Mao, Jason Kim,
		*  and Ben Miller.
		*
		*******************************
		-->
		<meta charset="utf-8">
		<title>Mission To Mars</title>	
<?php include("../../includes/head.php"); ?>
		<style type="text/css">
			div.panel {
				color: black;
			}
			div.vehicle-description {
				margin-top: 1%;
			}
			@media (min-width: 768px) {
				div.panel-body figure {
					width: 47.5%;
					float: left;
				}
				div.panel-body .vehicle-description {
					width: 47.5%;
					float: right;
				}
				div.vehicle-description {
					margin-top: 0px;
				}
			}
		</style>
				<script type="text/javascript">
		<!--
			$(function()
			{
				var data = <?php include("../../data/unmanned.json"); ?>;
				$.each(data, function(index, event)
				{
					var name = event.name;
					var description = event.description;
					var image = event.image;
					var caption = event.caption;
					var displayString = "<div class=\"panel panel-default\"><div class=\"panel-heading\">";
					displayString += name;
					displayString += "</div><div class=\"panel-body\"><figure><img class=\"img-responsive\" src=\"";
					displayString += image;
					displayString += "\" /><figcaption>";
					displayString += caption;
					displayString += "</figcaption></figure><div class=\"vehicle-description\">";
					displayString += description;
					displayString += "</div></div></div>";
					$(".vehicles").append(displayString);
				});
			});
		//-->
		</script>
    </head>
    <body>
<?php include("../../includes/header.php"); ?>
	<div class="container">
		<div class="page-header">
			<h2>
				Unmanned Space Vehicles
			</h2>
		</div>
		<p>
		Ever since the launch of Sputnik, unmanned space vehicles have constantly been evolving.  This page outlines some major changes that have happened over time.	
		</p>
		<div class="vehicles">
		</div>
	<p><h2>Cited Sources</h2></p>
	</div>
   <?php include("../../includes/footer.php"); ?> 
    </body>
</html>
