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
		$is_podri = false;
		if (get_field("silandr_type") == "پودری") {
			$is_podri = true;
		}
	?>
		<div class="main-page">
			<div class="sub-page">
				<table class="exmine">
					<tbody>
						<tr>
							<td class="no-border" colspan="1" rowspan="4"><img style="height: 90px;" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo1.jpg" /></td>
							<td style="font-size: 15px;" class="title-header-h" class="no-border" colspan="8">آزمایشگاه کنترل کیفیت صنایع ماد</td>
							<td class="no-border" colspan="1" rowspan="4"><img style="height: 55px;float: left;" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo2.png" /></td>
						</tr>
						<tr>
							<?php
							$standard="6792";
							$elzamat = "گزارش نتیجه آزمون سیلندر بدون درز با الزامات استاندارد " . $standard;
							if ($is_podri) {
								$standard="18753";							   
								$elzamat = "گزارش نتیجه آزمون سیلندر پودری با الزامات استاندارد " . $standard;
							}
							?>
							<td class="title-header no-border border-top border-right border-left" colspan="8"><?php echo $elzamat; ?></td>
						</tr>
						<tr>
							<td colspan="4" class="title-header no-border border-top border-right"><span class="lb">سریال گواهینامه</span><span class="val"><?php echo get_field("sh_serial");  ?></span></td>
							<td colspan="2" class="title-header no-border border-top"><span class="lb"> تاریخ آزمون</span><span class="val"><?php echo get_field("silandr_fin")["silandr_fin_date"];  ?></span></td>
							<td colspan="2" class="title-header no-border border-top border-left"><span class="lb">تاریخ صدور </span><span class="val"><?php echo get_field("exmine_sodor");  ?></span></td>
						</tr>
						<tr>
							<td class="title-header no-border border-top border-right border-left zard" colspan="8">آدرس آزمایشگاه:جاده سنتو الوارعلیا شماره 57- تلفن:09142222001 ایمیل:reza.ali79@yahoo.com</td>
						</tr>

						<tr>
							<td rowspan="4" colspan="1"><label class="lb">متقاضی</label></td>
						</tr>
						<tr>
							<td class="no-border border-top" colspan="5"><span class="lb">نام شرکت :</span><span class="val"><?php echo get_field("customer_number")->post_title;  ?></span></td>
							<td class="no-border border-top" colspan="4"><span class="lb"> شماره شناسایی :</span><span class="val"><?php echo  get_field("serial",get_field("customer_number")->ID);  ?></span></td>

						</tr>
						<tr>
							<td class="no-border" colspan="5"><span class="lb">نام رابط :</span><span class="val"><?php echo get_field("relation", get_field("customer_number")->ID);  ?></span></td>
							<td class="no-border" colspan="4"><span class="lb"> تماس :</span><span class="val"><?php echo get_field("tel", get_field("customer_number")->ID);  ?></span></td>
						</tr>
						<tr>
							<td class="no-border" colspan="9"><span class="lb"> آدرس :</span><span class="val"><?php echo get_field("address", get_field("customer_number")->ID);  ?></span></td>
						</tr>

						<tr>
							<td rowspan="7" colspan="1"><label class="lb">مشخصات سیلندر</label></td>
						</tr>

						<tr>
							<td colspan="5"><span class="lb">حجم سیلندر</span><span class="val"><?php echo get_field("silandr_value"); ?></span></td>
							<td colspan="4"><span class="lb"> نوع رزروه سیلندر</span><span class="val"><?php echo get_field("silandr_rezve_type"); ?></span></td>
						</tr>

						<tr>
							<td colspan="5"><span class="lb"> شماره بدنه</span><span class="val"><?php echo get_field("silandr_serial"); ?></span></td>
							<td colspan="4"><span class="lb">فشار کاری</span><span class="val"><?php echo get_field("feshar_kari"); ?></span></td>
						</tr>

						<tr>
							<td colspan="5"><span class="lb">سازنده سیلندر</span><span class="val"><?php echo get_field("silandr_factory"); ?></span></td>
							<td colspan="4"><span class="lb"> تاریخ آزمون قبلی</span><span class="val"><?php echo get_field("prev_date"); ?></span></td>
						</tr>

						<tr>
							<td colspan="5"><span class="lb">کشور سازنده سیلندر</span><span class="val"><?php echo get_field("country_factory"); ?></span></td>
							<td colspan="4"><span class="lb">تاریخ تولید</span><span class="val"><?php echo get_field("silandr_date"); ?></span></td>
						</tr>

						<tr>
							<td colspan="5"><span class="lb"> شماره اموال</span><span class="val"><?php echo get_field("sh_amval"); ?></span></td>
							<td colspan="4"><span class="lb">فشار آزمون</span><span class="val"><?php echo get_field("feshar_azmon"); ?></span></td>
						</tr>

						<tr>
							<td colspan="9"><span class="lb">توضیحات</span><span class="val"></span></td>
						</tr>

						<tr>
							<td rowspan="14" colspan="1"><label class="lb">نتایج آزمون</label></td>
							<td class="no-border" colspan="1"></td>
							<td class="zard" colspan="3"><label class="lb">مشخصات آزمون</label></td>
							<td class="zard" colspan="3"><label class="lb">معیار پذیرش</label></td>
							<td class="zard" colspan="2"><label class="lb">نتیجه</label></td>
						</tr>

						<tr>
							<td rowspan="4" colspan="1">بازرسی چشمی داخلی</td>
							<td colspan="3">بررسي آثار زنگار بعد از تخليه آب</td>
							<td colspan="3"><?php echo get_field("state_inside")["state_inside_water"]["state_inside_water_met"]; ?></td>
							<td class="<?php echo (get_field("state_inside")["state_inside_water"]["state_inside_water_res"]=="قبول") ? "done": "fail"?>" colspan="2"> <?php echo get_field("state_inside")["state_inside_water"]["state_inside_water_res"]; ?></td>
						</tr>
						<tr>
							<td colspan="3">بررسي آثار رطوبت</td>
							<td colspan="3"><?php echo get_field("state_inside")["state_inside_rot"]["state_inside_rot_met"]; ?></td>
							<td class="<?php echo (get_field("state_inside")["state_inside_rot"]["state_inside_rot_res"]=="قبول") ? "done": "fail"?>" colspan="2"> <?php echo get_field("state_inside")["state_inside_rot"]["state_inside_rot_res"]; ?></td>
						</tr>
						<tr>
							<td colspan="3">خوردگي داخلي</td>
							<td colspan="3"><?php echo get_field("state_inside")["state_inside_xor"]["state_inside_xor_met"]; ?></td>
							<td class="<?php echo (get_field("state_inside")["state_inside_xor"]["state_inside_xor_res"]=="قبول") ? "done": "fail"?>" colspan="2"> <?php echo get_field("state_inside")["state_inside_xor"]["state_inside_xor_res"]; ?></td>
						</tr>

						<tr>
							<td colspan="3">سایر</td>
							<td colspan="3"><?php echo get_field("state_inside")["state_inside_other"]["state_inside_other_met"]; ?></td>
							<td class="<?php echo (get_field("state_inside")["state_inside_other"]["state_inside_other_res"]=="قبول") ? "done": "fail"?>" colspan="2"> <?php echo get_field("state_inside")["state_inside_other"]["state_inside_other_res"]; ?></td>
						</tr>

						<tr>
							<td rowspan="6" colspan="1">بازرسی چشمی خارجی</td>
							<td colspan="3">بازرسي ته سيلندر</td>
							<td colspan="3"><?php echo get_field("state_view_eye")["state_view_eye_tah"]["state_view_eye_tah_met"]; ?></td>
							<td class="<?php echo (get_field("state_view_eye")["state_view_eye_tah"]["state_view_eye_tah_res"]=="قبول") ? "done": "fail"?>" colspan="2"> <?php echo get_field("state_view_eye")["state_view_eye_tah"]["state_view_eye_tah_res"]; ?></td>
						</tr>

						<tr>
							<td colspan="3">آسيب ناشي از سوختگي و حرارت و شعله</td>
							<td colspan="3"><?php echo get_field("state_view_eye")["state_view_eye_fire"]["state_view_eye_fire_met"]; ?></td>
							<td class="<?php echo (get_field("state_view_eye")["state_view_eye_fire"]["state_view_eye_fire_res"]=="قبول") ? "done": "fail"?>" colspan="2"> <?php echo get_field("state_view_eye")["state_view_eye_fire"]["state_view_eye_fire_res"]; ?></td>
						</tr>

						<tr>
							<td colspan="3">خوردگي</td>
							<td colspan="3"><?php echo get_field("state_view_eye")["state_view_eye_xor"]["state_view_eye_xor_met"]; ?></td>
							<td class="<?php echo (get_field("state_view_eye")["state_view_eye_xor"]["state_view_eye_xor_res"]=="قبول") ? "done": "fail"?>" colspan="2"> <?php echo get_field("state_view_eye")["state_view_eye_xor"]["state_view_eye_xor_res"]; ?></td>
						</tr>

						<tr>
							<td colspan="3">خوانا بودن مشخصات</td>
							<td colspan="3"><?php echo get_field("state_view_eye")["state_view_eye_info"]["state_view_eye_info_met"]; ?></td>
							<td class="<?php echo (get_field("state_view_eye")["state_view_eye_info"]["state_view_eye_info_res"]=="قبول") ? "done": "fail"?>" colspan="2"> <?php echo get_field("state_view_eye")["state_view_eye_info"]["state_view_eye_info_res"]; ?></td>
						</tr>

						<tr>
							<td colspan="3">بررسي متعلقات دائمي</td>
							<td colspan="3"><?php echo get_field("state_view_eye")["state_view_eye_dep"]["state_view_eye_dep_met"]; ?></td>
							<td class="<?php echo (get_field("state_view_eye")["state_view_eye_dep"]["state_view_eye_dep_res"]=="قبول") ? "done": "fail"?>" colspan="2"> <?php echo get_field("state_view_eye")["state_view_eye_dep"]["state_view_eye_dep_res"]; ?></td>
						</tr>

						<tr>
							<td colspan="3">بررسي رزوه خور بودن شير و متعلقات</td>
							<td colspan="3"><?php echo get_field("state_view_eye")["state_view_eye_dep_2"]["state_view_eye_dep_2_met"]; ?></td>
							<td class="<?php echo (get_field("state_view_eye")["state_view_eye_dep_2"]["state_view_eye_dep_2_res"]=="قبول") ? "done": "fail"?>" colspan="2"> <?php echo get_field("state_view_eye")["state_view_eye_dep_2"]["state_view_eye_dep_2_res"]; ?></td>
						</tr>

						<?php
						if ($is_podri) {
						?>

							<tr>
								<td rowspan="3" colspan="1">هیدرواستاتیک</td>
								<td colspan="3">نشتی</td>
								<td colspan="3"><?php echo get_field("silandr_hidro")["silandr_hidro_nashti"]; ?></td>
								<td class="<?php echo (get_field("silandr_hidro")["silandr_hidro_res"]=="قبول") ? "done": "fail"?>" rowspan="3" colspan="2"> <?php echo get_field("silandr_hidro")["silandr_hidro_res"]; ?></td>
							</tr>
							<tr>
								<td colspan="3">معیار پذیرش</td>
								<td colspan="3"><?php echo get_field("silandr_hidro")["silandr_hidro_met"]; ?></td>

							</tr>
							<tr>
								<td colspan="3">نیاز به رنگ دارد؟</td>
								<td colspan="3"><?php echo get_field("state_view")["state_view_color"]; ?></td>

							</tr>
						<?php } else { ?>

							<tr>
								<td rowspan="3" colspan="1">هیدرواستاتیک</td>
								<td colspan="3">درصد انبساط حجمی</td>
								<td colspan="3"><?php echo get_field("silandr_hidro")["silandr_hidro_persent"]; ?></td>
								<td class="<?php echo (get_field("silandr_hidro")["silandr_hidro_res"]=="قبول") ? "done": "fail"?>" rowspan="3" colspan="2"> <?php echo get_field("silandr_hidro")["silandr_hidro_res"]; ?></td>
							</tr>
							<tr>
								<td colspan="3">معیار پذیرش</td>
								<td colspan="3"><?php echo get_field("silandr_hidro")["silandr_hidro_met"]; ?></td>

							</tr>
							<tr>
								<td colspan="3"></td>
								<td colspan="3"><?php echo get_field("silandr_hidro")["silandr_hidro_desc"]; ?></td>

							</tr>
						<?php } ?>

						<tr>
							<td colspan="1" rowspan="2">سایر</td>
							<td colspan="1" rowspan="2">تعویض متعلقات</td>
							<td colspan="2"> شیر سیلندر</td>
							<td colspan="2"><?php echo get_field("silandr_change")["silandr_change_shir"]; ?></td>
							<td colspan="1" rowspan="2">توضیحات</td>
							<td colspan="3" rowspan="2"> <?php echo get_field("silandr_change")["silandr_change_desc"]; ?></td>
						</tr>

						<tr>
							<td colspan="2">سایر</td>
							<td colspan="2"><?php echo get_field("silandr_change")["silandr_change_other"]; ?></td>
						</tr>

						<tr>
							<td colspan="1" rowspan="3">نتیجه</td>
							<td colspan="2">نتیجه نهایی</td>
							<td class="<?php echo (get_field("silandr_fin")["silandr_fin_result"]=="قبول") ? "done": "fail"?>" colspan="3"><?php echo get_field("silandr_fin")["silandr_fin_result"]; ?></td>
							<td class="zard" colspan="1"> تاریخ آزمون</td>
							<td class="zard" colspan="3"> <?php echo get_field("silandr_fin")["silandr_fin_date"]; ?></td>
						</tr>

						<tr>
							<td colspan="2"> ارزیابی انطباق</td>
							<td colspan="7"><?php echo get_field("silandr_fin")["silandr_fin_entebag"]; ?></td>
						</tr>

						<tr>
							<td colspan="2">شرح و تفسير نتايج</td>
							<td colspan="7"><?php echo get_field("silandr_fin")["silandr_fin_taf"]; ?></td>
						</tr>


						<tr>
							<td colspan="1" rowspan="3">توضیحات</td>
							<td colspan="9">
								<p style="margin-top: 0;    margin-bottom: 0;">1- نتیجه آعلام شده مربوط به نمونه مورد آزمون بوده و فقط برای این نمونه مصداق دارد
								</p>
								<p style="margin-top: 0;    margin-bottom: 0;">2- این گواهی بدون مهربرجسته آزمایشگاه و امضا مدیر فنی فاقد اعتبار است
								</p>
								<p style="margin-top: 0;    margin-bottom: 0;">3- نتیجه آزمون مختص زمان آزمون بوده و با نگهداری مناسب قابل استفاده میباشد
								</p>
								<p style="margin-top: 0;    margin-bottom: 0;">4- اطلاعات مشخصات مشتری و نمونه از اظهارات مشتری گرفته شده است ومسئولیت تناقض آن بعهده مشتری میباشد
								</p>
								<p style="margin-top: 0;    margin-bottom: 0;">5- عواقب ناشی از هرگونه تغییر کاربری بعهده مشتری میباشد
								</p>
								<p style="margin-top: 0;    margin-bottom: 0;">6- در صورت ذکر نیاز به رنگ آمیزی حتما قبل از استفاده رنگ آمیزی شود</p>
							</td>
						</tr>

					</tbody>
				</table>
				<br>
				<div style=" margin-top:20px;text-align: center;">مهر و امضاء</div>
			</div>
		</div>
	<?php

	endwhile; // End of the loop.
	?>
</body>

</html>
<?php
