<?php
/*
Template Name: Atlas Quiz
*/
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>

  <form action="<?php echo bloginfo('url') ?>/wp-content/themes/atlas/quiz-logic.php" method="POST" id="validate_form" onSubmit="return validate_form();">
			
			<ol>
				<li>
					<span id="question">___ is your name? My name is Marie.</span>
					<input type="text" name="q1" id="q1" />
				</li>
				
				<li>
					<span id="question">___ are you from? I'm from Paris, France.</span>
					<input type="text" name="q2" id="q2" />
				</li>
				
				<li>
					<span id="question">___ old are you? I am 20 years old.</span>
					<input type="text" name="q3" id="q3" />
				</li>
				
				<li>
					<span id="question">___ ___ brothers and sisters have you got? I've got one.</span>
					<input type="text" name="q4" id="q4" />
				</li>
				
				<li>
					<span id="question">What is ___ name? Pierre.</span>
					<input type="text" name="q5" id="q5" />
				</li>
				
				<li>
					<span id="question">Dave: ___ you like football</span>
					<p>
						<input type="radio" name="q6" value="1" id="q6_1" /><label for="q6_1">Are</label>
						<input type="radio" name="q6" value="2" id="q6_2" /><label for="q6_2">Do</label>
						<input type="radio" name="q6" value="3" id="q6_3" /><label for="q6_3">Does</label>
						<input type="radio" name="q6" value="4" id="q6_4" /><label for="q6_4">Is</label>
					</p>
				</li>
				
				<li>
					<span id="question">My father ___ in an office. He works in a factory.</span>
					<p>
						<input type="radio" name="q7" value="1" id="q7_1" /><label for="q7_1">no work</label>
						<input type="radio" name="q7" value="2" id="q7_2" /><label for="q7_2">no works</label>
						<input type="radio" name="q7" value="3" id="q7_3" /><label for="q7_3">don't work</label>
						<input type="radio" name="q7" value="4" id="q7_4" /><label for="q7_4">doesn't work</label>
					</p>
				</li>
				
				<li>
					<span id="question">I ___ to the cinema yesterday. I played computer games instead.</span>
					<p>
						<input type="radio" name="q8" value="1" id="q8_1" /><label for="q8_1">didn't go</label>
						<input type="radio" name="q8" value="2" id="q8_2" /><label for="q8_2">don't go</label>
						<input type="radio" name="q8" value="3" id="q8_3" /><label for="q8_3">not go</label>
						<input type="radio" name="q8" value="4" id="q8_4" /><label for="q8_4">no go</label>
					</p>
				</li>
				
				<li>
					<span id="question">Last week I ___ to the beach with my friend Sandra.</span>
					<p>
						<input type="radio" name="q9" value="1" id="q9_1" /><label for="q9_1">were</label>
						<input type="radio" name="q9" value="2" id="q9_2" /><label for="q9_2">goes</label>
						<input type="radio" name="q9" value="3" id="q9_3" /><label for="q9_3">went</label>
						<input type="radio" name="q9" value="4" id="q9_4" /><label for="q9_4">was</label>
					</p>
				</li>
				
				<li>
					<span id="question">I haven't got ___ money. Could you pay for dinner?</span>
					<p>
						<input type="radio" name="q10" value="1" id="q10_1" /><label for="q10_1">any</label>
						<input type="radio" name="q10" value="2" id="q10_2" /><label for="q10_2">a</label>
						<input type="radio" name="q10" value="3" id="q10_3" /><label for="q10_3">no</label>
						<input type="radio" name="q10" value="4" id="q10_4" /><label for="q10_4">some</label>
					</p>
				</li>
				
				<li>
					<span id="question">Where ___ to university?</span>
					<p>
						<input type="radio" name="q11" value="1" id="q11_1" /><label for="q11_1">are you go</label>
						<input type="radio" name="q11" value="2" id="q11_2" /><label for="q11_2">did you</label>
						<input type="radio" name="q11" value="3" id="q11_3" /><label for="q11_3">went you</label>
						<input type="radio" name="q11" value="4" id="q11_4" /><label for="q11_4">did you go</label>
					</p>
				</li>
				
				<li>
					<span id="question">Bill ___ Ben.</span>
					<p>
						<input type="radio" name="q12" value="1" id="q12_1" /><label for="q12_1">is more taller than</label>
						<input type="radio" name="q12" value="2" id="q12_2" /><label for="q12_2">is taller than</label>
						<input type="radio" name="q12" value="3" id="q12_3" /><label for="q12_3">is the taller than</label>
						<input type="radio" name="q12" value="4" id="q12_4" /><label for="q12_4">is more tall than</label>
					</p>
				</li>
				
				<li>
					<span id="question">I dreamt ___ you last night. You won the World Cup.</span>
					<p>
						<input type="radio" name="q13" value="1" id="q13_1" /><label for="q13_1">on</label>
						<input type="radio" name="q13" value="2" id="q13_2" /><label for="q13_2">about</label>
						<input type="radio" name="q13" value="3" id="q13_3" /><label for="q13_3">to</label>
						<input type="radio" name="q13" value="4" id="q13_4" /><label for="q13_4">cover</label>
					</p>
				</li>
				
				<li>
					<span id="question">Turn ___ your mobile phone, please.</span>
					<p>
						<input type="radio" name="q14" value="1" id="q14_1" /><label for="q14_1">out</label>
						<input type="radio" name="q14" value="2" id="q14_2" /><label for="q14_2">of</label>
						<input type="radio" name="q14" value="3" id="q14_3" /><label for="q14_3">at</label>
						<input type="radio" name="q14" value="4" id="q14_4" /><label for="q14_4">off</label>
					</p>
				</li>
				
				<li>
					<span id="question">Carla: "I can't speak Japanese". Tony: "___ can I."</span>
					<p>
						<input type="radio" name="q15" value="1" id="q15_1" /><label for="q15_1">so</label>
						<input type="radio" name="q15" value="2" id="q15_2" /><label for="q15_2">either</label>
						<input type="radio" name="q15" value="3" id="q15_3" /><label for="q15_3">too</label>
						<input type="radio" name="q15" value="4" id="q15_4" /><label for="q15_4">neither</label>
					</p>
				</li>
				
				<li>
					<span id="question">Fred:'___ ?' John:'Oh, about 45 minutes.'</span>
					<p>
						<input type="radio" name="q16" value="1" id="q16_1" /><label for="q16_1">When is it</label>
						<input type="radio" name="q16" value="2" id="q16_2" /><label for="q16_2">How long time is it</label>
						<input type="radio" name="q16" value="3" id="q16_3" /><label for="q16_3">How long does it take</label>
						<input type="radio" name="q16" value="4" id="q16_4" /><label for="q16_4">What time is it</label>
					</p>
				</li>
				
				<li>
					<span id="question">What does your brother like?</span>
					<p>
						<input type="radio" name="q17" value="1" id="q17_1" /><label for="q17_1">He is very nice</label>
						<input type="radio" name="q17" value="2" id="q17_2" /><label for="q17_2">He is very well</label>
						<input type="radio" name="q17" value="3" id="q17_3" /><label for="q17_3">He is a good boy</label>
						<input type="radio" name="q17" value="4" id="q17_4" /><label for="q17_4">He likes football</label>
					</p>
				</li>
				
				<li>
					<span id="question">Why ___ go to Galway at the weekend?</span>
					<p>
						<input type="radio" name="q18" value="1" id="q18_1" /><label for="q18_1">do we</label>
						<input type="radio" name="q18" value="2" id="q18_2" /><label for="q18_2">don't we</label>
						<input type="radio" name="q18" value="3" id="q18_3" /><label for="q18_3">aren't we</label>
						<input type="radio" name="q18" value="4" id="q18_4" /><label for="q18_4">are we</label>
					</p>
				</li>
				
				<li>
					<span id="question">I'm looking forward to ___ to Ireland next month.</span>
					<p>
						<input type="radio" name="q19" value="1" id="q19_1" /><label for="q19_1">will be going</label>
						<input type="radio" name="q19" value="2" id="q19_2" /><label for="q19_2">going</label>
						<input type="radio" name="q19" value="3" id="q19_3" /><label for="q19_3">go</label>
						<input type="radio" name="q19" value="4" id="q19_4" /><label for="q19_4">will go</label>
					</p>
				</li>
				
				<li>
					<span id="question">Would you mind ___ , please? You're not allowed to smoke here.</span>
					<p>
						<input type="radio" name="q20" value="1" id="q20_1" /><label for="q20_1">not smoke</label>
						<input type="radio" name="q20" value="2" id="q20_2" /><label for="q20_2">not to smoking</label>
						<input type="radio" name="q20" value="3" id="q20_3" /><label for="q20_3">noot to smoke</label>
						<input type="radio" name="q20" value="4"  /><label for="q20_4">not smoking</label>
					</p>
				</li>
				
				<li>
					<span id="question">This food is delicious! It's the first time ___ here.</span>
					<p>
						<input type="radio" name="q21" value="1" id="q21_1" /><label for="q21_1">I ate</label>
						<input type="radio" name="q21" value="2" id="q21_2" /><label for="q21_2">I did eat</label>
						<input type="radio" name="q21" value="3" id="q21_3" /><label for="q21_3">I have eaten</label>
						<input type="radio" name="q21" value="4" id="q21_4" /><label for="q21_4">I eat</label>
					</p>
				</li>
				
				<li>
					<span id="question">I have been in Dublin ___ 3 days.</span>
					<p>
						<input type="radio" name="q22" value="1" id="q22_1" /><label for="q22_1">since</label>
						<input type="radio" name="q22" value="2" id="q22_2" /><label for="q22_2">during</label>
						<input type="radio" name="q22" value="3" id="q22_3" /><label for="q22_3">ago</label>
						<input type="radio" name="q22" value="4" id="q22_4" /><label for="q22_4">for</label>
					</p>
				</li>
				
				<li>
					<span id="question">If I won &euro;1 million, I ___ my mum a house on the coast.</span>
					<p>
						<input type="radio" name="q23" value="1" id="q23_1" /><label for="q23_1">buy</label>
						<input type="radio" name="q23" value="2" id="q23_2" /><label for="q23_2">would buy</label>
						<input type="radio" name="q23" value="3" id="q23_3" /><label for="q23_3">will buy</label>
						<input type="radio" name="q23" value="4" id="q23_4" /><label for="q23_4">am buying</label>
					</p>
				</li>
				
				<li>
					<span id="question">I hope ___ you again soon.</span>
					<p>
						<input type="radio" name="q24" value="1" id="q24_1" /><label for="q24_1">to meeting</label>
						<input type="radio" name="q24" value="2" id="q24_2" /><label for="q24_2">meeting</label>
						<input type="radio" name="q24" value="3" id="q24_3" /><label for="q24_3">meet</label>
						<input type="radio" name="q24" value="4" id="q24_4" /><label for="q24_4">to meet</label>
					</p>
				</li>
				
				<li>
					<span id="question">When I went to New York I ___ get a visa.</span>
					<p>
						<input type="radio" name="q25" value="1" id="q25_1" /><label for="q25_1">must</label>
						<input type="radio" name="q25" value="2" id="q25_2" /><label for="q25_2">must have</label>
						<input type="radio" name="q25" value="3" id="q25_3" /><label for="q25_3">had to</label>
						<input type="radio" name="q25" value="4" id="q25_4" /><label for="q25_4">must have to</label>
					</p>
				</li>
				
				<li>
					<span id="question">Have you thought about ___ your car?</span>
					<p>
						<input type="radio" name="q26" value="1" id="q26_1"/><label for="q26_1">selling</label>
						<input type="radio" name="q26" value="2" id="q26_2"/><label for="q26_2">to sell</label>
						<input type="radio" name="q26" value="3" id="q26_3"/><label for="q26_3">to be selling</label>
						<input type="radio" name="q26" value="4" id="q26_4"/><label for="q26_4">sell</label>
					</p>
				</li>
				
				<li>
					<span id="question">Now that I think about it, I remember ___ the front door when I left this morning, so I know the keys can't be in the house.</span>
					<p>
						<input type="radio" name="q27" value="1" id="q27_1"/><label for="q27_1">locking</label>
						<input type="radio" name="q27" value="2" id="q27_2"/><label for="q27_2">to have locked</label>
						<input type="radio" name="q27" value="3" id="q27_3"/><label for="q27_3">to lock</label>
						<input type="radio" name="q27" value="4" id="q27_4"/><label for="q27_4">locked</label>
					</p>
				</li>
				
				<li>
					<span id="question">If you want to drive a car, you must have a driving ___.</span>
					<p>
						<input type="radio" name="q28" value="1" id="q28_1"/><label for="q28_1">permission</label>
						<input type="radio" name="q28" value="2" id="q28_2"/><label for="q28_2">permit</label>
						<input type="radio" name="q28" value="3" id="q28_3"/><label for="q28_3">registration</label>
						<input type="radio" name="q28" value="4" id="q28_4"/><label for="q28_4">license</label>
					</p>
				</li>
				
				<li>
					<span id="question">We're running ___ petrol! We need to find a petrol station.</span>
					<p>
						<input type="radio" name="q29" value="1" id="q29_1"/><label for="q29_1">out with</label>
						<input type="radio" name="q29" value="2" id="q29_2"/><label for="q29_2">out of</label>
						<input type="radio" name="q29" value="3" id="q29_3"/><label for="q29_3">out</label>
						<input type="radio" name="q29" value="4" id="q29_4"/><label for="q29_4">without</label>
					</p>
				</li>
				
				<li>
					<span id="question">Whether Pele's the greatest player ever is a ___ of opinion.</span>
					<p>
						<input type="radio" name="q30" value="1" id="q30_1" /><label for="q30_1">matter</label>
						<input type="radio" name="q30" value="2" id="q30_2" /><label for="q30_2">subject</label>
						<input type="radio" name="q30" value="3" id="q30_3" /><label for="q30_3">case</label>
						<input type="radio" name="q30" value="4" id="q30_4" /><label for="q30_4">choice</label>
					</p>
				</li>
				
				<li>
					<span id="question">Which word does not sound the same as the others?</span>
					<p>
						<input type="radio" name="q31" value="1" id="q31_1" /><label for="q31_1">shall</label>
						<input type="radio" name="q31" value="2" id="q31_2" /><label for="q31_2">wall</label>
						<input type="radio" name="q31" value="3" id="q31_3" /><label for="q31_3">fall</label>
						<input type="radio" name="q31" value="4" id="q31_4" /><label for="q31_4">tall</label>
					</p>
				</li>
				
				<li>
				<span id="question">Which word does not sound the same as the others?</span>
					<p>
						<input type="radio" name="q32" value="1" id="q32_1" /><label for="q32_1">come</label>
						<input type="radio" name="q32" value="2" id="q32_2" /><label for="q32_2">some</label>
						<input type="radio" name="q32" value="3" id="q32_3" /><label for="q32_3">home</label>
						<input type="radio" name="q32" value="4" id="q32_4" /><label for="q32_4">sun</label>
					</p>
				</li>
				
				<li>
					<span id="question">Which word does not sound the same as the others?</span>
					<p>
						<input type="radio" name="q33" value="1" id="q33_1" /><label for="q33_1">love</label>
						<input type="radio" name="q33" value="2" id="q33_2" /><label for="q33_2">money</label>
						<input type="radio" name="q33" value="3" id="q33_3" /><label for="q33_3">busy</label>
						<input type="radio" name="q33" value="4" id="q33_4" /><label for="q33_4">butter</label>
					</p>
				</li>
				
				<li>
					<span id="question">Which word does not sound the same as the others?</span>
					<p>
						<input type="radio" name="q34" value="1" id="q34_1" /><label for="q34_1">low</label>
						<input type="radio" name="q34" value="2" id="q34_2" /><label for="q34_2">toe</label>
						<input type="radio" name="q34" value="3" id="q34_3" /><label for="q34_3">throw</label>
						<input type="radio" name="q34" value="4" id="q34_4" /><label for="q34_4">now</label>
					</p>
				</li>
				
				<li>
					<span id="question">Which word does not sound the same as the others?</span>
					<p>
						<input type="radio" name="q35" value="1" id="q35_1" /><label for="q35_1">said</label>
						<input type="radio" name="q35" value="2" id="q35_2" /><label for="q35_2">head</label>
						<input type="radio" name="q35" value="3" id="q35_3" /><label for="q35_3">read</label>
						<input type="radio" name="q35" value="4" id="q35_4" /><label for="q35_4">great</label>
					</p>
				</li>
				
				<li>
					<span id="question">You're late for class. You ___ got up earlier.</span>
					<p>
						<input type="radio" name="q36" value="1" id="q36_1" /><label for="q36_1">must have</label>
						<input type="radio" name="q36" value="2" id="q36_2" /><label for="q36_2">should have</label>
						<input type="radio" name="q36" value="3" id="q36_3" /><label for="q36_3">should</label>
						<input type="radio" name="q36" value="4" id="q36_4" /><label for="q36_4">must</label>
					</p>
				</li>
				
				<li>
					<span id="question">Every time I see him, he's got a new girlfriend.  All his relationships seem to ___ wrong after a month or two.</span>
					<p>
						<input type="radio" name="q37" value="1" id="q37_1" /><label for="q37_1">turn</label>
						<input type="radio" name="q37" value="2" id="q37_2" /><label for="q37_2">end</label>
						<input type="radio" name="q37" value="3" id="q37_3" /><label for="q37_3">go</label>
						<input type="radio" name="q37" value="4" id="q37_4" /><label for="q37_4">come</label>
					</p>
				</li>
				
				<li>
					<span id="question">That was the best concert I've ever been to. It was ___ wonderful.</span>
					<p>
						<input type="radio" name="q38" value="1" id="q38_1" /><label for="q38_1">fairly</label>
						<input type="radio" name="q38" value="2" id="q38_2" /><label for="q38_2">very</label>
						<input type="radio" name="q38" value="3" id="q38_3" /><label for="q38_3">much</label>
						<input type="radio" name="q38" value="4" id="q38_4" /><label for="q38_4">absolutely</label>
					</p>
				</li>
				
				<li>
					<span id="question">He left ___ goodbye to us.</span>
					<p>
						<input type="radio" name="q39" value="1"  /><label for="q39_1">not say</label>
						<input type="radio" name="q39" value="2" id="q39_2" /><label for="q39_2">no saying</label>
						<input type="radio" name="q39" value="3" id="q39_3" /><label for="q39_3">without saying</label>
						<input type="radio" name="q39" value="4" id="q39_4" /><label for="q39_4">no say</label>
					</p>
				</li>
				
				<li>
					<span id="question">After four attempts, she finally succeeded ___ passing her driving test.</span>
					<p>
						<input type="radio" name="q40" value="1" id="q40_1" /><label for="q40_1">on</label>
						<input type="radio" name="q40" value="2" id="q40_2" /><label for="q40_2">to</label>
						<input type="radio" name="q40" value="3" id="q40_3" /><label for="q40_3">with</label>
						<input type="radio" name="q40" value="4" id="q40_4" /><label for="q40_4">in</label>
					</p>
				</li>
				
				<li>
					<span id="question">It was a ___ race. I nearly won, but John just beat me by a metre or so.</span>
					<p>
						<input type="radio" name="q41" value="1" id="q41_1" /><label for="q41_1">near</label>
						<input type="radio" name="q41" value="2" id="q41_2" /><label for="q41_2">close</label>
						<input type="radio" name="q41" value="3" id="q41_3" /><label for="q41_3">closed</label>
						<input type="radio" name="q41" value="4" id="q41_4" /><label for="q41_4">nearly</label>
					</p>
				</li>
				
				<li>
					<span id="question">I hated maths at school. The teacher ___ so much homework.</span>
					<p>
						<input type="radio" name="q42" value="1" id="q42_1" /><label for="q42_1">made us to do</label>
						<input type="radio" name="q42" value="2" id="q42_2" /><label for="q42_2">made us do</label>
						<input type="radio" name="q42" value="3" id="q42_3" /><label for="q42_3">made us doing</label>
						<input type="radio" name="q42" value="4" id="q42_4" /><label for="q42_4">has made us to do</label>
					</p>
				</li>
				
				<li>
					<span id="question">The police are looking ___ several burglaries in the area.</span>
					<p>
						<input type="radio" name="q43" value="1" id="q43_1" /><label for="q43_1">into</label>
						<input type="radio" name="q43" value="2" id="q43_2" /><label for="q43_2">for</label>
						<input type="radio" name="q43" value="3" id="q43_3" /><label for="q43_3">up</label>
						<input type="radio" name="q43" value="4" id="q43_4" /><label for="q43_4">after</label>
					</p>
				</li>
				
				<li>
					<span id="question">You can always get your money back if you keep the ___.</span>
					<p>
						<input type="radio" name="q44" value="1" id="q44_1" /><label for="q44_1">bill</label>
						<input type="radio" name="q44" value="2" id="q44_2" /><label for="q44_2">ticket</label>
						<input type="radio" name="q44" value="3" id="q44_3" /><label for="q44_3">recipe</label>
						<input type="radio" name="q44" value="4" id="q44_4" /><label for="q44_4">receipt</label>
					</p>
				</li>
				
				<li>
					<span id="question">She ___ me for the accident.</span>
					<p>
						<input type="radio" name="q45" value="1" id="q45_1" /><label for="q45_1">accused</label>
						<input type="radio" name="q45" value="2" id="q45_2" /><label for="q45_2">denied</label>
						<input type="radio" name="q45" value="3" id="q45_3" /><label for="q45_3">blamed</label>
						<input type="radio" name="q45" value="4" id="q45_4" /><label for="q45_4">complained</label>
					</p>
				</li>
				
				<li>
					<span id="question">Would it ___ you if we came on Saturday morning?</span>
					<p>
						<input type="radio" name="q46" value="1" id="q46_1" /><label for="q46_1">fit</label>
						<input type="radio" name="q46" value="2" id="q46_2" /><label for="q46_2">suit</label>
						<input type="radio" name="q46" value="3" id="q46_3" /><label for="q46_3">like</label>
						<input type="radio" name="q46" value="4" id="q46_4" /><label for="q46_4">agree</label>
					</p>
				</li>
				
				<li>
					<span id="question">You ___ me she was married before I asked her out.</span>
					<p>
						<input type="radio" name="q47" value="1" id="q47_1" /><label for="q47_1">ought to tell</label>
						<input type="radio" name="q47" value="2" id="q47_2" /><label for="q47_2">can to tell</label>
						<input type="radio" name="q47" value="3" id="q47_3" /><label for="q47_3">can have told</label>
						<input type="radio" name="q47" value="4" id="q47_4" /><label for="q47_4">could have told</label>
					</p>
				</li>
				
				<li>
					<span id="question">You'd better invite him to the party as well, ___ you?</span>
					<p>
						<input type="radio" name="q48" value="1" id="q48_1" /><label for="q48_1">wouldn't</label>
						<input type="radio" name="q48" value="2" id="q48_2" /><label for="q48_2">hadn't</label>
						<input type="radio" name="q48" value="3" id="q48_3" /><label for="q48_3">shouldn't</label>
						<input type="radio" name="q48" value="4" id="q48_4" /><label for="q48_4">would</label>
					</p>
				</li>
				
				<li>
					<span id="question">I didn't pass my exams this time, but that doesn't ___ out the possibility of getting into Trinity College next year.</span>
					<p>
						<input type="radio" name="q49" value="1" id="q49_1" /><label for="q49_1">cancel</label>
						<input type="radio" name="q49" value="2" id="q49_2" /><label for="q49_2">put</label>
						<input type="radio" name="q49" value="3" id="q49_3" /><label for="q49_3">rule</label>
						<input type="radio" name="q49" value="4" id="q49_4" /><label for="q49_4">strike</label>
					</p>
				</li>
				
				<li>
					<span id="question">Take the short ___ through the park. It'll save time.</span>
					<p>
						<input type="radio" name="q50" value="1" id="q50_1" /><label for="q50_1">cut</label>
						<input type="radio" name="q50" value="2" id="q50_2" /><label for="q50_2">path</label>
						<input type="radio" name="q50" value="3" id="q50_3" /><label for="q50_3">way</label>
						<input type="radio" name="q50" value="4" id="q50_4" /><label for="q50_4">distance</label>
					</p>
				</li>
			</ol>
			
			<div id="username">
			<p>
				Before you finish, please enter your name and email:
				<br />
				<label for="user_name">Full Name:  </label> <input type="text" name="user_name" id="user_name" />
				<span class="error_message_name" style="color:#FF0000"></span>
				
				<br />
				<label for="user_email">Email:   </label> <input type="text" name="user_email" id="user_email" />
				<span class="error_message_email" style="color:#FF0000"></span>
			</p>
			</div>
			
			<input type="submit" name="submit" value="Submit your answers" id="but" />
			
		</form>
<?php endwhile; ?>
