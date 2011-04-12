/* 
Created by: Kenrick Beckett

Name: Chat Engine


var instanse = false;
var state;
var mes;
var file;

function Chat () {
    this.update = updateChat;
    this.send = sendChat;
    this.getState = getStateOfChat;
}

//gets the state of the chat
function getStateOfChat(){
	if(!instanse){
		 instanse = true;
		 $.ajax({
			   type: "POST",
			   url: "process.php",
			   data: {  
			   			'function': 'getState',
						'file': file
						},
			   dataType: "json",
			
			   success: function(data){
				   state = data.state;
				   instanse = false;
			   }
			});
	}	 
}

//Updates the chat
function updateChat(){
	 if(!instanse){
		 instanse = true;
	     $.ajax({
			   type: "POST",
			   url: "process.php",
			   data: {  
			   			'function': 'update',
						'state': state,
						'file': file
						},
			   dataType: "json",
			   success: function(data){
				   if(data.text){
						for (var i = 0; i < data.text.length; i++) {
                            //$('#chat-area').append($("<p>"+ data.text[i] +"</p>"));
			$('#chatmsg').jGrowl(data.text[i], {
				life: 2000,
				glue: 'after',
                                closer: false
			});
			    
                        }								  
				   }
				   //document.getElementById('chat-area').scrollTop = document.getElementById('chat-area').scrollHeight;
				   instanse = false;
				   state = data.state;
			   }
			});
	 }
	 else {
		 setTimeout(updateChat, 1500);
	 }
}

//send the message
function sendChat(message, nickname)
{       
    updateChat();
     $.ajax({
		   type: "POST",
		   url: "process.php",
		   data: {  
		   			'function': 'send',
					'message': message,
					'nickname': nickname,
					'file': file
				 },
		   dataType: "json",
		   success: function(data){
			   updateChat();
		   }
		});
}

var chat =  new Chat();
*/

$(document).ready(function() {
	//Globals
	var clicked = false;
	var closed = false;
	var updatesDisabled = true;
	var updateInterval;
	var logged_in = false;
        var footer_height = 40;
	var newsItem = 0;
	var numNews = $('#news').children('li').size();
        
	//Set initial properties
	$('#footer-nav a, #coming-soon a').fadeTo('slow', 0.6);
	$('.whoscomingbutton, #panel').css('opacity', 0.93);
	//$('#close-chat, #sendie').css('opacity', 0.93);
	//setTimeout("$('#page-wrap').fadeIn('fast')", 22000);
        
	
	/*
	//Live chat
	        // ask user for name with popup prompt    
        var name = "";
        
        // default name is 'Guest'
    	//if (!name || name === ' ') {
    	   //name = "Guest";	
    	//}
    	
    	// strip tags
    	name = name.replace(/(<([^>]+)>)/ig,"");
    	
    	// display name on page
    	//$("#name-area").html("You are: <span>" + name + "</span>");
    	
    	// kick off chat
    	$(function() {
    	
    		chat.getState(); 
    		 
    		 // watch textarea for key presses
             $("#sendie").keydown(function(event) {  
             
                 var key = event.which;  
           
                 //all keys including return.  
                 if (key >= 33) {
                   
                     var maxLength = $(this).attr("maxlength");
                     var length = this.value.length;  
                     
                     // don't allow new content if length is maxed out
                     if (length >= maxLength) {  
                         event.preventDefault();  
                     }  
                  }  
    		 																																																});
    		 // watch textarea for release of key press
    		 $('#sendie').keyup(function(e) {	
    		 					 
    			  if (e.keyCode == 13) { 
    			  
                    var text = $(this).val();
    				var maxLength = $(this).attr("maxlength");  
                    var length = text.length; 
                     
                    // send 
                    if (length <= maxLength + 1) { 
                     
    			        chat.send(text, name);	
    			        $(this).val("");
    			        
                    } else {
                    
    					$(this).val(text.substring(0, maxLength));
    					
    				}	
    				
    				
    			  }
             });
            
    	});
        
        var chatInterval = setInterval('chat.update()', 1000);
	
	$('#close-chat a').click(function() {
                clearInterval(chatInterval);
		$('#page-wrap').fadeOut('fast');	
	});
	
	$('#page-wrap').hover(function() {
		if ($('#close-chat').css('display') == 'none') {
			$('#close-chat').fadeIn('fast');
		}
		//document.getElementById("sendie").select();
                //document.getElementById("sendie").value = "";
                $('#sendie').text("");
                $('#sendie').select();
	}, function() {
            $('#sendie').text("Say Something!");
            $('#sendie').blur();
            $('#close-chat').fadeOut('fast');
        });
	*/
                
	//Tooltips
	$('.left, .right').tipTip({maxWidth: 'auto', fadeIn: 200, fadeOut: 150, delay: 0});
	$('#events-navigation > li').children('a').tipTip({defaultPosition: 'left', edgeOffset: 10, maxWidth: 'auto', fadeIn: 200, fadeOut: 150, delay: 500});
	
	//Get first element of #news list, display it.
	function removeFirst() {
	    first = $("#news li:first").text();             //text inside the li = news
	    $.jGrowl(first, {
		life: 2000,
		glue: "before",
		cloaser: false,
		speed: 500,
		
		close: function(e,m,o) {
			newsItem++;
			if (newsItem == numNews) {
				disableUpdates();
			}
		}
	    });
	    $("#news li:first").remove();                   //remove the first element
	    addLast(first);
	}

	//Shift the first element to the bottom of the list and display the next element.
	function addLast(first) {
	    last = "<li style='display:none;'>" + first + "</li>";
	    $("#news").append(last);                    
	}
	
	//Disables updates
	function disableUpdates() {
		updatesDisabled = true;
		clearInterval(updateInterval);
	}
	
	//Run this every 5 seconds
	if (!updatesDisabled) {
		updateInterval = setInterval(removeFirst, 8000);
	}
			
	//End News Ticker
	
	//Hover effect for the links
	$('#footer-nav a').hover(function() {
			$(this).stop(true, true).fadeTo('slow', 1.0);
		}, function() {
			$(this).stop(true, true).fadeTo('slow', 0.4);
	});
	
	//Top Panel
	
	// Expand Panel
	$("#open").click(function(){
		$('#panel').animate({'height': 320}, 1500, 'easeOutElastic');
		$('#panel .content').show();
		$('#toppanel').css('z-index', '250');
	
	});	
	
	// Collapse Panel
	$("#close").click(function(){
		$('#panel').animate({'height': 15}, 1000, 'easeOutBounce');
		$('#toppanel').css('z-index', '151').fadeTo("fast", 1);	
	});		
	
	// Switch buttons from "Log In | Register" to "Close Panel" on click
	$("#toggle a").click(function () {
		$("#toggle a").toggle();
	});
        
	//End Top Panel
	
	//The features slideshow

	//The main screen.
	
	$('#main-wrapper').click(function() {
		$(this).children('img').animate({'bottom': 800}, {duration: 300}, 'easeOutCubic').fadeOut('fast');
		$('#links-wrapper').stop(false, true).show();
		showGlasses();
	});
	
	
	//The sparks
	var mysrc = 'flash/sparks.swf';
	
	$('.sparks').flash({
		src: mysrc,
		width: 200,
		height: 120,
		wmode: 'transparent',
		quality: 'medium'},
		{ update: false }
	);
	
	//The Glasses
	
	var config = {    
		sensitivity: 2, // number = sensitivity threshold (must be 1 or higher)    
		interval: 100, // number = milliseconds for onMouseOver polling interval    
		over: hmouseover, // function = onMouseOver callback (REQUIRED)    
		timeout: 100, // number = milliseconds delay before onMouseOut    
		out: hmouseout // function = onMouseOut callback (REQUIRED)    
	};
	
	function hmouseover() {
		left = Math.round($(this).offset().left - $(this).parent().parent().offset().left);
		if (!clicked) {
			$(this).parent().siblings().stop(false, true).fadeTo(800, 0.05);
			$(this).stop(false, true).animate({paddingTop: '10'}, 400, function() {
				$('.sparks').css({'left': left, 'visibility': 'visible'});
			});
			$(this).siblings('.tip').stop(false, true).animate({bottom: 80, opacity: 1.0}, 400);
			$(this).siblings('.tip-reflection').stop(false, true).animate({opacity: 1.0}, 400);
			$(this).bind('click', {id: $(this).parent('div').attr('id')}, function(event) {
				clickGlass(event.data.id);
			});
		}
	}
	
	function hmouseout() {
		if (!clicked) {
			$('.sparks').css('visibility', 'hidden');
			$(this).parent().siblings().stop(false, true).fadeTo(400, 1.0);
			$(this).stop(false, true).animate({paddingTop: '0'}, 400);
			$(this).siblings('.tip').stop(false, true).animate({bottom: 65, opacity: 0}, 400);
			$(this).siblings('.tip-reflection').stop(false, true).animate({opacity: 0}, 400);
			$(this).unbind('click');
		}
	}
	
	$('.links').children('img').hoverIntent(config);
	
	$('#workshop-categories .back-home, #event-categories .back-home, #special-categories .back-home, #pick-cat .back-home').click(function() {
		$('#links-wrapper').animate({width: '930px'}, 400);
		showGlasses();
		$('#pick-cat, #event-categories, #coming-soon, #workshop-categories, #workshops-top-navigation, .category-text, #special-categories').fadeOut(400);
                $('.category-event-list, #workshops-list, #specials-list').find('a').removeClass('selected');
	});
        
        $('#coming-soon .back-home').click(function() {
            $("#coming-soon").fadeOut(400, function() {
                $("body").animate({ backgroundColor: "white" }, 800, function() {
                    $('#links-wrapper').animate({width: '930px'}, 10, function() {
                        showGlasses();
                    });
                });
            });
        });
        
        $("#coming-soon a").hover(function() {
            $("#coming-soon a").fadeTo('slow', 1);
        }, function() {
            $("#coming-soon a").fadeTo('slow', 0.6);
        });
	
	function clickGlass(id) {
		clicked = true;
		disableUpdates();
		if (closed == false) {
			closed = true;
			var divID = "#" + id;
			$('.sparks').stop(true, true).css('visibility', 'hidden');
			$('.links').not(divID).stop(false, true).animate({width: '0', opacity: '0'}, 600, 'easeOutCubic', function() {
				$(divID).children('img').animate({paddingTop: '0'}, 500);
			});
			$('#links-wrapper').animate({width: 270}, 1000, function() {
				if (divID == "#events-link") {
					navID = "#events-navigation";
				}
				else if (divID == "#specials-link") {
					navID = "";
				}
				else if (divID == "#nites-link") {
					navID = "";
				}
				else if (divID == "#workshops-link") {
					navID = "";
				}
                                
				if (navID) showNav(navID);
                                
				if (id=="events-link") {
					$('#pick-cat').fadeIn(500);
				} else if (id=="workshops-link") {
                                        $('#workshop-categories, #workshops-list, #workshops-main').fadeIn(500);
                                } else if (id=="specials-link") {
                                        $('#special-categories, #specials-list, #specials-main').fadeIn(500);
                                } else if (id=="nites-link") {
					showNites(divID);
				}
			});
		}
	}
	
	function showGlasses() {
		closed = false;
		clicked = false;
		$('.tip').show().fadeTo(10, 0);
		$('.sparks').css('visibility', 'hidden');
		$('#events-navigation').children('li').children('a').css('marginLeft','60px');
		$('#events-navigation').hide();
		$('.tip-reflection').show().fadeTo(10, 0);
		$('.links').stop(true, true).animate({width: '225px'}, 600, 'easeOutCubic');
		$('.links').animate({opacity: '1'}, 1000, 'easeOutCubic');
	}
        
        function showNites(divID) {
            $("body").animate({ backgroundColor: "black" }, 600, function() {
                $("#coming-soon").fadeIn(800);
            });
            left = Math.round($(divID).offset().left - $(divID).parent().parent().offset().left);
            $('.sparks').css({'left': left, 'visibility': 'visible'});
            setTimeout("$('.sparks').css('visibility', 'hidden')", 8000);
        }

	//Categories
	
	 /* Navigation */
	function showNav(navID) {
		$(navID).show();
		if ($(navID)) {
			var nav_resting_width = "56px";
			var nav_hover_width = "0px";
			var delay = 400;
		
			$(navID + ' > li').each(function(e) {
				$(this).hover(function() {
					$('a', this).stop().animate({marginLeft:nav_hover_width}, 200);
				}, function () {
					$('a', this).stop().animate({marginLeft:nav_resting_width}, 200);
				});
			});
		 }
		
		$(navID + ' > li').each(function(e) {
			$('a', this)
			.fadeTo(delay, .8)
			.animate({marginLeft:nav_hover_width}, 200)
			.animate({marginLeft:nav_resting_width}, 200);
			delay += 100;
		});
	}
	
	$('#events-navigation, #cat-list h2').find('a').click(function() {
		var catID = '#' + $(this).parent().attr('class');
		var catListID = catID + "-list";
		
		$('#pick-cat').hide('slow');
		
		$('#event-categories').show();
		$('.category-text').not(catID).hide();
		$('.category-event-list').not(catListID).hide();
		
		$('.category-event-list').find('a').removeClass('selected');
		$('#events-top-navigation').hide();
		
		if (!($(catID).children('h1').html())) {
			$(catID).children('h1').html($(this).parent().attr('class'));						
		}
		
		$(catID).fadeIn('slow');
		$(catListID).show('fast');
	});
	
	$("#cat-list h2 a").hover(function() {
		var catClass = $(this).parent().attr('class');
		$(this).animate({'paddingLeft': '15px'}, 200);
		$('#events-navigation .' + catClass + ' a').stop().animate({marginLeft:'0px'}, 200);
	}, function() {
		var catClass = $(this).parent().attr('class');
		$('#events-navigation .' + catClass + ' a').stop().animate({marginLeft:'56px'}, 200);
		$(this).animate({'paddingLeft': '0px'}, 200);
	});
	
	//Events
					
	$('#event-categories .category-event-list').find('a').click(function() {
		$(this).addClass('selected');
		$('.category-event-list').find('a').not(this).removeClass('selected');
		
		$('#events-top-navigation').show('fast');
		
		var eventID = '#' + $(this).html().split(' ').join('').split('.').join('').toLowerCase();
		$('.category-text').not(eventID).hide();
		$(eventID).fadeIn('slow');
	});
	
        $('#events-top-navigation ul li a').click(function() {
        var topNavItem = $(this).html().toLowerCase();	//Rules, Contact or Register
        var eventID = $('.selected').html().split(' ').join('').split('.').join('').toLowerCase();
        var displayID = '#' + eventID + '-' + topNavItem;
        if(topNavItem!="register" || eventID == "searock")
        {
            $('.category-text').not(displayID).hide();
            $(displayID).fadeIn('slow');
        }
        else
        {
            if(getuserdata("login_status")=="false")
            {
                 $($('#event-register-box')).html("");
                 $('.category-text').not($('#event-register-box')).hide();
                 $($('#event-register-box')).html("<p>You'll have to login to register!</p>");
                 $($('#event-register-box')).fadeIn('slow');
                 loginpop();
            }
            else
            {
                var event = $('.selected').text();
                var urltext="event_registration.php?event="+event;
                $.jGrowl("Registering Event: " + event);
                htmlobj=$.ajax({url:urltext,async:false});
                if(htmlobj.responseText=="already_registered")
                {
                         $('.category-text').not($('#event-register-box')).hide();
                         $('#event-register-box').html("<p>You have already registered for this event.</p><p><a id='unregister' href='javascript:void(0)'>Unregister</a></p>");
                         $('#event-register-box').fadeIn('slow');
                }
                else if(htmlobj.responseText=="registration_successful")
                {
                        $('.category-text').not($('#event-register-box')).hide();
                        $($('#event-register-box')).html("<p>Thank you for registering for </p><h2>"+event+". (<a id='unregister' href='javascript:void(0)'> Unregister </a>)</h2><h2>Your Events:</h1>"+getevents());
                        $($('#event-register-box')).fadeIn('slow');
                        $("#User-Info").html(logged_in_message);
                }
                else
                {
                        $('.category-text').not($('#event-register-box')).hide();
                        $($('#event-register-box')).html("<p>There was a problem with your Registration.</p>");
                        $($('#event-register-box')).fadeIn('slow');
                }
            }
        }
        $('#unregister').click(function(){
                var event = $('.selected').text();
                var urltext="unregister.php?event="+event;
                $.jGrowl("Unregistering event: " + event);
                
                htmlobj=$.ajax( {url:urltext, async:false} );
                
                if(htmlobj.responseText=="successfully_unregistered")
                {
                    $($('#event-register-box')).html("");
                    $('.category-text').not($('#event-register-box')).hide();
                    $($('#event-register-box')).html("<p>Successfully unregistered.</p>");
                    $($('#event-register-box')).fadeIn('slow');
                    $("#User-Info").html(logged_in_message());
                }
                else if(htmlobj.responseText=="not_logged_in")
                {
                    loginpop();
                }
        });

    });
	
        //Workshops
        
        $('#workshops-list').find('a').click(function() {
		$(this).addClass('selected');
		$('#workshops-list').find('a').not(this).removeClass('selected');
		
		$('#workshops-top-navigation').show('fast');
		
		var workshopID = '#' + $(this).html().split(' ').join('').split('&amp;').join('').split("\'").join('').toLowerCase();
                
		$('.category-text').not(workshopID).hide();
		$(workshopID).fadeIn('slow');
	});
	
	$('#workshops-top-navigation ul li a').click(function() {
		var topNavItem = $(this).html().toLowerCase();	//Rules, Contact or Register
		var eventID = $('.selected').html().split(' ').join('').split('.').join('').split('&amp;').join('').split("\'").join('').toLowerCase();
		var displayID = '#' + eventID + '-' + topNavItem;
		                
		$('.category-text').not(displayID).hide();
		$(displayID).fadeIn('slow');
	});
        
        //Specials
        
        $('#specials-list ul li a').click(function() {
		$(this).addClass('selected');
		$('#specials-list ul li a').not(this).removeClass('selected');		
		var specialID = '#' + $(this).html().split(' ').join('').split('&amp;').join('').split("\'").join('').toLowerCase();
		$('.category-text').not(specialID).hide();
		$(specialID).fadeIn('slow');
	});
				
	//The Contact Link
	$('#contact-link').click(function() {
		/*if ($('#contact-box').css('display') == 'none') {
			$('#contact-box').fadeIn('slow');
		}*/
                $('#footer-nav').animate({'height': 470, 'opacity': 0.95}, 1500, 'easeOutElastic');
		$('.bottom-content').not('#contact-us').fadeOut("fast");
		$('#footer-nav').css('z-index', '250');
                //$('#sponsors').css('bottom', '-300px');
		$('#contact-us').fadeIn("fast");
		$('#close-panel').show('fast');
	});
	
	$('#contacts-accordion').find('a').click(function() {
		var contactID = '#' + $(this).attr('class');
		$('.details').not(contactID).hide();
							
		if (!($(contactID).children('h3').html())) {
			$(contactID).children('h3').html($(this).html());						
		}
		$(contactID).fadeIn('slow');
	});
	
        //The Sponsors Link
        /*
	$('#sponsors-link').click(function() {
		$('.bottom-content').not('#sponsors').hide();
                $('#sponsors').css('bottom', '0px');
		$('#footer-nav').animate({'height': 370, 'opacity': 0.95}, 1500, 'easeOutElastic');
		$('#footer-nav').css('z-index', '250');
                $('#close-panel').show('fast');
	});
	
	$('#contacts-accordion').find('a').click(function() {
		var contactID = '#' + $(this).attr('class');
		$('.details').not(contactID).hide();
							
		if (!($(contactID).children('h3').html())) {
			$(contactID).children('h3').html($(this).html());						
		}
		$(contactID).fadeIn('slow');
	});*/
        
	//The login link
	
	var EmailListOne, number;
	var Emails = new Array();
	
	$('#login-link').click(function() {
			/*if ($('#contact-box').css('display') == 'none') {
				$('#contact-box').fadeIn('slow');
			}*/
			loginpop();
	});
        
        var focussed_id; //ID of the focussed date field
        
        //Accomodation Form
        $("#arrival_date, #departure_date").focus(function() {
            var bottom = $(this).offset().top - 2 * $("#datepicker").height();
            var left = $(this).offset().left;
            focussed_id = "#" + $(this).attr('id');
            $("#datepicker").css({'top': top, 'left': left});
            $("#datepicker").fadeIn("fast");
        });
        
        $("#arrival_date, #departure_date").blur(function() {
            $("#datepicker").fadeOut("fast");
        });
        
        var arrival_date = "";
        var departure_date = "";
        var validated_accomodation = true;
        
        $("#datepicker a").click(function() {
            var date = $(this).html();
            
            if (focussed_id == "#arrival_date") {
                if (date == "17") {
                    $("#accomodation-form .notification").html("Rejected selected date range.");
                    return;
                }
                if (!(isNaN(departure_date))) {
                    if (parseInt(departure_date) < parseInt(date)) {
                        $("#accomodation-form .notification").html("Rejected selected date range.");
                        return;
                    }
                }
                $(focussed_id).siblings("label").html("");
                $("#accomodation-form .notification").html("");
                $(focussed_id).val("October " + date + ", 2010");
                arrival_date = $("#arrival_date").val().split(" ")[1].split(",")[0];
            }
            
            else {
                if (date == "13") {
                    $("#accomodation-form .notification").html("Rejected selected date range.");
                    return;
                }
                if (!(isNaN(arrival_date))) {
                    if (parseInt(arrival_date) > parseInt(date)) {
                        $("#accomodation-form .notification").html("Rejected selected date range.");
                        return;
                    }
                }
                $(focussed_id).siblings("label").html("");
                $("#accomodation-form .notification").html("");
                $(focussed_id).val("October " + date + ", 2010");
                departure_date = $("#departure_date").val().split(" ")[1].split(",")[0];
            }
        });
        
        function validateNumbers(val) {
            if (isNaN(val)) {
                validated_accomodation = false;
                $("#accomodation-form .notification").html("We require positive integral numbers.");
            }
        }
        
        function checkBlanks(){
            if ($("#departure_date").val() == "" || $("#arrival_date").val() == "" || $("#num_boys").val() == "" || $("#num_girls").val() == "") {
                $("#accomodation-form .notification").html("You've missed a few fields.");
                validated_accomodation = false;
            }
        }
        
        var uploaded = false;
        var register_clickable = true;
        
        $("#acco-button").click(function() {
            if (!register_clickable) return;
            
            validated_accomodation = true;
            checkBlanks();
            validateNumbers($("#num_boys").val());
            validateNumbers($("#num_girls").val());
            if (!uploaded) {
                $("#accomodation-form .notification").html("You've not uploaded your travel proof.");
                return;
            }
            if (validated_accomodation) {
                $("#accomodation-form .notification").html("Give us a few seconds...");
                
                departure_date = $("#departure_date").val().split(" ")[1].split(",")[0];
                arrival_date = $("#arrival_date").val().split(" ")[1].split(",")[0];

                //get vars
                var boys = $("#num_boys").val();
                var girls = $("#num_girls").val();

                //url for get request
                var urltext2="accomodation_registration.php?boys="+boys+"&girls="+girls+"&arrival="+arrival_date+"&depart="+departure_date;
                htmlobj=$.ajax({url:urltext2,async:false,success:function(){}});

                //responses : possible four as follows
                if(htmlobj.responseText=="registration_successful"){
                    $("#accomodation-form .notification").html("You've been added to the accommodation waitlist.");

                }
                else if(htmlobj.responseText=="not_registered")
                {
                        $("#accomodation-form .notification").html("Travel proof is required.");
                }
                else if(htmlobj.responseText=="already_registered")
                {
                        $("#accomodation-form .notification").html("You've already registered for accommodation.");
                }
                else $("#accomodation-form .notification").html("Network Error.");

                /*Marcus says: date of registration being added thru php*/
                /*
                    @Marcus, Smarth: Add in the code for the following here:
                        1. Add the user to the accomodation table connected with his regular details + the details from this form: 
                            a. Number of boys
                            b. Number of girls
                            c. Departure date
                            d. Arrival date
                            e. Date of registration
                        2. After it's done, output this in success:
                            $("#accomodation-form .notification").html("You've been added to the accommodation waitlist. We'll get in touch with you soon!");
                */
           }
        });
        
        $("#instructions-button").click(function() {
           $("#accomodation").hide();
           $(".acco-instructions").not("#main").hide();
           $("#accomodation-instructions, #main").fadeIn("fast");
        });
        
        $("#instructions-close-button").click(function() {
           $("#accomodation").fadeIn("fast");
           $("#accomodation-instructions").hide();
        });
        
        $("#acco-top-tabs a").click(function() {
           var tabID = "#" + $(this).attr('id').split("-")[0];
           $(".acco-instructions").not(tabID).hide();
           $(tabID).fadeIn("fast");
        });
        
	//Login/Register Forms
	$("#login-register label").inFieldLabels();
        $("#accomodation-form label").inFieldLabels();
        
        if(getuserdata("login_status")=="false")
	{
		logged_out_pop();
	}
	else
	{
		logged_in_pop();
	}
		
	$("#register-button").click(function(){
		var email = $("#register-email").val();
		var password = $("#register-password").val();
                var confirm_password = $("#register-confirm-password").val();
		var mobile = $("#mobile").val().replace(/^0+/, '');
		var name = $("#name").val();
		var college = $("#college").val();
					
		var urltext="register.php?email="+email+"&password="+password+"&mobile="+mobile+"&college="+college+"&name="+name+"&confirm_password="+confirm_password;
	
		$("#register-form .notification").html("We're verifying your details, give us a few seconds.");
		htmlobj=$.ajax({url:urltext,async:false,success:function(){}});
		

		if(htmlobj.responseText=="mailsent"){
/*			$("#register-form").css("display","none");
			$("#Email-Notifier").html("");
			$("#Email-Notifier").css("display","none");*/
			$("#register-form .notification").html("We've sent you an e-mail to confirm your registration. Check your inbox!" );
			
			// clear all the fields
			$("#register-form input:text, #register-form input:password").each(function() {
				$(this).val(null);
				$(this).focus();
			});
//			$("#register-form form label").inFieldLabels();			
		}
		else {
			//$("#register-form").html(htmlobj.responseText);
			$("#register-form .notification").text(htmlobj.responseText);
		}
		$("#register-form #name").focus();
	});
        
        $("#login-button").click(function(){	
		var login_email = $("#login-email").val();
		var login_password = $("#login-password").val();
		var urltext="login.php?email="+login_email+"&password="+login_password;
		
		$("#login-form .notification").html("Logging In...").fadeTo(0.93);
		htmlobj=$.ajax({ url:urltext, async:false });
	
		if(htmlobj.responseText=="logged_in"){
                    logged_in = true;
                    $("#login-form .notification").hide();
                    $('#footer-nav').animate({'height': 567, 'opacity': 0.95}, 1500, 'easeOutElastic');
                    logged_in_pop();
		}
		else {
		    $("#login-form .notification").html(htmlobj.responseText);  
		}
	});
        
        $("#logout").click(function(){
		var urltext="logout.php";
                logged_in = false;
		htmlobj=$.ajax({url:urltext,async:false });
                $('#footer-nav').animate({'height': 415, 'opacity': 0.95}, 1500, 'easeOutElastic');
                logged_out_pop();
	});
	
	$('#close-panel').click(function() {
		$('#footer-nav').animate({'height': 40, 'opacity': 1.0}, 1000, 'easeOutBounce');
		$('#footer-nav').css('z-index', '150');
                //$('#sponsors').css('bottom', '-300px');
                $('.bottom-content').fadeOut('fast');
		$('#close-panel').hide('fast');
	});
                
        function loginpop(){
                if (logged_in) footer_height = 567;
                else footer_height = 415;
                $('#footer-nav').animate({'height': footer_height, 'opacity': 0.95}, 1500, 'easeOutElastic');
                $('.bottom-content').not('#login-register').fadeOut("fast");
                $('#footer-nav').css('z-index', '250');
                //$('#sponsors').css('bottom', '-300px');
                $('#login-register').fadeIn("fast");
                if (logged_in) $('#accomodation').fadeIn("fast");
                $('#close-panel').show('fast');
	}
        
        function getuserdata(action){
		var urltext="userdata.php?action="+action;
                $("#User-Info").html("Loading user info...");
		htmlobj=$.ajax({url:urltext,async:false, success: function() { $("#User-Info").html(""); }});
		return htmlobj.responseText;
	}
        
        function logged_in_message() {
            return ("<br/><h1>Welcome, <b>"+getuserdata("name").split(" ")[0]+"</b></h1><p>This control panel will show you the events you have registered for, as well as your accommodation registration options. To register/unregister yourself for an event, browse over to the individual event page and click on the register/unregister link.</p><h1>Registered Events</h1>"+getevents());
        }
        
        function logged_in_pop()
        {
                logged_in = true;
                $("#login-form").css("display","none");
                $("#register-form").css("display","none");
		$("#User-Info").html(logged_in_message());
		$("#User-Info").css("display","block");
                $("#accomodation").fadeIn("fast");
		$("#logout").css("display","block");
                createUploader();
        }
        
        function logged_out_pop() {
                logged_in = false
                $("#login-form").css("display","block");
		$("#logout").css("display","none");
		$("#User-Info").css("display","none");
		$("#User-Info").html("");
                $("#accomodation").css("display","none");
		$("#register-form").css("display","block");
        }
        
        function getevents() {
                var urltext="events_listing.php";
		htmlobj=$.ajax({url:urltext,async:false});
		return htmlobj.responseText;
        }
        
       function createUploader(){
            var uploader = new qq.FileUploader({
                element: document.getElementById("file-uploader"),
                allowedExtensions: ['jpg', 'jpeg'],
                sizeLimit: 1048576,
                onSubmit: function(id, fileName){ $("#accomodation-form .notification").html("Uploading Travel Proof..."); register_clickable = false; },
                onComplete: function(id, fileName, responseJSON){  $("#accomodation-form .notification").html("Upload successful."); uploaded = true; register_clickable = true; },
                showMessage: function(message){
                    $("#accomodation-form .notification").html(message);
                },
                action: 'upload.php'
            });
        }
        

});
