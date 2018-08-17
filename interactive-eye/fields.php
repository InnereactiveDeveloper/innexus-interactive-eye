<?php
/**
 * Innexus Module - Interactive Eye
 *
 * Innexus Interactive Eye
 *
 * @since   1.0.0
 * @package XEYE
 */

//Shortcode
function interactive_eye_func( $atts, $content = "" ) 
{
	
	//Blank Interactive Eye Output
	$interactive_eye_output = '';
	
	$interactive_eye_output .= '<!-- Interactive Eye -->';
		$interactive_eye_output .= '<div class="interactive-eye-wrapper">';
			$interactive_eye_output .= '<link rel="stylesheet" type="text/css" href="'. XEYE_URL . '/interactive-eye/css/style.css">';
			$interactive_eye_output .= '<p>';
				$interactive_eye_output .= '<script>';
				$interactive_eye_output .= 'jQuery(document).ready(function($)';
				$interactive_eye_output .= '{';
					$interactive_eye_output .= 'function showonly(element)';
					$interactive_eye_output .= '{';
						$interactive_eye_output .= '$(".eyelidimage").hide();';
						$interactive_eye_output .= '$(".corneaimage").hide();';
						$interactive_eye_output .= '$(".irisimage").hide();';
						$interactive_eye_output .= '$(".pupilimage").hide();';
						$interactive_eye_output .= '$(".lensimage").hide();';
						$interactive_eye_output .= '$(".foveaimage").hide();';
						$interactive_eye_output .= '$(".maculaimage").hide();';
						$interactive_eye_output .= '$(".retinaimage").hide();';
						$interactive_eye_output .= '$(".nerveimage").hide();';
						$interactive_eye_output .= '$(".vitreousimage").hide();';
						$interactive_eye_output .= '$(element).show();';
					$interactive_eye_output .= '}';
					
					$interactive_eye_output .= '$(".eyelid").click(function()';
					$interactive_eye_output .= '{';
						$interactive_eye_output .= 'showonly(".eyelidimage");';
						$interactive_eye_output .= 'document.getElementById("description").innerHTML = "Upper and lower muscular folds of skin that move to cover and uncover the eyeball.";';
						$interactive_eye_output .= '$("#description").show();';
					$interactive_eye_output .= '});';
					
					$interactive_eye_output .= '$(".cornea").click(function()';
					$interactive_eye_output .= '{';
						$interactive_eye_output .= 'showonly(".corneaimage");';
						$interactive_eye_output .= 'document.getElementById("description").innerHTML = "Transparent front layer of the eye that covers the iris and the pupil. Provides most of the eye\'s optical power.";';
						$interactive_eye_output .= '$("#description").show();';
					$interactive_eye_output .= '});';
					
					$interactive_eye_output .= '$(".pupil").click(function()';
					$interactive_eye_output .= '{';
						$interactive_eye_output .= 'showonly(".pupilimage");';
						$interactive_eye_output .= 'document.getElementById("description").innerHTML = "Dark, circular opening in the center of the iris which varies in size to regular the amount of light reaching the retina.";';
						$interactive_eye_output .= '$("#description").show();';
					$interactive_eye_output .= '});';
					
					$interactive_eye_output .= '$(".lens").click(function()';
					$interactive_eye_output .= '{';
						$interactive_eye_output .= 'showonly(".lensimage");';
						$interactive_eye_output .= 'document.getElementById("description").innerHTML = "Transparent, biconvex tissue that helps bring rays of light to focus on the retina.";';
						$interactive_eye_output .= '$("#description").show();';
					$interactive_eye_output .= '});';
					
					$interactive_eye_output .= '$(".retina").click(function()';
					$interactive_eye_output .= '{';
						$interactive_eye_output .= 'showonly(".retinaimage");';
						$interactive_eye_output .= 'document.getElementById("description").innerHTML = "Cell layers, sensitive to light, receive images produced by the lens and triggers nerve impulses that pass via the optic nerve to the brain.";';
						$interactive_eye_output .= '$("#description").show();';
					$interactive_eye_output .= '});';
					
					$interactive_eye_output .= '$(".nerve").click(function()';
					$interactive_eye_output .= '{';
						$interactive_eye_output .= 'showonly(".nerveimage");';
						$interactive_eye_output .= 'document.getElementById("description").innerHTML = "Pair of cranial nerves, consisting of sensory fibers that transmit sight impulses to the brain.";';
						$interactive_eye_output .= '$("#description").show();';
					$interactive_eye_output .= '});';
					
					$interactive_eye_output .= '$(".macula").click(function()';
					$interactive_eye_output .= '{';
						$interactive_eye_output .= 'showonly(".maculaimage");';
						$interactive_eye_output .= 'document.getElementById("description").innerHTML = "Irregularly oval, yellow-pigmented area on the central retina that contains color-sensitive rods and the region sharpest vision acuity.";';
						$interactive_eye_output .= '$("#description").show();';
					$interactive_eye_output .= '});';
					
					$interactive_eye_output .= '$(".fovea").click(function()';
					$interactive_eye_output .= '{';
						$interactive_eye_output .= 'showonly(".foveaimage");';
						$interactive_eye_output .= 'document.getElementById("description").innerHTML = "Small depression in the retina where visual acuity is highest.";';
						$interactive_eye_output .= '$("#description").show();';
					$interactive_eye_output .= '});';
					
					$interactive_eye_output .= '$(".vitreous").click(function()';
					$interactive_eye_output .= '{';
						$interactive_eye_output .= 'showonly(".vitreousimage");';
						$interactive_eye_output .= 'document.getElementById("description").innerHTML = "Transparent, gelatinous mass which fills two-thirds of the eye between the lens and the retina.";';
						$interactive_eye_output .= '$("#description").show();';
					$interactive_eye_output .= '});';
					
					$interactive_eye_output .= '$(".iris").click(function()';
					$interactive_eye_output .= '{';
						$interactive_eye_output .= 'showonly(".irisimage");';
						$interactive_eye_output .= 'document.getElementById("description").innerHTML = "Transparent, gelatinous mass which fills two-thirds of the eye between the lens and the retina.";';
						$interactive_eye_output .= '$("#description").show();';
					$interactive_eye_output .= '});';
				$interactive_eye_output .= '});';
				$interactive_eye_output .= '</script>';
			$interactive_eye_output .= '</p>';
			
			$interactive_eye_output .= '<div id="contain23">';
				$interactive_eye_output .= '<!-- Eye Structure -->';
				$interactive_eye_output .= '<div id="maineye">';
					$interactive_eye_output .= '<img class="eyeball" src="'. XEYE_URL . '/interactive-eye/eye-resources/INXeye.png" alt="Human eyeball" />';
					$interactive_eye_output .= '<img class="corneaimage" src="'. XEYE_URL . '/interactive-eye/eye-resources/cornea.png" alt="Human eyeball cornea" />';
					$interactive_eye_output .= '<img class="eyelidimage" src="'. XEYE_URL . '/interactive-eye/eye-resources/eyelid1.png" alt="Human eyeball eyelid" />';
					$interactive_eye_output .= '<img class="irisimage" src="'. XEYE_URL . '/interactive-eye/eye-resources/iris.png" alt="Human eyeball iris" />';
					$interactive_eye_output .= '<img class="pupilimage" src="'. XEYE_URL . '/interactive-eye/eye-resources/pupil.png" alt="Human eyeball pupil" />';
					$interactive_eye_output .= '<img class="lensimage" src="'. XEYE_URL . '/interactive-eye/eye-resources/lens.png" alt="Human eyeball lens" />';
					$interactive_eye_output .= '<img class="retinaimage" src="'. XEYE_URL . '/interactive-eye/eye-resources/retina.png" alt="Human eyeball retina" />';
					$interactive_eye_output .= '<img class="nerveimage" src="'. XEYE_URL . '/interactive-eye/eye-resources/opticnerve.png" alt="Human eyeball optic nerve" />';
					$interactive_eye_output .= '<img class="maculaimage" src="'. XEYE_URL . '/interactive-eye/eye-resources/macula.png" alt="Human eyeball macula" />';
					$interactive_eye_output .= '<img class="foveaimage" src="'. XEYE_URL . '/interactive-eye/eye-resources/fovea.png" alt="Human eyeball fovea" />';
					$interactive_eye_output .= '<img class="vitreousimage" src="'. XEYE_URL . '/interactive-eye/eye-resources/vitreous.png" alt="Human eyeball vitreous" />';
				$interactive_eye_output .= '</div>';
				
				$interactive_eye_output .= '<br>';
				
				$interactive_eye_output .= '<!-- Toggles -->';
				$interactive_eye_output .= '<button class="eyelid"><span class="name">Eyelid</span></button>';
				$interactive_eye_output .= '<button  class="cornea"><span class="name">Cornea</span></button>';
				$interactive_eye_output .= '<button class="iris"><span class="name">Iris</span></button>';
				$interactive_eye_output .= '<button class="pupil"><span class="name">Pupil</span></button>';
				$interactive_eye_output .= '<button class="lens"><span class="name">Lens</span></button>';
				$interactive_eye_output .= '<button class="fovea"><span class="name">Fovea</span></button>';
				$interactive_eye_output .= '<button class="macula"><span class="name">Macula</span></button>';
				$interactive_eye_output .= '<button class="retina"><span class="name">Retina</span></button>';
				$interactive_eye_output .= '<button class="nerve"><span class="name">Optic Nerve</span></button>';
				$interactive_eye_output .= '<button class="vitreous"><span class="name">Vitreous</span></button>';
				
				$interactive_eye_output .= '<!-- Description -->';
				$interactive_eye_output .= '<p>';
					$interactive_eye_output .= '<span class="description" id="description" style="display: block;">';
					$interactive_eye_output .= '</span>';
				$interactive_eye_output .= '</p>';
			$interactive_eye_output .= '</div>';
		$interactive_eye_output .= '</div>';
	
	//Return the assembled Interactive Eye
	return $interactive_eye_output;
}

add_shortcode( 'interactive-eye', 'interactive_eye_func' );