/*
AXIS |07-14-2012| Added for display item statistics in Item Banks and Test Drafts
* Show/Hide statisics rows based on the user selection.
* Enable/Disable Statistics column options in the select box based on user selection

*/
$(document).ready(function () {

    //-------------------------------Section: Events and Initial Page Load Starts------------------------------------------------

    // List of statistics sortable columns
    var statiasticsSortableColumns;

    //change array values according to sorting aplied
    if ($('img[src="/images/icnsortdownblack.gif"]').length == 2)
        statiasticsSortableColumns = ["pValue", "PointBiserial", "DiscriminationIndex"];
    else
        statiasticsSortableColumns = ["pValueAsc", "PointBiserialAsc", "DiscriminationIndexAsc"];        

    // Flag Show Statistics
    var showStatistics = false;

    // Set cell padding for the tables to display statistics data correctly. The default set in OASIS is "5". 
    if ($('#QuestionList').length > 0) {
        $('#QuestionList').find('table').each(function () {
            if (this.cellPadding == 5) {
                this.cellPadding = 2;
            }
        });
    }

    //If user has changed the state of the top show statistics checkbox then set the same 
    //value for bottom show statistics checkbox and set the flag based on the the user selection. 
    if ($("#IncludeItemStatistics1").get(0) != undefined) {
        showStatistics = $("#IncludeItemStatistics1").get(0).checked;
        if ($("#IncludeItemStatistics2").get(0) != undefined) {
            $("#IncludeItemStatistics2").get(0).checked = showStatistics;
        }
    }

    // If user has changed the state of the bottom show statistics checkbox then set the same 
    // value for top show statistics checkbox and set the flag based on the the user selection. 
    if ($("#IncludeItemStatistics2").get(0) != undefined) {
        showStatistics = $("#IncludeItemStatistics2").get(0).checked;
        if ($("#IncludeItemStatistics1").get(0) != undefined) {
            $("#IncludeItemStatistics1").get(0).checked = showStatistics;
        }
    }

    // Handle top show statistics checkbox click event. Set the same value for bottom show 
    // statistics checkbox and set the flag based on the the user selection.Also sets the value of cookie.
    $("#IncludeItemStatistics1").click(function () {
        showStatistics = $(this).get(0).checked;
        if ($("#IncludeItemStatistics2").get(0) != undefined) {
            $("#IncludeItemStatistics2").get(0).checked = showStatistics;
        }
        setCookieValue("IncludeItemStatistics", convertBooleanToTorF(showStatistics), "/");
        hideOrShowRows("#statistics", showStatistics, true);
        EnableDisableStatisticsColumns(statiasticsSortableColumns, showStatistics, false);
    });

    // Handle bottom show statistics checkbox click event. Set the same value for top show 
    // statistics checkbox and set the flag based on the the user selection.Also sets the value of cookie.
    $("#IncludeItemStatistics2").click(function () {
        showStatistics = $(this).get(0).checked;
        if ($("#IncludeItemStatistics1").get(0) != undefined) {
            $("#IncludeItemStatistics1").get(0).checked = showStatistics;
        }
        setCookieValue("IncludeItemStatistics", convertBooleanToTorF(showStatistics), "/");
        hideOrShowRows("#statistics", showStatistics, true);
        EnableDisableStatisticsColumns(statiasticsSortableColumns, showStatistics, false);
    });

    //Axis | 2012-09-14 fixed for TTP 27349 | Restricted Keyboard for keys P,D,p,d on sort order dropdown when showStatistics is OFF
    $('select').keypress(function (event) {
        if (showStatistics == false && (event.keyCode == 112 || event.keyCode == 100 || event.keyCode == 80 || event.keyCode == 68)) {
            event.preventDefault();
        }
    });

    // Show/Hide Statistics rows
    hideOrShowRows("#statistics", showStatistics, false);

    // Enable/Disable statistics sortable columns in sort select box
    EnableDisableStatisticsColumns(statiasticsSortableColumns, showStatistics, true);

    //-------------------------------Section: Events and Initial Page Load Ends--------------------------------------------------

    //-------------------------------Section: Java Script functions Starts------------------------------------------------

    /*****************************************Function hideOrShowRows Starts******************************************* 
    id             - Id of statistics row
    showStatistics - Show/Hide statistics
    animated       - Show statistics check box state changed?
    *******************************************************************************************************************/
    function hideOrShowRows(statisticsRowId, showStatistics, animated) {
        // Get statistics rows
        var statisticsRows = $(statisticsRowId);

        // If count of rows is greater than 0 then proceed to hide the rows
        if (statisticsRows.length > 0) {
            // Show/Hide Statistics rows    
            if (showStatistics) {
                if (animated) {
                    $("table tr[id='statistics']").fadeIn();
                }
                else {
                    $("table tr[id='statistics']").show();
                }
            }
            else {
                if (animated) {
                    $("table tr[id='statistics']").fadeOut();
                }
                else {
                    $("table tr[id='statistics']").hide();
                }
            }
        }
    };
    /*****************************************Function hideOrShowRows Ends*******************************************/

    /*****************************************Function EnableDisableStatisticsColumns Starts************************** 
    statiasticsSortableColumns - List of statistics sortable columns
    Enable                     - Enable/Disable statistics sortable columns
    *******************************************************************************************************************/
    function EnableDisableStatisticsColumns(statiasticsSortableColumns, showStatistics, isReadyState) {

        //If user unchecks the show statistics then change selected index to default
        var triggerChangeEvent = false;
        var selectedColumn = $('#SelectItemSort :selected').val();

        var isOptionDisableNotSupported = ($.browser.msie && parseFloat($.browser.version) < 8);

        //Loop through all the statistics columns and Enable/Disable the same 
        $(statiasticsSortableColumns).each(function (index, columnName) {
            var option = "select[name='SelectItemSort'] option[value='" + columnName + "']";
            //Internate Explorer 7.0 does not supports 'Disable' attribute for select option.Use optgroup 
            //In this case
            if (isOptionDisableNotSupported) {
                var i = ["P-Value", "Point Biserial", "Discrimination Index"];

                if (!showStatistics) {

                    var optionText = i[index];
                    $("select[name='SelectItemSort'] option[value='" + columnName + "']").remove();
                    $('select[name=SelectItemSort]').append('<optgroup label="' + optionText + '" value ="' + columnName + '" style="color:gray">' + optionText + '</optgroup>');
                }
                else if (!isReadyState) {
                    var optgroup = $("select[name='SelectItemSort'] optgroup[value='" + columnName + "']");
                    if ($(optgroup).length > 0) {
                        var optionText = $(optgroup)[0].label;
                        $(optgroup).remove();
                        $('select[name=SelectItemSort]').append('<option value="' + columnName + '">' + optionText + '</option>');
                    }
                }
            }
            else {
                $(option).attr('disabled', !showStatistics);
            }

            if (!isReadyState && !showStatistics && selectedColumn == columnName) {
                triggerChangeEvent = true;
            }
        });

        //The change event of select box does not get automatically triggered by just changing the index.
        if (triggerChangeEvent) {
            var selectItemSort = "select[name='SelectItemSort']";
            $(selectItemSort).each(function () {
                $(this).val($("#SelectItemSort option:first").val())
            });
            $("#SelectItemSort").trigger("change");
        }
    };
    /*****************************************Function EnableDisableStatisticsColumns Ends*****************************/
    //-------------------------------Section: Java Script functions Ends--------------------------------------------------

});


