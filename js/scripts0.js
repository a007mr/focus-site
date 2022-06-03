var popupBtns = document.querySelectorAll('.modal__btn');
var popupClose = document.querySelector('.modal-close');
var modal = document.querySelector('.modal-lp');

// Product Images on the website
var featureButtons = document.querySelectorAll('.feature__btn');
var okrActiveBtn = document.querySelector('.feature__btn__active-okr');
var imageOkr = document.getElementById('image__okr');
var imageTask = document.getElementById('image__task');
var imageMeeting = document.getElementById('image__meeting');
var imageCulture = document.getElementById('image__culture');

var okrMapClass = 'feature__btn__okr-1';
var okrUpdateClass = 'feature__btn__okr-2';
var okrTrackClass = 'feature__btn__okr-3';
var taskListClass = 'feature__btn__tasks-1';
var taskLinkClass = 'feature__btn__tasks-2';
var checkinsClass = 'feature__btn__meeting-1';
var updatesClass = 'feature__btn__meeting-2';
var oneOnOneClass = 'feature__btn__meeting-3';
var icebreskersClass = 'feature__btn__culture-1';
var moodClass = 'feature__btn__culture-2';
var kudosClass = 'feature__btn__culture-3';

// Pricing buttons
var toggleBtns = document.querySelectorAll('.btn__toggle');
var focusProductBtn = document.querySelector('.btn__toggle__focus');
var standupsProductBtn = document.querySelector('.btn__toggle__standups');
var focusPlans = document.querySelector('.plans__focus');
var standupsPlans = document.querySelector('.plans__standups');

var monthlyPriceClass = 'btn__toggle__month';
var yearlyPriceClass = 'btn__toggle__year';
var focusProductClass = 'btn__toggle__focus';
var standupsProductClass = 'btn__toggle__standups';

// Event Listeners
if (popupClose) {
	popupClose.addEventListener('click', hideModal);
}

popupBtns.forEach(b => {
	b.addEventListener('click', showModal);
})

featureButtons.forEach(b => {
	b.addEventListener('click', switchImage);
})

toggleBtns.forEach(b => {
	b.addEventListener('click', switchPlan);
})


// Pricing
// window.onload = function () {
// 	// yearlyPriceBtn.classList.add("btn__toggle-active");

// 	// Баг: в первые секунды загрузки, если кликнуть на Meetings & Culture, то они пропадут
// 	// так как здесь отработает это: 
// 	if (standupsPlans) {
// 		standupsPlans.style.display = 'none';	
// 	}

// };


function switchPlan(e) {
 	event.preventDefault();

 	var clickedBtn = e.target;

 	// console.log('=== e.target', e.target);
 	// console.log('=== clickedBtn', clickedBtn);

	var productActiveBtn = document.querySelector('.btn__toggle-active-product');
	var timeActiveBtn = document.querySelector('.btn__toggle-active-time');



	var monthlyPlanFocus = document.querySelectorAll('.price-monthly-focus');
	var yearlyPlanFocus = document.querySelectorAll('.price-yearly-focus');
	var monthlyPlanStandups = document.querySelectorAll('.price-monthly-standups');
	var yearlyPlanStandups = document.querySelectorAll('.price-yearly-standups');

 	// Monthly click
 	if (clickedBtn.classList.contains(monthlyPriceClass)) {

 	// console.log('=== productActiveBtn.classList.contains(focusProductClass))', productActiveBtn.classList.contains(focusProductClass));

 		if (productActiveBtn.classList.contains(focusProductClass)) {
 			yearlyPlanFocus.forEach(c => {
				c.classList.add('display-none');
			})
			monthlyPlanFocus.forEach(c => {
				c.classList.remove('display-none');
			})

 		} else {

 			// Standups logic
 			yearlyPlanStandups.forEach(c => {
				c.classList.add('display-none');
			})
			monthlyPlanStandups.forEach(c => {
				c.classList.remove('display-none');
			})
 		}	


 		timeActiveBtn.classList.remove(`btn__toggle-active-time`);
		clickedBtn.classList.add(`btn__toggle-active-time`);

 		// console.log('=== yearlyPriceBtn', yearlyPriceBtn);
 		// console.log('=== monthlyPriceBtn', monthlyPriceBtn);
 		// console.log('=== timeActiveBtn AFTER', timeActiveBtn);
 		// console.log('=== clickedBtn AFTER', clickedBtn);

 	} else if (clickedBtn.classList.contains(yearlyPriceClass)) {
 		// If it's yearly click

 		if (productActiveBtn.classList.contains(focusProductClass)) {
 			monthlyPlanFocus.forEach(c => {
				c.classList.add('display-none');
			})
			yearlyPlanFocus.forEach(c => {
				c.classList.remove('display-none');
			})
 			// yearlyPlanFocus.classList.add('display-none');
 			// monthlyPlanFocus.classList.remove('display-none');
 		} else {
 			// Standups logic
 			monthlyPlanStandups.forEach(c => {
				c.classList.add('display-none');
			})
			yearlyPlanStandups.forEach(c => {
				c.classList.remove('display-none');
			})
 		}	

 		timeActiveBtn.classList.remove(`btn__toggle-active-time`);
		clickedBtn.classList.add(`btn__toggle-active-time`);

 	} else if (clickedBtn.classList.contains(focusProductClass)) {

 		// console.log('=== standupsPlans BEFORE', standupsPlans);
 		// console.log('=== clickedBtn.classList.contains(focusProductClass)', clickedBtn.classList.contains(focusProductClass));

 		// If it's monthly plans
 		if (timeActiveBtn.classList.contains(monthlyPriceClass)) {
 			// standupsPlans.classList.add('display-none');
 			yearlyPlanFocus.forEach(c => {
				// c.style.display = 'none';
				c.classList.add('display-none');

			})
			monthlyPlanFocus.forEach(c => {
				// c.style.display = 'block';
				c.classList.remove('display-none');

			})

 		} else {
 			// if it's yearly plans 
			monthlyPlanFocus.forEach(c => {
				// c.style.display = 'none';
				c.classList.add('display-none');

			})
 			yearlyPlanFocus.forEach(c => {
				// c.style.display = 'block';
				c.classList.remove('display-none');

			})
 		}


 		productActiveBtn.classList.remove('btn__toggle-active-product');
 		focusProductBtn.classList.add('btn__toggle-active-product');

		standupsPlans.style.display = 'none';
		focusPlans.style.display = 'flex';

		// console.log('=== standupsPlans AFTER', standupsPlans);
		// console.log('=== focusPlans AFTER', focusPlans);


 	} else if (clickedBtn.classList.contains(standupsProductClass)) {
 		
 		// console.log('=== clickedBtn.classList.contains(standupsProductClass)', clickedBtn.classList.contains(standupsProductClass));
 		// console.log('=== timeActiveBtn.classList.contains(monthlyPriceClass)', timeActiveBtn.classList.contains(monthlyPriceClass));
 		// console.log('=== timeActiveBtn', timeActiveBtn);

		// If it's monthly plans
 		if (timeActiveBtn.classList.contains(monthlyPriceClass)) {
 			yearlyPlanStandups.forEach(c => {
				// c.style.display = 'none';
				c.classList.add('display-none');
			})
			monthlyPlanStandups.forEach(c => {
				// c.style.display = 'none';
				c.classList.remove('display-none');
			})

 		} else {
 			// if it's yearly plans 

			monthlyPlanStandups.forEach(c => {
				// c.style.display = 'none';
				c.classList.add('display-none');
			})
 			yearlyPlanStandups.forEach(c => {
				// c.style.display = 'block';
				c.classList.remove('display-none');
			})
 		}

 		if (standupsPlans.classList.contains('display-none')) {
 			standupsPlans.classList.remove('display-none');
 		}

 		productActiveBtn.classList.remove('btn__toggle-active-product');
 		standupsProductBtn.classList.add('btn__toggle-active-product');

		focusPlans.style.display = 'none';
		standupsPlans.style.display = 'flex';

 	}


	// if (monthlyPriceBtn.classList.contains('btn__toggle-active')) {
	// 	monthlyPriceBtn.classList.remove('btn__toggle-active');
	// 	yearlyPriceBtn.classList.add("btn__toggle-active");
	// } else {btn__toggle-active-time
	// ;	yearlyPriceBtn.classList.remove('btn__toggle-active');
	// 	monthlyPriceBtn.classList.add("btn__toggle-active");
	// }
};


// Switch feature images
function switchProductClasses(clickedBtn, activeBtn, type) {

	activeBtn.classList.remove(`feature__btn__active-${type}`);
	clickedBtn.classList.add(`feature__btn__active-${type}`);

}

function switchImage(e) {
 	e.preventDefault();

	var okrActiveBtn = document.querySelector('.feature__btn__active-okr');
	var taskActiveBtn = document.querySelector('.feature__btn__active-task');
	var meetingActiveBtn = document.querySelector('.feature__btn__active-meeting');
	var cultureActiveBtn = document.querySelector('.feature__btn__active-culture');

 	// console.log('================ЗАПУСТИЛИ switchImage ==========');
 	// console.log('========imageOkr', imageOkr);
 	// console.log('========okrMapBtn', okrMapBtn);

 	var clickedBtn = e.target;
 	var activeBtn = '';
 	var type = '';
 	// console.log('========clickedBtn', clickedBtn);
 	// console.log('========e.target', e.target);

 	if (clickedBtn.classList.contains(okrMapClass)) {
 		imageOkr.src='https://usefocus.co/img/feature/okr_tree2.png';
 		activeBtn = okrActiveBtn;
 		type = 'okr';
 	} else if (clickedBtn.classList.contains(okrUpdateClass)) {
 		imageOkr.src='https://usefocus.co/img/feature/okr_update.png';
 		activeBtn = okrActiveBtn;
 		type = 'okr';

 	} else if (clickedBtn.classList.contains(okrTrackClass)) {
 		imageOkr.src='https://usefocus.co/img/feature/okr_track.png';
 		activeBtn = okrActiveBtn;
 		type = 'okr';

 	} else if (clickedBtn.classList.contains(taskListClass)) {
 		imageTask.src='https://usefocus.co/img/feature/task_list.png';
 		activeBtn = taskActiveBtn;
 		type = 'task';

 	} else if (clickedBtn.classList.contains(taskLinkClass)) {
 		imageTask.src='https://usefocus.co/img/feature/task_link.png';
 		activeBtn = taskActiveBtn;
 		type = 'task';

 	} else if (clickedBtn.classList.contains(checkinsClass)) {
 		imageMeeting.src='https://usefocus.co/img/feature/meetings_check-ins.png';
 		activeBtn = meetingActiveBtn;
 		type = 'meeting';

 	} else if (clickedBtn.classList.contains(updatesClass)) {
 		imageMeeting.src='https://usefocus.co/img/feature/meetings_updates.png';
 		activeBtn = meetingActiveBtn;
 		type = 'meeting';

 	} else if (clickedBtn.classList.contains(oneOnOneClass)) {
 		imageMeeting.src='https://usefocus.co/img/feature/meetings_1_1.png';
 		activeBtn = meetingActiveBtn;
 		type = 'meeting';

 	} else if (clickedBtn.classList.contains(icebreskersClass)) {
 		imageCulture.src='https://usefocus.co/img/feature/culture_icebreakers.png';
 		activeBtn = cultureActiveBtn;
 		type = 'culture';

 	} else if (clickedBtn.classList.contains(moodClass)) {
 		imageCulture.src='https://usefocus.co/img/feature/culture_mood.png';
 		activeBtn = cultureActiveBtn;
 		type = 'culture';

 	} else if (clickedBtn.classList.contains(kudosClass)) {
 		imageCulture.src='https://usefocus.co/img/feature/culture_kudos.png';
 		activeBtn = cultureActiveBtn;
 		type = 'culture';

 	}     

 	switchProductClasses(clickedBtn, activeBtn, type);
};



// Show popup
function showModal(e) {
 	event.preventDefault();

	modal.style.display = 'block';
};

function hideModal(e) {
	event.preventDefault();

	modal.style.display = 'none';
};






