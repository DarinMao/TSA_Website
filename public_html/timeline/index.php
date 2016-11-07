<!DOCTYPE html>
<html>
    <head>
		<!-- 
		*******************************
		*
		*  Made for Technology 
		*  Student Association
		*
		*
		*  By Ethan James, Ryan Kim,
		*  Darin Mao, Sharad Khanna,
		*  Jason Kim, and Ben Miller.
		*
		*******************************
		-->
		<meta charset="utf-8">
		<title>Mission To Mars</title>	
		<?php include("../../includes/head.php"); ?>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
		<style type="text/css">
			.container {
				background-color:black;
				color:white;
			}
			.timeline {
				list-style: none;
				padding: 20px 0 20px;
				position: relative;
			}
			.timeline:before {
				top: 0;
				bottom: 0;
				position: absolute;
				content: " ";
				width: 3px;
				background-color: white;
				left: 50%;
				margin-left: -1.5px;
			}
			.timeline > li {
				margin-bottom: 20px;
				position: relative;
			}
			.timeline > li:before,
			.timeline > li:after {
				content: " ";
				display: table;
			}

			.timeline > li:after {
				clear: both;
			}
			.timeline > li > .timeline-panel {
				width: 46%;
				float: left;
				border-radius: 2px;
				padding: 20px;
				position: relative;
				background-color:white;
				color:black;
			}
			.timeline > li > .timeline-panel:before {
				position: absolute;
				top: 26px;
				right: -15px;
				display: inline-block;
				border-top: 15px solid transparent;
				border-bottom: 15px solid transparent;
				content: " ";
			}

			.timeline > li > .timeline-panel:after {
				position: absolute;
				top: 27px;
				right: -14px;
				display: inline-block;
				border-top: 14px solid transparent;
				border-bottom: 14px solid transparent;
				border-left: 14px solid #fff;
				border-right: 0 solid #fff;
				content: " ";
			}
			.timeline > li > .timeline-badge {
				color: white;
				width: 50px;
				height: 50px;
				line-height: 50px;
				font-size: 1.4em;
				text-align: center;
				position: absolute;
				top: 16px;
				left: 50%;
				margin-left: -25px;
				background-color: #999999;
				z-index: 100;
				border-top-right-radius: 50%;
				border-top-left-radius: 50%;
				border-bottom-right-radius: 50%;
				border-bottom-left-radius: 50%;
			}
			.timeline > li.inverted > .timeline-panel {
				float: right;
			}
			.timeline > li.inverted > .timeline-panel:before {
				border-left-width: 0;
				border-right-width: 15px;
				left: -15px;
				right: auto;
			}
			.timeline > li.inverted > .timeline-panel:after {
				border-left-width: 0;
				border-right-width: 14px;
				left: -14px;
				right: auto;
			}
			.timeline-title {
				margin-top: 0;
			}
			@media (max-width: 767px) {
				ul.timeline:before {
					left: 40px;
				}
				ul.timeline > li > .timeline-panel {
					width: calc(100% - 90px);
				}
				ul.timeline > li > .timeline-badge {
					left: 15px;
					margin-left: 0;
					top: 16px;
				}
				ul.timeline > li > .timeline-panel {
					float: right;
				}
				ul.timeline > li > .timeline-panel:before {
					border-left-width: 0;
					border-right-width: 15px;
					left: -15px;
					right: auto;
				}

				ul.timeline > li > .timeline-panel:after {
					border-left-width: 0;
					border-right-width: 14px;
					left: -14px;
					right: auto;
				}
			}
		</style>
		<script type="text/javascript">
		<!--
			var dateNames = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
			var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
			$(function()
			{
				$("div#timeline-line")
				$.get("data.json", function(data) {
					$.each(data, function(index, event)
					{
						var name = event.name;
						var date = new Date(event.date);
						var dateString = dateNames[date.getDay()] + ", " + monthNames[date.getMonth()] + " " + date.getDate() + ", " + date.getFullYear();
						var description = event.description;
						var displayString = "<li class=\"timeline-event";
						if (index % 2 == 1)
						{
							displayString += " inverted";
						}
						displayString += "\"><div class=\"timeline-badge\"><i class=\"fa fa-rocket\" aria-hidden=\"true\"></i></div><div class=\"timeline-panel\"><div class=\"timeline-heading\"><h4 class=\"timeline-title\">"
						displayString += name;
						displayString += "</h4><p><small class=\"text-muted\"><i class=\"glyphicon glyphicon-time\" aria-hidden=\"true\"></i> ";
						displayString += dateString;
						displayString += "</small></div><div class=\"timeline-body\"><p>";
						displayString += description;
						displayString += "</div></div>"
						$(".timeline").append(displayString);
					});
				});
			});
		//-->
		</script>
    </head>
    <body>
	<div id="container">
	   <?php include("../../includes/header.php"); ?>
	   <main>
		   <article>
			<h2>
				The Privatization of the Space Program and the United States's Space Program
			</h2>
			<ul class="timeline">
			</ul>
		   </article>
	   </main>
	   <?php include("../../includes/footer.php"); ?>
	</div>
        
    </body>
</html>