$(document).ready(function () {
    let selectdate = $('#selectdate');
    let selecttime = $('#select_time');

    // Event listener for changes in the select element
    $('#theaterSelect').change(function () {
        // Get the selected option value
        var selectedTheaterId = $(this).val();
        console.log(selectedTheaterId)
        
        // Perform AJAX request
        $.ajax({
            type: 'POST',
            url: 'theater_detail.php', // Update with the correct path to your server-side script
            data: {
                selected_theater: selectedTheaterId
            },
            success: function (response) {
                // Handle the response from the server
                console.log(response);
                selectdate.html(response);

            }
            // error: function (xhr, status, error) {
            //     // Handle errors
            //     console.error(xhr.responseText);
            // }
        });
    });



     $('#selectdate').change(function () {
        // Get the selected option value
     
        var selectedTheater_date = $(this).val();
        console.log(selectedTheater_date)
        
       
        $.ajax({
                        type: 'POST',
                        url: 'theater_detail.php', // Update with the correct path to your server-side script
                        data: {
                           
                           selected_Date : selectedTheater_date,
                          // selected_theater: 9
                        
                        },
                        success: function (response) {
                            // Handle the response from the server
                            console.log(response);
                            selecttime.html(response);
                        }
                        // error: function (xhr, status, error) {
                        //     // Handle errors
                        //     console.error(xhr.responseText);
                        // }
                    });
                });
            });
        









