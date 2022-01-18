<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since 1.0.0
 */
?>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/style-a4.css">
</head>

<body>
	<?php
	while (have_posts()) :
		the_post();
	?>
		<div class="main-page">
			<div class="sub-page">
				<table>
					<tbody>
						<tr>
							<td class="no-border" colspan="3" rowspan="4"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo1.jpg" /></td>

							<td class="no-border" colspan="5">آزمایشگاه کنترل کیفیت صنایع ماد</td>
						</tr>
						<tr>
							</td>
							<td class="no-border" colspan="3">
								<label class="lb">گواهی تحویل سیلندر</label>
							</td>
							<td class="no-border" colspan="2"><span class="lb">تاریخ تحویل :</span><span class="val"><?php echo get_field("date");  ?></span></td>
						</tr>
						<tr>
							<td class="no-border" colspan="3"></td>
							<td class="no-border" colspan="2"><span class="lb">کد سند :</span><span class="val"><?php echo get_field("code");  ?></span></td>
						</tr>
						<tr>
							<td class="no-border" colspan="3"></td>
							<td class="no-border" colspan="2"><span class="lb">شماره :</span><span class="val"><?php echo get_the_ID();  ?></span></td>
						</tr>
						<tr>
							<td rowspan="4" colspan="1"><label class="lb">مشخصات مالک سیلندر</label></td>
						</tr>
						<tr>
							<td class="no-border border-top" colspan="7"><span class="lb">نام شرکت :</span><span class="val"><?php echo get_field("customer_number")->post_title;  ?></span></td>
						</tr>
						<tr>
							<td class="no-border" colspan="4"><span class="lb">نام رابط :</span><span class="val"><?php echo get_field("relation", get_field("customer_number")->ID);  ?></span></td>
							<td class="no-border" colspan="3"><span class="lb"> تماس :</span><span class="val"><?php echo get_field("tel", get_field("customer_number")->ID);  ?></span></td>
						</tr>
						<tr>
							<td class="no-border" colspan="7"><span class="lb"> آدرس :</span><span class="val"><?php echo get_field("address", get_field("customer_number")->ID);  ?></span></td>
						</tr>

						<tr>
							<td colspan="2"><span class="lb">تعداد پودری</span></td>
							<td colspan="6"><span class="val">
									<?php
									$vir="";
									if(is_array(get_field("count_podri")))
									{
										foreach (get_field("count_podri") as $item) {
											echo $vir.$item["silandr_podri_type"]["podri_type_select"]."(".$item["silandr_podri_type"]["podri_type_count"].")";
											$vir="  -  ";
										}	
									}
									?>
								</span></td>
						</tr>


						<tr>
							<td colspan="2"><span class="lb">تعداد بدون درز</span></td>
							<td colspan="6"><span> </span>
							<span class="val">
									<?php
									$vir="";
									if(is_array(get_field("count_darz")))
									{
										foreach (get_field("count_darz") as $item) {
											echo $vir.$item["darz_group"]["darz_group_select"]."(".$item["darz_group"]["darz_group_count"].")";
											$vir="  -  ";
										}
									}
									?>
								</span></td>
						</tr>

						<tr>
							<td class="no-border border-top border-left" colspan="5"><span class="lb">توضیحات وضعیت سیلندر</span><span class="val"><?php echo get_field("silandr_desc");  ?></span></td>
							<td class="no-border border-top" colspan="3"><span class="lb"> وضعیت رنگ</span><span class="val"><?php echo get_field("state_color");  ?></span></td>
						</tr>

						<tr>
							<td class="no-border border-left" colspan="5"><label> </label></td>
							<td class="no-border" colspan="3"><label> </label></td>
						</tr>


						<tr>
							<td class="no-border border-top border-left" colspan="5"><span class="lb">متعلقات سیلندر</span><span class="val"><?php echo get_field("silandr_depend");  ?></span></td>
							<td class="no-border border-top" colspan="3"><span class="lb"> تعداد کل سیلندر</span><span class="val"><?php echo get_field("silandr_count");  ?></span></td>
						</tr>

						<tr>
							<td class="no-border border-left" colspan="5"><label> </label></td>
							<td class="no-border" colspan="3"><label> </label></td>
						</tr>

						<tr>
							<td class="no-border border-top" colspan="8">
								1-درصورتیکه هریک ازسیلندرهای تحویلی فاقدالزامات لازم استانداردباشد سیلندربایکی ازروشهای استاندارد معدوم ولاشه آن تحویل خواهدشد. و نسبت به آن اعتراضی ندارم.
							</td>
						</tr>

						<tr>
							<td class="no-border" colspan="8">
								2-آزمایشگاه وکارکنان هیچ تضادمنافعی بامالکین سیلندرندارد.
							</td>
						</tr>

						<tr>
							<td class="no-border" colspan="8">
								3-مسئولین آزمایشگاه درانجام آزمون کاملابیطرف بوده ومطابق استانداردبانتیجه آزمون برخورد نموده ومتعهدوملزم به رازداری ومحرمانگی نمونه و نتایج آزمون میباشد.
							</td>
						</tr>

						<tr>
							<td class="no-border border-top" colspan="8">
								آدرس : تبریز- جاده سنتو -بعداز سراهی فرودگاه نرسیده به پلیس راه الوارعلیا پلاک 57
							</td>
						</tr>

						<tr>
							<td class="no-border" colspan="8">
								تلفن تماس: 09142222001 - 09145007040
							</td>
						</tr>


						<tr>
							<td style="height: 199px;" class="no-border border-top" colspan="4" rowspan="2">
								امضا متصدی آزمایشگاه:
							</td>
							<td class="no-border border-top" colspan="4" rowspan="2">
								امضا مشتری:
							</td>
						</tr>




					</tbody>
				</table>
			</div>
		</div>
	<?php

	endwhile; // End of the loop.
	?>
</body>

</html>
<?php
