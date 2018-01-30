$(document).ready(function(){


 $("#owl-example").owlCarousel({
    // Most important owl features
    items : 4,
    pagination : true,
    paginationSpeed : 1000,
    navigation : true,
    navigationText : ["","<i class='fa fa-angle-right'></i>"],
    slideSpeed : 800,
 });

	/*$("#navigation").sticky({
		topSpacing : 75,
	});

	$('#nav').onePageNav({
		currentClass: 'current',
		changeHash: false,
		scrollSpeed: 15000,
		scrollThreshold: 0.5,
		filter: '',
		easing: 'easeInOutExpo'
	});

     $('#top-nav').onePageNav({
         currentClass: 'active',
         changeHash: true,
         scrollSpeed: 1200
    });
//Initiat WOW JS
    new WOW().init();)*/
});
function configurerest(city,rest)
{
	var s1=['FOC','EG','english','physics'];
	var s2=['oops','digital','maths','english'];
	var s3=['dbms','CA','DS'];
	var s4=['Algorithm','OS','software','pqt'];

	switch(city.value)
	{
		case '1':
			rest.options.length=0;
			for(i=0;i<s1.length;i++)
				createOption(rest,s1[i],s1[i]);
			break;
		case '2':
			rest.options.length=0;
			for(i=0;i<s2.length;i++)
				createOption(rest,s2[i],s2[i]);
			break;
		case '3':
			rest.options.length=0;
			for(i=0;i<s3.length;i++)
				createOption(rest,s3[i],s3[i]);
			break;
		case '4':
			rest.options.length=0;
			for(i=0;i<s4.length;i++)
				createOption(rest,s4[i],s4[i]);
			break;
	}

}
function createOption(ddl,text,value)
{
	var opt=document.createElement('option');
	opt.value=value;
	opt.text=text;
	ddl.options.add(opt);
}


 