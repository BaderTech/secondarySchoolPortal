<?PHP
$this->load->helper('url');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<title>SSP | Students Listing</title>
<?PHP include('includes/assets_loader.php'); ?>
</head>

<body>
	<!--[if !IE]>start wrapper<![endif]-->
	<div id="wrapper">
		<!--[if !IE]>start head<![endif]-->
		<div id="head">
			
			<!--[if !IE]>start logo and user details<![endif]-->
			<?PHP include('includes/logoSpaceTop.php'); ?>
			
			<!--[if !IE]>end logo end user details<![endif]-->
			
			
			
			<!--[if !IE]>start menus_wrapper<![endif]-->
			<div id="menus_wrapper">
				
				
				
				
				
				<?PHP include('includes/topmenu.php'); ?>
				
				
				
				
			</div>
			<!--[if !IE]>end menus_wrapper<![endif]-->
			
			
			
		</div>
		<!--[if !IE]>end head<![endif]-->
		
		<!--[if !IE]>start content<![endif]-->
		<div id="content">
			
			
			
			
			
			<!--[if !IE]>start page<![endif]-->
			<div id="page">
				<div class="inner">
					
					
					
					<!--[if !IE]>start section<![endif]--><!--[if !IE]>end section<![endif]-->
					
					
					<!--[if !IE]>start section<![endif]-->	
				  <div class="section table_section">
						<!--[if !IE]>start title wrapper<![endif]-->
						<div class="title_wrapper">
							<h2><?PHP echo $divHeading; ?></h2>
							<span class="title_wrapper_left"></span>
							<span class="title_wrapper_right"></span>
						</div>
						<!--[if !IE]>end title wrapper<![endif]-->
						<!--[if !IE]>start section content<![endif]-->
						<div class="section_content">
							<!--[if !IE]>start section content top<![endif]-->
							<div class="sct">
								<div class="sct_left">
									<div class="sct_right">
										<div class="sct_left">
											<div class="sct_right">
												
												<form action="#">
												<fieldset>
												<!--[if !IE]>start table_wrapper<![endif]-->
												<div class="table_wrapper">
													<div class="table_wrapper_inner">
                                                    <?PHP
													if($students != false)
													{
													?>
													<table cellpadding="0" cellspacing="0" width="100%">
														<tbody><tr>
															<th>No.</th>
															<th><a href="#">Admission No</a></th>
															<th><a href="#">Student Name</a></th>
                                                            <th><a href="#">Gender</a></th>
															<th><a href="#">Class</a></th>
                                                            <th><a href="#">Status</a></th>
															<th style="width: 96px;">Actions</th>
														</tr>
                                                        <?PHP
															$x = count($students);
														 	$counter = 0;
															//echo $x.' '.$startFrom;
															for($i=$startFrom; $i<$x; $i++)
															{
														?>
														<tr class="first">
															<td><?PHP echo ($counter+1); ?></td>
															<td><?PHP echo $students[$i]['admissionNumber']; ?></td>
															<td><?PHP echo $students[$i]['lastname'].' '.$students[$i]['middlename'].' '.$students[$i]['firstname']; ?></td>
                                                            <td><?PHP echo $students[$i]['gender']; ?></td>
															<td><?PHP echo $students[$i]['className']; ?></td>
                                                            <td><?PHP echo 'Active'; ?></td>
															<td style="width: 96px;">
                                                            <?PHP
															if($this->session->userdata('teacherLogin') == true)
															{
															?>
                                                            <a href="javascript:runCommand2('<?PHP echo site_url("teacher/studentProfile/".$students[$i]['studentID']); ?>')">Profile</a> 
                                                            <?PHP
															}
															else if($this->session->userdata('parentLogin') == true)
															{
															?>
                                                            <a href="javascript:runCommand2('<?PHP echo site_url("parents/studentProfile/".$students[$i]['studentID']); ?>')">Profile</a> 
                                                            <?PHP
															}
															else if($this->session->userdata('adminLogin') == true)
															{
															?>
                                                            <a href="javascript:runCommand2('<?PHP echo site_url("admins/studentProfile/".$students[$i]['studentID']); ?>')">Profile</a> 
                                                            <?PHP
															}
															?>
															<?PHP
															if(isset($showPayment))
															{
															?>
                                                           | <a href="<?PHP echo site_url("etranzact_payment/index/".$students[$i]['studentID']); ?>">Pay Fees</a>
                                                            <?PHP
															}
															if($this->session->userdata('parentLogin')==true)
															{
                                                            ?>
                                                           	| <a href="<?PHP echo site_url("parents/terms/".$students[$i]['studentID']); ?>">Results</a>
                                                            <?PHP
															}
															?>
															</td>
														</tr>
														<?PHP
																$counter++;
																if($counter == $perpage)
																	break;
															}
														?>
														
													</tbody></table>
                                                    <?PHP
													}
													else
														echo'No record was found';
													?>
													</div>
												</div>
												<!--[if !IE]>end table_wrapper<![endif]-->
												
												<!--[if !IE]>start table menu<![endif]-->
												<div class="table_menu">
													<ul class="left">
														<li><a href="<?PHP echo site_url("manage_candidates/launchForm/"); ?>" class="button add_new"><span><span>ADD NEW</span></span></a></li>
													</ul>
													<ul class="right">
														<!--<li><a href="#" class="button check_all"><span><span>CHECK ALL</span></span></a></li>
														<li><a href="#" class="button uncheck_all"><span><span>UNCHECK ALL</span></span></a></li>
														<li><span class="button approve"><span><span>APPROVE</span></span></span></li>-->
													</ul>
												</div>
												<!--[if !IE]>end table menu<![endif]-->
												
												
												</fieldset>
												</form>
												
												
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--[if !IE]>end section content top<![endif]-->
							<!--[if !IE]>start section content bottom<![endif]-->
							<span class="scb"><span class="scb_left"></span><span class="scb_right"></span></span>
							<!--[if !IE]>end section content bottom<![endif]-->
							
						</div>
						<!--[if !IE]>end section content<![endif]-->
					</div>
					<!--[if !IE]>end section<![endif]-->
					
					
					
					<!--[if !IE]>start section<![endif]--><!--[if !IE]>end section<![endif]-->
					
					
					
					
					<!--[if !IE]>start section<![endif]--><!--[if !IE]>end section<![endif]-->
					
					
					
					
						
				</div>
			</div>
			<!--[if !IE]>end page<![endif]-->
			<!--[if !IE]>start sidebar<![endif]-->
			<?PHP include('includes/side.php'); ?>
			<!--[if !IE]>end sidebar<![endif]-->
			
			
			
			
		</div>
		<!--[if !IE]>end content<![endif]-->
		
	</div>
	<!--[if !IE]>end wrapper<![endif]-->
	
	<!--[if !IE]>start footer<![endif]-->
	<?PHP include('includes/footer.php'); ?>
	<!--[if !IE]>end footer<![endif]-->
	
</body>
</html>
