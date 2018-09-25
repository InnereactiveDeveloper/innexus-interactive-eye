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
	
	$language = $a["language"];
	
	//Blank Interactive Eye Output
	$interactive_eye_output = '';
	
	$interactive_eye_output .= '<!-- Interactive Eye -->';
		$interactive_eye_output .= '<div id="interactive-eye-wrapper" class="interactive-eye-wrapper ' . $language . '-language">';
			
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
				
				//Spanish toggles
				if($language == 'spanish')
				{
					$interactive_eye_output .= '<button class="eyelid" data-language="spanish" data-language-content="Pliegues musculares superiores e inferiores de la piel que se mueven para cubrir y descubrir el globo ocular."><span class="name">Párpado</span></button>';
					$interactive_eye_output .= '<button class="cornea" data-language="spanish" data-language-content="Capa frontal transparente del ojo que cubre el iris y la pupila. Proporciona la mayor parte de la potencia óptica del ojo."><span class="name">Córnea</span></button>';
					$interactive_eye_output .= '<button class="iris" data-language="spanish" data-language-content="Estructura delgada y circular en el ojo, responsable de controlar el diámetro y el tamaño de la pupila y, por lo tanto, la cantidad de luz que llega a la retina."><span class="name">Iris</span></button>';
					$interactive_eye_output .= '<button class="pupil" data-language="spanish" data-language-content="Abertura oscura y circular en el centro del iris que varía en tamaño a la cantidad regular de luz que llega a la retina."><span class="name">Pupila</span></button>';
					$interactive_eye_output .= '<button class="lens" data-language="spanish" data-language-content="Tejido biconvexo transparente que ayuda a que los rayos de luz se centren en la retina."><span class="name">Lente</span></button>';
					$interactive_eye_output .= '<button class="fovea" data-language="spanish" data-language-content="Pequeña depresión en la retina donde la agudeza visual es máxima."><span class="name">Fovea</span></button>';
					$interactive_eye_output .= '<button class="macula" data-language="spanish" data-language-content="Área irregularmente ovalada, pigmentada de amarillo en la retina central que contiene varillas sensibles al color y la agudeza visual más nítida de la región."><span class="name">Màcula</span></button>';
					$interactive_eye_output .= '<button class="retina" data-language="spanish" data-language-content="Las capas celulares, sensibles a la luz, reciben imágenes producidas por la lente y activan impulsos nerviosos que pasan a través del nervio óptico hacia el cerebro."><span class="name">Retina</span></button>';
					$interactive_eye_output .= '<button class="nerve" data-language="spanish" data-language-content="Par de nervios craneales, que consta de fibras sensoriales que transmiten impulsos visuales al cerebro."><span class="name">Nervio óptico</span></button>';
					$interactive_eye_output .= '<button class="vitreous" data-language="spanish" data-language-content="Masa transparente y gelatinosa que llena dos tercios del ojo entre la lente y la retina."><span class="name">Vítreo</span></button>';
				}
				
				//English Toggles
				if($language == 'english')
				{
					$interactive_eye_output .= '<button class="eyelid" data-language-content="Upper and lower muscular folds of skin that move to cover and uncover the eyeball."><span class="name">Eyelid</span></button>';
					$interactive_eye_output .= '<button class="cornea" data-language="english" data-language-content="Transparent front layer of the eye that covers the iris and the pupil. Provides most of the eye\'s optical power."><span class="name">Cornea</span></button>';
					$interactive_eye_output .= '<button class="iris" data-language="english" data-language-content="Flat, circular membrane forming the colored portion of the eye, with an adjustable circular opening, the pupil, in the center."><span class="name">Iris</span></button>';
					$interactive_eye_output .= '<button class="pupil" data-language="english" data-language-content="Dark, circular opening in the center of the iris which varies in size to regular the amount of light reaching the retina."><span class="name">Pupil</span></button>';
					$interactive_eye_output .= '<button class="lens" data-language="english" data-language-content="Transparent, biconvex tissue that helps bring rays of light to focus on the retina."><span class="name">Lens</span></button>';
					$interactive_eye_output .= '<button class="fovea" data-language="english" data-language-content="Small depression in the retina where visual acuity is highest."><span class="name">Fovea</span></button>';
					$interactive_eye_output .= '<button class="macula" data-language="english" data-language-content="Irregularly oval, yellow-pigmented area on the central retina that contains color-sensitive rods and the region sharpest vision acuity."><span class="name">Macula</span></button>';
					$interactive_eye_output .= '<button class="retina" data-language="english" data-language-content="Cell layers, sensitive to light, receive images produced by the lens and triggers nerve impulses that pass via the optic nerve to the brain."><span class="name">Retina</span></button>';
					$interactive_eye_output .= '<button class="nerve" data-language="english" data-language-content="Pair of cranial nerves, consisting of sensory fibers that transmit sight impulses to the brain."><span class="name">Optic Nerve</span></button>';
					$interactive_eye_output .= '<button class="vitreous" data-language="english" data-language-content="Transparent, gelatinous mass which fills two-thirds of the eye between the lens and the retina."><span class="name">Vitreous</span></button>';
				}
				
				
				$interactive_eye_output .= '<!-- Description -->';
				$interactive_eye_output .= '<p>';
					$interactive_eye_output .= '<span class="description ' . $language . '-description" id="description" style="display: block;">';
					$interactive_eye_output .= '</span>';
				$interactive_eye_output .= '</p>';
			$interactive_eye_output .= '</div>';
		$interactive_eye_output .= '</div>';
	
	//Return the assembled Interactive Eye
	return $interactive_eye_output;
}

add_shortcode( 'interactive-eye', 'interactive_eye_func' );