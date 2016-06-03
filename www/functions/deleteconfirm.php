<script type="text/javascript">
						var link;
						var element;
						function openPopUp(url)
						{
							link = url;
							element = document.getElementById("background");
							element.style.display = "block";
							element = document.getElementById("popup");
							element.style.display = "block";
						  
						}

						function closePopUp()
						{
							element = document.getElementById("popup");
							element.style.display = "none";
							element = document.getElementById("background");
							element.style.display = "none";
						}

						function leave() {
						  var myWindow = window.open("", "_self");
						  myWindow.document.write("");
						  setTimeout (function() {myWindow.close();},1);
						}

					</script>