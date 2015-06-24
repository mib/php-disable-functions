// Hide submit buttons, unhide "toggle all" checkbox
document.getElementById('update-1').style.display = 'none';
document.getElementById('update-2').style.display = 'none';
document.getElementById('thead-all').style.display = '';

// Unhide "toggle all" checkboxes in group headers
var elements = document.getElementById('functions').getElementsByTagName('input');
for(var i = 0; i < elements.length; ++i) {
	if(!elements[i].value) {
		elements[i].style.display = '';
	}
}


function toggleGroup(group, state) {
	toggle('group-' + group, state);
}

function toggleAll(state) {
	toggle('functions', state);
}

function toggle(containerId, state) {
	var elements = getInputsIn(containerId);
	checkInputs(elements, state);
	updateList();
	updateAll();
}

function toggleGroupHeader(group) {
	updateHeader('header-' + group, 'group-' + group);
	updateList();
	updateAll();
}

function updateList() {
	var elements = getInputsIn('functions');
	
	var disableFunctions = [];
	
	for(var i = 0; i < elements.length; ++i) {
		if(elements[i].checked && elements[i].value) {
			disableFunctions.push(elements[i].value);
		}
	}
	
	document.getElementById('disable_functions').value = 'disable_functions = ' + disableFunctions.join(',');
}

function updateAll() {
	updateHeader('all', 'functions');
}

function updateHeader(groupCheckboxId, containerId) {
	var elements = getInputsIn(containerId);
	
	var allChecked = true;
	
	for(var i = 0; i < elements.length; ++i) {
		if(!elements[i].checked && elements[i].value) {
			allChecked = false;
			break;
		}
	}
	
	document.getElementById(groupCheckboxId).checked = allChecked;
}

function checkInputs(elements, state) {
	for(var i = 0; i < elements.length; ++i) {
		elements[i].checked = state;
	}
}

function getInputsIn(containerId) {
	return document.getElementById(containerId).getElementsByTagName('input');
}
