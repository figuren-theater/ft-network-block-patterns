<?php
/**
 * Typicall theater FAQ example using yoasts FAQ-block
 */
return array(
	'title'      => __( 'FAQ', 'ft-network-block-patterns' ),
	'description'   => __( 'Frequently answered questions for theaters.', 'ft-network-block-patterns' ),
	'keywords'      => array( 
		'yoast-faq',
#		__( 'Duration', 'ft-network-block-patterns' ),
#		__( 'Premiere', 'ft-network-block-patterns' ),
#		__( 'Location', 'ft-network-block-patterns' ),
	),
	'categories' => array( 'text', 'columns','theatrebase' ),
	'content'    => '<!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"12rem","textTransform":"lowercase"},"spacing":{"margin":{"left":"10rem"}}},"textColor":"primary"} -->
<h2 class="has-text-align-center has-primary-color has-text-color" style="margin-left:10rem;font-size:12rem;text-transform:lowercase">FAQ</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Häufig gestellte Fragen</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:yoast/faq-block {"questions":[{"id":"faq-question-1658591036351","question":["Wie kommt man mit ÖPNV zum Theater?"],"answer":["Ganz einfach: ..."],"jsonQuestion":"Wie kommt man mit ÖPNV zum Theater?","jsonAnswer":"Ganz einfach: ..."},{"id":"faq-question-1658590445203","question":["Darf ich Fotos während der Vorstellung machen?"],"answer":["Das ist nicht gestattet, es gibt aber nach jeder Vorstellung eine Gelegenheit."],"jsonQuestion":"Darf ich Fotos während der Vorstellung machen?","jsonAnswer":"Das ist nicht gestattet, es gibt aber nach jeder Vorstellung eine Gelegenheit."},{"id":"faq-question-1658590333737","question":["Darf ich in der ersten Reihe bei meinem Kind sitzen?"],"answer":["Nein, leider nicht. Die erste Reihe ist und bleibt nur den Kindern vorbehalten."],"jsonQuestion":"Darf ich in der ersten Reihe bei meinem Kind sitzen?","jsonAnswer":"Nein, leider nicht. Die erste Reihe ist und bleibt nur den Kindern vorbehalten."},{"id":"faq-question-1658590598395","question":["Wie ist das aktuelle Hygienekonzept?"],"answer":["Sehr gut und ",{"type":"a","props":{"href":"#","children":[{"type":"strong","props":{"children":["hier nachzulesen"]}}]}},"."],"jsonQuestion":"Wie ist das aktuelle Hygienekonzept?","jsonAnswer":"Sehr gut und \u003ca href=\u0022#\u0022\u003e\u003cstrong\u003ehier nachzulesen\u003c/strong\u003e\u003c/a\u003e."},{"id":"faq-question-1658591107454","question":["Wann öffnet die Abendkasse?"],"answer":["Immer 2 Stunden vor Beginn der Vorstellung."],"jsonQuestion":"Wann öffnet die Abendkasse?","jsonAnswer":"Immer 2 Stunden vor Beginn der Vorstellung."}]} -->
<div class="schema-faq wp-block-yoast-faq-block"><div class="schema-faq-section" id="faq-question-1658591036351"><strong class="schema-faq-question">Wie kommt man mit ÖPNV zum Theater?</strong> <p class="schema-faq-answer">Ganz einfach: ...</p> </div> <div class="schema-faq-section" id="faq-question-1658590445203"><strong class="schema-faq-question">Darf ich Fotos während der Vorstellung machen?</strong> <p class="schema-faq-answer">Das ist nicht gestattet, es gibt aber nach jeder Vorstellung eine Gelegenheit.</p> </div> <div class="schema-faq-section" id="faq-question-1658590333737"><strong class="schema-faq-question">Darf ich in der ersten Reihe bei meinem Kind sitzen?</strong> <p class="schema-faq-answer">Nein, leider nicht. Die erste Reihe ist und bleibt nur den Kindern vorbehalten.</p> </div> <div class="schema-faq-section" id="faq-question-1658590598395"><strong class="schema-faq-question">Wie ist das aktuelle Hygienekonzept?</strong> <p class="schema-faq-answer">Sehr gut und <a href="#"><strong>hier nachzulesen</strong></a>.</p> </div> <div class="schema-faq-section" id="faq-question-1658591107454"><strong class="schema-faq-question">Wann öffnet die Abendkasse?</strong> <p class="schema-faq-answer">Immer 2 Stunden vor Beginn der Vorstellung.</p> </div> </div>
<!-- /wp:yoast/faq-block --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->',
);
