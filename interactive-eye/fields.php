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
function interactive_eye_func( $atts, $content = "") 
{
	// normalize attribute keys, lowercase
    $atts = array_change_key_case((array)$atts, CASE_LOWER);
 
    // override default attributes with user attributes
    $a = shortcode_atts(
    [
		'language' => 'english',
	], $atts);
	
	//Blank Interactive Eye Output
	$interactive_eye_output = '';
	
	$interactive_eye_output .= '<!-- Interactive Eye -->';
		$interactive_eye_output .= '<div id="interactive-eye-wrapper" class="interactive-eye-wrapper ' . $a["language"] . '-language">';
			
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