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
		$language = $(this).data('language');
		$content = $(this).data('language-content');
		$target = '#description.' + $language + '-description';
		
		$($target).html($content);
		
		$($target).show();
	});
	
	$(".cornea").click(function()
	{
		showonly(".corneaimage");
		$language = $(this).data('language');
		$content = $(this).data('language-content');
		$target = '#description.' + $language + '-description';
		
		$($target).html($content);
		
		$($target).show();
	});
	
	$(".pupil").click(function()
	{
		showonly(".pupilimage");
		$language = $(this).data('language');
		$content = $(this).data('language-content');
		$target = '#description.' + $language + '-description';
		
		$($target).html($content);
		
		$($target).show();
	});
	
	$(".lens").click(function()
	{
		showonly(".lensimage");
		$language = $(this).data('language');
		$content = $(this).data('language-content');
		$target = '#description.' + $language + '-description';
		
		$($target).html($content);
		
		$($target).show();
	});
	
	$(".retina").click(function()
	{
		showonly(".retinaimage");
		$language = $(this).data('language');
		$content = $(this).data('language-content');
		$target = '#description.' + $language + '-description';
		
		$($target).html($content);
		
		$($target).show();
	});
	
	$(".nerve").click(function()
	{
		showonly(".nerveimage");
		$language = $(this).data('language');
		$content = $(this).data('language-content');
		$target = '#description.' + $language + '-description';
		
		$($target).html($content);
		
		$($target).show();
	});
	
	$(".macula").click(function()
	{
		showonly(".maculaimage");
		$language = $(this).data('language');
		$content = $(this).data('language-content');
		$target = '#description.' + $language + '-description';
		
		$($target).html($content);
		
		$($target).show();
	});
	
	$(".fovea").click(function()
	{
		showonly(".foveaimage");
		$language = $(this).data('language');
		$content = $(this).data('language-content');
		$target = '#description.' + $language + '-description';
		
		$($target).html($content);
		
		$($target).show();
	});
	
	$(".vitreous").click(function()
	{
		showonly(".vitreousimage");
		$language = $(this).data('language');
		$content = $(this).data('language-content');
		$target = '#description.' + $language + '-description';
		
		$($target).html($content);
		
		$($target).show();
	});
	
	$(".iris").click(function()
	{
		showonly(".irisimage");
		$language = $(this).data('language');
		$content = $(this).data('language-content');
		$target = '#description.' + $language + '-description';
		
		$($target).html($content);
		
		$($target).show();
	});
});