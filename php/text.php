<?php
	$full_name = $_SERVER['PHP_SELF'];$name_array = explode('/',$full_name);$count = count($name_array);$page_name = $name_array[$count-1];
	if($page_name=='index.php'){$namepage="Home";}
	elseif ($page_name=='about.php') {$namepage="About";}
	elseif ($page_name=='services.php') {$namepage="Services";}
	elseif ($page_name=='reviews.php') {$namepage="Reviews";}
	elseif ($page_name=='projects.php') {$namepage="Projects";}
	elseif ($page_name=='thank-you.php') {$namepage="Thank You";}
	elseif ($page_name=='404.php') {$namepage="Not Found";}
	elseif ($page_name=='contact.php') {$namepage="Contact Us";}
	//Info
	$Company="Antonio Painting";
	$Domain='www.PaintingAntonio.com';//No dejar pleca al final del dominio
	$Address='Port Washington, NY';

	$PhoneName="Telefono";
	$Phone='(516) 301-8393';
	// $Phone2='(401)-263-3437';
	$PhoneConvert = str_replace(str_split('(-)/:*?"<>|\t\n\r\O\f\i\c\e'), '', $Phone);
	$PhoneRef = "tel:".str_replace(str_split(' '), '', $PhoneConvert);

	$SEOConvert= str_replace(str_split(' '), '-', $PhoneConvert);
	$SEOPhone='+1'.$SEOConvert;

	$Mail='segarraanthony6@gmail.com';$MailRef="mailto:".$Mail;
	$Services="";
	$Estimates="";
	$Payment="Venmo, zelle, cash, & chek ";
	$Experience="With More Than 10 Years of Experience";
	$Schedule="Monday to Sunday : 24 / 7";	
	$Cover="";

	$Facebook="https://www.facebook.com/Jazminnn100";
	$GoogleMap='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24151.394181375796!2d-73.7063234414254!3d40.82962699052374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c288cbac59ef47%3A0x369706fa72f96d0c!2sPort%20Washington%2C%20Nueva%20York%2C%20EE.%20UU.!5e0!3m2!1ses-419!2sni!4v1687533403095!5m2!1ses-419!2sni" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
	$Map_url="https://goo.gl/maps/BXwSpf9MUeDkKLJRA";
	$Bussines="https://www.google.com/maps/place/Antonios+Painting/@40.847001,-73.6948234,15z/data=!4m6!3m5!1s0x89c28f8e7dc3cd83:0x6aace6595f542d8a!8m2!3d40.847001!4d-73.6948234!16s%2Fg%2F11rxpv6g33?entry=ttu";

    $urls = array(
        "",
        "https://www.facebook.com/Jazminnn100",
        "https://www.google.com/maps/place/Antonios+Painting/@40.847001,-73.6948234,15z/data=!4m6!3m5!1s0x89c28f8e7dc3cd83:0x6aace6595f542d8a!8m2!3d40.847001!4d-73.6948234!16s%2Fg%2F11rxpv6g33?entry=ttu",
    );
    
	//Phrases
	$Description="";	
 	$Phrase = array(
 	    "",
		"We care and maintain <br> your home",
		"We care your home",
	);
	



	//Home  etc.
	$Home = array(		 
		"What we do for your home",
		"About taking care of your home",	
	);


		// Titulos de la pagina about y services 
		$About_tittle = array(
			"About taking care of your home",
			"We're Experience",
			"Awards Winning & Professional Team Member",
			"Expert Team and Professional work",
			"Painting And Landscaping Services",
			"What we do for your home",
			"",
		);
	

	$About = array(
		"Welcome to Antonio Painting, your trusted provider of professional painting services. We specialize in providing high-quality painting solutions to transform your spaces and give them a fresh and renewed look.",
		"Our interior painting service is the perfect option to give life and personality to your interior spaces. Whether you want to change the color of your walls, create a unique design, or simply refresh the look of a room, our paint experts will take care of applying the paint accurately and evenly.",
		"we are committed to providing you with exceptional results on every painting project. From small touch-ups to complete painting projects, you can trust our team of professional painters to achieve a flawless finish and transform your spaces.",
		"Our vision is to become the leading benchmark in the paint industry, recognized for our superior quality, exceptional customer service and professionalism.",
		"Our mission is to provide exceptional quality painting services, transforming spaces and creating aesthetically pleasing environments for our clients.",
		"We are committed to offering the highest quality painting services, using top quality products.",
	);

	$gallery_parraf = array(
		"Give your home or business a new look with our exterior painting service. Our team of painters uses high quality products and professional techniques to protect and beautify the facade of your property.",
	);


	//Services
	$SN[1]="Carpet cleaning";
	$SD[1]="Restore the freshness and cleanliness of your carpets with our professional carpet cleaning service.";
	
	$SN[2]="Painting";
	$SD[2]="Transform your space with a fresh coat of paint. Our skilled painters will deliver exceptional results.";
	
	$SN[3]="Framing";
	$SD[3]="Achieve structural integrity and precision with our framing services. Whether it's for new construction or remodeling projects,";
	
	$SN[4]="Roofing";
	$SD[4]="Protect your property from the elements with our professional roofing services. Our roofing experts are skilled in installation and repair of various roofing systems. ";
	
	$SN[5]="Sheetrock";
	$SD[5]="Create smooth and seamless walls with our sheetrock installation and repair services. Our team has the expertise to handle all aspects of sheetrock";

	$SN[6]="Landscaping";
	$SD[6]="Enhance the beauty and functionality of your outdoor spaces with our landscaping services. From designing and installing gardens to hardscaping features";

	$SN[7]="Tree service";
	$SD[7]="Maintain the health and appearance of your trees with our professional tree services. From tree trimming and pruning to tree removal and stump grinding,";

	$SN[8]="Finish Work";
	$SD[8]="Add the perfect finishing touches to your project with our finish work services. Whether it's fine carpentry, trim installation, or other detailed work";
	
	$SN[9]="Snow removal";
	$SD[9]=" Our team is equipped with the necessary tools and machinery to efficiently clear snow from driveways, walkways, parking lots, and other areas";

    $SN[10]="Pool service";
	$SD[10]="Our team of trained professionals offers a range of services to ensure your pool is ready for enjoyment throughout the year, and other areas.";

    $SN[11]="tennis court repair ";
	$SD[11]="Our skilled technicians are experienced in diagnosing and fixing various issues that may arise, ensuring that your tennis court is in excellent condition.";


	$Desc  = array(
		"",
		"Commercial",
		"Residential",
		"Maintenence",

	);
	// texto de service 2 
	$service = array(
		"",
		"We cover all kinds of programs and events",
		"We provide all kinds of maintenance to your house.",
		"we keep your house beautiful and bright",
		"we cover all types of recidentials",
	);




	$Detail = array(		 
		"Before applying the paint, it is crucial to properly prepare the surfaces to obtain a flawless finish. Our team takes care of sanding, repairing cracks, removing stains and doing any other necessary prep work to ensure that the paint adheres optimally and provides a long-lasting result.",

	"",


	);


	//Excerpt
	if (strlen($Description) > 10){$ExDescription=substr($Description, 0,152).'...';};
	if (strlen($About[0]) > 10){$ExAbout=substr($About[0], 0,145).'...';};
	if (strlen($Home[0]) > 10){$ExHome=substr($Home[0], 0,87).'...';};

	if (strlen($SD[1]) > 10){$ExSD[1]=substr($SD[1], 0,100).'...';};
	if (strlen($SD[2]) > 10){$ExSD[2]=substr($SD[2], 0,96).'...';};
	if (strlen($SD[3]) > 10){$ExSD[3]=substr($SD[3], 0,82).'...';};
	//if (strlen($SD[5]) > 10){$ExSD[4]=substr($SD[4], 0,108).'...';};

?>
