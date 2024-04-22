$(document).ready(function () {
    // Function to handle input change events for title field
    $('#titleInput').on('input', function () {
        performLiveSearch();
    });
    $('#category_id').on('change', function () {
        performLiveSearch();
    });

    // Function to perform live search
    function performLiveSearch() {
        var title = $('#titleInput').val().trim();
        var category_id = $('#category_id').val();

        // Send AJAX request to perform live search
        $.ajax({
            url: '/live-search',
            type: 'GET',
            data: {
                title,
                category_id
            },
            success: function (response) {
                // Display live search results
                displayLiveSearchResults(response);
            },
            error: function (xhr, status, error) {
                // Handle errors
                console.error(error);
            }
        });
    }

    // Function to display live search results
    function displayLiveSearchResults(results) {
        console.log(results)
        // Clear previous search results
        $('#servicesContainer').empty();

        // Loop through the results and display them
        results.forEach(function (result) {
            $('#servicesContainer').append(
                `<div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".3s">
                <img src="http://127.0.0.1:8000/storage/images/services/${result.image}" class="img-fluid w-100 rounded-top" alt="">
                <div class="rounded-bottom bg-light">
                    <div class="d-flex justify-content-between p-4 pb-2">
                        <span class="pe-2 text-dark"><i class="fa fa-user me-2"></i>${result.user_id}</span>
                        <span class="text-dark"><i class="fas fa-calendar-alt me-2"></i>${result.created_at}</span>
                    </div>
                    <div class="px-4 pb-0">
                        <h4>${result.title}</h4>
                        <p>${result.description}.</p>
                    </div>
                    <div class="p-4 py-2 d-flex justify-content-between bg-primary rounded-bottom blog-btn">
                        <a href="/service/${result.id}" type="button" class="btn btn-primary border-0">View More</a>
                        <a href="#" class="my-auto btn-primary border-0"><i class="fa fa-comments me-2"></i>23 Comments</a>
                    </div>
                </div>
            </div>`
            );
            // Modify this as per your search result structure
        });
    }
});
