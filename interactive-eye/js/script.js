//Innexus Interactive Eye Scripts
jQuery(document).ready(function($)
{
	function showonly(element)
	{
		$(".eyelidimage").hide();
		$(".corneaimage").hide();
		$(".irisimage").hide();
		$(".pupilimage").hide();
		$(".lensimage").hide();
		$(".foveaimage").hide();
		$(".maculaimage").hide();
		$(".retinaimage").hide();
		$(".nerveimage").hide();
		$(".vitreousimage").hide();
		$(element).show();
	}
	
	$(".eyelid").click(function()
	{
		showonly(".eyelidimage");
		document.getElementById("description").innerHTML = "Upper and lower muscular folds of skin that move to cover and uncover the eyeball.";
		$("#description").show();
	});
	
	$(".cornea").click(function()
	{
		showonly(".corneaimage");
		document.getElementById("description").innerHTML = "Transparent front layer of the eye that covers the iris and the pupil. Provides most of the eye\'s optical power.";
		$("#description").show();
	});
	
	$(".pupil").click(function()
	{
		showonly(".pupilimage");
		document.getElementById("description").innerHTML = "Dark, circular opening in the center of the iris which varies in size to regular the amount of light reaching the retina.";
		$("#description").show();
	});
	
	$(".lens").click(function()
	{
		showonly(".lensimage");
		document.getElementById("description").innerHTML = "Transparent, biconvex tissue that helps bring rays of light to focus on the retina.";
		$("#description").show();
	});
	
	$(".retina").click(function()
	{
		showonly(".retinaimage");
		document.getElementById("description").innerHTML = "Cell layers, sensitive to light, receive images produced by the lens and triggers nerve impulses that pass via the optic nerve to the brain.";
		$("#description").show();
	});
	
	$(".nerve").click(function()
	{
		showonly(".nerveimage");
		document.getElementById("description").innerHTML = "Pair of cranial nerves, consisting of sensory fibers that transmit sight impulses to the brain.";
		$("#description").show();
	});
	
	$(".macula").click(function()
	{
		showonly(".maculaimage");
		document.getElementById("description").innerHTML = "Irregularly oval, yellow-pigmented area on the central retina that contains color-sensitive rods and the region sharpest vision acuity.";
		$("#description").show();
	});
	
	$(".fovea").click(function()
	{
		showonly(".foveaimage");
		document.getElementById("description").innerHTML = "Small depression in the retina where visual acuity is highest.";
		$("#description").show();
	});
	
	$(".vitreous").click(function()
	{
		showonly(".vitreousimage");
		document.getElementById("description").innerHTML = "Transparent, gelatinous mass which fills two-thirds of the eye between the lens and the retina.";
		$("#description").show();
	});
	
	$(".iris").click(function()
	{
		showonly(".irisimage");
		document.getElementById("description").innerHTML = "Flat, circular membrane forming the colored portion of the eye, with an adjustable circular opening, the pupil, in the center.";
		$("#description").show();
	});
});