<!-- Country-selector modal-->
<div class="modal fade" id="country-selector">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content country-select-modal">
            <div class="modal-header">
                <h6 class="modal-title">Choose Country</h6><button aria-label="Close" class="btn-close"
                    data-bs-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <ul class="row p-3">
                    <li class="col-lg-6 mb-2">
                        <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block active">
                            <span class="country-selector"><img alt="" src="../assets/images/flags/us_flag.jpg"
                                    class="me-3 language"></span>USA
                        </a>
                    </li>
                    <li class="col-lg-6 mb-2">
                        <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                            <span class="country-selector"><img alt=""
                                    src="../assets/images/flags/italy_flag.jpg" class="me-3 language"></span>Italy
                        </a>
                    </li>
                    <li class="col-lg-6 mb-2">
                        <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                            <span class="country-selector"><img alt=""
                                    src="../assets/images/flags/spain_flag.jpg" class="me-3 language"></span>Spain
                        </a>
                    </li>
                    <li class="col-lg-6 mb-2">
                        <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                            <span class="country-selector"><img alt=""
                                    src="../assets/images/flags/india_flag.jpg" class="me-3 language"></span>India
                        </a>
                    </li>
                    <li class="col-lg-6 mb-2">
                        <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                            <span class="country-selector"><img alt=""
                                    src="../assets/images/flags/french_flag.jpg" class="me-3 language"></span>French
                        </a>
                    </li>
                    <li class="col-lg-6 mb-2">
                        <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                            <span class="country-selector"><img alt=""
                                    src="../assets/images/flags/russia_flag.jpg" class="me-3 language"></span>Russia
                        </a>
                    </li>
                    <li class="col-lg-6 mb-2">
                        <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                            <span class="country-selector"><img alt=""
                                    src="../assets/images/flags/germany_flag.jpg" class="me-3 language"></span>Germany
                        </a>
                    </li>
                    <li class="col-lg-6 mb-2">
                        <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                            <span class="country-selector"><img alt=""
                                    src="../assets/images/flags/argentina.jpg" class="me-3 language"></span>Argentina
                        </a>
                    </li>
                    <li class="col-lg-6 mb-2">
                        <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                            <span class="country-selector"><img alt="" src="../assets/images/flags/malaysia.jpg"
                                    class="me-3 language"></span>Malaysia
                        </a>
                    </li>
                    <li class="col-lg-6 mb-2">
                        <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                            <span class="country-selector"><img alt="" src="../assets/images/flags/turkey.jpg"
                                    class="me-3 language"></span>Turkey
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Country-selector modal-->



<!-- FOOTER -->
<footer class="footer">
    <div class="container">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-md-12 col-sm-12 text-center">
                Copyright © <span id="year"></span> <a href="javascript:void(0)"> {{ env('APP_NAME') }} </a>.
                Designed
                with <span class="fa fa-heart text-danger"></span> by <a href="javascript:void(0)"> Muba Khan
                </a> All rights reserved.
            </div>
        </div>
    </div>
</footer>
<!-- FOOTER CLOSED -->
</div>

<!-- BACK-TO-TOP -->
<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>


{{-- Scroll Bar --}}
{{-- <script src="{{ asset('../assets/plugins/p-scroll/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('../assets/plugins/p-scroll/pscroll.js') }}"></script>
<script src="{{ asset('../assets/plugins/p-scroll/pscroll-1.js') }}"></script>

<!-- DROPIFY CSS -->
<link href="{{ asset('assets/plugins/dropify/css/dropify.css') }}" rel="stylesheet" />

<!-- JQUERY JS -->
<script src="{{ asset('../assets/js/jquery.min.js') }}"></script>

<!-- BOOTSTRAP JS -->
<script src="{{ asset('../assets/plugins/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('../assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- SPARKLINE JS-->
<script src="{{ asset('../assets/js/jquery.sparkline.min.js') }}"></script>

<!-- Sticky js -->
<script src="{{ asset('../assets/js/sticky.js') }}"></script>

<!-- CHART-CIRCLE JS-->
<script src="{{ asset('../assets/js/circle-progress.min.js') }}"></script>

<!-- PIETY CHART JS-->
<script src="{{ asset('../assets/plugins/peitychart/jquery.peity.min.js') }}"></script>
<script src="{{ asset('../assets/plugins/peitychart/peitychart.init.js') }}"></script>

<!-- SIDEBAR JS -->
<script src="{{ asset('../assets/plugins/sidebar/sidebar.js') }}"></script>

<!-- Perfect SCROLLBAR JS-->
<script src="{{ asset('../assets/plugins/p-scroll/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('../assets/plugins/p-scroll/pscroll.js') }}"></script>
<script src="{{ asset('../assets/plugins/p-scroll/pscroll-1.js') }}"></script>

<!-- INTERNAL CHARTJS CHART JS-->
<script src="{{ asset('../assets/plugins/chart/Chart.bundle.js') }}"></script>
<script src="{{ asset('../assets/plugins/chart/rounded-barchart.js') }}"></script>
<script src="{{ asset('../assets/plugins/chart/utils.js') }}"></script>

<!-- INTERNAL SELECT2 JS -->
<script src="{{ asset('../assets/plugins/select2/select2.full.min.js') }}"></script>
<script src="{{ asset('../assets/js/select2.js') }}"></script>

<!-- INTERNAL Data tables js-->
<script src="{{ asset('../assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('../assets/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
<script src="{{ asset('../assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>

<!-- INTERNAL Flot JS -->
<script src="{{ asset('../assets/plugins/flot/jquery.flot.js') }}"></script>
<script src="{{ asset('../assets/plugins/flot/jquery.flot.fillbetween.js') }}"></script>
<script src="{{ asset('../assets/plugins/flot/chart.flot.sampledata.js') }}"></script>
<script src="{{ asset('../assets/plugins/flot/dashboard.sampledata.js') }}"></script>

<!-- INTERNAL Vector js -->
<script src="{{ asset('../assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
<script src="{{ asset('../assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>

<!-- SIDE-MENU JS-->
<script src="{{ asset('../assets/plugins/sidemenu/sidemenu.js') }}"></script>

<!-- TypeHead js -->
<script src="{{ asset('../assets/plugins/bootstrap5-typehead/autocomplete.js') }}"></script>
<script src="{{ asset('../assets/js/typehead.js') }}"></script>

<!-- INTERNAL INDEX JS -->
<script src="{{ asset('../assets/js/index1.js') }}"></script>

<!-- Color Theme js -->
<script src="{{ asset('../assets/js/themeColors.js') }}"></script>

<!-- CUSTOM JS -->
<script src="{{ asset('../assets/js/custom.js') }}"></script>

<!-- FORMVALIDATION JS -->
<script src="{{ asset('../assets/js/form-validation.js') }}"></script>

<!-- Internal Chat js-->
<script src="{{ asset('../assets/js/chat.js') }}"></script>

<!-- Color Theme js -->
<script src="{{ asset('../assets/js/themeColors.js') }}"></script>


<!-- CUSTOM JS -->
<script src="{{ asset('../assets/js/custom.js') }}"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- INTERNAL Notifications js -->
<script src="{{ asset('../assets/plugins/notify/js/rainbow.js') }}"></script>
<script src="{{ asset('../assets/plugins/notify/js/sample.js') }}"></script>
<script src="{{ asset('../assets/plugins/notify/js/jquery.growl.js') }}"></script>
<script src="{{ asset('../assets/plugins/notify/js/notifIt.js') }}"></script>

<!-- INTERNAL Vector js -->
<script src="{{ asset('../assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
<script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('assets/plugins/jvectormap/gdp-data.js') }}"></script>
<script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-asia-mill.js') }}"></script>
<script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-au-mill.js') }}"></script>
<script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-ca-lcc.js') }}"></script>
<script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-de-mill.js') }}"></script>
<script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-europe-mill-en.js') }}"></script>
<script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-in-mill.js') }}"></script>
<script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-uk-mill-en.js') }}"></script>
<script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-us-aea-en.js') }}"></script>
<script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-us-il-chicago-mill-en.js') }}"></script>
<script src="{{ asset('../assets/js/jvectormap.js')}}"></script>

<!-- INTERNAL APEXCHART JS -->
<script src="{{ asset('../assets/js/apexcharts.js') }}"></script>
<script src="{{ asset('../assets/plugins/apexchart/irregular-data-series.js') }}"></script>
 --}}


<script src="{{ asset('../assets/js/jquery.min.js') }}"></script>

<!-- BOOTSTRAP JS -->
<script src="{{ asset('../assets/plugins/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('../assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- SPARKLINE JS-->
<script src="{{ asset('../assets/js/jquery.sparkline.min.js') }}"></script>

<!-- Sticky js -->
<script src="{{ asset('../assets/js/sticky.js') }}"></script>

<!-- CHART-CIRCLE JS-->
<script src="{{ asset('../assets/js/circle-progress.min.js') }}"></script>

<!-- PIETY CHART JS-->
<script src="{{ asset('../assets/plugins/peitychart/jquery.peity.min.js') }}"></script>
<script src="{{ asset('../assets/plugins/peitychart/peitychart.init.js') }}"></script>

<!-- SIDEBAR JS -->
<script src="{{ asset('../assets/plugins/sidebar/sidebar.js') }}"></script>

<!-- Perfect SCROLLBAR JS-->
<script src="{{ asset('../assets/plugins/p-scroll/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('../assets/plugins/p-scroll/pscroll.js') }}"></script>
<script src="{{ asset('../assets/plugins/p-scroll/pscroll-1.js') }}"></script>

<!-- INTERNAL CHARTJS CHART JS-->
<script src="{{ asset('../assets/plugins/chart/Chart.bundle.js') }}"></script>
<script src="{{ asset('../assets/plugins/chart/rounded-barchart.js') }}"></script>
<script src="{{ asset('../assets/plugins/chart/utils.js') }}"></script>

<!-- INTERNAL SELECT2 JS -->
<script src="{{ asset('../assets/plugins/select2/select2.full.min.js') }}"></script>
<script src="{{ asset('../assets/js/select2.js') }}"></script>

<!-- INTERNAL Data tables js-->
<script src="{{ asset('../assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('../assets/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
<script src="{{ asset('../assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>

<!-- INTERNAL APEXCHART JS -->
<script src="{{ asset('../assets/js/apexcharts.js') }}"></script>
<script src="{{ asset('../assets/plugins/apexchart/irregular-data-series.js') }}"></script>

<!-- INTERNAL Flot JS -->
<script src="{{ asset('../assets/plugins/flot/jquery.flot.js') }}"></script>
<script src="{{ asset('../assets/plugins/flot/jquery.flot.fillbetween.js') }}"></script>
<script src="{{ asset('../assets/plugins/flot/chart.flot.sampledata.js') }}"></script>
<script src="{{ asset('../assets/plugins/flot/dashboard.sampledata.js') }}"></script>

<!-- INTERNAL Vector js -->
<script src="{{ asset('../assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
<script src="{{ asset('../assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>

<!-- SIDE-MENU JS-->
<script src="{{ asset('../assets/plugins/sidemenu/sidemenu.js') }}"></script>

<!-- TypeHead js -->
<script src="{{ asset('../assets/plugins/bootstrap5-typehead/autocomplete.js') }}"></script>
<script src="{{ asset('../assets/js/typehead.js') }}"></script>

<!-- INTERNAL INDEX JS -->
<script src="{{ asset('../assets/js/index1.js') }}"></script>

<!-- Color Theme js -->
<script src="{{ asset('../assets/js/themeColors.js') }}"></script>

<!-- CUSTOM JS -->
<script src="{{ asset('../assets/js/custom.js') }}"></script>

<!-- FORMVALIDATION JS -->
<script src="{{ asset('../assets/js/form-validation.js') }}"></script>

<!-- INTERNAL Notifications js -->
<script src="{{ asset('../assets/plugins/notify/js/jquery.growl.js') }}"></script>
<script src="{{ asset('../assets/plugins/notify/js/sample.js') }}"></script>

{{-- Chat JS --}}
<script src="{{ asset('../assets/js/chat.js') }}"></script>


<script>
    window.onload = function() {
        // Make the button visible
        var successBtn = document.getElementById('successBtn');
        if (successBtn) {
            // Automatically click the success button after it becomes visible
            successBtn.click();
        }
    };
    window.onload = function() {
        // Make the button visible
        var errorBtn = document.getElementById('errorBtn');
        if (errorBtn) {
            // Automatically click the success button after it becomes visible
            errorBtn.click();
        }
    };
</script>
<script>
    let folderIdToDelete = null; // Variable to hold the folder ID

    // Open the delete confirmation modal
    function openDeleteModal(folderId) {
        folderIdToDelete = folderId; // Set the folder ID dynamically
        $('#deleteMessage').text(`Are you sure you want to delete folder ${folderId}?`); // Dynamically set the message

        // Show the overlay and modal with fadeIn effect
        $('#modalOverlay').fadeIn(); // Show the overlay
        $('.modal-container').fadeIn(); // Show the modal
    }

    // Close the delete confirmation modal
    function closeDeleteModal() {
        $('#modalOverlay').fadeOut(); // Hide the overlay
        $('.modal-container').fadeOut(); // Hide the modal
        folderIdToDelete = null; // Reset the folder ID
    }

    // Handle the deletion when the user confirms
    $('#confirmDeleteBtn').click(function() {
        if (folderIdToDelete !== null) {
            $.ajax({
                url: '/folders/' + folderIdToDelete, // The folder's delete route
                type: 'DELETE',
                data: {
                    _token: '{{ csrf_token() }}' // CSRF token for security
                },
                success: function(response) {
                    // Handle success

                    // Close the delete modal
                    closeDeleteModal();

                    // Remove the folder element dynamically from the page
                    setTimeout(function() {
                        location.reload(); // Reload the page after 2 seconds
                    }, 2000); // Optional: adjust timeout duration

                    // Open the success modal (optional)
                    openSuccessModal();

                },
                error: function(xhr, status, error) {
                    // Handle error
                    alert('There was an error deleting the folder.');
                }
            });
        }
    });

    // Open the success modal (you can reuse the previous code for the success modal)
    function openSuccessModal() {
        $('#successModalOverlay').fadeIn(); // Show the overlay
        $('.modal-container').fadeIn(); // Show the modal
    }

    // Close the success modal
    function closeSuccessModal() {
        $('#successModalOverlay').fadeOut(); // Hide the overlay
        $('.modal-container').fadeOut(); // Hide the modal
    }
</script>

<script>
    // Get the elements for drag-and-drop functionality
    const dropzone = document.getElementById('dropzone');
    const fileInput = document.getElementById('file-input');
    const fileList = document.getElementById('file-list');

    // Open the file input when the dropzone is clicked
    dropzone.addEventListener('click', () => {
        fileInput.click();
    });

    // Handle dragover and drop events for drag-and-drop functionality
    dropzone.addEventListener('dragover', (e) => {
        e.preventDefault();
        dropzone.style.backgroundColor = '#f8f9fa';
    });

    dropzone.addEventListener('dragleave', () => {
        dropzone.style.backgroundColor = '';
    });

    dropzone.addEventListener('drop', (e) => {
        e.preventDefault();
        dropzone.style.backgroundColor = '';
        const files = e.dataTransfer.files;
        handleFiles(files);
    });

    // Handle file selection via input
    fileInput.addEventListener('change', (e) => {
        const files = e.target.files;
        handleFiles(files);
    });

    // Display the selected files in the list
    function handleFiles(files) {
        for (const file of files) {
            const listItem = document.createElement('li');
            listItem.textContent = file.name;
            fileList.appendChild(listItem);
        }
    }
</script>

<script>
    $(document).ready(function() {
        var copiedFolderId = null; // Store the ID of the copied folder
        var copiedParentId = null; // Store the parent ID of the copied folder

        // Handle Copy Folder action
        $('#copy-folder-link').on('click', function() {
            // Get the folder ID and parent ID
            copiedFolderId = $(this).data('folder-id');
            copiedParentId = $(this).data('parent-id');

            // Show the "Paste" action and hide the "Copy" action
            $('#copy-folder-link').hide();
            $('#paste-folder-link').show();

            alert('Folder copied! Now select a folder to paste it.');
        });

        // Handle Paste Folder action
        $('#paste-folder-link').on('click', function() {
            if (!copiedFolderId) {
                alert('No folder copied yet!');
                return;
            }

            var destinationFolderId = $(this).data(
                'folder-id'); // The folder where we want to paste the copied folder

            // Send AJAX request to paste the folder into the destination folder
            $.ajax({
                url: '/folders/' + copiedFolderId +
                    '/paste', // Backend route for pasting folder
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    destination_folder_id: destinationFolderId,
                    parent_id: copiedParentId, // Pass the parent ID to copy subfolders
                },
                success: function(response) {
                    alert(response.message);

                    // After pasting, reset the state and show the "Copy" option again
                    copiedFolderId = null;
                    copiedParentId = null;
                    $('#copy-folder-link').show();
                    $('#paste-folder-link').hide();

                    location.reload(); // Optionally reload to show updated folder structure
                },
                error: function(xhr, status, error) {
                    alert('Error pasting the folder: ' + error);
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        // Handle follow button click
        $('#followButton').on('click', function() {
            const organizationId = $(this).data('organization-id'); // Get the organization ID
            const button = $(this);

            // Send the follow request via AJAX
            $.ajax({
                url: `/follow/${organizationId}`, // The route for following an organization
                method: 'POST',
                data: {
                    _token: $('meta[name="csrf-token"]').attr(
                        'content'), // CSRF token for security
                },
                success: function(response) {
                    // On success, change the button to "Following"
                    button.html('<i class="fa fa-check"></i> <span>Following</span>');
                    button.prop('disabled', true); // Disable the button after follow
                    alert(response.success); // Show a success message
                },
                error: function(xhr) {
                    // On error, show an alert with the error message
                    alert(xhr.responseJSON.error || 'An error occurred');
                }
            });
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('typehead');
        const resultsContainer = document.getElementById('search-results');

        searchInput.addEventListener('input', function() {
            const query = searchInput.value;

            // Check if the search query is not empty (minimum 2 characters)
            if (query.length >= 2) {
                fetch(`/search-organizations?q=${query}`)
                    .then(response => response.json())
                    .then(data => {
                        if (data.organizations.length > 0) {
                            resultsContainer.style.display = 'block'; // Show the results container
                            resultsContainer.innerHTML = ''; // Clear previous results
                            data.organizations.forEach(org => {
                                const resultItem = document.createElement('div');
                                resultItem.classList.add('search-result-item');
                                resultItem.textContent = org
                                    .name; // Assuming 'name' is the organization name field
                                resultsContainer.appendChild(resultItem);
                            });
                        } else {
                            resultsContainer.style.display = 'none'; // Hide if no results
                        }
                    })
                    .catch(error => {
                        console.error('Error fetching organizations:', error);
                    });
            } else {
                resultsContainer.style.display =
                    'none'; // Hide results if query is less than 2 characters
            }
        });
    });
</script>

<script>
    function copyDetails(detail) {
        // Create a temporary input element to copy the phone number
        var tempInput = document.createElement('input');
        tempInput.value = detail;
        document.body.appendChild(tempInput);
        tempInput.select();
        document.execCommand('copy');
        document.body.removeChild(tempInput);

        // Optionally, alert the user that the phone number has been copied
        alert('Copied to clipboard!');
    }
</script>
<script>
    var options = {
        chart: {
            type: 'line'
        },
        series: [{
            name: 'Posts',
            data: [10, 15, 12, 20, 25, 30] // Example data
        }],
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun']
        }
    };

    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();
</script>

<script>
    // Automatically fade out the alert after 3 seconds (3000 ms)
    setTimeout(function() {
        $('.alert').fadeOut('slow');
    }, 3000);
</script>

</body>

</html>
