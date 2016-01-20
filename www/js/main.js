var appData = {
	testArr: [],
	indexActiveItem: null,
	countRightResponse: 0,
	countQuestions: 0
};

jQuery(document).ready(function(){

	// Start test
	$('#startCheck').on('click', startTest);

	// Enter checked value
	$('#enterValue').on('click', checkValue);
	$('#answer').on('keyup', function(e) {
		if (e.keyCode == 13 && e.ctrlKey) {
			checkValue();
		}
	});

	// Show help
	$('#help').on('click', function() {
		getHelp();
		checkValue();
	});
});

function startTest() {
	appData.testArr = [];
	appData.countQuestions = 0;
	appData.countRightResponse = 0;
	var responseField = $('#answer'),
		resultField = $('#result');

	getXhr();
	
	responseField.val('');
	responseField.focus();
	resultField.text('0%');
}

function getXhr() {
	var req = new XMLHttpRequest(),
		selectedTheme = $('#selectTheme option:selected').val(),
		url = 'data/' + selectedTheme + '.json';

	req.onreadystatechange = function () {
		if (req.readyState != 4) return;
		if (req.status != 200) return;

		appData.testArr = eval(req.responseText);

		showQuestion();
	}

	req.open("get", url);
	req.send(null);
}

function showQuestion() {
	var arrLength = appData.testArr.length,
		questionField = $('#question'),
		balance = $('#balance'),
		imgPreview = $('#previewQuestion'),
		srcPhoto = 'no-photo',
		questionText = null;

	if (arrLength == 0) {
		questionField.val('');
		balance.text(0);
		imgPreview.attr('src', '');
		return;
	}

	appData.indexActiveItem = Math.floor(Math.random()*arrLength);
	if ($('#lang-ru').is(':checked')) {
		questionText = 'ru_question';
		
		if ($('#previewQuestion').length > 0) {
			srcPhoto = appData.testArr[appData.indexActiveItem]['preview']||'no-photo';
		}
	} else {
		questionText = 'foreign_question';
	}

	questionField.val(appData.testArr[appData.indexActiveItem][questionText]);
	imgPreview.attr('src', 'pic/' + srcPhoto + ".jpg");
	balance.text(appData.testArr.length);
}

function checkValue() {
	var questionField = $('#question'),
		responseField = $('#answer'),
		resultField = $('#result'),
		positiveField = $('.alert-success.positive'),
		negativeField = $('.alert-danger.negative');

	if (appData.testArr.length == 0 || questionField.val() == "") return;

	var questionText = ($('#lang-ru').is(':checked')) ? 'foreign_response' : 'ru_response';
	var responseText = responseField.val();
	var nameSound = appData.testArr[appData.indexActiveItem]['sound'];
	var helpField = $('#fieldHelp');

	var regRequest = new RegExp(appData.testArr[appData.indexActiveItem][questionText], "i");

	appData.countQuestions++;

	if (regRequest.test(responseText)) {
		negativeField.removeClass('active');
		positiveField.addClass('active');

		helpField.val('');
		appData.countRightResponse++
		appData.testArr.splice(appData.indexActiveItem, 1);
	} else {
		positiveField.removeClass('active');
		negativeField.addClass('active');
		getHelp();

		console.log(responseText);
		console.log(regRequest);
	}

	var result = Math.round((appData.countRightResponse/appData.countQuestions)*100);

	resultField.text(result + "%");
	responseField.val('');
	showQuestion();
	getSound(nameSound);
}

function getSound(nameSound) {
	if ($('#sound').length == 0) return;
	var audio = document.getElementById('sound');
	audio.src = "sound/" + nameSound + ".mp3";
	audio.play();
}

function getHelp() {
	if (appData.testArr.length == 0) return;

	var helpQuestion = null,
		helpResponse = null,
		result = null;

	if ($('#lang-ru').is(':checked')) {
		helpQuestion = 'ru_question';
		helpResponse = 'foreign_question';
	} else {
		helpQuestion = 'foreign_question';
		helpResponse = 'ru_question';
	}

	result = appData.testArr[appData.indexActiveItem][helpQuestion] + ": " + appData.testArr[appData.indexActiveItem][helpResponse];

	var helpField = $('#fieldHelp');
	helpField.val(result);
}