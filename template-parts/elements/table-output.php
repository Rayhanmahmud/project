<?php 



function project_element_table($attr){

extract(
shortcode_atts(array(

 'sec_table_grp' => '', 
 'element_table_header' => '',
 'element_title_two' => 'This is title',
 'element_title_three' => 'This is title',  
 'element_title_four' => 'This is title',
 'element_title_five' => 'This is title',
 'element_title_six' => 'This is title',
 'element_title_seven' => 'This is title',
 'element_title_eight' => 'This is title',
 'element_title_nine' => 'This is title',
 'element_title_ten' => 'This is title',
 'element_title_eleven' => 'This is title',
 'element_title_tweleve' => 'This is title',
 'element_title_thirten' => 'This is title',
 'element_title_fourtin' => 'This is title',
 'element_title_fifteen' => 'This is title',
 'element_title_sixten' => 'This is title',
 'element_title_seventen' => 'This is title',
 'element_title_eightten' => 'This is title',
 'element_title_nineten' => 'This is title',
 'element_title_twenten' => 'This is title',
 'element_title_tone' => 'This is title',
 'element_title_ttwo' => 'This is title',
 'element_title_tthree' => 'This is title',
 'element_title_tfour' => 'This is title',
 'element_title_tfive' => 'This is title',
 'element_title_tsix' => 'This is title',
 'element_title_tseven' => 'This is title',
'element_title_teight' => 'This is title',
'element_title_tnine' => 'This is title',
'element_title_tten' => 'This is title',
 
),$attr)
);

ob_start();
?>

<section id="main" class="wrapper">
				<div class="inner">
					<div class="content">

					<!-- Elements -->
						<div class="row">
							<div class="col-6 col-12-medium">


<h3><?php echo esc_html($element_table_header);?></h3>

<?php 

 $sec_table_key=vc_param_group_parse_atts($sec_table_grp);
 foreach($sec_table_key as $sec_table_value){

?>
									<h4><?php echo esc_html($sec_table_value['element_title_two']); ?></h4>
									<div class="table-wrapper">
										<table>
											<thead>
												<tr>
													<th><?php echo esc_html($sec_table_value['element_title_three']); ?></th>
													<th><?php echo esc_html($sec_table_value['element_title_four']); ?></th>
													<th><?php echo esc_html($sec_table_value['element_title_five']); ?></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><?php echo esc_html($sec_table_value['element_title_six']); ?></td>
													<td><?php echo esc_html($sec_table_value['element_title_seven']); ?></td>
													<td><?php echo esc_html($sec_table_value['element_title_eight']); ?></td>
												</tr>
												<tr>
													<td><?php echo esc_html($sec_table_value['element_title_nine']); ?></td>
													<td><?php echo esc_html($sec_table_value['element_title_ten']); ?></td>
													<td><?php echo esc_html($sec_table_value['element_title_eleven']); ?></td>
												</tr>
												<tr>
													<td><?php echo esc_html($sec_table_value['element_title_tweleve']); ?></td>
													<td><?php echo esc_html($sec_table_value['element_title_thirten']); ?></td>
													<td><?php echo esc_html($sec_table_value['element_title_fourtin']); ?></td>
												</tr>
												<tr>
													<td><?php echo esc_html($sec_table_value['element_title_fifteen']); ?></td>
													<td><?php echo esc_html($sec_table_value['element_title_sixten']); ?></td>
													<td><?php echo esc_html($sec_table_value['element_title_seventen']); ?></td>
												</tr>
												<tr>
													<td><?php echo esc_html($sec_table_value['element_title_eightten']); ?></td>
													<td><?php echo esc_html($sec_table_value['element_title_nineten']); ?></td>
													<td><?php echo esc_html($sec_table_value['element_title_twenten']); ?></td>
												</tr>
												<tr>
													<td><?php echo esc_html($sec_table_value['element_title_tone']); ?></td>
													<td><?php echo esc_html($sec_table_value['element_title_ttwo']); ?></td>
													<td><?php echo esc_html($sec_table_value['element_title_tthree']); ?></td>
												</tr>
												<tr>
													<td><?php echo esc_html($sec_table_value['element_title_tfour']); ?></td>
													<td><?php echo esc_html($sec_table_value['element_title_tfive']); ?></td>
													<td><?php echo esc_html($sec_table_value['element_title_tsix']); ?></td>
												</tr>
												<tr>
													<td><?php echo esc_html($sec_table_value['element_title_tseven']); ?></td>
													<td><?php echo esc_html($sec_table_value['element_title_teight']); ?></td>
													<td><?php echo esc_html($sec_table_value['element_title_tnine']); ?></td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td colspan="2"></td>
													<td><?php echo esc_html($sec_table_value['element_title_tten']); ?></td>
												</tr>
											</tfoot>
										</table>
									</div>
 <?php } ?>
                        
	</div>
						</div>
					</div>
				</div>
			</section>

<?php

return ob_get_clean();

}

add_shortcode('element_table_section','project_element_table');









?>