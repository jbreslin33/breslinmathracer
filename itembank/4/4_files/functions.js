<!--var winHelp = null;
var winSupport = null;
var winLocation = null;
var winTimeFrame = null;
var winDocs = null;
var winAbout = null;
var clickCount = 0;

function preventClicks()
{
	if (++clickCount == 1)
	{
		return true;
	}
		
	return(window.confirm('You either double clicked a button or clicked two buttons on\nthis page. To override the first button you clicked with the\nsecond button, click "OK". Otherwise, click "Cancel".'));
}

// Resets a drop down to the first item
function resetDropDown(dropDownName)
{
     dropDownName.options[0].selected = true;
}

// Sets the specified dropdown to the specified value
function setDropDown(dropDownName, dropDownValue)
{
     dropDownName.options.value = dropDownValue;
}


function assignPrimary(userId)
{
	with(document.forms[0])
	for(var i=0;i<IsAssigned.length;i++)
	
	if(IsAssigned[i].value==userId)
	{
		IsAssigned[i].checked=true
		return
	}
	// exit function after marking true
	// mark true if for loop does not execute 1 record on page
	document.forms[0].IsAssigned.checked=true
}

function listByStudentOrItem(testSessionId,classId, listBy)
{
    if(listBy == 0)
        window.location.href = '/published-test/extended-response-scores.ssp?iid=&alq=F&tsi=' + testSessionId + '&cid=' + classId;
    else 
        window.location.href = '/published-test/extended-response-scores-student.ssp?sid=&alq=F&tsi=' + testSessionId + '&cid=' + classId;
}

function openWindow(winName, helpTopic)
{
	var openNew = false;
	
	switch (winName)
	{
		case 1:
			if (winHelp == null)
				openNew = true;
			else
			{
				if (winHelp.closed == false)
					winHelp.focus();
				else
					openNew = true;
			}
			
			if (openNew == true)
			{
				if (helpTopic != null)
					winHelp = window.open('/help/?topic=' + helpTopic, null, 'scrollbars=yes,resizable=yes,width=380,height=300');
				else
					winHelp = window.open('/help/', null, 'scrollbars=yes,resizable=yes,width=380,height=300');

				winHelp.focus();
			}
			
			break;

		case 2:
			if (winSupport == null)
				openNew = true;
			else
			{
				if (winSupport.closed == false)
					winSupport.focus();
				else
					openNew = true;
			}
			
			if (openNew == true)
			{	//TODO (DLiening 12/2/03): This is just a placeholder for now
				winSupport = window.open('/help.htm', null, 'scrollbars=yes,resizable=yes,width=380,height=300');
				winSupport.focus();
			}

			break;

		case 3:
			if (winLocation == null)
			{
				openNew = true;
			}
			else
			{
				if (winLocation.closed == false)
				{
					winLocation.focus();
				}
				else
				{
					openNew = true;
				}
			}
			
			if (openNew == true)
			{
			winLocation = window.open('/location/change.ssp');
			// TODO (DLiening 11/24/03): Changed to a regular window for feature development 
			//	winLocation = window.open('/location/change.ssp', null, 'scrollbars=yes,resizable=yes,width=500,height=400');

				winLocation.focus();
			}
			
			break;
			
		case 4:
			if (winTimeFrame == null)
			{
				openNew = true;
			}
			else
			{
				if (winTimeFrame.closed == false)
				{
					winTimeFrame.focus();
				}
				else
				{
					openNew = true;
				}
			}
			
			if (openNew == true)
			{
				winTimeFrame = window.open('/context/timeframe.asp', null, 'scrollbars=yes,resizable=yes,width=300,height=400');
				winTimeFrame.focus();
			}
			
			break;

		case 5:
			if (winDocs == null)
			{
				openNew = true;
			}
			else
			{
				if (winDocs.closed == false)
				{
					winDocs.focus();
				}
				else
				{
					openNew = true;
				}
			}

			if (openNew == true)
			{
				winDocs = window.open('/docs/index.asp', null, 'scrollbars=yes,resizable=yes,width=600,height=400');
				winDocs.focus();
			}
			
			break;

		case 6:
			if (winAbout == null)
			{
				openNew = true;
			}
			else
			{
				if (winAbout.closed == false)
				{
					winAbout.focus();
				}
				else
				{
					openNew = true;
				}
			}

			if (openNew == true)
			{
				winAbout = window.open('http://www.scantron.com', null, 'toolbar=1,location=1,directories=1,status=1,menubar=1,scrollbars=1,resizable=1,width=810,height=600');
				winAbout.focus();
			}
	}
}

function popUp(url)
{
	sealWin = window.open(url, 'win', 'toolbar=0,location=0,directories=0,status=1,menubar=1,scrollbars=1,resizable=1,width=500,height=450');
	self.name = 'mainWin';
}

function popUpHelpWindow(url)
{
	sealWin = window.open(url, 'win', 'toolbar=0,location=0,directories=0,status=1,menubar=1,scrollbars=1,resizable=1,width=720,height=500');
	self.name = 'mainWin';
}

function openChart(url)
{
	// MLR 20060210 - added UrlEncodePlus #8357
	chartWin = window.open(UrlEncodePlus(url), null, 'toolbar=1,location=1,directories=1,status=1,menubar=1,scrollbars=1,resizable=1,width=676,height=600');
	chartWin.moveTo(10,10);
	chartWin.resizeTo(676,600);	
	chartWin.focus();
}

function UrlEncodePlus(url)
{
    return url.replace('\+', '%2b');
}

function setSort(listName, sortName, sortOrder)
{
	with (document.forms[0])
	{
		_n.value = listName;
		_s.value = sortName;
		_o.value = sortOrder;
		_performAction('r');
		submit();
	}
}

function setPage(listName, pageNumber)
{
	with (document.forms[0])
	{
		_n.value = listName;
		_p.value = pageNumber;
		_performAction('r');
		submit();
	}
}

function _performAction(wa)
{
	document.forms[0]._PageAction.value = wa;
}

function setPageAction(action)
{
	switch(action)
	{
		case 'next':
			document.forms[0]._PageAction.value = 'n';
			break;
			
		case 'previous':
			document.forms[0]._PageAction.value = 'p';
			break;
			
		case 'cancel':
			document.forms[0]._PageAction.value = 'c';
			break;
			
		case 'okay':
			document.forms[0]._PageAction.value = 'o';
			break;
			
		case 'refresh':
			document.forms[0]._PageAction.value = 'r';
	}			
}

function nextStep()
{
	_performAction('n');
}

function previousStep()
{
	_performAction('p');
}

function cancel()
{
	_performAction('c');
}

function okay()
{
	_performAction('o');
}

function saveAndAdd()
{
	_performAction('a');
}

function refresh()
{
	_performAction('r');
}

function _keyDown(e)
{
	var keyCode = 0;
	var browserName = _getBrowserName();

	switch (browserName)
	{
		case "IE":
			keyCode = event.keyCode;
			break;
			
		case "Netscape":
		case "Firefox":
			keyCode = e.keyCode;
			
			if ((keyCode == 0) && (e.which != 0))
			{
				keyCode = e.which;
			}
			
			break;
			
		default:
			if (e.which)
			{
				keyCode = e.which;
				break;
			}
			
			if (event.keyCode)
			{
				keyCode = event.keyCode;
				break;
			}
			
			break;
	}

	with (document.forms[0])
	{	
		// NOTE: Firefox will not pass code 27 when the escape key is pressed.
		if ((_hasCancelButton.value == "yes") && (keyCode == 27))
		{
			cancel();
			submit();
			return false;
		}

//alert("browserName: " + browserName + " target: " + e.target.type);
		// If the enter key was pressed and there is a submit button for this page and either the browser is IE or
		// the enter key is not on a text field,
		// then force the enter key to call the onclick() method for the first submit button.
		if (keyCode == 13 && _hasSubmitButton.value == "yes" && 
		     (browserName == "IE" || e.target.type != "text" || (browserName == "Netscape" && clickCount == 0)) )
		{
			// To resolve an IE defect: in IE if an &lt;input&gt; button of @type="submit" is on a
			// page with only one text field, the onclick() method of the submit button does not get
			// called when the user presses the enter button to submit the page.

			// find the index of the submit button for this page.
			for (var i = 0; i < elements.length; i++)
			{
				// if the submit button for this page is found, then call its onclick() method.
				if ( elements[i].type == "submit" )
				{
//alert("enter key...clicking " + elements[i].value);
					elements[i].click();
					break;
				}
			}
			
			return false;
		}
	}
	
	return true;
}

function initializeKeyHandler()
{
	document.onkeypress = _keyDown;

	// if this is Netscape, then register the event handler
	if ((document.layers) || (navigator.vendor == "Netscape"))
	{
		document.captureEvents(Event.KEYPRESS);
	}
}

function _enterKeySubmit(e)
{
	if ((e.which == 13) || (e.which == 3))
	{
		document.forms[0].submit();
		return false;
	}
}

function _getBrowserName(e)
{
	// Determine if the browser is IE.
	if (document.all)
	{
		return "IE";
	}

	// Determine the browser based on the vendor.
	switch(navigator.vendor)
	{
		case "Netscape":
			return "Netscape";
			
		case "Firefox":
			return "Firefox";
		
		default:
			return "Unknown";
	}
}

function changeLocation(locationId)
{
	with (document.forms[0])
	{
		_PageAction.value = 'o';
		LocationId.value = locationId;
		submit();
	}
}

function setFinalizeItem(fieldValue)
{
	document.forms[0].FinalizeItem.value = fieldValue;
}

function clearSelectedIds()
{
	document.forms[0].SelectedIds.value = '';
}

function prepareForm()
{
	document.forms[0]._PageAction.value = 'o';
}

function jumpMenu(selObj, restore)
{
	eval("top.location = '" + selObj.options[selObj.selectedIndex].value + "'");
}

function toggleCheckboxes(checkboxName)
{
	with (document.forms[0])
	{
		for (var i = 0; i < elements.length; i++)
		{
			if (elements[i].type == "checkbox")
			{
				if ((checkboxName == null) || (elements[i].name == checkboxName))
				{
				    if (elements[i].value != 0) {	 // UST Global TTP# 23414: Not allowing None to select when toggle all checkboxes
				        if(!elements[i].disabled)
				            elements[i].checked = !elements[i].checked;
				    }
				}
			}
		}
	}
}



// Used for Mass Test Spoiling and Unspoiling - primarily so user doesn't loose their selections
function checkIfAnySelected(caption)
{
    var selectionMade = false;

    // set selectionMade = true if any checkbox was checked.
	with (document.forms[0])
	{
		for (var i = 0; i < elements.length; i++)
		{
			if (elements[i].type == "checkbox")
			{
				if (elements[i].checked)
				{
					selectionMade = true;
                    break;
				}
			}
		}

        if (selectionMade)
        {
            if (caption == "Spoil All")
            {
                 var results = window.confirm('Selections were made to spoil specific tests but the "Spoil All" button was clicked.\nThis operation will ignore those selections and select ALL tests for spoiling.\nClick "OK" to spoil all tests or "Cancel" to return to the selection page\nwhere you can "Spoil Selected".')
            }
            else
            {
                 var results = window.confirm('Selections were made to un-spoil specific tests but the "Un-Spoil All" button was clicked.\nThis operation will ignore those selections and select All tests for un-spoiling.\nClick "OK" to un-spoil all tests or "Cancel" to return to the selection page\nwhere you can "Un-Spoil Selected".')
            }

            if (!results)
            {
                clickCount = 0;
			    for (var i = 0; i < elements.length; i++)
			    {
				    // User selected "Cancel" so we need to restore the "Wait..." with "Spoil All" or "Un-Spoil All"
				    if ( elements[i].type == "button" && elements[i].value == "Wait..." )
				    {
					    elements[i].value = caption;
					    break;
				    }
			    }
                return;
            }
        }
        else
        {
            // If a selection wasn't made then we have to toggle checkboxes to overcome page validation
            // where at least one checkbox is checked.
            forceSetCheckboxes();
        }
        // This indicates Spoil All was selected for the stored procedure call
        setFinalizeItem('T');
        nextStep();
        submit();
    }
}

// This sets all checkboxes regardless of state (checked or unchecked) for Mass Test Spoiling
function forceSetCheckboxes()
{
	with (document.forms[0])
	{
		for (var i = 0; i < elements.length; i++)
		{
			if (elements[i].type == "checkbox")
			{
				if (!elements[i].checked)
				{
					elements[i].checked = true;
				}
			}
		}
	}
}

function toggleCheckboxesForField( selectedIdsFieldName )
{
	with (document.forms[0])
	{
/*	
var expandedIds;
var selectedIds;
var lastClickedId;
for (var i = 0; i < elements.length; i++)
{
	if (elements[i].name == "ExpandedIds")
		expandedIds = elements[i].value;
	if (elements[i].name == "Selected")
		selectedIds = elements[i].value;
	if (elements[i].name == "LastClickedId")
		lastClickedId = elements[i].value;
}
alert( "DEBUG: expandedIds='" + expandedIds + "', selectedIds='" + selectedIds + "', lastClickedId='" + lastClickedId + "'" );
*/	
		var selectedIds;
		var selectedIdsIndex = -1;
		
		// find the index of the selected ids field.
		for (var i = 0; i < elements.length; i++)
		{
			if ( elements[i].name == selectedIdsFieldName )
			{
				selectedIds = elements[i].value;
				selectedIdsIndex = i;
				break;
			}
		}
		
		// if the index of the selected ids field was found, then toggle the checkboxes.
		if ( selectedIdsIndex != -1 )
		{
			for (var i = 0; i < elements.length; i++)
			{
				if ( elements[i].type == "checkbox" )
				{
					var checkboxId = elements[i].value;
					var index = selectedIds.indexOf( "," + checkboxId + "," );

//alert( "BEFORE: (selectedIds='" + selectedIds + "', checkboxId='" + checkboxId + "', checked='" + elements[i].checked + "')" );
					
					elements[i].checked = !elements[i].checked;

					if (elements[i].checked)
					{
						// If the id is not in the list of checked ids, then add it.
						if ( index == - 1 )
							selectedIds += ( selectedIds == "" ? "," : "" ) + checkboxId + ",";
					}
					else
					{
						// If the id is in the list of checked ids, then remove it.
						if ( index != -1 )
							selectedIds = selectedIds.substring(0, index) + selectedIds.substring(index + checkboxId.length + 1, selectedIds.length);
					}
					
//alert( "AFTER: (selectedIds='" + selectedIds + "', checkboxId='" + checkboxId + "', checked='" + elements[i].checked + "')" );
				}
			}
			
			elements[selectedIdsIndex].value = selectedIds;
		}
	}
}

// The selectedIdsFieldName field is no longer used for anything, and should be removed.
function checkedItemToggle( selectedIdsFieldName, checkboxId, checked )
{
	var checkedItemToggleFound = 0;
	with (document.forms[0])
	{
		var value = SelectedIds.value;
		var index = value.indexOf( "," + checkboxId + "," );

		if (checked)
		{
			// If the id is not in the list of checked ids, then add it.
			if ( index == - 1 )
				SelectedIds.value += ( SelectedIds.value == "" ? "," : "" ) + checkboxId + ",";
		}
		else
		{
			// If the id is in the list of checked ids, then remove it.
			if ( index != -1 )
				SelectedIds.value = value.substring(0, index) + value.substring(index + checkboxId.length + 1, value.length);
		}
/*	
		for (var i = 0; i < elements.length && checkedItemToggleFound == 0; i++)
		{
			if (elements[i].name == selectedIdsFieldName)
			{
				checkedItemToggleFound = 0;
				var value = elements[i].value;
				var index = value.indexOf( "," + checkboxId + "," );

//alert( "BEFORE: (selectedIds='" + elements[i].value + "', checkboxId='" + checkboxId + "', checked='" + checked + "')" );

				if (checked)
				{
					// If the id is not in the list of checked ids, then add it.
					if ( index == - 1 )
						elements[i].value += ( elements[i].value == "" ? "," : "" ) + checkboxId + ",";
				}
				else
				{
					// If the id is in the list of checked ids, then remove it.
					if ( index != -1 )
						elements[i].value = value.substring(0, index) + value.substring(index + checkboxId.length + 1, value.length);
				}
				
//alert( "AFTER: (selectedIds='" + elements[i].value + "', checkboxId='" + checkboxId + "', checked='" + checked + "')" );
			}
		}
*/
	}
}

function treeNodeCollapse( expandedIdsFieldName, lastClickedIdFieldName, nodeId )
{
	with (document.forms[0])
	{
		for (var i = 0; i < elements.length; i++)
		{
			if (elements[i].name == lastClickedIdFieldName)
				elements[i].value = nodeId;

			if (elements[i].name == expandedIdsFieldName)
			{
				var value = elements[i].value;
				var index = value.indexOf( "," + nodeId + "," );
				
//alert( "before: " + value + "  index: " + index );

				// If the id is in the list of checked ids, then remove it.
				if ( index != -1 )
					elements[i].value = value.substring( 0, index ) + value.substring( index + nodeId.length + 1, value.length );

//alert( "after: " + elements[i].value );
			}
		}

		action += "#" + nodeId;
//alert( "action: " + action );
		
		submit();
	}
}

function treeNodeExpand( expandedIdsFieldName, lastClickedIdFieldName, nodeId )
{
	with (document.forms[0])
	{
		for (var i = 0; i < elements.length; i++)
		{
			if (elements[i].name == lastClickedIdFieldName)
				elements[i].value = nodeId;

			if (elements[i].name == expandedIdsFieldName)
			{
//alert( "before: " + elements[i].value );
			
				// If the id is not in the list of checked ids, then add it.
				if ( elements[i].value.indexOf("," + nodeId + ",") == - 1 )
					elements[i].value += ( elements[i].value == "" ? "," : "" ) + nodeId + ",";

//alert( "after: " + elements[i].value );
			}
		}

		action += "#" + nodeId;
//alert( "action: " + action );

		submit();
	}
}

function _scrubItalicsElements(text)
{
	return text.replace('<i>', '').replace('</i>', '');
}

function _buildPopUpTitle(title)
{
	return	'<nobr>' +
				'<span class="PopUpHeader">' +
					'<span class="ss2b">' + title + '&#160;&#160;&#160;&#160;&#160;</span>' +
				'</span>' +
			'</nobr>';
}

function _buildPopUpSectionHeader(header)
{
	return	'<tr>' +
				'<td width="100%" align="left" valign="top" nowrap="nowrap" class="PopUpLabel">' +
					'<span class="ss3b">' + header + '</span>' +
				'</td>' +
			'</tr>';
}

function _buildPopUpLink(caption, page, query)
{ 
	var href = ((page != null) ? page : '/default') + '.ssp' + ((query != null) ? '?' + query : '');
	
	return	'<tr>' +
				'<td align="center" valign="middle" nowrap="nowrap">' +
					'<img src="/images/bltPopUp.gif" width="4" height="7" alt=""/>' +
				'</td>' +
				'<td width="100%" align="left" valign="top" nowrap="nowrap" class="PopUpText">&#160;' +
					'<a href="javascript:window.location.href=\'' + href + '\';nd()" ' +
						'onmouseover="window.status=\'' + _scrubItalicsElements(caption) + '\';return true" ' +
						'onmouseout="window.status=\'\';return true"' +
						'<span class="ss2">' + caption + '</span>' +
					'</a>' +
				'</td>' +
			'</tr>';
}

function _buildPopUpLinkNewPage(caption, page, query)
{
	var href = ((page != null) ? page : '/default') + '.ssp' + ((query != null) ? '?' + query : '');
	
	return	'<tr>' +
				'<td align="center" valign="middle" nowrap="nowrap">' +
					'<img src="/images/bltPopUp.gif" width="4" height="7" alt=""/>' +
				'</td>' +
				'<td width="100%" align="left" valign="top" nowrap="nowrap" class="PopUpText">&#160;' +
					'<a href="' + href + '" target="_blank" ' +
						'onmouseover="window.status=\'' + _scrubItalicsElements(caption) + '\';return true" ' +
						'onmouseout="window.status=\'\';return true"' +
						'<span class="ss2">' + caption + '</span>' +
					'</a>' +
				'</td>' +
			'</tr>';
}

function showHoverMenu(type, currentId, contextId, sectionId, web)
{
	var varPopUpText;
	var varPopUpTitle;
	var commonQueryString;
	var varItemNumber;
	var web;

	switch (type)
	{
		case "test-draft-open-response-item":
			varItemNumber = currentId.substring( currentId.lastIndexOf( "=" ) + 1 );
			varPopUpTitle = 'Item #' + varItemNumber + ' Options';
			commonQueryString = '&id=' + contextId + '&cid=' + currentId + '&sid=' + sectionId;
			commonFlashQueryString = '&tid=' + contextId + '&cid=' + currentId + '&id=' + currentId + '&sid=' + sectionId + '&web=' + web;
			varPopUpText = _buildPopUpLink('Edit item properties', '/test-draft/item/info', 'id=' + currentId + '&tid=' + contextId );
			varPopUpText += _buildPopUpLink('Edit content for this item', '/item-editor/host', 'a=Edit&c=TestDraftSection&cid=' + sectionId + '&tdid=' + contextId + '&id=' + currentId);
			varPopUpText += _buildPopUpLink('Delete this item', '/test-draft/item/delete', 'id=' + currentId + '&tdid=' + contextId + '&sid=' + sectionId + '&item=' + varItemNumber);
     		varPopUpText += _buildPopUpLink('Create an item at the <i>top</i> of this section', '/item-editor/host', 'a=Create&c=TestDraftSection&cid=' + sectionId + '&tdid=' + contextId + '&p=f');
			varPopUpText += _buildPopUpLink('Create an item at the <i>bottom</i> of this section', '/item-editor/host', 'a=Create&c=TestDraftSection&cid=' + sectionId + '&tdid=' + contextId +'&p=l');
			varPopUpText += _buildPopUpLink('Create an item <i>above</i> this item', '/item-editor/host', 'a=Create&c=TestDraftSection&cid=' + sectionId + '&tdid=' + contextId + '&id=' + currentId + '&p=b');
			varPopUpText += _buildPopUpLink('Create an item <i>below</i> this item', '/item-editor/host', 'a=Create&c=TestDraftSection&cid=' + sectionId + '&tdid=' + contextId + '&id=' + currentId + '&p=a');
		    varPopUpText += _buildPopUpLink('Duplicate this item and insert it <i>above</i> this item', '/test-draft/item/duplicate', commonQueryString + '&p=b');
			varPopUpText += _buildPopUpLink('Duplicate this item and insert it <i>below</i> this item', '/test-draft/item/duplicate', commonQueryString + '&p=a');
			varPopUpText += _buildPopUpLink('Preview this item', '/test-draft/item/preview', 'id=' + currentId );
			break;	
			
		case "test-draft-open-response-item-lcs":
			varItemNumber = currentId.substring( currentId.lastIndexOf( "=" ) + 1 );
			varPopUpTitle = 'Item #' + varItemNumber + ' Options';
			commonQueryString = '&id=' + contextId + '&cid=' + currentId + '&sid=' + sectionId;
			commonFlashQueryString = '&tid=' + contextId + '&cid=' + currentId + '&id=' + currentId + '&sid=' + sectionId + '&web=' + web;
			varPopUpText = _buildPopUpLink('Edit item properties', '/test-draft/item/info', 'id=' + currentId + '&tid=' + contextId );
			varPopUpText += _buildPopUpLink('Edit content for this item', '/item-editor/host', 'a=Edit&c=TestDraftSection&cid=' + sectionId + '&tdid=' + contextId + '&id=' + currentId);
     		varPopUpText += _buildPopUpLink('Create an item at the <i>top</i> of this section', '/item-editor/host', 'a=Create&c=TestDraftSection&cid=' + sectionId + '&tdid=' + contextId + '&p=f');
			varPopUpText += _buildPopUpLink('Create an item at the <i>bottom</i> of this section', '/item-editor/host', 'a=Create&c=TestDraftSection&cid=' + sectionId + '&tdid=' + contextId +'&p=l');
			varPopUpText += _buildPopUpLink('Create an item <i>above</i> this item', '/item-editor/host', 'a=Create&c=TestDraftSection&cid=' + sectionId + '&tdid=' + contextId + '&id=' + currentId + '&p=b');
			varPopUpText += _buildPopUpLink('Create an item <i>below</i> this item', '/item-editor/host', 'a=Create&c=TestDraftSection&cid=' + sectionId + '&tdid=' + contextId + '&id=' + currentId + '&p=a');
		    varPopUpText += _buildPopUpLink('Duplicate this item and insert it <i>above</i> this item', '/test-draft/item/duplicate', commonQueryString + '&p=b');
			varPopUpText += _buildPopUpLink('Duplicate this item and insert it <i>below</i> this item', '/test-draft/item/duplicate', commonQueryString + '&p=a');
			varPopUpText += _buildPopUpLink('Preview this item', '/test-draft/item/preview', 'id=' + currentId );
			break;	
			
		case "test-draft-item-answer-key-only":
            varItemNumber = currentId.substring( currentId.lastIndexOf( "=" ) + 1 );
			varPopUpTitle = 'Item #' + varItemNumber + ' Options';
			commonQueryString = 'id=' + contextId + '&cid=' + currentId + '&sid=' + sectionId;
			varPopUpText = _buildPopUpLink('Edit item properties', '/test-draft/item/info', 'id=' + currentId + '&tid=' + contextId );
			varPopUpText += _buildPopUpLink('Delete this item', '/test-draft/item/delete', 'id=' + currentId + '&tdid=' + contextId + '&sid=' + sectionId +'&item=' + varItemNumber );
			varPopUpText += _buildPopUpLink('Insert a new item at the <i>top</i> of this section', '/test-draft/item/create-answer-key', commonQueryString + '&p=F');
			varPopUpText += _buildPopUpLink('Insert a new item at the <i>bottom</i> of this section', '/test-draft/item/create-answer-key', commonQueryString + '&p=L');
			varPopUpText += _buildPopUpLink('Insert a new item <i>above</i> this item', '/test-draft/item/create-answer-key', commonQueryString + '&p=B');
			varPopUpText += _buildPopUpLink('Insert a new item <i>below</i> this item', '/test-draft/item/create-answer-key', commonQueryString + '&p=A');
			varPopUpText += _buildPopUpLink('Duplicate this item and insert it <i>above</i> this item', '/test-draft/item/duplicate', commonQueryString + '&p=b');
			varPopUpText += _buildPopUpLink('Duplicate this item and insert it <i>below</i> this item', '/test-draft/item/duplicate', commonQueryString + '&p=a');
			break;
			
		case "test-draft-item-answer-key-only-lcs":
            varItemNumber = currentId.substring( currentId.lastIndexOf( "=" ) + 1 );
			varPopUpTitle = 'Item #' + varItemNumber + ' Options';
			commonQueryString = 'id=' + contextId + '&cid=' + currentId + '&sid=' + sectionId;
			varPopUpText = _buildPopUpLink('Edit item properties', '/test-draft/item/info', 'id=' + currentId + '&tid=' + contextId );
			varPopUpText += _buildPopUpLink('Insert a new item at the <i>top</i> of this section', '/test-draft/item/create-answer-key', commonQueryString + '&p=F');
			varPopUpText += _buildPopUpLink('Insert a new item at the <i>bottom</i> of this section', '/test-draft/item/create-answer-key', commonQueryString + '&p=L');
			varPopUpText += _buildPopUpLink('Insert a new item <i>above</i> this item', '/test-draft/item/create-answer-key', commonQueryString + '&p=B');
			varPopUpText += _buildPopUpLink('Insert a new item <i>below</i> this item', '/test-draft/item/create-answer-key', commonQueryString + '&p=A');
			varPopUpText += _buildPopUpLink('Duplicate this item and insert it <i>above</i> this item', '/test-draft/item/duplicate', commonQueryString + '&p=b');
			varPopUpText += _buildPopUpLink('Duplicate this item and insert it <i>below</i> this item', '/test-draft/item/duplicate', commonQueryString + '&p=a');
			break;
			
		case "test-draft-flash-item":
			varItemNumber = currentId.substring( currentId.lastIndexOf( "=" ) + 1 );
			varPopUpTitle = 'Item #' + varItemNumber + ' Options';
			commonQueryString = '&id=' + contextId + '&cid=' + currentId + '&sid=' + sectionId;
			commonFlashQueryString = '&tid=' + contextId + '&cid=' + currentId + '&id=' + currentId + '&sid=' + sectionId + '&web=' + web;
			varPopUpText = _buildPopUpLink('Edit item properties', '/test-draft/item/info', 'id=' + currentId + '&tid=' + contextId );
			varPopUpText += _buildPopUpLink('Edit content for this item', '/item-editor/host', 'a=Edit&c=TestDraftSection&cid=' + sectionId + '&tdid=' + contextId + '&id=' + currentId);
			varPopUpText += _buildPopUpLink('Lock/Unlock this item from randomization', '/test-draft/item/randomization', 'id=' + currentId + '&tdid=' + contextId + '&sid=' + sectionId);
			varPopUpText += _buildPopUpLink('Delete this item', '/test-draft/item/delete', 'id=' + currentId + '&tdid=' + contextId + '&sid=' + sectionId + '&item=' + varItemNumber);
			varPopUpText += _buildPopUpLink('Create an item at the <i>top</i> of this section', '/item-editor/host', 'a=Create&c=TestDraftSection&cid=' + sectionId + '&tdid=' + contextId + '&p=f');
			varPopUpText += _buildPopUpLink('Create an item at the <i>bottom</i> of this section', '/item-editor/host', 'a=Create&c=TestDraftSection&cid=' + sectionId + '&tdid=' + contextId + '&p=l');
			varPopUpText += _buildPopUpLink('Create an item <i>above</i> this item', '/item-editor/host', 'a=Create&c=TestDraftSection&cid=' + sectionId + '&id=' + currentId + '&tdid=' + contextId + '&p=b');
			varPopUpText += _buildPopUpLink('Create an item <i>below</i> this item', '/item-editor/host', 'a=Create&c=TestDraftSection&cid=' + sectionId + '&id=' + currentId + '&tdid=' + contextId + '&p=a');
			varPopUpText += _buildPopUpLink('Duplicate this item and insert it <i>above</i> this item', '/test-draft/item/duplicate', commonQueryString + '&p=b');
			varPopUpText += _buildPopUpLink('Duplicate this item and insert it <i>below</i> this item', '/test-draft/item/duplicate', commonQueryString + '&p=a');
			varPopUpText += _buildPopUpLink('Preview this item', '/test-draft/item/preview', 'id=' + currentId );
			break;

		case "test-draft-flash-item-reviewer":
			varPopUpTitle = 'Item #' + currentId.substring( currentId.lastIndexOf( "=" ) + 1 ) + ' Options';
			commonQueryString = 'id=' + contextId + '&cid=' + currentId + '&sid=' + sectionId;
			varPopUpText = _buildPopUpLink('View this item', '/test-draft/item/info', 'id=' + currentId + '&tid=' + contextId + '&pg=RO');
			varPopUpText += _buildPopUpLink('Preview this item', '/test-draft/item/preview', 'id=' + currentId );
			break;	
			
		case "test-draft-flash-item-lcs":
			varItemNumber = currentId.substring( currentId.lastIndexOf( "=" ) + 1 );
			varPopUpTitle = 'Item #' + varItemNumber + ' Options';
			commonQueryString = '&id=' + contextId + '&cid=' + currentId + '&sid=' + sectionId;
			commonFlashQueryString = '&tid=' + contextId + '&cid=' + currentId + '&id=' + currentId + '&sid=' + sectionId + '&web=' + web;
			varPopUpText = _buildPopUpLink('Edit item properties', '/test-draft/item/info', 'id=' + currentId + '&tid=' + contextId );
			varPopUpText += _buildPopUpLink('Edit content for this item', '/item-editor/host', 'a=Edit&c=TestDraftSection&cid=' + sectionId + '&tdid=' + contextId + '&id=' + currentId);
			varPopUpText += _buildPopUpLink('Lock/Unlock this item from randomization', '/test-draft/item/randomization', 'id=' + currentId + '&tdid=' + contextId + '&sid=' + sectionId);
			varPopUpText += _buildPopUpLink('Create an item at the <i>top</i> of this section', '/item-editor/host', 'a=Create&c=TestDraftSection&cid=' + sectionId + '&tdid=' + contextId + '&p=f');
			varPopUpText += _buildPopUpLink('Create an item at the <i>bottom</i> of this section', '/item-editor/host', 'a=Create&c=TestDraftSection&cid=' + sectionId + '&tdid=' + contextId + '&p=l');
			varPopUpText += _buildPopUpLink('Create an item <i>above</i> this item', '/item-editor/host', 'a=Create&c=TestDraftSection&cid=' + sectionId + '&id=' + currentId + '&tdid=' + contextId + '&p=b');
			varPopUpText += _buildPopUpLink('Create an item <i>below</i> this item', '/item-editor/host', 'a=Create&c=TestDraftSection&cid=' + sectionId + '&id=' + currentId + '&tdid=' + contextId + '&p=a');
			varPopUpText += _buildPopUpLink('Duplicate this item and insert it <i>above</i> this item', '/test-draft/item/duplicate', commonQueryString + '&p=b');
			varPopUpText += _buildPopUpLink('Duplicate this item and insert it <i>below</i> this item', '/test-draft/item/duplicate', commonQueryString + '&p=a');
			varPopUpText += _buildPopUpLink('Preview this item', '/test-draft/item/preview', 'id=' + currentId );
			break;
									
		case "classroom-test-flash-item":
			varItemNumber = currentId.substring( currentId.lastIndexOf( "=" ) + 1 );
			varPopUpTitle = 'Item #' + varItemNumber + ' Options';
			commonQueryString = '&id=' + contextId + '&cid=' + currentId + '&sid=' + sectionId;
			commonFlashQueryString = '&tid=' + contextId + '&cid=' + currentId + '&id=' + currentId + '&sid=' + sectionId  + '&web=' + web;
			varPopUpText = _buildPopUpLink('Edit item properties', '/test-draft/item/info', 'id=' + currentId + '&tid=' + contextId );
            varPopUpText += _buildPopUpLink('Edit content for this item', '/item-editor/host', 'a=Edit&ttyp=CLS&c=TestDraftSection&cid=' + sectionId + '&id=' + currentId + '&tdid=' + contextId);
    		varPopUpText += _buildPopUpLink('Lock/Unlock this item from randomization', '/test-draft/item/randomization', 'id=' + currentId + '&tdid=' + contextId + '&sid=' + sectionId);
			varPopUpText += _buildPopUpLink('Delete this item', '/test-draft/item/delete', 'id=' + currentId + '&tdid=' + contextId + '&sid=' + sectionId + '&item=' + varItemNumber);
			varPopUpText += _buildPopUpLink('Create an item at the <i>top</i> of this section', '/item-editor/host', 'a=Create&ttyp=CLS&c=TestDraftSection&cid=' + sectionId + '&tdid=' + contextId + '&p=f');
			varPopUpText += _buildPopUpLink('Create an item at the <i>bottom</i> of this section', '/item-editor/host', 'a=Create&ttyp=CLS&c=TestDraftSection&cid=' + sectionId + '&tdid=' + contextId + '&p=l');
			varPopUpText += _buildPopUpLink('Create an item <i>above</i> this item', '/item-editor/host', 'a=Create&ttyp=CLS&c=TestDraftSection&cid=' + sectionId + '&id=' + currentId + '&tdid=' + contextId + '&p=b');
			varPopUpText += _buildPopUpLink('Create an item <i>below</i> this item', '/item-editor/host', 'a=Create&ttyp=CLS&c=TestDraftSection&cid=' + sectionId + '&id=' + currentId + '&tdid=' + contextId + '&p=a');
			varPopUpText += _buildPopUpLink('Duplicate this item and insert it <i>above</i> this item', '/test-draft/item/duplicate', commonQueryString + '&p=b');
			varPopUpText += _buildPopUpLink('Duplicate this item and insert it <i>below</i> this item', '/test-draft/item/duplicate', commonQueryString + '&p=a');
			varPopUpText += _buildPopUpLink('Preview this item', '/test-draft/item/preview', 'id=' + currentId );
			break;
			
		case "classroom-test-flash-item-lcs":
			varItemNumber = currentId.substring( currentId.lastIndexOf( "=" ) + 1 );
			varPopUpTitle = 'Item #' + varItemNumber + ' Options';
			commonQueryString = '&id=' + contextId + '&cid=' + currentId + '&sid=' + sectionId;
			commonFlashQueryString = '&tid=' + contextId + '&cid=' + currentId + '&id=' + currentId + '&sid=' + sectionId  + '&web=' + web;
			varPopUpText = _buildPopUpLink('Edit item properties', '/test-draft/item/info', 'id=' + currentId + '&tid=' + contextId );
            varPopUpText += _buildPopUpLink('Edit content for this item', '/item-editor/host', 'a=Edit&ttyp=CLS&c=TestDraftSection&cid=' + sectionId + '&id=' + currentId + '&tdid=' + contextId);
    		varPopUpText += _buildPopUpLink('Lock/Unlock this item from randomization', '/test-draft/item/randomization', 'id=' + currentId + '&tdid=' + contextId + '&sid=' + sectionId);
			varPopUpText += _buildPopUpLink('Create an item at the <i>top</i> of this section', '/item-editor/host', 'a=Create&ttyp=CLS&c=TestDraftSection&cid=' + sectionId + '&tdid=' + contextId + '&p=f');
			varPopUpText += _buildPopUpLink('Create an item at the <i>bottom</i> of this section', '/item-editor/host', 'a=Create&ttyp=CLS&c=TestDraftSection&cid=' + sectionId + '&tdid=' + contextId + '&p=l');
			varPopUpText += _buildPopUpLink('Create an item <i>above</i> this item', '/item-editor/host', 'a=Create&ttyp=CLS&c=TestDraftSection&cid=' + sectionId + '&id=' + currentId + '&tdid=' + contextId + '&p=b');
			varPopUpText += _buildPopUpLink('Create an item <i>below</i> this item', '/item-editor/host', 'a=Create&ttyp=CLS&c=TestDraftSection&cid=' + sectionId + '&id=' + currentId + '&tdid=' + contextId + '&p=a');
			varPopUpText += _buildPopUpLink('Duplicate this item and insert it <i>above</i> this item', '/test-draft/item/duplicate', commonQueryString + '&p=b');
			varPopUpText += _buildPopUpLink('Duplicate this item and insert it <i>below</i> this item', '/test-draft/item/duplicate', commonQueryString + '&p=a');
			varPopUpText += _buildPopUpLink('Preview this item', '/test-draft/item/preview', 'id=' + currentId );
			break;
			
		case "classroom-test-flash-item-open-response":
               //Note (itam 2005-07-13: same as classroom-test-flash-item except that there is no Lock/Unlock feature 
			varItemNumber = currentId.substring( currentId.lastIndexOf( "=" ) + 1 );
			varPopUpTitle = 'Item #' + varItemNumber + ' Options';
			commonQueryString = '&id=' + contextId + '&cid=' + currentId + '&sid=' + sectionId;
			commonFlashQueryString = '&tid=' + contextId + '&cid=' + currentId + '&id=' + currentId + '&sid=' + sectionId  + '&web=' + web;
			varPopUpText = _buildPopUpLink('Edit item properties', '/test-draft/item/info', 'id=' + currentId + '&tid=' + contextId );
			varPopUpText += _buildPopUpLink('Edit content for this item', '/item-editor/host', 'a=Edit&ttyp=CLS&c=TestDraftSection&cid=' + sectionId + '&tdid=' + contextId + '&id=' + currentId);
			varPopUpText += _buildPopUpLink('Delete this item', '/test-draft/item/delete', 'id=' + currentId + '&tdid=' + contextId + '&sid=' + sectionId + '&item=' + varItemNumber);
			varPopUpText += _buildPopUpLink('Create an item at the <i>top</i> of this section', '/item-editor/host', 'a=Create&ttyp=CLS&c=TestDraftSection&cid=' + sectionId + '&tdid=' + contextId + '&p=f');
			varPopUpText += _buildPopUpLink('Create an item at the <i>bottom</i> of this section', '/item-editor/host', 'a=Create&ttyp=CLS&c=TestDraftSection&cid=' + sectionId + '&tdid=' + contextId + '&p=l');
			varPopUpText += _buildPopUpLink('Create an item <i>above</i> this item', '/item-editor/host', 'a=Create&ttyp=CLS&c=TestDraftSection&cid=' + sectionId + '&id=' + currentId + '&tdid=' + contextId + '&p=b');
			varPopUpText += _buildPopUpLink('Create an item <i>below</i> this item', '/item-editor/host', 'a=Create&ttyp=CLS&c=TestDraftSection&cid=' + sectionId + '&id=' + currentId + '&tdid=' + contextId + '&p=a');
			varPopUpText += _buildPopUpLink('Duplicate this item and insert it <i>above</i> this item', '/test-draft/item/duplicate', commonQueryString + '&p=b');
			varPopUpText += _buildPopUpLink('Duplicate this item and insert it <i>below</i> this item', '/test-draft/item/duplicate', commonQueryString + '&p=a');
			varPopUpText += _buildPopUpLink('Preview this item', '/test-draft/item/preview', 'id=' + currentId );
			break;
			
		case "classroom-test-flash-item-open-response-lcs":
               //Note (itam 2005-07-13: same as classroom-test-flash-item except that there is no Lock/Unlock feature 
			varItemNumber = currentId.substring( currentId.lastIndexOf( "=" ) + 1 );
			varPopUpTitle = 'Item #' + varItemNumber + ' Options';
			commonQueryString = '&id=' + contextId + '&cid=' + currentId + '&sid=' + sectionId;
			commonFlashQueryString = '&tid=' + contextId + '&cid=' + currentId + '&id=' + currentId + '&sid=' + sectionId  + '&web=' + web;
			varPopUpText = _buildPopUpLink('Edit item properties', '/test-draft/item/info', 'id=' + currentId + '&tid=' + contextId );
			varPopUpText += _buildPopUpLink('Edit content for this item', '/item-editor/host', 'a=Edit&ttyp=CLS&c=TestDraftSection&cid=' + sectionId + '&tdid=' + contextId + '&id=' + currentId);
			varPopUpText += _buildPopUpLink('Create an item at the <i>top</i> of this section', '/item-editor/host', 'a=Create&ttyp=CLS&c=TestDraftSection&cid=' + sectionId + '&tdid=' + contextId + '&p=f');
			varPopUpText += _buildPopUpLink('Create an item at the <i>bottom</i> of this section', '/item-editor/host', 'a=Create&ttyp=CLS&c=TestDraftSection&cid=' + sectionId + '&tdid=' + contextId + '&p=l');
			varPopUpText += _buildPopUpLink('Create an item <i>above</i> this item', '/item-editor/host', 'a=Create&ttyp=CLS&c=TestDraftSection&cid=' + sectionId + '&id=' + currentId + '&tdid=' + contextId + '&p=b');
			varPopUpText += _buildPopUpLink('Create an item <i>below</i> this item', '/item-editor/host', 'a=Create&ttyp=CLS&c=TestDraftSection&cid=' + sectionId + '&id=' + currentId + '&tdid=' + contextId + '&p=a');
			varPopUpText += _buildPopUpLink('Duplicate this item and insert it <i>above</i> this item', '/test-draft/item/duplicate', commonQueryString + '&p=b');
			varPopUpText += _buildPopUpLink('Duplicate this item and insert it <i>below</i> this item', '/test-draft/item/duplicate', commonQueryString + '&p=a');
			varPopUpText += _buildPopUpLink('Preview this item', '/test-draft/item/preview', 'id=' + currentId );
			break;
			
		case "test-draft-item-reviewer":
			varPopUpTitle = 'Item #' + currentId.substring( currentId.lastIndexOf( "=" ) + 1 ) + ' Options';
			commonQueryString = 'id=' + contextId + '&cid=' + currentId + '&sid=' + sectionId;
			varPopUpText = _buildPopUpLink('View this item', '/test-draft/item/info', 'id=' + currentId + '&tid=' + contextId + '&pg=RO');
			varPopUpText += _buildPopUpLink('Preview this item', '/test-draft/item/preview', 'id=' + currentId );
			break;

		case "test-draft-item-reviewer-answer-key-only":
			varPopUpTitle = 'Item #' + currentId.substring( currentId.lastIndexOf( "=" ) + 1 ) + ' Options';
			commonQueryString = 'id=' + contextId + '&cid=' + currentId + '&sid=' + sectionId;
			varPopUpText = _buildPopUpLink('View this item', '/test-draft/item/info', 'id=' + currentId + '&tid=' + contextId + '&pg=RO');
			break;

		case "test-draft-section":
			commonQueryString = 'id=' + currentId + '&tdid=' + contextId;
			varPopUpTitle = 'Section Options';
			varPopUpText = _buildPopUpLink('Edit section properties', '/test-draft/section/edit', commonQueryString);
			varPopUpText += _buildPopUpLink('Lock/Unlock this section from randomization', '/test-draft/section/randomization', commonQueryString);
			varPopUpText += _buildPopUpLink('Delete this section', '/test-draft/section/delete', commonQueryString);
			varPopUpText += _buildPopUpLink('Insert a new section at the <i>top</i> of this test', '/test-draft/section/create', commonQueryString + '&p=f');
			varPopUpText += _buildPopUpLink('Insert a new section at the <i>bottom</i> of this test', '/test-draft/section/create', commonQueryString + '&p=l');
			varPopUpText += _buildPopUpLink('Insert a new section <i>above</i> this section', '/test-draft/section/create', commonQueryString + '&p=b');
			varPopUpText += _buildPopUpLink('Insert a new section <i>below</i> this section', '/test-draft/section/create', commonQueryString + '&p=a');
			varPopUpText += _buildPopUpLink('Insert a new item at the <i>top</i> of this section', '/item-editor/host', 'a=Create&c=TestDraftSection&cid=' + sectionId + '&p=f&tdid=' + contextId);
			varPopUpText += _buildPopUpLink('Duplicate this section and insert it <i>above</i> this section', '/test-draft/section/duplicate', commonQueryString + '&p=b');
			varPopUpText += _buildPopUpLink('Duplicate this section and insert it <i>below</i> this section', '/test-draft/section/duplicate', commonQueryString + '&p=a');
			break;
			
		case "test-draft-section-reviewer":
			commonQueryString = 'id=' + currentId + '&tdid=' + contextId;
			varPopUpTitle = 'Section Options';
			varPopUpText = _buildPopUpLink('View section properties', '/test-draft/section/info', commonQueryString);
			break;
			
		case "test-draft-section-lcs":
			commonQueryString = 'id=' + currentId + '&tdid=' + contextId;
			varPopUpTitle = 'Section Options';
			varPopUpText = _buildPopUpLink('Edit section properties', '/test-draft/section/edit', commonQueryString);
			varPopUpText += _buildPopUpLink('Lock/Unlock this section from randomization', '/test-draft/section/randomization', commonQueryString);
			varPopUpText += _buildPopUpLink('Insert a new section at the <i>top</i> of this test', '/test-draft/section/create', commonQueryString + '&p=f');
			varPopUpText += _buildPopUpLink('Insert a new section at the <i>bottom</i> of this test', '/test-draft/section/create', commonQueryString + '&p=l');
			varPopUpText += _buildPopUpLink('Insert a new section <i>above</i> this section', '/test-draft/section/create', commonQueryString + '&p=b');
			varPopUpText += _buildPopUpLink('Insert a new section <i>below</i> this section', '/test-draft/section/create', commonQueryString + '&p=a');
			varPopUpText += _buildPopUpLink('Insert a new item at the <i>top</i> of this section', '/item-editor/host', 'a=Create&c=TestDraftSection&cid=' + sectionId + '&p=f&tdid=' + contextId);
			varPopUpText += _buildPopUpLink('Duplicate this section and insert it <i>above</i> this section', '/test-draft/section/duplicate', commonQueryString + '&p=b');
			varPopUpText += _buildPopUpLink('Duplicate this section and insert it <i>below</i> this section', '/test-draft/section/duplicate', commonQueryString + '&p=a');
			break;

	    case "test-draft-section-classroom":
			commonQueryString = 'id=' + currentId + '&tdid=' + contextId;
			varPopUpTitle = 'Section Options';
			varPopUpText = _buildPopUpLink('Edit section properties', '/test-draft/section/edit', commonQueryString);
			varPopUpText += _buildPopUpLink('Lock/Unlock this section from randomization', '/test-draft/section/randomization', commonQueryString);
			varPopUpText += _buildPopUpLink('Delete this section', '/test-draft/section/delete', commonQueryString);
			varPopUpText += _buildPopUpLink('Insert a new section at the <i>top</i> of this test', '/test-draft/section/create', commonQueryString + '&p=f');
			varPopUpText += _buildPopUpLink('Insert a new section at the <i>bottom</i> of this test', '/test-draft/section/create', commonQueryString + '&p=l');
			varPopUpText += _buildPopUpLink('Insert a new section <i>above</i> this section', '/test-draft/section/create', commonQueryString + '&p=b');
			varPopUpText += _buildPopUpLink('Insert a new section <i>below</i> this section', '/test-draft/section/create', commonQueryString + '&p=a');
			varPopUpText += _buildPopUpLink('Insert a new item at the <i>top</i> of this section', '/item-editor/host', 'a=Create&c=TestDraftSection&cid=' + sectionId + '&ttyp=CLS&p=f&tdid=' + contextId);
			varPopUpText += _buildPopUpLink('Duplicate this section and insert it <i>above</i> this section', '/test-draft/section/duplicate', commonQueryString + '&p=b');
			varPopUpText += _buildPopUpLink('Duplicate this section and insert it <i>below</i> this section', '/test-draft/section/duplicate', commonQueryString + '&p=a');
			break;
			
		case "test-draft-choice":
			varPopUpTitle = 'Choice ' + currentId.charAt(currentId.length-1) + ' - Possible Choice Options';	// This is relying on the last character to be the letter of the choice
			commonQueryString = 'id=' + currentId;
			varPopUpText = _buildPopUpLink('Insert possible choice <i>above</i>', '/test-draft/item/choice/create', commonQueryString + '&p=b');
			varPopUpText += _buildPopUpLink('Insert possible choice <i>below</i>', '/test-draft/item/choice/create', commonQueryString + '&p=a');
			varPopUpText += _buildPopUpLink('Edit possible choice', '/test-draft/item/choice/edit', commonQueryString);
			varPopUpText += _buildPopUpLink('Delete possible choice', '/test-draft/item/choice/delete', commonQueryString);
			break;

		case "test-draft-choice-lcs":
			varPopUpTitle = 'Choice ' + currentId.charAt(currentId.length-1) + ' - Possible Choice Options';	// This is relying on the last character to be the letter of the choice
			commonQueryString = 'id=' + currentId;
			varPopUpText = _buildPopUpLink('Insert possible choice <i>above</i>', '/test-draft/item/choice/create', commonQueryString + '&p=b');
			varPopUpText += _buildPopUpLink('Insert possible choice <i>below</i>', '/test-draft/item/choice/create', commonQueryString + '&p=a');
			varPopUpText += _buildPopUpLink('Edit possible choice', '/test-draft/item/choice/edit', commonQueryString);
			break;

		case "test-draft-choice-tf":
			varPopUpTitle = 'Choice ' + currentId.charAt(currentId.length-1) + ' - Choice Options';	// This is relying on the last character to be the letter of the choice
			commonQueryString = 'id=' + currentId;
			varPopUpText = _buildPopUpLink('Edit Choice', '/test-draft/item/choice/edit', commonQueryString);
			break;

		case "item-bank-item":
			varPopUpTitle = 'Item Options';
			commonQueryString = 'bid=' + contextId + '&id=' + currentId;
			varPopUpText = _buildPopUpLink('Edit this item', '/item-bank/item/info', commonQueryString);
			varPopUpText += _buildPopUpLink('Delete this item', '/item-bank/item/delete', commonQueryString);
			varPopUpText += _buildPopUpLink('Duplicate this item', '/item-bank/item/duplicate', commonQueryString);
			varPopUpText += _buildPopUpLinkNewPage('Preview this item', '/item-bank/item/preview', commonQueryString);
			break;

		case "item-bank-item-reviewer":
			varPopUpTitle = 'Item Options';
			commonQueryString = 'bid=' + contextId + '&id=' + currentId;
			varPopUpText = _buildPopUpLink('View this item', '/item-bank/item/info', commonQueryString);
			varPopUpText += _buildPopUpLinkNewPage('Preview this item', '/item-bank/item/preview', commonQueryString);
			break;

		case "item-bank-item-lcs":
			varPopUpTitle = 'Item Options';
			commonQueryString = 'bid=' + contextId + '&id=' + currentId;
			varPopUpText = _buildPopUpLink('Edit this item', '/item-bank/item/info', commonQueryString);
			varPopUpText += _buildPopUpLink('Duplicate this item', '/item-bank/item/duplicate', commonQueryString);
			varPopUpText += _buildPopUpLinkNewPage('Preview this item', '/item-bank/item/preview', commonQueryString);
			break;
						
		case "item-bank-flash-item":
			varPopUpTitle = 'Item Options';
			commonQueryString = 'bid=' + contextId + '&id=' + currentId;
			varPopUpText = _buildPopUpLink('Edit item properties', '/item-bank/item/info', commonQueryString);
			varPopUpText += _buildPopUpLink('Edit content for this item', '/item-editor/host', 'a=Edit&c=ItemBank&cid=' + contextId + '&id=' + currentId);
			varPopUpText += _buildPopUpLink('Delete this item', '/item-bank/item/delete', commonQueryString);
			varPopUpText += _buildPopUpLink('Duplicate this item', '/item-bank/item/duplicate', commonQueryString);
			varPopUpText += _buildPopUpLinkNewPage('Preview this item', '/item-bank/item/preview', commonQueryString);
			break;
			
		case "item-bank-flash-item-reviewer":
			varPopUpTitle = 'Item Options';
			commonQueryString = 'bid=' + contextId + '&id=' + currentId + '&web=' + web;
			varPopUpText = _buildPopUpLink('View this item', '/item-bank/item/info', commonQueryString);
			varPopUpText += _buildPopUpLinkNewPage('Preview this item', '/item-bank/item/preview', commonQueryString);
			break;
			
		case "item-bank-flash-item-lcs":
			varPopUpTitle = 'Item Options';
			commonQueryString = 'bid=' + contextId + '&id=' + currentId;
			varPopUpText = _buildPopUpLink('Edit item properties', '/item-bank/item/info', commonQueryString);
			varPopUpText += _buildPopUpLink('Edit content for this item', '/item-editor/host', 'a=Edit&c=ItemBank&cid=' + contextId + '&id=' + currentId);
			varPopUpText += _buildPopUpLink('Duplicate this item', '/item-bank/item/duplicate', commonQueryString);
			varPopUpText += _buildPopUpLinkNewPage('Preview this item', '/item-bank/item/preview', commonQueryString);
			break;

		case "item-bank-selected":
			varPopUpTitle = 'Selected Items';
			varPopUpText = _buildPopUpLink('Save Selected Items to another Item Bank', null, null);
			varPopUpText += _buildPopUpLink('Print Selected Items as Paper Test Form', null, null);
			break;

		case "item-bank-choice":
			varPopUpTitle = 'Choice ' + currentId.charAt(currentId.length-1) + ' - Possible Choice Options';	// This is relying on the last character to be the letter of the choice
			commonQueryString = 'bid=' + contextId + '&id=' + currentId;
			varPopUpText = _buildPopUpLink('Insert possible choice <i>above</i>', '/item-bank/item/choice/create', commonQueryString + '&p=b');
			varPopUpText += _buildPopUpLink('Insert possible choice <i>below</i>', '/item-bank/item/choice/create', commonQueryString + '&p=a');
			varPopUpText += _buildPopUpLink('Edit possible choice', '/item-bank/item/choice/edit', commonQueryString);
			varPopUpText += _buildPopUpLink('Delete possible choice', '/item-bank/item/choice/delete', commonQueryString);
			break;

		case "item-bank-choice-lcs":
			varPopUpTitle = 'Choice ' + currentId.charAt(currentId.length-1) + ' - Possible Choice Options';	// This is relying on the last character to be the letter of the choice
			commonQueryString = 'bid=' + contextId + '&id=' + currentId;
			varPopUpText = _buildPopUpLink('Insert possible choice <i>above</i>', '/item-bank/item/choice/create', commonQueryString + '&p=b');
			varPopUpText += _buildPopUpLink('Insert possible choice <i>below</i>', '/item-bank/item/choice/create', commonQueryString + '&p=a');
			varPopUpText += _buildPopUpLink('Edit possible choice', '/item-bank/item/choice/edit', commonQueryString);
			break;

		case "item-bank-choice-tf":
			varPopUpTitle = 'Choice ' + currentId.charAt(currentId.length-1) + ' - Choice Options';	// This is relying on the last character to be the letter of the choice
			commonQueryString = 'bid=' + contextId + '&id=' + currentId;
			varPopUpText = _buildPopUpLink('Edit Choice', '/item-bank/item/choice/edit', commonQueryString);
			break;
	}

	return overlib('<table border="0" cellspacing="0" cellpadding="1">' + varPopUpText + '</table>',
		CLOSECOLOR, 'FFFFFF', STICKY, HAUTO, VAUTO, CAPTION, _buildPopUpTitle(varPopUpTitle), BORDER,
		2, CSSCLASS, FGCLASS, 'PopUpFG', BGCLASS, 'PopUpBK', CLOSETEXT,
		'<span class="PopUpHeaderClose"><span class="ss2b">X</span></span>');
}

// - - [ Functions that interface with the Java Clipboard Applet ] - - - - - -

// Function for initiating a paste operation in the Flash editor.
// Note: This function is only valid when called from a window
// that contains the Flash editor.
function paste()
{
	if (is_mac)
	{
		// Popup a window that Macs will use to communcitate
		// with the applet (without using LiveConnect).
		macPastePopup("frameApplet", "/item-editor/paste-applet.ssp",
			"frameTarget", "/item-editor/paste-target.ssp?id=&error=")
	}
	else
	{
		// If we haven't already, check to see if a Java plug-in is installed.
		if (!java_plugin_checked)
		{
			checkJavaPlugin();
		}

		if (is_java_enabled && is_java_142up != "no")
		{
			// Call the clipboard applet's triggerScriptEvent() method.
			document.clipboardApplet.triggerScriptEvent();
		}		
	}
}

// convert a boolean value to a "T" or "F" character string
function convertBooleanToTorF(bool)
{
  return (bool ? "T" : "F");
}

// get the value of the specified cookie (URI encoded)
function getCookieValue(name)
{
    // get all cookies for this document
    var allCookies = document.cookie;
//alert("allCookies: " + allCookies);

    // the search name used to retrieve the cookie
    var searchName = name + "=";
    
    // look for the start of the requested cookie
    var startIndex = allCookies.indexOf(searchName);
    
    // if a cookie was found with the specified name return its value
    if (startIndex != -1 )
    {
        startIndex += searchName.length;                    // start of cookie value
        endIndex = allCookies.indexOf(";", startIndex);     // end of cookie value
        if (endIndex == -1) endIndex = allCookies.length;
        
        return decodeURIComponent(allCookies.substring(startIndex, endIndex));
    }
    else
    {
        return "";
    }
}

// set the value of the specified cookie (URI encoded)
function setCookieValue(name, value, path)
{
    document.cookie = name + "=" + encodeURIComponent(value) +
        ( path != null ? "; path=" + path : "" );
}

// Function for retrieving the server response for a Flash editor
// paste operation. Note: This function is only valid when called
// from a window that also contains the Clipboard applet.
function getServerResponse()
{
	if (is_mac)
	{
		// For Macs the server response is sent via a Flash movie
		// running in the popup window, so we do nothing here.
	}
	else
	{
		if (is_java_enabled && is_java_142up != "no")
		{
			// Get the response from the clipboard applet.
			var objServerResponse = document.clipboardApplet.getServerResponse();
			if (objServerResponse != null)
			{
				// Send the response to the Flash Item Editor via the
				// SetVariable() method call.
				var strServerResponse = String(objServerResponse);
				document.Editor.SetVariable("varServerResponse", strServerResponse);
			}
		}
		else
		{
			document.Editor.SetVariable("varServerResponse", "&id=&error=A v1.4.2, or greater, Java Plug-in is not installed, or Java is not enabled. Plug-ins can be downloaded from http://java.sun.com/products/plugin/.");
		}
	}
}	

// Function (and var) for presenting a popup window to support Mac pasting
// operations. Note: This function is called via the paste() function,
// which is called from the window that contains the Flash editor.
var macPasteWindow = null;
function macPastePopup(frameApplet, srcApplet, frameTarget, srcTarget)
{
	var features = "toolbar=0,";
	    features += "location=0,";
	    features += "directories=0,";
	    features += "status=0,";
	    features += "menubar=0,";
	    features += "scrollbars=0,";
	    features += "resizable=0,";
	    features += "width=400,";
	    features += "height=200";

	var content  = "<html>\n"
	    content += "<head>\n"
	    content += "<title>Paste Status</title>\n"
	    content += "</head>\n"
	    content += "<frameset rows=\"*,0\">\n";
	    content += "\t<frame name=\"" + frameApplet + "\"\n";
	    content += "\t\tsrc=\"" + srcApplet + "\"\n";
	    content += "\t\tmarginwidth=\"12\"\n";
	    content += "\t\tmarginheight=\"12\"\n";
	    content += "\t\tscrolling=\"no\"\n";
	    content += "\t\tframeborder=\"0\"\n";
	    content += "\t\tnoresize>\n";
	    content += "\t\<frame name=\"" + frameTarget + "\"\n";
	    content += "\t\tsrc=\"" + srcTarget + "\"\n";
	    content += "\t\tmarginwidth=\"0\"\n";
	    content += "\t\tmarginheight=\"0\"\n";
	    content += "\t\tscrolling=\"no\"\n";
	    content += "\t\tframeborder=\"0\"\n";
	    content += "\t\tnoresize>\n";
	    content += "\t\t</frame>\n";
	    content += "</frameset>\n";
	    content += "<noframes>\n";
	    content += "<body>\n";
	    content += "A browser that supports frames is required!\n";
	    content += "</body>\n";
	    content += "</noframes>\n";
	    content += "</html>\n";

	if (macPasteWindow == null || macPasteWindow.closed)
	{
		macPasteWindow = window.open("", "", features);
		macPasteWindow.moveTo(200, 100);
		macPasteWindow.document.write(content);
		macPasteWindow.document.close();
	}
	else
	{
		macPasteWindow.focus();
	}
}

// Function for closing the Mac pasting popup window.
function closePastePopup()
{
	if (macPasteWindow != null)
	{
		macPasteWindow.close();
		macPasteWindow = null;
	}
}	

// Function for checking the Java plug-in.
var java_plugin_checked = false;
var is_java_enabled = false;
var is_java_142up = "unknown";			
function checkJavaPlugin()
{
	java_plugin_checked = true;
	is_java_enabled = navigator.javaEnabled();
	is_java_142up = "unknown";
		
	if (navigator.mimeTypes)
	{
		for (var i = 0; i < navigator.mimeTypes.length; i++)
		{
			var mimetype = navigator.mimeTypes[i].type
			if (mimetype.indexOf("application/x-java-applet") != -1)
			{
				is_java_142up = "no";

				var index = mimetype.indexOf("version=");
				if (index != -1)
				{
					var version = mimetype.substring(index + 8);
					var nums = version.split(".");
					var major = parseInt(nums[0]);
					var minor = parseInt(nums[1]);
					var sub = 0;
					if (nums.length > 2)
						sub = parseInt(nums[2]);
					if (major > 1 || (major == 1 && minor > 3 && sub > 1))
					{
						is_java_142up = "yes";
						return;
					}
				}
			}
		}
	}
	
	// Note: At this point, if is_java_142up = "unknown", then the browser
	// is most likely IE on a Windows platform. If no plug-in has been
	// installed, then a message should have been displayed when the editor
	// was first loaded. If a version < 1.4 is present, then the user
	// should have already been prompted to upgrade.
}
			
// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -


//Function to check flash version
function checkFlash()
{
			doFlash(is_Flash)
			
}

function doFlash(varFlash)
{
			if(varFlash != true)
			{
				window.location.href = "/!/unsupportedflash.html"
			}
	
}

function doFlashVersion(varFlashVersion)
{

	var arrVersion;
	arrVersion= varFlashVersion.split("");
	varFlashVersion = "";
	for(var i = 0; i < arrVersion.length; i ++){
		if((isNaN(arrVersion[i]) == false) && (arrVersion[i] != 0)){
			varFlashVersion = varFlashVersion + arrVersion[i]
		}
	}
		if(varFlashVersion < 679){
			window.location.href = "/!/unsupportedflash.html"
		}
	
}

//Browser/Flash Detection

			var agt=navigator.userAgent.toLowerCase();
			var appVer = navigator.appVersion.toLowerCase();
			var is_minor = parseFloat(appVer);
			var is_major = parseInt(is_minor);
			var is_opera = (agt.indexOf("opera") != -1);
			var is_opera2 = (agt.indexOf("opera 2") != -1 || agt.indexOf("opera/2") != -1);
			var is_opera3 = (agt.indexOf("opera 3") != -1 || agt.indexOf("opera/3") != -1);
			var is_opera4 = (agt.indexOf("opera 4") != -1 || agt.indexOf("opera/4") != -1);
			var is_opera5up = (is_opera && !is_opera2 && !is_opera3 && !is_opera4);
			var iePos  = appVer.indexOf('msie');
			if (iePos !=-1) {
			is_minor = parseFloat(appVer.substring(iePos+5,appVer.indexOf(';',iePos)))
			is_major = parseInt(is_minor);
			}                       
			var is_konq = false;
			var kqPos   = agt.indexOf('konqueror');
			if (kqPos !=-1) {                 
			is_konq  = true;
			is_minor = parseFloat(agt.substring(kqPos+10,agt.indexOf(';',kqPos)));
			is_major = parseInt(is_minor);
			}
			var is_getElementById   = (document.getElementById) ? "true" : "false";
			var is_getElementsByTagName = (document.getElementsByTagName) ? "true" : "false";
			var is_documentElement = (document.documentElement) ? "true" : "false";
			var is_safari = ((agt.indexOf('safari')!=-1)&&(agt.indexOf('mac')!=-1))?true:false;
			var is_khtml  = (is_safari || is_konq);
			var is_gecko = ((!is_khtml)&&(navigator.product)&&(navigator.product.toLowerCase()=="gecko"))?true:false;
			var is_gver  = 0;
			if (is_gecko) is_gver=navigator.productSub;
			var is_moz   = ((agt.indexOf('mozilla/5')!=-1) && (agt.indexOf('spoofer')==-1) &&
							(agt.indexOf('compatible')==-1) && (agt.indexOf('opera')==-1)  &&
							(agt.indexOf('webtv')==-1) && (agt.indexOf('hotjava')==-1)     &&
							(is_gecko) && 
							((navigator.vendor=="")||(navigator.vendor=="Mozilla")));
			if (is_moz) {
			var is_moz_ver = (navigator.vendorSub)?navigator.vendorSub:0;
			if(!(is_moz_ver)) {
				is_moz_ver = agt.indexOf('rv:');
				is_moz_ver = agt.substring(is_moz_ver+3);
				is_paren   = is_moz_ver.indexOf(')');
				is_moz_ver = is_moz_ver.substring(0,is_paren);
			}
			is_minor = is_moz_ver;
			is_major = parseInt(is_moz_ver);
			}
			
			var is_nav  = ((agt.indexOf('mozilla')!=-1) && (agt.indexOf('spoofer')==-1)
						&& (agt.indexOf('compatible') == -1) && (agt.indexOf('opera')==-1)
						&& (agt.indexOf('webtv')==-1) && (agt.indexOf('hotjava')==-1)
						&& (!is_khtml) && (!(is_moz)));
			
			if ((navigator.vendor)&&
				((navigator.vendor=="Netscape6")||(navigator.vendor=="Netscape"))&&
				(is_nav)) {
			is_major = parseInt(navigator.vendorSub);
			is_minor = parseFloat(navigator.vendorSub);
			}
			var is_nav2 = (is_nav && (is_major == 2));
			var is_nav3 = (is_nav && (is_major == 3));
			var is_nav4 = (is_nav && (is_major == 4));
			var is_nav4up = (is_nav && is_minor >= 4);
			var is_navonly      = (is_nav && ((agt.indexOf(";nav") != -1) ||
								(agt.indexOf("; nav") != -1)) );
			var is_nav6   = (is_nav && is_major==6);    // new 010118 mhp
			var is_nav6up = (is_nav && is_minor >= 6) // new 010118 mhp
			var is_nav62up = (is_nav && is_major==6 && is_minor >= 6.2);    // new 010118 mhp
			var is_nav7up = (is_nav && is_minor >= 7) // new 010118 mhp
			var is_ie   = ((iePos!=-1) && (!is_opera) && (!is_khtml));
			var is_ie4up = (is_ie && is_minor >= 4.4);
			var is_ie5up = (is_ie && is_minor >= 5);
			var is_aol7  = ((agt.indexOf("aol 7")!=-1) || (agt.indexOf("aol7")!=-1));
			var is_aol8  = ((agt.indexOf("aol 8")!=-1) || (agt.indexOf("aol8")!=-1));
			if (is_nav6up) {
			is_minor = navigator.vendorSub;
			}
			var is_win   = ( (agt.indexOf("win")!=-1) || (agt.indexOf("16bit")!=-1) );
			var is_mac    = (agt.indexOf("mac")!=-1);
			var is_macosx    = (agt.indexOf("mac os x")!=-1);
			var is_Flash = false;
			var is_FlashVersion = 0;
			if ((is_nav||is_opera||is_moz)||(is_mac&&is_ie5up)||(is_mac&&is_safari)) {
				var plugin = (navigator.mimeTypes && 
								navigator.mimeTypes["application/x-shockwave-flash"] &&
								navigator.mimeTypes["application/x-shockwave-flash"].enabledPlugin) ?
								navigator.mimeTypes["application/x-shockwave-flash"].enabledPlugin : 0;
				if (plugin) {
					is_Flash = true;
					is_FlashVersion = parseInt(plugin.description.substring(plugin.description.indexOf(".")-1));
				}
			}
			
			if (is_win&&is_ie4up)
			{
				document.write(
					'<scr' + 'ipt language=VBScript>' + '\n' +
					'Dim hasPlayer, playerversion' + '\n' +
					'hasPlayer = false' + '\n' +
					'playerversion = 10' + '\n' +
					'Do While playerversion > 0' + '\n' +
						'On Error Resume Next' + '\n' +
						'hasPlayer = (IsObject(CreateObject("ShockwaveFlash.ShockwaveFlash." & playerversion)))' + '\n' +
						'If hasPlayer = true Then Exit Do' + '\n' +
						'playerversion = playerversion - 1' + '\n' +
					'Loop' + '\n' +
					'is_FlashVersion = playerversion' + '\n' +
					'is_Flash = hasPlayer' + '\n' +
					'<\/sc' + 'ript>'
				);
			}
			
// This is here to overcome the user activation of the SCOL Flash component, Bug #15052
function loadSCOL(SCOLquery)
{
document.write(
              '<object width="630" height="370" type="application/x-shockwave-flash" id="SkillsTestGenerator" name="SkillsTestGenerator" data="testskillselect.swf' + SCOLquery + '">' + '\n' +
                '<param name="movie" value="testskillselect.swf' + SCOLquery + '">' + '\n' +
                '</param>' + '\n' +
                '<param name="quality" value="high"/>' + '\n' +
                '<param name="SCALE" value="exactfit"/>' + '\n' +
              '</object>');
}

			
// The following functions were brought over from GLPerf for the short term purpose of 
// bolting on PS SCOL functionality to meet a delivery deadline.  These functions will be
// deleted for the Dec 2005 release.  Bug #10058 was created to remind development of this.
function setTestType(varType)
{
	document.forms[0].TESTTYPE.value = varType
	okay();
	submit();
}

/* Bug #16698 Sunset CW
// This takes the user to Classroom Wizard from page 4
function funClassroomWizard()
{
	var varURL
	var varURlArray
	var varUserName
	varURL = window.document.location.href
	varURlArray = varURL.split("/")
	varURL = varURlArray[2]
	varUserName = document.forms[0].userName.value

	if(document.forms[0].userName.value != "")
	{
		if(varURL == "test-admin.edperformance.com")
		{
			document.forms[0].action = "https://staging.classroomwizard.com/admin/submit_login.jsp";
		}
		else
		{
			document.forms[0].action = "https://www.classroomwizard.com/admin/submit_login.jsp";
		}
		document.forms[0].submit();
	}
	else
	{
		if(varURL == "test-admin.edperformance.com")
		{
			window.location.href="https://staging.classroomwizard.com/admin/";
		}
		else
		{
			window.location.href="https://www.classroomwizard.com/admin/";
		}
	}
}
Bug #16698 Sunset CW */

function funWriteTest(varContent,varType)
{
	var windowFeatures;
	var varPage;
	var varURL;
	var varWindow;
	varWindow = "RTF"
	var w = 400;
	var h = 300;

	document.forms[0].TYPE.value = varType
	//Set Include Test StudyGuide AnswerKey
	document.forms[0].INCTEST.value = "0"
	document.forms[0].INCSTUDY.value = "0"
	document.forms[0].INCANSWER.value = "0"
	var strinctest = "0";
	var strincstudy = "0";
	var strincanswer = "0";

	if(varContent == "te")
	{
		strinctest = "1"
		document.forms[0].INCTEST.value = "1"
	}
	else
		if(varContent == "sg")
		{
			strincstudy = "1"
			document.forms[0].INCSTUDY.value = "1"
		}
		else
			if(varContent == "ak")
			{
				strincanswer = "1"
				document.forms[0].INCANSWER.value = "1"
			}
			else
				if(varContent == "all")
				{
					strinctest = "1"
					strincstudy = "1"
					strincanswer = "1"
					document.forms[0].INCTEST.value = "1"
					document.forms[0].INCSTUDY.value = "1"
					document.forms[0].INCANSWER.value = "1"
				}

	varURL = "preview.asp"
	windowFeatures = 'width=' + w + ',height=' + h + ',status=0,menubar=1,toolbar=0,location=0,directories=0,resizable=1,scrollbars=1,screenX=0,screenY=0,top=0,left=0';
	varPageString = varURL

	if(varContent == "te"||"sg"||"ak")
	{
		varContent = open(varPageString,varWindow,windowFeatures);
	}
	else
	{
		window.location.href = varPageString
	}
}

function funWriteSID(varSkillList,
					varUID,
					varSID,
					varOption,
					varQID,
					varAID,
					varLID,
					varCCID,
					varTYID,
					varSort,
					varTestType,
					varTemplate,
					varGrade,
					varUnit)
{
//	alert( 'varSkillList=' + varSkillList + ',' +
//		   'varUID=' + varUID + ',' +
//		   'varSID=' + varSID + ',' +
//		   'varOption=' + varOption + ',' +
//		   'varQID=' + varQID + ',' +
//		   'varAID=' + varAID + ',' +
//		   'varLID=' + varLID + ',' +
//		   'varCCID=' + varCCID + ',' +
//		   'varTYID=' + varTYID + ',' +
//		   'varTesttyp=' + varTestType + ',' +
//		   'varTemplate=' + varTemplate + ',' +
//		   'varGrade=' + varGrade + ',' +
//		   'varUnit=' + varUnit );

	document.forms[0].SKILLLIST.value = varSkillList
	document.forms[0].SID.value = varSID
	document.forms[0].UID.value = varUID
	document.forms[0].Option.value = varOption
	document.forms[0].QID.value = varQID
	document.forms[0].AID.value = varAID
	document.forms[0].LID.value = varLID
	document.forms[0].CCID.value = varCCID
	document.forms[0].TYID.value = varTYID
	document.forms[0].SORT.value = varSort
	document.forms[0].TestType.value = varTestType
	document.forms[0].TEMPLATE.value = varTemplate
	document.forms[0].GRADE.value = varGrade
	document.forms[0].UNIT.value = varUnit
	
	var stroption = document.forms[0].Option.value
	var arrOption = stroption.split(",")
	document.forms[0].NumberOfQuestions.value = arrOption[0]
	if(arrOption[1]== "true")
	{
		document.forms[0].IncludeDontKnow.value = 1
	}
	else
	{
		document.forms[0].IncludeDontKnow.value = 0
	}
	
	if(arrOption[2]== "true")
	{
		document.forms[0].IncludeCorrect.value = 1
	}
	else
	{
		document.forms[0].IncludeCorrect.value = 0
	}
}

function funGetCourseName()
{
	document.forms[0].COURSENAME.value = document.forms[0].COID.options[document.forms[0].COID.selectedIndex].text
}

function ChangeTextBGColor(selectedChartColorDDName, textBGColorDDName) {

    //alert(selectedChartColorDDName + ' ' + textBGColorDDName);
    var ddChartBGColor = document.getElementsByName(selectedChartColorDDName);
    var ddTextBGColor = document.getElementsByName(textBGColorDDName);

    for (var i = 0; i < ddTextBGColor[0].options.length; i++) {
        if (ddTextBGColor[0].options[i].text == ddChartBGColor[0].options[ddChartBGColor[0].selectedIndex].text)
            ddTextBGColor[0].options[i].selected = true;
    }
}

function UpdatePbLabels(labelList)
{
    // alert(labelList);
   
    myArr = labelList.split(",");

    // There will always be at least one set
    document.forms[0].Label1.value = myArr[0];
    document.forms[0].ShortLabel1.value = myArr[1];

    if (myArr.length > 2)
    {
        document.forms[0].Label2.value = myArr[2];
        document.forms[0].ShortLabel2.value = myArr[3];
    }

    if (myArr.length > 4)
    {
        document.forms[0].Label3.value = myArr[4];
        document.forms[0].ShortLabel3.value = myArr[5];
    }

    if (myArr.length > 6) {
        document.forms[0].Label4.value = myArr[6];
        document.forms[0].ShortLabel4.value = myArr[7];
    }

    if (myArr.length > 8) {
        document.forms[0].Label5.value = myArr[8];
        document.forms[0].ShortLabel5.value = myArr[9];
    }

    if (myArr.length > 10) {
        document.forms[0].Label6.value = myArr[10];
        document.forms[0].ShortLabel6.value = myArr[11];
    }

    if (myArr.length > 12) {
        document.forms[0].Label7.value = myArr[12];
        document.forms[0].ShortLabel7.value = myArr[13];
    }            
}

function UpdatePbColors(colorList)
{
    myArr = colorList.split(",");

    //alert(colorList);

    // There will always be at least one set
    document.forms[0].ChartColor1.value = myArr[0];
    document.forms[0].HatchPattern1.value = myArr[1];
    document.forms[0].TextColor1.value = myArr[2];
    document.forms[0].BackgroundColor1.value = myArr[3];
    

    if (myArr.length > 4)
    {
        document.forms[0].ChartColor2.value = myArr[4];
        document.forms[0].HatchPattern2.value = myArr[5];
        document.forms[0].TextColor2.value = myArr[6];
        document.forms[0].BackgroundColor2.value = myArr[7];
    }

    if (myArr.length > 8)
    {
        document.forms[0].ChartColor3.value = myArr[8];
        document.forms[0].HatchPattern3.value = myArr[9];
        document.forms[0].TextColor3.value = myArr[10];
        document.forms[0].BackgroundColor3.value = myArr[11];
    }

    if (myArr.length > 12)
    {
        document.forms[0].ChartColor4.value = myArr[12];
        document.forms[0].HatchPattern4.value = myArr[13];
        document.forms[0].TextColor4.value = myArr[14];
        document.forms[0].BackgroundColor4.value = myArr[15];
    }

    if (myArr.length > 16) {
        document.forms[0].ChartColor5.value = myArr[16];
        document.forms[0].HatchPattern5.value = myArr[17];
        document.forms[0].TextColor5.value = myArr[18];
        document.forms[0].BackgroundColor5.value = myArr[19];
    }

    if (myArr.length > 20) {
        document.forms[0].ChartColor6.value = myArr[20];
        document.forms[0].HatchPattern6.value = myArr[21];
        document.forms[0].TextColor6.value = myArr[22];
        document.forms[0].BackgroundColor6.value = myArr[23];
     }

    if (myArr.length > 24) {
        document.forms[0].ChartColor7.value = myArr[24];
        document.forms[0].HatchPattern7.value = myArr[25];
        document.forms[0].TextColor7.value = myArr[26];
        document.forms[0].BackgroundColor7.value = myArr[27];
    }            
}

function EmptyFieldValue(fieldName)
{
    var toExecute = 'document.forms[0].' + fieldName + '.value = \'\'';
    eval(toExecute);
}


function EmptyNewLabelSetFields(numberOfBands)
{
    with (document.forms[0])
    {
        LabelSetName.value = '';
        CopyLabelSet.selectedIndex = 0;

        Label1.value = '';
        ShortLabel1.value = '';

        if (numberOfBands >= 2)
        {
            Label2.value = '';
            ShortLabel2.value = '';
        }

        if (numberOfBands >= 3) {
            Label3.value = '';
            ShortLabel3.value = '';
        }


        if (numberOfBands >= 4) {
            Label4.value = '';
            ShortLabel4.value = '';
        }

        if (numberOfBands >= 5) {
            Label5.value = '';
            ShortLabel5.value = '';
        }

        if (numberOfBands >= 6) {
            Label6.value = '';
            ShortLabel6.value = '';
        }

        if (numberOfBands >= 7) {
            Label7.value = '';
            ShortLabel7.value = '';
        }        
        
    }
}

function EmptyNewColorSetFields(numberOfBands) {
    with (document.forms[0]) {
        ColorSetName.value = '';
        CopyColorSet.selectedIndex = 0;

        ChartColor1.selectedIndex = 0;
        HatchPattern1.selectedIndex = 0;
        TextColor1.selectedIndex = 2;
        BackgroundColor1.selectedIndex = 2;
        
        if (numberOfBands >= 2) {
            ChartColor2.selectedIndex = 0;
            HatchPattern2.selectedIndex = 0;
            TextColor2.selectedIndex = 2;
            BackgroundColor2.selectedIndex = 2;
        }

        if (numberOfBands >= 3) {
            ChartColor3.selectedIndex = 0;
            HatchPattern3.selectedIndex = 0;
            TextColor3.selectedIndex = 2;
            BackgroundColor3.selectedIndex = 2;
        }

        if (numberOfBands >= 4) {
            ChartColor4.selectedIndex = 0;
            HatchPattern4.selectedIndex = 0;
            TextColor4.selectedIndex = 2;
            BackgroundColor4.selectedIndex = 2;
        }

        if (numberOfBands >= 5) {
            ChartColor5.selectedIndex = 0;
            HatchPattern5.selectedIndex = 0;
            TextColor5.selectedIndex = 2;
            BackgroundColor5.selectedIndex = 2;
        }

        if (numberOfBands >= 6) {
            ChartColor6.selectedIndex = 0;
            HatchPattern6.selectedIndex = 0;
            TextColor6.selectedIndex = 2;
            BackgroundColor6.selectedIndex = 2;
        }

        if (numberOfBands >= 7) {
            ChartColor7.selectedIndex = 0;
            HatchPattern7.selectedIndex = 0;
            TextColor7.selectedIndex = 2;
            BackgroundColor7.selectedIndex = 2;
        }                         
    }
}
//Function to enable and disable CSV Foxpro controls based on file type
function CheckforCSVorDBFFile() 
{

if(document.getElementById('IsCSVUpload').checked==true)
{
document.getElementById('SkillDataCSVFile').disabled=false;
document.getElementById('SkillDataFile').disabled=true;
document.getElementById('SkillTextFile').disabled=true;
}
else
{
document.getElementById('SkillDataFile').disabled=false;
document.getElementById('SkillDataCSVFile').disabled=true;
document.getElementById('SkillTextFile').disabled=false;
}
}

function CheckforCSVorDBFFileReUpload(fileType) 
{
    if (fileType.substring(fileType.length - 3, fileType.length) == 'csv') 
    {
        
        document.getElementById('IsCSVUpload').checked = true;
        document.getElementById('IsCSVUpload').value = 'CSV';
        document.getElementById('SkillDataCSVFile').disabled = false;
        document.getElementById('SkillDataFile').disabled = true;
        document.getElementById('SkillTextFile').disabled = true;
       // alert(document.getElementById('IsCSVUpload').value);
         }
    else {
        document.getElementById('IsCSVUpload').checked = false;
        document.getElementById('IsCSVUpload').value = 'DBF';
        document.getElementById('SkillDataFile').disabled = false;
        document.getElementById('SkillDataCSVFile').disabled = true;
        document.getElementById('SkillTextFile').disabled = false;
       
    }


}

function getQuerystring(key, default_) {
    if (default_ == null) default_ = "";
    key = key.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
    var regex = new RegExp("[\\?&]" + key + "=([^&#]*)");
    var qs = regex.exec(window.location.href);
    if (qs == null)
        return default_;
    else
        return qs[1];
    
}


// TTP: 23356, Reset all selected ethnicity checkboxes if Not Specified option is checked
function checkNotSpecified(checkBox) {
    var selectedEntity = document.getElementsByName(checkBox);
    var ns = false;

    if (selectedEntity == null || selectedEntity.length == 0)
        return;
    
    // Check whether NS is selected for every selection
    for (var i = 0; i < selectedEntity.length; i++) {
        // When Not Specified option is selected
        // value == 0; Not Specified / None
        if (selectedEntity[i].checked == true && selectedEntity[i].value == 0) 
        {
            ns = true;           
            break;            
        }
    }   
    // if NS is selected
    if (ns == true) 
    {
        for (var i = 0; i < selectedEntity.length; i++) 
        {
            if (selectedEntity[i].value != 0)
            {
                // Uncheck all selected ethnicities
                if (selectedEntity[i].checked == true) 
                {
                    selectedEntity[i].checked = false;
                }                  
                //disable all ethnicities other than 'Not Specified'
                selectedEntity[i].disabled = true;
            }  
        }
    }
    // Enable all ethnicities if NS is not selected 
    else 
    {
        for (var i = 0; i < selectedEntity.length; i++)
        {           
            if (selectedEntity[i].disabled == true) 
            {
                selectedEntity[i].disabled = false;
            }
        }
    } 
    
}
//UST: 02/22/11
function displayNextButton(gains) { 
    var selectedEntityNext = document.getElementsByName('btnNext');    
    var EntityOk=document.getElementsByName('btnOk');
    if (selectedEntityNext == null || selectedEntityNext.length == 0)
    return;
   if (EntityOk == null || EntityOk.length == 0)
    return;   
 if(gains=="Gains")

 {           
   for (var i = 0; i < selectedEntityNext.length; i++) {              
             selectedEntityNext[i].disabled  = false;
       }
       
   for (var i = 0; i < EntityOk.length; i++) {                  
           EntityOk[i].disabled = true;
       }    
       
       disableDates(gains);
 }
 else
 {
   for (var i = 0; i < selectedEntityNext.length; i++) {                 
           selectedEntityNext[i].disabled  = true;
       }       
   for (var i = 0; i < EntityOk.length; i++) {               
           EntityOk[i].disabled = false;
       }    

    var startMonth=document.getElementsByName('StartMonth');
    var endMonth=document.getElementsByName('EndMonth');

    var browserName = _getBrowserName();

	switch (browserName)
	{
		case "IE":
			startMonth[0].parentNode.parentNode.parentNode.style.display = 'block';
            endMonth[0].parentNode.parentNode.parentNode.style.display = 'block';
			break;
			
		default:
			startMonth[0].parentNode.parentNode.parentNode.style.display = 'table-row';
            endMonth[0].parentNode.parentNode.parentNode.style.display = 'table-row';
			
			break;
	}
        
}


}
function disableDates(gains)
{
    var startMonth=document.getElementsByName('StartMonth');
    var startDay=document.getElementsByName('StartDay');
    var startYear=document.getElementsByName('StartYear');
    var endMonth=document.getElementsByName('EndMonth');
    var endDay=document.getElementsByName('EndDay');
    var endYear=document.getElementsByName('EndYear');
 
    if(gains == "Gains")
    {
        if (startMonth[0].selectedIndex == 0)
        {
            startMonth[0].value = "01";
        }
        
        if (startDay[0].selectedIndex == 0)
        {
            startDay[0].value = "01";
        }

        if (startYear[0].selectedIndex == 0)
        {
            startYear[0].value = "2001";
        }

        if (endMonth[0].selectedIndex == 0)
        {
            endMonth[0].value = "01";
        }
        
        if (endDay[0].selectedIndex == 0)
        {
            endDay[0].value = "01";
        }

        if (endYear[0].selectedIndex == 0)
        {
            endYear[0].value = "2001";
        }

        startMonth[0].parentNode.parentNode.parentNode.style.display = 'none';
        endMonth[0].parentNode.parentNode.parentNode.style.display = 'none';
    }
}

function CourseIdSelectionChanged(cmbSelectCourseId, txtSearchByCourse) {
    var selectedIndex = cmbSelectCourseId.selectedIndex;
    var contents = cmbSelectCourseId.options[selectedIndex].value;
    var courseInfo = contents.split(",");
    txtSearchByCourse.value = courseInfo[0];
}

function DisableGuestAccountOption(roleName)
{
	if(roleName == "Location Controller Staff")
	{
	   document.forms[0].IsGuest.checked = false;
	   document.forms[0].IsGuest.disabled = true; 
	}
	else
	{
	   document.forms[0].IsGuest.disabled = false; 
	}
}

function AssignRubricPoints(points,rowId)
{
//    alert("Rating " + rating);
//    alert("rowId " + rowId);
    var selectedRow = document.getElementById(rowId);
    if(selectedRow != null)
    {
         var pointsTextBox = selectedRow.getElementsByTagName("input")[0];
         if(pointsTextBox != null)
         {
            if(points == 'Omitted') {
                pointsTextBox.value = 0;
            }
            else if(points == -1)
            {
                pointsTextBox.value = '';
            }
            else
            {
                pointsTextBox.value = points;
            }
         }
    }
}

function validateTextAreaContentLength(ta,e,maxLength) {    
    if(ta.value.length >= maxLength) {
        ta.value = ta.value.substring(0, maxLength);
        e.preventDefault();
    }
}

// tkosirog - TTP 28416 - assign points to a specific text box.
function AssignRubricPointsFromDropDown(points,listElement)
{
    var pointsTextBox = document.getElementById(listElement.id);

    if(pointsTextBox != null)
    {
        if(points == 'Omitted') {
            pointsTextBox.value = 0;
        }
        else if(points == -1)
        {
            pointsTextBox.value = '';
        }
        else
        {
            pointsTextBox.value = points;
        }
    }
}

function submitAndRedirect(redirectUrl){
    var redirectTo = document.getElementsByName('GoToUrl');
    var listOfItems = document.getElementsByName('ListNumber');
    var objectCount = document.getElementsByName('ObjectCount');
    objectCount[0].value = listOfItems.length;
    redirectTo[0].value = redirectUrl;
    okay();
    document.getElementsByTagName('form')[0].submit();    
}

// Axis|2012-07-19| Added for reseting multiple selection Dropdown if no options is selected STARTS
function resetDropDownToDefaultValue(dropDown)
{
    if(dropDown.value == "")
    {
        resetDropDown(dropDown);
    }
}
// Axis|2012-07-19| Added for reseting multiple selection Dropdown if no options is selected ENDS

//Axis|2012-08-01 -Toggle selection off-Start.

function toggleSelectionOff(checkboxName)
{
	with (document.forms[0])
	{
		for (var i = 0; i < elements.length; i++)
		{
			if (elements[i].type == "checkbox")
			{
				if ((checkboxName == null) || (elements[i].name == checkboxName))
				{
				    if (elements[i].value != 0) {	 
				        if(!elements[i].disabled && elements[i].checked)
				            elements[i].checked = !elements[i].checked;
				    }
				}
			}
		}

        //It will remove the selected folders and published tests from the field value (mass-schedule.ssp)
        SelectedFolders.value = '';
        SelectedTests.value = '';
	}
    document.getElementById('tso').style.display='none';
}
//Axis|2012-08-01 -Toggle selection off-End.

// Axis|2012-08-13| Added for reseting click count on button STARTS
function resetClickCount()
{
    clickCount=0;
}
// Axis|2012-07-19| Added for reseting click count on button ENDS

// Axis|2012-09-22| Added for unchecking the selected checboxes forcefully for TTP 27441 STARTS
function forceUncheckCheckboxes(checboxname) {
    with (document.forms[0]) {
        for (var i = 0; i < elements.length; i++) {
            if (elements[i].type == "checkbox") {
                if ((checboxname == null) || (elements[i].name == checboxname)) {
                    if (elements[i].value != 0) {
                        if (!elements[i].disabled && elements[i].checked)
                            elements[i].checked = !elements[i].checked;
                    }
                }
            }
        }
    }
}
// Axis|2012-09-22| Added for unchecking the selected checboxes forcefully for TTP 27441 ENDS

// Axis|2012-09-22| Added for removing delimited value from the field which is manually removed by user TTP 27479 STARTS
function delimitedRemoveItem(id, type)
{
    var Id=id;
    var Type=type;

    with(document.forms[0])
    {
        if(Type!='F')
        {
            if(SelectedTests.value.indexOf(Id)>=0)
            {
                var tests=SelectedTests.value.split(',');
                var newtests="";

                for(var i=0;i<tests.length;i++)
                {
                    if(tests[i]!=Id)
                    {
                        if(newtests.length!=0 && newtests.charAt(newtests.length-1)!=',')
                            newtests=newtests+",";

                        newtests=newtests+tests[i];
                    }
                    else
                    {
                        if(newtests.length!=0 && newtests.charAt(newtests.length-1)!=',')
                            newtests=newtests+",";
                    }
                }

                if(newtests.charAt(tests.length-1)==',')
                    newtests = newtests.substring(0,tests.length-1);

                SelectedTests.value=newtests;
            }
        }
        else
        {
            if(SelectedFolders.value.indexOf(Id)>=0)
            {
                var folders=SelectedFolders.value.split(',');
                var newfolders="";

                for(var i=0;i<folders.length;i++)
                {
                    if(folders[i]!=Id)
                    {
                        if(newfolders.length!=0 && newfolders.charAt(newfolders.length-1)!=',')
                            newfolders=newfolders+",";

                        newfolders=newfolders+folders[i];
                    }
                    else
                    {
                        if(newfolders.length!=0 && newfolders.charAt(newfolders.length-1)!=',')
                            newfolders=newfolders+",";
                    }
                }

                if(newfolders.charAt(newfolders.length-1)==',')
                    newfolders = newfolders.substring(0,newfolders.length-1);

                SelectedFolders.value=newfolders;
            }
        }
    }
}
// Axis|2012-09-22| Added for removing delimited value from the field which is manually removed by user TTP 27479 ENDS

//End